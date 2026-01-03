<?php $page = 'booking-success'; ?>
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
        <!-- Booking Success -->
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
										<h6>Add-Ons</h6>
									</li>
									<li class="active activated">
										<span><img src="{{URL::asset('build/img/icons/booking-head-icon-03.svg')}}" alt="Booking Icon"></span>
										<h6>Detail</h6>
									</li>
									<li class="active activated">
										<span><img src="{{URL::asset('build/img/icons/booking-head-icon-04.svg')}}" alt="Booking Icon"></span>
										<h6>Checkout</h6>
									</li>
									<li class="active">
										<span><img src="{{URL::asset('build/img/icons/booking-head-icon-05.svg')}}" alt="Booking Icon"></span>
										<h6>Booking Confirmed</h6>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="booking-card">
					<div class="success-book">
						<span class="success-icon">
							<i class="fa-solid fa-check-double"></i>
						</span>
						<h5>Thank you! Your Order has been Recieved</h5>
						<h5 class="order-no">Order Number : <span>#123456</span></h5>
					</div>
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="{{URL::asset('build/img/cars/car-05.jpg')}}" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700</h6>
						</div>
					</div>
					<div class="row">

						<!-- Car Pricing -->
						<div class="col-lg-6 col-md-6 d-flex">
							<div class="book-card flex-fill">
								<div class="book-head">
									<h6>Car Pricing</h6>
								</div>
								<div class="book-body">
									<ul class="pricing-lists">
										<li>
											<div>
												<p>Rental Charges Rate <span>(1 day )</span></p>
												<p class="text-danger">(This does not include fuel)</p>
											</div>
											<span> + $60</span>
										</li>
										<li>
											<p>Doorstep delivery</p>
											<span> + $60</span>
										</li>
										<li>
											<p>Trip Protection Fees</p>
											<span> + $25</span>
										</li>
										<li>
											<p>Convenience Fees</p>
											<span> + $2</span>
										</li>
										<li>
											<p>Tax</p>
											<span> + $2</span>
										</li>
										<li>
											<p>Refundable Deposit</p>
											<span> +$1200</span>
										</li>
										<li>
											<p>Full Premium Insurance</p>
											<span>+$200</span>
										</li>
										<li class="total">
											<p>Subtotal</p>
											<span>+$1604</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Car Pricing -->

						<!-- Location & Time -->
						<div class="col-lg-6 col-md-6 d-flex">
							<div class="book-card flex-fill">
								<div class="book-head">
									<h6>Location & Time</h6>
								</div>
								<div class="book-body">
									<ul class="location-lists">
										<li>
											<h6>Booking Type</h6>
											<p>Delivery</p>
										</li>
										<li>
											<h6>Rental Type</h6>
											<p>Daily</p>
										</li>
										<li>
											<h6>Pickup</h6>
											<p>1230 E Springs Rd, Los Angeles, CA, USA</p>
											<p>04/18/2024 - 14:00</p>
										</li>
										<li>
											<h6>Return</h6>
											<p>1230 E Springs Rd, Los Angeles, CA, USA</p>
											<p>04/18/2024 - 14:00</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Location & Time -->

						<!-- Add-ons Pricing -->
						<div class="col-lg-6 col-md-6 d-flex">
							<div class="book-card flex-fill">
								<div class="book-head">
									<h6>Extra Services Pricing</h6>
								</div>
								<div class="book-body">
									<ul class="pricing-lists">
										<li>
											<p>GPS Navigation Systems</p>
											<span>  $25</span>
										</li>
										<li>
											<p>Wi-Fi Hotspot</p>
											<span> $25</span>
										</li>
										<li>
											<p>Child Safety Seats</p>
											<span>$50</span>
										</li>
										<li class="total">
											<p>Extra Services Charges Rate</p>
											<span>$100</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Add-ons Pricing -->

						<!-- Driver Details -->
						<div class="col-lg-6 col-md-6 d-flex">
							<div class="book-card flex-fill">
								<div class="book-head">
									<h6>Driver Details</h6>
								</div>
								<div class="book-body">
									<ul class="location-lists">
										<li>
											<h6>Driver Type</h6>
											<p>Acting Driver</p>
										</li>
									</ul>
									<div class="driver-info">
										<span>
											<img src="{{URL::asset('build/img/user.jpg')}}" alt="img">
										</span>
										<div class="driver-name">
											<h6>Ruban</h6>
											<ul>
												<li>No of Rides Completed : 32</li>
												<li>Price : $100</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Driver Details -->

						<!-- Billing Information -->
						<div class="col-lg-6 col-md-6 d-flex">
							<div class="book-card flex-fill">
								<div class="book-head">
									<h6>Billing Information</h6>
								</div>
								<div class="book-body">
									<ul class="billing-lists">
										<li>Darren Jurel</li>
										<li>Mak Infotech</li>
										<li>1230 E Springs Rd, Los Angeles, CA, USA</li>
										<li>+1 124554 45445</li>
										<li>dj@example.com</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Billing Information -->

						<!-- Payment  Details -->
						<div class="col-lg-6 col-md-6 d-flex">
							<div class="book-card flex-fill">
								<div class="book-head">
									<h6>Payment  Details</h6>
								</div>
								<div class="book-body">
									<ul class="location-lists">
										<li>
											<h6>Payment Mode</h6>
											<p>Debit Card</p>
										</li>
										<li>
											<h6>Transaction ID</h6>
											<p><span>#13245454455454</span></p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Payment  Details -->

						<!-- Additional Information -->
						<div class="col-lg-12">
							<div class="book-card mb-0">
								<div class="book-head">
									<h6>Additional Information</h6>
								</div>
								<div class="book-body">
									<ul class="location-lists">
										<li>
											<p>Rental companies typically require customers to return the vehicle with a full tank of fuel. If the vehicle is returned with less than a full tank, customers may be charged for refueling the vehicle at a premium rate, often higher than local fuel prices.</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Additional Information -->

					</div>
				</div>
				<div class="print-btn text-center">
					<a href="javascript:void(0);" class="btn btn-secondary">Print Order</a>
				</div>
			</div>
			
		</div>
		<!-- /Booking Success -->
    @component('components.scrolltotop')
    @endcomponent
@endsection
