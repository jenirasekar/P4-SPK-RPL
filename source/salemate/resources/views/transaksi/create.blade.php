<div class="card">
    <div class="card-body">
        <form action="{{ route('detailtransaksi.store') }}" method="post" id="form_detail_transaksi">
            @csrf
            <input type="hidden" name="nama_produk" id="nama_produk" value="">
            <input type="hidden" name="id_transaksi" id="id_transaksi" value="">
            <input type="hidden" name="subtotal" id="subtotal">
            <div class="form-group row">
                <div class="col-2">
                    <label for="id_pelanggan">Pelanggan</label>
                </div>
                <div class="col-10">
                    <select name="id_pelanggan" id="id_pelanggan" class="form-control">
                        <option value="">Nama Pelanggan</option>
                        @foreach ($pelanggan_list as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="id_produk">Kode produk</label>
                </div>
                <div class="col-10">
                    <select name="id_produk" id="id_produk" class="form-control">
                        <option value="">Pilih produk</option>
                        @foreach ($produk as $item)
                            <option value="{{ $item->id }}" data-harga="{{ $item->harga }}">
                                {{ $item->nama_produk }} -
                                ({{ $item->stok }})
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="harga">Harga</label>
                </div>
                <div class="col-10">
                    <input type="number" name="harga" id="harga" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">
                    <label for="qty">QTY</label>
                </div>
                <div class="col-10">
                    <input type="number" name="qty" id="qty" class="form-control">
                </div>
            </div>

            <button type="button" class="btn btn-info" id="btn-tambah">Tambah</button>
        </form>
    </div>
</div>

<div class="card mt-1">
    <div class="card-body">
        <table class="table" id="table_produk">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>QTY</th>
                    <th>Subtotal</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody id="tbody_produk">
                @foreach ($detail_transaksi as $item)
                    <tr>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->qty }}</td>
                        <td class="subtotalcol">{{ $item->subtotal }}</td>
                        <td>
                            <a href="/transaksi/detail/delete?id={{ $item->id }}" class="fas fa-times"
                                data-id="{{ $item->id }}"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group row mt-5">
            <div class="col-1">
                <label for="subtotal">Total</label>
            </div>
            <div class="col-3">
                <input type="number" name="total" id="total" class="form-control" readonly value="0">
            </div>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-bayar">Bayar</button>
    </div>
</div>

