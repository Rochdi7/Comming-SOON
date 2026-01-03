<?php $page = 'car-details'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0">
            <div class="mb-3">
                <a href="{{url('admin/cars')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-left me-1"></i>Cars</a>
            </div>
            <div class="mb-4 pb-4 border-bottom">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div>							
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-2">
                            <h4 class="me-2">Car ID : #RT5658</h4>
                            <span class="badge badge-md badge-success-transparent d-inline-flex align-items-center badge-sm">
                                <i class="ti ti-point-filled me-1"></i>Active
                            </span>
                            <span class="badge badge-md bg-secondary-transparent">Rent in Progress</span>
                        </div>
                        <p>Created / Updated at : 25 Jan 2025, 06:45 AM</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <a href="{{url('admin/edit-car')}}" class="btn btn-dark btn-md d-flex align-items-center"><i class="ti ti-edit me-1"></i>Edit Car</a>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Car Details -->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom mb-3 pb-3">
                                <h5>Car Details</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-lg me-3">
                                        <img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt="img">
                                    </span>
                                    <div>
                                        <h6>Acura Sport </h6>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">Sedan</p>
                                            <p class="mb-0 d-flex align-items-center"><i class="ti ti-circle-filled text-secondary fs-5 me-2"></i>$60/day</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-wrap gap-3">
                                    <span class="badge badge-md bg-info-transparent">VIN : ABC123456</span>
                                    <span class="badge badge-md bg-orange-transparent">Plate Number : ABC 1234</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header py-0">
                            <ul class="nav nav-tabs nav-tabs-bottom tab-dark">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#car-info" data-bs-toggle="tab">Car Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-price" data-bs-toggle="tab">Pricing & Tarrif</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-service" data-bs-toggle="tab">Extra Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-gallery" data-bs-toggle="tab">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-damages" data-bs-toggle="tab">Damages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">

                                <!-- Car Info -->
                                <div class="tab-pane fade active show" id="car-info">
                                    <div class="border-bottom mb-3 pb-3">
                                        <div class="row">
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Color</h6>
                                                    <p class="d-inline-flex align-items-center fs-13"><i class="ti ti-square-filled text-warning me-1"></i>Yellow</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Brand</h6>
                                                    <p class="fs-13">Ford</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Model</h6>
                                                    <p class="fs-13">Endeavour</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Type</h6>
                                                    <p class="fs-13">Sedan</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Year</h6>
                                                    <p class="fs-13">2001</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Passengers</h6>
                                                    <p class="fs-13">04</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">VIN Number</h6>
                                                    <p class="fs-13">ABC123456</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Plate Number</h6>
                                                    <p class="fs-13">ABC 1234</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Mileage</h6>
                                                    <p class="fs-13">45 km</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Transmission</h6>
                                                    <p class="fs-13">Auto</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">No of Seats</h6>
                                                    <p class="fs-13">04</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">No of Air Bags</h6>
                                                    <p class="fs-13">06</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="{{url('admin/edit-car')}}" class="link-violet text-decoration-underline fw-medium">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom mb-3 pb-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                            <h6>Documents</h6>
                                            <a href="{{url('admin/edit-car')}}" class="link-default"><i class="ti ti-edit"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-4">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2">
                                                    <img src="{{URL::asset('admin_assets/img/icons/pdf-icon.svg')}}" alt="img">
                                                </span>
                                                <div>
                                                    <h6 class="fs-14 fw-medium">Insurance_car3546</h6>
                                                    <p class="fs-13">24.45 KB</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="me-2">
                                                    <img src="{{URL::asset('admin_assets/img/icons/pdf-icon.svg')}}" alt="img">
                                                </span>
                                                <div>
                                                    <h6 class="fs-14 fw-medium">Reg_car3546</h6>
                                                    <p class="fs-13">24.45 KB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>								
                                    <div>
                                        <h6 class="mb-3">Features & Amenities</h6>
                                        <div class="row gy-2">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="d-flex flex-column gap-2">
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Push-button Start</p>
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Panoramic Sunroof</p>
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Parking Sensors</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="d-flex flex-column gap-2">
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Bluetooth</p>
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Forward Collision Warning</p>
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Adaptive Cruise Control</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="d-flex flex-column gap-2">
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Rearview Camera</p>
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>USB</p>
                                                    <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Push Back Seat</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Info -->

                                <!-- Car Price -->
                                <div class="tab-pane fade" id="car-price">
                                    <div class="border-bottom mb-3 pb-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                            <h6>Pricing</h6>
                                            <a href="javascript:void(0);" class="link-default"><i class="ti ti-edit"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Per Day</h6>
                                                    <p class="fs-13">$200</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Weekly</h6>
                                                    <p class="fs-13">$400</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Monthly</h6>
                                                    <p class="fs-13">$400</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Yearly</h6>
                                                    <p class="fs-13">$6000</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Base Kilometers</h6>
                                                    <p class="fs-13">45</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fs-14 fw-semibold mb-1">Extra Price Per KM</h6>
                                                    <p class="fs-13">$21</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                            <h6>Tarrif</h6>
                                            <a href="{{url('admin/edit-car')}}" class="link-default"><i class="ti ti-edit"></i></a>
                                        </div>
                                        <div class="d-flex flex-column gap-2">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap bg-light gap-3 br-5 p-20">
                                                <div>
                                                    <h6 class="fs-14 fw-semibold mb-1">4 to 5 Days</h6>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Price : <span class="text-gray-9">$50</span></p>
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Base Kilometers : <span class="text-gray-9">25</span></p>
                                                        <p class="fs-13 fw-medium mb-0">Kilometers Extra Price : <span class="text-gray-9">$200</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap bg-light gap-3 br-5 p-20">
                                                <div>
                                                    <h6 class="fs-14 fw-semibold mb-1">5 to 8 Days</h6>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Price : <span class="text-gray-9">$80</span></p>
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Base Kilometers : <span class="text-gray-9">15</span></p>
                                                        <p class="fs-13 fw-medium mb-0">Kilometers Extra Price : <span class="text-gray-9">$150</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap bg-light gap-3 br-5 p-20">
                                                <div>
                                                    <h6 class="fs-14 fw-semibold mb-1">3 to 8 Days</h6>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Price : <span class="text-gray-9">$56</span></p>
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Base Kilometers : <span class="text-gray-9">54</span></p>
                                                        <p class="fs-13 fw-medium mb-0">Kilometers Extra Price : <span class="text-gray-9">$120</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap bg-light gap-3 br-5 p-20">
                                                <div>
                                                    <h6 class="fs-14 fw-semibold mb-1">4 to 8 Days</h6>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Price : <span class="text-gray-9">$50</span></p>
                                                        <p class="fs-13 fw-medium border-end pe-2 mb-0">Base Kilometers : <span class="text-gray-9">25</span></p>
                                                        <p class="fs-13 fw-medium mb-0">Kilometers Extra Price : <span class="text-gray-9">$200</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Price -->

                                <!-- Extra Services -->
                                <div class="tab-pane fade" id="car-service">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                        <h6>Extra Services</h6>
                                        <a href="{{url('admin/edit-car')}}" class="link-default"><i class="ti ti-edit"></i></a>
                                    </div>
                                    <div class="row gy-2">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex flex-column gap-2">
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Navigation</p>
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Fuel Pre-Purchase</p>
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>USB Charger</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex flex-column gap-2">
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Wi-Fi Hotspot</p>
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Roadside Assistance</p>
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Express Check-in/out</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex flex-column gap-2">
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Child Safety Seats</p>
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Satellite Radio</p>
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-square-check-filled text-success me-2"></i>Toll Pass</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Extra Services -->

                                <!-- Gallery -->
                                <div class="tab-pane fade" id="car-gallery">
                                    <div class="border-bottom mb-3 pb-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                            <h6>Gallery</h6>
                                            <a href="{{url('admin/edit-car')}}" class="link-default"><i class="ti ti-edit"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <div class="gallery-wrap">
                                                <a href="{{URL::asset('admin_assets/img/car/car-lg-02.jpg')}}" data-fancybox="gallery">
                                                    <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="gallery-wrap">
                                                <a href="{{URL::asset('admin_assets/img/car/car-lg-03.jpg')}}" data-fancybox="gallery">
                                                    <img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="gallery-wrap">
                                                <a href="{{URL::asset('admin_assets/img/car/car-lg-04.jpg')}}" data-fancybox="gallery">
                                                    <img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                            <h6>Video</h6>
                                            <a href="{{url('admin/edit-car')}}" class="link-default"><i class="ti ti-edit"></i></a>
                                        </div>
                                        <div class="uploaded-video">
                                            <img src="{{URL::asset('admin_assets/img/car/car-lg-01.jpg')}}" alt="img">
                                            <a href="https://www.youtube.com/embed/1trvO6dqQUI" data-fancybox="" class="play-icon">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Gallery -->

                                <!-- Damages -->
                                <div class="tab-pane fade" id="car-damages">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                        <h6>Damages</h6>
                                        <a href="{{url('admin/edit-car')}}" class="link-default"><i class="ti ti-edit"></i></a>
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="bg-white p-20 br-5 border">
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-xxl-8 col-md-7">
                                                    <div class="d-flex align-items-center gap-2 mb-1">
                                                        <h6 class="fs-14 fw-medium">Scratch</h6>
                                                        <span class="badge bg-pink-transparent badge-sm">Interior</span>
                                                    </div>
                                                    <p class="fs-13">Minor surface marks, often from keys, branches, or road debris.</p>
                                                </div>
                                                <div class="col-xxl-4 col-md-5">
                                                    <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                        <p class="mb-0">Added on : 15 Jan 2025</p>
                                                    </div>
                                                </div>
                                            </div>															
                                        </div>
                                        <div class="bg-white p-20 br-5 border">
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-xxl-8 col-md-7">
                                                    <div class="d-flex align-items-center gap-2 mb-1">
                                                        <h6 class="fs-14 fw-medium">Dashboard Damage</h6>
                                                        <span class="badge bg-secondary-transparent badge-sm">Exterior</span>
                                                    </div>
                                                    <p class="fs-13">Cracks, scratches, or faded surfaces due to heat exposure.</p>
                                                </div>
                                                <div class="col-xxl-4 col-md-5">
                                                    <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                        <p class="mb-0">Added on : 15 Jan 2025</p>
                                                    </div>
                                                </div>
                                            </div>															
                                        </div>
                                        <div class="bg-white p-20 br-5 border">
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-xxl-8 col-md-7">
                                                    <div class="d-flex align-items-center gap-2 mb-1">
                                                        <h6 class="fs-14 fw-medium">Torn/Dirty Upholstery</h6>
                                                        <span class="badge bg-pink-transparent badge-sm">Interior</span>
                                                    </div>
                                                    <p class="fs-13">Seats, door panels, or carpets with stains, rips, or burns.</p>
                                                </div>
                                                <div class="col-xxl-4 col-md-5">
                                                    <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                        <p class="mb-0">Added on : 15 Jan 2025</p>
                                                    </div>
                                                </div>
                                            </div>															
                                        </div>
                                        <div class="bg-white p-20 br-5 border">
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-xxl-8 col-md-7">
                                                    <div class="d-flex align-items-center gap-2 mb-1">
                                                        <h6 class="fs-14 fw-medium">Electrical Issues</h6>
                                                        <span class="badge bg-pink-transparent badge-sm">Interior</span>
                                                    </div>
                                                    <p class="fs-13">Non-functional windows, AC, or infotainment system damage.</p>
                                                </div>
                                                <div class="col-xxl-4 col-md-5">
                                                    <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                        <p class="mb-0">Added on : 15 Jan 2025</p>
                                                    </div>
                                                </div>
                                            </div>															
                                        </div>
                                    </div>
                                </div>
                                <!-- /Damages -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Car Details -->

                <!-- Rent Summary -->
                <div class="col-xl-4 theiaStickySidebar">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="border-bottom mb-3 pb-3">
                                <h5>Summary</h5>
                            </div>
                            <div class="summary-wrap">
                                <div class="d-flex align-items-center">
                                    <div class="border br-5 text-center flex-shrink-0 p-1 me-3">
                                        <h6 class="fw-semibold mb-1">23</h6>
                                        <span class="d-inline-block fw-medium fs-12 bg-light p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">Active</h6>
                                        <p class="fs-13">Car status Changes as <span class="text-gray-9 fw-medium">Active for Booking</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border br-5 text-center flex-shrink-0 p-1 me-3">
                                        <h6 class="fw-semibold mb-1">22</h6>
                                        <span class="d-inline-block fw-medium fs-12 bg-light p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">Damage</h6>
                                        <p class="fs-13">Damage is added on the <span class="text-gray-9 fw-medium">Exterior</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border br-5 text-center flex-shrink-0 p-1 me-3">
                                        <h6 class="fw-semibold mb-1">21</h6>
                                        <span class="d-inline-block fw-medium fs-12 bg-light p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">Maintainance</h6>
                                        <p class="fs-13">Car status Changes as <span class="text-gray-9 fw-medium">Maintainance</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border br-5 text-center flex-shrink-0 p-1 me-3">
                                        <h6 class="fw-semibold mb-1">20</h6>
                                        <span class="d-inline-block fw-medium fs-12 bg-light p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">Car Return</h6>
                                        <p class="fs-13">Car has been <span class="text-gray-9 fw-medium">Returned</span> by Customer</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border br-5 text-center flex-shrink-0 p-1 me-3">
                                        <h6 class="fw-semibold mb-1">19</h6>
                                        <span class="d-inline-block fw-medium fs-12 bg-light p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">Booking</h6>
                                        <p class="fs-13">Car is Booked By <span class="text-gray-9 fw-medium">James Anderson</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border br-5 text-center flex-shrink-0 p-1 me-3">
                                        <h6 class="fw-semibold mb-1">11</h6>
                                        <span class="d-inline-block fw-medium fs-12 bg-light p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">User</h6>
                                        <p class="fs-13">User logged in & <span class="text-gray-9 fw-medium">Details Updated</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border br-5 text-center flex-shrink-0 p-1 me-3">
                                        <h6 class="fw-semibold mb-1">09</h6>
                                        <span class="d-inline-block fw-medium fs-12 bg-light p-1 d-inline-block rounded-1 text-gray-9">Feb, 2025</span>
                                    </div>
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">Car Added</h6>
                                        <p class="fs-13">Car has been added by <span class="text-gray-9 fw-medium">Admin</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Rent Summary -->

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