@section('title', 'Venue')

<div class="col-lg-12">
    <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
        <h4 class="title float-left">Venues</h4>
        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="/WebApp/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Venue</li>
        </ol>
    </nav>
</div>

<div class="col-lg-12">
    <div class="my_course_content_container">
        <div class="my_setting_content mb30">
            <div class="my_setting_content_header">
                <div class="my_sch_title">
                    <h4 class="m0">Add New Venue</h4>
                </div>
            </div>
                @if (Session::has('venue_created'))
                    <div class="ui_kit_message_box">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('venue_created') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            <form action="{{ route('venue.storeInfo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row my_setting_content_details pb0">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="my_profile_setting_input form-group">
                                    <label for="cate_Name">Venue Name</label>
                                    <input type="text" class="form-control" id="cate_Name" name="venue_name" placeholder="e.g => Dubai - UAE" required>
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
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Venue Thumbnail*</label>
                                        <div class="form-upload__wrap">
                                            <input type="file" name="venue_cover" onchange="previewFile(this)" accept="images/*" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="shortcode_widget_table">
        <h4>Venue Detail</h4>
        <div class="">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>S.No.</th>
                        <th>Venue Name</th>
                        <th>Created At</th>
                        <th>Created By</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($venue_obj as $venue)
                            <tr>
                                <td>{{ $venue->id }}</td>
                                <td>{{ $venue->venues_name }}</td>
                                <td>{{ date('F d, Y H:i:s', strtotime($venue->created_at)) }}</td>
                                <td>{{ date('F d, Y H:i:s', strtotime($venue->updated_at)) }}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


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
