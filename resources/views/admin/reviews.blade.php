<?php $page = 'reviews'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Reviews</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                                        <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>AUTHOR</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>REVIEW DATE</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>RATINGS</span>
                                        <div class="form-check form-check-sm form-switch mb-0">
                                            <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                        <span><i class="ti ti-grip-vertical me-1"></i>REVIEW</span>
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
                    
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Select Ratings
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
                <table class="table datatable quotations-table">
                    <thead class="thead-light">
                        <tr>
                            <th class="no-sort">
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox" id="select-all">
                                </div>
                            </th>
                            <th>AUTHOR</th>
                            <th>REVIEW DATE</th>
                            <th>RATINGS</th>
                            <th>REVIEW</th>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-01.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Shaun Farley</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">24 Jan 2025 </p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Super easy booking process and great car selection!</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-12.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Jenny Ellis</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">19 Dec 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Transparent pricing with no hidden fees - highly recommend!</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-15.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Leon Baxter</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">11 Dec 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Wide range of cars, from budget to luxury - perfect for any trip!</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-17.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Karen Flores</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">29 Nov 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Pick-up and drop-off were seamless - best rental experience ever!</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-06.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Michael Dawson</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">03 Nov 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Clean, well-maintained cars and excellent customer support</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-18.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Karen Galvan</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">31 Oct 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Great deals and discounts - saved money on my rental!</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-03.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Thomas Ward</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">15 Oct 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Fast check-in and check-out process, super convenient</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-17.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Aliza Duncan</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">26 Sep 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Quick responses from customer support - very helpful</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">James Higham</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">01 Sep 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Best rental experience - I'll definitely use them again</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <a href="{{url('admin/customer-details')}}" class="avatar me-2 flex-shrink-0"><img class="rounded-circle" src="{{URL::asset('admin_assets/img/profiles/avatar-08.jpg')}}" alt=""></a>
                                    <div>
                                        <a href="{{url('admin/customer-details')}}" class="fw-semibold d-block">Jade Robinson</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 mb-0">15 Aug 2024</p>
                            </td>
                            <td>
                                <div>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span><i class="ti ti-star-filled text-warning"></i></span>
                                    <span class="fs-14">(5.0)</span>
                                </div>
                            </td>
                            <td><p class="text-gray-9 mb-0">Booking was fast, and the car was ready on time!</p></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_review"><i class="ti ti-trash me-1"></i>Delete</a>
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