<?php $page = 'form-basic-inputs'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content pb-0 me-4">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Basic Inputs</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic Inputs</h5>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Text Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Disabled Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled="disabled">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Readonly Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="readonly"
                                            readonly="readonly">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Placeholder</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Placeholder">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">File Input</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Default Select</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>-- Select --</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Radio</label>
                                    <div class="col-md-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Option 1
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Option 2
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Option 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Checkbox</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Option 1
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Option 2
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Option 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Textarea</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control"
                                            placeholder="Enter text here"></textarea>
                                    </div>
                                </div>
                                <div class="mb-0 row">
                                    <label class="form-label col-md-2">Input Addons</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Input Sizes</h5>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Large Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder=".form-control-lg">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Default Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder=".form-control">
                                    </div>
                                </div>
                                <div class="mb-0 row">
                                    <label class="form-label col-md-2">Small Input</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder=".form-control-sm">
                                    </div>
                                </div>
                            </form>
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