@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <div class="row">
        <div class=" col-lg-6 col-md-6 aos-init aos-animate pt-5">
          <?php 
            $title = explode(' ', isset($home_page_data['home_title'])?$home_page_data['home_title']:'');
          ?>
          <h1>{{ isset($title[0])?$title[0]:'' }}<span class="conenct">{{ isset($title[1])?$title[1]:'' }}</span>{{ isset($title[2])?$title[2]:'' }}</h1>
          <h2>{{ isset($home_page_data['description'])?$home_page_data['description']:'' }}</h2>
        </div>
        <div class=" col-lg-5 col-md-6 aos-init aos-animate offset-1 form_head">
          <form action="{{ route('register.store') }}" method="post">
            @csrf 

            <input type="hidden" name="role" value="Company">
            <span class="text-white join_txt">Want to join?</span>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"></label>
                <input type="text" class="form-control" name="name" id="Full_Name" placeholder="Full Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"></label>
                <input type="text" class="form-control" name="company_name" id="Company_Name" placeholder="Company Name">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"></label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"></label>
                <input type="text" class="form-control" name="website" id="Website" placeholder="Website">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"></label>
                <input type="text" class="form-control" name="country" id="Country" placeholder="Country">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"></label>
                <input type="text" class="form-control" name="city" id="City" placeholder="City">
              </div>
            </div>
            <div class="row">
              <label for=""> &nbsp;</label>
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary buttons_green">Sign Up</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- #main -->
  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients d-flex flex-column justify-content-center align-items-center">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4">
            <h2>Trusted by the best Companies & Partners</h2>
          </div>
          <div class="col-lg-8">
            @foreach ($partners as $partner)
              <img src="{{ asset('public/admin/images/partners') }}/{{ $partner->image }}" style="width:130px" alt="client-1" class="img-fluid">
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= About Section ======= -->
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
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="benifit" class="services py-2">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
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
    <!-- End Services Section -->

    <!-- ======= network Section ======= -->
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
    <!-- End network Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials d-flex justify-content-center align-items-center text-center">
      <div class="container " data-aos="fade-up">
        <div class="row ">
          <div class="col-lg-6 ">
            @if($home_page_data['header_white_logo'])
              <h1 class="logo">
                  <a href="{{ url('/') }}"> 
                      <img src="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_white_logo'] }}" alt="logo" class="img-fluid">
                  </a>
              </h1>
            @endif
          </div>

          <div class="col-lg-6 text-white fw-bold  ">
            <p class=" text-center">{!! isset($home_page_data['contact_home_page_label'])?$home_page_data['contact_home_page_label']:'' !!}
              <br><br>
              For more information, please contact us.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-primary buttons_green">Learn More</a>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq ">
      <div class="container">
        <h4 data-aos="fade-up colors" class="aos-init aos-animate"><b>FREQUENTLY ASKED QUESTIONS</b></h4>
        <h3 data-aos="fade-up" class="aos-init aos-animate">Have Questions? We are here to help.</h3>
        <div class="faq-list">
          <ul>
            <?php $delay = 100; ?>
            @foreach ($faqs as $key=>$faq)
              @if($key==0)
                <li data-aos="fade-up">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $faq->id }}">
                    {!! $faq->question !!} 
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                  </a>
                  <div id="faq-list-{{ $faq->id }}" class="collapse show" data-bs-parent=".faq-list">
                    <p>{!! $faq->answer !!}</p>
                  </div>
                </li>
              @else 
                <li data-aos="fade-up" data-aos-delay="{{ $delay }}">
                  <a data-bs-toggle="collapse" data-bs-target="#faq-list-{{ $faq->id }}" class="collapsed">
                    {!! $faq->question !!}
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                  </a>
                  <div id="faq-list-{{ $faq->id }}" class="collapse" data-bs-parent=".faq-list">
                    <p>{!! $faq->answer !!}</p>
                  </div>
                </li>
              @endif
              <?php $delay =+ 100; ?>
            @endforeach
          </ul>
        </div>
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= questions Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Still Have Questions?</h2>
          <p data-aos="fade-up">
            If you still cannot find the answer to your question in our FAQ, you can always <br> contact us. We will
            answer to you
            shortly.
          </p>
          <br>
          <a href="{{ route('contact') }}" class="btn btn-primary buttons_green">Contact us</a>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->
@endsection

@push('js')
  <script>
    $(document).on("click", ".subscribe-btn", function(e){
      var email = $('#subscriber-email').val();
      Swal.fire({
        title: 'Are you sure?',
        text: "You want to subscribe!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url : "{{ route('subscribe.store') }}",
            data : {'email':email},
            type : 'get',
            success : function(response){
              if(response==2){
                Swal.fire(
                  'Alert!',
                  'You are already subscribed.',
                  'danger'
                )
              }else if(response==1){
                $('#subscriber-email').val('');
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'You have subscribed',
                  showConfirmButton: false,
                  timer: 1500
                })
              }else{
                Swal.fire(
                  'Alert!',
                  'Some thing went wrong.',
                  'danger'
                )
              }
            }
          });
        }
      })
    });
  </script>
@endpush