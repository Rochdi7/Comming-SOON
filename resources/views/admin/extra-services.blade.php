<?php $page = 'extra-services'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content me-4">
        
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Extra Services</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/index')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Extra Services</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="mb-2 me-2">
                    <a href="javascript:void(0);" class="btn btn-white d-flex align-items-center"><i class="ti ti-printer me-2"></i>Print</a>
                </div>
                <div class="me-2 mb-2">
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                            <i class="ti ti-upload me-1"></i>Export
                        </a>
                    </div>
                </div>
                <div class="mb-2">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_extra_service" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add New Extra Service</a>
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
                    <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        <i class="ti ti-layout-board me-1"></i> Columns
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg p-2">
                        <ul>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>NAME</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>PRICE</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>TYPE</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>NO OF CARS</span>
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
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        Select Type
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-2">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">One Time</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Per Day</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown me-3">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        Select Status
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-2">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
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
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>TYPE</th>
                        <th>NO OF CARS</th>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Child Seats</a></h6>
                        </td>
                        <td>$120</td>
                        <td>One Time</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                12
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">GPS Navigation System</a></h6>
                        </td>
                        <td>$30</td>
                        <td>Per Day</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                12
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Roof Box Storage</a></h6>
                        </td>
                        <td>$100</td>
                        <td>One Time</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                15
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Camping Equipment</a></h6>
                        </td>
                        <td>$130</td>
                        <td>One Time</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                08
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Glass & Tire Protection</a></h6>
                        </td>
                        <td>$150</td>
                        <td>One Time</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                16
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-danger-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Inactive
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Mini Refrigerator</a></h6>
                        </td>
                        <td>$80</td>
                        <td>One Time</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                22
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-danger-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Inactive
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Wi-Fi Hotspot</a></h6>
                        </td>
                        <td>$30</td>
                        <td>Per Day</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                10
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Express Check-in/Check-out</a></h6>
                        </td>
                        <td>$200</td>
                        <td>One Time</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                25
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Air Purifier</a></h6>
                        </td>
                        <td>$40</td>
                        <td>Per Day</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                25
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-danger-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Inactive
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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
                            <h6 class="fw-medium"><a href="javascript:void(0);">Sanitization Kit</a></h6>
                        </td>
                        <td>$60</td>
                        <td>One Time</td>
                        <td>
                            <div class="d-inline-flex gap-2 align-items-center">
                                18
                                <a href="javascript:void(0);" class="btn btn-xs btn-info-light border-info fs-14 py-0 px-1" data-bs-toggle="modal" data-bs-target="#cars_list"><i class="ti ti-external-link"></i></a>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_extra_services"><i class="ti ti-edit me-1"></i>Edit</a>
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