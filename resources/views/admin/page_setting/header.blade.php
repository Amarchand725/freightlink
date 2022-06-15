@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $page_title }} </h4>
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
			<div class="row">
				<div class="col-md-12">
					<form action="{{ route('page_setting.store') }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
						@csrf

						<input type="hidden" name="parent_slug" id="" value="{{ $model->slug }}">
						<div class="box box-info">
							<div class="box-body">
								@if(isset($page_data['header_logo']))
									<div class="form-group mt-3">
										<label for="" class="col-sm-2 control-label">Existing Black Logo</label>
										<div class="col-sm-9" style="padding-top:6px;">
											<img src="{{ asset('/public/admin/assets/images/page/'.$page_data['header_logo']) }}" class="existing-photo" style="height:50px;">
										</div>
									</div>
								@endif
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Black Logo </label>
									<div class="col-sm-9">
										<input type="file" name="header_logo" class="form-control">
									</div>
								</div>

								@if(isset($page_data['header_white_logo']))
									<div class="form-group mt-3">
										<label for="" class="col-sm-2 control-label">Existing White Logo</label>
										<div class="col-sm-9" style="padding-top:6px;">
											<img src="{{ asset('/public/admin/assets/images/page/'.$page_data['header_white_logo']) }}" class="existing-photo" style="height:50px;">
										</div>
									</div>
								@endif
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">White Logo </label>
									<div class="col-sm-9">
										<input type="file" name="header_white_logo" class="form-control">
									</div>
								</div>

								@if(isset($page_data['header_favicon']))
									<div class="form-group mt-3">
										<label for="" class="col-sm-2 control-label">Existing Favicon</label>
										<div class="col-sm-9" style="padding-top:6px;">
											<img src="{{ asset('/public/admin/assets/images/page/'.$page_data['header_favicon']) }}" class="existing-photo" style="height:50px;">
										</div>
									</div>
								@endif
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Favicon </label>
									<div class="col-sm-9">
										<input type="file" name="header_favicon" class="form-control">
									</div>
								</div>
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Alert Top Message </label>
									<div class="col-sm-9">
										<input type="text" name="header_alert_message" value="{{ isset($page_data['header_alert_message'])?$page_data['header_alert_message']:'' }}" class="form-control" placeholder="Enter alert top message">
									</div>
								</div>
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Currency </label>
									<div class="col-sm-9">
										<input type="text" name="header_currency" value="{{ isset($page_data['header_currency'])?$page_data['header_currency']:'' }}" class="form-control" placeholder="Enter currency">
									</div>
								</div>
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Symbol </label>
									<div class="col-sm-9">
										<input type="text" name="header_currency_symbol" value="{{ isset($page_data['header_currency_symbol'])?$page_data['header_currency_symbol']:'' }}" class="form-control" placeholder="Enter currency symbol">
									</div>
								</div>
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Email </label>
									<div class="col-sm-9">
										<input type="email" name="header_email" class="form-control" value="{{ isset($page_data['header_email'])?$page_data['header_email']:'' }}" placeholder="Enter email address">
									</div>
								</div>
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Phone </label>
									<div class="col-sm-9">
										<input type="text" name="header_phone" class="form-control" value="{{ isset($page_data['header_phone'])?$page_data['header_phone']:'' }}" placeholder="Enter phone no">
									</div>
								</div>
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label">Timings </label>
									<div class="col-sm-5">
										<label for="">From</label>
										<input type="time" name="from_time" value="{{ isset($page_data['from_time'])?$page_data['from_time']:'' }}" class="form-control">
									</div>
									<div class="col-sm-5 mt-3">
										<label for="">To</label>
										<input type="time" name="to_time" value="{{ isset($page_data['to_time'])?$page_data['to_time']:'' }}" class="form-control">
									</div>
								</div>
								<div class="form-group mt-3">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-primary buttons_green pull-left" name="form_blog">Save</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</main>
</section>
@endsection
@push('js')
@endpush