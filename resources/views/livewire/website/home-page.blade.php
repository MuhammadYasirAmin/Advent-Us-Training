
@section('title', 'Home')

<!-- 2nd Home Slider -->
<style>
    #homepage-video {
        position: absolute;
        top: -200px;
        left: 0;
        width: 100%;
        height: auto;
        filter: brightness(50%);
    }
    
</style>
<div class="home2">
    <div class="container-fluid p0">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-banner-wrapper">
                    <div class="banner-style-one">
                        <div class="slide slide-one sh2">
                            <video autoplay="" muted="" loop="" id="homepage-video">
                                <source src="{{ asset('1.mp4') }}" type="video/mp4">
                            </video>
                            <div class="container" style="background-color: rgba(13, 15, 19, 0.5);">
                                <div class="row">
                                    <div class="col-lg-12 text-left">
                                        <h3 class="banner-title">Your One Stop </br> Training Solution</h3>
                                        <p>The modern business world needs ambitious individuals and organisation. </br> Advance your professional skill and knowledge with our full-scale and dynamic training courses.</p>
                                        <div class="btn-block">
                                            <a href="/Classroom-Courses" class="banner-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide-one sh2">
                            <video autoplay="" muted="" loop="" id="homepage-video">
                                <source src="{{ asset('1.mp4') }}" type="video/mp4">
                            </video>
                            <div class="container" style="background-color: rgba(13, 15, 19, 0.5);">
                                <div class="row">
                                    <div class="col-lg-12 text-left">
                                        <h3 class="banner-title">Your One Stop </br> Training Solution</h3>
                                        <p>The modern business world needs ambitious individuals and organisation. </br> Advance your professional skill and knowledge with our full-scale and dynamic training courses.</p>
                                        <div class="btn-block">
                                            <a href="/Virual-Courses" class="banner-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.main-banner-wrapper -->
            </div>
        </div>
    </div>
</div>

<!-- School Category Courses -->
<section id="our-top-courses" class="our-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Training Formats</h3>
                    <p>Training that Suits your Learning</p>
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="top_courses">
                    <div class="thumb">
                        <img class="img-whp" src="{{ asset('images/courses/t1.jpeg') }}" alt="t1.jpg">
                        <div class="overlay">
                            <div class="tag" style="width: auto;">Classroom Training</div>
                            <div class="icon"><span class="flaticon-like"></span></div>
                            <a class="tc_preview_course" href="javascript:void(0);">Face-to-Face in Learning Experience</a>
                        </div>
                    </div>
                    <div class="details">
						<div class="tc_content">
							<p class="text-center text-dark">A meticulously curated in-depth list of professional topics which are helpful for your in-person training requirements</p>
						</div>
					</div>
                </div>
             </div>

             <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="top_courses">
                    <div class="thumb">
                        <img class="img-whp" src="{{ asset('images/courses/t2.jpeg') }}" alt="t2.jpg">
                        <div class="overlay">
                            <div class="tag" style="width: auto;">Virtual Training</div>
                            <div class="icon"><span class="flaticon-like"></span></div>
                            <a class="tc_preview_course" href="javascript:void(0);">An On-Screen Gateway Learning</a>
                        </div>
                    </div>
                    <div class="details">
						<div class="tc_content">
							<p class="text-center text-dark">Calibrated effective, interactive, and verstile training courses thus participants can remotely attend our top tier professional development opportunities.</p>
						</div>
					</div>
                </div>
             </div>

             <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="top_courses">
                    <div class="thumb">
                        <img class="img-whp" src="{{ asset('images/courses/t3.jpeg') }}" alt="t3.jpg">
                        <div class="overlay">
                            <div class="tag" style="width: auto;">In-House</div>
                            <div class="icon"><span class="flaticon-like"></span></div>
                            <a class="tc_preview_course" href="javascript:void(0);">Customised Skills Support Advancement</a>
                        </div>
                    </div>
                    <div class="details">
						<div class="tc_content">
							<p class="text-center text-dark">Highly recommendable to organisations who are looking for exclusive training course for their employees.</p>
						</div>
					</div>
                </div>
             </div>
         </div>
    </div>
</section>

<!-- about Us home6 -->
<section class="home6_about pt35 bgc-f9">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0 text-white">Our Locations</h3>
                    <p class="text-white">Learning Across the Globe</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($venue_obj as $venue)

                <div class="col-sm-6 col-lg-6 col-xl-3">
                    <div class="hvr_img_box_container">
                        <div class="hvr_img_box imgs" style="background-image: url(Uploads/VenueCovers/{{ $venue->venue_Image }});"></div>
                        <div class="overlay">
                            <div class="details" style="height: 190px;">
                                <h5>{{ $venue->venues_name }}</h5>
                                <a href="/Course/Venues/{{ $venue->venues_name }}">View Courses <span class="span flaticon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

