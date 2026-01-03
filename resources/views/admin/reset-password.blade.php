<?php $page = 'reset-password'; ?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
					<div class="col-lg-5 mx-auto">
						<form action="{{url('admin/login')}}" class="p-4">
							<div class="mx-auto mb-5 text-center">
								<img src="{{URL::asset('admin_assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
							</div>
							<div class="card authentication-card mb-0">
								<div class="card-body">
									<div class="login-icon bg-dark d-flex align-items-center justify-content-center mx-auto mb-4">
										<i class="ti ti-lock-star fs-24"></i>
									</div>
									<div class="text-center mb-3">
										<h4 class="mb-1">Reset Password</h4>
										<p class="mb-0">Enter New Password</p>
									</div>
									<div class="mb-3">
										<label class="form-label">New Password <span class="text-danger">*</span></label>
										<div class="pass-group">
											<input type="password" class="pass-input form-control">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Confirm Password <span class="text-danger">*</span></label>
										<div class="pass-group">
											<input type="password" class="pass-input form-control">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>
									<div class="mt-3">
										<button type="submit" class="btn btn-dark w-100">Reset Password</button>
									</div>
									<p class="text-center mt-4">Return to <a href="{{url('admin/login')}}" class="text-secondary text-decoration-underline">Sign In</a></p>
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