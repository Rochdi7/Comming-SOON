<?php $page = 'customers'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Customers</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Customers</li>
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
                        <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_client"><i class="ti ti-plus me-2"></i>Add New Client</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="d-flex align-items-center mb-4">
                <a href="{{url('admin/customers')}}" class="btn bg-secondary-transparent me-3"><i class="ti ti-user me-1"></i>Clients</a>
                <a href="{{url('admin/customers-companies')}}" class="btn btn-white"><i class="ti ti-building me-1"></i>Companies</a>
            </div>

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
                            <i class="ti ti-filter me-1"></i> Filter<span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
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
                                        <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>CUSTOMER</span>
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
                                        <span><i class="ti ti-grip-vertical me-1"></i>LANGUAGE</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>DOCUMENTS</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>RENTS</span>
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
                            Language
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">English
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Italian
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">French
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">German
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Hindi
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Bengali
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Chinese
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Arabic
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Japanese
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Russian
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
                            <th>EMAIL</th>
                            <th>LANGUAGE</th>
                            <th>DOCUMENTS</th>
                            <th>RENTS</th>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-11.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Andrew Simons</a></h6>
                                        <p >+1 56598 98956</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">andrewsimons@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">English</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p class="text-info">Show Documents</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-car"></i></span>
                                    <p class="text-violet">Recent Rents</p>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-12.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">David Steiger</a></h6>
                                        <p >+1 24558 56599</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">davidsteiger@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/it-flag.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">Italian</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p class="text-info">Show Documents</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-car"></i></span>
                                    <p class="text-violet">Recent Rents</p>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-13.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Darin Mabry</a></h6>
                                        <p >+1 24558 56599</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">darinmabry@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/fr-flag.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">French</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p>No Documents</p>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-14.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Mark Neiman</a></h6>
                                        <p >+1 56598 98956</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">markneiman@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">English</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p class="text-info">Show Documents</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-car"></i></span>
                                    <p class="text-violet">Recent Rents</p>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-15.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Jacob Johnson</a></h6>
                                        <p >+1 56598 98956</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">jacobjohnson@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/de.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">German</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p>No Documents</p>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-16.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Walter Hartmann</a></h6>
                                        <p>+1 24558 56599</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">walterhartmann@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/it-flag.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">Italian</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p class="text-info">Show Documents</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-car"></i></span>
                                    <p class="text-violet">Recent Rents</p>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-17.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Andrea Jermaine</a></h6>
                                        <p >+1 12488 14457</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">andreajermaine@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">English</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p>No Documents</p>
                                </div>
                            </td>
                            <td> </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-18.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Dennis Eckhardt</a></h6>
                                        <p>+1 32569 15458</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">denniseckhardt@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/it-flag.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">Italian</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p class="text-info">Show Documents</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-car"></i></span>
                                    <p class="text-violet">Recent Rents</p>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-19.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Lan Adams</a></h6>
                                        <p>+1 14782 14578</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">lanadams@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/fr-flag.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">French</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p>No Documents</p>
                                </div>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar rounded-circle me-2 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/customer/customer-20.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-semibold"><a href="{{url('admin/customer-details')}}">Julie Black</a></h6>
                                        <p >+1 12124 14255</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9">julieblack@example.com</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-xxs rounded-circle me-1 flex-shrink-0">
                                        <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <p class="text-gray-9">English</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-file-text"></i></span>
                                    <p class="text-info">Show Documents</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="table-icon me-2"><i class="ti ti-car"></i></span>
                                    <p class="text-violet">Recent Rents</p>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/customer-details')}}"><i class="ti ti-eye me-1"></i>View Details</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit me-1"></i>Edit</a>
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