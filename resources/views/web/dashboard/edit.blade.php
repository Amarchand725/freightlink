@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/truck-logo.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; Profile </h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="section dashboard">
            <hr>
			<form action="{{ route('admin.profile.update') }}" method="post">
				@csrf
				<input type="hidden" name="update_status" value="profile">
				<div class="row" style="background: #FCFCFC;">
					<div class="col-lg-8 mrl_head">
						<div class="d-flex justify-content-center">
							<table class="table table-borderless table-responsive">
								<tbody>
									<tr>
										<th scope="row">Name:</th>
										<td>
											<input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Enter name">
											<span style="color: red">{{ $errors->first('name') }}</span>
										</td>
									</tr>
									<tr>
										<th scope="row">Email:</th>
										<td><input type="email" name="email" value="{{ Auth::user()->email }}" disabled class="form-control" placeholder="Enter email"></td>
									</tr>
									<tr>
										<th scope="row">Phone:</th>
										<td><input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control" placeholder="Enter phone"></td>
									</tr>
									<tr>
										<th scope="row">Last Update:</th>
										<td>
											<input type="text" value="{{ date('d, F- Y', strtotime($model->updated_at)) }}" disabled class="form-control">
										</td>
									</tr>
									<tr>
										<th></th>
										<td><button type="submit" class="buttons_green">Update</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</form>
        </section>
		<section class="section dashboard">
			<h4> 
				<img src="{{ asset('public/admin/assets/img/frieght-imgs/admin-icon.png') }}" alt="truck" class="IMG-FLUID"> Change Password
			</h4>
			<hr />
			<form action="{{ route('admin.profile.update') }}" method="post">
				@csrf

				<input type="hidden" name="update_status" value="password">
				<div class="row" style="background: #FCFCFC;">
					<div class="col-lg-8 mrl_head">
						<div class="d-flex justify-content-center">
							<table class="table table-borderless table-responsive">
								<tbody>
									<tr>
										<th scope="row">Old Password:</th>
										<td>
											<input type="password" name="old_password" value="{{ old('old_password') }}" class="form-control password" placeholder="Enter old password">
											<span style="color: red">{{ $errors->first('old_password') }}</span>
										</td>
									</tr>
									<tr>
										<th scope="row">New Password:</th>
										<td>
											<input type="password" name="new_password" value="{{ old('new_password') }}" class="form-control password" placeholder="Enter new password">
											<span style="color: red">{{ $errors->first('new_password') }}</span>
										</td>
									</tr>
									<tr>
										<th scope="row">Confirm Password:</th>
										<td>
											<input type="password" name="confirm_password" value="{{ old('confirm_password') }}" class="form-control password" placeholder="Confirme password">
											<div class="form-check" id="">
												<input type="checkbox" class="form-check-input" id="show_password">
												<label class="form-check-label" for="show_password"> Show Password </label>
											</div>
											<span style="color: red">{{ $errors->first('confirm_password') }}</span>
										</td>
									</tr>
									<tr>
										<th></th>
										<td><button type="submit" class="buttons_green">Update</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</form>
		</section>
	</main>
</section>
@endsection

@push('js')
	<script>
		$(document).on('change', '#show_password', function() {
            var checkbox = $(this), 
            value = checkbox.val(); 

            if (checkbox.is(':checked'))
            {
				$('.password').attr('type', 'text');
            }else
            {
                $('.password').attr('type', 'password');
            }
        });
	</script>
@endpush