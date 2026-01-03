<?php $page = 'error-500'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="error-box">
        <img src="{{ URL::asset('/build/img/500.png') }}" class="img-fluid" alt="Unexpected error">
        <h3 class="error-500">Unexpected error</h3>
        <div class="back-button">
            <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
@endsection
