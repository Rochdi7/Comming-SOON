<?php $page = 'otp'; ?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
					<div class="col-lg-5 mx-auto">
						<form action="{{url('admin/reset-password')}}" class="digit-group p-4">
							<div class="mx-auto mb-5 text-center">
								<img src="{{URL::asset('admin_assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
							</div>
							<div class="card authentication-card mb-0">
								<div class="card-body">
									<div class="login-icon bg-dark d-flex align-items-center justify-content-center mx-auto mb-4">
										<i class="ti ti-mail fs-24"></i>
									</div>
									<div class="text-center mb-3">
										<h4 class="mb-1">Verify Your Email</h4>
										<p class="mb-0">We have Sent OTP to info@example.com to verify your 
											email address and activate your account entering the OTP</p>
									</div>
									<div class="text-center otp-input">
										<div class="d-flex align-items-center justify-content-center mb-3">
											<input type="text" class="form-control" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
											<input type="text" class="form-control" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1">
											<input type="text" class="form-control" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1">
											<input type="text" class="form-control" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" maxlength="1">
										</div>
										<div>
											<div class="badge bg-danger-transparent mb-3">
												<p class="d-flex align-items-center "><i class="ti ti-clock me-1"></i>00:55</p>
											</div>
											<div class="mb-3 d-flex justify-content-center">
												<a href="javascript:void(0);" class="text-secondary text-decoration-underline">Resend OTP</a>
											</div>
										</div>
									</div>
									<div class="mt-3">
										<button type="submit" class="btn btn-dark w-100">Reset Password</button>
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		<div class="login-bg">
			<img src="{{URL::asset('admin_assets/img/bg/login-bg-01.png')}}" alt="img" class="login-bg-01">
			<img src="{{URL::asset('admin_assets/img/bg/login-bg-02.png')}}" alt="img" class="login-bg-02">
		</div>
	</div>
	<!-- /Main Wrapper -->
@endsection