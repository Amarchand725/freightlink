@extends('layouts.admin.app')
@section('title', $page_title)
<input type="hidden" id="page_url" value="{{ route('faq.index') }}">
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
						<div class="mb-3 col-sm-10">
							<input type="text" class="form-control" id="search" placeholder="Search...">
							<input type="hidden" class="form-control" id="status" placeholder="Search...">
						</div>
						<div class="mb-3 col-sm-2">
							<a href="{{ route('faq.create') }}" class="btn btn-primary buttons_green">Add New</a>
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
							<th>Question</th>
							<th>Answer</th>
							<th>Status</th>
							<th>Date</th>
							<th width="140">Action</th>
						</tr>
					</thead>
					<tbody id="body">
						@foreach($models as $key=>$model)
							<tr id="id-{{ $model->id }}">
								<td>{{  $models->firstItem()+$key }}.</td>
								<td>{!! $model->question !!}</td>
								<td>{!! $model->answer !!}</td>
								<td>
									@if($model->status)
										<span class="label label-success">Active</span>
									@else
										<span class="label label-danger">In-Active</span>
									@endif
								</td>
								<td>{{ date('d, F-Y h:i a', strtotime($model->created_at)) }}</td>
								<td width="250px">
									<a href="{{route('faq.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit FAQ" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
									{{-- <a href="{{route('partner.show', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Show Partner" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a> --}}
									<button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete FAQ" data-slug="{{ $model->id }}" data-del-url="{{ route('faq.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
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
