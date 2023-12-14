<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title and Favicon -->
    <title>Martin M. Salimbangon National High School</title>
    <link rel="icon" href="{{asset('images/curva_logo.png')}}" type="image/x-icon">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate/owl.carousel.min.css') }}">
</head>

<body>
    <div id="app">

        @include('navigation.student')

        <!-- Page Content -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <x-footer></x-footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script src="{{ asset('js/auth/login.js') }}"></script>
    <script src="{{ asset('js/home/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/home/counterup.min.js') }}"></script>
    <script src="{{ asset('js/home/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/nav-highlight.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        new WOW().init();
    </script>
</body>

</html>
