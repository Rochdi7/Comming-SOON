<?php $page = 'form-select2'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content pb-0 me-4">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Form Select2</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic Select2</h5>
                        </div>
                        <div class="card-body">
                            <select class="select">
                                <option value="s-1">Selection-1</option>
                                <option value="s-2">Selection-2</option>
                                <option value="s-3">Selection-3</option>
                                <option value="s-4">Selection-4</option>
                                <option value="s-5">Selection-5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Multiple Select</h5>
                        </div>
                        <div class="card-body">
                            <select class="select2" multiple="multiple">
                                <option value="m-1" selected>Multiple-1</option>
                                <option value="m-2">Multiple-2</option>
                                <option value="m-3">Multiple-3</option>
                                <option value="m-4">Multiple-4</option>
                                <option value="m-5">Multiple-5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Single Select With Placeholder</h5>
                        </div>
                        <div class="card-body">
                            <select class="select2 form-control" id="select2-placeholder-single">
                                <option value="st-1" selected>Texas</option>
                                <option value="st-2">Georgia</option>
                                <option value="st-3">California</option>
                                <option value="st-4">Washington D.C</option>
                                <option value="st-5">Virginia</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Multiple Select With Placeholder</h5>
                        </div>
                        <div class="card-body">
                            <select class="js-example-placeholder-multiple select2 js-states" multiple="multiple">
                                <option value="fr-1">Appple</option>
                                <option value="fr-2">Mango</option>
                                <option value="fr-3">Orange</option>
                                <option value="fr-4">Guava</option>
                                <option value="fr-5">Pineapple</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Multiple Select With Placeholder</h5>
                        </div>
                        <div class="card-body">
                            <select class="select2" multiple="multiple">
                                <option value="fr-1">Appple</option>
                                <option value="fr-2">Mango</option>
                                <option value="fr-3">Orange</option>
                                <option value="fr-4">Guava</option>
                                <option value="fr-5">Pineapple</option>
                            </select>
                        </div>
                    </div>
                </div>
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