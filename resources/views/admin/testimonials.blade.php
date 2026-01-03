<?php $page = 'testimonials'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Testimonials</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_testimonial" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add Testimonial</a>
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
                    <div class="dropdown">
                        <a href="#filtercollapse" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse">
                            <i class="ti ti-filter me-1"></i> Filter <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
                        </a>
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
                            Rating
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">5 Star
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">4 Star
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">3 Star
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">2 Star
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">1 Star
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
                            <th class="no-sort">
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox" id="select-all">
                                </div>
                            </th>
                            <th>CUSTOMER</th>
                            <th>RATING</th>
                            <th>REVIEW</th>
                            <th>CREATED DATE </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Andrew Simons</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span>(5.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">The rental was spotless, great host!</a>
                            </td>
                            <td>
                                24 Jan 2025
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">David Steiger</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span>(4.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Good stay, but Wi-Fi was slow.</a>
                            </td>
                            <td>
                                19 Dec 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Virginia Phu</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span>(5.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Loved everything about this place!</a>
                            </td>
                            <td>
                                11 Dec 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-04.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Walter Hartmann</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span>(3.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Needs better maintenance service.</a>
                            </td>
                            <td>
                                29 Nov 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-05.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Andrea Jermaine</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span>(4.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Nice apartment, but check-in was slow.</a>
                            </td>
                            <td>
                                03 Nov 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-06.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Dennis Eckhardt</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span>(5.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Highly recommend, everything was perfect!</a>
                            </td>
                            <td>
                                31 Oct 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-07.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Dennis Eckhardt</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span>(5.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Highly recommend, everything was perfect!</a>
                            </td>
                            <td>
                                31 Oct 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-08.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Lan Adams</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span>(3.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Decent experience, but expected better service.</a>
                            </td>
                            <td>
                                15 Oct 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-09.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Ann Crump</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span>(5.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Great place for work trips, fast Wi-Fi!</a>
                            </td>
                            <td>
                                26 Sep 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-10.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Julie Black</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span>(4.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Affordable and close to university.</a>
                            </td>
                            <td>
                                01 Sep 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold">Jean Walker</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span class="me-1"><i class="ti ti-star-filled text-gray-2"></i></span>
                                    <span>(3.0)</span>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0);">Perfect for our family getaway!</a>
                            </td>
                            <td>
                                15 Aug 2024
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
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