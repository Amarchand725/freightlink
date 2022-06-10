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
				<!-- Left side columns -->
				<div class="col-lg-12 frm_st">
					<div class="row">
						<div class="mb-3 col-sm-9"></div>
						<div class="mb-3 col-sm-1"></div>
						<div class="mb-3 col-sm-2">
							<a href="{{ route('page.index') }}" class="btn btn-primary buttons_green">View All</a>
						</div>
					</div>
				</div>
				<!-- End Left side columns -->
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="{{ route('page.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
						@csrf
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Page Title <span style='color:red'>*</span></label>
									<div class="col-sm-9">
										<input type="text" autocomplete="off" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter title">
										<span style="color: red">{{ $errors->first('title') }}</span>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Title </label>
									<div class="col-sm-9">
										<input type="text" name="meta_title" class="form-control" value="{{ isset($page_data['home_meta'])?$page_data['home_meta']:'' }}" placeholder="Enter title">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Keyword </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="meta_keyword" style="height:60px;" placeholder="Enter meta keyword">{{ isset($page_data['home_meta_keyword'])?$page_data['home_meta_keyword']:'' }}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Meta Description </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="meta_description" style="height:60px;" placeholder="Enter meta description">{{ isset($page_data['home_meta_description'])?$page_data['home_meta_description']:'' }}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Description </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="description" maxlength="200" style="height:140px;" placeholder="Describe page">{{ old('description') }}</textarea>
										<span style="color: red">{{ $errors->first('description') }}</span>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-primary buttons_green">Save</button>
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

		$("#regform").validate({
			rules: {
				title: "required"
			}
		});
	});
</script>
@endpush
