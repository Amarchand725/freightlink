@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/company-green.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $page_title }}</h4>
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

		<section class="section dashboard" style="background: #FCFCFC;">
            <div class="row">
				<div class="col-lg-12 frm_st">
					<div class="row">
						<div class="mb-3 col-sm-9">
							<input type="text" class="form-control" id="search" placeholder="Search...">
						</div>
						<div class="mb-3 col-sm-1">
							<button type="button" class="btn btn-primary buttons_green">Search</button>
						</div>
						<div class="mb-3 col-sm-2">
							<a href="{{ route('company.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Create New Compnay" class="btn btn-primary buttons_green">Add New</a>
						</div>
					</div>
				</div>
			</div>
            <hr>
          
            <div class="d-flex justify-content-center ">
                <table class="table table-borderless table-responsive">
					<thead>
						<tr>
							<th>SL</th>
							<th>Logo</th>
							<th>Name</th>
							<th>Country</th>
							<th>City</th>
							<th>Status</th>
							<th>Date</th>
							<th width="140">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($models as $key=>$model)
							<tr id="id-{{ $model->slug }}">
								<td>{{  $models->firstItem()+$key }}.</td>
								<td>
									@if($model->logo)
										<img class="rounded-circle" src="{{ asset('public/admin/images/expands_possilities/'.$model->logo) }}" alt="" style="width:50px; height:50px">
									@else
										<img src="{{ asset('public/admin/images/partners/no-photo1.jpg') }}" style="width:50px;">
									@endif
								</td>
								<td>{!! $model->name??'N/A' !!}</td>
								<td>{!! $model->country??'N/A' !!}</td>
								<td>{!! $model->city??'N/A' !!}</td>
								<td>
									@if($model->status)
										<span class="label label-success">Active</span>
									@else
										<span class="label label-danger">In-Active</span>
									@endif
								</td>
								<td>{{ date('d, F-Y h:i a', strtotime($model->created_at)) }}</td>
								<td width="250px">
									<a href="{{route('company.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Company" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
									{{-- <a href="{{route('partner.show', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Show Partner" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a> --}}
									<button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Company" data-slug="{{ $model->slug }}" data-del-url="{{ route('company.destroy', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
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
	</main>
</section>

@endsection

@push('js')
@endpush
