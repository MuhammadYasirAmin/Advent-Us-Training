@section('title', 'Login Form')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Logın</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Logın</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our LogIn Register -->
<section class="our-log bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="login_form inner_page">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="heading">
                            <h3 class="text-center">Login to your account</h3>
                            <p class="text-center">Don't have an account? <a class="text-thm" href="/MT-Register">Sign Up!</a></p>
                        </div>
                         <div class="form-group">
                            <input type="email" class="form-control" name="Log_Email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="Log_Password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                    </form>
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
