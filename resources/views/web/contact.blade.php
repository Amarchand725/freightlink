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
          <div class="col-xl-5 col-lg-4 icon-boxes mt-5 ">
            <h3 data-aos="fade-up">{{ isset($home_page_data['contact_heading'])?$home_page_data['contact_heading']:'' }}</h3>
            <p data-aos="fade-up">
              {!! isset($home_page_data['contact_description'])?$home_page_data['contact_description']:'' !!}
              <span class="email_txt"><a href="{{ isset($home_page_data['contact_email'])?$home_page_data['contact_email']:'' }}">{{ isset($home_page_data['contact_email'])?$home_page_data['contact_email']:'' }}</a></span>
            </p>
            @if($home_page_data['about_side_image'])
                <h1 class="logo">
                    <a href="{{ url('/') }}"> 
                        <img src="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['about_side_image'] }}" alt="logo" class="img-fluid">
                    </a>
                </h1>
            @endif
          </div>
          <div class="col-xl-7 col-lg-8 mt-2 " data-aos="fade-left">
          <div class="reply-form">
          <h3 data-aos="fade-up" class="aos-init aos-animate">Contact Us</h3>
            <p>Please enter your information</p>
            <form action="{{ route('contact.store') }}" method="Post">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input name="first_name" type="text" class="form-control" placeholder="Your Name*">
                        <span style="color: red">{{ $errors->first('first_name') }}</span>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                        <span style="color: red">{{ $errors->first('last_name') }}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <input name="company" type="text" class="form-control" placeholder="Company Name*">
                        <span style="color: red">{{ $errors->first('company') }}</span>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="email" type="text" class="form-control" placeholder="Your Email*">
                        <span style="color: red">{{ $errors->first('email') }}</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col form-group">
                        <textarea name="description" class="form-control" placeholder="Your Comment*"></textarea>
                        <span style="color: red">{{ $errors->first('description') }}</span>
                    </div>
                </div>
                <div class="mx-auto d-flex align-content-start justify-content-start">
                    <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                    <button class="btn btn-primary buttons_green text-center" style="color: white" type="submit">Save</button>
                </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </section>
    <br>
  </main>
@endsection