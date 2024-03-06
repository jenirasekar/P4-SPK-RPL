<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Belanja</title>

    <!-- Google Font: Source Sans Pro -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');
    </style>
    <!-- Font Awesome Icons -->
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .text-center {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .th-detail,
        .td-detail {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .th-detail {
            background-color: #f2f2f2;
        }

        hr {
            margin: 20px 0;
        }

        .row {
            margin-bottom: 10px;
        }

        .row b {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Toko Sekar</h3>
                <p class="text-center">Jalan Gajah Mada 2B Beteng, Sidomekar, Semboro <br> Jember 68157</p>
                <table class="table">
                    <tr>
                        <td>
                            <p>ID: #{{ $transaksi->id }}</p>
                        </td>
                        <td>
                            <p>ID Pelanggan: #{{ $transaksi->id_pelanggan }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Kasir: {{ $transaksi->nama_kasir }}</p>
                        </td>
                        <td>
                            <p>{{ $transaksi->created_at }}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="th-detail">
                                <label for="" class="form-label">Produk</label>
                            </th>
                            <th class="th-detail">
                                <label for="" class="form-label">Harga</label>
                            </th>
                            <th class="th-detail">
                                <label for="" class="form-label">QTY</label>
                            </th>
                            <th class="th-detail">
                                <label for="" class="form-label">Subtotal produk</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_struk as $item)
                            <tr>
                                <td class="td-detail">
                                    <p>{{ $item->nama_produk }}</p>
                                </td>
                                <td class="td-detail">
                                    <p>{{ $item->harga_produk }}</p>
                                </td>
                                <td class="td-detail">
                                    <p>{{ $item->qty }}</p>
                                </td>
                                <td class="td-detail">
                                    <p>{{ $item->subtotal_produk }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                    <p><b>Total: </b>{{ $transaksi->total }}</p>
                </div>
                <div class="row">
                    <p><b>Tunai: </b>{{ $transaksi->dibayarkan }}</p>
                </div>
                <div class="row">
                    <p><b>Kembalian: </b>{{ $transaksi->kembalian }}</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body text-center">
            <p>Terima kasih telah berbelanja di toko kami</p>
            <p>Barang yang telah dibeli tidak dapat dikembalikan</p>
        </div>
    </div>
    </div>
</body>

</html>
