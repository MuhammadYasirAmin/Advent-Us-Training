<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @livewireStyles()
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Dashboard | Mae Training</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->

    <!-- barba container start -->
    <div class="barba-container" data-barba="container">


        <main class="main-content">


            <header class="header -dashboard -dark-bg-dark-1 js-header">
                <div class="header__container py-20 px-30">
                    <div class="row justify-between items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <div class="header__explore text-dark-1">
                                    <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                                        <i class="icon -dark-text-white icon-explore"></i>
                                    </button>
                                </div>

                                <div class="header__logo ml-30 md:ml-20">
                                    <a data-barba href="/">
                                        <img class="-light-d-none" src="{{ asset('img/general/logo-dark.png') }}"
                                            alt="logo">
                                        <img class="-dark-d-none" src="{{ asset('img/general/logo-dark.png') }}"
                                            alt="logo" style="max-width: 140px">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex items-center">

                                <div class="d-flex items-center sm:d-none">
                                    <div class="relative">
                                        <button
                                            class="js-darkmode-toggle text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                                            <i class="text-24 icon icon-night"></i>
                                        </button>
                                    </div>

                                    <div class="relative">
                                        <button data-maximize
                                            class="d-flex text-light-1 items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                                            <i class="text-24 icon icon-maximize"></i>
                                        </button>
                                    </div>

                                    <div class="relative">
                                        <a href="#"
                                            class="d-flex items-center text-light-1 justify-center size-50 rounded-16 -hover-dshb-header-light"
                                            data-el-toggle=".js-notif-toggle">
                                            <i class="text-24 icon icon-notification"></i>
                                        </a>

                                        <div class="toggle-element js-notif-toggle">
                                            <div
                                                class="toggle-bottom -notifications bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                                                <div class="py-30 px-30">
                                                    <div class="y-gap-40">

                                                        <div class="d-flex items-center ">
                                                            <div class="shrink-0">
                                                                <img src="{{ asset('img/dashboard/actions/1.png') }}" alt="image">
                                                            </div>
                                                            <div class="ml-12">
                                                                <h4 class="text-15 lh-1 fw-500">Your resume updated!
                                                                </h4>
                                                                <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative d-flex items-center ml-10">
                                    <a href="#" data-el-toggle=".js-profile-toggle">
                                        <img class="size-50" src="{{ asset('img/misc/user-profile.png') }}" alt="image">
                                    </a>

                                    <div class="toggle-element js-profile-toggle">
                                        <div
                                            class="toggle-bottom -profile bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                                            <div class="px-30 py-30">

                                                <div class="sidebar -dashboard">

                                                    <div class="sidebar__item -is-active -dark-bg-dark-2">
                                                        <a href="/Dashboard"
                                                            class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                                            <i class="text-20 icon-discovery mr-15"></i> Dashboard
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/Contact-Leads"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-play-button mr-15"></i> Contact Leads
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/Enquiry-Leads"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-play-button mr-15"></i> Enquiry Leads
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/Bespoke-Leads"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-play-button mr-15"></i> Bespoke Leads
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/My Courses"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-play-button mr-15"></i> My Courses
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/Create-Courses"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-bookmark mr-15"></i> Create Courses
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/Create-Venue"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-message mr-15"></i> Create Venue
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/Create-Category"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-list mr-15"></i> Create Category
                                                        </a>
                                                    </div>

                                                    <div class="sidebar__item ">
                                                        <a href="/LogOut"
                                                            class="d-flex items-center text-17 lh-1 fw-500 ">
                                                            <i class="text-20 icon-power mr-15"></i> Logout
                                                        </a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="content-wrapper js-content-wrapper">
                <div class="dashboard -home-9 js-dashboard-home-9">
                    <div class="dashboard__sidebar scroll-bar-1">


                        <div class="sidebar -dashboard">

                            <div class="sidebar__item -is-active -dark-bg-dark-2">
                                <a href="/Dashboard"
                                    class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                    <i class="text-20 icon-discovery mr-15"></i> Dashboard
                                </a>
                            </div>

                            <div class="sidebar__item ">
                                <a href="/Contact-Leads" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-play-button mr-15"></i> Contact Leads
                                </a>
                            </div>

                            <div class="sidebar__item ">
                                <a href="/Enquiry-Leads" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-play-button mr-15"></i> Enquiry Leads
                                </a>
                            </div>

                            <div class="sidebar__item ">
                                <a href="/Bespoke-Leads" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-play-button mr-15"></i> Bespoke Leads
                                </a>
                            </div>

                            <div class="sidebar__item ">
                                <a href="/Create-Course" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-bookmark mr-15"></i> Create Courses
                                </a>
                            </div>

                            <div class="sidebar__item ">
                                <a href="/Create-Venue" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-message mr-15"></i> Create Venue
                                </a>
                            </div>

                            <div class="sidebar__item ">
                                <a href="/Create-Category" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-list mr-15"></i> Create Category
                                </a>
                            </div>

                            <div class="sidebar__item ">
                                <a href="/LogOut" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-power mr-15"></i> Logout
                                </a>
                            </div>

                        </div>


                    </div>

                    <div class="dashboard__main">
                        <div class="dashboard__content bg-light-4">

                            {{ $slot }}

                        </div>

                        <footer class="footer -dashboard py-30">
                            <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-13 lh-1">© 2022 Mae Training. All Right Reserved.</div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="d-flex items-center flex-wrap x-gap-20">
                                            <div>
                                                <a href="/Privacy-Policy" class="text-13 lh-1">Privacy Policy</a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-13 lh-1">Live Chat</a>
                                            </div>
                                            <div>
                                                <a href="/Contact-Us" class="text-13 lh-1">Contact Us</a>
                                            </div>
                                            <div>
                                                <a href="/Terms-Conditions" class="text-13 lh-1">Terms of Use</a>
                                            </div>
                                        </div>

                                        <button
                                            class="button -md -rounded bg-light-4 text-light-1 ml-30">English</button>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- barba container end -->
    @livewireScripts()
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
