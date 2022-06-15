@extends('auth.admin.layouts.app')
@section('title', 'Admin Login Portal')

@section('content')
    <main id="main" class="login_pg">
        <section id="about" class="about section_2 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 mx-auto  ">
                        <form action="{{ route('admin.authenticate') }}" method="post">
                            @csrf

                            <input type="hidden" name="user_type" value="Admin">
                            <span class="text-white join_txt">Log in to Freightlink </span>
                            <div class="row text-center d-flex justify-content-center pt-3">
                                <div class="form-group col-md-8 pb-3">
                                    <input type="email" name="email" style="color: white" class="form-control" id="Email" placeholder="Email">
                                    <span style="color: red">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="row text-center d-flex justify-content-center">
                                <div class="form-group col-md-8 mb-3">
                                    <input type="password" class="form-control" style="color: white" name="password" id="input-password" placeholder="password">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="show-password" name="remember">
                                        <label class="form-check-label text-white" style="margin-left: -250px" for="show-password"><small>Show</small></label>
                                    </div>
                                    <span style="color: red">{{ $errors->first('password') }}</span>
                                </div>
                            </div>

                            <div class="row  d-flex justify-content-center">
                                <div class="form-group col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-white" for="remember"><small>Remember me</small></label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row text-center d-flex justify-content-center">
                                <div class="form-group col-md-8 pt-3">
                                    <button type="submit" class="btn btn-primary buttons_green">Log in</button>
                                </div>
                                <span class="text-white">
                                    <small>
                                        <a class="btn btn-link" href="{{ route('admin.forgot_password') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </small>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('js')
    <script type='text/javascript'>
        $(document).ready(function(){
            $('#show-password').click(function(){
                $(this).is(':checked') ? $('#input-password').attr('type', 'text') : $('#input-password').attr('type', 'password');
            });
        });
    </script>
@endpush