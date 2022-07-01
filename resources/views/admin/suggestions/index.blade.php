@extends('layouts.admin.app')
@section('title', $page_title)
<input type="hidden" id="page_url" value="{{ route('announcement.index') }}">
@push('css')
	<style>
		.hex2::before {
			content: "\2B22";
			display:block;
			font-size:35px;
			-webkit-transform: rotate(-30deg);
			-moz-transform: rotate(-30deg);
			-o-transform: rotate(-30deg);
			transform: rotate(-30deg);
		}
	</style>
@endpush
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
						<div class="mb-3 col-sm-10">
							<input type="text" class="form-control" id="search" placeholder="Search...">
							<input type="hidden" class="form-control" id="status" value="All" placeholder="Search...">
						</div>
						<div class="mb-3 col-sm-2">
							<a href="{{ route('announcement.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Create New Announcement" class="btn btn-primary buttons_green"><i class="fa fa-plus"></i> Add New</a>
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
							<th style="width: 50%;">Announcement</th>
							<th>Date</th>
							<th>Status</th>
							<th width="140">Action</th>
						</tr>
					</thead>
					<tbody id="body">
						@foreach($models as $key=>$model)
							<tr id="id-{{ $model->id }}">
								<td>{{  $models->firstItem()+$key }}.</td>
								<td style="text-align: justify;">{{ $model->announcement }}</td>
								<td>{{ date('d, F-Y', strtotime($model->date)) }}</td>
								<td>
									@if($model->status)
										<span class="label label-success">Active</span>
									@else 
										<span class="label label-danger">In-Active</span>
									@endif
								</td>
								<td width="250px">
									<a href="{{route('announcement.edit', $model->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Announcement" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
									<button class="btn btn-danger btn-sm delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Announcement" data-slug="{{ $model->id }}" data-del-url="{{ route('announcement.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
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
