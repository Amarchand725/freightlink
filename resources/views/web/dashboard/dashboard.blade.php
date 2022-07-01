@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/truck-logo.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $model->company_name }} </h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="section dashboard">
             <hr>
            <div class="row" style="background: #FCFCFC;">
                <div class="col-lg-8 mrl_head">
                   <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/admin/assets/img/frieght-imgs/blogger-logo.png') }}" alt="blogger" class="img-fluid" style="width: 160px; margin-right: 30px;">
                        <table class="table table-borderless table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>{{ $model->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Website:</th>
                                    <td>{{ $model->website }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">County:</th>
                                    <td>{{ $model->country }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">City:</th>
                                    <td>{{ $model->city }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status:</th>
                                    <td>
                                        @if($model->status)
                                            <span class="act_mem">Active Member</span>
                                        @else 
                                            <span class="act_mem">In Active Member</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
            </div>
            
            <div class="row py-4" style="background: #FCFCFC; " >
                <div class="col-lg-12 mrl_head">
                    <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/networsk.png') }}" alt="truck" class="IMG-FLUID"> Networks
                    </h4>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                @foreach ($networks as $network)
                                    <div class="col">
                                        <img src="{{ asset('public/admin/images/networks') }}/{{ $network->white_bg_logo }}" alt="confirm"
                                        class="img-fluid">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4" style="background: #FCFCFC; ">
                <div class="col-lg-12 mrl_head">
                    <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/company-logo.png') }}" alt="truck" class="IMG-FLUID"> Company Profile
                    </h4>
                    <div class="d-flex justify-content-center">
                        <p>{!! $model->profile !!}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- user avatar sec -->
        <section class="user_sec ">
            <div class="row">
                @foreach ($companies as $company)
                    <div class="col-lg-6 col-md-6 col-sm-12  ">
                        <div class="row ">
                            <div class="col-lg-3 col-sm-4 ">
                                @if($company->logo)
                                    <a href="{{ route('company.show', $company->slug) }}"><img src="{{ asset('public/admin/images/companies') }}/{{ $company->logo }}" alt="img" class="img-fluid"></a>
                                @endif
                            </div>
                            <div class="col-lg-9 ">
                                <h2><a href="{{ route('company.show', $company->slug) }}">{{ $company->name }}</a></h2>
                                <span class="span_green">Active Member</span>
                                <div>
                                    <i class="fa fa-envelope" aria-hidden="true"> </i> <span class="ml-3">{{ $company->address }}</span>
                                </div>
                                <div>
                                    <i class="fa fa-home" aria-hidden="true"> </i> <span class="ml-3">{{ $company->country }} , {{ $company->city }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
	</main>
</section>
@endsection

@push('js')
@endpush
