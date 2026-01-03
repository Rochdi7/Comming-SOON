<?php $page = 'add-quotations'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            <div class="mb-3">
                <a href="{{url('admin/quotations')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-narrow-left me-2"></i>Quotations</a>
            </div>
            <div class="wizard-form">
                <fieldset id="first-field">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url('admin/add-quotations')}}">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="reservation-wizard mb-4">
                                            <ul class="d-flex align-items-center flex-wrap row-gap-2" id="progressbar">
                                                <li class="d-flex align-items-center active me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                                    <h6>Car & Dates Info</h6>
                                                </li>
                                                <li class="d-flex align-items-center me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                                    <h6>Customer</h6>
                                                </li>
                                                <li class="d-flex align-items-center me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                                    <h6>Extra Services</h6>
                                                </li>
                                                <li class="d-flex align-items-center me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                                    <h6>Billing Details</h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card card-bg">
                                            <div class="card-body">
                                                <h4 class="d-flex align-items-center"><i class="ti ti-info-circle me-2 text-secondary fs-24"></i>Basic Info</h4>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            
                                            <div class="border-bottom mb-3 pb-3">
                                                <div class="row gx-3">
                                                    <div class="col-lg-3 col-sm-12">
                                                        <div>
                                                            <h5 class="mb-1">Date & Time Of Travel</h5>
                                                            <p>Add Information on Date of Travel</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Tarrif</label>
                                                                    <select class="select">
                                                                        <option>Weekly</option>
                                                                        <option>Daily</option>
                                                                        <option>Monthly</option>
                                                                        <option>Yearly</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Driving Type</label>
                                                                    <select class="select">
                                                                        <option>Self-Drive</option>
                                                                        <option>Chauffeur-Driven</option>
                                                                        <option>One-Way Rental</option>
                                                                        <option>Long-Term Lease</option>
                                                                        <option>Hourly Rental</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">No of Passengers</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="row gx-3">
                                                                    <div class="col-md-7">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Start Date <span class="text-danger"> *</span> </label>
                                                                            <div class="input-icon-end position-relative">
                                                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Time <span class="text-danger"> *</span> </label>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="input-icon-end position-relative flex-fill">
                                                                                    <input type="text" class="form-control timepicker" placeholder="">
                                                                                    <span class="input-icon-addon">
                                                                                        <i class="ti ti-clock"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <span class="avatar avatar-sm flex-shrink-0 bg-success fs-14 rounded-circle ms-3"><i class="ti ti-chevron-right"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="row gx-3">
                                                                    <div class="col-md-8">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">End Date <span class="text-danger"> *</span> </label>
                                                                            <div class="input-icon-end position-relative">
                                                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Time <span class="text-danger"> *</span> </label>
                                                                            <div class="input-icon-end position-relative">
                                                                                <input type="text" class="form-control timepicker" placeholder="">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Pickup Location <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>Los Angles</option>
                                                                        <option>New York City</option>
                                                                        <option>Houston</option>
                                                                        <option>Munich</option>
                                                                        <option>Montreal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Return Location <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>Los Angles</option>
                                                                        <option>New York City</option>
                                                                        <option>Houston</option>
                                                                        <option>Munich</option>
                                                                        <option>Montreal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Security Deposit </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <label class="d-flex align-items-center">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">Return Same Location
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-3 col-sm-12">
                                                    <div>
                                                        <h5 class="mb-1">Select Vehicle</h5>
                                                        <p>Select Vehicle for your rental</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="dropdown me-2">
                                                                    <a href="#filtercollapse" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="filtercollapse">
                                                                        <i class="ti ti-filter me-1"></i> Filter <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
                                                                    </a>
                                                                </div>
                                                                <div class="top-search me-2  w-100">
                                                                    <div class="top-search-group">
                                                                        <span class="input-icon">
                                                                            <i class="ti ti-search"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Search">
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="{{url('admin/add-car')}}" class="btn btn-dark d-inline-flex min-width-100 align-items-center">
                                                                        <i class="ti ti-plus me-1"></i>Add New
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="collapse" id="filtercollapse">
                                                                <div class="filterbox mb-3 px-3">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-lg-10">
                                                                            <div class=" d-flex align-items-center flex-wrap row-gap-3">
                                                                                <div class="dropdown me-2">
                                                                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                                        Select Brand
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
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Toyota
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Honda
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Ford
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Chevrolet
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">BMW
                                                                                            </label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="dropdown me-2">
                                                                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                                                        Select Type
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
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Economy
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Compact
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Sedan
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">SUV
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Luxury
                                                                                            </label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="dropdown me-2">
                                                                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                                                        <i class="ti ti-badge me-1"></i>Select Model
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
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Urban Cruiser
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Fortuner
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">V8
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Q3
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Huracan
                                                                                            </label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                                                        <i class="ti ti-badge me-1"></i>Select Color
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
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">White
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Black
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Silver
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Gray
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                                <input class="form-check-input m-0 me-2" type="checkbox">Blue
                                                                                            </label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <div class="d-flex align-items-center justify-content-end">
                                                                                <a href="javascript:void(0);" class="me-3 text-purple links">Apply</a>
                                                                                <a href="javascript:void(0);" class="text-danger links">Clear All</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bg-light justify-content-center align-items-center p-3 br-5">
                                                                <div class="text-center ">
                                                                    <img src="{{URL::asset('admin_assets/img/icons/nodata.svg')}}" class="mb-2" alt="nodata" >
                                                                    <p class="text-gray-5">No Data Available</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="card-footer px-0 pb-0">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="field-btns">
                                                    <button class="btn btn-light me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Cancel</button>
                                                </div> 
                                                <div class="field-btns">
                                                    <button class="btn btn-primary wizard-next-btn" type="button">Add Customer <i class="ti ti-chevron-right ms-1"></i></button>
                                                </div>  
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url('admin/add-quotations')}}">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="reservation-wizard mb-4">
                                            <ul class="d-flex align-items-center flex-wrap row-gap-2" id="progressbar1">
                                                <li class="d-flex align-items-center activated me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                                    <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                                    <h6>Car & Dates Info</h6>
                                                </li>
                                                <li class="d-flex align-items-center active me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                                    <h6>Customer</h6>
                                                </li>
                                                <li class="d-flex align-items-center me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                                    <h6>Extra Services</h6>
                                                </li>
                                                <li class="d-flex align-items-center me-2">
                                                    <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                                    <h6>Billing Details</h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card card-bg">
                                            <div class="card-body">
                                                <h4 class="d-flex align-items-center"><i class="ti ti-user-check me-2 text-secondary fs-24"></i>Customer</h4>
                                            </div>
                                        </div>
                                        <div class="border-bottom mb-3">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <h6 class="mb-1">Select Customer </h6>
                                                        <p>Add Information of Customer</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Customer <span class="text-danger">*</span></label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-fill ">
                                                                <select class="select">
                                                                    <option>Select</option>
                                                                    <option>Reuben Keen</option>
                                                                    <option>William Jones</option>
                                                                    <option>Leonard Jandreau</option>
                                                                    <option>Adam Bolden</option>
                                                                </select>
                                                            </div>
                                                            <div class="ms-4">
                                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_client" class="btn btn-dark d-inline-flex align-items-center">
                                                                    <i class="ti ti-plus me-1"></i>Add New
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-12">
                                                <div class="mb-3">
                                                    <h6 class="mb-1">Select Driver </h6>
                                                    <p>Add Information of Driver</p>
                                                </div>
                                            </div>  
                                        
                                            <div class="col-lg-9 col-sm-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Driver <span class="text-danger">*</span></label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-fill ">
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Reuben Keen</option>
                                                                <option>William Jones</option>
                                                                <option>Leonard Jandreau</option>
                                                                <option>Adam Bolden</option>
                                                            </select>
                                                        </div>
                                                        <div class="ms-4">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_driver" class="btn btn-dark d-inline-flex align-items-center">
                                                                <i class="ti ti-plus me-1"></i>Add New
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-end mb-3 d-none">
                                                    <a href="javascript:void(0);" class="text-purple text-decoration-underline fw-medium" data-bs-toggle="modal" data-bs-target="#edit_price">Edit Price</a>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer px-0 pb-0">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="field-btns">
                                                    <button class="btn btn-light wizard-prev-btn me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Back to Info</button>
                                                </div> 
                                                <div class="field-btns">
                                                    <button class="btn btn-primary wizard-next-btn" type="button">Add Extra Services<i class="ti ti-chevron-right ms-1"></i></button>
                                                </div>  
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </fieldset>
                <fieldset>
                    <form action="{{url('admin/add-quotations')}}">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="reservation-wizard mb-4">
                                    <ul class="d-flex align-items-center flex-wrap row-gap-2" id="progressbar2">
                                        <li class="d-flex align-items-center activated me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                            <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                            <h6>Car & Dates Info</h6>
                                        </li>
                                        <li class="d-flex align-items-center activated  me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                            <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                            <h6>Customer</h6>
                                        </li>
                                        <li class="d-flex align-items-center active me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                            <h6>Extra Services</h6>
                                        </li>
                                        <li class="d-flex align-items-center me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                            <h6>Billing Details</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card card-bg">
                                    <div class="card-body">
                                        <h4 class="d-flex align-items-center"><i class="ti ti-float-center me-2 text-secondary fs-24"></i>Extra Service</h4>
                                    </div>
                                </div>
                                
                                <div class="row border-bottom mb-3">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <div class="mb-3">
                                                <h6 class="mb-1">Select Extra Services</h6>
                                                <p>Add extra services for your rental</p>
                                            </div>
                                            <a href="javascript:void(0);" class="text-purple text-decoration-underline fw-medium"  data-bs-toggle="modal" data-bs-target="#edit_price1">Edit Price</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="custom-checkbox active">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-1" checked>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-1">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Navigation</span>
                                                            <span class="d-block">Using GPS while travel</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-2">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-2">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Wi-Fi Hotspot</span>
                                                            <span class="d-block">Constant portable internet</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-3">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-3">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Fuel Pre-Purchase</span>
                                                            <span class="d-block">Full tank, return hassle-free</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">One Time</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-4">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-4">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Satellite Radio</span>
                                                            <span class="d-block"> Unlimited premium music</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-5">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-5">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">USB Charger</span>
                                                            <span class="d-block">Fast charging for devices</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-6">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-6">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Toll Pass</span>
                                                            <span class="d-block">Skip toll booth lines</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">One Time</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-7">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-7">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Dash Cam</span>
                                                            <span class="d-block">Records trips extra security</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Express Check-in/out</span>
                                                            <span class="d-block">Fast pickup & return process</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox active">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-9" checked>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-9">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Child Safety Seats</span>
                                                            <span class="d-block">Secure infant/toddler car seat</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="custom-check-10">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4" for="custom-check-10">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Roadside Assistance</span>
                                                            <span class="d-block">24/7 emergency car support</span>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Per Day</p>
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-footer px-0 pb-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <div class="field-btns">
                                            <button class="btn btn-light wizard-prev-btn me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Back to Info</button>
                                        </div> 
                                        <div class="field-btns">
                                            <button class="btn btn-primary wizard-next-btn" type="button">Add Extra Services<i class="ti ti-chevron-right ms-1"></i></button>
                                        </div>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
                <fieldset>
                    <form action="{{url('admin/quotations')}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="reservation-wizard mb-4">
                                    <ul class="d-flex align-items-center flex-wrap row-gap-2" id="progressbar3">
                                        <li class="d-flex align-items-center activated me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                            <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                            <h6>Car & Dates Info</h6>
                                        </li>
                                        <li class="d-flex align-items-center activated  me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                            <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                            <h6>Customer</h6>
                                        </li>
                                        <li class="d-flex align-items-center activated me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                            <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                            <h6>Extra Services</h6>
                                        </li>
                                        <li class="d-flex align-items-center active me-2">
                                            <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                            <h6>Billing Details</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card card-bg">
                                    <div class="card-body">
                                        <h4 class="d-flex align-items-center"><i class="ti ti-file-invoice me-2 text-secondary fs-24"></i>Billing Details</h4>
                                    </div>
                                </div>
                                <div class="row border-bottom mb-3">
                                    <div class="col-lg-3 col-sm-12">
                                        <div class="mb-3">
                                            <h6 class="mb-1">Rent & Service Billing</h6>
                                            <p>Add extra services for your rental</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Base Kilometers (Per Day)</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Kilometers Extra Price</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Expenses</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Delivery price</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row border-bottom mb-3">
                                    <div class="col-lg-3 col-sm-12">
                                        <div class="d-flex">
                                            <div class="form-check form-check-md form-switch me-2">
                                                <label class="form-check-label form-label mt-0 mb-0">
                                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1">Insurance</h6>
                                                <p>Add Insurance of Your Ride</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-9 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Full Premium Insurance</span>
                                                            <a href="javascript:void(0);" class="d-block text-info">+4 Benefits <i class="ti ti-info-small rounded-circle bg-gray-500 text-white"></i></a>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Onetime Ride</p>
                                                            <h6>$200</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-checkbox">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-check-label ms-2 ps-4">
                                                            <span class="fw-semibold text-gray-9 d-block mb-1">Satellite Radio</span>
                                                            <a href="javascript:void(0);" class="d-block text-info">+6 Benefits <i class="ti ti-info-small rounded-circle bg-gray-500 text-white"></i></a>
                                                        </label>
                                                        <div class="text-end">
                                                            <p class="mb-1">Onetime Ride</p>
                                                            <h6>$250</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-sm-12">
                                        <div class="d-flex">
                                            <div class="form-check form-check-md form-switch me-2">
                                                <label class="form-check-label form-label mt-0 mb-0">
                                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="mb-1">Invoice Settings</h6>
                                                <p>Add Invoice Settings</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-9 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Tax Type <span class="text-danger">*</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option selected>%</option>
                                                        <option>Direct</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Add Tax Value <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card-footer px-0 pb-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <div class="field-btns">
                                            <button class="btn btn-light wizard-prev-btn me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Back to Info</button>
                                        </div> 
                                        <div class="field-btns">
                                            <button class="btn btn-primary wizard-next-btn" type="submit">Finish & Save<i class="ti ti-chevron-right ms-1"></i></button>
                                        </div>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
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