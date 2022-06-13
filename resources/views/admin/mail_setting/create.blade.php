@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $page_title }}
							</h4>
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
					<form action="{{ route('mail_setting.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
						@csrf
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Mailer <span style='color:red'>*</span></label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_mailer" value="{{ old('mail_mailer') }}" placeholder="Enter mailer e.g smtp">
										<span style="color: red">{{ $errors->first('mail_mailer') }}</span>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Host <span style='color:red'>*</span></label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_host" value="{{ old('mail_host') }}" placeholder="Enter mail_host e.g smtp.gmail.com">
										<span style="color: red">{{ $errors->first('mail_host') }}</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Port <span style='color:red'>*</span></label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_port" value="{{ old('mail_port') }}" placeholder="Enter mail_port e.g 587">
										<span style="color: red">{{ $errors->first('mail_port') }}</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">User Name <span style='color:red'>*</span></label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_username" value="{{ old('mail_username') }}" placeholder="Enter mail_username abc@gmail.com">
										<span style="color: red">{{ $errors->first('mail_username') }}</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Password <span style='color:red'>*</span></label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_password" value="{{ old('mail_password') }}" placeholder="Enter mail_password">
										<span style="color: red">{{ $errors->first('mail_password') }}</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Encryption <span style='color:red'>*</span></label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_encryption" value="{{ old('mail_encryption') }}" placeholder="Enter mail_encryption e.g tls">
										<span style="color: red">{{ $errors->first('mail_encryption') }}</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">From Address </label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_from_address" value="{{ old('mail_from_address') }}" placeholder="Enter mail_from_address">
										<span style="color: red">{{ $errors->first('mail_from_address') }}</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">From Name </label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="mail_from_name" value="{{ old('mail_from_name') }}" placeholder="Enter mail_from_name">
										<span style="color: red">{{ $errors->first('mail_from_name') }}</span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-primary buttons_green pull-left">Save</button>
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
