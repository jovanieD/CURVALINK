<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title and Favicon -->
    <title>Curva National High School</title>
    <link rel="icon" href="{{asset('images/curva_logo.png')}}" type="image/x-icon">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="../assets/js/config.js"></script>

    <head>

    <body>

        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo">
                        <a href="/teacher" class="app-brand-link">
                            <img src="../images/curva_logo.png" alt class="w-px-40 h-auto rounded-circle" />
                            <span class="demo menu-text fw-bolder ms-2">Curva NHS</span>
                        </a>

                        <a href="javascript:void(0);"
                            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>

                    <ul class="menu-inner py-1">
                        <!-- Dashboard -->
                        <li class="menu-item active mt-3">
                            <a href="/teacher/dashboard" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-home-circle text-warning"></i>
                                <div data-i18n="Analytics">Dashboard</div>
                            </a>
                        </li>

                        <!-- Layouts -->

                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Documents</span>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-dock-top text-warning"></i>
                                <div>Requests</div>
                            </a>
                            <ul class="menu-sub ">
                                <li class="menu-item">
                                    <a href="/request/goodmoral" class="menu-link">
                                        <div data-i18n="Account">Good Moralasdf</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="Notifications">Document 2</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="Connections">Document 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Schedule -->
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">Release of
                                Documents</span>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-box text-warning"></i>
                                <div data-i18n="User interface">Schedules</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="/schedules/form137" class="menu-link">
                                        <div data-i18n="Alerts">Form 137</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/schedules/goodmoral" class="menu-link">
                                        <div data-i18n="Account">Good Moral</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/schedules/Certificates" class="menu-link">
                                        <div data-i18n="Account">Certification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- Updates --}}
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">UPDATES</span>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-box text-warning"></i>
                                <div data-i18n="User interface">Post Updates</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="ui-accordion.html" class="menu-link">
                                        <div>Announcement</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <div data-i18n="Alerts">Events</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- Account --}}
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">Account</span>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-box text-warning"></i>
                                <div data-i18n="User interface">Account</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="ui-accordion.html" class="menu-link">
                                        <div>My Profile</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/teacher/settings" class="menu-link">
                                        <div>Settings</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class=" bg-white m-3">
                        <li class="menu-item bg-warning rounded">
                            <a class="menu-link justify-content-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle text-black font-bold">Log Out</span>
                            </a>
                        </li>
                    </div>
                </aside>

                <div class="layout-page">
                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Place this tag where you want the button to render. -->

                                <h5 class="m-2"> {{ Auth::user()->name }}</h3>

                                    <!-- User -->
                                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                            data-bs-toggle="dropdown">
                                            <div class="avatar avatar-online">
                                                <img src="../assets/img/avatars/1.png" alt
                                                    class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </a>
                                        <!-- Dropdown Menu Items -->
                                        <ul class="dropdown-menu dropdown-menu-end">

                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar avatar-online">
                                                                <img src="{{asset('images/panda.jpg')}}" alt class="rounded-circle"
                                                                    style="width: 60px" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <span class="fw-semibold d-block">
                                                                {{ Auth::user()->name }}</span>
                                                            <small class="text-muted">Teacher</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <div class="dropdown-divider"></div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-home m-2 text-warning"></i>
                                                    <span class="align-middle">Homepage</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-tasks m-2 text-warning"></i>
                                                    <span class="align-middle">View Request</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="/teacher/dashboard">
                                                    <i class="fa fa-server m-2 text-warning"></i>
                                                    <span class="align-middle">Dashboard</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="#">
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
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    <!--/ User -->
                            </ul>
                        </div>
                    </nav>
                    @yield('teacher')
                </div>
            </div>
        </div>
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        
    </body>

</html>
