<?php $page = 'ui-counter'; ?>
@extends('layout.mainlayout_admin')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content pb-0">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Counter</h3>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Clients</h5>
                        <h6 class="counter">3,000</h6>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Sales</h5>
                        <h6 class="counter">10,000</h6>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Projects</h5>
                        <h6 class="counter">15,000</h6>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Count Down</h5>
                    </div>
                    <div class="card-body">
                        <h6>Time Count from 3</h6>
                        <span id="timer-countdown"></span>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Count Up</h5>
                    </div>
                    <div class="card-body">
                        <h6>Time Counting From 0</h6>
                        <span id="timer-countup"></span>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Count Inbetween</h5>
                    </div>
                    <div class="card-body">
                        <h6>Time counting from 30 to 20</h6>
                        <span id="timer-countinbetween"></span>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Count Callback</h5>
                    </div>
                    <div class="card-body">
                        <h6>Count from 10 to 0 and calls timer end callback</h6>
                        <span id="timer-countercallback"></span>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

            <!-- Counter -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Custom Output</h5>
                    </div>
                    <div class="card-body">
                        <h6>Changed output pattern</h6>
                        <span id="timer-outputpattern"></span>
                    </div>
                </div>
            </div>
            <!-- /Counter -->

        </div>

    </div>

    <!-- Footer-->
    <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
        <p class="mb-0">
            <a href="javascript:void(0);">Privacy Policy</a>
            <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
        </p>
        <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);" class="text-secondary">Dreams</a></p>
    </div>
    <!-- /Footer-->
    
</div>
<!-- /Page Wrapper -->

@endsection