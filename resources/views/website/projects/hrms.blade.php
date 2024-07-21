<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HRMs - Codex</title>
    @include('website.layout.header-script')
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	
	  @include('website.layout.header')
      <br>
      <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container-fluid px-md-5">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	{{-- <h1 class="big big-2">Projects</h1> --}}
              {{-- <a href="{{ route('projects') }}" class="icon icon-arrow-left float-left" style="color: black;"></a> --}}
			<h2 style="font-size: 23px;">Human Resource Management System (HRMs)</h2>
          </div>
        </div>
        <p>● &nbsp;Simple project motive is to proper management. to all role like Admin, Employee, HR, Manager. <br> ● &nbsp;For this i have use laravel framework and designing part i have use HTML, CSS, Bootstrap. <br> ● &nbsp;All the necessary library for this i have use laravel inbuild authentication system and mail system also PDF generate. <br> ● &nbsp;Module :- User, Leave, Payroll, Timesheet, Holiday, Notice, Warning.</p>
        <br>
		<div class="row">
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/dashboard.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Dashboard</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/user_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">User Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/leave_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Leave Module</b>
				</div>
			</div>
            
			<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
				<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
				<div class="w3-modal-content w3-animate-zoom">
				  <img id="img01" style="width:100%">
				</div>
			</div>

			  <div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/payroll_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Payroll Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/user_enrollment_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">User Enrollment Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/timesheet_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">TimeSheet Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/jobsite_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Jobsite Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/job_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Job Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/document_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Document Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/holiday_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Holiday Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/employee_notice_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Employee Notice Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
					</span>
					<div class="desc">
						<img src="{{ asset('project/hrms/employee_warning_module.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Employee Warning Module</b>
				</div>
			</div>
		</div>
    	</div>
    </section>
    @include('website.layout.footer')
    @include('website.layout.footer-script')
	<script>
		function onClick(element) {
		  document.getElementById("img01").src = element.src;
		  document.getElementById("modal01").style.display = "block";
		}
		</script>
  </body>
</html>