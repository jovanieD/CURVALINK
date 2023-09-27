<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Title and Favicon -->
    <title>Curva National High School</title>
    <link rel="icon" href="images/curva_logo.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="../assets/js/config.js"></script>

    <head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class=" h-25 d-flex flex-col shadow">
                        <a href="/teacher h-100">
                            <div class=" h-auto" >
                                <div class=" d-flex justify-content-center mt-3">
                                    <img src="../images/curva_logo.png" alt class=" w-25 h-auto rounded-circle" />
                                </div>
                                <div class=" d-flex justify-content-center ">
                                    <span class=""><h1>Curva NHS</h1></span>
                                </div>
                            </div>  
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
                                <div data-i18n="Account Settings">Requests</div>
                            </a>
                            <ul class="menu-sub ">
                                <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="Account">Document 1</div>
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
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">Release of Documents</span>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-box text-warning"></i>
                                <div data-i18n="User interface">Schedules</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="ui-accordion.html" class="menu-link">
                                        <div data-i18n="Accordion">Accordion</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <div data-i18n="Alerts">Alerts</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-badges.html" class="menu-link">
                                        <div data-i18n="Badges">Badges</div>
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
                                        <div data-i18n="Accordion">Announcement</div>
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
                                         <div data-i18n="Accordion">My Profile</div>
                                     </a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="ui-accordion.html" class="menu-link">
                                        <div data-i18n="Accordion">Settings</div>
                                    </a>
                                </li>
                             </ul>
                         </li>
                    </ul>

                    <div class=" bg-white m-3">
                        <li class="menu-item bg-warning rounded mb-1">
                            <a class="menu-link">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li class="menu-item bg-warning rounded">
                            <a class="menu-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle text-black">Log Out</span>
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

                                <h5 class="m-2"> {{Auth::user()->name}}</h3>

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="../assets/img/avatars/1.png" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="../assets/img/avatars/1.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block"> {{Auth::user()->name}}</span>
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
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="d-flex align-items-center align-middle">
                                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                    <span class="flex-grow-1 align-middle">Billing</span>
                                                    <span
                                                        class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/teacher/logout">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
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
