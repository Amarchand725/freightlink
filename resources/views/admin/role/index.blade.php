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
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
						</div>
						<div class="mb-3 col-sm-1">
							<button class="btn btn-primary buttons_green">Search</button>
						</div>
						<div class="mb-3 col-sm-2">
							<a href="{{ route('role.create') }}" class="btn btn-primary buttons_green">Add New Role</a>
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
							<th>Role</th>
							<th>Description</th>
							<th>Status</th>
							<th>Date</th>
							<th width="140">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($roles as $key=>$model)
							<tr id="id-{{ $model->id }}">
								<td>{{  $roles->firstItem()+$key }}.</td>
								<td>{!! $model->name??'N/A' !!}</td>
								<td>{!! \Illuminate\Support\Str::limit($model->description,60) !!}</td>
								<td>
									@if($model->status)
										<span class="label label-success">Active</span>
									@else
										<span class="label label-danger">In-Active</span>
									@endif
								</td>
								<td>{{ date('d, F-Y h:i a', strtotime($model->created_at)) }}</td>
								<td width="250px">
									<a href="{{route('role.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Partner" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
									<button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Partner" data-slug="{{ $model->id }}" data-del-url="{{ route('role.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
								</td>
							</tr>
						@endforeach
						<tr>
							<td colspan="8">
								Displying {{$roles->firstItem()}} to {{$roles->lastItem()}} of {{$roles->total()}} records
								<div class="d-flex justify-content-center">
									{!! $roles->links('pagination::bootstrap-4') !!}
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
        </section>
    </section>
@endsection

@push('js')
@endpush
