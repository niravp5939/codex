<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About - Codex</title>
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
              <h2 class="mb-4">About</h2>
              <p>I have shown my personal information below.</p>
            </div>
          </div>
          <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
				<div class="bg-light p-4 p-md-5 contact-form">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	{{-- <h1 class="big">About</h1> --}}
		            <h5>About Us</h5><br>
		            <p>My name is Nirav Prajapati, I'm from Ahmedabad and recently i completed my BCA from PDPICA. Currently I'm working in the PHP-Laravel from website development and designing.</p>
					<p>A web developer is a programmer who develops World Wide Web applications using a client–server model. The applications typically use HTML, CSS and JavaScript in the client, PHP, ASP.NET (C#), Python, Node.js, Go or Java in the server, and http for communications between client and server. A web developer may specialize in client-side applications (front-end developer), server-side applications (back-end developer), or both (full-stack developer).</p>
		            {{-- <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>Nirav Prajapati</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>July 25, 1999</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Ahmedabad Gujarat India</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>380008</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>nirav2861@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>+91 9726572013</span></li>
		            </ul> --}}
		          </div>
		        </div>
	        </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url('../images/444.jpg');"></div>
            </div>
          </div>
        </div>
      </section>
    @include('website.layout.footer')
    @include('website.layout.footer-script')
  </body>
</html>