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
			<div class="d-flex justify-content-center ">
				<table class="table table-borderless table-responsive">
					<tbody>
						<tr>
							<th colspan="3"><i class="fa fa-arrow-right"></i> User Details</th>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Image</th>
							<td>
								<img src="" alt="">
							</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">First Name</th>
							<td>{{ $model->name }}</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Last Name</th>
							<td>{{ $model->last_name }}</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Phone</th>
							<td>{{ $model->phone }}</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Email</th>
							<td>{{ $model->email }}</td>
						</tr>
						<tr>
							<th colspan="3"><i class="fa fa-arrow-right"></i> Company Details</th>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Company Name</th>
							<td>{{ $model->company_name }}</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Country</th>
							<td>{{ $model->country }}</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">City</th>
							<td>{{ $model->city }}</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Website</th>
							<td>{{ $model->website }}</td>
						</tr>
						<tr>
							<td></td>
							<th style="width: 200px">Status</th>
							<td>
								@if($model->status)
									<span class="label label-success">Active</span>
								@else 
									<span class="label label-danger">In-Active</span>
								@endif
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
