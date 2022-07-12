<style>
    .course-details__sidebar-meta-list-item {
        position: relative;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #e0e2e9;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .course-details__sidebar-meta-list-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .course-details__sidebar-meta-list-item .icon {
        position: relative;
        display: block;
    }

    .course-details__sidebar-meta-list-item .icon a {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 40px;
        text-align: center;
        color: #4d5fe3;
        border-radius: 50%;
        background: #f1f2f6;
    }

    .course-details__sidebar-meta-list-item .icon a i::before {
        font-size: 15px;
        line-height: 40px;
    }

    .course-details__sidebar-meta-list-item .text {
        position: relative;
        display: block;
        padding-left: 20px;
    }

    .course-details__sidebar-meta-list-item .text p {
        font-size: 16px;
        margin: 0;
    }

    .course-details__sidebar-meta-list-item .text p a {
        color: var(--thm-gray);
        transition: all 200ms linear;
        transition-delay: 0.1s;
    }

    .course-details__sidebar-meta-list-item .text p a:hover {
        color: #4d5fe3;
    }

    .course-details__sidebar-meta-list-item .text p a span {
        color: var(--thm-black);
        font-size: 16px;
    }
</style>
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="breadcrumbs__content">

                    <div class="breadcrumbs__item ">
                        <a href="/">Home</a>
                    </div>

                    <div class="breadcrumbs__item ">
                        <a href="/@foreach ($courses_lists as $course) {{ $course->Course_Title }} @endforeach">
                            @foreach ($courses_lists as $course)
                                {{ $course->Course_Title }}
                            @endforeach
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-header -type-5 bg-light-6">
    <div class="page-header__bg">
        <div class="bg-image js-lazy" data-bg="{{ asset('img/event-single/bg.png') }}"></div>
    </div>

    <div class="container">
        <div class="page-header__content pt-90 pb-90">
            <div class="row y-gap-30 relative">
                <div class="col-xl-7 col-lg-8">

                    <div data-anim="slide-up delay-1">
                        <h1 class="text-30 lh-14 pr-60 lg:pr-0">
                            @foreach ($courses_lists as $course)
                                {{ $course->Course_Title }}
                            @endforeach
                        </h1>
                    </div>
                    <p class="col-xl-9 mt-20">@foreach ($courses_lists as $course){{ $course->Course_Duration }}@endforeach-day Interactive Online Training Course</p>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="layout-pt-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div id="course-content" class="lg:pt-40">

                    <div class="">
                        <div id="course-content" class="">

                            <div class="accordion -block-2 text-left js-accordion">

                                <div class="accordion__item">
                                    <div class="accordion__button py-20 px-30 bg-light-4" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen" aria-expanded="true"
                                        aria-controls="panelsStayOpen">

                                        <div class="d-flex items-center">
                                            <div class="accordion__icon">
                                                <div class="icon" data-feather="chevron-down"></div>
                                                <div class="icon" data-feather="chevron-up"></div>
                                            </div>
                                            <span class="text-17 fw-500 text-dark-1">Date</span>
                                        </div>

                                        <div class="d-flex items-center">
                                            <span class="text-17 fw-500 text-dark-1">Venue</span>
                                        </div>

                                        <div class="d-flex items-center">
                                            <span class="text-17 fw-500 text-dark-1">Fee</span>
                                        </div>

                                        <div class="d-flex items-center">
                                            <span class="text-17 fw-500 text-dark-1">Registration Form</span>
                                        </div>

                                    </div>

                                    <div class="accordion__content collapse show" id="panelsStayOpen">
                                        <div class="accordion__content__inner px-30 py-30">
                                            @foreach ($courses_lists as $course)
                                                <div class="y-gap-20">

                                                    <div class="d-flex justify-between">

                                                        <div class="d-flex items-center">
                                                            <div>{{ date('F d ', strtotime($course->Venue_Date)) }} -
                                                                {{ date('F d, Y', strtotime($course->Venue_Date . ' + ' . $course->Course_Duration . 'days')) }}
                                                            </div>
                                                        </div>

                                                        <div class="d-flex items-center">
                                                            <span
                                                                class="text-14 lh-1 text-purple">{{ $course->Venue_Name }}</span>
                                                        </div>

                                                        <div class="d-flex items-center">
                                                            <span class="text-14 lh-1 text-purple">$
                                                                {{ $course->Venue_Fee }}</span>
                                                        </div>

                                                        <div class="d-flex items-center">
                                                            <a href="" id="submit"
                                                                class="button -sm -purple-1 text-white">
                                                                Send Message
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div id="overview" class="pt-60 px-30 lg:pt-40 to-over">
                                <h4 class="text-18 fw-500">About Course</h4>

                                <div class="show-more mt-30 ">
                                    <div class="">
                                        <p class="">
                                            @foreach ($courses_lists as $course)
                                                {{ $course->Course_Description }}
                                            @endforeach
                                        </p>
                                    </div>

                                    <button class="show-more__button text-purple-1 fw-500 underline mt-30">Show
                                        more</button>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="courses-single-info" style="height: auto;">
                    <div class="bg-white shadow-2 rounded-8 border-light">

                        <div class="courses-single-info__content scroll-bar-1">

                            <div class="py-30 px-30 bg-light-4">
                                <div class="in-house">
                                    <div class="col-12">
                                        <div class="items-center">
                                            <a href="" id="submit"
                                                class="button -md -purple-1 text-white">Send Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-details__sidebar-meta wow fadeInUp animated animated"
                                data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <ul class="course-details__sidebar-meta-list list-unstyled">
                                    <li class="course-details__sidebar-meta-list-item py-30 px-30">
                                        <div class="icon">
                                            <a href=""><i class="far fa-folder-open"></i></a>
                                        </div>
                                        <div class="text">
                                            <p> Category:</p>
                                            <ul>
                                                @foreach ($courses_lists as $course)
                                                    @if ($course->Course_Type === 'VTC')
                                                        <li><strong><a href="javascript:void(0);">Virtual
                                                                    Training</a></strong></li>
                                                    @endif
                                                @endforeach

                                                <li><strong><a href="javascript:void(0);">
                                                            @foreach ($courses_lists as $course)
                                                                {{ $course->Course_Category }}
                                                            @endforeach
                                                        </a></strong></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="course-details__sidebar-meta-list-item py-30 px-30">
                                        <div class="icon">
                                            <a href=""><i class="far fa-clock"></i></a>
                                        </div>
                                        <div class="text">
                                            <p>
                                                <a href="javascript:void(0);">
                                                    Durations:
                                                    <span>
                                                        <small class="sans-serif"><b>
                                                                @foreach ($courses_lists as $course)
                                                                    {{ $course->Course_Duration }}
                                                                @endforeach Days
                                                            </b></small>
                                                    </span>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-sm">
    <div data-anim-wrap class="container">
        <div class="row y-gap-50 justify-between">

            <div class="col-lg-8 px-30 ">
                <h3 class="text-24 fw-500">Send a Message.</h3>

                <form class="contact-form row y-gap-30 pt-20 lg:pt-40" id="EnquiryForm" method="POST" action="{{ route('enquiry.submit', [$courseName, $courseID]) }}">
                    @csrf
                    <input hidden type="text" name="courseID" value="{{ $courseID }}">
                    <input hidden type="text" name="courseName" value="{{ $courseName }}">
                    <div class="col-md-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Name</label>
                        <input type="text" name="Lead_Name" placeholder="Name..." required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup">
                    </div>
                    <div class="col-md-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                        <input type="email" name="Lead_Email" placeholder="Email..." required data-parsley-type="email" data-parsley-trigger="keyup">
                    </div>
                    <div class="col-md-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone Number</label>
                        <input type="number" name="Lead_Phone" placeholder="Phone..." required data-parsley-length="[10, 16]" data-parsley-pattern="[0-9]+$" data-parsley-trigger="keyup">
                    </div>
                    <div class="col-md-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Company</label>
                        <input type="text" name="Lead_Company" placeholder="Company..." required data-parsley-trigger="keyup">
                    </div>
                    <div class="col-md-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Company Phone</label>
                        <input type="number" name="Company_Phone" placeholder="Phone..." required data-parsley-length="[10, 16]" data-parsley-pattern="[0-9]+$" data-parsley-trigger="keyup">
                    </div>
                    <div class="col-md-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Designation</label>
                        <input type="text" name="Company_Designation" placeholder="Company..." required data-parsley-trigger="keyup">
                    </div>
                    <div class="col-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Message...</label>
                        <textarea name="Lead_Message" placeholder="Message" rows="3" required data-parsley-trigger="keyup"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" id="submit"
                            class="button -md -purple-1 text-white">
                            Enquire
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="layout-pb-lg">
    <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
            <div class="col-lg-6">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Related Courses</h2>

                    <p class="sectionTitle__text ">In-Demand List</p>

                </div>

            </div>

        </div>

        <div class="relative">
            <div class="overflow-hidden pt-60 lg:pt-50 js-section-slider" data-gap="30"
                data-nav-prev="js-courses-prev" data-nav-next="js-courses-next"
                data-slider-cols="xl-4 lg-3 md-2 sm-2">
                <div class="swiper-wrapper pb-3">

                    <div class="swiper-slide">
                        <div data-anim-child="slide-up delay-1">

                            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                                        <img class="w-1/1" src="{{ asset('img/coursesCards/1.png') }}"
                                            alt="image">
                                        <div class="coursesCard__image_overlay rounded-top-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15 pb-10 px-20">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX Design
                                        Essential Training</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="{{ asset('img/coursesCards/icons/1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="{{ asset('img/coursesCards/icons/2.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="{{ asset('img/coursesCards/icons/3.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="{{ asset('img/general/avatar-1.png') }}" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>
            </div>


            <button
                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-prev">
                <i class="icon icon-arrow-left text-24"></i>
            </button>

            <button
                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-next">
                <i class="icon icon-arrow-right text-24"></i>
            </button>

        </div>
    </div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('Enquiry_Form'))
<script>
    toastr.success("{!! Session::get('Enquiry_Form') !!}");
</script>
@endif
@if (Session::has('Enquiry_Not_Form'))
<script>
    toastr.error("{!! Session::get('Enquiry_Not_Form') !!}");
</script>
@endif
<script>
  $(function () {
      $("#EnquiryForm").parsley();
  });
</script>
