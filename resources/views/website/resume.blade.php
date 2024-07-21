<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Resume - Codex</title>
    @include('website.layout.header-script')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  @include('website.layout.header')
	  <br>
      <section class="ftco-section" id="resume-section">
    	<div class="container-fluid px-md-5">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate">
					{{-- <h1 class="big big-2">Services</h1> --}}
				  <h2 class="mb-4">Resume</h2>
				  <p>I have given below my personal information and resume.</p>
				</div>
			  </div>
			  <br>
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
    @include('website.layout.footer')
    @include('website.layout.footer-script')
  </body>
</html>