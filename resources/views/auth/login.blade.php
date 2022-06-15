@extends('auth.admin.layouts.app')
@section('title', 'User Login Portal')

@section('content')
    <main id="main" class="login_pg">
        <section id="about" class="about  section_2 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 mx-auto ">
                    <form action="{{ route('user.authenticate') }}" method="post">
                        @csrf 

                        <input type="hidden" name="user_type" value="Company">
                        <span class="text-white join_txt">Log in to Freightlink </span>
                        <div class="row text-center d-flex justify-content-center pt-3">
                            <div class="form-group col-md-8 pb-3">
                                <input type="email" class="form-control" name='email' id="Email" placeholder="Email">
                                <span style="color: red">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="row text-center d-flex justify-content-center">
                            <div class="form-group col-md-8 mb-3">
                                <input type="password" name="password" class="form-control" id="input-password" placeholder="password">
                                <div class="form-check">
                                    <input class="form-check-input" style="color: white !important" type="checkbox" id="show-password" name="remember">
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
                                    <a class="btn btn-link" href="{{ route('user.forgot_password') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </small>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br><br>
            <div class="" style="text-align: center">
                @foreach (getPartners() as $partner)
                    <img src="{{ asset('public/admin/images/partners') }}/{{ $partner->image }}" style="width:130px; height:50px; margin-left:5px" alt="client-1" class="img-fluid">
                @endforeach
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