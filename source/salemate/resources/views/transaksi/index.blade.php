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
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="m16.893 16.92l3.08 3.08m-.889-8.419c0 4.187-3.383 7.581-7.556 7.581c-4.172 0-7.555-3.394-7.555-7.58C3.973 7.393 7.356 4 11.528 4c4.173 0 7.556 3.394 7.556 7.581" />
                        </svg>
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
            <h5>Keranjang</h5>
            <div class="list-produk row">
                <div class="col-4 gambar-produk" style="background-color: black">
                    <img src="" alt="">
                </div>
                <div class="col-8">
                    <p class="nama">
                        Nama Produk
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <p class="harga">
                                Rp. 3.000
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="qty-btn d-flex justify-content-between">
                                <button class="btn btn-sm btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"  
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M18 11H6a2 2 0 0 0 0 4h12a2 2 0 0 0 0-4" />
                                    </svg>
                                </button>
                                <input type="text" name="" id="" class="form-control" value="1000"
                                    readonly>
                                <button class="btn btn-sm btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ./keranjang --}}
@endsection
