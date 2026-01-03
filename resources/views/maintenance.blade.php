<?php $page = 'maintenance'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="error-box">
        <img src="{{ URL::asset('/build/img/maintenance.png') }}" class="img-fluid" alt="Maintenance">
        <h2 class="coming-soon">We're Down For Maintenance</h2>
        <p>Our website is currently undergoing scheduled maintenance, will be right
            back in a few minutes.</p>
        <h6>We'll Be Back Shortly</h6>
        <div class="footer-social-links">
            <ul class="nav">
                <li>
                    <a href="javascript:;"><i class="feather-instagram hi-icon"></i></a>
                </li>
                <li>
                    <a href="javascript:;"><i class="feather-twitter hi-icon"></i> </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="feather-youtube hi-icon"></i></a>
                </li>
                <li>
                    <a href="javascript:;"><i class="feather-facebook hi-icon"></i></a>
                </li>
                <li>
                    <a href="javascript:;"><i class="feather-linkedin hi-icon"></i></a>
                </li>
            </ul>
        </div>
        <a href="{{ url('/') }}" class="btn-maintance btn btn-primary">Back to Home</a>
    </div>
@endsection
