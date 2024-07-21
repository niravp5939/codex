<section class="ftco-section ftco-hireme img" style="background-image: url('../images/bg_1.jpg')">
    <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> For Freelancing</h2>
                    <p>I work in website development and website design as well as freelancing.</p>
                    {{-- <p class="mb-0"><a href="#" style="pointer-events: none;" class="btn btn-primary py-3 px-5">Hire me</a></p> --}}
                </div>
            </div>
        </div>
</section>
    
<footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>My name is Nirav Prajapati, I'm from Ahmedabad and recently i completed my BCA from PDPICA. Currently I'm working in the PHP-Laravel from website development and designing.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              {{-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> --}}
              <li class="ftco-animate"><a href="#" style="pointer-events: none;"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" style="pointer-events: none;"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="#" style="pointer-events: none;"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="{{ route('home') }}"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
              <li><a href="{{ route('about') }}"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
              <li><a href="{{ route('services') }}"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
              <li><a href="{{ route('projects') }}"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
              <li><a href="{{ route('contact') }}"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Services</h2>
            <ul class="list-unstyled">
              <li><a href="{{ route('services.webdev') }}"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
              <li><a href="{{ route('services.webdes') }}"><span class="icon-long-arrow-right mr-2"></span>Web Designing</a></li>
              <li><a href="{{ route('services.devops') }}"><span class="icon-long-arrow-right mr-2"></span>DevOps Offering</a></li>
              <!-- <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li> -->
              <!-- <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Ahmedabad Gujarat India</span></li>
                  {{-- <li><a href="#" style="pointer-events: none;"><span class="icon icon-phone"></span><span class="text">+91 9726572013</span></a></li> --}}
                  <li><a href="#" style="pointer-events: none;"><span class="icon icon-envelope"></span><span class="text">nirav2861@gmail.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="{{ route('home') }}">Codex</a></p>
        </div>
      </div>
    </div>
</footer>