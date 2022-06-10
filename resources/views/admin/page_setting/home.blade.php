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
				<div class="col-lg-12 frm_st">
					@if (session('message'))
						<div class="callout callout-success">
							{{ session('message') }}
						</div>
					@endif
					
					<div class="box box-info">
						<div class="box-body">
							<div class="mb-5">
								<h3 class="sec_title">Home Section</h3>
								<form action="{{ route('page_setting.store') }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
									@csrf
									<input type="hidden" name="parent_slug" id="" value="{{ $model->slug }}">
									
									@if(isset($page_data['home_background_image']))
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Existing Image</label>
											<div class="col-sm-6" style="padding-top:6px;">
												<img src="{{ asset('/public/admin/assets/images/page/'.$page_data['home_background_image']) }}" class="existing-photo" style="height:100px;">
											</div>
										</div>
									@endif
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Background Image </label>
										<div class="col-sm-6">
											<input type="file" name="home_background_image" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Title </label>
										<div class="col-sm-6">
											<input type="text" name="description" class="form-control" value="{{ (isset($page_data['home_title'])?$page_data['home_title']:'') }}" placeholder="Enter title">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Description </label>
										<div class="col-sm-6">
											<textarea name="description" class="form-control" id="description" cols="30" rows="5" placeholder="Enter description">{{ (isset($page_data['description'])?$page_data['description']:'') }}</textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Show on Home? </label>
										<div class="col-sm-2">
											<select name="home_section" class="form-control select2 select2-accessible" style="width:auto;" tabindex="-1" aria-hidden="true">
												<option value="1" {{ (isset($page_data['home_section'])?($page_data['home_section']==1?'selected':''):'') }}>Show</option>
												<option value="0" {{ (isset($page_data['home_section'])?($page_data['home_section']==0?'selected':''):'') }}>Hide</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-primary buttons_green pull-left" name="form_home_blog">Save</button>
										</div>
									</div>
								</form>
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