<?php $page = 'login'; ?>
@extends('backoffice.layout.guest')

@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                    <div class="col-lg-5 mx-auto">
                        <form action="{{ route('backoffice.login.submit') }}" method="POST" class="p-4">
                            @csrf

                            <div class="mx-auto mb-5 text-center">
                                <img src="{{ URL::asset('admin_assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                            </div>

                            <div class="card authentication-card mb-0">
                                <div class="card-body">
                                    <div class="login-icon bg-dark d-flex align-items-center justify-content-center mx-auto mb-4">
                                        <i class="ti ti-login fs-24"></i>
                                    </div>

                                    <div class="text-center mb-3">
                                        <h4 class="mb-1">Welcome Back</h4>
                                        <p class="mb-0">Please enter your details to sign in</p>
                                    </div>

                                    {{-- Global error (email/password incorrect, compte désactivé, etc.) --}}
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger mb-3">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <label class="form-label">
                                            Email / Username <span class="text-danger">*</span>
                                        </label>

                                        <div class="input-group">
                                            <input
                                                type="text"
                                                name="email"
                                                value="{{ old('email') }}"
                                                class="form-control border-end-0"
                                                autocomplete="email"
                                            >
                                            <span class="input-group-text border-start-0">
                                                <i class="ti ti-user-circle"></i>
                                            </span>
                                        </div>

                                        {{-- Field error --}}
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">
                                            Password <span class="text-danger">*</span>
                                        </label>

                                        <div class="pass-group">
                                            <input
                                                type="password"
                                                name="password"
                                                class="pass-input form-control"
                                                autocomplete="current-password"
                                            >
                                            <span class="ti toggle-password ti-eye-off"></span>
                                        </div>

                                        {{-- Field error --}}
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check form-check-md mb-0">
                                                <input
                                                    class="form-check-input"
                                                    id="remember_me"
                                                    type="checkbox"
                                                    name="remember"
                                                    {{ old('remember') ? 'checked' : '' }}
                                                >
                                                <label for="remember_me" class="form-check-label mt-0">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-end">
                                            <a href="{{ url('admin/forgot-password') }}" class="link-default text-decoration-underline">
                                                Forgot Password
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-dark w-100">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="login-bg">
            <img src="{{ URL::asset('admin_assets/img/bg/login-bg-01.png') }}" alt="img" class="login-bg-01">
            <img src="{{ URL::asset('admin_assets/img/bg/login-bg-02.png') }}" alt="img" class="login-bg-02">
        </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
