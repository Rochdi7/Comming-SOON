<?php $page = 'ui-video'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content pb-0 me-4">
        <div class="page-header">
            <div class="page-title">
                <h3>Video</h3>
            </div>
        </div>
        <div class="row">

            <!-- Responsive embed video 21:9 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h5 class="card-title">Responsive embed video 21:9</h5>
                        <p class="sub-header">Use class <code>.ratio-21x9</code></p>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/6bzTrChjEdc?autohide=0&showinfo=0&controls=0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Responsive embed video 21:9 -->

            <!-- Responsive embed video 16:9 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h5 class="card-title">Responsive embed video 16:9</h5>
                        <p class="sub-header">Use class <code>.ratio-16x9</code></p>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?ecver=1"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Responsive embed video 16:9 -->

        </div>

        <div class="row">

            <!-- Responsive embed video 4:3 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h5 class="card-title">Responsive embed video 4:3</h5>
                        <p class="sub-header">Use class <code>.ratio-4x3</code></p>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-4x3">
                            <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?ecver=1"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Responsive embed video 4:3 -->

            <!-- Responsive embed video 1:1 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h5 class="card-title">Responsive embed video 1:1</h5>
                        <p class="sub-header">Use class <code>.ratio-1x1</code></p>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-1x1">
                            <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?ecver=1"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Responsive embed video 1:1 -->

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