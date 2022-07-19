@section('title', 'Create Course')
<style>
    .my_setting_content_details{
        padding: 10px 30px 10px 30px;
    }
    .my_setting_content_header{
        padding: 10px 30px 10px 30px;
    }
</style>
<div class="col-lg-12">
    <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
        <h4 class="title float-left">Courses</h4>
        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="/WebApp/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Course</li>
        </ol>
    </nav>
</div>

<div class="col-lg-12">
    <div class="my_course_content_container">
        <div class="my_setting_content mb30">
            <div class="my_setting_content_header">
                <div class="my_sch_title">
                    <h4 class="m0">Add New Course</h4>
                </div>
            </div>
                @if (Session::has('course_created'))
                    <div class="ui_kit_message_box">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('course_created') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            <form action="{{ route('course.storeCourse') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row my_setting_content_details pb0">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="my_profile_setting_input form-group">
                                    <label for="">Course Title*</label>
                                    <input type="text" class="form-control" placeholder="e.g => Course Title" name="Course_Title" required>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="my_profile_select_box form-group">
                                    <label for="">Course Type*</label><br>
                                    <select class="selectpicker" name="Course_Type" id="Course_Type">
                                        <option data-display="">Select Course Type</option>
                                        <option value="CTC">Classroom Training Courses</option>
                                        <option value="VTC">Virtual Training Courses</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="my_profile_select_box form-group">
                                    <label for="">Course Category*</label><br>
                                    <select name="Course_Category" id="Course_Category" class="selectpicker">
                                        <option value="e.g => Course Category">Course Category</option>
                                        @foreach ($category_obj as $category)
                                            <option value="{{ $category->cate_Name }}">{{ $category->cate_Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="my_profile_setting_input form-group">
                                    <label for="">Course Duration*</label>
                                    <input type="number" class="form-control" placeholder="e.g => Course Duration" name="Course_Duration" required>
                                </div>
                            </div>
                            <div class="contact-form d-flex lg:flex-column col-lg-12 mb-3">
                                <div class="relative shrink-0" id="view_Img">
                                    <img class="w-1/1" id="previewImg" alt="Venue Image" style="max-width: 300px;">

                                    <div class="absolute-full-center d-flex justify-end py-20 px-20">
                                        <a href="#"
                                            class="d-flex justify-center items-center bg-white size-40 rounded-8 shadow-1">
                                            <i class="icon-bin text-16"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">

                                    <div class="form-upload col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Thumbnail*</label>
                                        <div class="form-upload__wrap">
                                            <input type="file" name="cate_cover" onchange="previewFile(this)" accept="images/*" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my_setting_content_header style2">
                    <div class="my_sch_title">
                        <h4 class="m0">Course Venues Infos</h4>
                    </div>
                </div>
                <div class="row my_setting_content_details">
                    <div class="col-xl-3">
                        <div class="my_profile_setting_input form-group">
                            <label for="">Course Date*</label>
                            <input type="date" class="form-control" placeholder="e.g => Course Date" name="Course_Dates[]" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="ui_kit_select_search">
                            <label for="">Course Venue*</label>
                            <select class="selectpicker" name="Course_Venue[]" data-live-search="true" data-width="100%">
                                <option data-display="">Select Venue</option>
                                <option value="Virtual">Virtual</option>
                                @foreach ($venue_obj as $venue)
                                    <option value="{{ $venue->venues_name }}">{{ $venue->venues_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="my_profile_setting_input form-group">
                            <label for="">Course Price*</label>
                            <input type="number" class="form-control" placeholder="e.g => Course Price" name="Course_Price[]" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <button type="button" class="btn btn-md btn-success mt-4" id="add">Add More +</button>
                    </div>
                </div>
                <div id="order_type"></div>
                <div class="my_setting_content_header style2">
                    <div class="my_sch_title">
                        <h4 class="m0">Description</h4>
                    </div>
                </div>
                <div class="row my_setting_content_details">
                    <div class="col-lg-12">
                        <div class="my_resume_textarea">
                            <div class="form-group">
                                <label>Course Description</label>
                                <textarea class="form-control" name="Course_Desc" placeholder="Course Description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    var html =
        '<div id="reform"><div class="row my_setting_content_details"><div class="col-xl-3"><div class="my_profile_setting_input form-group"><label for="">Course Date*</label><input type="date" class="form-control" placeholder="e.g => Course Date" name="Course_Dates[]" required></div></div><div class="col-xl-3"><div class="ui_kit_select_search"><label>Course Venue*</label><select class="selectpicker" name="Course_Venue[]" data-live-search="true" data-width="100%" ><option data-display="">Select Venue</option><option value="Virtual">Virtual</option>@foreach ($venue_obj as $venue) <option value="{{ $venue->venues_name }}">{{ $venue->venues_name }}</option> @endforeach </select></div></div><div class="col-xl-3"><div class="my_profile_setting_input form-group"><label for="">Course Price*</label><input type="number" class="form-control" placeholder="e.g => Course Price" name="Course_Price[]" required></div></div><div class="col-xl-3"><button type="button" class="btn btn-md btn-danger mt-4" id="remove">Remove</button></div></div></div>';

    var xe = 1;
    var max = 10;
    $("#add").click(function() {
        if (xe <= max) {
            $("#order_type").append(html);
            xe++;
        }
    });

    $("#order_type").on('click', '#remove', function() {
        $(this).closest('#reform').remove();
        xe--;
    });
</script>

<script>
    $("#view_Img").hide();
    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];
        if (file) {
            $("#view_Img").show();
            var reader = new FileReader();
            reader.onload = function() {
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>