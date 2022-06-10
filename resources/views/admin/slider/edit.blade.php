@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Slider</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('slider.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('slider.update', $slider->id) }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				{{ method_field('PATCH') }}
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Service <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<select name="service_id" class="form-control" id="service_id">
									<option value="" selected>Select service</option>
									@foreach ($services as $service)
										<option value="{{ $service->id }}" {{ $slider->service_id==$service->id?'selected':'' }}>{{ $service->name }}</option>
									@endforeach
								</select>
								<span style="color: red">{{ $errors->first('service_id') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Title </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="title" value="{{ $slider->title }}" placeholder="Enter slider title">
								<span style="color: red">{{ $errors->first('title') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description </label>
							<div class="col-sm-9">
								<textarea class="form-control texteditor" name="description" style="height:140px;" placeholder="Enter description">{!! $slider->description !!}</textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
							</div>
						</div>
						@if($slider->image)
							<div class="form-group">
								<label for="" class="col-sm-2 control-label">Exist Image </label>
								<div class="col-sm-9" style="padding-top:5px">
									<img src="{{ asset('public/admin/images/slider') }}/{{ $slider->image }}" alt="Post" height="100px" width="100px">
								</div>
							</div>
						@endif
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image </label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="image">
								<span style="color: red">{{ $errors->first('image') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<select name="status" class="form-control" id="">
									<option value="1" {{ $service->status==1?'selected':'' }}>Active</option>
									<option value="0" {{ $service->status==0?'selected':'' }}>In-Active</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Save</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
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
