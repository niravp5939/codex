{{-- <style>
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 195px;
    padding: 12px 16px;
    z-index: 1;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  </style> --}}

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><span>C</span>odex</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"><span>About</span></a></li>
          <li class="nav-item"><a href="{{ route('resume') }}" class="nav-link"><span>Resume</span></a></li>
          <li class="nav-item"><a href="{{ route('services') }}" class="nav-link"><span>Services</span></a></li>
          {{-- <li class="nav-item dropdown"><a class="nav-link"><span>Services</span></a>
            <div class="dropdown-content">
            <a href="{{ route('home') }}" style="color: black; font-size: 15px;">PHP Development</a><br>
            <a href="{{ route('home') }}" style="color: black; font-size: 15px;">Laravel Development</a>
            </div>
          </li> --}}
          <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link"><span>Projects</span></a></li>
          {{-- <li class="nav-item"><a href="{{ route('team') }}" class="nav-link"><span>My Team</span></a></li> --}}
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"><span>Contact</span></a></li>
        </ul>
      </div>
    </div>
</nav>