{{-- modal untuk pembayaran --}}
<div class="modal fade" tabindex="-1" id="modal-bayar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('transaksi.store') }}" method="post" id="form_transaksi">
                @csrf
                <input type="hidden" name="id_transaksi" id="id_transaksi">
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="total">Total</label>
                        <input type="number" name="total" id="total-belanja" class="form-control" readonly>
                    </div>
                    <div class="mb-2">
                        <label for="dibayarkan">Dibayarkan</label>
                        <input type="number" name="dibayarkan" id="dibayarkan" class="form-control">
                    </div>
                    <div>
                        <label for="kembalian">Kembalian</label>
                        <input type="number" name="kembalian" id="kembalian-belanja" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-bayar">Bayar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // mengisi harga, nama produk, dan qty based on selected id_produk
        $('#id_produk').on('change', function() {
            let harga_terpilih = $('#id_produk option:selected').data('harga');
            let nama_produk = $('#id_produk option:selected').text();
            $('#harga').val(harga_terpilih);
            $('#nama_produk').val(nama_produk);
        });

        $('#qty').on('input', function() {
            updateSubtotal();
        });

        function updateSubtotal() {
            let qty = $('#qty').val();
            let harga = $('#harga').val();

            if (qty && harga) {
                let subtotal = parseInt(qty) * parseInt(harga);
                $('#subtotal').val(parseInt(subtotal));
            } else {
                $('#subtotal').val('');
            }
        }

        // memilih pelanggan
        $('#id_pelanggan').on('change', function() {
            $.ajax({
                type: 'GET',
                url: "{{ route('detailtransaksi.pending') }}",
                data: {
                    'id_pelanggan': $('#id_pelanggan').val()
                },
                success: function(response) {
                    $('#tbody_produk').empty();
                    let details = response.details;
                    details.forEach(detail => {
                        let newRow = `<tr id='detail-${detail.id}'>
                        <td>${detail.nama_produk}</td>
                        <td>${detail.qty}</td>
                        <td class="subtotalcol">${detail.subtotal}</td>
                        <td>
                            <a href="/transaksi/detail/delete?id=${detail.id}" class="fas fa-times"></a>
                        </td>
                    </tr>`;

                        $('#tbody_produk').append(newRow);
                    });
                    total = parseInt(response.total);
                    $('#total').val(total);
                    // total dalam modal
                    $('#total-belanja').val(total);
                    $('#id_transaksi').val(response.id_transaksi);
                }
            });
        });
        // trigger untuk tambah produk ke keranjang
        $('#btn-tambah').on('click', function(event) {
            event.preventDefault();

            let total = $('#total').val();

            $.ajax({
                type: 'POST',
                url: $('#form_detail_transaksi').attr('action'),
                data: $('#form_detail_transaksi').serialize(),
                success: function(response) {
                    let newRow = `<tr id='detail-${response.id}'>
                        <td>${response.nama_produk}</td>
                        <td>${response.qty}</td>
                        <td class="subtotalcol">${response.subtotal}</td>
                        <td>
                            <a href="/transaksi/detail/delete?id=${response.id}" class="fas fa-times"></a>
                        </td>
                    </tr>`;
                    let detailId = `#detail-${response.id}`;
                    let detail = $('#tbody_produk').find(detailId);
                    if (detail.length > 0) {
                        let subtotalDeleted = detail.find('.subtotalcol').text();
                        total = parseInt(total) - parseInt(subtotalDeleted);
                        detail.remove();
                    }
                    $('#tbody_produk').append(newRow);

                    total = parseInt(total) + parseInt(response.subtotal);
                    $('#total').val(total);

                    // total dalam modal
                    $('#total-belanja').val(total);
                    $('#id_transaksi').val(response.id_transaksi);
                    // clear input fields
                    $('#id_produk, #harga, #qty, #subtotal').val('');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        // trigger untuk delete 1 row di keranjang
        $(document).on('click', '.fa-times', function(event) {
            event.preventDefault();

            let delBtn = $(this);
            let delBtnUrl = delBtn.attr('href');

            $.ajax({
                url: delBtnUrl,
                method: 'GET',
                success: function(response) {
                    if (response && response.success) {
                        let trDeleted = delBtn.parents('tr');
                        let subtotalDeleted = trDeleted.find('.subtotalcol').text();
                        trDeleted.remove();
                        $('#total').val($('#total').val() - parseInt(subtotalDeleted))

                        // total dalam modal
                        $('#total-belanja').val($('#total').val());

                        $('#nama_produk').val(response.produk_name);
                        $('#id_transaksi').val(response.id_transaksi);

                        // clear input fields
                        $('#id_produk, #harga, #qty, #subtotal').val('');
                    } else {
                        console.log(response);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        // hitung kembalian
        function updateKembalian() {
            var totalBelanja = parseInt(document.getElementById('total-belanja').value);
            var dibayarkan = parseInt(document.getElementById('dibayarkan').value);

            var kembalian = dibayarkan - totalBelanja;

            document.getElementById('kembalian-belanja').value = kembalian;
        }

        document.getElementById('dibayarkan').addEventListener('input', function() {
            updateKembalian();
        });

        updateKembalian();

        // pembayaran (cetak struk)
        $('#btn-bayar').on('click', function(event) {
            event.preventDefault();

            var dibayarkanValue = $("#dibayarkan").val();
            var kembalianValue = $("#kembalian-belanja").val();
            var totalValue = $("#total-belanja").val();
            var id_transaksi = $("#id_transaksi").val();
            console.log(id_transaksi)
            $.ajax({
                type: 'POST',
                url: $('#form_transaksi').attr('action'),
                data: {
                    dibayarkan: dibayarkanValue,
                    kembalian: kembalianValue,
                    total: totalValue,
                    id: id_transaksi
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        window.open("{{ route('cetakStruk') }}?id=" + id_transaksi);
                        window.location = "{{ route('transaksi.monit') }}";
                    } else {
                        alert('Pembayaran gagal!');
                    }
                },
                error: function() {
                    alert('Something went wrong. Please try again.');
                }
            });
        });
    });
</script>
