@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
  <main id="main" class="contact_page">
    <section id="about" class="about  section_1">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center ">
            <h4 data-aos="fade-up colors"><b>{{ isset($home_page_data['about_heading'])?$home_page_data['about_heading']:'' }}</b></h4>
            <h3 data-aos="fade-up">{{ isset($home_page_data['about_title'])?$home_page_data['about_title']:'' }}</h3>
            <p data-aos="fade-up">
              {!! isset($home_page_data['about_content'])?$home_page_data['about_content']:'' !!}
            </p>
          </div>

          <div class="col-xl-5 col-lg-8 count_txtss  " data-aos="fade-left">
            @if($home_page_data['about_side_image'])
              <img src="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['about_side_image'] }}" alt="network" class="img-fluid">
            @else 
              <img src="{{ asset('public/web/assets/img/frieght-imgs/network.png') }}" alt="network" class="img-fluid">
            @endif
            <div class="counts" data-aos="fade-right">
              <div class="row">
                <div class="col-3">
                  <b class="counts_txt">{{ isset($home_page_data['about_total_members'])?$home_page_data['about_total_members']:'' }}</b> <br>
                  <small><b>Members</b></small>
                </div>
                <div class="col-3">
                  <b class="counts_txt">{{ isset($home_page_data['about_total_countries'])?$home_page_data['about_total_countries']:'' }}</b> <br>
                  <small><b>Countries</b></small>
                </div>
                <div class="col-3">
                  <b class="counts_txt">{{ isset($home_page_data['about_total_cities'])?$home_page_data['about_total_cities']:'' }}</b> <br>
                  <small><b>Cities</b></small>
                </div>
                <div class="col-3">
                  <b class="counts_txt">{{ isset($home_page_data['about_total_offices'])?$home_page_data['about_total_offices']:'' }}</b> <br>
                  <small><b>Offices</b></small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
  </main>
@endsection