<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact - Codex</title>
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
      <br>
      <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              {{-- <h1 class="big big-2">Contact</h1> --}}
              <h2 class="mb-4">Contact</h2>
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