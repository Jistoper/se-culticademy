<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('admin.dashboard') }}" class="h1">
                    <img src="dist\img\logo.png" alt="Culticademy Logo" class="icon icon-tabler icon-tabler-brand-tabler"
                        width="48" height="48">
                    Culticademy
                </a>
                
            </div>
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
