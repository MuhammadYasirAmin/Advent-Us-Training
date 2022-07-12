<div class="row pb-50 mb-10">
    <div class="col-auto">

        <h1 class="text-30 lh-12 fw-700">Our Categories</h1>
        <div class="mt-10">In this Section you can create New Category & See Categories</div>

    </div>
</div>

<div class="row y-gap-60">
    <div class="col-12">
      <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
        <div class="d-flex items-center py-20 px-30 border-bottom-light">
          <h2 class="text-17 lh-1 fw-500">Categories Information</h2>
        </div>
        @if (Session::has('cate_created'))
            <div class="col-12">
                <div
                    class="d-flex items-center justify-between bg-success-1 pl-30 pr-20 py-30 rounded-8">
                    <div class="text-success-2 lh-1 fw-500">{{ Session::get('cate_created') }}</div>
                    <div class="text-success-2 size-20" data-feather="x"></div>
                </div>
            </div>
        @endif
        <div class="py-30 px-30">
          <form class="contact-form row y-gap-30" method="POST" action="{{ route('category.storeCateInfo') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-12">

              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Category Name</label>

              <input type="text" placeholder="e.g => Category Name" name="cate_Name" required>
            </div>

            <div class="col-lg-12 col-md-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Description...</label>
                <textarea name="cate_Desc" placeholder="Category Description" rows="4"></textarea>
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
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Category Thumbnail*</label>
                        <div class="form-upload__wrap">
                            <input type="file" name="cate_cover" onchange="previewFile(this)" accept="images/*" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <button type="submit" class="button -md -purple-1 text-white">Add Category</button>
              </div>

          </form>
        </div>
      </div>
    </div>

    <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
          <div class="d-flex items-center py-20 px-30 border-bottom-light">
            <h2 class="text-17 lh-1 fw-500">Category Detail</h2>
          </div>

          <div class="py-30 px-30">
            <table class="table w-1/1">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Category Name</th>
                    <th>Created At</th>
                    <th>Created By</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($category_obj as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->cate_Name }}</td>
                            <td>{{ date('F d, Y H:i:s', strtotime($category->created_at)) }}</td>
                            <td>{{ date('F d, Y H:i:s', strtotime($category->updated_at)) }}</td>
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
