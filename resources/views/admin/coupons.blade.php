<?php $page = 'coupons'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Coupons</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Coupons</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2 me-2">
                        <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_coupons"><i class="ti ti-plus me-2"></i>Add Coupon</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->
            <!-- Coupons tabs -->
                <div class="coupons-tabs">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                href="#all-coupons" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                href="#active-coupons" aria-selected="false">Active Coupons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                href="#completed-coupons" aria-selected="false">Completed Coupons</a>
                        </li>
                    
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="all-coupons" role="tabpanel">
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
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        <i class="ti ti-layout-board me-1"></i> Columns
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg p-2">
                                        <ul>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>COUPON NAME</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>CODE</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DESCRIPTION</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DISCOUNT TYPE</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DISCOUNT</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>LIMIT</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>VALID</span>
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
                                        Discount Type
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
                                                <input class="form-check-input m-0 me-2" type="checkbox">Percentage
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">Fixed Amount
                                            </label>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        Status
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg p-2">
                                        
                                        <li class="dropdown-item d-flex align-items-center rounded-1">
                                            Active
                                        </li>
                                        <li class="dropdown-item d-flex align-items-center rounded-1">
                                            Inactive
                                        </li>
                                        
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                                <a href="javascript:void(0);" class="text-danger links">Clear All</a>
                            </div>
                        </div>

                        <!-- Custom Data Table -->
                        <div class="custom-datatable-filter table-responsive brandstable country-table">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>COUPON NAME</th>
                                        <th>CODE</th>
                                        <th>DESCRIPTION</th>
                                        <th>DISCOUNT TYPE</th>
                                        <th>DISCOUNT</th>
                                        <th>LIMIT</th>
                                        <th>VALID</th>
                                        <th>STATUS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Summer Sale 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">SUMMER2024</span>
                                        </td>
                                        <td>
                                            <p>20% off on all rentals in July</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>20%</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>24 Jan 2025</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr>                                                                                                  
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Fall Savings</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">FALL15</span>
                                        </td>
                                        <td>
                                            <p>15% off for long-term rentals</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>15%</p>
                                        </td>
                                        <td>
                                            <p>03</p>
                                        </td>
                                        <td>
                                            <p>19 Dec 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Weekend Discount</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">WEEKEND10</span>
                                        </td>
                                        <td>
                                            <p>10% off on weekend rentals</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>10%</p>
                                        </td>
                                        <td>
                                            <p>08</p>
                                        </td>
                                        <td>
                                            <p>11 Dec 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">First Timer Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">FIRSTTIME20</span>
                                        </td>
                                        <td>
                                            <p>20% off for first-time customers</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>20%</p>
                                        </td>
                                        <td>
                                            <p>14</p>
                                        </td>
                                        <td>
                                            <p>29 Nov 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Holiday Cheer 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">HOLIDAY2024</span>
                                        </td>
                                        <td>
                                            <p>25% off during the holiday season</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>05</p>
                                        </td>
                                        <td>
                                            <p>03 Nov 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">VIP Discount</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">VIPCUSTOMER25</span>
                                        </td>
                                        <td>
                                            <p>Exclusive 25% discount for VIP users</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>18</p>
                                        </td>
                                        <td>
                                            <p>31 Oct 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">SUV Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">SUV50</span>
                                        </td>
                                        <td>
                                            <p>$50 off on SUV rentals for 7+ days</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$50</p>
                                        </td>
                                        <td>
                                            <p>04</p>
                                        </td>
                                        <td>
                                            <p>15 Oct 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">New Year 2025</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">NEWYEAR2025</span>
                                        </td>
                                        <td>
                                            <p>25% off for New Year bookings</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>26 Sep 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Weekend Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">WEEKEND50</span>
                                        </td>
                                        <td>
                                            <p>Save $50 on weekend rentals.</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$50</p>
                                        </td>
                                        <td>
                                            <p>09</p>
                                        </td>
                                        <td>
                                            <p>01 Sep 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Refer a Friend</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">REFERFRIEND10</span>
                                        </td>
                                        <td>
                                            <p>Get $10 off for referring a friend</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$10</p>
                                        </td>
                                        <td>
                                            <p>12</p>
                                        </td>
                                        <td>
                                            <p>15 Aug 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr>                                                                                            
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="tab-pane" id="active-coupons" role="tabpanel">
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
                                    <a href="#filtercollapse2" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse2">
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
                                                    <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>COUPON NAME</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>CODE</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DESCRIPTION</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DISCOUNT TYPE</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DISCOUNT</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>LIMIT</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>VALID</span>
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


                        <div class="collapse" id="filtercollapse2">
                            <div class="filterbox mb-3 d-flex align-items-center">
                                <h6 class="me-3">Filters</h6>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        Discount Type
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
                                                <input class="form-check-input m-0 me-2" type="checkbox">Percentage
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">Fixed Amount
                                            </label>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        Status
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg p-2">
                                        
                                        <li class="dropdown-item d-flex align-items-center rounded-1">
                                            Active
                                        </li>
                                        <li class="dropdown-item d-flex align-items-center rounded-1">
                                            Active
                                        </li>
                                        
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                                <a href="javascript:void(0);" class="text-danger links">Clear All</a>
                            </div>
                        </div>

                        <!-- Custom Data Table -->
                        <div class="custom-datatable-filter table-responsive brandstable country-table">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>COUPON NAME</th>
                                        <th>CODE</th>
                                        <th>DESCRIPTION</th>
                                        <th>DISCOUNT TYPE</th>
                                        <th>DISCOUNT</th>
                                        <th>LIMIT</th>
                                        <th>VALID</th>
                                        <th>STATUS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Summer Sale 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">SUMMER2024</span>
                                        </td>
                                        <td>
                                            <p>20% off on all rentals in July</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>20%</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>24 Jan 2025</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr>                                                                                                  
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Fall Savings</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">FALL15</span>
                                        </td>
                                        <td>
                                            <p>15% off for long-term rentals</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>15%</p>
                                        </td>
                                        <td>
                                            <p>03</p>
                                        </td>
                                        <td>
                                            <p>19 Dec 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Weekend Discount</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">WEEKEND10</span>
                                        </td>
                                        <td>
                                            <p>10% off on weekend rentals</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>10%</p>
                                        </td>
                                        <td>
                                            <p>08</p>
                                        </td>
                                        <td>
                                            <p>11 Dec 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">First Timer Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">FIRSTTIME20</span>
                                        </td>
                                        <td>
                                            <p>20% off for first-time customers</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>20%</p>
                                        </td>
                                        <td>
                                            <p>14</p>
                                        </td>
                                        <td>
                                            <p>29 Nov 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Holiday Cheer 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">HOLIDAY2024</span>
                                        </td>
                                        <td>
                                            <p>25% off during the holiday season</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>05</p>
                                        </td>
                                        <td>
                                            <p>03 Nov 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">VIP Discount</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">VIPCUSTOMER25</span>
                                        </td>
                                        <td>
                                            <p>Exclusive 25% discount for VIP users</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>18</p>
                                        </td>
                                        <td>
                                            <p>31 Oct 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">SUV Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">SUV50</span>
                                        </td>
                                        <td>
                                            <p>$50 off on SUV rentals for 7+ days</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$50</p>
                                        </td>
                                        <td>
                                            <p>04</p>
                                        </td>
                                        <td>
                                            <p>15 Oct 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">New Year 2025</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">NEWYEAR2025</span>
                                        </td>
                                        <td>
                                            <p>25% off for New Year bookings</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>26 Sep 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Weekend Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">WEEKEND50</span>
                                        </td>
                                        <td>
                                            <p>Save $50 on weekend rentals.</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$50</p>
                                        </td>
                                        <td>
                                            <p>09</p>
                                        </td>
                                        <td>
                                            <p>01 Sep 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Refer a Friend</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">REFERFRIEND10</span>
                                        </td>
                                        <td>
                                            <p>Get $10 off for referring a friend</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$10</p>
                                        </td>
                                        <td>
                                            <p>12</p>
                                        </td>
                                        <td>
                                            <p>15 Aug 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr>                                                                                            
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="tab-pane" id="completed-coupons" role="tabpanel">
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
                                    <a href="#filtercollapse3" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse3">
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
                                                    <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>COUPON NAME</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>CODE</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DESCRIPTION</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DISCOUNT TYPE</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>DISCOUNT</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>LIMIT</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>VALID</span>
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


                        <div class="collapse" id="filtercollapse3">
                            <div class="filterbox mb-3 d-flex align-items-center">
                                <h6 class="me-3">Filters</h6>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        Discount Type
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
                                                <input class="form-check-input m-0 me-2" type="checkbox">Percentage
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">Fixed Amount
                                            </label>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        Status
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg p-2">
                                        
                                        <li class="dropdown-item d-flex align-items-center rounded-1">
                                            Active
                                        </li>
                                        <li class="dropdown-item d-flex align-items-center rounded-1">
                                            Inactive
                                        </li>
                                        
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                                <a href="javascript:void(0);" class="text-danger links">Clear All</a>
                            </div>
                        </div>

                        <!-- Custom Data Table -->
                        <div class="custom-datatable-filter table-responsive brandstable country-table">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>COUPON NAME</th>
                                        <th>CODE</th>
                                        <th>DESCRIPTION</th>
                                        <th>DISCOUNT TYPE</th>
                                        <th>DISCOUNT</th>
                                        <th>LIMIT</th>
                                        <th>VALID</th>
                                        <th>STATUS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Summer Sale 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">SUMMER2024</span>
                                        </td>
                                        <td>
                                            <p>20% off on all rentals in July</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>20%</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>24 Jan 2025</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr>                                                                                                  
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Fall Savings</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">FALL15</span>
                                        </td>
                                        <td>
                                            <p>15% off for long-term rentals</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>15%</p>
                                        </td>
                                        <td>
                                            <p>03</p>
                                        </td>
                                        <td>
                                            <p>19 Dec 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Weekend Discount</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">WEEKEND10</span>
                                        </td>
                                        <td>
                                            <p>10% off on weekend rentals</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>10%</p>
                                        </td>
                                        <td>
                                            <p>08</p>
                                        </td>
                                        <td>
                                            <p>11 Dec 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">First Timer Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">FIRSTTIME20</span>
                                        </td>
                                        <td>
                                            <p>20% off for first-time customers</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>20%</p>
                                        </td>
                                        <td>
                                            <p>14</p>
                                        </td>
                                        <td>
                                            <p>29 Nov 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Holiday Cheer 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">HOLIDAY2024</span>
                                        </td>
                                        <td>
                                            <p>25% off during the holiday season</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>05</p>
                                        </td>
                                        <td>
                                            <p>03 Nov 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">VIP Discount</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">VIPCUSTOMER25</span>
                                        </td>
                                        <td>
                                            <p>Exclusive 25% discount for VIP users</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>18</p>
                                        </td>
                                        <td>
                                            <p>31 Oct 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">SUV Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">SUV50</span>
                                        </td>
                                        <td>
                                            <p>$50 off on SUV rentals for 7+ days</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$50</p>
                                        </td>
                                        <td>
                                            <p>04</p>
                                        </td>
                                        <td>
                                            <p>15 Oct 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">New Year 2025</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">NEWYEAR2025</span>
                                        </td>
                                        <td>
                                            <p>25% off for New Year bookings</p>
                                        </td>
                                        <td>
                                            <p>Percentage</p>
                                        </td>
                                        <td>
                                            <p>25%</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>26 Sep 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Weekend Special</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">WEEKEND50</span>
                                        </td>
                                        <td>
                                            <p>Save $50 on weekend rentals.</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$50</p>
                                        </td>
                                        <td>
                                            <p>09</p>
                                        </td>
                                        <td>
                                            <p>01 Sep 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr> 
                                    <tr>
                                    
                                        <td>
                                            <p class="text-gray-9 fw-semibold">Refer a Friend</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-violet border">REFERFRIEND10</span>
                                        </td>
                                        <td>
                                            <p>Get $10 off for referring a friend</p>
                                        </td>
                                        <td>
                                            <p>Fixed Amount</p>
                                        </td>
                                        <td>
                                            <p>$10</p>
                                        </td>
                                        <td>
                                            <p>12</p>
                                        </td>
                                        <td>
                                            <p>15 Aug 2024</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_coupons"><i class="ti ti-edit me-1"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_coupons"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                    </tr>                                                                                            
                                </tbody>
                            </table>
                        </div>
                        </div>
                        
                    </div>
                </div>
            <!-- /Coupons tabs -->
            
                        
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