@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
  <main id="main" class="contact_page">
    <section id="benifit" class="services py-2">
      <div class="container">
        <div class="section-title mt-5" data-aos="fade-up">
          <h2>Why The Best Companies Choose Freightlink.</h2>
        </div>

        <div class="row">
          <h4 data-aos="fade-up colors" class="aos-init aos-animate"><b>BENEFITS</b></h4>
          <h3 data-aos="fade-up" class="aos-init aos-animate">Take Your Company Further.</h3>
          @foreach ($benefits as $benefit)
            <div class="col-lg-4 col-md-6 py-4" data-aos="fade-up">
              @if($benefit->icon)
                <img src="{{ asset('public/admin/images/benefits') }}/{{ $benefit->icon }}" alt="finace" class="img-fluid">
              @endif
              <div class="icon-box">
                <h4 class="title"><a href="{{ route('benefit.show', $benefit->slug) }}">{{ $benefit->title }}</a></h4>
                <p class="description">
                  {!! \Illuminate\Support\Str::limit($benefit->description,200) !!}
                </p>
                <small class="border-bottom"><b>Learn More</b></small>
              </div>
            </div>
          @endforeach
      </div>
    </section>
    <br>
  </main>
@endsection