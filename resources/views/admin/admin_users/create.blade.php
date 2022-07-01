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
            <section class="section faq">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="accordion accordion-flush" id="faq-group-2">
                                    <div class="accordion-item">
										<div class="accordion-body">
											<form class="form-inline" action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="row">
													<div class="col-lg-3" style="position: relative;">
														<div class="file-drop-area" >
															<img id="preview" src="{{ asset('public/admin/assets/img/frieght-imgs/upload_btn.png') }}" alt="folder-icon"
																class="img-fluid">
															<input id="img_input" class="file-input" name="image" type="file" accept="image/*" accept="application/pdf">
															<span style="color:red">{{ $errors->first('image') }}</span>
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
																	<label for="colFormLabelSm"
																		class="col-sm-4 col-form-label col-form-label-sm">Full Name:</label>
																	<div class="col-sm-8">
																		<input type="name"
																			class="form-control form-control-sm"
																			id="colFormLabelSm"
																			name="last_name"
																			placeholder="Michael Sephton-Poultney">
																		<span style="color: red">{{ $errors->first('last_name') }}</span>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row mb-3">
																	<label for="colFormLabelSm"
																		class="col-sm-3 col-form-label col-form-label-sm">Username:
																		</label>
																	<div class="col-sm-9">
																		<input type="text"
																			class="form-control form-control-sm"
																			id="colFormLabelSm"
																			name="name"
																			placeholder="Enter user name">
																		<span style="color: red">{{ $errors->first('name') }}</span>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row mb-3">
																	<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
																		Title:
																	</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control form-control-sm" 
																			id="colFormLabelSm"
																			name="title"
																			placeholder="Managing Director">
																		<span style="color: red">{{ $errors->first('title') }}</span>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row mb-3">
																	<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">password:
																	</label>
																	<div class="col-sm-9">
																		<input type="password" class="form-control form-control-sm" 
																			id="colFormLabelSm"
																			name="password"
																			placeholder="gdy342t3yfgdi2">
																		<span style="color: red">{{ $errors->first('password') }}</span>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row mb-3">
																	<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email:
																	</label>
																	<div class="col-sm-8">
																		<input type="email" class="form-control form-control-sm" 
																			id="colFormLabelSm"
																			name="email"
																			placeholder="michael@freightlink.com">
																		<span style="color: red">{{ $errors->first('email') }}</span>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row mb-3 more">
																	<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Linked Offices:
																	</label>
																	<div class="col-sm-6 link_a">
																		<input type="text" name="offices[]" class="form-control" placeholder="Enter office">
																	</div>
																	<div class="col-sm-1 link_a">
																		<button type="button" class="btn btn-success buttons_green add-more">Add</button>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row mb-3">
																	<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
																		Mobile::
																	</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control form-control-sm" 
																			id="colFormLabelSm"
																			name="mobile"
																			placeholder="13324532">
																		<span style="color: red">{{ $errors->first('mobile') }}</span>
																	</div>
																</div>
															</div>
															<div class="col-md-6"> </div>
															<div class="col-md-12 d-flex justify-content-end">
																<button class="btn btn-primary buttons_green ">
																	Save Changes
																</button>
															</div>
														</div>  
													</div>
												</div>
											</form>
										</div>
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
		$(document).on('click', '.add-more', function(){
			var html = '<div class="row mb-3 added-more">'+
							'<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm"></label>'+
							'<div class="col-sm-6 link_a">'+
								'<input type="text" name="offices[]" class="form-control" placeholder="Enter office">'+
							'</div>'+
							'<div class="col-sm-1 link_a">'+
								'<button type="button" class="btn btn-danger remove">Remove</button>'+
							'</div>'+
						'</div>';
			$(this).parents('.more').append(html);
		});

		$(document).on('click', '.remove', function(){
			$(this).parents('.added-more').remove();
		});

		img_input.onchange = evt => {
			const [file] = img_input.files
			if (file) {
				preview.src = URL.createObjectURL(file)
			}
		}
	</script>
@endpush
