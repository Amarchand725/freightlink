<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      @if($home_page_data['header_logo'])
          <h1 class="logo">
              <a href="{{ url('/') }}"> 
                  <img src="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_logo'] }}" alt="logo" class="img-fluid">
              </a>
          </h1>
      @endif

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#benifit">Benefits</a></li>
          <li><a class="nav-link scrollto" href="#services">Networks</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Annual Meeting</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a></li>
          <li><a class="nav-link scrollto btn btn-primary text-black" href="#contact"><b>Talk to an Expert</b></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>