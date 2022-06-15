@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
  <main id="main" class="contact_page">
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
    <br>
  </main>
@endsection