<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Web Designing - Codex</title>
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
              <h2 class="mb-4">Web Designing</h2>
              <p>We design dynamic web application using Front-End Designing.</p>
            </div>
          </div>
          <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
				<div class="bg-light p-4 p-md-5 contact-form">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	{{-- <h1 class="big">About</h1> --}}
		            <h5>Web Designing (HTML - CSS)</h5><br>
					<p>Designing a website, including all aspects of the PHP application development, should only take 40% of the project’s time. The rest of the time should be spent getting to know the client and the client’s exact needs to create the best-suited results. <br><br> The creation of a website and all of its features is like building a house. The design phase is the most complicated. A satisfied home owner is one who is able to talk to the builder before and during construction. <br><br> The customer should never have to wonder how to get in touch with the designer and builder of the house, and even though the homeowner isn’t officially an architect, they are the true designer of a custom home.</p>
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
                <div class="img" style="background-image: url('../images/rrr.jpg');"></div>
            </div>
          </div>
        </div>
      </section>
    @include('website.layout.footer')
    @include('website.layout.footer-script')
  </body>
</html>