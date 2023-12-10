@extends('layouts.master')

@section('content')
    <div class="row mt-5">
        <div class="col-10">
            <h1>Home page</h1>
            <p>Silakan login untuk melihat data terbatas</p>
        </div>

        <div class="col-2">
            <a href="/" class="login-btn btn btn-danger btn-lg">
                <img src="{!! url('assets/img/icons/person-icon.svg') !!}" alt="person">
                Login
            </a>
        </div>
    </div>
@endsection
