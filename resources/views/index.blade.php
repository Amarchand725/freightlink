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

          <form>
            <span class="text-white join_txt">Want to join?</span>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"></label>
                <input type="text" class="form-control" id="Full_Name" placeholder="Full Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"></label>
                <input type="text" class="form-control" id="Company_Name" placeholder="Company Name">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"></label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"></label>
                <input type="text" class="form-control" id="Website" placeholder="Website">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"></label>
                <input type="text" class="form-control" id="Country" placeholder="Country">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"></label>
                <input type="text" class="form-control" id="City" placeholder="City">
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
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="benifit" class="services py-2">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Why The Best Companies Choose Freightlink.</h2>
        </div>

        <div class="row">
          <h4 data-aos="fade-up colors" class="aos-init aos-animate"><b>BENEFITS</b></h4>
          <h3 data-aos="fade-up" class="aos-init aos-animate">Take Your Company Further.</h3>
          <div class="col-lg-4 col-md-6 py-4" data-aos="fade-up">
            <img src="{{ asset('public/web/assets/img/frieght-imgs/finance-icon.png') }}" alt="finace" class="img-fluid">
            <div class="icon-box">
              <h4 class="title"><a href="">Financial Protection Plan</a></h4>
              <p class="description">All paying members of Freghtlink are eligible for our Financial Protection Plan.
                These members can work with fellow
                partners confidently and with peace of mind knowing that they are shielded from financial loss.
              </p>
              <small class="border-bottom"><b>Learn More</b></small>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 py-4" data-aos="fade-up">
            <img src="{{ asset('public/web/assets/img/frieght-imgs/logo-1.png') }}" alt="finace" class="img-fluid">
            <div class="icon-box">
              <h4 class="title"><a href="">Affiliate Program</a></h4>
              <p class="description">Through our affiliate program our members are able to be part of the development of
                the network by recommending trusted
                and professional partners. In so doing, members are able to earn a recurring commission based on the
                number of
                successful referrals.
              </p>
              <small class="border-bottom"><b>Learn More</b></small>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 py-4" data-aos="fade-up">
            <img src="{{ asset('public/web/assets/img/frieght-imgs/logo-2.png') }}" alt="finace" class="img-fluid">
            <div class="icon-box">
              <h4 class="title"><a href="">Annual Conference</a></h4>
              <p class="description">Our conferences are strategically located to enable maximum attendance by our
                members. The event hosts forwarders from
                all over the world offering them the chance to meet, greet and strengthen relationships through an
                agenda full of 1on1
                meetings, workshops and social events.
              </p>
              <small class="border-bottom"><b>Learn More</b></small>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 py-4" data-aos="fade-up">
            <img src="{{ asset('public/web/assets/img/frieght-imgs/logo-3.png') }}" alt="finace" class="img-fluid">
            <div class="icon-box">
              <h4 class="title"><a href="">Marketing</a></h4>
              <p class="description">
                Through our strategic partnership we are able to maximise lead generation opportunities by providing
                online advertising,
                user-friendly landing pages, reporting tools and integrations with popular CRMs to our members at a
                competitive rate.
              </p>
              <small class="border-bottom"><b>Learn More</b></small>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 py-4" data-aos="fade-up">
            <img src="{{ asset('public/web/assets/img/frieght-imgs/logo-4.png') }}" alt="finace" class="img-fluid">
            <div class="icon-box">
              <h4 class="title"><a href="">Strategic Partnerships</a></h4>
              <p class="description">
                All our members have access to our partners who offer Cargo Insurance, Automated Rate Management and
                Container Buying
                and Leasing opportunities. These partners have been carefully selected to aid our members in preparing
                themselves for a
                digital future.
              </p>
              <small class="border-bottom"><b>Learn More</b></small>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 py-4" data-aos="fade-up">
            <img src="{{ asset('public/web/assets/img/frieght-imgs/logo-5.png') }}" alt="finace" class="img-fluid">
            <div class="icon-box">
              <h4 class="title"><a href="">Mobile App</a></h4>
              <p class="description">
                Network from your phone and connect with members from all over the world with just one click. Designed
                to improve and
                streamline all member-to-member communication. <br> <strong>COMING SOON!</strong>
              </p>
              <small class="border-bottom"><b>Learn More</b></small>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Values Section ======= -->
    <section id="services" class="values">
      <div class="container">
        <div class="row">
          <div class="col-md-5  pt-5 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <h4 data-aos="fade-up colors" class="aos-init aos-animate"><b>BENEFITS</b></h4>
            <h3 data-aos="fade-up" class="aos-init aos-animate">Connecting Expands Possibilities.</h3>
            <p data-aos="fade-up" class="aos-init aos-animate text-white">
              Freightlink Networks brings together trusted and respected logistics specialists from all over the world
              by offering an environment for freight forwarders to exchange business and find reliable partners in various different
              niche markets.
            </p>
            <p data-aos="fade-up" class="aos-init aos-animate text-white">
              By joining Freighlink you will have access to all members across the 5 networks, allowing you to
              strengthen your
              service
              offerings while still be financially protected under the Financial Protection Plan.
            </p>
          </div>
          <div class="col-md-7 mt-4 mt-md-0 aos-init aos-animate hexagonal_position pt-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
              <div class="col-md-4">
                <div class="hex_4">
                  <div class="hex-background_4">
                    <p class="text-white">
                      <img src="{{ asset('public/web/assets/img/frieght-imgs/frieghtlogo.png') }}" alt="logo" class="img-fluid">
                      Freightlink Network is a network made up of the most professional and trusted forwarders in the industry. The
                      platform
                      allows for relationship building, global opportunities, enhanced advertising strategies and streamlined
                      communications
                      between members.
                      <br> <br> <br> <br>
                      <small class="border-bottom "><b>Learn More</b></small>
                    </p>
                  </div>
                </div>
              </div>

            <div class="col-md-4">
              <div class="hex">
                <div class="hex-background">
                <p class="text-white">
                  <img src="{{ asset('public/web/assets/img/frieght-imgs/frieghtlogo.png') }}" alt="logo" class="img-fluid">
                  Freightlink Network is a network made up of the most professional and trusted forwarders in the industry. The platform
                  allows for relationship building, global opportunities, enhanced advertising strategies and streamlined communications
                  between members.
                  <br> <br> <br> <br>
                  <small class="border-bottom "><b>Learn More</b></small>
                </p>
                </div>
              </div>

                <div class="hex_1">
                  <div class="hex-backgroun_1">
                    <p class="text-white">
                      <img src="{{ asset('public/web/assets/img/frieght-imgs/frieghtlogo.png') }}" alt="logo" class="img-fluid">
                      Freightlink Network is a network made up of the most professional and trusted forwarders in the industry. The
                      platform
                      allows for relationship building, global opportunities, enhanced advertising strategies and streamlined
                      communications
                      between members.
                        <br> <br> <br> <br>
                        <small class="border-bottom "><b>Learn More</b></small>
                    </p>
                  </div>
                </div>
            </div>
              <div class="col-md-4">
                <div class="hex_2">
                  <div class="hex-background_2">
                    <p class="text-white">
                      <img src="{{ asset('public/web/assets/img/frieght-imgs/frieghtlogo.png') }}" alt="logo" class="img-fluid">
                      Freightlink Network is a network made up of the most professional and trusted forwarders in the industry. The
                      platform
                      allows for relationship building, global opportunities, enhanced advertising strategies and streamlined
                      communications
                      between members.
                      <br> <br> <br> <br>
                      <small class="border-bottom "><b>Learn More</b></small>
                    </p>
                  </div>
                </div>
              
                <div class="hex_3">
                  <div class="hex-backgroun_3">
                    <p class="text-white">
                      <img src="{{ asset('public/web/assets/img/frieght-imgs/frieghtlogo.png') }}" alt="logo" class="img-fluid">
                      Freightlink Network is a network made up of the most professional and trusted forwarders in the industry. The
                      platform
                      allows for relationship building, global opportunities, enhanced advertising strategies and streamlined
                      communications
                      between members.
                      <br> <br> <br> <br>
                      <small class="border-bottom "><b>Learn More</b></small>
                    </p>
                  </div>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- End Values Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials d-flex justify-content-center align-items-center text-center">
      <div class="container " data-aos="fade-up">
        <div class="row ">
          <div class="col-lg-6 ">
            <img src="{{ asset('public/web/assets/img/frieght-imgs/frieghtlogoss.png') }}" alt="logo" class="img-fluid">
          </div>

          <div class="col-lg-6 text-white fw-bold  ">
            <p class=" text-center">Dates to the next Freightlink <br> Meeting in 2023 are to be announced soon.
              <br><br>
              For more information, please contact us.
            </p>
            <button class="btn btn-primary buttons_green  ">Learn More</button>
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
            <li data-aos="fade-up">
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at
                lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                  gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius
                morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                  donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                  ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur
                adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
                  integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
                  Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi
                  quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec
                nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc
                  vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus
                  gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus
                ornare. Varius vel pharetra vel turpis nunc eget lorem
                dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada
                  nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis
                  tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

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
          <button class="btn btn-primary buttons_green  ">Contact Us</button>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->
@endsection

@push('js')
  <script>
    $(document).on("submit", "form", function(e){
      e.preventDefault();
      
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
          return true;
          // $.ajax({
          //   url : "{{ route('subscribe.store') }}",
          //   data : {'email':subscriber_email},
          //   type : 'get',
          //   success : function(response){
          //     console.log(response);
          //   }
          // });
        }
      })
    });
  </script>
@endpush