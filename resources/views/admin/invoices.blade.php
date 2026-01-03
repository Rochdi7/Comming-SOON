<?php $page = 'invoices'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Invoices</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{url('admin/add-invoice')}}" class="btn btn-primary d-inline-flex align-items-center"><i class="ti ti-plus me-1"></i>Add Invoice</a>
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
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-badge me-1"></i> Status
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Paid</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Overdue</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Unpaid</a>
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
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-layout-board me-1"></i> Columns
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg p-2">
                            <ul>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>INVOICE NO</span>
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
                                        <span><i class="ti ti-grip-vertical me-1"></i>EMAIL</span>
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
                                        <span><i class="ti ti-grip-vertical me-1"></i>DUE DATE</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>INVOICE AMOUNT</span>
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
                            <th>INVOICE NO</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>CREATED DATE</th>
                            <th>DUE DATE</th>
                            <th>INVOICE AMOUNT</th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12345</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-20.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Andrew Simons</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>andrew@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">24 Jan 2025</p>
                                    <span class="text-gray-5">01:00 PM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">24 Jan 2025</p>
                                    <span class="text-gray-5">01:00 PM</span>
                                </div>
                            </td>
                            <td>$120.00</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Paid
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12346</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-21.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">David Steiger</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>david@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">19 Dec 2024</p>
                                    <span class="text-gray-5">10:00 AM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">19 Dec 2024</p>
                                    <span class="text-gray-5">10:00 AM</span>
                                </div>
                            </td>
                            <td>$85.00</td>
                            <td>
                                <span class="badge badge-soft-info d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Pending
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12347</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-12.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Virginia Phu</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>phu@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">11 Dec 2024</p>
                                    <span class="text-gray-5">08:30 AM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">11 Dec 2024</p>
                                    <span class="text-gray-5">08:30 AM</span>
                                </div>
                            </td>
                            <td>$120.00</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Paid
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12348</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-22.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Walter Hartmann</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>walter@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">29 Nov 2024</p>
                                    <span class="text-gray-5">03:15 PM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">29 Nov 2024</p>
                                    <span class="text-gray-5">03:15 PM</span>
                                </div>
                            </td>
                            <td>$175.00</td>
                            <td>
                                <span class="badge bg-violet-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Overdue
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12349</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-08.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Andrea Jermaine</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>jermaine@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">03 Nov 2024</p>
                                    <span class="text-gray-5">04:10 PM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">03 Nov 2024</p>
                                    <span class="text-gray-5">04:10 PM</span>
                                </div>
                            </td>
                            <td>$200.00</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Paid
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12350</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Dennis Eckhardt</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>dennis@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">31 Oct 2024</p>
                                    <span class="text-gray-5">11:00 AM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">31 Oct 2024</p>
                                    <span class="text-gray-5">11:00 AM</span>
                                </div>
                            </td>
                            <td>$90.00</td>
                            <td>
                                <span class="badge badge-soft-info d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Pending
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12351</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-25.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Lan Adams</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>lan@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">15 Oct 2024</p>
                                    <span class="text-gray-5">09:40 AM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">15 Oct 2024</p>
                                    <span class="text-gray-5">09:40 AM</span>
                                </div>
                            </td>
                            <td>$160.00</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Paid
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12352</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-17.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Ann Crump</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>crump@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">26 Sep 2024</p>
                                    <span class="text-gray-5">02:30 PM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">26 Sep 2024</p>
                                    <span class="text-gray-5">02:30 PM</span>
                                </div>
                            </td>
                            <td>$180.00</td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Unpaid
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12353</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-07.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Julie Black</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>julie@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">01 Sep 2024</p>
                                    <span class="text-gray-5">05:20 PM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">01 Sep 2024</p>
                                    <span class="text-gray-5">05:20 PM</span>
                                </div>
                            </td>
                            <td>$230.00</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Paid
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#INV12354</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-26.jpg')}}" alt="User Img"></a>
                                    <div>
                                        <h6 class="fs-14"><a href="{{url('admin/customer-details')}}">Jean Walker</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>jean@example.com</td>
                            <td>
                                <div>
                                    <p class="mb-0">15 Aug 2024</p>
                                    <span class="text-gray-5">09:30 AM</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">15 Aug 2024</p>
                                    <span class="text-gray-5">09:30 AM</span>
                                </div>
                            </td>
                            <td>$300.00</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>
                                    Paid
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-invoice')}}"><i class="ti ti-edit me-1"></i>Edit</a>
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