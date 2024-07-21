<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DevOps Offering - Codex</title>
    @include('website.layout.header-script')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	    @include('website.layout.header')
      <br>
      <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              {{-- <h1 class="big big-2">Contact</h1> --}}
              {{-- <a href="{{ route('services') }}" class="icon icon-arrow-left float-left" style="margin-left: -230px; color: black;"></a> --}}
              <h2 class="mb-4">DevOps Offering</h2>
              <p>We deployment dynamic web application using DevOps Tools.</p>
            </div>
          </div>
          <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
				<div class="bg-light p-4 p-md-5 contact-form">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	{{-- <h1 class="big">About</h1> --}}
		            <h5>Deliver applications swiftly to keep up with customer demands</h5><br>
		            <p>The business landscape is changing rapidly, and so are the end users’ expectations. Hence, staying competitive in such times call for a paradigm shift in your software delivery approach. Contemporary apps must be highly responsive, intuitive, and continuously evolving. <br><br> DevOps offerings work on the principles of lean management and customer-centricity. It dissolves siloes to enhance collaboration and integration between your development and operation teams. <br><br> We enable businesses to simplify infrastructure management, accelerate deployments, automate software release, streamline IT, roll out improved capabilities, and improve end users’ experience.</p>
		            {{-- <ul class="about-info mt-4 px-md-0 px-2"> --}}
		            	{{-- <li class="d-flex"><span>Name:</span> <span>Nirav Prajapati</span></li> --}}
		            	{{-- <li class="d-flex"><span>Date of birth:</span> <span>July 25, 1999</span></li> --}}
		            	{{-- <li class="d-flex"><span>Address:</span> <span>Ahmedabad Gujarat India</span></li> --}}
		            	{{-- <li class="d-flex"><span>Zip code:</span> <span>380008</span></li> --}}
		            	{{-- <li class="d-flex"><span>Email:</span> <span>nirav2861@gmail.com</span></li> --}}
		            	{{-- <li class="d-flex"><span>Phone: </span> <span>+91 9726572013</span></li> --}}
		            {{-- </ul> --}}
		          </div>
		        </div>
	        </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url('../images/aaa.jpg');"></div>
            </div>
          </div>
        </div>
      </section>
    @include('website.layout.footer')
    @include('website.layout.footer-script')
  </body>
</html>