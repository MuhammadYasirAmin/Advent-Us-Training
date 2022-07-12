<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="/">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="/Our-Expertise">Our-Expertise</a>
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
                        <h1 class="text-30 lh-14 pr-60 lg:pr-0">Our Expertise</h1>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Our Expertise</h2>

                    <p class="sectionTitle__text ">Contemporary Courses</p>

                </div>

            </div>
        </div>


            <div class="row y-gap-30 pt-50">
                @foreach ($category_obj as $category)
                    <div class="col-lg-3">
                        <div data-anim-child="slide-left delay-6" class="featureCard -type-1 -featureCard-hover">
                            <div class="featureCard__content">
                                <div class="featureCard__icon">
                                    <img src="{{ asset('img/featureCards/5.svg') }}" alt="icon">
                                </div>
                                <a href="/Course/{{ $category->cate_Name }}" class="featureCard__title">{{ $category->cate_Name }}</a>
                                <a href="javascript:void(0);" class="featureCard__text"> {{ count($category_obj) }}+ Courses</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

    </div>
</section>
