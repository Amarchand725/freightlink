@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
  <main id="main" class="contact_page">
    <!-- ======= About Section ======= -->
    <section id="about" class="about  section_1 ">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12  text-center ">
            <h3 data-aos="fade-up" class="ty">Thank You!</h3>
            <h4 data-aos="fade-up" class="aos-init aos-animate">Our team will be in contact with you shortly</h4>
            <br> <br>
            <hr>
            <p data-aos="fade-up">
              Having trouble? Email us directly
              <span class="email_txt"><a href="{{ isset($home_page_data['contact_email'])?$home_page_data['contact_email']:'' }}">{{ isset($home_page_data['contact_email'])?$home_page_data['contact_email']:'' }}</a></span>
             <div class="mt-3"></div>
                <span class="email_txt"><a href="{{ url('/') }}"><small>Continue to Homepage</small></a></span>
            </p>
            <br><br>
            <div class="" style="text-align: center">
              @foreach (getPartners() as $partner)
                  <img src="{{ asset('public/admin/images/partners') }}/{{ $partner->image }}" style="width:130px; height:50px; margin-left:5px" alt="client-1" class="img-fluid">
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
  </main>
@endsection