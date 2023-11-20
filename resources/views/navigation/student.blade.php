<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm">
    <!-- Logo -->
    <a href="/" class="navbar-brand p-0">
        <h1 class="m-0">
            <img class="img-fluid rounded m-2" src="images/curva_logo.png" style="width: 50px; height: 50px;">
            Curva NHS
        </h1>
    </a>

    <!-- Toggle Button for Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/offers" class="nav-item nav-link">Offers</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Updates</a>
                <div class="dropdown-menu m-0">
                    <a href="/announcement" class="dropdown-item">Announcements</a>
                    <a href="/event" class="dropdown-item">Events</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Requisition</a>
                <div class="dropdown-menu m-0">
                    <a href="team.html" class="dropdown-item">Certification</a>
                    <a href="feature.html" class="dropdown-item">Good Moral</a>
                    <a href="price.html" class="dropdown-item">Form 138</a>
                    <a href="quote.html" class="dropdown-item">Request Status</a>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Contact</a>
            @guest
                @if (Route::has('login'))
                    <a class="btn-grad btn-primary " style="text-decoration: none;" href="{{ route('login') }}">Log In</a>
                @endif
            @else
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                        <span class="m-2">
                            <img style="border-radius: 25px; height: 30px; width: 30px;"
                                src="{{ Auth::user()->profile_image }}" alt="">
                        </span>
                    </a>

                    <!-- Dropdown Menu Items -->
                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ Auth::user()->profile_image }}" alt class="rounded-circle"
                                                style="width: 60px; height:60px;" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block"> {{ Auth::user()->name }}</span>
                                        <small class="text-muted">Student</small>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <div class="dropdown-divider"></div>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/request/certificate">
                                <i class="fa fa-list-alt m-2 text-warning"></i>
                                <span class="align-middle">Request a Document</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/dashboard">
                                <i class="fa fa-server m-2 text-warning"></i>
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/profile">
                                <i class="fa fa-user m-2 text-warning"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/settings">
                                <i class="fa fa-cog m-2 text-warning"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off m-2 text-warning"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Logout Form (Hidden) -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endguest


        </div>
    </div>
</nav>
