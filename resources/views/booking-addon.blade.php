<?php $page = 'booking-addon'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Checkout
        @endslot
        @slot('li_1')
            Checkout
        @endslot
    @endcomponent
    <div class="booking-new-module">
        <div class="container">
            <div class="booking-wizard-head">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>Reserve Your Car</h4>
                            <p>Complete the following steps</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active activated">
                                    <span><img src="{{URL::asset('build/img/icons/booking-head-icon-01.svg')}}" alt="Booking Icon"></span>
                                    <h6>Location & Time</h6>
                                </li>
                                <li class="active">
                                    <span><img src="{{URL::asset('build/img/icons/booking-head-icon-02.svg')}}" alt="Booking Icon"></span>
                                    <h6>Extra Services</h6>
                                </li>
                                <li>
                                    <span><img src="{{URL::asset('build/img/icons/booking-head-icon-03.svg')}}" alt="Booking Icon"></span>
                                    <h6>Detail</h6>
                                </li>
                                <li>
                                    <span><img src="{{URL::asset('build/img/icons/booking-head-icon-04.svg')}}" alt="Booking Icon"></span>
                                    <h6>Checkout</h6>
                                </li>
                                <li>
                                    <span><img src="{{URL::asset('build/img/icons/booking-head-icon-05.svg')}}" alt="Booking Icon"></span>
                                    <h6>Booking Confirmed</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-detail-info">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="booking-information-main">
                            <form action="{{url('booking-detail')}}">
                                <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>Extra Services</h5>
                                        </div>
                                        <h6>Total : 15 Extra Services</h6>
                                    </div>
                                    <div class="booking-info-body">
                                        <ul class="adons-lists">
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-map-pin"></i></span>
                                                        <div class="adon-name">
                                                            <h6>GPS Navigation Systems</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>More information 
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>							
                                                    </div>
                                                    <span class="adon-price">$25</span>
                                                    <a href="#" class="btn btn-secondary remove-adon-btn"><i class="bx bx-minus-circle me-2"></i>Remove</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Provide GPS navigation devices as add-ons for customers who 
                                                        need assistance with directions and navigation during their rental period.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-wifi"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Wi-Fi Hotspot</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>
                                                                More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>							
                                                    </div>
                                                    <span class="adon-price">$25</span>
                                                    <a href="#" class="btn btn-secondary remove-adon-btn"><i class="bx bx-minus-circle me-2"></i>Remove</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Provide GPS navigation devices as add-ons for customers who 
                                                        need assistance with directions and navigation during their rental period.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-wifi"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Child Safety Seats</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>
                                                                More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>							
                                                    </div>
                                                    <span class="adon-price">$50</span>
                                                    <a href="#" class="btn btn-secondary remove-adon-btn"><i class="bx bx-minus-circle me-2"></i>Remove</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Provide GPS navigation devices as add-ons for customers who 
                                                        need assistance with directions and navigation during their rental period.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bxs-droplet"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Fuel Options</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>
                                                                More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>							
                                                    </div>
                                                    <span class="adon-price">$75</span>
                                                    <a href="#" class="btn add-addon-btn"><i class="bx bx-plus-circle me-2"></i>Add</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Provide GPS navigation devices as add-ons for customers who 
                                                        need assistance with directions and navigation during their rental period.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="view-more-adons">
                                                <div class="more-adons">
                                                    <ul>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i class="bx bx-collection"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Toll Passes</h6>
                                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>							
                                                                </div>
                                                                <span class="adon-price">$125</span>
                                                                <a href="#" class="btn add-addon-btn"><i class="bx bx-plus-circle me-2"></i>Add</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Provide GPS navigation devices as add-ons for customers who 
                                                                    need assistance with directions and navigation during their rental period.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i class="bx bx-broadcast"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Roadside Assistance</h6>
                                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>							
                                                                </div>
                                                                <span class="adon-price">$60</span>
                                                                <a href="#" class="btn add-addon-btn"><i class="bx bx-plus-circle me-2"></i>Add</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Provide GPS navigation devices as add-ons for customers who 
                                                                    need assistance with directions and navigation during their rental period.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i class="bx bx-radio"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Satellite Radio</h6>
                                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>							
                                                                </div>
                                                                <span class="adon-price">$42</span>
                                                                <a href="#" class="btn add-addon-btn"><i class="bx bx-plus-circle me-2"></i>Add</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Provide GPS navigation devices as add-ons for customers who 
                                                                    need assistance with directions and navigation during their rental period.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i class="bx bx-radar"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Additional Accessories</h6>
                                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>							
                                                                </div>
                                                                <span class="adon-price">$30</span>
                                                                <a href="#" class="btn add-addon-btn"><i class="bx bx-plus-circle me-2"></i>Add</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Provide GPS navigation devices as add-ons for customers who 
                                                                    need assistance with directions and navigation during their rental period.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i class="bx bx-rename"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Express Check-in/Check-out</h6>
                                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            More information <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>							
                                                                </div>
                                                                <span class="adon-price">$54</span>
                                                                <a href="#" class="btn add-addon-btn"><i class="bx bx-plus-circle me-2"></i>Add</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Provide GPS navigation devices as add-ons for customers who 
                                                                    need assistance with directions and navigation during their rental period.
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="javascript:void(0);" class="view-adon-btn"><i class="bx bx-plus-circle me-2"></i>View More Add-Ons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="booking-information-card">
                                    <div class="booking-info-head">
                                        <span><i class="bx bx-user-pin"></i></span>
                                        <h5>Driver details</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <ul class="booking-radio-btns">
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="driver_type" id="self_driver" checked>
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Self Driver</span>
                                                    </span>							
                                                </label>
                                            </li>
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="driver_type" id="acting_driver">
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Acting Driver</span>
                                                    </span>							
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="booking-timings self-driver-info">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-title-head">
                                                        <h5>Driver details</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">	
                                                        <label class="form-label">First Name <span class="text-danger"> *</span></label>											
                                                        <input type="text" class="form-control" placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">	
                                                        <label class="form-label">Last Name <span class="text-danger"> *</span></label>										
                                                        <input type="text" class="form-control" placeholder="Enter Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">	
                                                        <label class="form-label">Driver Age <span class="text-danger"> *</span></label>										
                                                        <input type="text" class="form-control" placeholder="Enter Age of Driver">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">	
                                                        <label class="form-label">Mobile Number <span class="text-danger"> *</span></label>										
                                                        <input type="text" class="form-control" placeholder="Enter Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block date-widget">	
                                                        <label class="form-label">Driving Licence Number <span class="text-danger"> *</span></label>										
                                                        <input type="text" class="form-control" placeholder="Enter Driving Licence Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block date-widget">	
                                                        <label class="form-label">Upload Document <span class="text-danger"> *</span></label>										
                                                        <div class="upload-div">
                                                            <input type="file">
                                                            <div class="upload-photo-drag">
                                                                <span><i class="fa fa-upload me-2"></i> Upload Photo</span>
                                                                <h6>or Drag Photos</h6>
                                                            </div>
                                                        </div>
                                                        <div class="upload-list">
                                                            <ul>
                                                                <li>The maximum photo size is 8 MB. Formats: jpeg, jpg, png. Put the main picture first</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block m-0">
                                                        <label class="custom_check d-inline-flex location-check m-0"><span>I Confirm Driver’s Age is above 20 years old</span>
                                                            <input type="checkbox" name="remeber">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="booking-timings acting-driver-info">
                                            <div class="form-title-head">
                                                <h5>Driver</h5>
                                            </div>
                                            <ul class="acting-driver-list">
                                                <li>
                                                    <div class="driver-profile-info">
                                                        <span class="driver-profile"><img src="{{URL::asset('build/img/drivers/driver-02.jpg')}}" alt="Img"></span>
                                                        <div class="driver-name">
                                                            <h5>Ruban</h5>
                                                            <ul>
                                                                <li>No of Rides Completed : 32</li>
                                                                <li>Price : $100</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-information-card pb-1">
                                    <div class="booking-info-head">
                                        <span><i class="bx bx-file-blank"></i></span>
                                        <h5>Insurance</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <div class="insurance-select custom-checkbox active">
                                            <div>
                                                <p class="fs-14 d-inline-flex align-items-center mb-1">Full Premium Insurance</p>
                                                <div>
                                                    <a href="#">+4 Benefits<i class="bx bxs-info-circle text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-1">Onetime Ride</span>
                                                <h6 class="fw-normal">$200</h6>
                                            </div>
                                        </div>
                                        <div class="insurance-select custom-checkbox">
                                            <div>
                                                <p class="fs-14 d-inline-flex align-items-center mb-1">Roadside Assistance</p>
                                                <div>
                                                    <a href="#">+3 Benefits<i class="bx bxs-info-circle text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-1">Onetime Ride</span>
                                                <h6 class="fw-normal">$200</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="{{url('booking-checkout')}}" class="btn btn-secondary">Back to Location & Time</a>
                                    <button class="btn btn-primary continue-book-btn" type="submit">Continue Booking</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="booking-sidebar">
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_one" aria-expanded="true">
                                            <div class="booking-sidebar-head">
                                                <h5>Booking Details<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_one" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <div class="booking-car-detail">
                                                <span class="car-img">
                                                    <img src="{{URL::asset('build/img/car-list-4.jpg')}}" class="img-fluid" alt="Car">
                                                </span>
                                                <div class="care-more-info">
                                                    <h5>Chevrolet Camaro</h5>
                                                    <p>Miami St, Destin, FL 32550, USA</p>
                                                    <a href="{{url('listing-details')}}">View Car Details</a>
                                                </div>
                                            </div>
                                            <div class="booking-vehicle-rates">
                                                <ul>
                                                    <li>
                                                        <div class="rental-charge">
                                                            <h6>Rental Charges Rate <span> (1 day )</span></h6>
                                                            <span class="text-danger">(This does not include fuel)</span>
                                                        </div>
                                                        <h5>+ $300</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Doorstep delivery</h6>
                                                        <h5>+ $60</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Trip Protection Fees</h6>
                                                        <h5>+ $25</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Convenience Fees</h6>
                                                        <h5>+ $2</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Tax</h6>
                                                        <h5>+ $2</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Refundable Deposit</h6>
                                                        <h5>+$1200</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Full Premium Insurance <i class="bx bxs-x-circle text-danger"></i></h6>
                                                        <h5>+$200</h5>
                                                    </li>
                                                    <li class="total-rate">
                                                        <h6>Subtotal</h6>
                                                        <h5>+$1604</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header p-3 d-flex align-center justify-content-between">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                            <div class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                <h5>Location & Time<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                        </div>
                                        <a href="{{url('booking-checkout')}}" class="d-flex align-items-center sidebar-edit"><i class="bx bx-edit-alt me-2"></i>Edit</a>
                                    </div>
                                    <div id="accordion_collapse_three" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <ul class="location-address-info">
                                                <li>
                                                    <h6>Rental Type</h6>
                                                    <p>Delivery</p>
                                                </li>
                                                <li>
                                                    <h6>Booking Type</h6>
                                                    <p>Days</p>
                                                </li>
                                                <li>
                                                    <h6>Delivery Location & time</h6>
                                                    <p>1230 E Springs Rd, Los Angeles, CA, USA</p>
                                                    <p>04/18/2024 - 14:00</p>
                                                </li>
                                                <li>
                                                    <h6>Return Location & time</h6>
                                                    <p>Norwegian Caribbean Cruise Los Angeles, CA 90025</p>
                                                    <p>04/27/2024 -  03:00</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header d-flex align-center justify-content-between p-3">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                            <div class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                <h5>Coupon<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                            <a href="#" class="coupon-view">View Coupons</a>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_two" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <form action="{{url('booking-checkout')}}">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-custom flex-fill">														
                                                        <input type="text" class="form-control mb-0" placeholder="Coupon code">
                                                    </div>
                                                    <button type="submit" class="btn btn-secondary apply-coupon-btn d-flex align-items-center ms-2">Apply<i class="feather-arrow-right ms-2"></i></button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="total-rate-card">
                                <div class="vehicle-total-price">
                                    <h5>Estimated Total</h5>
                                    <span>$3541</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
@endsection
