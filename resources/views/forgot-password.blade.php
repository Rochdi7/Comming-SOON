<?php $page = 'forgot-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="login-wrapper">
        <div class="loginbox">
            <div class="login-auth">
                <div class="login-auth-wrap">
                    <div class="sign-group">
                        <a href="{{ url('/') }}" class="btn sign-up"><span><i class="fe feather-corner-down-left"
                                    aria-hidden="true"></i></span> Back To Home</a>
                    </div>
                    <h1>Forgot Password</h1>
                    <p class="account-subtitle">Enter your email and we will send you a link to reset your password.</p>
                    <form action="{{ url('/') }}">
                        <div class="input-block">
                            <label class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" value="admin@example.com">
                        </div>
                        <a href="{{ url('reset-password') }}" class="btn btn-outline-light w-100 btn-size">Save Changes</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
