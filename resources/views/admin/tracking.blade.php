<?php $page = 'tracking'; ?>
@extends('layout.mainlayout_admin')
@section('content')
 <!-- Page Wrapper -->
 <div class="page-wrapper">
    <div class="content me-4 pb-0">
        
        <!-- Tracking -->
        <div class="map-wrap tracking position-relative">
            <div id="map" class="tracking-map w-100 z-1"></div>	
            <div class="position-absolute top-0 start-0 w-100 z-2 p-3">										
                <div class="input-icon-start position-relative">
                    <span class="input-icon-addon">
                        <i class="ti ti-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search by Car Name">
                </div>
            </div>	
        </div>	
        <!-- /Tracking -->					

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