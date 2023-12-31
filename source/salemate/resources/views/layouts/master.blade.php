<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SaleMate</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{!! url('assets/css/bootstrap.min.css') !!}">

    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,800&display=swap"
        rel="stylesheet">

    {{-- my CSS --}}
    <link rel="stylesheet" href="{!! url('assets/css/style.css') !!}">
</head>

<body>
    <div class="wrapper">
        {{-- Sidebar --}}
        <div class="sidebar-wrapper">
            @include('layouts.sidebar')
        </div>

        {{-- Content --}}
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="{!! url('assets/js/bootstrap.bundle.min.js') !!}"></script>

    {{-- Iconify --}}
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>
</body>

</html>
