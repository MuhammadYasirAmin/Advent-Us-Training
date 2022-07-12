<section class="form-page">

    <div class="form-page__content lg:py-50">
        <div class="container">
            <div class="row justify-center items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                        <h3 class="text-30 lh-13">Sign Up</h3>
                        <p class="mt-10">Already have an account? <a href="/MT-Login" class="text-purple-1">Log in</a>
                        </p>

                        <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST"
                            action="{{ route('register.submit') }}">
                            @csrf
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email address *</label>
                                <input type="email" name="Reg_Email" placeholder="Email Address..." required>
                                @error('Reg_Email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Username *</label>
                                <input type="text" name="Reg_Username" placeholder="User Name..." required>
                                @error('Reg_Username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password *</label>
                                <input type="password" name="Reg_Password" placeholder="Enter New Password" required>
                                @error('Reg_Password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm Password *</label>
                                <input type="password" name="password_confirmation" placeholder="Enter Confirm Password"
                                    required>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" id="submit"
                                    class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                                    Register
                                </button>
                            </div>
                        </form>

                        <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Or sign in using</div>

                        <div class="d-flex x-gap-20 items-center justify-between pt-20">
                            <div><button class="button -sm px-24 py-20 -outline-blue-3 text-blue-3 text-14">Log In via
                                    Facebook</button></div>
                            <div><button class="button -sm px-24 py-20 -outline-red-3 text-red-3 text-14">Log In via
                                    Google+</button></div>
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

@if (Session::has('User_Registerd'))
    <script>
        toastr.success("{!! Session::get('User_Registerd') !!}");
    </script>
@endif
@if (Session::has('User_Not_Registerd'))
    <script>
        toastr.error("{!! Session::get('User_Not_Registerd') !!}");
    </script>
@endif
