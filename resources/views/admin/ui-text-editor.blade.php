<?php $page = 'ui-text-editor'; ?>
@extends('layout.mainlayout_admin')
@section('content')

	<!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content pb-0 me-4">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Text Editor</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">

                <!-- Editor -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Editor</h5>
                        </div>
                        <div class="card-body">
                            <div class="editor"></div>
                        </div>
                    </div>
                </div>
                <!-- /Editor -->

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