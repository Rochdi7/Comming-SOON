<?php $page = 'rental-report'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Rental Reports</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Reports</li>
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

            <!-- Charts -->
            <div class="row">
                <!-- Total Earnings -->
                <div class="col-xl-12 d-flex">
                    <div class="row flex-fill earnings-report">
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="card flex-fill position-relative orange-highlights">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate d-block mb-2">Total Bookings</span>
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-1 fw-semibold">5,450</h6>
                                                <p class="fs-12 fw-normal d-flex align-items-center justify-content-center text-truncate ">
                                                    Rentals
                                                    <span class="text-success fs-12 d-flex align-items-center ms-1">
                                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+12%
                                                    </span> 
                                                </p>
                                            </div>
                                            
                                        </div>
                                        <a href="javascript:void(0);" class="avatar avatar-md avatar-rounded bg-orange-transparent border border-primary">
                                            <i class="text-primary ti ti-bookmarks fs-18"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="card flex-fill position-relative success-highlights">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate d-block mb-2">Most Rented Car</span>
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-1 fw-semibold">Toyota (320)</h6>
                                                <p class="fs-12 fw-normal d-flex align-items-center justify-content-center text-truncate ">
                                                    <span class="text-success fs-12 d-flex align-items-center ms-1">
                                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+17.02%
                                                    </span> 
                                                </p>
                                            </div>
                                            
                                        </div>
                                        <a href="javascript:void(0);" class="avatar avatar-md avatar-rounded bg-success-transparent border border-success">
                                            <i class="text-success ti ti-car fs-18"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="card flex-fill position-relative info-highlights">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate d-block mb-2">Revenue Generated</span>
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-1 fw-semibold">$45,221</h6>
                                                <p class="fs-12 fw-normal d-flex align-items-center justify-content-center text-truncate ">
                                                    <span class="text-success fs-12 d-flex align-items-center ms-1">
                                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+10.13%
                                                    </span> 
                                                </p>
                                            </div>
                                            
                                        </div>
                                        <a href="javascript:void(0);" class="avatar avatar-md avatar-rounded bg-info-transparent border border-info">
                                            <i class="text-info ti ti-currency-dollar fs-18"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 d-flex">
                            <div class="card flex-fill position-relative danger-highlights">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="fs-14 fw-normal text-truncate d-block mb-2">Customer Ratings</span>
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-1 fw-semibold">4.7<span class="text-gray-5">/5</span></h6>
                                                <p class="fs-12 fw-normal d-flex align-items-center justify-content-center text-truncate ">
                                                    <span class="text-success fs-12 d-flex align-items-center ms-1">
                                                        <i class="ti ti-arrow-wave-right-up me-1"></i>+0.5%
                                                    </span> 
                                                </p>
                                            </div>
                                            
                                        </div>
                                        <a href="javascript:void(0);" class="avatar avatar-md avatar-rounded bg-danger-transparent border border-danger">
                                            <i class="text-danger ti ti-star fs-18"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Earnings -->

                <!-- Total Earnings -->
                <div class="col-xl-8 d-flex">
                    <div class="card flex-fill earnings-chart">
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="d-flex align-items-center ">
                                    <span class="avatar avatar-md avatar-rounded bg-orange-transparent border-orange me-2"><i class="ti ti-bookmarks fs-14 text-orange"></i></span>
                                    <h5>Total Bookings </h5>
                                </div>
                                <div class="earning-square d-flex align-items-center">
                                    <span class="me-2"></span>
                                    <p class="fs-12 text-gray-5">Bookings</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div id="total-bookings"></div>
                        </div>
                    </div>
                </div>
                <!-- /Total Earnings -->

                <!-- Total Earnings -->
                <div class="col-xl-4 d-flex">
                    <div class="card flex-fill earnings-chart">
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="d-flex align-items-center ">
                                    <span class="avatar avatar-md avatar-rounded bg-success-transparent border-success me-2"><i class="ti ti-car fs-14 text-success"></i></span>
                                    <h5>Most Rented Car</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div id="chart"></div>
                            <div>
                                <ul class="breakdown-reports">
                                    <li>
                                        <p class="text-gray-9 fs-10 d-flex align-items-center mb-0"><i class="ti ti-point-filled text-danger me-1"></i>Ford Endeavour</p>
                                        <span class="fs-10 text-gray-5">245</span>
                                    </li>
                                    <li>
                                        <p class="text-gray-9 fs-10 d-flex align-items-center mb-0"><i class="ti ti-point-filled text-teal me-1"></i>Ferrari 458 MM</p>
                                        <span class="fs-10 text-gray-5">286</span>
                                    </li>
                                    <li>
                                        <p class="text-gray-9 fs-10 d-flex align-items-center mb-0"><i class="ti ti-point-filled text-warning me-1"></i>Ford Mustang</p>
                                        <span class="fs-10 text-gray-5">135</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Earnings -->
                    
            </div>
                <!-- /Charts -->

                <!-- Table Header -->
                <div>
                    <h5 class="mb-3">Rentals</h5>
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
                                                <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>INVOICE NO</span>
                                                <div class="form-check form-check-sm form-switch mb-0">
                                                    <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                <span><i class="ti ti-grip-vertical me-1"></i>CAR</span>
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
                                                <span><i class="ti ti-grip-vertical me-1"></i>AMOUNT</span>
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
                </div>
                
            <!-- /Table Header -->


            <div class="collapse" id="filtercollapse">
                <div class="filterbox mb-3 d-flex align-items-center">
                    <h6 class="me-3">Filters</h6>
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Select Cars
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Ford Endeavour
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Ferrari 458 MM
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Ford Mustang 
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Toyota Tacoma 4
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Chevrolet Pick Truck
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Etios Carmen
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Acura Sport Version
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Kia Soul 2016
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Chevrolet Camaro
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Toyota Camry SE 350
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
                                    <input class="form-check-input m-0 me-2" type="checkbox">Confirmed
                                </label>
                            </li>
                            <li >
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">In Rental
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">Rejected
                                </label>
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
                                <th>INVOICE NO</th>
                                <th>CAR</th>
                                <th>CUSTOMER</th>
                                <th>AMOUNT</th>
                                <th>DATE</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12345</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Ford Endeavour</a>
                                            <span class="fs-13">Sedan</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/customer-details')}}">Reuben Keen</a>
                                            <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $120
                                </td>
                                <td>
                                    24 Jan 2025
                                </td>
                                <td>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 text-success"></i>Completed</span>
                                </td>
                                
                            </tr>                                                                                                  
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12346</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Ferrari 458 MM</a>
                                            <span class="fs-13">Convertible</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/company-details')}}">William Jones</a>
                                            <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $85
                                </td>
                                <td>
                                    19 Dec 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 text-primary"></i>Confirmed</span>
                                </td>
                                
                            </tr>                                                                                          
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12347</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Ford Mustang </a>
                                            <span class="fs-13">Coupe</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/company-details')}}">Leonard Jandreau</a>
                                            <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $250
                                </td>
                                <td>
                                    11 Dec 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-violet d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 "></i>In Rental</span>
                                </td>
                                
                            </tr>  
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12348</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Toyota Tacoma 4</a>
                                            <span class="fs-13">Hatchback</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-04.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/customer-details')}}">Adam Bolden</a>
                                            <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $175
                                </td>
                                <td>
                                    29 Nov 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 text-primary"></i>Confirmed</span>
                                </td>
                                
                            </tr>  
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12349</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Chevrolet Truck	</a>
                                            <span class="fs-13">Sedan</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-05.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/company-details')}}">Harvey Jimenez</a>
                                            <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $200
                                </td>
                                <td>
                                    03 Nov 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 text-danger"></i>Rejected</span>
                                </td>
                                
                            </tr>  
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12350</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-06.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Etios Carmen	</a>
                                            <span class="fs-13">Hatchback</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-06.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/customer-details')}}">William Ward</a>
                                            <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $90
                                </td>
                                <td>
                                    31 Oct 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 text-success"></i>Completed</span>
                                </td>
                                
                            </tr>  
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12351</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Acura Sport </a>
                                            <span class="fs-13">Crossover</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-07.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/customer-details')}}">Norman Coleman</a>
                                            <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $160
                                </td>
                                <td>
                                    15 Oct 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 text-primary"></i>Confirmed</span>
                                </td>
                                
                            </tr>  
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12352</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-08.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Kia Soul 2016</a>
                                            <span class="fs-13">Delivery</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-08.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/company-details')}}">Jay Beckman</a>
                                            <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $230
                                </td>
                                <td>
                                    26 Sep 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                        <i class="ti ti-point-filled me-1 "></i>Rejected</span>
                                </td>
                                
                            </tr>  
                            <tr>
                                <td>
                                    <a href="javascript:void(0);">#INV12353</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-09.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/customer-details')}}">Camaro</a>
                                            <span class="fs-13">Station Wagon</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/customer-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-09.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/customer-details')}}">Francis Harris</a>
                                            <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $230
                                </td>
                                <td>
                                    01 Sep 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center border-danger badge-sm">
                                        <i class="ti ti-point-filled me-1 "></i>Rejected</span>
                                </td>
                                
                            </tr>  
                            <tr>
                                <td>
                                    <a href="{{url('admin/invoice-details')}}">#INV12354</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/car-details')}}" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-10.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/car-details')}}">Toyota Camry</a>
                                            <span class="fs-13">Mini Van</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/company-details')}}" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-10.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="{{url('admin/company-details')}}">Renaldo Labarre</a>
                                            <span class="badge bg-violet-transparent rounded-pill">Company</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $300
                                </td>
                                <td>
                                    15 Aug 2024
                                </td>
                                <td>
                                    <span class="badge badge-soft-violet d-inline-flex align-items-center border-violet badge-sm">
                                        <i class="ti ti-point-filled me-1"></i>In Rental</span>
                                </td>
                                
                            </tr>  

                                                                                                                        
                        </tbody>
                    </table>
                </div>
                            
            </div>			
        
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="javascript:void(0);">Privacy Policy</a>
                <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
            </p>
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);" class="text-secondary">Dreams</a></p>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection