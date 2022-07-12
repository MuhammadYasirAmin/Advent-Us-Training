<link rel="stylesheet" href="{{ asset('css/main2.css') }}">
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="breadcrumbs__content">

                    <div class="breadcrumbs__item ">
                        <a href="/">Home</a>
                    </div>

                    <div class="breadcrumbs__item ">
                        <a href="/@foreach ($courses_lists as $course){{ $course->Course_Category }}@endforeach">@foreach ($courses_lists as $course){{ $course->Course_Category }}@endforeach</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-header -type-5 bg-light-6">
    <div class="page-header__bg">
        <div class="bg-image js-lazy" data-bg="{{ asset('img/event-single/bg.png') }}"></div>
    </div>

    <div class="container">
        <div class="page-header__content pt-90 pb-90">
            <div class="row y-gap-30 relative">
                <div class="col-xl-7 col-lg-8">

                    <div data-anim="slide-up delay-1">
                        <h1 class="text-30 lh-14 pr-60 lg:pr-0">@foreach ($courses_lists as $course){{ $course->Course_Category }}@endforeach</h1>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div id="course-content" class="lg:pt-40">
                    <div class="d-flex justify-between items-center mt-30">
                        <div class="">We found • {{ count($courses_lists) }} courses for you</div>
                    </div>

                    <div class="mt-10">

                        @foreach ($courses_lists as $course)
                            <div class="contact-details-one__single" style="padding: 15px 30px 15px;">
                                <div class="contact-details-one__single-icon">
                                    <span><img decoding="async"
                                            data-opt-src="{{ asset('icons/Online-Icon-01-1.png') }}"
                                            src="{{ asset('icons/Online-Icon-03.png') }}"
                                            data-hoverin="{{ asset('icons/Online-Icon-03.png') }}"
                                            data-hoverout="{{ asset('icons/Online-Icon-01-1.png') }}"
                                            alt="{{ $course->Course_Title }}" class=""
                                            data-opt-lazy-loaded="true" data-opt-otimized-width="55"
                                            data-opt-optimized-height="55"><noscript><img decoding=async
                                                src="{{ asset('icons/Online-Icon-01-1.png') }}"
                                                data-hoverIn="{{ asset('icons/Online-Icon-03.png') }}"
                                                data-hoverOut="{{ asset('icons/Online-Icon-01-1.png') }}"
                                                alt="{{ $course->Course_Title }}" /></noscript></span>
                                </div>
                                <div class="contact-details-one__single-text">
                                    <h4><a
                                            href="/Course-Detail/{{ $course->Course_Title }}/{{ $course->id }}">{{ $course->Course_Title }}</a>
                                    </h4>
                                    <ul>
                                        <li><strong>Date: </strong>{{ date('F d ', strtotime($course->Venue_Date)) }}
                                            -
                                            {{ date('F d, Y', strtotime($course->Venue_Date . ' + ' . $course->Course_Duration . 'days')) }}
                                        </li>
                                        <li><strong>Venue: </strong>{{ $course->Venue_Name }}</li>
                                        <li><strong>Price: </strong>$
                                            {{ number_format(intval($course->Venue_Fee)) }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="courses-single-info" style="height: auto;">
                    <div class="bg-white shadow-2 rounded-8 border-light py-10 px-10">

                        <div class="courses-single-info__content scroll-bar-1 pt-30 pb-20 px-20">
                            <div class="d-flex justify-between items-center mb-30">
                                <div class="text-24 lh-1 text-dark-1 fw-500">Browse Categories</div>
                            </div>

                            <div class="mt-25">

                                @foreach ($category_list as $category)
                                    <a href="/Course/{{ $category->cate_Name }}" class="d-flex justify-between py-8 border-bottom-light">
                                        <div class="d-flex items-center text-dark-1">
                                            <div class="icon-arrow-right"></div>
                                            <div class="ml-10">{{ $category->cate_Name }}</div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
