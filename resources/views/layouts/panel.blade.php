<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Adventus - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/dashbord_navitaion.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- Title -->
<title>@yield('title') | AdventUs | Centre Of Excellence</title>
<!-- Favicon -->
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="" alt="">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="">
		            <img class="logo2 img-fluid" src="">
                    <span>Adventus</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <ul class="header_user_notif pull-right dn-smd">
	                <li class="user_notif">
						<div class="dropdown">
						    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
						    <div class="dropdown-menu notification_dropdown_content">
								<div class="so_heading">
									<p>Notifications</p>
								</div>
								<div class="so_content" data-simplebar="init">
									<ul>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
									</ul>
								</div>
								<a class="view_all_noti text-thm" href="#">View all alerts</a>
						    </div>
						</div>
	                </li>
	                <li class="user_notif">
						<div class="dropdown">
						    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
						    <div class="dropdown-menu notification_dropdown_content">
								<div class="so_heading">
									<p>Notifications</p>
								</div>
								<div class="so_content" data-simplebar="init">
									<ul>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
										<li>
											<h5>Status Update</h5>
											<p>This is an automated server response message. All systems are online.</p>
										</li>
									</ul>
								</div>
								<a class="view_all_noti text-thm" href="#">View all alerts</a>
						    </div>
						</div>
	                </li>
	                <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"></a>
						    <div class="dropdown-menu">
						    	<div class="user_set_header">
						    		<img class="float-left" src="images/team/e1.png" alt="e1.png">
							    	<p>Kim Hunter <br><span class="address">kimhunter@gmail.com</span></p>
						    	</div>
						    	<div class="user_setting_content">
									<a class="dropdown-item active" href="#">My Profile</a>
									<a class="dropdown-item" href="#">Messages</a>
									<a class="dropdown-item" href="#">Purchase history</a>
									<a class="dropdown-item" href="#">Help</a>
									<a class="dropdown-item" href="#">Log out</a>
						    	</div>
						    </div>
						</div>
			        </li>
	            </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
	        <ul class="header_user_notif dashbord_pages_mobile_version pull-right">
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
					    <div class="dropdown-menu notification_dropdown_content">
							<div class="so_heading">
								<p>Notifications</p>
							</div>
							<div class="so_content" data-simplebar="init">
								<ul>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
								</ul>
							</div>
							<a class="view_all_noti text-thm" href="#">View all alerts</a>
					    </div>
					</div>
                </li>
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
					    <div class="dropdown-menu notification_dropdown_content">
							<div class="so_heading">
								<p>Notifications</p>
							</div>
							<div class="so_content" data-simplebar="init">
								<ul>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
								</ul>
							</div>
							<a class="view_all_noti text-thm" href="#">View all alerts</a>
					    </div>
					</div>
                </li>
                <li class="user_setting">
					<div class="dropdown">
                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"></a>
					    <div class="dropdown-menu">
					    	<div class="user_set_header">
					    		<img class="float-left" src="images/team/e1.png" alt="e1.png">
						    	<p>Kim Hunter <br><span class="address">kimhunter@gmail.com</span></p>
					    	</div>
					    	<div class="user_setting_content">
								<a class="dropdown-item active" href="#">My Profile</a>
								<a class="dropdown-item" href="#">Messages</a>
								<a class="dropdown-item" href="#">Purchase history</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="#">Log out</a>
					    	</div>
					    </div>
					</div>
		        </li>
            </ul>
			<div class="header stylehome1 dashbord_mobile_logo dashbord_pages">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="" alt="">
		            <span>Adventus</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item"></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
	</div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-4 col-xl-2 dn-smd pl0">
					<div class="user_board">
						<div class="user_profile">
							<div class="media">
							  	<div class="media-body">
							    	<h4 class="mt-0">Focus Area</h4>
								</div>
							</div>
						</div>
						<div class="dashbord_nav_list">
							<ul>
								<li><a href="/WebApp/Dashboard"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
								<li><a href="/WebApp/DataLeads"><span class="flaticon-online-learning"></span> Data Leads</a></li>
								<li><a href="/WebApp/Create-Category"><span class="flaticon-speech-bubble"></span> Create Category</a></li>
								<li><a href="/WebApp/Create-Venue"><span class="flaticon-rating"></span> Create Venue</a></li>
								<li><a href="/WebApp/Create-Course"><span class="flaticon-add-contact"></span> Create Course</a></li>
							</ul>
							<h4>Account</h4>
							<ul>

								<li><a href="/WebApp/Logout"><span class="flaticon-logout"></span> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-8 col-xl-10">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-991">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li class="active"><a href="/WebApp/Dashboard"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                                        <li><a href="/WebApp/DataLeads"><span class="flaticon-online-learning"></span> Data Leads</a></li>
                                        <li><a href="/WebApp/Create-Category"><span class="flaticon-speech-bubble"></span> Create Category</a></li>
                                        <li><a href="/WebApp/Create-Venue"><span class="flaticon-rating"></span> Create Venue</a></li>
                                        <li><a href="/WebApp/Create-Course"><span class="flaticon-add-contact"></span> Create Course</a></li>
									</ul>
								</div>
							</div>
						</div>
						{{ $slot }}
					</div>
					<div class="row mt50">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p class="color-black2">Copyright Adventus © 2022. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/chart-custome.js') }}"></script>
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
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dashboard-script.js') }}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