<!-- School category courses -->
<section class="school-category-courses pt30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Mastery Areas</h3>
                    <p>Prosper and Succeed in Your Profession</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($category_list as $category)
                <div class="col-sm-6 col-lg-3">
                    <div class="img_hvr_box home3" style="background-image: url(Uploads/Categories/{{ $category->cate_Image }});">
                        <div class="overlay">
                            <div class="details">
                                <a href="/Course/Category/{{ $category->cate_Name }}"><h5>{{ $category->cate_Name }}</h5></a>
                                <p>Over 800 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-lg-6 offset-lg-3">-->
        <!--        <div class="courses_all_btn home3 text-center">-->
        <!--            <a class="btn btn-transparent" href="/Mastery-Areas">View All</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>

<!-- Our Popular Courses -->
<section class="popular-courses bgc-thm2">
    <div class="container-fluid style2">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0 color-white">Popular Courses</h3>
                    <p class="color-white">In-Demand List</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_course_slider">
                    @foreach ($courses_lists as $course)
                        <div class="item">
                            <div class="top_courses home2 mb0">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('Uploads/CourseCover') }}/{{ $course->course_Image }}" alt="t1.jpg">
                                    <div class="overlay">
                                        <a class="tc_preview_course" href="/Course-Detail/{{ $course->Course_Title }}/{{ $course->CID }}">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>{{ $course->Course_Duration }}-Days of Interactive Courses</p>
                                        <h5>{{ $course->Course_Title }}</h5>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">{{ date('F d ', strtotime($course->Venue_Date)) }}
                                                -
                                                {{ date('F d, Y', strtotime($course->Venue_Date . ' + ' . $course->Course_Duration . 'days')) }}</a></li> </br>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">{{ $course->Venue_Name }}</a></li>
                                        </ul>
                                        <div class="tc_price text-center">${{ number_format(intval($course->Venue_Fee)) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
	
	<!-- Divider -->
	<section class="divider3 parallax bgi4 pt90 pb90" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-7">
					<div class="divider-two mt45 home11">
						<!--<p class="color-white">Get 100 Online Courses for Free</p>-->
						<!--<h1 class="color-white text-capitalize">REGISTER TO GET IT</h1>-->
				  <!--      <div id="countdown" class="row countdown home11"></div>-->
					</div>
				</div>
			    <div class="col-lg-6 col-xl-5">
					<div class="singup-course-form">
						<div class="scf_heading text-center mt5 mb25">
							<h4 class="title m0">Create Free Account To Get</h4>
							<h4 class="title m0"></h4>
						</div>
						<div class="scf_content">
							<div id="mc_embed_signup">
								<form method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp-form" target="_blank" novalidate>
								    <div id="mc_embed_signup_scroll">
										<div class="mc-field-group mb0">
											<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Your Name">
										</div>
										<div class="mc-field-group mb0">
											<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
										</div>
										<div class="mc-field-group mb0">
											<input type="number" value="" name="PHONE" class="required phone" id="mce-PHONE" placeholder="Phone">
										</div>
										<div class="mc-field-group mb0">
											<input type="text" value="" name="FNAME" class="" id="mce-Mseg" placeholder="Your Name">
										</div>
										<button type="submit" class="btn btn-lg btn-thm4 btn-block mb5">Get It Now</button>
								    </div>
								</form>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Divider -->
	<!--<section class="divider2 parallax bgc-thm2" data-stellar-background-ratio="0.3">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-lg-12 col-xl-12">-->
	<!--				<div class="">-->
	<!--					<h1 class="color-white text-center text-uppercase">Subscription</h1>-->
	<!--				</div>-->
	<!--				<div class="divider-two-form">-->
	<!--					<div id="mc_embed_signup">-->
	<!--						<form method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>-->
	<!--						    <div id="mc_embed_signup_scroll">-->
	<!--								<div class="mc-field-group">-->
	<!--									<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Your Name">-->
	<!--								</div>-->
	<!--								<div class="mc-field-group">-->
	<!--									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">-->
	<!--								</div>-->
	<!--								<button type="submit" class="btn btn-lg mailchimp_btn text-center">Subscribe</button>-->
	<!--						    </div>-->
	<!--						</form>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->

    <!-- Our Newslatters -->
	<section id="our-newslatters" class="our-newslatters bg-img11 pt110 pb120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="newslatter_title text-center">
						<h3 class="mt0">Subscribe our newsletter</h3>
						<p class="fz16">Your download should start automatically, if not Click here. Should I give up, huh?.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="footer_apps_widget_home1 home11">
						<form class="form-inline mailchimp_form">
							<input type="email" class="form-control" placeholder="Email address">
							<button type="submit" class="btn btn-lg btn-thm4">Subscribe <span class="flaticon-right-arrow-1"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>