<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Commerce - Codex</title>
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
            <h2 style="font-size: 23px;">Fully Based on E-commerce Site</h2>
          </div>
        </div>
		<p>● &nbsp;Customer Side :- Customer can buy product and view category wise and own personal authentication system and multiple things can do customer. <br> ● &nbsp;Admin Side :- Approve order, product, category management, admin own authentication system etc.</p>
        <br>
		<div class="row">
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
						{{-- <i class="flaticon-analysis"></i> --}}
					</span>
					<div class="desc">
						<img src="{{ asset('images/a.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">User Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
						{{-- <i class="flaticon-analysis"></i> --}}
					</span>
					<div class="desc">
						<img src="{{ asset('images/a.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Role Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
						{{-- <i class="flaticon-analysis"></i> --}}
					</span>
					<div class="desc">
						<img src="{{ asset('images/a.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Permission Module</b>
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
						{{-- <i class="flaticon-analysis"></i> --}}
					</span>
					<div class="desc">
						<img src="{{ asset('images/a.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Category Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
						{{-- <i class="flaticon-analysis"></i> --}}
					</span>
					<div class="desc">
						<img src="{{ asset('images/a.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Product Module</b>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex ftco-animate">
				<div class="services-1 shadow">
					<span class="icon">
						{{-- <i class="flaticon-analysis"></i> --}}
					</span>
					<div class="desc">
						<img src="{{ asset('images/a.png') }}" height="150" width="230" onclick="onClick(this)" style="cursor:pointer; margin-top: -28px;"/>
					</div>
					<br>
					<b style="font-size: 13px;">Order Module</b>
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