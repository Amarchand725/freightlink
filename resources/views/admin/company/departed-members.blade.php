@extends('layouts.admin.app')
@section('title', $page_title)
<input type="hidden" id="page_url" value="{{ route('company.departed_members') }}">
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
					</div>
				</div>
			</div>
		</div>

		<section class="section dashboard" style="background: #FCFCFC;">
            <div class="row">
				<div class="col-lg-12 frm_st">
					<div class="row">
						<div class="mb-3 col-sm-12">
							<input type="text" class="form-control" id="search" placeholder="Search...">
							<input type="hidden" class="form-control" id="status" value="All" placeholder="Search...">
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
							<th>Expired</th>
							<th>Networks</th>
							<th width="140">Action</th>
						</tr>
					</thead>
					<tbody id="body">
						@foreach($models as $key=>$model)
							<tr id="id-{{ $model->slug }}">
								<td>{{  $models->firstItem()+$key }}.</td>
								<td>
									@if($model->logo)
										<img class="rounded-circle" src="{{ asset('public/admin/images/companies/'.$model->logo) }}" alt="" style="width:50px; height:50px">
									@else
										<img src="{{ asset('public/admin/images/partners/no-photo1.jpg') }}" style="width:50px;">
									@endif
								</td>
								<td>{!! $model->name??'N/A' !!}</td>
								<td>{!! $model->country??'N/A' !!}</td>
								<td>{!! date('d, M-Y', strtotime($model->expire_date)) !!}</td>
								<td>
									@foreach ($model->hasCompanyNetworks as $company_network)
										<span class="hex2" style="color: {{ $company_network->hasNetwork->color }}; display: flex;" />
									@endforeach
								</td>
								<td width="250px">
									<a href="{{route('company.show', $model->slug)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Show Company" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a>
									@if(Auth::user()->hasRole('Admin'))
										<button class="btn btn-danger btn-sm delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Company" data-slug="{{ $model->slug }}" data-del-url="{{ route('company.destroy', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
									@endif
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
