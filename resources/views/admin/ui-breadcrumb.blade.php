<?php $page = 'ui-breadcrumb'; ?>
@extends('layout.mainlayout_admin')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content pb-0 me-4">
        <div class="page-header">
            <div class="page-title">
                <h3>Breadcrumb</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Default Breadcrumb</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Arrow Style</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Pipe Style</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-pipe">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-pipe">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-pipe mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Line Style</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-line">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-line">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-line mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Dot Style</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Dividers</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-divide">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-divide">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-divide mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Breadcrumb with Icon</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page"><i
                                        class="fas fa-home"></i></li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Without Separator</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-separatorless">
                                <li class="breadcrumb-item active" aria-current="page"><i
                                        class="fas fa-home"></i></li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-separatorless">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-separatorless mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Colored Breadcrumb</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-primary">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-secondary">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-success">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-info">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-warning">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-danger">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-dark mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Light Colored Breadcrumb</h5>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-soft-primary">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-soft-secondary">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-soft-success">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-soft-info">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-soft-warning">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-soft-danger">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-colored bg-soft-dark mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
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