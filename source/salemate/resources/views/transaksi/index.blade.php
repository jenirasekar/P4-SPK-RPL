@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-6">
                <h1>Selamat datang, Jenira</h1>
                <p>Cari tau apa yang Anda butuhkan</p>
            </div>

            <div class="col-6 search-bar">
                <form role="search">
                    <button class="form-control me-2 d-flex" type="search">
                        <span><img src="{!! url('assets/img/icons/search-icon.svg') !!}" alt="search" width="30" height="30"></span>
                        <span>
                            <p>Cari...</p>
                        </span>
                    </button>
                </form>
            </div>
        </div>

        {{-- Card produk --}}
        <div class="row produk">
            <div class="card col-3">
                <div class="card-body">
                    <div class="gambar-produk">

                    </div>
                    <div class="detail-produk">
                        <p class="nama">
                            Nama Produk
                        </p>
                        <p class="deskripsi">
                            Deskripsi produk
                        </p>
                        <p class="harga">
                            Rp. 3.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <div class="gambar-produk">

                    </div>
                    <div class="detail-produk">
                        <p class="nama">
                            Nama Produk
                        </p>
                        <p class="deskripsi">
                            Deskripsi produk
                        </p>
                        <p class="harga">
                            Rp. 3.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <div class="gambar-produk">

                    </div>
                    <div class="detail-produk">
                        <p class="nama">
                            Nama Produk
                        </p>
                        <p class="deskripsi">
                            Deskripsi produk
                        </p>
                        <p class="harga">
                            Rp. 3.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <div class="gambar-produk">

                    </div>
                    <div class="detail-produk">
                        <p class="nama">
                            Nama Produk
                        </p>
                        <p class="deskripsi">
                            Deskripsi produk
                        </p>
                        <p class="harga">
                            Rp. 3.000
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- ./card produk --}}

        {{-- Keranjang --}}
        <div class="keranjang">
            <h3>Keranjang</h3>
            <div class="list-produk row">
                <div class="col-4 gambar-produk" style="background-color: black">
                    <img src="" alt="">
                </div>
                <div class="col-8">
                    <p class="nama">
                        Nama Produk
                    </p>
                    <p class="harga">
                        Rp.3.000
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- ./keranjang --}}
@endsection
