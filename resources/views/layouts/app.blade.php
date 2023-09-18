<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Curva National High School</title>
    <link rel="icon" href="images/curva_logo.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ secure_asset('css/auth/login.css') }}">
    {{-- @vite(['resources/css/auth/login.css']) --}}
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    {{-- CSS  --}}
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate/owl.carousel.min.css') }}">

    {{-- @vite(['resources/css/style.css'])
    @vite(['resources/css/animate/animate.css'])
    @vite(['resources/css/animate/animate.min.css'])
    @vite(['resources/css/animate/owl.carousel.min.css']) --}}

    {{-- SCRIPT  --}}
    {{-- @vite(['resources/js/auth/login.js'])
    @vite(['resources/js/home/waypoints.min.js'])
    @vite(['resources/js/home/counterup.min.js'])
    @vite(['resources/js/home/owl.carousel.min.js'])
    @vite(['resources/js/nav-highlight.js'])
    @vite(['resources/js/main.js']) --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        // Initialize WOW.js
        new WOW().init();
    </script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"> <img class="img-fluid rounded m-2" src="images/curva_logo.png"
                        style="width: 50px; height: 50px;">Curva NHS</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Offers</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Updates</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Announcements</a>
                            <a href="detail.html" class="dropdown-item">Events</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                @guest
                    @if (Route::has('login'))
                        <a class="btn-grad btn-primary py-2 px-4 ms-3" class="nav-link"
                            style="text-decoration: none;
                        "
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                @else
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class=" m-2"> <img
                                    style="border-radius:25px; height: 30px; width:30px;" src="images/curva_logo.png"
                                    alt=""></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-shrink-1 bd-highlight"><i class=" fa f"></i></div>
                                <div class="p-2 w-100 bd-highlight">Flex item</div>

                            </div>
                            {{-- <a class="dropdown-item ml-3" href=""> <i class=" fa fa-user"></i> Profile
                            </a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a> --}}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

        </div>
    @endguest
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <x-footer></x-footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ secure_asset('js/auth/login.js') }}"></script>
    <script src="{{ secure_asset('js/home/waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('js/home/counterup.min.js') }}"></script>
    <script src="{{ secure_asset('js/home/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('js/nav-highlight.js') }}"></script>
    <script src="{{ secure_asset('js/main.js') }}"></script>
</body>

</html>
