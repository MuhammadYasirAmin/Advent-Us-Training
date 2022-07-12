<div class="row pb-50 mb-10">
    <div class="col-auto">

        <h1 class="text-30 lh-12 fw-700">Add New Course</h1>
        <div class="mt-10">In this Section you can create New Course</div>

    </div>
</div>

<div class="row y-gap-60">
    <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Categories Information</h2>
            </div>
            @if (Session::has('course_created'))
                <div class="col-12">
                    <div class="d-flex items-center justify-between bg-success-1 pl-30 pr-20 py-30 rounded-8">
                        <div class="text-success-2 lh-1 fw-500">{{ Session::get('course_created') }}</div>
                        <div class="text-success-2 size-20" data-feather="x"></div>
                    </div>
                </div>
            @endif
            <div class="py-30 px-30">
                <form class="contact-form row y-gap-30" method="POST" action="{{ route('course.storeCourse') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-4">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Title*</label>
                        <input type="text" placeholder="e.g => Course Title" name="Course_Title" required>
                    </div>

                    <div class="col-4">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Type*</label>
                        <div class="form-select">
                            <select name="Course_Type" id="Course_Type" class="selectize wide ">
                                <option data-display="">Select Course Type</option>
                                <option value="CTC">Classroom Training Courses</option>
                                <option value="VTC">Virtual Training Courses</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-4">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Primary Category*</label>
                        <div class="form-select">
                            <select name="Course_Category" id="Course_Category" class="selectize wide js-selectize">
                                <option data-display="">Course Category</option>
                                @foreach ($category_obj as $category)
                                    <option value="{{ $category->cate_Name }}">{{ $category->cate_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-4">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Duration*</label>
                        <input type="number" placeholder="e.g => Course Duration" name="Course_Duration" required>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Description...</label>
                        <textarea name="Course_Desc" placeholder="Course Description" rows="3"></textarea>
                    </div>

                    <div class="contact-form d-flex lg:flex-column">
                        <div class="relative shrink-0" id="view_Img">
                            <img class="w-1/1" id="previewImg" alt="Category Image" style="max-width: 300px;">

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

                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                        <h2 class="text-17 lh-1 fw-500">Venue Date Info</h2>
                    </div>

                    <div class="col-3">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Date*</label>
                        <input type="date" placeholder="e.g => Course Date" name="Course_Dates[]" required>
                    </div>

                    <div class="col-3"><label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Venue*</label><div class="form-select"><select name="Course_Venue[]" id="Course_Venue" class="selectize wide "><option data-display="">Select Venue</option><option value="Virtual">Virtual</option>@foreach ($venue_obj as $venue)<option value="{{ $venue->venues_name }}">{{ $venue->venues_name }}</option>@endforeach</select></div></div><div class="col-3"><label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Price*</label><input type="number" placeholder="e.g => Course Price" name="Course_Price[]" required></div>
                    <div class="col-2">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"></label>
                        <button type="button" class="button -sm -outline-purple-1 text-purple" id="add">Add
                            Date</button>
                    </div>
                    <div class="row">
                        <div id="order_type"></div>
                    </div>
                    <div class="col-4">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"></label>
                        <button type="submit" class="button -sm -purple-1 text-white">Add New Course</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        var html =
            '<div id="reform"><div class="row"><div class="col-3"><label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Date*</label><input type="date" placeholder="e.g => Course Date" name="Course_Dates[]" required></div><div class="col-3"><label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Venue*</label><div class="form-select"><select name="Course_Venue[]" id="Course_Venue" class="selectize wide "><option data-display="">Select Venue</option><option value="Virtual">Virtual</option>@foreach ($venue_obj as $venue)<option value="{{ $venue->venues_name }}">{{ $venue->venues_name }}</option>@endforeach</select></div></div><div class="col-3"><label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Price*</label><input type="number" placeholder="e.g => Course Price" name="Course_Price[]" required></div><div class="col-2"><label class="text-16 lh-1 fw-500 text-dark-1 mb-10"></label><button type="button" class="button -sm -outline-purple-1 text-purple" id="remove">Remove Date</button></div></div></div>';

        var xe = 1;
        var max = 5;
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
