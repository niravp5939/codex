<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Services - Codex</title>
    @include('website.layout.header-script')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  @include('website.layout.header')
      <br>
      <section class="ftco-section" id="services-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	{{-- <h1 class="big big-2">Services</h1> --}}
            <h2 class="mb-4">Services</h2>
            <p>Professional Website Designing and Development and e-commerce website development services.</p>
          </div>
        </div>
		<br><br>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="{{ route('services.webdev') }}" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Development</h3>
								<p>We are Professional Website Designing and Development who specialize in e-commerce website development services.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="{{ route('services.webdes') }}" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Designing</h3>
								<p>If you want to run a business, including an offline-based one, having a good-looking website is a requirement for success.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="{{ route('services.devops') }}" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">DevOps Offering</h3>
								<p>DevOps ensure rapid on-boarding of applications by automating end-to-end delivery pipeline and facilitate continuous integration.</p>
							</div>
						</a>
					</div>
					<!-- <div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-innovation"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">App Developing</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-ux-design"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Branding</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-idea"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Product Strategy</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</a>
					</div> -->
				</div>
    	</div>
    </section>
    @include('website.layout.footer')
    @include('website.layout.footer-script')
  </body>
</html>