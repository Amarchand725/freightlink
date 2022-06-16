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

		<section class="section dashboard" style="background: #FCFCFC;">
			<div class="row">
				<div class="col-lg-12 frm_st">
					<div class="row">
						<div class="mb-3 col-sm-9">
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
						</div>
						<div class="mb-3 col-sm-1">
							<button class="btn btn-primary buttons_green">Search</button>
						</div>
					</div>
				</div>
			</div>
            <section class="section faq mt-5">
                <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<form class="form-inline" action="{{ route('download.store') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
								@csrf 
								<div class="row">
									<div class="col-lg-3">
										<div class="file-drop-area" style="position: relative;">
											<img src="{{ asset('public/admin/assets/img/frieght-imgs/upload_btn.png') }}" alt="folder-icon"
												class="img-fluid">
											<input class="file-input" name="file" type="file" accept="application/pdf">
											<span style="color:red">{{ $errors->first('file') }}</span>
										</div>
										<div class=" row">
											<div class="col-8 m-lg-4">
												<button class="btn btn-primary buttons_green">Upload Icon</button>
											</div>
										</div>
									</div>
									<div class="col-lg-9 faq_inpt">
										<div class="row">
											<div class="col-md-6">
												<div class="row mb-3">
													<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
														Folder Name:
													</label>
													<div class="col-sm-8">
														<input type="text" class="form-control form-control-sm" name="name" id="colFormLabelSm" placeholder="Folder Name:">
														<span style="color:red">{{ $errors->first('name') }}</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row mb-3">
													<label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"></label>
													<div class="col-sm-7">
														<button type="button" class="btn btn-primary buttons_green ">Upload Photo</button>
													</div>
												</div>
											</div>
											<div class="mt-5"></div>
											<div class="col-md-12 d-flex justify-content-end">
												<button type="submit" class="btn btn-primary buttons_green ">
													Save Changes
												</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<div class="row mt-5" style="background: #FCFCFC;">
								<div class="col-lg-12 mrl_head">
									<div class="row" id="downloadable">
										@foreach ($models as $model)
											<div class="col-lg-3 ">
												<div class="profile-pic file-drop-area">
													<a href="{{ asset('public/admin/images/downloads') }}/{{ $model->file }}" download>
														<img src="{{ asset('public/admin/assets/img/frieght-imgs/folder-icon.png') }}" alt="folder-icon" class="img-fluid">
													</a>
													<div class="edit"><a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:#45DABE;"></i></a></div>
												</div>
												<span>
													<img src="{{ asset('public/admin/assets/img/frieght-imgs/pdf-icon-svg-6.jpg') }}" style="width: 20px;" alt="pdf" class="img-fluid">
													<a href="{{ asset('public/admin/images/downloads') }}/{{ $model->file }}" download><small style="font-size: 10px;">{{ $model->name }}</small></a>
												</span>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </section>
        </section>
	</main>
</section>

@endsection

@push('js')
@endpush
