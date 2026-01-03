<?php $page = 'maps-vector'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content pb-0 me-4">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Vector Map</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Basic Vector Map</div>
                        </div>
                        <div class="card-body">
                            <div id="vector-map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Map With Markers</div>
                        </div>
                        <div class="card-body">
                            <div id="marker-map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Map With Image Markers</div>
                        </div>
                        <div class="card-body">
                            <div id="marker-image-map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Map With Lines</div>
                        </div>
                        <div class="card-body">
                            <div id="lines-map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">US Vector Map</div>
                        </div>
                        <div class="card-body">
                            <div id="us-map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Russia Vector Map</div>
                        </div>
                        <div class="card-body">
                            <div id="russia-map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Spain Vector Map</div>
                        </div>
                        <div class="card-body">
                            <div id="spain-map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Canada Vector Map</div>
                        </div>
                        <div class="card-body">
                            <div id="canada-map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->
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