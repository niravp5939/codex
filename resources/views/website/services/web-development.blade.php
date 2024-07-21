<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Web Development - Codex</title>
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
              <h2 class="mb-4">Web Development</h2>
              <p>We develop dynamic web application using Back-End Development.</p>
            </div>
          </div>
          <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
				<div class="bg-light p-4 p-md-5 contact-form">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	{{-- <h1 class="big">About</h1> --}}
		            <h5>Web Development (PHP - Laravel)</h5><br>
					<p>Every business venture is a new frontier. Codex is a proud IT pioneer that knows every customer’s needs are as unique as the features of an undiscovered land. The PHP application design industry is notorious for long-winded approaches and high costs that come from projects dragging on. There is a solution, and the solution is Web Planex, a small company with a personal touch and top-quality technological solutions for website building and PHP application development. <br><br> It makes no sense to find the problems with a project after it is done. Every Codex client gest to test their new PHP process before the job is called finished. Fully-functional mock websites are operated by the client to verify that every functional aspect of the PHP Application Process completely and correctly operational. There is no substitute for success, and there is no success without satisfaction.</p>
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
                <div class="img" style="background-image: url('../images/hhh.jpg');"></div>
            </div>
          </div>
        </div>
      </section>
    @include('website.layout.footer')
    @include('website.layout.footer-script')
  </body>
</html>