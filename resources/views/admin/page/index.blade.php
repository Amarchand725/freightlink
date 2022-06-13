@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
<main id="main" class="main">
	<div class="search-bar search_bt">
		<div class="row" style="background: #FCFCFC;">
			<div class="col-lg-12 mrl_head">
				<div class="row py-2" style="background: #FCFCFC; ">
					<div class="col-lg-8 mrl_head">
						<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $page_title }}</h4>
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
					<div class="mb-3 col-sm-9">
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Company Name">
					</div>
					<div class="mb-3 col-sm-1">
						<button class="btn btn-primary buttons_green">Search</button>
					</div>
					<div class="mb-3 col-sm-2">
						<a href="{{ route('page.create') }}" class="btn btn-primary buttons_green">Add New</a>
					</div>
				</div>
			</div>
			<!-- End Left side columns -->
		</div>
	  
		<div class="d-flex justify-content-center ">
			<table class="table table-borderless table-responsive">
				<thead>
					<tr>
						<th>SL</th>
						<th>Title</th>
						<th>Meta Title</th>
						<th>Meta Keyword</th>
						<th>Meta Description</th>
						<th>Description</th>
						<th>Status</th>
						<th width="140">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($models as $key=>$model)
						<tr id="id-{{ $model->slug }}">
							<td>{{  $models->firstItem()+$key }}.</td>
							<td>{!! $model->title??'N/A' !!}</td>
							<td>{!! $model->meta_title??'N/A' !!}</td>
							<td>{!! $model->meta_keyword??'N/A' !!}</td>
							<td>{!! \Illuminate\Support\Str::limit($model->meta_description??'N/A',60) !!}</td>
							<td>{!! \Illuminate\Support\Str::limit($model->description,60) !!}</td>
							<td>
								@if($model->status)
									<span class="label label-success">Active</span>
								@else
									<span class="label label-danger">In-Active</span>
								@endif
							</td>
							<td width="250px">
								@can('page-edit')
									<a href="{{route('page.edit', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit page" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
								@endcan
								{{-- @can('page-delete')
									<button class="btn btn-danger btn-xs delete" data-slug="{{ $model->slug }}" data-del-url="{{ url('page', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
								@endcan --}}

								<a href="{{route('page_setting.show', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Page Setting" class="btn btn-info btn-xs buttons_green	"><i class="fa fa-cog"></i> Setting</a>
							</td>
						</tr>
					@endforeach
					<tr>
						<td colspan="8">
							Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
							<div class="d-flex justify-content-center">
								{!! $models->links('pagination::bootstrap-4') !!}
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
@endsection

@push('js')
@endpush
