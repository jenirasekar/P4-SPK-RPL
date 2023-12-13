@extends('layouts.master')

@section('content')
    {{-- Card produk --}}
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

        {{-- Produk --}}
        <div class="row produk">
            <div class="card col-4">
                <div class="card-body">
                    <div class="gambar-produk">

                    </div>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <div class="gambar-produk">

                    </div>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <div class="gambar-produk">

                    </div>
                </div>
            </div>
        </div>

        {{-- Keranjang --}}
        <div class="keranjang">

        </div>
    </div>
    </div>
    {{-- ./keranjang --}}
@endsection
