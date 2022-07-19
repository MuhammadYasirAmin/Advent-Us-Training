@section('title', 'Mastery Areas')
<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb" style="height: 100%">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Prosper and Succeed in Your Profession</h4>
                        <p class="color-white">
                            The Adventus Team is maintaining substantial training courses ensuring excellent advancement in professional development of each individual from distinct businesses.

The considerate list of training categories is fabricated to key industries and professions to boost vital skills and knowledge beneficial to participants who aims extended comprehension in regard with a specific topic and professional objective.

We acknowledge the fact that all professionals must never stop learning about their expertise. As they say, the only constant thing in the world is change. This is the reality we are facing. The whole bit that we see, especially the fundamental industries are continuously innovating, and the people must be able to adapt with these changes.

Sharpen your compression with your profession with our training courses.

                        </p>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </div>
				</div>
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
                                <h5>{{ $category->cate_Name }}</h5>
                                <p>Over 800 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
