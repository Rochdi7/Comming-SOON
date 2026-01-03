<?php $page = 'reservations'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">All Reservations</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">All Reservations</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2 me-2">
                        <a href="javascript:void(0);" class="btn btn-white d-flex align-items-center"><i class="ti ti-printer me-2"></i>Print</a>
                    </div>
                    <div class="mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                                <i class="ti ti-upload me-1"></i>Export
                            </a>
                        </div>
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
                    <div class="top-search me-2">
                        <div class="top-search-group">
                            <span class="input-icon">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>                        
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="ti ti-layout-board me-1"></i> Columns
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg p-2">
                            <ul>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>CAR</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>CUSTOMER</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>PICK UP  DETAILS</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>DROP OFF  DETAILS</span>
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
                            Pick Up Location
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Los Angles
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">New York City
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Houston
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Munich
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Montreal
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Drop Off Location
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Los Angles
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">New York City
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Houston
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Munich
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Montreal
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="ti ti-badge me-1"></i>Status
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Completed
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Confirmed
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">In Rental
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Rejected
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">In Progress
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
                            <th>CAR</th>
                            <th>CUSTOMER</th>
                            <th>PICK UP  DETAILS</th>
                            <th>DROP OFF  DETAILS</th>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3466</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Ford Endeavour</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/company-details')}}">Reuben Keen</a></h6>
                                        <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">12</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">13</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Completed
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3467</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Ferrari 458 MM</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/company-details')}}">William Jones</a></h6>
                                        <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">12</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">13</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-orange-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Confirmed
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3468</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Ford Mustang </a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/company-details')}}">Leonard Jandreau</a></h6>
                                        <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">14</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Los Angeles</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">15</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-violet-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>In Rental
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3469</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Toyota Tacoma 4</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-04.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/customer-details')}}">Adam Bolden</a></h6>
                                        <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">14</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Houston</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">14</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-orange-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Confirmed
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3470</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Chevrolet Truck	</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-05.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/company-details')}}">Harvey Jimenez</a></h6>
                                        <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">14</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Phoenix</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">15</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-danger-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Rejected	
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-06.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3471</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Etios Carmen	</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-06.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/customer-details')}}">William Ward</a></h6>
                                        <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">14</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Philadelphia</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">15</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Completed
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3472</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Acura Sport </a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-07.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/customer-details')}}">Norman Coleman</a></h6>
                                        <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">14</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Philadelphia</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">15</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-orange-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Confirmed
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-08.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3473</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Kia Soul 2016</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-08.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/company-details')}}">Jay Beckman</a></h6>
                                        <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">04</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Philadelphia</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">06</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-danger-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Rejected
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-09.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3474</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Camaro</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-09.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/customer-details')}}">Francis Harris</a></h6>
                                        <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">04</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Philadelphia</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">06</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-danger-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Rejected
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-10.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3475</a>
                                        <h6 class="fs-14"><a href="{{url('admin/car-details')}}">Toyota Camry</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-10.jpg')}}" alt=""></a>
                                    <div>
                                        <h6 class="mb-1 fs-14"><a href="{{url('admin/company-details')}}">Renaldo Labarre</a></h6>
                                        <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">04</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Philadelphia</p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                        <h5 class="mb-2 fs-16">06</h5>
                                        <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-9 mb-0">Newyork </p>
                                        <span class="fs-13">01:00 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-violet-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>In Progress
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/reservation-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-reservation')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
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