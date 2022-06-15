@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
  <main id="main" class="contact_page">
    <section id="network" class="values">
      <div class="container">
        <div class="row">
          <div class="col-md-5  pt-5 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <h4 data-aos="fade-up colors" class="aos-init aos-animate"><b>{{ isset($home_page_data['network_heading'])?$home_page_data['network_heading']:'' }}</b></h4>
            <h3 data-aos="fade-up" class="aos-init aos-animate">{{ isset($home_page_data['network_title'])?$home_page_data['network_title']:'' }}</h3>
            <p data-aos="fade-up" class="aos-init aos-animate text-white">
              {!! isset($home_page_data['network_description'])?$home_page_data['network_description']:''!!}
            </p>
          </div>
          <div class="col-md-7 mt-4 mt-md-0 aos-init aos-animate hexagonal_position pt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              @if(isset($expands_possibilities[0]))
                <div class="col-md-4">
                  <div class="hex_4">
                    <div class="hex-background_4">
                      <span class="text-white"> 
                        <br>
                        <img src="{{ asset('public/admin/images/expands_possilities') }}/{{ $expands_possibilities[0]->logo }}" alt="logo" class="img-fluid">
                        {!! \Illuminate\Support\Str::limit($expands_possibilities[0]->description,250) !!}
                        <br> <br> <br> <br> <br>
                        <a href="{{ route('expands_possibility.show', $expands_possibilities[0]->slug) }}"><small class="border-bottom text-center text-white mt-4"><b>Learn More</b></small></a>
                      </span>
                    </div>
                  </div>
                </div>
              @endif

              <div class="col-md-4">
                @if(isset($expands_possibilities[1]))
                  <div class="hex">
                    <div class="hex-background">
                      <span class="text-white"> 
                        <br>
                        <img src="{{ asset('public/admin/images/expands_possilities') }}/{{ $expands_possibilities[1]->logo }}" alt="logo" class="img-fluid">
                        {!! \Illuminate\Support\Str::limit($expands_possibilities[1]->description,250) !!}
                        <br> <br> <br> <br> <br>
                        <a href="{{ route('expands_possibility.show', $expands_possibilities[1]->slug) }}"><small class="border-bottom text-center text-white mt-4"><b>Learn More</b></small></a>
                      </span>
                    </div>
                  </div>
                @endif

                @if(isset($expands_possibilities[2]))
                  <div class="hex_1">
                    <div class="hex-backgroun_1">
                      <span class="text-white"> 
                        <br>
                        <img src="{{ asset('public/admin/images/expands_possilities') }}/{{ $expands_possibilities[2]->logo }}" alt="logo" class="img-fluid">
                        {!! \Illuminate\Support\Str::limit($expands_possibilities[2]->description,250) !!}
                        <br> <br> <br> <br> <br>
                        <a href="{{ route('expands_possibility.show', $expands_possibilities[2]->slug) }}"><small class="border-bottom text-center text-white mt-4"><b>Learn More</b></small></a>
                      </span>
                    </div>
                  </div>
                @endif
              </div>

              <div class="col-md-4">
                @if(isset($expands_possibilities[3]))
                  <div class="hex_2">
                    <div class="hex-background_2">
                      <span class="text-white"> 
                        <br>
                        <img src="{{ asset('public/admin/images/expands_possilities') }}/{{ $expands_possibilities[3]->logo }}" alt="logo" class="img-fluid">
                        {!! \Illuminate\Support\Str::limit($expands_possibilities[3]->description,300) !!}
                        <br> <br> <br> <br> <br>
                        <a href="{{ route('expands_possibility.show', $expands_possibilities[3]->slug) }}"><small class="border-bottom text-center text-white mt-4"><b>Learn More</b></small></a>
                      </span>
                    </div>
                  </div>
                @endif
              
                @if(isset($expands_possibilities[4]))
                  <div class="hex_3">
                    <div class="hex-backgroun_3">
                      <span class="text-white"> 
                        <br>
                        <img src="{{ asset('public/admin/images/expands_possilities') }}/{{ $expands_possibilities[4]->logo }}" alt="logo" class="img-fluid">
                        {!! $expands_possibilities[4]->description !!}
                        <br> <br> <br> <br> <br>
                        <a href="{{ route('expands_possibility.show', $expands_possibilities[4]->slug) }}"><small class="border-bottom text-center text-white mt-4"><b>Learn More</b></small></a>
                      </span>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
  </main>
@endsection