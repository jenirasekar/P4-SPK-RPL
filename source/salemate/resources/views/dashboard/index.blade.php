@extends('layouts.master')

@section('content')
    <div class="mt-5">
        <h1>Selamat datang, Jenira</h1>
        <p>Anda login sebagai admin</p>
    </div>

    <div class="waves">
        <img src="{!! url('assets/img/wave.svg') !!}" alt="wave" class="wave1">
        <img src="{!! url('assets/img/wave2.svg') !!}" alt="wave" class="wave2">
        <img src="{!! url('assets/img/wave3.svg') !!}" alt="wave" class="wave3">
        <div class="wall"></div>
    </div>
@endsection
