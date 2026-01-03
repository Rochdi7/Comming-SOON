<?php $page = 'tickets'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Tickets</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tickets</li>
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
                        <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_ticket"><i class="ti ti-plus me-2"></i>Add New Ticket</a>
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
                                        <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>TICKET CODE</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>CREATED BY</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>SUBJECT</span>
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
                                        <span><i class="ti ti-grip-vertical me-1"></i>PRIORITY</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>ASSIGNEE</span>
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
                            Priority
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Low
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Medium
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">High
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Resolved
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Inprogress
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
                            <th>TICKET CODE</th>
                            <th>CREATED BY</th>
                            <th>SUBJECT</th>
                            <th>CREATED DATE</th>
                            <th>PRIORITY</th>
                            <th>ASSIGNEE</th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{url('admin/ticket-details')}}">#TCKT001</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-20.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Andrew Simons</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Payment Issue</p>
                            </td>
                            <td>
                                <p class="text-gray-9">24 Jan 2025</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-success"></i>Low</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-38.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Shaun Farley</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Resolved</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT002</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-21.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">David Steiger</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Car Not Available</p>
                            </td>
                            <td>
                                <p class="text-gray-9">19 Dec 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-warning"></i>Medium</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-12.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Jenny Ellis</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-info-transparent"><i class="ti ti-point-filled text-info me-1"></i>Inprogress</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT003</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-12.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Virginia Phu</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Late Pickup Issue</p>
                            </td>
                            <td>
                                <p class="text-gray-9">11 Dec 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-danger"></i>High</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-30.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Leon Baxter</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Resolved</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT004</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-22.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Walter Hartmann</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Wrong Car Delivered</p>
                            </td>
                            <td>
                                <p class="text-gray-9">29 Nov 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-success"></i>Low</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-31.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Karen Flores</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-violet-transparent text-purple"><i class="ti ti-point-filled text-purple me-1"></i>Open</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT005</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-27.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Andrea Jermaine</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Accidental Damage Report</p>
                            </td>
                            <td>
                                <p class="text-gray-9">03 Nov 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-warning"></i>Medium</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-32.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Michael Dawson</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Resolved</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT006</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Dennis Eckhardt</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Refund Request</p>
                            </td>
                            <td>
                                <p class="text-gray-9">31 Oct 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-danger"></i>High</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-33.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Karen Galvan</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-info-transparent"><i class="ti ti-point-filled text-info me-1"></i>Inprogress</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT007</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-25.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Lan Adams</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Extension Request</p>
                            </td>
                            <td>
                                <p class="text-gray-9">15 Oct 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-success"></i>Low</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-34.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Thomas Ward</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Resolved</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT008</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-28.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Ann Crump</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Unable to Apply Coupon</p>
                            </td>
                            <td>
                                <p class="text-gray-9">26 Sep 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-warning"></i>Medium</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-35.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Aliza Duncan</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-danger-transparent"><i class="ti ti-point-filled text-danger me-1"></i>Closed</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT009</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-07.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Julie Black</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">Overcharge on Invoice</p>
                            </td>
                            <td>
                                <p class="text-gray-9">01 Sep 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-danger"></i>High</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-36.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">James Higham</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Resolved</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>
                                    <a href="{{url('admin/ticket-details')}}">#TCKT0010</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-29.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Jean Walker</a></h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">GPS Not Working</p>
                            </td>
                            <td>
                                <p class="text-gray-9">15 Aug 2024</p>
                            </td>
                            <td>
                                <span class="badge badge-dark-transparent rounded-pill"><i class="ti ti-point-filled text-success"></i>Low</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/profiles/avatar-37.jpg')}}" class="rounded-circle" alt="">
                                    </a>
                                    <h6><a href="javascript:void(0);" class="fs-14 fw-semibold">Jade Robinson</a></h6>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-transparent"><i class="ti ti-point-filled text-success me-1"></i>Resolved</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
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