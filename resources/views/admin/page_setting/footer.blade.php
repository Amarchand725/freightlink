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
					@if (session('message'))
						<div class="callout callout-success">
							{{ session('message') }}
						</div>
					@endif
					<form action="{{ route('page_setting.store') }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
						@csrf

						<input type="hidden" name="parent_slug" id="" value="{{ $model->slug }}">
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Email </label>
									<div class="col-sm-9">
										<input type="email" name="footer_email" class="form-control" value="{{ isset($page_data['footer_email'])?$page_data['footer_email']:'' }}" placeholder="Enter email address">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Copy Rights </label>
									<div class="col-sm-9">
										<input type="text" name="footer_copy_right" class="form-control" value="{{ isset($page_data['footer_copy_right'])?$page_data['footer_copy_right']:'' }}" placeholder="Enter copy rights">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Phone </label>
									<div class="col-sm-9">
										<input type="text" name="footer_phone" class="form-control" value="{{ isset($page_data['footer_phone'])?$page_data['footer_phone']:'' }}" placeholder="Enter phone no">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Twitter Link </label>
									<div class="col-sm-9">
										<input type="text" name="footer_twitter" class="form-control" value="{{ isset($page_data['footer_twitter'])?$page_data['footer_twitter']:'' }}" placeholder="Enter social link">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Facebook Link </label>
									<div class="col-sm-9">
										<input type="text" name="footer_facebook" class="form-control" value="{{ isset($page_data['footer_facebook'])?$page_data['footer_facebook']:'' }}" placeholder="Enter social link">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Youtube Link </label>
									<div class="col-sm-9">
										<input type="text" name="footer_youtube" class="form-control" value="{{ isset($page_data['footer_youtube'])?$page_data['footer_youtube']:'' }}" placeholder="Enter youtube link">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Instagram Link </label>
									<div class="col-sm-9">
										<input type="text" name="footer_instagram" class="form-control" value="{{ isset($page_data['footer_instagram'])?$page_data['footer_instagram']:'' }}" placeholder="Enter social link">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Skype Link </label>
									<div class="col-sm-9">
										<input type="text" name="footer_skype" class="form-control" value="{{ isset($page_data['footer_skype'])?$page_data['footer_skype']:'' }}" placeholder="Enter social link">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Linkedin Link </label>
									<div class="col-sm-9">
										<input type="text" name="footer_linkedin" class="form-control" value="{{ isset($page_data['footer_linkedin'])?$page_data['footer_linkedin']:'' }}" placeholder="Enter social link">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Address </label>
									<div class="col-sm-9">
										<textarea name="footer_address" id="" class="form-control" placeholder="Enter address">{{ isset($page_data['footer_address'])?$page_data['footer_address']:'' }}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Description </label>
									<div class="col-sm-9">
										<textarea name="footer_description" id="" class="form-control" placeholder="Enter description">{{ isset($page_data['footer_description'])?$page_data['footer_description']:'' }}</textarea>
									</div>
								</div>
								
								<div class="form-group">
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
@endsection
@push('js')
@endpush