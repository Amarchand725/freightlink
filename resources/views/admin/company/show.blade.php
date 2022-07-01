@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/truck-logo.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $model->name }} </h4>
						</div>
						<div class="col-lg-4 mt-2 brd_crmbs ">
							<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
								aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item  active"><a href="#">7D</a></li>
									<li class="breadcrumb-item " aria-current="page">30D</li>
									<li class="breadcrumb-item " aria-current="page">6M</li>
									<li class="breadcrumb-item " aria-current="page">1Y</li>
									<li class="breadcrumb-item " aria-current="page">YTD</li>
									<li class="breadcrumb-item " aria-current="page">Clear</li>
								</ol>
							</nav>
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
                                    <th scope="row">Address:</th>
                                    <td>{{ $model->address }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Website:</th>
                                    <td>{{ $model->website }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Enrollment Date:</th>
                                    <td>{{ date('d, F- Y', strtotime($model->entrollment_date)) }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Expiry Date:</th>
                                    <td>{{ date('d, F- Y', strtotime($model->expire_date)) }}</td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
                <div class="col-lg-4">
                    <span>&nbsp;</span> <br>
                    <span class="act_mem"><a href="#">Active Member</a></span>
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
                <div class="col-lg-6 col-md-6 col-sm-12  ">
                    <div class="row ">
                        <div class="col-lg-3 col-sm-4 ">
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/messages-3.jpg') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="col-lg-9 ">
                           <h2>Michael Sephton-Poultney</h2>
                           <span class="span_green">Managing Director</span>
                       <div>
                            <i class="fa fa-envelope" aria-hidden="true"> </i> <span class="ml-3">michael@freightlinknetworks.com</span>
                       </div>
                    <div>
                        <i class="fa fa-phone" aria-hidden="true"> </i> <span class="ml-3">+27 83 649 1037</span>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="row ">
                        <div class="col-lg-3   col-sm-4 ">
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/messages-3.jpg') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="col-lg-9">
                            <h2>Michael Sephton-Poultney</h2>
                            <span class="span_green">Managing Director</span>
                            <div>
                                <i class="fa fa-envelope" aria-hidden="true"> </i> <span
                                    class="ml-3">michael@freightlinknetworks.com</span>
                            </div>
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"> </i> <span class="ml-3">+27 83 649 1037</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</main>
</section>
@endsection

@push('js')
@endpush