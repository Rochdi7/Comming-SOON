<?php $page = 'reservation-details'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="mb-3">
                        <a href="{{url('admin/reservations')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-narrow-left me-2"></i>Reservation</a>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Reservation Details</h5>
                            <span class="badge bg-orange-transparent">Requested</span>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-solid custom-nav-tabs mb-3" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#solid-tab1" data-bs-toggle="tab" aria-selected="true" role="tab">Reservation Info</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#solid-tab2" data-bs-toggle="tab" aria-selected="false" role="tab">History</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="solid-tab1" role="tabpanel">
                                    <div class="border rounded p-3 bg-light mb-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar flex-shrink-0 me-2">
                                                        <img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-1">Sedan</p>
                                                        <h6 class="fs-14">Acura Sport </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-end">
                                                    <p class="mb-1">Price</p>
                                                    <h6 class="fs-14">$60<span class="text-gray-5 fw-normal">/day</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom mb-3 pb-3">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium fs-14">Start Date</h6>
                                            <p>10 Feb 2025, 12:00 PM</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium fs-14">End Date</h6>
                                            <p>11 Feb 2025, 01:00 PM</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium fs-14">Rental Period</h6>
                                            <p>2 Days</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium fs-14">Driving Type</h6>
                                            <p>Self</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light p-3 rounded flex-fill mb-3">
                                                        <h6 class="mb-1 fs-14 fw-medium">Pickup Location</h6>
                                                        <p>2nd Avenue, Lasvegas</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-light p-3 rounded mb-3">
                                                    <h6 class="mb-1 fs-14 fw-medium">Return Location</h6>
                                                    <p>4th Street, Newyork</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="text-decoration-underline text-violet">Edit</a>
                                        </div>
                                    </div>
                                    <div class="border-bottom mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <h6 class="d-inline-flex align-items-center fs-14 fw-medium ">Customer<a href="javascript:void(0);" class="ms-2"><i class="ti ti-edit"></i></a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <span class="avatar avatar-rounded flex-shrink-0 me-2">
                                                            <img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt="">
                                                        </span>
                                                        <div>
                                                            <h6 class="fs-14 fw-medium mb-1">Andrew Simons</h6>
                                                            <p>+1 56598 98956</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <h6 class="d-inline-flex align-items-center fs-14 fw-medium ">Driver<a href="javascript:void(0);" class="ms-2"><i class="ti ti-edit"></i></a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <span class="avatar avatar-rounded flex-shrink-0 me-2">
                                                            <img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt="">
                                                        </span>
                                                        <div>
                                                            <h6 class="fs-14 fw-medium mb-1">Reuben Keen</h6>
                                                            <p>+1 56598 98956</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom mb-3 pb-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium fs-14">Pricing of Car</h6>
                                            <p>$120</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium d-flex align-items-center fs-14">3 Extra Services 
                                                <a href="javascript:void(0);" class="me-2 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Navigation, USB Charger, Dash Cam"><i class="ti ti-info-circle-filled"></i></a>
                                                <a href="javascript:void(0);"><i class="ti ti-edit"></i></a>
                                            </h6>
                                            <p>$30</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium d-flex align-items-center fs-14">Security Deposit
                                                <a href="javascript:void(0);" class="ms-2"><i class="ti ti-edit"></i></a>
                                            </h6>
                                            <p>$150</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="fw-medium d-flex align-items-center fs-14">Driver Price
                                                <a href="javascript:void(0);" class="ms-2"><i class="ti ti-edit"></i></a>
                                            </h6>
                                            <p>$180</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>Total Price</h6>
                                        <h6>$300</h6>
                                    </div>
                                </div>
                                <div class="tab-pane" id="solid-tab2" role="tabpanel">
                                    <div class="border rounded p-3 bg-light mb-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar flex-shrink-0 me-2">
                                                        <img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-1">Sedan</p>
                                                        <h6 class="fs-14">Acura Sport </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-end">
                                                    <p class="mb-1">Price</p>
                                                    <h6 class="fs-14">$60<span class="text-gray-5 fw-normal">/day</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-3">Histrory</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2">23</h5>
                                                <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 mb-1">Reservation created</h6>
                                                <span class="fs-13">01:30 PM</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2">23</h5>
                                                <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 mb-1">Updated: status changed to confirmed</h6>
                                                <span class="fs-13">02:45 PM</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2">24</h5>
                                                <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 mb-1">Deposit Amount Done</h6>
                                                <span class="fs-13">04:25 PM</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2">25</h5>
                                                <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 mb-1">Check in completed</h6>
                                                <span class="fs-13">04:35 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="d-flex align-items-center justify-content-center flex-wrap row-gap-3">
                        <a href="{{url('admin/invoice-details')}}" class="btn btn-primary me-3"><i class="ti ti-files me-1"></i>View Invoice</a>
                        <a href="javascript:void(0);" class="btn btn-dark me-3"><i class="ti ti-calendar me-1"></i>Reschedule</a>
                        <a href="javascript:void(0);" class="btn btn-danger"><i class="ti ti-x me-1"></i>Cancel Booking</a>
                    </div>
                </div>
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