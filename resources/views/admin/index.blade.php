<?php $page = 'index'; ?>
@extends('layout.mainlayout_admin')
@section('content')
   
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content pb-0">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h4 class="mb-1">Dashboard</h4>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/index')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="input-icon-start position-relative topdatepicker mb-2">
                    <span class="input-icon-addon">
                        <i class="ti ti-calendar"></i>
                    </span>
                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="row">
            <div class="col-xl-8 d-flex flex-column">

                <!-- Welcome Wrap -->
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="row align-items-center row-gap-3">
                            <div class="col-sm-7">
                                <h4 class="mb-1">Welcome, Andrew </h4>
                                <p>400+ Budget Friendly Cars Available for the rents </p>
                                <div class="d-flex align-items-center flex-wrap gap-4 mb-3">
                                    <div>
                                        <p class="mb-1">Total No of Cars</p>
                                        <h3>564</h3>
                                    </div>
                                    <div>
                                        <p class="d-flex align-items-center mb-2"><span class="line-icon bg-violet me-2"></span><span class="fw-semibold text-gray-9 me-1">80</span>In Rental</p>
                                        <p class="d-flex align-items-center"><span class="line-icon bg-orange me-2"></span><span class="fw-semibold text-gray-9 me-1">96</span> Upcoming</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <a href="{{url('admin/reservations')}}" class="btn btn-primary d-flex align-items-center"><i class="ti ti-eye me-1"></i>Reservations</a>
                                    <a href="{{url('admin/add-car')}}" class="btn btn-dark d-flex align-items-center"><i class="ti ti-plus me-1"></i>Add New Car</a>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <img src="{{URL::asset('admin_assets/img/icons/car.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Welcome Wrap -->

                <div class="row">

                    <!-- Total Reservations -->
                    <div class="col-md-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body pb-1">
                                <div class="border-bottom mb-0 pb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm bg-secondary-100 text-secondary me-2">
                                            <i class="ti ti-calendar-time fs-14"></i>
                                        </span> 
                                        <p>Total Reservations</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <div class="py-2">
                                        <h5 class="mb-1">68</h5>
                                        <p><span class="text-success fw-semibold">+45%</span> Last Week</p>
                                    </div>
                                    <div id="reservation-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Reservations -->

                    <!-- Total Earnings -->
                    <div class="col-md-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body pb-1">
                                <div class="border-bottom mb-0 pb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm bg-orange-100 text-orange me-2">
                                            <i class="ti ti-moneybag fs-14"></i>
                                        </span> 
                                        <p>Total Earnings</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <div class="py-2">
                                        <h5 class="mb-1">$565545</h5>
                                        <p><span class="text-success fw-semibold">+22%</span> Last Week</p>
                                    </div>
                                    <div id="earning-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Earnings -->

                    <!-- Total Cars -->
                    <div class="col-md-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body pb-1">
                                <div class="border-bottom mb-0 pb-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm bg-violet-100 text-violet me-2">
                                            <i class="ti ti-car fs-14"></i>
                                        </span> 
                                        <p>Total Cars</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <div class="py-2">
                                        <h5 class="mb-1">658</h5>
                                        <p><span class="text-danger fw-semibold">-42%</span> Last Week</p>
                                    </div>
                                    <div id="car-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Cars -->

                </div>
            </div>

            <!-- Newly Added Cars -->
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h5>Newly Added Cars</h5>
                            <a href="{{url('admin/cars')}}" class="text-decoration-underline fw-medium">View All</a>
                        </div>
                        <div class="mb-2">
                            <img src="{{URL::asset('admin_assets/img/car/car.jpg')}}" alt="img" class="rounded w-100">
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <div>
                                <p class="fs-13 mb-1">Sedan</p>
                                <h6 class="fs-14 fw-semibold">1.5 Eco Sports ST-Line 115CV</h6>
                            </div>
                            <h6 class="fs-14 fw-semibold">$280 <span class="fw-normal text-gray-5">/day</span></h6>
                        </div>
                        <div class="row g-2 justify-content-center mb-3">
                            <div class="col-sm-4 col-6 d-flex">
                                <div class="bg-light border p-2 br-5 flex-fill text-center">
                                    <h6 class="fs-14 fw-semibold">Fuel Type</h6>
                                    <span class="fs-13">Petrol</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6 d-flex">
                                <div class="bg-light border p-2 br-5 flex-fill text-center">
                                    <h6 class="fs-14 fw-semibold">Passengers</h6>
                                    <span class="fs-13">03</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6 d-flex">
                                <div class="bg-light border p-2 br-5 flex-fill text-center">
                                    <h6 class="fs-14 fw-semibold">Driving Type</h6>
                                    <span class="fs-13">Self</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('admin/car-details')}}" class="btn btn-white d-flex align-items-center justify-content-center">View Details<i class="ti ti-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Newly Added Cars -->

        </div>

        <div class="row">					
            
            <!-- Live Tracking -->
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-3">
                            <h5 class="mb-1">Live Tracking</h5>
                            <div class="dropdown mb-1">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-map-pin me-1"></i>Washington
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Washington</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Chicago</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Houston</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Las Vegas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="map-wrap position-relative">
                            <div id="map" class="tracking-map w-100 z-1"></div>	
                            <div class="position-absolute top-0 start-0 w-100 z-2 p-3">										
                                <div class="input-icon-start position-relative">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-search"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search by Car Name">
                                </div>
                            </div>	
                        </div>				
                    </div>
                </div>
            </div>
            <!-- /Live Tracking -->

            <!-- Recent Reservations -->
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-1">
                            <h5>Recent Reservations</h5>
                            <a href="{{url('admin/reservations')}}" class="text-decoration-underline fw-medium">View All</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table custom-table1">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="d-flex align-items-center fs-13 text-default mb-1">3 Days<i class="ti ti-circle-filled text-primary fs-5 mx-1"></i>Self</p>
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Ford Endeavour</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="fs-14 fw-semibold">Newyork</h6>
                                            <span class="connect-line"></span>
                                            <h6 class="fs-14 fw-semibold">Las Vegas</h6>
                                        </div>
                                        <p class="fs-13 text-default">15 Jan 2025, 01:00 PM</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <h6 class="fs-14 fw-semibold">$280 <span class="fw-normal text-default">/day</span></h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt="img" class="rounded-circle">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="d-flex align-items-center fs-13 text-default mb-1">4 Days<i class="ti ti-circle-filled text-primary fs-5 mx-1"></i>Self</p>
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Ferrari 458 MM</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="fs-14 fw-semibold">Chicago</h6>
                                            <span class="connect-line"></span>
                                            <h6 class="fs-14 fw-semibold">Houston</h6>
                                        </div>
                                        <p class="fs-13 text-default">07 Feb 2025, 10:25 AM</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <h6 class="fs-14 fw-semibold">$225 <span class="fw-normal text-default">/day</span></h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-22.jpg')}}" alt="img" class="rounded-circle">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="d-flex align-items-center fs-13 text-default mb-1">5 Days<i class="ti ti-circle-filled text-primary fs-5 mx-1"></i>Self</p>
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Ford Mustang </a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="fs-14 fw-semibold">Los Angeles </h6>
                                            <span class="connect-line"></span>
                                            <h6 class="fs-14 fw-semibold">New York</h6>
                                        </div>
                                        <p class="fs-13 text-default">14 Feb 2025, 04:40 PM</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <h6 class="fs-14 fw-semibold">$259 <span class="fw-normal text-default">/day</span></h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-23.jpg')}}" alt="img" class="rounded-circle">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="d-flex align-items-center fs-13 text-default mb-1">6 Days<i class="ti ti-circle-filled text-primary fs-5 mx-1"></i>Self</p>
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Toyota Tacoma 4</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="fs-14 fw-semibold">Phoenix</h6>
                                            <span class="connect-line"></span>
                                            <h6 class="fs-14 fw-semibold">San Antonio</h6>
                                        </div>
                                        <p class="fs-13 text-default">08 Jan 2025, 09:25 AM</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <h6 class="fs-14 fw-semibold">$180 <span class="fw-normal text-default">/day</span></h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-23.jpg')}}" alt="img" class="rounded-circle">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="d-flex align-items-center fs-13 text-default mb-1">1 Week<i class="ti ti-circle-filled text-primary fs-5 mx-1"></i>Self</p>
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Chevrolet Truck</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <h6 class="fs-14 fw-semibold">Newyork </h6>
                                            <span class="connect-line"></span>
                                            <h6 class="fs-14 fw-semibold">Chicago</h6>
                                        </div>
                                        <p class="fs-13 text-default">17 Feb 2025, 11:45 AM</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <h6 class="fs-14 fw-semibold">$300 <span class="fw-normal text-default">/day</span></h6>
                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-06.jpg')}}" alt="img" class="rounded-circle">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /Recent Reservations -->

        </div>

        <div class="row">

            <!-- Customers -->
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-1">
                            <h5>Customers</h5>
                            <a href="{{url('admin/customers')}}" class="text-decoration-underline fw-medium">View All</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table custom-table1">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">Reuben Keen</a></h6>
                                                <span class="badge badge-sm bg-secondary-transparent rounded-pill">Client</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">No of Bookings</p>
                                        <h6 class="fs-14 fw-semibold">89</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">William Jones</a></h6>
                                                <span class="badge badge-sm bg-violet-transparent rounded-pill">Company</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">No of Bookings</p>
                                        <h6 class="fs-14 fw-semibold">45</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/customer/customer-04.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">Adam Bolden</a></h6>
                                                <span class="badge badge-sm bg-secondary-transparent rounded-pill">Client</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">No of Bookings</p>
                                        <h6 class="fs-14 fw-semibold">32</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/customer/customer-05.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">Harvey Jimenez</a></h6>
                                                <span class="badge badge-sm bg-violet-transparent rounded-pill">Company</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">No of Bookings</p>
                                        <h6 class="fs-14 fw-semibold">21</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/customer/customer-06.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">William Ward</a></h6>
                                                <span class="badge badge-sm bg-secondary-transparent rounded-pill">Client</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">No of Bookings</p>
                                        <h6 class="fs-14 fw-semibold">16</h6>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Customers -->

            <!-- Income & Expenses -->
            <div class="col-xl-8 d-flex">
                <div class="card flex-fill">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-3">
                            <h5 class="mb-1">Income & Expenses</h5>
                            <div class="chart-icon d-flex align-items-center gap-4 mb-1">
                                <p class="mb-0 d-flex align-items-center"><span class="chart-color bg-primary me-1"></span>Income</p>
                                <p class=" d-flex align-items-center mb-0"><span class="chart-color bg-primary-300 me-1"></span>Expense</p>
                            </div>
                            <div class="dropdown mb-1">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-4">
                            <div class="border br-5 p-2">
                                <p class="mb-1">Income This Week</p>
                                <h5>$96896<span class="fs-13 fw-semibold text-success ms-2">+34%</span></h5>
                            </div>
                            <div class="border br-5 p-2">
                                <p class="mb-1">Expenses This Week</p>
                                <h5>$12489<span class="fs-13 fw-semibold text-danger ms-2">+34%</span></h5>
                            </div>
                        </div>
                        <div id="sales-statistics"></div>
                    </div>
                </div>
            </div>
            <!-- /Income & Expenses -->

        </div>

        <div class="row">

            <!-- Maintenance -->
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-1">
                            <h5>Maintenance</h5>
                            <a href="{{url('admin/maintenance')}}" class="text-decoration-underline fw-medium">View All</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table custom-table1">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Ford Endeavour</a></h6>
                                                <p class="fs-13 text-default">Sedan</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">Odometer</p>
                                        <h6 class="fs-14 fw-semibold">8656 KM</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Ferrari 458 MM</a></h6>
                                                <p class="fs-13 text-default">SUV</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">Odometer</p>
                                        <h6 class="fs-14 fw-semibold">565 KM</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Ford Mustang </a></h6>
                                                <p class="fs-13 text-default">Sedan</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">Odometer</p>
                                        <h6 class="fs-14 fw-semibold">698 KM</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Toyota Tacoma 4</a></h6>
                                                <p class="fs-13 text-default">Minivans</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">Odometer</p>
                                        <h6 class="fs-14 fw-semibold">855 KM</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/car-details')}}" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" alt="img">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/car-details')}}">Chevrolet Truck</a></h6>
                                                <p class="fs-13 text-default">Hatchbacks</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <p class="fs-13 mb-1 text-default">Odometer</p>
                                        <h6 class="fs-14 fw-semibold">5889 KM</h6>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Maintenance -->

            <!-- Reservation Statistics -->
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-3">
                            <h5 class="mb-1">Reservation Statistics</h5>
                            <a href="{{url('admin/reservations')}}" class="text-decoration-underline fw-medium mb-1">View All</a>
                        </div>
                        <div id="statistics_chart"></div>
                    </div>
                </div>
            </div>
            <!-- /Reservation Statistics -->

            <!-- Drivers -->
            <div class="col-xl-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-1">
                            <h5>Drivers</h5>
                            <a href="{{url('admin/drivers')}}" class="text-decoration-underline fw-medium">View All</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table custom-table1">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/drivers/driver-01.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="javascript:void(0);">William Jones</a></h6>
                                                <p class="fs-13 text-default">No of Raids : 90</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge badge-md bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>In Ride</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/drivers/driver-02.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="javascript:void(0);">Leonard Jandreau</a></h6>
                                                <p class="fs-13 text-default">No of Raids : 64</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge badge-md bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>In Ride</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/drivers/driver-03.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="javascript:void(0);">Adam Bolden</a></h6>
                                                <p class="fs-13 text-default">No of Raids : 36</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge badge-md bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>In Ride</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/drivers/driver-04.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="javascript:void(0);">Harvey Jimenez</a></h6>
                                                <p class="fs-13 text-default">No of Raids : 24</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge badge-md bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>In Ride</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/drivers/driver-05.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="fs-14 fw-semibold mb-1"><a href="javascript:void(0);">William Jones</a></h6>
                                                <p class="fs-13 text-default">No of Raids : 40</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge badge-md bg-danger-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>Not Booked</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Drivers -->

        </div>

        <div class="row">

            <!-- Recent Invoices -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-3">
                            <h5 class="mb-1">Recent Invoices</h5>
                            <a href="{{url('admin/invoices')}}" class="text-decoration-underline fw-medium mb-1">View All</a>
                        </div>
                        <div class="custom-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>INVOICE NO</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>CREATED DATE</th>
                                        <th>DUE DATE</th>
                                        <th>INVOICE AMOUNT</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#12345</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-20.jpg')}}" class="rounded-circle" alt="">
                                                </a>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">Andrew Simons </a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>andrew@example.com</td>
                                        <td>24 Jan 2025</td>
                                        <td>24 Jan 2025</td>
                                        <td>$120.00</td>												
                                        <td>
                                            <span class="badge badge-md bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>Paid</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#12346</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-21.jpg')}}" class="rounded-circle" alt="">
                                                </a>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">David Steiger</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>david@example.com</td>
                                        <td>19 Dec 2024</td>
                                        <td>19 Dec 2024</td>
                                        <td>$85.00</td>												
                                        <td>
                                            <span class="badge badge-md bg-info-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#12347</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-12.jpg')}}" class="rounded-circle" alt="">
                                                </a>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">Virginia Phu</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>phu@example.com</td>
                                        <td>11 Dec 2024</td>
                                        <td>11 Dec 2024</td>
                                        <td>$250.00</td>												
                                        <td>
                                            <span class="badge badge-md bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>Paid</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#12348</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-03.jpg')}}" class="rounded-circle" alt="">
                                                </a>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">Walter Hartmann</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>walter@example.com</td>
                                        <td>29 Nov 2024</td>
                                        <td>229 Nov 2024</td>
                                        <td>$175.00</td>												
                                        <td>
                                            <span class="badge badge-md bg-purple-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>Overdue</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('admin/invoice-details')}}" class="fs-12 fw-medium">#12349</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('admin/customer-details')}}" class="avatar flex-shrink-0">
                                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-07.jpg')}}" class="rounded-circle" alt="">
                                                </a>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="fs-14 fw-semibold mb-1"><a href="{{url('admin/customer-details')}}">Andrea Jermaine</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>jermaine@example.com</td>
                                        <td>03 Nov 2024</td>
                                        <td>03 Nov 2024</td>
                                        <td>$200.00</td>												
                                        <td>
                                            <span class="badge badge-md bg-success-transparent d-inline-flex align-items-center"><i class="ti ti-circle-filled fs-6 me-2"></i>Paid</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Recent Invoices -->

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