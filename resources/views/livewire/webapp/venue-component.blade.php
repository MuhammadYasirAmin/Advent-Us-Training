<div class="row pb-50 mb-10">
    <div class="col-auto">

        <h1 class="text-30 lh-12 fw-700">Our Venues</h1>
        <div class="mt-10">In this Section you can create New Venue & See Venue</div>

    </div>
</div>

<div class="row y-gap-60">
    <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Venue Information</h2>
            </div>
            @if (Session::has('venue_created'))
                <div class="col-12">
                    <div
                        class="d-flex items-center justify-between bg-success-1 pl-30 pr-20 py-30 rounded-8">
                        <div class="text-success-2 lh-1 fw-500">{{ Session::get('venue_created') }}</div>
                        <div class="text-success-2 size-20" data-feather="x"></div>
                    </div>
                </div>
            @endif
            <div class="py-30 px-30">
                <form class="contact-form row y-gap-30" method="POST" action="{{ route('venue.storeInfo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Venue Name</label>

                        <input type="text" name="venue_name" placeholder="e.g => Dubai - UAE" required>
                    </div>
                    <div class="contact-form d-flex lg:flex-column">
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
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Venue thumbnail*</label>
                                <div class="form-upload__wrap">
                                    <input type="file" name="venue_cover" onchange="previewFile(this)" accept="images/*" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="button -md -purple-1 text-white">Add Venue</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Venue Detail</h2>
            </div>

            <div class="py-30 px-30">
                <table class="table w-1/1 text-center">
                    <thead>
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
