<section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class=" d-flex align-items-center">
        <img src="{{ asset('public/web/assets/img/frieght-imgs/p-icons.png') }}" alt="" class="img-fluid">
        <a href="{{ route('about-us') }}">{{ isset($home_page_data['header_alert_message'])?$home_page_data['header_alert_message']:'' }}</a>
      </i>
      <i class=" d-flex align-items-center ms-4"><span class="learns"><a href="{{ route('contact') }}">Learn More</a></span></i>
    </div>

    <div class="cta d-none d-md-flex align-items-center">
      @if(Auth::check())
        Welcom, <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
      @else 
        <a href="{{ route('login') }}" class="scrollto">Sign In</a>
      @endif
    </div>
  </div>
</section>