<?php $page = 'blog-categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Blog Categories</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Categories</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_Category" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add Category</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Table Header -->
            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                <div class="d-flex align-items-center flex-wrap row-gap-3">
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-filter me-1"></i> Sort By : Latest
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Latest</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                    <div class="top-search me-2">
                        <div class="top-search-group">
                            <span class="input-icon">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Table Header -->

            <div class="collapse" id="filtercollapse">
                <div class="filterbox mb-3 d-flex align-items-center">
                    <h6 class="me-3">Filters</h6>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <span class="count bg-success text-center fs-12 me-2 ">5</span>Category<i class="ti ti-x text-gray-5 ms-1"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg p-2">
                            <li>
                                <div class="top-search m-2">
                                    <div class="top-search-group">
                                        <span class="input-icon">
                                            <i class="ti ti-search"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Rental Policies
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Payments
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Insurance
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Rental Policies
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Booking
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Requirements
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Drivers
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Pricing
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Rental Policies
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Roadside Assistance
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Status
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg p-2">
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    Published
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    Unpublished
                                </label>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                    <a href="javascript:void(0);" class="text-danger links">Clear All</a>
                </div>
            </div>

            <!-- Custom Data Table -->
            <div class="custom-datatable-filter table-responsive">
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>CATEGORY</th>
                            <th>NUMBER OF BLOGS</th>
                            <th>CREATED DATE</th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Travel Tips</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">15</a>
                            </td>
                            <td>
                                <span class="text-gray-9">24 Jan 2025</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Car Reviews</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">13</a>
                            </td>
                            <td>
                                <span class="text-gray-9">19 Dec 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-danger"><i class="ti ti-point-filled"></i>Unpublish</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Rental Policies</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">4</a>
                            </td>
                            <td>
                                <span class="text-gray-9">11 Dec 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Insurance & Coverage</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">9</a>
                            </td>
                            <td>
                                <span class="text-gray-9">29 Nov 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Budget Rentals</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">19</a>
                            </td>
                            <td>
                                <span class="text-gray-9">03 Nov 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Luxury Car Rentals</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">17</a>
                            </td>
                            <td>
                                <span class="text-gray-9">31 Oct 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Road Trip Guides</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">6</a>
                            </td>
                            <td>
                                <span class="text-gray-9">15 Oct 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-danger"><i class="ti ti-point-filled"></i>Unpublish</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Eco-Friendly Rentals</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">25</a>
                            </td>
                            <td>
                                <span class="text-gray-9">26 Sep 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-danger"><i class="ti ti-point-filled"></i>Unpublish</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Seasonal Deals</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">18</a>
                            </td>
                            <td>
                                <span class="text-gray-9">01 Sep 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Customer Stories</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">18</a>
                            </td>
                            <td>
                                <span class="text-gray-9">15 Aug 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">Budget Rentals</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fw-medium">22</a>
                            </td>
                            <td>
                                <span class="text-gray-9">15 Aug 2024</span>
                            </td>
                            <td>
                                <span class="badge badge-md badge-soft-success"><i class="ti ti-point-filled"></i>Published</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_Category"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Custom Data Table -->
            <div class="table-footer"></div>			
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