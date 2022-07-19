<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="@yield('keywords')">
<meta name="description" content="@yield('description')">
<meta name="Author" content="Bloody Spyder">

@livewireStyles()
<!-- css file -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- Title -->
<title>@yield('title') | AdventUs | Centre Of Excellence</title>
<!-- Favicon -->
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="{{ asset('images/header-logo.png') }}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="/" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{ asset('images/header-logo.png') }}" alt="header-logo.png" style="width: 150px;">
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            <li><a href="/Classroom-Courses">Classroom Courses</a></li>
                    <li><a href="/Virtual-Courses">Virtual Courses</a></li>
                    <li><a href="/Mastery-Areas">Mastery Areas</a></li>
                    <li><a href="/In-House">In-House</a></li>
                    <li><a href="/About-Us">About Us</a></li>
                    <li><a href="/Contact-Us">Contact Us</a></li>
                    {{-- <li><a href="/Login-Form"><span class="flaticon-user"></span> Login</a></li>
                    <li><a href="/Registeration-Form"><span class="flaticon-edit"></span> Register</a></li> --}}
		        </ul><!-- Button trigger modal -->
		    </nav>
		</div>
	</header>

	<!--  -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="{{ asset('images/header-logo.png') }}" alt="header-logo.png" style="width: 170px;">
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item">
	                	<div class="search_overlay">
						  <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
						    <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
						  </a>
							<div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
							    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
							    <div id="mk-fullscreen-search-wrapper2">
							      <form method="get" id="mk-fullscreen-searchform2">
							        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
							        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
							      </form>
							    </div>
							</div>
						</div>
					</li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><a href="/Classroom-Courses">Classroom Courses</a></li>
				<li><a href="/Virtual-Courses">Virtual Courses</a></li>
				<li><a href="/Mastery-Areas">Mastery Areas</a></li>
				<li><a href="/In-House">In-House</a></li>
				<li><a href="/About-Us">About Us</a></li>
				<li><a href="/Contact-Us">Contact Us</a></li>
				{{-- <li><a href="/Login-Form"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="/Registeration-Form"><span class="flaticon-edit"></span> Register</a></li> --}}
			</ul>
		</nav>
	</div>

    {{ $slot }}

      <!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
					<div class="footer_contact_widget">
						<h4>Contact</h4>
						<p>92 Sheikh Zayed Rd - </p>
						<p>Trade Centre - DIFC - Dubai</p>
						<p>(+971) 58971 42</p>
						<p>info@adventustraining.com</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_company_widget">
						<h4>Company</h4>
						<ul class="list-unstyled">
							<li><a href="/About-Us">About Us</a></li>
							<li><a href="/Contact-Us">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_program_widget">
						<h4>Training Formats</h4>
						<ul class="list-unstyled">
							<li><a href="/Classroom-Courses">Classroom Courses</a></li>
							<li><a href="/Virtual-Courses">Virtual Courses</a></li>
							<li><a href="/In-House">In House Training</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_support_widget">
						<h4>Support</h4>
						<ul class="list-unstyled">
							<li><a href="javascript:void(0);">Live Chat</a></li>
							<li><a href="/Terms-Conditions">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
					<img class="img-fluid" src="{{ asset('images/header-logo.png') }}" alt="header-logo.png">
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_bottom_area pt25 pb25">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="copyright-widget text-center">
						<p>Copyright AdventUs © 2022. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->
@livewireScripts()
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/progressbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
