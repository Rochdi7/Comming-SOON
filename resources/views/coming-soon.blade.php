<?php $page = 'coming-soon'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="error-box">
        <img src="{{ URL::asset('/build/img/comingsoon.png') }}" class="img-fluid" alt="Coming Soon">
        <h2 class="coming-soon">Coming Soon</h2>
        <p>We'll be here soon with our new awesome site, subscribe to be notified.</p>
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
        <div class="serve-form">
            <form action="#">
                <div class="input-block">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <button type="submit" class="btn button-notific btn-secondary d-flex align-items-center">
                        <span>Notify me</span>
                    </button>
                </div>
            </form>
        </div>
        <a href="{{ url('/') }}" class="btn-maintance btn btn-primary">Back to Home<span class="ms-2"><i
                    class="fe feather-arrow-right" aria-hidden="true"></i></span></a>
    </div>
@endsection
