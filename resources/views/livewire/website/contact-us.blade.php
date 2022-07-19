@section('title', 'Contact Us')
<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb" style="height: 100%">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Contact Us</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="/">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How It's Work -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-placeholder-1"></span></div>
						<h4>Our Location</h4>
						<p>92 Sheikh Zayed Rd - Trade Centre - DIFC - Dubai</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-phone-call"></span></div>
						<h4>Our Location</h4>
						<p class="mb0">Mobile: (+971) 58971 42 </p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-email"></span></div>
						<h4>Write Some Words</h4>
						<p>info@adventustraining.com</p>
					</div>
				</div>
			</div>
			<style>
			    .form_grid p {
                    line-height: 1.667 !important;
                }
			</style>
			<div class="row">
				<div class="col-lg-12 form_grid" style>
					<h4 class="mb5">Talk with a Training Specialist</h4>
					<p>Adventus is a team who is available 24/7 round clock to attend with any of your training course query. Whether you have found what you are looking for or perhaps considering other matter, speak to us and we are ready to answer any of your questions.</p>
		            <form class="contact_form" id="contact_form" action="{{ route('contact.submit') }}" method="POST" novalidate="novalidate">
                        @csrf
						<div class="row">
			                <div class="col-md-6">
			                    <div class="form-group">
			                    	<label>Full Name</label>
									<input class="form-control" type="text" name="Lead_Name" placeholder="Name..." required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup">
								</div>
			                </div>
			                <div class="col-md-6">
			                    <div class="form-group">
			                    	<label for="exampleInputEmail">Your Email</label>
			                    	<input name="Lead_Email" class="form-control required email" placeholder="Email..." required data-parsley-type="email" data-parsley-trigger="keyup" type="email">
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div class="form-group">
			                    	<label for="exampleInputEmail">Your Phone</label>
			                    	<input name="Lead_Phone" class="form-control " placeholder="Phone..." required data-parsley-pattern="[0-9]$" data-parsley-trigger="keyup" type="text">
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div class="form-group">
			                    	<label for="exampleInputSubject">Subject</label>
				                    <input id="form_subject" name="Lead_Subject" class="form-control required" placeholder="Subject..." required data-parsley-trigger="keyup" type="text">
								</div>
			                </div>
			                <div class="col-md-12">
	                            <div class="form-group">
	                            	<label for="exampleInputEmail1">Your Message</label>
	                                <textarea id="form_message" name="Lead_Message" class="form-control required" rows="5" required data-parsley-trigger="keyup"></textarea>
	                            </div>
			                    <div class="form-group ui_kit_button mb0">
				                    <button type="submit" class="btn dbxshad btn-lg btn-thm circle white">Submit</button>
			                    </div>
			                </div>
		                </div>
		            </form>
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
          $("#contact_form").parsley();
      });
  </script>
