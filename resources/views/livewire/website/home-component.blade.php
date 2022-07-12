<!--bg-light-6-->
<style>
    #homepage-video {
        position: absolute;
        top: -150px;
        left: 0;
        width: 100%;
        height: auto;
        filter: grayscale(0.5);
    }
    .image-layer-overlay {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(13, 15, 19, 0.5);
        z-index: 1;
    }
</style>
<section data-anim-wrap class="masthead -type-3 js-mouse-move-container">
    <div class="image-layer-overlay"></div>
    <video autoplay muted loop id="homepage-video">
      <source src="https://xcalibretraining.com/wp-content/uploads/2022/03/bg-home.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="row y-gap-30 items-center justify-center">
            <div class="col-xl-7 col-lg-11 relative z-5">
                <div class="masthead__content pl-32 lg:pl-0">
                    <h1 data-anim-child="slide-up delay-1" class="masthead__title">
                        Your One Stop <span class="text-purple-1">Training Solution</span>
                    </h1>

                    <p data-anim-child="slide-up delay-2" class="masthead__text text-17 text-light-2 mt-25">
                        Advancing Individual Performance through internationally acclaimed contemporary best practices and impactful training courses.
                    </p>

                    <div data-anim-child="slide-up delay-3" class="masthead-search mt-30">
                        <div class="masthead-search__form">
                            <form action="#">
                                <input type="text" placeholder="What do you want to learn today?">

                                <button class="button -purple-1 text-white">
                                    <i class="icon icon-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="masthead-search__searches mt-40 text-light-2">
                            Trending Search:
                            <a href="">Development</a>,
                            <a href="">Business</a>,
                            <a href="">Design</a>,
                            <a href="">Merketing</a>
                        </div>
                    </div>
                </div>
            </div>
