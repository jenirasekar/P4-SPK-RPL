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
        {{-- <div class="row produk">
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
        </div> --}}

        <div class="produk mt-5 d-flex flex-lg-wrap gap-4 p-1">
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell" width="120" height="120">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell" width="120" height="120">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell" width="120" height="120">
                </div>
            </div>
        </div>
        {{-- ./card produk --}}
    @endsection
