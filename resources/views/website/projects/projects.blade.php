<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Projects - Codex</title>
    @include('website.layout.header-script')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	    @include('website.layout.header')
      <br>
      <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container-fluid px-md-5">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	{{-- <h1 class="big big-2">Projects</h1> --}}
            <h2 class="mb-4">Projects</h2>
            <p>All the projects as defined below are my own created project and you can see.</p>
          </div>
        </div>
    		<div class="row no-gutters">
    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/qqq.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="{{ route('projects.hrms') }}">Human Resource Management System</a></h3>
	    					<span>(HRMs)</span>
	    				</div>
    				</div>
            <br>
              <b style="font-size: 18px;">Human Resource Management System</b>
  				</div>
          <div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/uuu.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="{{ route('projects.ecom') }}" style="pointer-events: none;">
                  {{-- Fully Based on <br> E-commerce Site --}} Coming Soon ...
                </a></h3>
	    					<span></span>
	    				</div>
    				</div>
            <br>
              <b style="font-size: 18px;">Fully Based on E-commerce Site</b>
  				</div>
    		</div>
    	</div>
    </section>

	  <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container-fluid px-md-5">
				<div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="5">0</strong>
                <span>Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="3">0</strong>
                <span>Complete Projects</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="8">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="6">0</strong>
                <span>Cups of coffee</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<br><br><br><br>
    @include('website.layout.footer')
    @include('website.layout.footer-script')
  </body>
</html>