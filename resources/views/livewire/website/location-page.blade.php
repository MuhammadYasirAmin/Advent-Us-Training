@section('title', 'Our Venues')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb" style="height: 100%">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Training Venues</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Venues</li>
                    </ol>
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
                    <h3 class="mt0">Our Locations</h3>
                    <p>Learning Across the Globe</p>
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
