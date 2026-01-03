<?php $page = 'income-report'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4 pb-0">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Income vs Expenses</h4>
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
            <div class="row border-bottom mb-4">
                
                <!-- Total Earnings -->
                <div class="col-xl-4">
                    <div class="card flex-fill mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="border-end pe-4 me-4">
                                        <p class="mb-0">Total Income</p>
                                        <h6 class="fw-semibold">$48,900</h6>
                                    </div>
                                    <div>
                                        <p class="mb-0">Top Earning Car</p>
                                        <h6 class="fw-semibold">Tesla Model 3</h6>
                                    </div>
                                </div>
                                <span class="avatar avatar-md bg-orange rounded-circle">
                                    <i class="ti ti-currency-dollar fs-18"></i>
                                </span>
                            </div>
                            <div class="bg-gray-100 d-inline-flex justify-content-between align-items-center w-100 rounded p-2">
                                <p class="text-gray-500 mb-0 fs-12">Last Week</p>
                                <span class="text-success fs12"><i class="ti ti-arrow-wave-right-up me-1"></i>+12%</span>
                            </div>
                        </div>
                    </div>
                    <div class="card flex-fill mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="border-end pe-4 me-4">
                                        <p class="mb-0">Total Expenses</p>
                                        <h6 class="fw-semibold">$19,400</h6>
                                    </div>
                                    <div>
                                        <p class="mb-0">Highest Expense</p>
                                        <h6 class="fw-semibold">Vehicle Repairs</h6>
                                    </div>
                                </div>
                                <span class="avatar avatar-md bg-success rounded-circle">
                                    <i class="ti ti-stairs-down fs-18"></i>
                                </span>
                            </div>
                            <div class="bg-gray-100 d-inline-flex justify-content-between align-items-center w-100 rounded p-2">
                                <p class="text-gray-500 mb-0 fs-12">Last Week</p>
                                <span class="text-danger fs12"><i class="ti ti-arrow-wave-right-down me-1"></i>-5.78%</span>
                            </div>
                        </div>
                    </div>
                    <div class="card flex-fill mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="border-end pe-4 me-4">
                                        <p class="mb-0">Net Profit</p>
                                        <h6 class="fw-semibold">$29,500</h6>
                                    </div>
                                    <div>
                                        <p class="mb-0">Profit Margin</p>
                                        <h6 class="fw-semibold">54%</h6>
                                    </div>
                                </div>
                                <span class="avatar avatar-md bg-info rounded-circle">
                                    <i class="ti ti-stairs-up fs-18"></i>
                                </span>
                            </div>
                            <div class="bg-gray-100 d-inline-flex justify-content-between align-items-center w-100 rounded p-2">
                                <p class="text-gray-500 mb-0 fs-12">Last Week</p>
                                <span class="text-success fs12"><i class="ti ti-arrow-wave-right-up me-1"></i>+19.26%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Earnings -->

                <!-- Total Earnings -->
                <div class="col-xl-8 d-flex">
                    <div class="card flex-fill earnings-chart">
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                                <h5>Income & Expenses</h5>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center me-4">
                                        <span class="chart-color bg-primary me-1"></span>
                                        <p class="fs-13">Income</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="chart-color bg-primary-300 me-1"></span>
                                        <p class="fs-13">Expense</p>
                                    </div>
                                </div>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        <i class="ti ti-calendar me-1"></i> This Week
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                        </li>
                                    </ul>
                                </div> 
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="border rounded p-2 me-4">
                                    <p class="mb-0 text-gray-5">Income This Week</p>
                                    <h5>$96896 <span class="text-success fs-13 fw-semibold">+34%</span></h5>
                                </div>
                                <div class="border rounded p-2">
                                    <p class="mb-0 text-gray-5">Expenses This Week</p>
                                    <h5>$12489 <span class="text-danger fs-13 fw-semibold">-12%</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div id="income_expense_chart"></div>
                        </div>
                    </div>
                </div>
                <!-- /Total Earnings -->

                
                    
            </div>
                <!-- /Charts -->

                <!-- Table Header -->

                
            <!-- /Table Header -->

            <div class="coupons-tabs">
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                            href="#income" aria-selected="true">Income</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                            href="#expense" aria-selected="false">Expence</a>
                    </li>
                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="income" role="tabpanel">
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
                                        <i class="ti ti-filter me-1"></i> Filter <span class="count text-center ms-2 fs-12">0</span>
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
                                                    <span><i class="ti ti-grip-vertical me-1"></i>RENTAL FEES</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>LATE FEES</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>ADDITIONAL SERVICES</span>
                                                    <div class="form-check form-check-sm form-switch mb-0">
                                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                    <span><i class="ti ti-grip-vertical me-1"></i>TOTAL INCOME</span>
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
                        <div class="custom-datatable-filter table-responsive">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>INVOICE NO</th>
                                    <th>CAR</th>
                                    <th>RENTAL FEES</th>
                                    <th>LATE FEES</th>
                                    <th>ADDITIONAL SERVICES</th>
                                    <th>TOTAL INCOME</th>
                                    <th>DATE</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12345</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" class="rounded-3" alt=""></a>
                                            <div>
                                                <h6><a href="javascript:void(0);" class="fw-semibold fs-14">Ford Endeavour</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$3,800</p>
                                    </td>
                                    <td>
                                        $200
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$200</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$5,100</p>
                                    </td>
                                    <td>
                                        24 Jan 2025
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-success"></i>Paid</span>
                                    </td>
                                    
                                </tr>                                                                                                  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12346</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" class="rounded-3" alt=""></a>
                                            
                                                <a class="d-block fw-semibold" href="#">Ferrari 458 MM</a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$3,500</p>
                                    </td>
                                    <td>
                                        $250
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$150</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$4,500</p>
                                    </td>
                                    <td>
                                        19 Dec 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-info d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-info"></i>
                                            Pending
                                        </span>
                                    </td>
                                    
                                </tr>                                                                                          
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12347</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" class="rounded-3" alt=""></a>
                                            <a class="d-block fw-semibold" href="#">Ford Mustang </a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$4,600</p>
                                    </td>
                                    <td>
                                        $300
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$200</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$3,800</p>
                                    </td>
                                    <td>
                                        11 Dec 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12348</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" class="rounded-3" alt=""></a>
                                                <a class="d-block fw-semibold" href="#">Toyota Tacoma 4</a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$4,100</p>
                                    </td>
                                    <td>
                                        $200
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$200</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$4,700</p>
                                    </td>
                                    <td>
                                        29 Nov 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-violet d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-purple"></i>Overdue</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12349</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" class="rounded-3" alt=""></a>
                                                <a class="d-block fw-semibold" href="#">Chevrolet Truck	</a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$3,400</p>
                                    </td>
                                    <td>
                                        $250
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$150</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$5,300</p>
                                    </td>
                                    <td>
                                        03 Nov 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12350</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-06.jpg')}}" class="rounded-3" alt=""></a>
                                                <a class="d-block fw-semibold" href="#">Etios Carmen	</a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$4,300</p>
                                    </td>
                                    <td>
                                        $200
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$200</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$4,000</p>
                                    </td>
                                    <td>
                                        31 Oct 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-info d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-info"></i>
                                            Pending
                                        </span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12351</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" class="rounded-3" alt=""></a>
                                                <a class="d-block fw-semibold" href="#">Acura Sport </a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$4,900</p>
                                    </td>
                                    <td>
                                        $250
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$150</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$3,600</p>
                                    </td>
                                    <td>
                                        15 Oct 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12352</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-08.jpg')}}" class="rounded-3" alt=""></a>
                                                <a class="d-block fw-semibold" href="#">Kia Soul 2016</a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$3,600</p>
                                    </td>
                                    <td>
                                        $250
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$150</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$5,800</p>
                                    </td>
                                    <td>
                                        26 Sep 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 "></i>Failed</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12353</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-09.jpg')}}" class="rounded-3" alt=""></a>
                                                <a class="d-block fw-semibold" href="#">Camaro</a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$3,300</p>
                                    </td>
                                    <td>
                                        $200
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$100</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$4,200</p>
                                    </td>
                                    <td>
                                        01 Sep 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12354</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-10.jpg')}}" class="rounded-3" alt=""></a>
                                                <a class="d-block fw-semibold" href="#">Toyota Camry</a>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$5,300</p>
                                    </td>
                                    <td>
                                        $300
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$200</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$3,900</p>
                                    </td>
                                    <td>
                                        15 Aug 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  

                                                                                                                            
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <div class="tab-pane" id="expense" role="tabpanel">
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
                                        <i class="ti ti-filter me-1"></i> Filter <span class="count text-center ms-2 fs-12">0</span>
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
                                                <span><i class="ti ti-grip-vertical me-1"></i>CATEGORY</span>
                                                <div class="form-check form-check-sm form-switch mb-0">
                                                    <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                <span><i class="ti ti-grip-vertical me-1"></i>VEHICLE RELATED</span>
                                                <div class="form-check form-check-sm form-switch mb-0">
                                                    <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                <span><i class="ti ti-grip-vertical me-1"></i>OPERATIONAL</span>
                                                <div class="form-check form-check-sm form-switch mb-0">
                                                    <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                <span><i class="ti ti-grip-vertical me-1"></i>MISCELLANEOUS</span>
                                                <div class="form-check form-check-sm form-switch mb-0">
                                                    <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                                <span><i class="ti ti-grip-vertical me-1"></i>TOTAL EXPENSE</span>
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
                                    Category
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
                                            <input class="form-check-input m-0 me-2" type="checkbox">Vehicle Repairs
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Fuel & Maintenance
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Staff Salaries
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Office Rent
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Marketing
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Insurance
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Website Hosting
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Cleaning Supplies
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Car Loan Payment
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">Software Subscription
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
                        <div class="custom-datatable-filter table-responsive expensetable">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>INVOICE NO</th>
                                    <th>CATEGORY</th>
                                    <th>VEHICLE RELATED</th>
                                    <th>OPERATIONAL</th>
                                    <th>MISCELLANEOUS</th>
                                    <th>TOTAL EXPENSE</th>
                                    <th>DATE</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12345</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Vehicle Repairs</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$3,800</p>
                                    </td>
                                    <td>
                                        $200
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$200</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$5,100</p>
                                    </td>
                                    <td>
                                        24 Jan 2025
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-success"></i>Paid</span>
                                    </td>
                                    
                                </tr>                                                                                                  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12346</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Vehicle Repairs</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$1,500</p>
                                    </td>
                                    <td>
                                        $300
                                    </td>
                                    <td>
                                        <p class="text-gray-9">0</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$1,800</p>
                                    </td>
                                    <td>
                                        19 Dec 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-info d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-info"></i>
                                            Pending
                                        </span>
                                    </td>
                                    
                                </tr>                                                                                          
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12347</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Staff Salaries</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">0</p>
                                    </td>
                                    <td>
                                        $5,000
                                    </td>
                                    <td>
                                        <p class="text-gray-9">0</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$5,000</p>
                                    </td>
                                    <td>
                                        11 Dec 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12348</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Office Rent</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        $3,000
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$3,000</p>
                                    </td>
                                    <td>
                                        29 Nov 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-violet d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-purple"></i>Overdue</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12349</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Marketing</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        $0
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$1,200</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$1,200</p>
                                    </td>
                                    <td>
                                        03 Nov 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12350</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Insurance</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$1,800</p>
                                    </td>
                                    <td>
                                        $500
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$2,300</p>
                                    </td>
                                    <td>
                                        31 Oct 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-info d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 text-info"></i>
                                            Pending
                                        </span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12351</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Website Hosting</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        $0
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$600</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$600</p>
                                    </td>
                                    <td>
                                        15 Oct 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12352</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Cleaning Supplies</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$500</p>
                                    </td>
                                    <td>
                                        $200
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$700</p>
                                    </td>
                                    <td>
                                        26 Sep 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1 "></i>Failed</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12353</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Car Loan Payment</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$4,500</p>
                                    </td>
                                    <td>
                                        $0
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$4,500</p>
                                    </td>
                                    <td>
                                        01 Sep 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">#INV12354</a>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Software Subscription</p>
                                    </td>
                                    <td>
                                        <p class="fs-14 text-gray-9">$0</p>
                                    </td>
                                    <td>
                                        $0
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$900</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">$900</p>
                                    </td>
                                    <td>
                                        15 Aug 2024
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center border-violet badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Paid</span>
                                    </td>
                                    
                                </tr>  

                                                                                                                            
                            </tbody>
                        </table>
                    </div>
                    </div>
                    
                </div>
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