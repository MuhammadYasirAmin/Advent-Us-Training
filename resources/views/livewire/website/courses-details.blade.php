@section('title', 'Course Name')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb csv2">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="breadcrumb_content">
                    <div class="cs_row_one csv2">
                        <div class="cs_ins_container">
                            <div class="cs_instructor">
                                <ul class="cs_instrct_list float-left mb0">
                                    <li class="list-inline-item"><a class="color-white" href="#">@foreach ($courses_lists as $course){{ $course->Course_Duration }}@endforeach-Days of Interactive Courses</a></li>
                                </ul>
                            </div>
                            <h3 class="cs_title color-white">@foreach ($courses_lists as $course)
                                {{ $course->Course_Title }}
                            @endforeach</h3>
                            <p class="color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ipsam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Members -->
<section class="course-single2 pb40">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="courses_single_container">
                            <div class="cs_rwo_tabs csv2">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="Overview-tab" data-toggle="tab" href="#Overview" role="tab" aria-controls="Overview" aria-selected="false">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="true">Course Content</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Course Enquiry</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
                                        <div class="cs_row_two csv2">
                                            <div class="cs_overview">
                                                <h4 class="title">Overview</h4>
                                                <h4 class="subtitle">Course Description</h4>
                                                <p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                <p class="mb20">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                <h4 class="subtitle">What you'll learn</h4>
                                                <ul class="cs_course_syslebus">
                                                    <li><i class="fa fa-check"></i><p>Become a UX designer.</p></li>
                                                    <li><i class="fa fa-check"></i><p>You will be able to add UX designer to your CV</p></li>
                                                    <li><i class="fa fa-check"></i><p>Become a UI designer.</p></li>
                                                    <li><i class="fa fa-check"></i><p>Build & test a full website design.</p></li>
                                                    <li><i class="fa fa-check"></i><p>Build & test a full mobile app.</p></li>
                                                </ul>
                                                <ul class="cs_course_syslebus2">
                                                    <li><i class="fa fa-check"></i><p>Learn to design websites & mobile phone apps.</p></li>
                                                    <li><i class="fa fa-check"></i><p>You'll learn how to choose colors.</p></li>
                                                    <li><i class="fa fa-check"></i><p>Prototype your designs with interactions.</p></li>
                                                    <li><i class="fa fa-check"></i><p>Export production ready assets.</p></li>
                                                    <li><i class="fa fa-check"></i><p>All the techniques used by UX professionals</p></li>
                                                </ul>
                                                <h4 class="subtitle">Requirements</h4>
                                                <ul class="list_requiremetn">
                                                    <li><i class="fa fa-circle"></i><p>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from Adobe.</p></li>
                                                    <li><i class="fa fa-circle"></i><p>No previous design experience is needed.</p></li>
                                                    <li><i class="fa fa-circle"></i><p>No previous Adobe XD skills are needed.</p></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="course" role="tabpanel" aria-labelledby="review-tab">
                                        <div class="cs_row_three csv2">
                                            <div class="course_content">
                                                <div class="cc_headers">
                                                    <h4 class="title">Course Content</h4>
                                                    <ul class="course_schdule float-right">
                                                        <li class="list-inline-item"><a href="#">92 Lectures</a></li>
                                                        <li class="list-inline-item"><a href="#">10:56:11</a></li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <div class="details">
                                                      <div id="accordion" class="panel-group cc_tab">
                                                        <div class="panel">
                                                              <div class="panel-heading">
                                                                  <h4 class="panel-title">
                                                                    <a href="#panelBodyCourseStart" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">Getting Started</a>
                                                                </h4>
                                                              </div>
                                                            <div id="panelBodyCourseStart" class="panel-collapse collapse show">
                                                                <div class="panel-body">
                                                                    <ul class="cs_list mb0">
                                                                        @foreach ($courses_lists as $course)
                                                                            <li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ date('F d ', strtotime($course->Venue_Date)) }} -
                                                                                {{ date('F d, Y', strtotime($course->Venue_Date . ' + ' . $course->Course_Duration . 'days')) }} <span class="cs_time">{{ $course->Venue_Name }}</span><span class="cs_preiew">$ {{ $course->Venue_Fee }}</span></a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">

                                        <div class="cs_row_seven csv2">
                                            <div class="sfeedbacks">
                                                <div class="mbp_comment_form style2 pb0">
                                                    <h4>Enquiry Form</h4>
                                                    <form class="comments_form row" id="EnquiryForm" method="POST" action="{{ route('enquiry.submit', [$courseName, $courseID]) }}">
                                                        @csrf
                                                        <input hidden type="text" name="courseID" value="{{ $courseID }}">
                                                        <input hidden type="text" name="courseName" value="{{ $courseName }}">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="Enq_Name">Full Name</label>
                                                            <input type="text" class="form-control" name="Lead_Name" id="Enq_Name" aria-describedby="Enquiry Name" placeholder="Name..." required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="Enq_Email">Email Address</label>
                                                            <input type="email" class="form-control" name="Lead_Email" id="Enq_Email" aria-describedby="Enquiry Email" placeholder="Email..." required data-parsley-type="email" data-parsley-trigger="keyup">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="Enq_Phone">Phone Number</label>
                                                            <input type="text" class="form-control" name="Lead_Phone" id="Enq_Phone" aria-describedby="Enquiry Phone" placeholder="Phone..." required data-parsley-length="[10, 16]" data-parsley-pattern="[0-9]+$" data-parsley-trigger="keyup">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="Enq_Company">Company Name</label>
                                                            <input type="text" class="form-control" name="Lead_Company" id="Enq_Company" aria-describedby="Enquiry Company" placeholder="Company Name..." required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="Enq_CPhone">Company Phone</label>
                                                            <input type="text" class="form-control" name="Company_Phone" id="Enq_CPhone" aria-describedby="Enquiry Company Phone" placeholder="Company Phone..." required data-parsley-length="[10, 16]" data-parsley-pattern="[0-9]+$" data-parsley-trigger="keyup">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="Enq_Designation">Designation</label>
                                                            <input type="text" class="form-control" name="Company_Designation" id="Enq_Designation" aria-describedby="Enquiry Designation"  placeholder="Designation..." required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup">
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="Enq_Message">Review Content</label>
                                                            <textarea class="form-control" name="Lead_Message" id="Enq_Message" rows="6" required data-parsley-trigger="keyup"></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-thm w-100">Submit Review <span class="flaticon-right-arrow-1"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="r_course_title">Related Courses</h3>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="{{ asset('images/courses/t3.jpg') }}" alt="t3.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Adobe XD: Prototyping Tips and Tricks</h5>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="instructor_pricing_widget csv2">
                    <div class="price">@foreach ($courses_lists as $course)
                        {{ $course->Course_Category }}
                    @endforeach</div>
                    <a href="/In-House" class="cart_btnss">Request For In-House</a>
                    <a href="/Course-Registration/@foreach ($courses_lists as $course){{ $course->Course_Title }}@endforeach/@foreach ($courses_lists as $course){{ $course->CID }}@endforeach" class="cart_btnss_white">Register Now</a>
                    <h5 class="subtitle text-left">Includes</h5>
                    <ul class="price_quere_list text-left">
                        <li><a href="#"><span class="flaticon-play-button-1"></span> Duration: @foreach ($courses_lists as $course)
                            {{ $course->Course_Duration }}
                        @endforeach Days</a></li>
                        <li><a href="#"><span class="flaticon-download"></span> 69 downloadable resources</a></li>
                        <li><a href="#"><span class="flaticon-key-1"></span> Full lifetime access</a></li>
                        <li><a href="#"><span class="flaticon-flash"></span> Assignments</a></li>
                        <li><a href="#"><span class="flaticon-award"></span> Certificate of Completion</a></li>
                    </ul>
                </div>
                <div class="feature_course_widget csv1">
                    <ul class="list-group">
                        <h4 class="title">Course Features</h4>
                        <li class="d-flex justify-content-between align-items-center">
                            Lectures <span class="float-right">6</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            Quizzes <span class="float-right">1</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            Duration <span class="float-right">3 hours</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            Skill level <span class="float-right">All level</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            Language <span class="float-right">English</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            Assessments <span class="float-right">Yes</span>
                        </li>
                    </ul>
                </div>
            </div>
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
