<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="/">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="/Locations">Locations</a>
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
                        <h1 class="text-30 lh-14 pr-60 lg:pr-0">Location's</h1>
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
                                    <a href="javascript:void(0);" class="button -sm -rounded -purple-1 text-white px-25 ">{{ $location->venues_name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
