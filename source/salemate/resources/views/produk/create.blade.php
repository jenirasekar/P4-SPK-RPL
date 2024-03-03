<div class="row p-2">
    <div class="col-md-6">
        <div class="card">

            <div class="card-body">
                <h5><b>{{ $title }}</b></h5>

                <hr>

                @isset($produk)
                    <form
                        action="{{ auth()->user()->role == 'petugas' ? '/produk/' . $produk->id : '/admin/produk/' . $produk->id }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                    @endisset
                    <form action="{{ auth()->user()->role == 'petugas' ? '/produk' : '/admin/produk/' }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="" class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk"
                                class="form-control @error('nama_produk') is-invalid @enderror"
                                placeholder="Nama Produk"
                                value="{{ isset($produk) ? $produk->nama_produk : old('nama_produk') }}"
                                autocomplete="off">
                            @error('nama_produk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label">Nama Kategori</label>
                            <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror"
                                id="">
                                <option value="">--Kategori--</option>

                                @foreach ($kategori as $item)
                                    <option value=" {{ $item->id }} "
                                        {{ isset($produk) ? ($item->id == $produk->id_kategori ? 'selected' : '') : '' }}>
                                        {{ $item->nama_kategori }} </option>
                                @endforeach
                            </select>
                            @error('id_kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label"> Harga </label>
                            <input type="number" name="harga"
                                class="form-control @error('harga') is-invalid @enderror" placeholder="Harga"
                                value="{{ isset($produk) ? $produk->harga : old('harga') }}" autocomplete="off">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label"> Stok</label>
                            <input type="number" name="stok"
                                class="form-control @error('stok') is-invalid @enderror" placeholder="Stok"
                                value="{{ isset($produk) ? $produk->stok : old('stok') }}" autocomplete="off">
                            @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="" class="col-form-label"> Gambar</label>
                            <input type="file" name="gambar"
                                class="form-control-file @error('gambar') is-invalid @enderror" placeholder="Gambar"
                                value="{{ isset($produk) ? $produk->gambar : old('gambar') }}">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @isset($produk)
                            <img src="/ {{ $produk->gambar }} " width="100px" alt="">
                        @endisset
                        <br>

                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>


            </div>
        </div>
    </div>
</div>
