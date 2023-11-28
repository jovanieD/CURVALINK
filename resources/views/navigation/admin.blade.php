<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm">
    <!-- Logo -->
    <a href="/admin" class="navbar-brand p-0">
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
            <a href="/admin" class="nav-item nav-link">Home</a>
            <a href="/admin-about" class="nav-item nav-link">About</a>
            <a href="/admin-offers" class="nav-item nav-link">Offers</a>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Updates</a>
                <div class="dropdown-menu m-0">
                    <a href="/admin-annoncement" class="dropdown-item">Announcements</a>
                    <a href="/admin-events" class="dropdown-item">Events</a>
                </div>
            </div>
            <a href="/admin/dashboard" class="nav-item nav-link">Requests</a>
            <a href="/admin/contact" class="nav-item nav-link">Contact</a>
            @guest
                @if (Route::has('login'))
                    <a class="btn-grad btn-primary " style="text-decoration: none;"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
            @else
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                        <span class="m-2">
                            <img style="border-radius: 25px; height: 30px; width: 30px;"
                                src="{{route('adminprofileimage') }}" alt="">
                        </span>
                    </a>

                    <!-- Dropdown Menu Items -->
                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{route('adminprofileimage') }}" alt class="rounded-circle"
                                                style="width: 60px; height:60px;" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block"> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                                        <small class="text-muted">Teacher</small>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <div class="dropdown-divider"></div>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/admin/dashboard">
                                <i class="fa fa-server m-2 text-warning"></i>
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/admin/schedule">
                                <i class="fa fa-calendar m-2 text-warning"></i>
                                <span class="align-middle">Schedule</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-tasks m-2 text-warning"></i>
                                <span class="align-middle">Post Update</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/admin/profile">
                                <i class="fa fa-user m-2 text-warning"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/admin/settings">
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
