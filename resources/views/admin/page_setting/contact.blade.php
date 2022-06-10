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
									<label for="" class="col-sm-2 control-label">Contact Heading </label>
									<div class="col-sm-9">
										<input type="text" name="contact_heading" class="form-control" value="{{ isset($page_data['contact_heading'])?$page_data['contact_heading']:'' }}" placeholder="Enter heading">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Contact Address </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="contact_address" style="height:60px;" placeholder="Enter address">{{ isset($page_data['contact_address'])?$page_data['contact_address']:'' }}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Contact Email </label>
									<div class="col-sm-9">
										<input type="email" class="form-control" name="contact_email" value="{{ isset($page_data['contact_email'])?$page_data['contact_email']:'' }}" placeholder="Enter email">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Contact Phone </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="contact_phone" value="{{ isset($page_data['contact_phone'])?$page_data['contact_phone']:'' }}" placeholder="Enter phone number">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Contact Map (iframe Code) </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="contact_map" style="height:120px;" placeholder="Enter map iframe code">{{ isset($page_data['contact_map'])?$page_data['contact_map']:'' }}</textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-primary buttons_green pull-left" name="form_contact">Save</button>
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
<script>
	$(document).ready(function() {
		if ($(".texteditor").length > 0) {
			tinymce.init({
				selector: "textarea.texteditor",
				theme: "modern",
				height: 150,
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

			});
		}
	});
</script>
@endpush