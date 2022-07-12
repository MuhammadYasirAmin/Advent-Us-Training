<section class="form-page js-mouse-move-container">

    <div class="form-page__content lg:py-50">
      <div class="container">
        <div class="row justify-center items-center">
          <div class="col-xl-6 col-lg-8">
            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
              <h3 class="text-30 lh-13">Login</h3>
              <p class="mt-10">Don't have an account yet? <a href="/MT-Register" class="text-purple-1">Sign up for free</a></p>

              <form class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Username Or Email</label>
                  <input type="email" name="Log_Email" placeholder="Email Address" required>
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password</label>
                  <input type="password" name="Log_Password" placeholder="Password" required>
                </div>
                <div class="col-12">
                  <button type="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                    Login
                  </button>
                </div>
              </form>

              <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Or sign in using</div>

              <div class="d-flex x-gap-20 items-center justify-between pt-20">
                <div><button class="button -sm px-24 py-20 -outline-blue-3 text-blue-3 text-14">Log In via Facebook</button></div>
                <div><button class="button -sm px-24 py-20 -outline-red-3 text-red-3 text-14">Log In via Google+</button></div>
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

@if (Session::has('User_Login'))
    <script>
        toastr.success("{!! Session::get('User_Login') !!}");
    </script>
@endif
@if (Session::has('User_Not_Login'))
    <script>
        toastr.error("{!! Session::get('User_Not_Login') !!}");
    </script>
@endif
