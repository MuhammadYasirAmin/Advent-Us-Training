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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .parsley-errors-list li {
            list-style: none;
            color: red;

        }
    </style>
    @livewireStyles()
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <title>Home | AdventUs | Centre Of Excellence</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->

    <!-- barba container start -->
    <div class="barba-container" data-barba="container">


        <main class="main-content  ">

            <header data-anim="fade" data-add-bg=""
                class="header -type-4 -shadow bg-white border-bottom-light js-header">


                <div class="header__container py-10">
                    <div class="row justify-between items-center">

                        <div class="col-auto">
                            <div class="header-left d-flex items-center">

                                <div class="header__logo pr-30 xl:pr-20 md:pr-0">
                                    <a data-barba href="/">
                                        <img src="{{ asset('img/general/logo-dark.png') }}" alt="logo"
                                            style="width: 85px;">
                                    </a>
                                </div>

                                <div class="header-menu js-mobile-menu-toggle pl-30 xl:pl-20">
                                    <div class="header-menu__content">
                                        <div class="mobile-bg js-mobile-bg"></div>

                                        <div class="menu js-navList">
                                            <ul class="menu__nav text-dark-1 -is-active">
                                                
                                                <li><a href="/Classroom-Training-Courses">Classroom Courses</a></li>
                                                
                                                <li><a href="/Virtual-Training-Courses">Virtual Courses</a></li>

                                                <li>
                                                    <a data-barba href="/Our-Expertise">Mastery Areas</a>
                                                </li>

                                                <!--<li>-->
                                                <!--    <a data-barba href="/Locations">Locations</a>-->
                                                <!--</li>-->

                                                <li>
                                                    <a data-barba href="/Bespoke-Solutions">In-House</a>
                                                </li>
                                                
                                                <li><a href="/About-Us">About Us</a></li>

                                                <li>
                                                    <a href="/Contact-Us">Contact Us</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                            <div class="mobile-footer__number">
                                                <div class="text-17 fw-500 text-dark-1">Call us</div>
                                                <div class="text-17 fw-500 text-purple-1">000 111 22 3</div>
                                            </div>

                                            <div class="lh-2 mt-10">
                                                <div>329 Queensberry Street,<br> North Melbourne VIC 3051, Australia.
                                                </div>
                                                <div>hi@educrat.com</div>
                                            </div>

                                            <div class="mobile-socials mt-10">

                                                <a href="javascript:void(0);"
                                                    class="d-flex items-center justify-center rounded-full size-40">
                                                    <i class="fa fa-facebook"></i>
                                                </a>

                                                <a href="javascript:void(0);"
                                                    class="d-flex items-center justify-center rounded-full size-40">
                                                    <i class="fa fa-twitter"></i>
                                                </a>

                                                <a href="javascript:void(0);"
                                                    class="d-flex items-center justify-center rounded-full size-40">
                                                    <i class="fa fa-instagram"></i>
                                                </a>

                                                <a href="javascript:void(0);"
                                                    class="d-flex items-center justify-center rounded-full size-40">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                                        <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                                            <div class="icon-close text-dark-1 text-16"></div>
                                        </div>
                                    </div>

                                    <div class="header-menu-bg"></div>
                                </div>

                            </div>
                        </div>


                        <div class="col-auto">
                            <div class="header-right d-flex items-center">
                                <div class="header-right__icons text-white d-flex items-center">

                                    <div class="pr-20 sm:pr-15">
                                        <button class="d-flex items-center text-dark-1"
                                            data-el-toggle=".js-search-toggle">
                                            <i class="text-20 icon icon-search"></i>
                                        </button>

                                        <div class="toggle-element js-search-toggle">
                                            <div class="header-search pt-90 bg-white shadow-4">
                                                <div class="container">
                                                    <div class="header-search__field">
                                                        <div class="icon icon-search text-dark-1"></div>
                                                        <input type="text"
                                                            class="col-12 text-18 lh-12 text-dark-1 fw-500"
                                                            placeholder="What do you want to learn?">

                                                        <button
                                                            class="d-flex items-center justify-center size-40 rounded-full bg-purple-3"
                                                            data-el-toggle=".js-search-toggle">
                                                            <img src="img/menus/close.svg" alt="icon">
                                                        </button>
                                                    </div>

                                                    <div class="header-search__content mt-30">
                                                        <div class="text-17 text-dark-1 fw-500">Popular Right Now</div>

                                                        <div class="d-flex y-gap-5 flex-column mt-20">
                                                            <a href="courses-single-1.html" class="text-dark-1">The
                                                                Ultimate Drawing Course - Beginner to Advanced</a>
                                                            <a href="courses-single-2.html"
                                                                class="text-dark-1">Character Art School: Complete
                                                                Character Drawing Course</a>
                                                            <a href="courses-single-3.html"
                                                                class="text-dark-1">Complete Blender Creator: Learn 3D
                                                                Modelling for Beginners</a>
                                                            <a href="courses-single-4.html" class="text-dark-1">User
                                                                Experience Design Essentials - Adobe XD UI UX Design</a>
                                                            <a href="courses-single-5.html"
                                                                class="text-dark-1">Graphic Design Masterclass - Learn
                                                                GREAT Design</a>
                                                            <a href="courses-single-6.html" class="text-dark-1">Adobe
                                                                Photoshop CC – Essentials Training Course</a>
                                                        </div>

                                                        <div class="mt-30">
                                                            <button class="uppercase underline">PRESS ENTER TO SEE ALL
                                                                SEARCH RESULTS</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header-search__bg" data-el-toggle=".js-search-toggle"></div>
                                        </div>
                                    </div>


                                    <div class="d-none xl:d-block -before-border pl-20 sm:pl-15">
                                        <button class="text-dark-1 items-center"
                                            data-el-toggle=".js-mobile-menu-toggle">
                                            <i class="text-11 icon icon-mobile-menu"></i>
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <div class="content-wrapper  js-content-wrapper">

                {{ $slot }}

                <section class="layout-pt-lg layout-pb-lg mb-90 section-bg">
                    <div class="section-bg__item">
                        <img class="img-full rounded-16" src="{{ asset('img/home-3/cta/bg.png') }}" alt="image">
                    </div>

                    <div class="container">
                        <div class="row justify-center text-center">
                            <div class="col-xl-5 col-lg-6 col-md-11">

                                <div class="sectionTitle -light">

                                    <h2 class="sectionTitle__title ">Subscribe our Newsletter &</h2>

                                    <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                </div>

                            </div>
                        </div>

                        <div class="row mt-30 justify-center">
                            <div class="col-lg-6">
                                <form class="form-single-field -help" action="POST">
                                    <input type="text" placeholder="Your Email...">
                                    <button class="button -purple-1 text-white" type="submit">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="footer -type-5 pt-60">
                    <div class="container">
                        <div class="row y-gap-30 pb-60">
                            <div class="col-xl-3 col-lg-5 col-md-6">
                                <div class="footer-header__logo">
                                    <img src="{{ asset('img/general/logo-dark.png') }}" style="width: 175px;" alt="logo">
                                </div>

                                <div class="mt-30">
                                    <div class="text-17 text-dark-1">Call Us</div>
                                    <div class="text-17 lh-1 fw-500 text-purple-1 mt-5">000 111 22 33</div>
                                </div>

                                <div class="mt-30 pr-20">
                                    <div class="lh-17">329 Queensberry Street, North Melbourne VIC 3051, Australia.
                                        hi@educrat.com</div>
                                </div>

                                <div class="footer-header-socials mt-30">
                                    <div class="footer-header-socials__list d-flex items-center">
                                        <a href="javascript:void(0);"
                                            class="size-40 d-flex justify-center items-center"><i
                                                class="icon-facebook"></i></a>
                                        <a href="javascript:void(0);"
                                            class="size-40 d-flex justify-center items-center"><i
                                                class="icon-twitter"></i></a>
                                        <a href="javascript:void(0);"
                                            class="size-40 d-flex justify-center items-center"><i
                                                class="icon-instagram"></i></a>
                                        <a href="javascript:void(0);"
                                            class="size-40 d-flex justify-center items-center"><i
                                                class="icon-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-4 col-md-6">
                                <div class="text-17 fw-500 text-dark-1 uppercase mb-25">QUICK LINKS</div>
                                <div class="d-flex y-gap-10 flex-column">
                                    <a href="/Classroom-Training-Courses">Classroom Training</a>
                                    <a href="/Virtual-Training-Courses">Virtual Training</a>
                                    <a href="/Bespoke-Solutions">Bespoke Solutions</a>
                                    <a href="/Our-Expertise">Our Expertise</a>
                                    <a href="/Locations">Locations</a>
                                </div>
                            </div>

                            <div class="col-xl-5 col-lg-9">
                                <div class="text-17 fw-500 text-dark-1 uppercase mb-25">CATEGORIES</div>
                                <div class="row justify-between y-gap-20">
                                    <div class="col-lg-auto col-md-6">
                                        <div class="d-flex y-gap-10 flex-column">
                                            @foreach ($categories1 as $category)
                                                <a href="/Course/{{ $category->cate_Name }}">{{ $category->cate_Name }}</a>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="col-lg-auto col-md-6">
                                        <div class="d-flex y-gap-10 flex-column">
                                            @foreach ($categories2 as $category)
                                                <a href="/Course/{{ $category->cate_Name }}">{{ $category->cate_Name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-1 offset-xl-1 col-lg-3 col-md-6">
                                <div class="text-17 fw-500 text-dark-1 uppercase mb-25">LINKS</div>
                                <div class="d-flex y-gap-10 flex-column">
                                    <a href="/About-Us">About Us</a>
                                    <a href="/F-A-Qs">FAQS</a>
                                    <a href="/Contact-Us">Contact Us</a>
                                </div>
                            </div>
                        </div>

                        <div class="py-30 border-top-light">
                            <div class="row justify-between items-center y-gap-20">
                                <div class="col-auto">
                                    <div class="footer-footer__copyright d-flex items-center h-100">
                                        © 2022 Mae Training. All Right Reserved.
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                                        <div>
                                            <div class="d-flex x-gap-15">
                                                <a href="javascript:void(0);">Live Chat</a>
                                                <a href="/Privacy-Policy">Privacy Policy</a>
                                                <a href="/Terms-Conditions">Terms of Use</a>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="javascript:void(0);" class="button -md -light-4 px-20">
                                                <i class="icon-worldwide mr-5"></i>English
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </main>
    </div>
    <!-- barba container end -->
    @livewireScripts()
    <!-- JavaScript -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
