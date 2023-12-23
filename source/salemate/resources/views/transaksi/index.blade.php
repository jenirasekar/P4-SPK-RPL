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
        <div class="produk mt-5 d-flex flex-lg-wrap gap-4 justify-content-center">
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="{!! url('assets/img/bluebell.jpg') !!}" alt="blue bell">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Blue Bell</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0">Rp. 3.000</p>
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
                        </svg>
                    </button>
                </div>
            </div>
        {{-- ./card produk --}}
    @endsection
