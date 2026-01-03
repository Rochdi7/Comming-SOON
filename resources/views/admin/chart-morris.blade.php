<?php $page = 'chart-morris'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content pb-0 me-4">

            <div class="row">

                <!-- Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Bar Chart</div>
                        </div>
                        <div class="card-body">
                            <div id="morrisBar1" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

                <!-- Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Stacked Bar Chart </div>
                        </div>
                        <div class="card-body">
                            <div id="morrisBar3" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

                <!-- Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Line Chart</div>
                        </div>
                        <div class="card-body">
                            <div id="morrisLine1" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

                <!-- Chart -->
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="card-title">Area Chart</div>
                        </div>
                        <div class="card-body">
                            <div id="morrisArea1" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

                <!-- Chart -->
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="card-title">Line Chart</div>
                        </div>
                        <div class="card-body">
                            <div id="morrisBar6" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

                <!-- Chart -->
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="card-title">Line Chart</div>
                        </div>
                        <div class="card-body">
                            <div id="morrisBar7" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

                <!-- Chart -->
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="card-title">Donut Chart</div>
                        </div>
                        <div class="card-body">
                            <div id="morrisDonut1" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

                <!-- Chart -->
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="card-title">Line Chart</div>
                        </div>
                        <div class="card-body">
                            <div id="morrisline" class="chart-set"></div>
                        </div>
                    </div>
                </div>
                <!-- /Chart -->

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