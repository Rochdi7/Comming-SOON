<?php $page = 'ui-ribbon'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content pb-0 me-4">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Ribbons</h3>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <h5 class="fw-semibold mb-4">Ribbon Style 1</h5>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="power-ribbone power-ribbone-top-left text-warning"><span class="bg-warning"><i
                                data-feather="zap" class="feather-zap"></i></span></div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="power-ribbone power-ribbone-bottom-left text-primary"><span
                            class="bg-primary"><i data-feather="zap" class="feather-zap"></i></span></div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                data-feather="zap" class="feather-zap"></i></span></div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="power-ribbone power-ribbone-bottom-right text-success"><span
                            class="bg-success"><i data-feather="zap" class="feather-zap"></i></span></div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h5 class="fw-semibold mb-4">Ribbon Style 2</h5>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="ribbone ribbone-top-left text-primary"><span class="bg-primary">sold out</span>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card  sold-out">
                    <div class="ribbone ribbone-top-right text-danger"><span class="bg-danger">Offer</span>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="ribbone ribbone-top-left text-success"><span class="bg-success">Update</span>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card sold-out">
                    <div class="ribbone ribbone-top-right text-warning"><span class="bg-warning">Open</span>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h5 class="fw-semibold mb-4">Ribbon Style 3</h5>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="arrow-ribbone-left bg-secondary">Sale</div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="arrow-ribbone-right bg-info">Price</div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="arrow-ribbone-left bg-warning">Service</div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ribbone-card">
                    <div class="arrow-ribbone-right bg-teal">Offer</div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ribbone-row">
            <h5 class="fw-semibold mb-4">Ribbon Style 4</h5>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="ribbone-success-left">
                        <span><i data-feather="zap" class="feather-zap"></i></span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="ribbone-warning-right">
                        <span><i data-feather="zap" class="feather-zap"></i></span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="ribbone-info-left">
                        <span><i data-feather="zap" class="feather-zap"></i></span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="ribbone-danger-right">
                        <span><i data-feather="zap" class="feather-zap"></i></span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h5 class="fw-semibold mb-4">Ribbon Style 5</h5>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="bookmark-ribbone-danger-left">
                        <span>Jul</span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="bookmark-ribbone-secondary-right">
                        <span>Aug</span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="bookmark-sideleft-ribbone-success-left">
                        <span>Sept</span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <span class="bookmark-sideright-ribbone-primary-right">
                        <span>Oct</span>
                    </span>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h5 class="fw-semibold mb-4">Ribbon Style 6</h5>
            <div class="col-xxl-2 col-lg-4 col-md-4 col-sm-10 mx-0 mx-sm-7">
                <div class="card br-0">
                    <div class="fullwidth-secondary-ribbons">

                        <div class="bar">
                            CSS Ribbon
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-4 col-md-4 col-sm-10 mx-0 mx-sm-7">
                <div class="card br-0">
                    <div class="fullwidth-primary-ribbons">

                        <div class="bar">
                            CSS Ribbon
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-4 col-md-4 col-sm-10 mx-0 mx-sm-7">
                <div class="card br-0">
                    <div class="fullwidth-arrow-warning-ribbons">

                        <div class="bar">
                            CSS Ribbon
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-4 col-md-4 col-sm-10 mx-0 mx-sm-7">
                <div class="card br-0">
                    <div class="fullwidth-arrow-danger-ribbons-right">

                        <div class="bar">
                            CSS Ribbon
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body  p-6">
                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title. Some quick
                            example text to build on the card title</p>
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