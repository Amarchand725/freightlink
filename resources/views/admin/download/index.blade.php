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
									<div class="col-lg-3" style="position: relative;">
										<div class="file-drop-area" >
											<img id="logo_preview" src="{{ asset('public/admin/assets/img/frieght-imgs/upload_btn.png') }}" alt="folder-icon"
												class="img-fluid">
											<input id="logo" class="file-input" name="file" type="file" accept="application/pdf">
											<span style="color:red">{{ $errors->first('file') }}</span>
										</div>
										<div class=" row">
											<div class="col-8 m-lg-4">
												<button type="button" class="btn btn-primary buttons_green">Upload Icon</button>
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
	<script>
		logo.onchange = evt => {
			const [file] = logo.files
			if (file) {
				logo_preview.src = URL.createObjectURL(file)
			}
		}
	</script>
@endpush
