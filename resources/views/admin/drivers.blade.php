<?php $page = 'drivers'; ?>
@extends('layout.mainlayout_admin')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content me-4">
        
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h4 class="mb-1">Drivers</h4>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/index')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Drivers</li>
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
                    <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_driver"><i class="ti ti-plus me-2"></i>Add New Driver</a>
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
                <div class="dropdown me-2">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ti ti-badge fs-16 me-1"></i>
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
                                    <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>DRIVERS</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>EMAIL</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>LICENSE NO</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>EXPIRY DATE</span>
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
                        <th>DRIVERS</th>
                        <th>EMAIL</th>
                        <th>LICENSE NO</th>
                        <th>EXPIRY DATE</th>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Reuben Keen</a></h6>
                                    <p >+1 14782 14578</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">reuben@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL123456789</p>
                        </td>
                        <td>
                            <p class="text-gray-9">24 Jan 2025</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">William Jones</a></h6>
                                    <p >+1 32569 15458</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">william@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL1697453622</p>
                        </td>
                        <td>
                            <p class="text-gray-9">19 Dec 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-danger me-1"></i>Inactive</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Leonard Jandreau</a></h6>
                                    <p >+1 25669 88985</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">leonard@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL5694863152</p>
                        </td>
                        <td>
                            <p class="text-gray-9">11 Dec 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-04.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Adam Bolden</a></h6>
                                    <p >+1 54698 55468</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">adam@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL234567890</p>
                        </td>
                        <td>
                            <p class="text-gray-9">29 Nov 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-05.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Harvey Jimenez</a></h6>
                                    <p >+1 12488 14457</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">harvey@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL678901234</p>
                        </td>
                        <td>
                            <p class="text-gray-9">03 Nov 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-06.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">William Ward</a></h6>
                                    <p >+1 65895 47878</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">william@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL012345678</p>
                        </td>
                        <td>
                            <p class="text-gray-9">31 Oct 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-danger me-1"></i>Inactive</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-07.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Norman Coleman</a></h6>
                                    <p >+1 32569 15458</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">norman@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL987654321</p>
                        </td>
                        <td>
                            <p class="text-gray-9">15 Oct 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-danger me-1"></i>Inactive</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-08.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Jay Beckman</a></h6>
                                    <p >+1 56598 98956</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">jaybeckman@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL345678901</p>
                        </td>
                        <td>
                            <p class="text-gray-9">26 Sep 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-09.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Francis Harris</a></h6>
                                    <p >+1 12781 02567</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">francis@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL456789012</p>
                        </td>
                        <td>
                            <p class="text-gray-9">01 Sep 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                <a href="javascript:void(0);" class="avatar rounded-circle me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-10.jpg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div>
                                    <h6 class="fs-14 fw-semibold"><a href="javascript:void(0);">Renaldo Labarre</a></h6>
                                    <p >+1 12124 14255</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">renaldo@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">DL567890123</p>
                        </td>
                        <td>
                            <p class="text-gray-9">15 Aug 2024</p>
                        </td>
                        <td>
                            <span class="badge badge-dark-transparent d-flex align-items-center"><i class="ti ti-point-filled text-success me-1"></i>Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_driver"><i class="ti ti-edit me-1"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_driver"><i class="ti ti-trash me-1"></i>Delete</a>
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