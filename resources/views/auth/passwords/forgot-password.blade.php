@extends('auth.admin.layouts.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
    <main id="main" class="login_pg">
        <section id="about" class="about section_2 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 mx-auto  ">
                        <form method="GET" action="{{ route('user.send-password-reset-link') }}">
                            @csrf

                            <input type="hidden" name="user_type" value="User">
                            <span class="text-white join_txt">Email Address</span>
                            <div class="row text-center d-flex justify-content-center pt-3">
                                <div class="form-group col-md-8 pb-3">
                                    <input type="email" name="email" class="form-control" style="color: white" id="Email" placeholder="abc@gmail.com">
                                    <span style="color: red">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
    
                            <div class="row text-center d-flex justify-content-center">
                                <div class="form-group col-md-8 pt-3">
                                    <button type="submit" class="btn btn-primary buttons_green" style="color:white">{{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <img src="{{ asset('public/web/assets/img/frieght-imgs/confirm-imges (1).png') }}" alt="conatc-frm" class="img-fluid">
        </section>
    </main>
@endsection

@push('js')
@endpush