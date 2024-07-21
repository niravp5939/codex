<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard - Codex</title>
    @include('website.layout.header-script')
  </head>
  <style>
    label.error {
        color: #dc3545;
        font-size: 13px;
		font-weight: bold;
    }
    </style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  @include('website.layout.header')
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Hey! I am
					{{-- <span style="font-size: 18px; color:black;">Nirav Prajapati</span> --}}
				</span>
				<h2>Nirav</h2>
				<h2>I'm a 
					<span class="txt-rotate" data-period="2000" data-rotate='["Web Developer."]'></span>
				</h2>
			</div>
          </div>
        </div>
      </div>
      </div>
      <div class="mouse">
		<a href="#" class="mouse-icon">
			<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
		</a>
	  </div>
    </section>
    {{-- <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Blog</h1>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">Sept. 12, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">Sept. 12, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">Sept. 12, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/444.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>My name is Nirav Prajapati, I'm from Ahmedabad and recently i completed my BCA from PDPICA. Currently I'm working in the PHP-Laravel from website development and designing.</p>
                <p>A web developer is a programmer who develops World Wide Web applications using a client–server model. The applications typically use HTML, CSS and JavaScript in the client, PHP, ASP.NET (C#), Python, Node.js, Go or Java in the server, and http for communications between client and server. A web developer may specialize in client-side applications (front-end developer), server-side applications (back-end developer), or both (full-stack developer).</p>
		            {{-- <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>Nirav Prajapati</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>May 25, 1999</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Ahmedabad Gujarat India</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>380008</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>nirav007@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>+91 9898572564</span></li>
		            </ul> --}}
		          </div>
		        </div>
	          {{-- <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="3">0</span>
	                <span>Project complete</span>
                </p>
                <p><a href="#" style="pointer-events: none;" class="btn btn-primary py-3 px-3">Download CV</a></p>
              </div>
	          </div> --}}
	        </div>
        </div>
    	</div>
    </section>
    <section class="ftco-section" id="resume-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
				    <nav id="navi">
					    <ul>
					      <li><a href="#education">Education</a></li>
					      <li><a href="#experience">Experience</a></li>
					      <li><a href="#skills">Skills</a></li>
					      {{-- <li><a href="#page-4">Awards</a></li> --}}
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="education" class= "page one">
					  	<h2 class="heading">Education</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2017-2019</span>
		    					<h2>Bachelor of Computer Application</h2>
		    					<span class="position">Gujarat University</span>
		    					<p>P. D. Pandya Institute Of Computer Application, Ahmedabad</p>
	    					</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2015-2016</span>
		    					<h2>Higher Secondary Certificate (HSC)</h2>
		    					<span class="position">Gujarat Board</span>
		    					<p>Shree Rajabhagat Higher Secondary School, Ahmedabad</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Secondary School Certificate (SSC)</h2>
		    					<span class="position">Gujarat Board</span>
		    					<p>Shree Rajabhagat Higher Secondary School, Ahmedabad</p>
		    				</div>
	    				</div>
					  </div>
					  <div id="experience" class= "page two">
					  	<h2 class="heading">Experience</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2021 - Current</span>
		    					<h2>Laravel Developer</h2>
		    					<span class="position">WebPlanex Infotech Pvt Ltd</span>
		    					<p>Shivalik shilp, Iscon cross road, S G Highway, Ahmedabad, Gujarat - 380015</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2020-2021</span>
		    					<h2>PHP Developer</h2>
		    					<span class="position">Akash Technolabs</span>
		    					<p>Aarya arcade, Mithakhali six road, Navarangpura, Ahmedabad, Gujarat - 380054</p>
		    				</div>
	    				</div>
					  </div>
					  <div id="skills" class= "page three">
					  	<h2 class="heading">Skills</h2>
					  	<!-- <div class="row progress-circle mb-5">
					  		<div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

						        <div class="progress mx-auto" data-value='90'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
						          </div>
						        </div>

						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
						          </div>
						        </div>
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

						        <div class="progress mx-auto" data-value='80'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
						          </div>
						        </div>

						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
						          </div>
						        </div>
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">jQuery</h2>

						        <div class="progress mx-auto" data-value='75'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
						          </div>
						        </div>

						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
						          </div>
						        </div>
						      </div>
						    </div>
					  	</div> -->
					  	<div class="row">
					  		<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>PHP</h3>
										<div class="progress">
										 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
										  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
										    <span>80%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>MySql</h3>
										<div class="progress">
										 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
										  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
										    <span>70%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Laravel</h3>
										<div class="progress">
										 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
										  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
										    <span>75%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>HTML + CSS</h3>
										<div class="progress">
										 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
										  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
										    <span>90%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>JavaScript</h3>
										<div class="progress">
										 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
										  	aria-valuemin="0" aria-valuemax="100" style="width:55%">
										    <span>55%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Jquery + Ajax</h3>
										<div class="progress">
										 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
										  	aria-valuemin="0" aria-valuemax="100" style="width:65%">
										    <span>65%</span>
										  	</div>
										</div>
									</div>
								</div>
					  	</div>
					  </div>
					  {{-- <div id="page-4" class= "page four">
					    <h2 class="heading">Awards</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2020</span>
		    					<h2>PHP - MySql Training</h2>
		    					<span class="position">Akash Technolabs</span>
								<br><br>
								<img src="images/c.png" height="50%" width="30%"/>
		    					<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
	    					</div>
	    				</div>
					  </div> --}}
					</div>
			  </div>
    	</div>
    </section>
    <section class="ftco-section" id="services-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	{{-- <h1 class="big big-2">Services</h1> --}}
            <h2 class="mb-4" style="margin-top: -150px;">Services</h2>
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
    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container-fluid px-md-5">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	{{-- <h1 class="big big-2">Projects</h1> --}}
            <h2 class="mb-4" style="margin-top: -150px;">Projects</h2>
            <p>All the projects as defined below are my own created project and you can see</p>
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
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            {{-- <h1 class="big big-2">Contact</h1> --}}
            <h2 class="mb-4" style="margin-top: -100px;">Contact Me</h2>
            <p>If you need any of our services and have any queries, Please contact us.</p>
          </div>
        </div>
        {{-- <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box text-center p-4 shadow">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="icon-map-signs"></span>
                  </div>
                  <div>
                      <h3 class="mb-4">Address</h3>
                    <p>Ahmedabad Gujarat India</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box text-center p-4 shadow">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="icon-phone2"></span>
                  </div>
                  <div>
                      <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://1234567920">+91 +9898572564</a></p>
                </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box text-center p-4 shadow">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="icon-paper-plane"></span>
                  </div>
                  <div>
                      <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:info@yoursite.com">nirav007@gmail.com</a></p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
              <div class="align-self-stretch box text-center p-4 shadow">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="icon-globe"></span>
                  </div>
                  <div>
                      <h3 class="mb-4">Website</h3>
                    <p><a href="#">codex.com</a></p>
                </div>
              </div>
          </div>
        </div> --}}
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="post" action="{{ route('contact.add') }}" class="bg-light p-4 p-md-5 contact-form" id="Form">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{ old('name') }}">
                @error('name')
                  <small style="color:red; font-weight:600;">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name="email" value="{{ old('email') }}">
                @error('email')
                  <small style="color:red; font-weight:600;">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{ old('subject') }}">
                @error('subject')
                  <small style="color:red; font-weight:600;">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" class="form-control" placeholder="Message" name="message" value="{{ old('message') }}"></textarea>
                @error('message')
                  <small style="color:red; font-weight:600;">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary py-3 px-5">Send Message</button>
              </div>
            </form>
          </div>
          <div class="col-md-6 d-flex">
              <div class="img" style="background-image: url(images/work-5.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
    @include('website.layout.footer')
    @include('website.layout.footer-script')

	{{-- Client side validation --}}
<script>
	$(document).ready(function() {
	$("#Form").validate({
			rules: {
				name: {
						required: true,
						maxlength: 25,
				},
				email: {
						required: true,
						email: true,
						maxlength: 50
					},
				subject: {
						required: true,
						maxlength: 500,
				},
				message: {
						required: true,
						maxlength: 1000,
				}  
			},
			messages: {
					name: {
						required: "Name is required",
						maxlength: "Name cannot be more than 25 characters"
					},
					email: {
						required: "Email is required",
						email: "Email must be a valid email address",
						maxlength: "Email cannot be more than 50 characters",
					},
					subject: {
						required: "Subject is required",
						maxlength: "Subject cannot be more than 500 characters"
					},
					message: {
						required: "Message is required",
						maxlength: "Message cannot be more than 1000 characters"
					},
			}
		});
	});
  </script>

  </body>
</html>