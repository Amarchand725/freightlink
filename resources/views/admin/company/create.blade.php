@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/truck-logo.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $page_title }} </h4>
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
            <section class="section faq">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-inline" action="{{ route('company.store') }}" method="post" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="row mb-5">
                                    <div class="col-lg-12 mrl_head">
                                        <div class="row label_forms">
                                            <div class="col-3 frm_st">
                                                <input type="text" class="form-control" value="{{ old('company_name') }}" name="company_name" id="company_name"  placeholder="Company Name*">
                                                <span style="color: red">{{ $errors->first('company_name') }}</span>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check form-switch">
                                                    <label class="form-check-label" for="new-member">New Member </label>
                                                    @if(old('new_member'))
                                                        <input class="form-check-input" name="new_member" value="1" type="checkbox" role="switch"  id="new-member" checked />
                                                    @else 
                                                        <input class="form-check-input" name="new_member" value="1" type="checkbox" role="switch"  id="new-member" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-switch">
                                                    <label class="form-check-label" for="suspended">Suspended </label>
                                                    
                                                    @if(old('suspended'))
                                                        <input class="form-check-input bg-danger" name="suspended" value="1" type="checkbox" role="switch" id="suspended" checked />
                                                    @else 
                                                        <input class="form-check-input bg-danger" name="suspended" value="1" type="checkbox" role="switch" id="suspended" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check form-switch">
                                                    <label class="form-check-label" for="status">Active </label>
                                                    
                                                    @if(old('status'))
                                                        <input class="form-check-input bg-success" name="status" value="1" type="checkbox" role="switch" id="status" checked />
                                                    @else 
                                                        <input class="form-check-input bg-success" name="status" value="1" type="checkbox" role="switch" id="status"  />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-check form-switch">
                                                    <label class="form-check-label" for="on_website">On Website </label>
                                                    
                                                    @if(old('on_website'))
                                                        <input class="form-check-input bg-success" name="on_website" value="1" type="checkbox" role="switch" id="on_website" checked />
                                                    @else 
                                                        <input class="form-check-input bg-success" name="on_website" value="1" type="checkbox" role="switch" id="on_website"  />
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3" style="position: relative">
                                        <div class="file-drop-area">
                                            <img id="logo_preview" src="{{ asset('public/admin/assets/img/frieght-imgs/upload_btn.png') }}" alt="folder-icon" class="img-fluid">
                                            <input class="file-input" name="logo" id="logo" type="file" multiple="">
                                            <span style="color: red">{{ $errors->first('logo') }}</span>
                                        </div>
                                        <div class=" row">
                                            <div class="col-8 m-lg-4">
                                                <button class="btn btn-primary buttons_green ">Upload Logo</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 faq_inpt">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                                                        Address:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" value="{{ old('address_line_one') }}" name="address_line_one" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Line 1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm">Enrollment
                                                        Date:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <input type="date" value="{{ old('enrollment_date') }}" name="enrollment_date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm"> </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" value="{{ old('address_line_two') }}" name="address_line_two" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Line 2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm"
                                                        class="col-sm-5 col-form-label col-form-label-sm">Expiry date:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <input type="date" value="{{ old('expiry_date') }}" name="expiry_date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm"
                                                        class="col-sm-4 col-form-label col-form-label-sm">
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="address_line_three" class="form-control form-control-sm" value="{{ old('address_line_three') }}" id="colFormLabelSm" placeholder="Line 3">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm"
                                                        class="col-sm-5 col-form-label col-form-label-sm">Country:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" value="{{ old('country') }}" name="country" class="form-control" placeholder="Enter country name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                                                        Website:
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" value="{{ old('website') }}" name="website" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Website">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm">
                                                        City:
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" value="{{ old('city') }}" name="city" class="form-control" placeholder="Enter city name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary buttons_green ">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="row py-4" style="background: #FCFCFC; ">
                            <div class="col-lg-12 mrl_head">
                                <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/networsk.png') }}" alt="truck" class="IMG-FLUID">
                                    Networks
                                </h4>
                                <div class="d-flex justify-content-center">
									<div class="row">
										@foreach ($networks as $network)
											<div class="col">
												<img src="{{ asset('public/admin/images/networks') }}/{{ $network->white_bg_logo }}" alt="confirm"
												class="img-fluid">
											</div>
										@endforeach
									</div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-4">
                            @foreach ($networks as $network)
                                <div class="col">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input bg-success" type="checkbox" name="networks[{{ $network->id }}][]" value="1" role="switch" id="flexSwitchCheckChecked" checked="">
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-12 d-flex justify-content-end pt-3">
                                <button type="submit" disabled class="btn btn-primary buttons_green ">
                                    Save Changes
                                </button>
                            </div>
                        </div>

                        <div class="row" style="background: #FCFCFC;">
                            <div class="col-lg-12 mrl_head">
                                <div class="row py-2" style="background: #FCFCFC; ">
                                    <div class="col-lg-12 mrl_head">
                                        <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/company-logo.png') }}" alt="truck"
                                                class="IMG-FLUID"> Company Profile
                                        </h4>
                                        <div class="d-flex justify-content-center"></div>
                                    </div>
                                </div>
                                <div class="row " style="background: #FCFCFC; ">
                                    <div class="col-lg-12 mrl_head">
                                        <form action="#">
                                            <div class="form-group">
                                                <textarea class="form-control texteditor" name="company_profile" id="exampleFormControlTextarea1" rows="8" placeholder="Add text"></textarea>
                                            </div>
                                            <div class="pt-5 d-flex justify-content-end ">
                                                <button type="submit" disabled class="btn btn-primary buttons_green  ">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="background: #FCFCFC;">
                            <div class="col-lg-12 mrl_head py-5">
                                <div class="row">
                                    <div class="col-7">
                                        <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-icon.png') }}" alt="truck"
                                                class="IMG-FLUID"> Users
                                        </h4>
                                    </div>
                                    <div class="col-3 ">
                                        <select id="disabledSelect" class="form-select">
                                            <option>Search User</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col">
                                        <button class="btn btn-primary buttons_green  ">Add User</button>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center ">
                                    <table class="table table-borderless table-responsive">
                                        <tbody>
                                            <tr class="top_head">
                                                <td>User Name</td>
                                                <td>Title</td>
                                                <td>Email</td>
                                                <td>Mobile</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr class="para_txt">
                                                <td>John Doe</td>
                                                <td>Managing Director</td>
                                                <td>John@abclogistics.com</td>
                                                <td>345345</td>
                                                <td><a href="#"><u>Unlink</u></a></td>
                                            </tr>
                                            <tr class="para_txt">
                                                <td>John Doe</td>
                                                <td>Managing Director</td>
                                                <td>John@abclogistics.com</td>
                                                <td>345345</td>
                                                <td><a href="#"><u>Unlink</u></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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

	$(document).ready(function() {
		if ($(".texteditor").length > 0) {
			tinymce.init({
				selector: "textarea.texteditor",
				theme: "modern",
				height: 150,
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

			});
		}
	});
</script>
@endpush
