<?php $page = 'company-details'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <a href="{{url('admin/customers-companies')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-left me-1"></i>Company</a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom mb-3 pb-3">
                                <h5>Basic Details</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-lg me-3">
                                    <img src="{{URL::asset('admin_assets/img/companies/company-11.png')}}" class="rounded-2" alt="img">
                                </span>
                                <div>
                                    <h6 class="mb-1">Company Solutions</h6>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2">Added On : 15 May 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header py-0">
                            <ul class="nav nav-tabs nav-tabs-bottom tab-dark">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#car-info" data-bs-toggle="tab">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-price" data-bs-toggle="tab">Recent Rents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-service" data-bs-toggle="tab">History</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">

                                <!-- Overview -->
                                <div class="tab-pane fade active show" id="car-info">
                                    <div class="border-bottom mb-3 pb-3">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Contact Person</h6>
                                                    <p class="fs-13">Andrew Simons</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Website</h6>
                                                    <p class="fs-13">www.example.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Language</h6>
                                                    <p class="fs-13">English, French</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Phone Number</h6>
                                                    <p class="fs-13">+1 45565 21212</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Email</h6>
                                                    <p class="fs-13">vrty849@example.com</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Address</h6>
                                                    <p class="fs-13">25, West side Street, Las Vegas, California, USA, 56545</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Notes</h6>
                                                    <p class="fs-13">Please inspect the vehicle before returning to avoid any additional charges for damages.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="#" class="link-violet text-decoration-underline fw-medium" data-bs-toggle="modal" data-bs-target="#edit_company">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                            <h6>Documents</h6>
                                            <a href="#" class="link-default"><i class="ti ti-edit"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-4">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2">
                                                    <img src="{{URL::asset('admin_assets/img/icons/pdf-icon.svg')}}" alt="img">
                                                </span>
                                                <div>
                                                    <h6 class="fs-14 fw-medium">company_registration.pdf</h6>
                                                    <p class="fs-13">24.45 KB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Overview -->

                                <!-- Recent Rents -->
                                <div class="tab-pane fade" id="car-price">
                                    <div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row gy-3 align-items-center">
                                                    <div class="col-lg-9">
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-lg-4">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar flex-shrink-0 me-2">
                                                                        <img src="{{URL::asset('admin_assets/img/car/car-06.jpg')}}" alt="">
                                                                    </span>
                                                                    <div>
                                                                        <a href="{{url('admin/car-details')}}" class="text-info">#BR3466</a>
                                                                        <h6 class="fs-14">Etios Carmen</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Booked on</h6>
                                                                    <p>15 Jan 2025, 05:30 PM</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Amount</h6>
                                                                    <p>$145</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="d-flex align-items-center icon-list justify-content-end">
                                                            <a href="{{url('admin/invoice-details')}}" class="edit-icon me-2"><i class="ti ti-eye"></i></a>
                                                            <a href="#" class="edit-icon"><i class="ti ti-download"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row gy-3 align-items-center">
                                                    <div class="col-lg-9">
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-lg-4">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar flex-shrink-0 me-2">
                                                                        <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt="">
                                                                    </span>
                                                                    <div>
                                                                        <a href="{{url('admin/car-details')}}" class="text-info">#BR3467</a>
                                                                        <h6 class="fs-14">Ferrari 458 MM</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Booked on</h6>
                                                                    <p>25 Jan 2025, 02:00 PM</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Amount</h6>
                                                                    <p>$800</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="d-flex align-items-center icon-list justify-content-end">
                                                            <a href="{{url('admin/invoice-details')}}" class="edit-icon me-2"><i class="ti ti-eye"></i></a>
                                                            <a href="#" class="edit-icon"><i class="ti ti-download"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row gy-3 align-items-center">
                                                    <div class="col-lg-9">
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-lg-4">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar flex-shrink-0 me-2">
                                                                        <img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" alt="">
                                                                    </span>
                                                                    <div>
                                                                        <a href="{{url('admin/car-details')}}" class="text-info">#BR3468</a>
                                                                        <h6 class="fs-14">Toyota Tacoma 4</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Booked on</h6>
                                                                    <p>31 Jan 2025, 04:00 PM</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Amount</h6>
                                                                    <p>$145</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="d-flex align-items-center icon-list justify-content-end">
                                                            <a href="{{url('admin/invoice-details')}}" class="edit-icon me-2"><i class="ti ti-eye"></i></a>
                                                            <a href="#" class="edit-icon"><i class="ti ti-download"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row gy-3 align-items-center">
                                                    <div class="col-lg-9">
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-lg-4">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar flex-shrink-0 me-2">
                                                                        <img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" alt="">
                                                                    </span>
                                                                    <div>
                                                                        <a href="{{url('admin/car-details')}}" class="text-info">#BR3469</a>
                                                                        <h6 class="fs-14">Chevrolet Truck</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Booked on</h6>
                                                                    <p>25 Dec 2024, 06:00 PM</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Amount</h6>
                                                                    <p>$145</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="d-flex align-items-center icon-list justify-content-end">
                                                            <a href="{{url('admin/invoice-details')}}" class="edit-icon me-2"><i class="ti ti-eye"></i></a>
                                                            <a href="#" class="edit-icon"><i class="ti ti-download"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="row gy-3 align-items-center">
                                                    <div class="col-lg-9">
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-lg-4">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar flex-shrink-0 me-2">
                                                                        <img src="{{URL::asset('admin_assets/img/car/car-10.jpg')}}" alt="">
                                                                    </span>
                                                                    <div>
                                                                        <a href="{{url('admin/car-details')}}" class="text-info">#BR3470</a>
                                                                        <h6 class="fs-14">Toyota Camry</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Booked on</h6>
                                                                    <p>15 Jan 2025, 05:30 PM</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Amount</h6>
                                                                    <p>$145</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="d-flex align-items-center icon-list justify-content-end">
                                                            <a href="{{url('admin/invoice-details')}}" class="edit-icon me-2"><i class="ti ti-eye"></i></a>
                                                            <a href="#" class="edit-icon"><i class="ti ti-download"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Recent Rents -->

                                <!-- History -->
                                <div class="tab-pane fade" id="car-service">
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2 pb-2 border-bottom">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">24</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Return Day</h6>
                                                <span class="fs-13">12:45 PM</span>
                                            </div>
                                            <span class="fs-13">Return of keys and completion of the return process.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2 pb-2 border-bottom">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">24</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Return Day</h6>
                                                <span class="fs-13">12:30 PM</span>
                                            </div>
                                            <span class="fs-13">Fuel check and final inspection.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2 pb-2 border-bottom">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">24</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Return Day</h6>
                                                <span class="fs-13">12:15 PM</span>
                                            </div>
                                            <span class="fs-13">Vehicle inspection for any damages or missing items.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2 pb-2 border-bottom">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">24</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Return Day</h6>
                                                <span class="fs-13">12:00 PM</span>
                                            </div>
                                            <span class="fs-13">Customer arrives at Cityville Airport, 567 Airport Rd, Cityville for car return.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2 pb-2 border-bottom">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">23</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Pick-Up Day</h6>
                                                <span class="fs-13">9:45 AM</span>
                                            </div>
                                            <span class="fs-13">Departure from rental location.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2 pb-2 border-bottom">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">23</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Pick-Up Day</h6>
                                                <span class="fs-13">9:30 AM</span>
                                            </div>
                                            <span class="fs-13">Customer receives the keys for a Toyota Corolla, completes payment for the rental.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-2 pb-2 border-bottom">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">23</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Pick-Up Day</h6>
                                                <span class="fs-13">9:15 AM</span>
                                            </div>
                                            <span class="fs-13">Vehicle inspection and contract signing.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3">
                                        <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                            <h5 class="mb-2">23</h5>
                                            <span class="fw-medium fs-12 bg-primary-transparent p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-semibold">Pick-Up Day</h6>
                                                <span class="fs-13">9:00 AM</span>
                                            </div>
                                            <span class="fs-13">Customer arrives at Downtown Rental Center, 123 Main St, Cityville.</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /History -->

                            </div>
                        </div>
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