<!--img/home-4/masthead/shape.svg-->
            <div data-anim-child="slide-up delay-5" class="col-xl-5 col-lg-7 relative z-2">
                <div class="masthead-image">
                    <div class="masthead-image__img1">
                        <div class="masthead-image__shape xl:d-none">
                            <img src="{{ asset('') }}" alt="image">
                        </div>
                        <img data-move="20" class="js-mouse-move" src="{{ asset('img/home-4/masthead/1.png') }}"
                            alt="image">
                    </div>

                    <div class="masthead-image__el1">
                        <div data-move="40"
                            class="lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                            <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                                <img src="{{ asset('img/masthead/1.svg') }}" alt="icon">
                            </div>
                            <div class="ml-20">
                                <div class="text-orange-1 text-16 fw-500 lh-1">3.000 +</div>
                                <div class="mt-3">Free Courses</div>
                            </div>
                        </div>
                    </div>

                    <div class="masthead-image__el2">
                        <div data-move="40"
                            class="shadow-4 img-el -w-260 px-40 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                            <div class="img-el__side">
                                <div class="size-50 d-flex justify-center items-center bg-dark-1 rounded-full">
                                    <img src="{{ asset('img/masthead/2.svg') }}" alt="icon">
                                </div>
                            </div>
                            <div class="">
                                <div class="text-purple-1 text-16 fw-500 lh-1">Congrats!</div>
                                <div class="mt-3">Your Admission Completed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Training Formats</h2>

                    <p class="sectionTitle__text ">Training that Suits your Learning</p>

                </div>

            </div>
        </div>

        <div class="row y-gap-30 pt-50">
            <div class="col-lg-12">
                <div class="row y-gap-30">

                    <div class="col-md-4">
                        <div class="categoryCard -type-1">
                            <div class="categoryCard__image">
                                <div class="bg-image ratio ratio-30:16 js-lazy"
                                    data-bg="{{ asset('img/home-2/categories/1.png') }}"></div>
                            </div>

                            <div class="categoryCard__content text-center">
                                <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Classroom Training</h4>
                                <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">Face-to-Face in
                                    Learning Experience</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="categoryCard -type-1">
                            <div class="categoryCard__image">
                                <div class="bg-image ratio ratio-30:16 js-lazy"
                                    data-bg="{{ asset('img/home-2/categories/2.png') }}"></div>
                            </div>

                            <div class="categoryCard__content text-center">
                                <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">Virtual Training</h4>
                                <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">An On-Screen Gateway
                                    Learning</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="categoryCard -type-1">
                            <div class="categoryCard__image">
                                <div class="bg-image ratio ratio-30:16 js-lazy"
                                    data-bg="{{ asset('img/home-2/categories/7.png') }}"></div>
                            </div>

                            <div class="categoryCard__content text-center">
                                <h4 class="categoryCard__title text-17 lh-15 fw-500 text-white">BeSpoke Training
                                    Solution</h4>
                                <div class="categoryCard__subtitle text-13 text-white lh-1 mt-5">Customised Skills
                                    Support Advancement</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Our Expertise</h2>

                    <p class="sectionTitle__text ">Contemporary Courses</p>

                </div>

            </div>
        </div>

        <div class="overflow-hidden pt-50 js-section-slider" data-gap="30" data-loop data-pagination
            data-slider-cols="xl-6 lg-4 md-2 sm-2">
            <div class="swiper-wrapper">
                @foreach ($category_list as $category)
                    <div class="swiper-slide">
                        <div data-anim-child="slide-left delay-2" class="featureCard -type-1 -featureCard-hover">
                            <div class="featureCard__content">
                                <div class="featureCard__icon">
                                    <img src="{{ asset('img/featureCards/4.svg') }}" alt="icon">
                                </div>
                                <a href="/Course/{{ $category->cate_Name }}" class="featureCard__title">{{ $category->cate_Name }}</a>
                                <a href="javascript:void(0);" class="featureCard__text">{{ count($category_list) }}+ Courses</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-center x-gap-15 items-center pt-60 lg:pt-40">
                <div class="col-auto">
                    <button class="d-flex items-center text-24 arrow-left-hover js-prev">
                        <i class="icon icon-arrow-left"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <div class="pagination -arrows js-pagination"></div>
                </div>
                <div class="col-auto">
                    <button class="d-flex items-center text-24 arrow-right-hover js-next">
                        <i class="icon icon-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Our Locations</h2>

                    <p class="sectionTitle__text ">Learning Across the Globe</p>

                </div>

            </div>
        </div>

        <div class="row y-gap-30 pt-50">

            @foreach ($venue_obj as $location)
                <div class="col-lg-3 col-md-6">
                    <div data-anim="slide-left delay-2" class="eventCard -type-1">
                        <div class="eventCard__img">
                            <img src="{{ asset('Uploads/VenueCovers') }}/{{ $location->venue_Image }}" alt="image">
                        </div>
                        <div class="eventCard__bg">
                            <div class="eventCard__content">
                                <div class="eventCard__button bg-white" style="border-radius: 100px;">
                                    <a href="/{{ $location->venues_name }}/Courses" class="button -sm -rounded -purple-1 text-white px-25 ">{{ $location->venues_name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row justify-center pt-60 lg:pt-40">
            <div class="col-auto">
                <a href="/Locations" class="button -md -outline-purple-1 text-purple-1">
                    View All Venues
                </a>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
            <div class="col-lg-6">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Explore Courses</h2>

                    <p class="sectionTitle__text ">In-Demand List</p>

                </div>

            </div>

        </div>

        <div class="relative">
            <div class="overflow-hidden pt-60 lg:pt-50 js-section-slider" data-gap="30"
                data-nav-prev="js-courses-prev" data-nav-next="js-courses-next"
                data-slider-cols="xl-4 lg-3 md-2 sm-2">
                <div class="swiper-wrapper pb-3">

                    @foreach ($courses_lists as $course)
                        <div class="swiper-slide">
                            <div data-anim-child="slide-up delay-1">

                                <a href="/Course-Detail/{{ $course->Course_Title }}/{{ $course->id }}" class="coursesCard -type-1 border-light rounded-8">
                                    <div class="relative">
                                        <div class="coursesCard__image overflow-hidden rounded-top-8">
                                            <img class="w-1/1" src="@if (isset($course->course_Image)){{ asset('Uploads/CourseCover') }}/{{ $course->course_Image }} @else {{ asset('img/coursesCards/') }} {{ rand(1,12) }}.png @endif" alt="image">
                                            <div class="coursesCard__image_overlay rounded-top-8"></div>
                                        </div>
                                        <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                        </div>
                                    </div>

                                    <div class="h-100 pt-15 pb-10 px-20">

                                        <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{ $course->Course_Title }} </div>

                                        <div class="d-flex x-gap-10 items-center pt-10">

                                            <div class="d-flex items-center">
                                                <div class="mr-8">
                                                    <img src="{{ asset('img/coursesCards/icons/2.svg') }}" alt="icon">
                                                </div>
                                                <div class="text-14 lh-1">{{ $course->Course_Duration }} - Days Interactive Online Training Course</div>
                                            </div>

                                        </div>

                                        <div class="coursesCard-footer">
                                            <div class="coursesCard-footer__author">
                                                <div>{{ date('F d ', strtotime($course->Venue_Date)) }} -
                                                    {{ date('F d, Y', strtotime($course->Venue_Date . ' + ' . $course->Course_Duration . 'days')) }}</div>
                                            </div>

                                            <div class="coursesCard-footer__price">
                                                <div></div>
                                                <div>${{ number_format(intval($course->Venue_Fee)) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    @endforeach

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

<section class="layout-pt-md layout-pb-md js-mouse-move-container">
    <div class="container">
      <div class="row y-gap-30 items-center">
        <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="text-45 lg:text-40 md:text-30 text-dark-1">Online learning solutions<br class="xl:d-none"> that meet your needs.</h2>
          <p class="text-dark-1 mt-20">MaeTraining Centre offers unique development and skill-based training courses globally that aim to nurture practical result-driven abilities in individuals to keep up with the constantly changing business requirements.</p>

          <div class="row y-gap-30 pt-60 lg:pt-40">

            <div class="col-12">
              <div class="featureIcon -type-1">
                <div class="featureIcon__icon bg-green-2">
                  <img src="{{ asset('img/home-2/learning/icons/1.svg') }}" alt="icon">
                </div>

                <div class="featureIcon__content ml-30 md:ml-20">
                  <h4 class="text-17 fw-500">Start Learning From Our Experts</h4>
                  <p class="mt-5">Lorem ipsum is placeholder text commonly used<br class="lg:d-none"> in the graphic, print, and publishing industries</p>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="featureIcon -type-1">
                <div class="featureIcon__icon bg-purple-2">
                  <img src="{{ asset('img/home-2/learning/icons/2.svg') }}" alt="icon">
                </div>

                <div class="featureIcon__content ml-30 md:ml-20">
                  <h4 class="text-17 fw-500">Enhance Your Skills With Us Now</h4>
                  <p class="mt-5">Lorem ipsum is placeholder text commonly used<br class="lg:d-none"> in the graphic, print, and publishing industries</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6 order-1 order-lg-2">
          <div class="elements-image">
            <div class="elements-image__img1">
              <img class="js-mouse-move" data-move="40" src="{{ asset('img/home-2/learning/1.png') }}" alt="image">
            </div>

            <div class="elements-image__img2">
              <img class="js-mouse-move" data-move="70" src="{{ asset('img/home-2/learning/2.png') }}" alt="image">
            </div>

            <div data-move="60" class="elements-image__el1 lg:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
              <img src="{{ asset('img/masthead/4.png') }}" alt="icon">
              <div class="ml-20">
                <div class="text-dark-1 text-16 fw-500 lh-1">Ali Tufan</div>
                <div class="mt-3">UX/UI Designer</div>
                <div class="d-flex x-gap-5 mt-3">
                  <div>
                    <div class="icon-star text-yellow-1 text-11"></div>
                  </div>
                  <div>
                    <div class="icon-star text-yellow-1 text-11"></div>
                  </div>
                  <div>
                    <div class="icon-star text-yellow-1 text-11"></div>
                  </div>
                  <div>
                    <div class="icon-star text-yellow-1 text-11"></div>
                  </div>
                  <div>
                    <div class="icon-star text-yellow-1 text-11"></div>
                  </div>
                </div>
              </div>
            </div>

            <div data-move="30" class="elements-image__el2 lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
              <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                <img src="{{ asset('img/masthead/1.svg') }}" alt="icon">
              </div>
              <div class="ml-20">
                <div class="text-orange-1 text-16 fw-500 lh-1">3.000 +</div>
                <div class="mt-3">Free Courses</div>
              </div>
            </div>

            <div data-move="30" class="elements-image__el3 sm:d-none shadow-4 img-el -w-260 px-30 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
              <div class="img-el__side">
                <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                  <img src="{{ asset('img/masthead/2.svg') }}" alt="icon">
                </div>
              </div>
              <div class="">
                <div class="text-purple-1 text-16 fw-500 lh-1">Congrats!</div>
                <div class="mt-3">Your Admission Completed</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-md section-bg">
    <div class="section-bg__item bg-light-6"></div>

    <div class="container">
        <div class="row y-gap-20 justify-center text-center">
            <div class="col-auto">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">What They're Saying?</h2>

                    <p class="sectionTitle__text ">Clients Testimonials</p>

                </div>

            </div>
        </div>

        <div class="row justify-center pt-60">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="overflow-hidden js-testimonials-slider">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide h-100">
                            <div data-anim="slide-up" class="testimonials -type-2 text-center">
                                <div class="testimonials__icon">
                                    <img src="{{ asset('img/misc/quote.svg') }}" alt="quote">
                                </div>
                                <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this Educrat experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                                <div class="testimonials__author">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="mt-5">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide h-100">
                            <div data-anim="slide-up" class="testimonials -type-2 text-center">
                                <div class="testimonials__icon">
                                    <img src="{{ asset('img/misc/quote.svg') }}" alt="quote">
                                </div>
                                <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this Educrat experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                                <div class="testimonials__author">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="mt-5">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide h-100">
                            <div data-anim="slide-up" class="testimonials -type-2 text-center">
                                <div class="testimonials__icon">
                                    <img src="{{ asset('img/misc/quote.svg') }}" alt="quote">
                                </div>
                                <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this Educrat experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                                <div class="testimonials__author">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="mt-5">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide h-100">
                            <div data-anim="slide-up" class="testimonials -type-2 text-center">
                                <div class="testimonials__icon">
                                    <img src="{{ asset('img/misc/quote.svg') }}" alt="quote">
                                </div>
                                <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this Educrat experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                                <div class="testimonials__author">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="mt-5">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide h-100">
                            <div data-anim="slide-up" class="testimonials -type-2 text-center">
                                <div class="testimonials__icon">
                                    <img src="{{ asset('img/misc/quote.svg') }}" alt="quote">
                                </div>
                                <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this Educrat experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                                <div class="testimonials__author">
                                    <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                    <div class="mt-5">Product Manager, Apple Inc</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pt-60 lg:pt-40">
                        <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">

                            <div class="col-auto">
                                <div class="pagination__item is-active">
                                    <img src="{{ asset('img/home-3/testimonials/1.png') }}" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="{{ asset('img/home-3/testimonials/2.png') }}" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="{{ asset('img/home-3/testimonials/3.png') }}" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="{{ asset('img/home-3/testimonials/4.png') }}" alt="image">
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="pagination__item ">
                                    <img src="{{ asset('img/home-3/testimonials/5.png') }}" alt="image">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row y-gap-20 justify-center text-center">
            <div class="col-auto">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Business Affiliated Partners</h2>

                    <p class="sectionTitle__text ">Collaborations</p>

                </div>

            </div>
        </div>

        <div data-anim-wrap class="pt-60 lg:pt-50">
            <div class="overflow-hidden js-section-slider" data-gap="30" data-loop data-pagination data-slider-cols="xl-6 lg-4 md-3 sm-2">
                <div class="swiper-wrapper">

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-1" class="infoCard -type-1">
                            <div class="infoCard__image">
                                <img src="{{ asset('img/home-3/learn/1.png') }}" alt="image">
                            </div>
                            <h5 class="infoCard__title text-17 lh-15 mt-10">NCDMB</h5>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                            <div class="infoCard__image">
                                <img src="{{ asset('img/home-3/learn/2.png') }}" alt="image">
                            </div>
                            <h5 class="infoCard__title text-17 lh-15 mt-10">KAA</h5>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-3" class="infoCard -type-1">
                            <div class="infoCard__image">
                                <img src="{{ asset('img/home-3/learn/3.png') }}" alt="image">
                            </div>
                            <h5 class="infoCard__title text-17 lh-15 mt-10">Karachaganak</h5>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-4" class="infoCard -type-1">
                            <div class="infoCard__image">
                                <img src="{{ asset('img/home-3/learn/4.png') }}" alt="image">
                            </div>
                            <h5 class="infoCard__title text-17 lh-15 mt-10">DEWA</h5>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-5" class="infoCard -type-1">
                            <div class="infoCard__image">
                                <img src="{{ asset('img/home-3/learn/5.png') }}" alt="image">
                            </div>
                            <h5 class="infoCard__title text-17 lh-15 mt-10">Egenco</h5>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-6" class="infoCard -type-1">
                            <div class="infoCard__image">
                                <img src="{{ asset('img/home-3/learn/6.png') }}" alt="image">
                            </div>
                            <h5 class="infoCard__title text-17 lh-15 mt-10">Bank of Nigeria</h5>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-center x-gap-15 items-center pt-60 lg:pt-40">
                    <div class="col-auto">
                        <div class="pagination -arrows js-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
