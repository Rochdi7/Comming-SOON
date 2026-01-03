<?php $page = 'booking-detail'; ?>
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
                                <li class="active activated">
                                    <span><img src="{{URL::asset('build/img/icons/booking-head-icon-02.svg')}}" alt="Booking Icon"></span>
                                    <h6>Extra Services</h6>
                                </li>
                                <li class="active">
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
                            <form action="{{url('booking-payment')}}">
                                <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>Billing Info</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6>Returning customer?</h6>
                                            <a href="javascript:void(0);" class="btn btn-secondary ms-3" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><i class="bx bx-user me-2"></i>Sign In</a>
                                        </div>
                                        
                                    </div>
                                    <div class="booking-info-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block">	
                                                    <label class="form-label">First Name <span class="text-danger"> *</span></label>											
                                                    <input type="text" class="form-control" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">	
                                                    <label class="form-label">Last Name <span class="text-danger"> *</span></label>											
                                                    <input type="text" class="form-control" placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">No of Persons <span class="text-danger"> *</span></label>	
                                                    <select class="form-control select">
                                                        <option>2 Adults, 1 Child</option>
                                                        <option>5 Adults, 2 Child</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">	
                                                    <label class="form-label">Company</label>											
                                                    <input type="text" class="form-control" placeholder="Enter Company Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">	
                                                    <label class="form-label">Street Address <span class="text-danger"> *</span></label>											
                                                    <input type="text" class="form-control" placeholder="Enter Address">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">Country <span class="text-danger"> *</span></label>	
                                                    <select class="form-control select">
                                                        <option>Country</option>
                                                        <option>USA</option>
                                                        <option>UK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">	
                                                    <label class="form-label">Enter City <span class="text-danger"> *</span></label>											
                                                    <input type="text" class="form-control" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">	
                                                    <label class="form-label">Pincode <span class="text-danger"> *</span></label>											
                                                    <input type="text" class="form-control" placeholder="Enter Pincode">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">	
                                                    <label class="form-label">Email Address <span class="text-danger"> *</span></label>											
                                                    <input type="text" class="form-control" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">	
                                                    <label class="form-label">Phone Number <span class="text-danger"> *</span></label>											
                                                    <input type="text" class="form-control" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">	
                                                    <label class="form-label">Additional Information</label>											
                                                    <textarea class="form-control" placeholder="Enter Additional Information" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block m-0">
                                                    <label class="custom_check d-inline-flex location-check m-0"><span>I have Read and Accept Terms & Conditions</span> <span class="text-danger"> *</span>
                                                        <input type="checkbox" name="remeber">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="{{url('booking-addon')}}" class="btn btn-secondary">Back to Extra Services</a>
                                    <button class="btn btn-primary continue-book-btn" type="submit">Confirm & Pay Now</button>
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
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_four" aria-expanded="true">
                                            <div class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                <h5>Extra Services<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                            <a href="{{url('booking-addon')}}" class="d-flex align-items-center sidebar-edit"><i class="bx bx-edit-alt me-2"></i>Edit</a>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_four" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <div class="booking-vehicle-rates">
                                                <ul class="mt-0">
                                                    <li>
                                                        <h6>GPS Navigation Systems</h6>
                                                        <h5> $25</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Wi-Fi Hotspot</h6>
                                                        <h5> $25</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Child Safety Seats</h6>
                                                        <h5> $50</h5>
                                                    </li>
                                                    <li class="total-rate">
                                                        <h6>Extra Services Charges Rate</h6>
                                                        <h5>$1200</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="book-our-drivers">
                                                <h4 class="title-head">Driver</h4>
                                                <ul class="acting-driver-list">
                                                    <li class="d-block">
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
                                                        <div class="change-driver">
                                                            <a href="javascript:void(0);" class="btn btn-secondary d-inline-flex align-items-center"><i class="bx bx-check-circle me-2"></i>Change Driver</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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
                                            <form action="{{url('booking-detail')}}">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-custom flex-fill">														
                                                        <input type="text" class="form-control mb-0" value="FIRSTBOOKING">
                                                        <a href="#" class="coupon-close"><span><i class="bx bx-x"></i></span></a>
                                                    </div>
                                                    <button type="submit" class="btn btn-secondary d-flex align-items-center apply-coupon-btn disabled ms-2">Apply<i class="feather-arrow-right ms-2"></i></button>
                                                </div>
                                                <span class="coupen-applied-offter"><i class="bx bxs-offer"></i>Saved in this Booking </span>
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
    @component('components.scrolltotop')
    @endcomponent
@endsection
