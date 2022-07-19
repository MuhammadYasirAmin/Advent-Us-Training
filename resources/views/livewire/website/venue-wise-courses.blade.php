@section('title', 'Venue Courses')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">{{ $VenueName }}</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses List 2 -->
<section class="courses-list2 pb40">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row courses_list_heading style2">
                    <div class="col-xl-4 p0">
                        <div class="instructor_search_result style2">
                            <p class="mt10 fz15">We Found<span class="color-dark pr10"> • {{ count($courses_lists) }} </span> Courses <span class="color-dark pr10">for you.</span></p>
                        </div>
                    </div>
                </div>
                <div class="row courses_container style2">
                    @foreach ($courses_lists as $course)
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content" style="padding: 0px;">
                                <div class="top_courses list">
                                    <div class="thumb" style="width: 100px; height: 100px;">
                                        <img class="img-whp" src="{{ asset('Uploads/CourseCover') }}/{{ $course->course_Image }}" alt="t1.jpg">
                                        <div class="overlay">
                                            <a class="tc_preview_course" href="/Course-Detail/{{ $course->Course_Title }}/{{ $course->CID }}" style="top: 30%;">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content" style="padding: 0px 0px 0px 15px;">
                                            <p class="pb-3"></p>
                                            <h5>{{ $course->Course_Title }}</h5>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-calendar"></i></a></li>
                                                <li class="list-inline-item mr-5"><a href="javascript:void(0);">Date: {{ date('F d ', strtotime($course->Venue_Date)) }}
                                                    -
                                                    {{ date('F d, Y', strtotime($course->Venue_Date . ' + ' . $course->Course_Duration . 'days')) }}</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0);"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item mr-5"><a href="javascript:void(0);">{{ $course->Venue_Name }}</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0);">Price:</a></li>
                                            </ul>
                                            <div class="tc_price float-right fn-414">${{ number_format(intval($course->Venue_Fee)) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="blog_category_widget">
                    <ul class="list-group">
                        <h4 class="title">Venues</h4>
                        @foreach ($venue_obj as $venue)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="/Course/Venues/{{ $venue->venues_name }}" class="color-orose">{{ $venue->venues_name }}</a> <span class="float-right">-</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="selected_filter_widget style4">
                    <span class="float-left"><img class="mr20" src="{{ asset('images/resource/2.png') }}" alt="2.png"></span>
                    <h4 class="mt15 fz20 fw500">Not sure?</h4>
                    <br>
                    <p>Every course comes with a 30-day money-back guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>
