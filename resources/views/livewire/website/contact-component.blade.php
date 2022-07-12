
<section class="page-header -type-4 bg-beige-1">
    <div class="container">
      <div class="page-header__content">
        <div class="row">
          <div class="col-auto">
            <div data-anim="slide-up delay-1">
              <h1 class="page-header__title">Contact Us</h1>
            </div>

            <div data-anim="slide-up delay-2">
              <p class="page-header__text">We’re on a mission to deliver engaging, curated<br> courses at a reasonable price.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row y-gap-50 justify-between">
        <div class="col-lg-4">
          <h3 class="text-24 fw-500">Keep In Touch With Us.</h3>
          <p class="mt-25">Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt egetnvallis.</p>

          <div class="y-gap-30 pt-60 lg:pt-40">

            <div class="d-flex items-center">
              <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                <img src="{{ asset('img/contact-1/1.svg') }}" alt="icon">
              </div>
              <div class="ml-20">328 Queensberry Street, North<br> Melbourne VIC 3051, Australia.</div>
            </div>

            <div class="d-flex items-center">
              <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                <img src="{{ asset('img/contact-1/2.svg') }}" alt="icon">
              </div>
              <div class="ml-20">+(1) 123 456 7890</div>
            </div>

            <div class="d-flex items-center">
              <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                <img src="{{ asset('img/contact-1/3.svg') }}" alt="icon">
              </div>
              <div class="ml-20">hi@educrat.com</div>
            </div>

          </div>
        </div>

        <div class="col-lg-7">
          <h3 class="text-24 fw-500">Send a Message.</h3>
          <p class="mt-25">Neque convallis a cras semper auctor. Libero id faucibus nisl<br> tincidunt egetnvallis.</p>

          <form class="contact-form row y-gap-30 pt-60 lg:pt-40" id="contactForm" method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="col-md-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Name</label>
              <input type="text" name="Lead_Name" placeholder="Name..." required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup">
            </div>
            <div class="col-md-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
              <input type="email" name="Lead_Email" placeholder="Email..." required data-parsley-type="email" data-parsley-trigger="keyup">
            </div>
            <div class="col-md-6">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone Number</label>
                <input type="text" name="Lead_Phone" placeholder="Phone..." required data-parsley-length="[10, 16]" data-parsley-pattern="[0-9]+$" data-parsley-trigger="keyup">
              </div>
              <div class="col-md-6">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Subject</label>
                <input type="text" name="Lead_Subject" placeholder="Subject..." required data-parsley-trigger="keyup">
              </div>
            <div class="col-12">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Message...</label>
              <textarea name="Lead_Message" placeholder="Message" rows="8" required data-parsley-trigger="keyup"></textarea>
            </div>
            <div class="col-12">
              <button type="submit"id="submit" class="button -md -purple-1 text-white">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg bg-light-4">
    <div class="container">
      <div class="row justify-center text-center">
        <div class="col-xl-8 col-lg-9 col-md-11">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Frequently Asked Questions.</h2>

            <p class="sectionTitle__text ">Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>

          </div>


          <div class="accordion -block text-left pt-60 lg:pt-40 js-accordion">

            <div class="accordion__item">
              <div class="accordion__button">
                <div class="accordion__icon">
                  <div class="icon" data-feather="plus"></div>
                  <div class="icon" data-feather="minus"></div>
                </div>
                <span class="text-17 fw-500 text-dark-1">Do you offer discounts for students?</span>
              </div>

              <div class="accordion__content">
                <div class="accordion__content__inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__button">
                <div class="accordion__icon">
                  <div class="icon" data-feather="plus"></div>
                  <div class="icon" data-feather="minus"></div>
                </div>
                <span class="text-17 fw-500 text-dark-1">Do you offer special pricing for big teams?</span>
              </div>

              <div class="accordion__content">
                <div class="accordion__content__inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__button">
                <div class="accordion__icon">
                  <div class="icon" data-feather="plus"></div>
                  <div class="icon" data-feather="minus"></div>
                </div>
                <span class="text-17 fw-500 text-dark-1">What is the past experience of your teachers?</span>
              </div>

              <div class="accordion__content">
                <div class="accordion__content__inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__button">
                <div class="accordion__icon">
                  <div class="icon" data-feather="plus"></div>
                  <div class="icon" data-feather="minus"></div>
                </div>
                <span class="text-17 fw-500 text-dark-1">What is the course refund policy?</span>
              </div>

              <div class="accordion__content">
                <div class="accordion__content__inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__button">
                <div class="accordion__icon">
                  <div class="icon" data-feather="plus"></div>
                  <div class="icon" data-feather="minus"></div>
                </div>
                <span class="text-17 fw-500 text-dark-1">Do you offer discounts for non-profits?</span>
              </div>

              <div class="accordion__content">
                <div class="accordion__content__inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
  integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('Contact_Form'))
  <script>
      toastr.success("{!! Session::get('Contact_Form') !!}");
  </script>
@endif
@if (Session::has('Contact_Not_Form'))
  <script>
      toastr.error("{!! Session::get('Contact_Not_Form') !!}");
  </script>
@endif
<script>
    $(function () {
        $("#contactForm").parsley();
    });
</script>
