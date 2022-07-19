@section('title', 'Registration Form')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Registeration Form</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our LogIn Register -->
<section class="our-log-reg bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="sign_up_form inner_page">
                    <div class="heading">
                        <h3 class="text-center">Register to start learning</h3>
                        <p class="text-center">Have an account? <a class="text-thm" href="/MT-Login">Login</a></p>
                    </div>
                    <div class="details">
                        <form method="POST" action="{{ route('register.submit') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="Reg_Username" placeholder="User Name..." required>
                                @error('Reg_Username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <input type="email" class="form-control" name="Reg_Email" placeholder="Email Address..." required>
                                @error('Reg_Email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="Reg_Password" placeholder="Enter New Password" required>
                                @error('Reg_Password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" required>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                <label class="custom-control-label" for="exampleCheck3">Want to become an instructor?</label>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>

                        </form>
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
