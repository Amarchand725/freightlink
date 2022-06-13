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
                        <form method="POST" action="{{ route('admin.change_password') }}">
                            @csrf

                            <input type="hidden" name="user_type" value="Admin">
                            <span class="text-white join_txt">Create new Password</span>
                            <div class="row text-center d-flex justify-content-center pt-3">
                                <div class="form-group col-md-8 pb-3">
                                    <input class="form-control mb-2" placeholder="password address" name="password" type="password" autocomplete="off" autofocus>
                                    <span style="color: red;">{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                            <div class="row text-center d-flex justify-content-center pt-3">
                                <div class="form-group col-md-8 pb-3">
                                    <input class="form-control" type="password" placeholder="confirm-password" name="confirm-password" type="confirm-password" autocomplete="off" autofocus>
                                    <span style="color: red">{{ $errors->first('confirm-password') }}</span>
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
        </section>
    </main>
@endsection

@push('js')
@endpush