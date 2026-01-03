<?php $page = 'cars'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">All Cars</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">All Cars</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2 me-2">
                        <a href="javascript:void(0);" class="btn btn-white d-flex align-items-center"><i class="ti ti-printer me-2"></i>Print</a>
                    </div>
                    <div class="mb-2 me-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                                <i class="ti ti-upload me-1"></i>Export
                            </a>
                        </div>
                    </div>
                    <div class="mb-2">
                        <a href="{{url('admin/add-car')}}" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add New Car</a>
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
                    <div class="me-2">
                        <div class="input-icon-start position-relative topdatepicker">
                            <span class="input-icon-addon">
                                <i class="ti ti-calendar"></i>
                            </span>
                            <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                        </div>
                    </div>                      
                    <div class="dropdown">
                        <a href="#filtercollapse" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse">
                            <i class="ti ti-filter me-1"></i> Filter <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
                        </a>
                    </div>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-edit-circle me-1"></i> Bulk Actions
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-2">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Delete</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-search me-2">
                        <div class="top-search-group">
                            <span class="input-icon">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>                        
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-layout-board me-1"></i> Columns
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg p-2">
                            <ul>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>	CAR</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>BASE LOCATION</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>PRICE (PER DAY)</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>DAMAGES</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>IS FEATURED</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>CREATED DATE</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>STATUS</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- /Table Header -->

            <div class="collapse" id="filtercollapse">
                <div class="filterbox mb-3 d-flex align-items-center">
                    <h6 class="me-3">Filters</h6>
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Select Cars
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Ford Endeavour
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Ferrari 458 MM
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Ford Mustang 
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Toyota Tacoma 4
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Chevrolet Pick Truck
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Etios Carmen
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Acura Sport Version
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Kia Soul 2016
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Chevrolet Camaro
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Toyota Camry SE 350
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Type
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Sedan
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Hatchback
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">SUV
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Coupes
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Convertible
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Pickup Truck
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Sport
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Minivan
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">EV
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Location
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Newyork City
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Los Angeles
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Chicago
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Houston
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Phoenix
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Philadelphia
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Austin
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">San Antonio
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Status
                        </a>
                        <ul class="dropdown-menu dropdown-menu-md p-2">
                            <li class="dropdown-item">
                                Active
                            </li>
                            <li class="dropdown-item">
                                Inactive
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
                            <th>CAR</th>
                            <th>BASE LOCATION</th>
                            <th>PRICE (PER DAY)</th>
                            <th>DAMAGES</th>
                            <th>IS FEATURED</th>
                            <th>CREATED DATE</th>
                            <th>STATUS</th>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Ford Endeavour</a></h6>
                                        <p>Sedan</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Newyork City
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$3500</p>
                            </td>
                            <td>
                                <p class="text-gray-9">01</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-warning"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Ferrari 458 MM</a></h6>
                                        <p>Convertible</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Los Angeles
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$2800</p>
                            </td>
                            <td>
                                <p class="text-gray-9">05</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-warning"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-danger me-1"></i>Inactive</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Ford Mustang </a></h6>
                                        <p>Coupe</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Chicago
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$1425</p>
                            </td>
                            <td>
                                <p class="text-gray-9">05</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-gray-2"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Toyota Tacoma 4</a></h6>
                                        <p>Hatchback</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Houston
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$745</p>
                            </td>
                            <td>
                                <p class="text-gray-9">04</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-warning"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Chevrolet Pick Truck</a></h6>
                                        <p>Sedan</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Phoenix
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$659</p>
                            </td>
                            <td>
                                <p class="text-gray-9">02</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-warning"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-06.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Etios Carmen</a></h6>
                                        <p>Hatchback</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Philadelphia
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$254</p>
                            </td>
                            <td>
                                <p class="text-gray-9">01</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-gray-2"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Acura Sport Version</a></h6>
                                        <p>Crossover</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Austin
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$1240</p>
                            </td>
                            <td>
                                <p class="text-gray-9">05</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-warning"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-08.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Kia Soul 2016</a></h6>
                                        <p>Station Wagon</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                San Antonio
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$1425</p>
                            </td>
                            <td>
                                <p class="text-gray-9">02</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-warning"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-11.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Chevrolet Camaro</a></h6>
                                        <p>Station Wagon</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Los Angeles
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$4124</p>
                            </td>
                            <td>
                                <p class="text-gray-9">03</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-gray-2"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-danger me-1"></i>Inactive</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/car/car-10.jpg')}}" class="rounded-3" alt="">
                                    </a>
                                    <div>
                                        <h6><a href="{{url('admin/car-details')}}" class="fs-14 fw-semibold">Toyota Camry SE 350</a></h6>
                                        <p>Mini Van</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Chicago
                            </td>
                            <td>
                                <p class="fs-14 fw-semibold text-gray-9">$4741</p>
                            </td>
                            <td>
                                <p class="text-gray-9">02</p>
                            </td>
                            <td>
                                <i class="ti ti-star-filled text-warning"></i>
                            </td>
                            <td>
                                <h6 class="fs-14 fw-normal">25 May 2025</h6>
                                <p class="fs-13">01:00 PM</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/car-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/add-reservation')}}"><i class="ti ti-plus me-1"></i>Add Reservation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-car')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_extra_services"><i class="ti ti-trash me-1"></i>Delete</a>
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