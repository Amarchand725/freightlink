@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')

<section class="content-header">
	<div class="content-header-left">
		<h1>Show Slider Details</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('slider.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table bordered">
					<tr>
						<th width="200px">Image</th>
						<td>
							@if($slider->image)
								<img src="{{ asset('public/admin/images/slider') }}/{{ $slider->image }}" alt="Slider Image" height="400px" width="500px">
							@else
								<img src="{{ asset('public/admin/images/slider/no-photo1.jpg') }}" alt="Slider Image" height="400px" width="500px">
							@endif
						</td>
					</tr>
					<tr>
						<th>Service</th>
						<td><span class="badge badge-success">{!! $slider->hasService->name !!}</span></td>
					</tr>
					<tr>
						<th>Title</th>
						<td><span class="badge badge-success">{!! $slider->title !!}</span></td>
					</tr>
					<tr>
						<th>Sub Title</th>
						<td>{!! $slider->sub_title !!}</td>
					</tr>
					<tr>
						<th>Description</th>
						<td>{!! $slider->description !!}</td>
					</tr>
					<tr>
						<th>Created at</th>
						<td>{!! date('d, M-Y h:i a', strtotime($slider->created_at)) !!}</td>
					</tr>
					<tr>
						<th>Created By</th>
						<td><span class="badge badge-success">{{$slider->hasCreatedBy->name}}</span></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.editor_short').summernote({
			height: 150
		});
	});
</script>
@endsection
