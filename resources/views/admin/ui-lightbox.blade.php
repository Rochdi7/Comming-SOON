<?php $page = 'ui-lightbox'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content pb-0 me-4">
        <div class="page-header">
            <div class="page-title">
                <h3>Light Box</h3>
            </div>
        </div>
        <div class="row">

            <!-- Lightbox -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Single Image Lightbox</h5>
                    </div>
                    <div class="card-body pb-1">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="{{URL::asset('admin_assets/img/media/img-01.jpg')}}" class="image-popup">
                                    <img src="{{URL::asset('admin_assets/img/media/img-01.jpg')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="{{URL::asset('admin_assets/img/media/img-02.jpg')}}" class="image-popup">
                                    <img src="{{URL::asset('admin_assets/img/media/img-02.jpg')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Lightbox -->

            <!-- Lightbox -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Image with Description</h5>
                    </div>
                    <div class="card-body pb-1">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="{{URL::asset('admin_assets/img/media/img-03.jpg')}}" class="image-popup-desc" data-title="Title 01"
                                    data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                    <img src="{{URL::asset('admin_assets/img/media/img-03.jpg')}}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="{{URL::asset('admin_assets/img/media/img-04.jpg')}}" class="image-popup-desc" data-title="Title 02"
                                    data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                    <img src="{{URL::asset('admin_assets/img/media/img-04.jpg')}}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="{{URL::asset('admin_assets/img/media/img-05.jpg')}}" class="image-popup-desc" data-title="Title 03"
                                    data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                    <img src="{{URL::asset('admin_assets/img/media/img-05.jpg')}}" class="img-fluid" alt="work-thumbnail">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Lightbox -->

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