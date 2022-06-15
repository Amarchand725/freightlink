<footer id="footer">
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
            <li><a class="nav-link scrollto active" href="#hero">About Us</a></li>
            <li><a class="nav-link scrollto" href="#about">Benefits</a></li>
            <li><a class="nav-link scrollto" href="#services">Networks</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Annual Meeting</a></li>
            <li><a class="nav-link scrollto" href="#team">FAQ</a></li>
            <li>
              <div class="col">
                <input type="email" style="color: white" name="email" id="subscriber-email" class="form-control" placeholder="Your Email">
                <span style="color: red">{{ $errors->first('email') }}</span>
              </div>
            </li>
            <li>
              <button type="button" class="nav-link scrollto btn btn-primary text-black subscribe-btn"><b>Subscribe</b></button>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="container-fluid py-4" style="background: #24303e;">
      <div class="me-lg-auto text-center  footer_icon">
        <div class="row">
          <div class="col-lg-4">
            <div class="credits">
              Designed by <a href="#">{{ isset($home_page_data['footer_copy_right'])?$home_page_data['footer_copy_right']:'' }}</a>
            </div>
          </div>
          <div class="col-lg-4">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="social-icon text-xs-center" target="_blank" href="#">
                  Privacy Policy
                </a>
              </li>
              <li class="list-inline-item">
                <a class="social-icon text-xs-center" target="_blank" href="#">
                  Terms of Use
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <div class="linkedin_icon">
              <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>