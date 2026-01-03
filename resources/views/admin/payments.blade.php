<?php $page = 'payments'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Payments</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Payments</li>
                        </ol>
                    </nav>
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
                            <i class="ti ti-filter me-1"></i> Filter<span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
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
                        <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-layout-board me-1"></i> Columns
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg p-2">
                            <ul>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>TRANSACTION ID</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>NAME</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>AMOUNT</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>PAYMENT METHOD</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>DATE</span>
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
                            <span class="badge badge-xs rounded-pill bg-success me-2">2</span>Payment Method
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Credit Card
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>Debit Card
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">PayPal
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>Bank Transfer
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Digital Payment
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Status
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Pending
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Open
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Closed
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
                            <th>TRANSACTION ID</th>
                            <th>NAME</th>
                            <th>AMOUNT</th>
                            <th>PAYMENT METHOD</th>
                            <th>DATE</th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="javascript:void(0);">TX12345</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-20.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Andrew Simons</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$120.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Credit Card</p>
                            </td>
                            <td>
                                <p class="text-gray-9">24 Jan 2025</p>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Completed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12346</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-21.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">David Steiger</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$85.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Debit Card</p>
                            </td>
                            <td>
                                <p class="text-gray-9">19 Dec 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-info-transparent"><i class="ti ti-point-filled text-info me-1"></i>Pending</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12347</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-12.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Virginia Phu</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$250.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">PayPal</p>
                            </td>
                            <td>
                                <p class="text-gray-9">11 Dec 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Completed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12348</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-22.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Walter Hartmann</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$175.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Bank Transfer</p>
                            </td>
                            <td>
                                <p class="text-gray-9">29 Nov 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-violet-transparent text-purple"><i class="ti ti-point-filled text-purple me-1"></i>Refunded</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12349</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-27.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Andrea Jermaine</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$200.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Digital Payment</p>
                            </td>
                            <td>
                                <p class="text-gray-9">03 Nov 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Completed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12350</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Dennis Eckhardt</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$90.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Credit Card</p>
                            </td>
                            <td>
                                <p class="text-gray-9">31 Oct 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-info-transparent"><i class="ti ti-point-filled text-info me-1"></i>Pending</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12351</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-25.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Lan Adams</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$160.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Debit Card</p>
                            </td>
                            <td>
                                <p class="text-gray-9">15 Oct 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Completed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12352</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-28.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Ann Crump</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$180.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">PayPal</p>
                            </td>
                            <td>
                                <p class="text-gray-9">26 Sep 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-danger-transparent"><i class="ti ti-point-filled text-danger me-1"></i>Failed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12353</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-07.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Julie Black</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$230.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Bank Transfer</p>
                            </td>
                            <td>
                                <p class="text-gray-9">01 Sep 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Completed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="javascript:void(0);">TX12354</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-29.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="{{url('admin/customer-details')}}" class="fs-14 fw-semibold">Jean Walker</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">$300.00</p>
                            </td>
                            <td>
                                <p class="text-gray-9">Digital Payment</p>
                            </td>
                            <td>
                                <p class="text-gray-9">15 Aug 2024</p>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Completed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
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