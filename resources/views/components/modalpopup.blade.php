@if (Route::is(['listing-details']))
    <!-- Modal -->
    <div class="modal custom-modal fade check-availability-modal" id="pages_edit" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-header text-start mb-0">
                            <h4 class="mb-0 text-dark fw-bold">Availability Details</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="align-center" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="available-for-ride">
                                    <p><i class="fa-regular fa-circle-check"></i>Chevrolet Camaro is available for a ride</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="row booking-info">
                                    <div class="col-md-4 pickup-address">
                                        <h5>Pickup</h5>
                                        <p>45, 4th Avanue  Mark Street USA</p>
                                        <span>Date & time : 11 Jan 2023</span>
                                    </div>
                                    <div class="col-md-4 drop-address">
                                        <h5>Drop Off</h5>
                                        <p>78, 10th street Laplace USA</p>
                                        <span>Date & time : 11 Jan 2023</span>
                                    </div>
                                    <div class="col-md-4 booking-amount">
                                        <h5>Booking Amount</h5>
                                        <h6><span>$300 </span> /day</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="booking-info seat-select">
                                    <h6>Extra Service</h6>
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>
                                        Baby Seat - <span class="ms-2">$10</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="booking-info pay-amount">
                                    <h6>Deposit Option</h6>
                                    <div class="radio radio-btn">
                                        <label>
                                            <input type="radio" name="radio"> Pay Deposit
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio"> Full Amount
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="booking-info service-tax">
                                    <ul>
                                        <li>Booking Price <span>$300</span></li>
                                        <li>Extra Service <span>$10</span></li>
                                        <li>Tax <span>$5</span></li>
                                    </ul>
                                </div>
                                <div class="grand-total">
                                    <h5>Grand Total</h5>
                                    <span>$315</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('booking')}}" class="btn btn-back">Go to Details<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Modal -->

    <!-- Custom Date Modal -->
    <div class="modal new-modal fade enquire-mdl" id="enquiry" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Enquiry</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{url('listing-details')}}" class="enquire-modal">							
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
                        </div>
                        <div class="modal-form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="modal-form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="modal-form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="modal-form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <label class="custom_check w-100">
                            <input type="checkbox" name="username">
                            <span class="checkmark"></span> I Agree with <a href="javascript:void(0);">Terms of Service</a> & <a href="javascript:void(0);">Privacy Policy</a>
                        </label>
                        <div class="modal-btn modal-btn-sm">
                            <button type="submit" class="btn btn-primary w-100">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Custom Date Modal -->

    <!-- Custom Date Modal -->
    <div class="modal new-modal fade enquire-mdl" id="fare_details" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Fare Details</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="enquire-modal">							
                        <div class="booking-header fare-book">
                            <div class="booking-img-wrap">
                                <div class="book-img">
                                    <img src="{{URL::asset('build/img/cars/car-05.jpg')}}" alt="img">
                                </div>
                                <div class="book-info">
                                    <h6>Chevrolet Camaro</h6>
                                    <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="fare-table">
                            <div class="table-responsive">
                                <table class="table table-center">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Doorstep delivery <span>(1 day )</span>
                                                <p class="text-danger">(This does not include fuel)</p>
                                            </td>
                                            <td>
                                                <select class="select">
                                                    <option>Per Day</option>
                                                    <option>Per Hr</option>
                                                </select>
                                            </td>
                                            <td class="amt text-end">+ $300</td>
                                        </tr>
                                        <tr>
                                            <td>Door delivery & Pickup</td>
                                            <td colspan="2" class="amt text-end"> + $60</td>
                                        </tr>
                                        <tr>
                                            <td>Trip Protection Fees</td>
                                            <td colspan="2" class="amt text-end"> + $25</td>
                                        </tr>
                                        <tr>
                                            <td>Convenience Fees</td>
                                            <td colspan="2" class="amt text-end"> + $2</td>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <td colspan="2" class="amt text-end"> + $2</td>
                                        </tr>
                                        <tr>
                                            <td>Refundable Deposit</td>
                                            <td colspan="2" class="amt text-end">+$1200</td>
                                        </tr>
                                        <tr>
                                            <th>Subtotal</th>
                                            <th colspan="2" class="amt text-end">+$1604</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-btn modal-btn-sm">
                            <a href="{{url('booking-checkout')}}" class="btn btn-primary w-100">
                                Continue to Booking
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Custom Date Modal -->
@endif

@if (Route::is('booking'))
    <!-- Modal -->
    <div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="payment-success">
                        <span class="check"><i class="fa-solid fa-check-double"></i></span>
                        <h5>Order Confirmed</h5>
                        <p>You Payment has been successfully done.
                            Trasaction id :<span> #5064164454</span>
                        </p>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-50 btn-primary ok-btn"
                            data-bs-dismiss="modal" aria-label="Close">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal -->
@endif

@if (Route::is(['booking-payment']))
<div class="modal new-modal multi-step fade" id="sign_in_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="login-wrapper">
						<div class="loginbox">						
							<div class="login-auth">
								<div class="login-auth-wrap">
									<h1>Sign In</h1>
									<p class="account-subtitle">We'll send a confirmation code to your email.</p>								
									<form action="{{url('index')}}">
										<div class="input-block">
											<label class="form-label">Email <span class="text-danger">*</span></label>
											<input type="email" class="form-control"  placeholder="Enter email">
										</div>
										<div class="input-block">
											<label class="form-label">Password <span class="text-danger">*</span></label>
											<div class="pass-group">
												<input type="password" class="form-control pass-input" placeholder=".............">
												<span class="fas fa-eye-slash toggle-password"></span>
											</div>
										</div>								
										<div class="input-block text-end">
											<a class="forgot-link" href="{{url('forgot-password')}}">Forgot Password ?</a>
										</div>
										<div class="input-block m-0">
											<label class="custom_check d-inline-flex"><span>Remember me</span>
												<input type="checkbox" name="remeber">
												<span class="checkmark"></span>
											</label>
										</div>
										<a href="{{url('index')}}" class="btn btn-outline-light w-100 btn-size mt-1">Sign In</a>
										<div class="login-or">
											<span class="or-line"></span>
											<span class="span-or-log">Or, log in with your email</span>
										</div>
										<!-- Social Login -->
										<div class="social-login">
											<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="{{URL::asset('build/img/icons/google.svg')}}" class="img-fluid" alt="Google"></span>Log in with Google</a>
										</div>
										<div class="social-login">
											<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="{{URL::asset('build/img/icons/facebook.svg')}}" class="img-fluid" alt="Facebook"></span>Log in with Facebook</a>
										</div>
										<!-- /Social Login -->
										<div class="text-center dont-have">Don't have an account ? <a href="{{url('register')}}">Sign Up</a></div>
									</form>							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if (Route::is(['user-booking-complete', 'user-bookings']))
    <!-- Completed Booking -->
    <div class="modal new-modal multi-step fade" id="complete_booking" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="booking-header">
                        <div class="booking-img-wrap">
                            <div class="book-img">
                                <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" alt="img">
                            </div>
                            <div class="book-info">
                                <h6>Chevrolet Camaro</h6>
                                <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                            </div>
                        </div>
                        <div class="book-amount">
                            <p>Total Amount</p>
                            <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                        </div>
                    </div>
                    <div class="booking-group">
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Booking Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booking Type</h6>
                                        <p>Delivery</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Rental Type</h6>
                                        <p>Days (3 Days)</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Extra Service</h6>
                                        <p>Mobile Charging</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Delivery</h6>
                                        <p>45, Avenue ,Mark Street, USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Dropoff</h6>
                                        <p>78, 10th street Laplace,USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Status</h6>
                                        <span class="badge badge-light-success">Completed</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booked On</h6>
                                        <p>15 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Start Date</h6>
                                        <p>18 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>End Date</h6>
                                        <p>20 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Personal Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Details</h6>
                                        <p>Johna Melinda</p>
                                        <p>+1 56441 56464</p>
                                        <p>Johna@example.com</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Address</h6>
                                        <p>78, 10th street</p>
                                        <p>Laplace,USA</p>
                                        <p>316 654</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>No of Person’s</h6>
                                        <p>2 Adults, 1 Child</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn modal-btn-sm text-end">
                        <a href="javascript:void(0);" data-bs-target="#start_ride" data-bs-toggle="modal"
                            data-bs-dismiss="modal" class="btn btn-primary">
                            Start Ride
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Completed Booking -->

    <!-- Order Success Modal -->
    <div class="modal new-modal order-success-modal fade" id="start_ride" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="order-success-info">
                        <span class="order-success-icon">
                            <img src="{{ URL::asset('/build/img/icons/check-icon.svg') }}" alt="Icon">
                        </span>
                        <h4>Successful</h4>
                        <p>You Ride has been successfully started. Order id : <span>#50641</span></p>
                        <div class="modal-btn">
                            <a href="{{ url('user-dashboard') }}" class="btn btn-secondary">
                                Go to Dashboard <i class="feather-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Success Modal -->
@endif

@if (Route::is(['user-messages']))
    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="{{ URL::asset('/build/img/profiles/avatar-08.jpg') }}"
                                        class="call-avatar">
                                    <h4>Darren Elder</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="feather-phone-off"></i></a>
                                    <a href="javascript:void(0);" class="btn call-item call-start"><i
                                            class="feather-phone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar"
                                        src="{{ URL::asset('/build/img/profiles/avatar-08.jpg') }}" alt="User Image">
                                    <h4>Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="feather-phone-off"></i></a>
                                    <a href="javascript:void(0);" class="btn call-item call-start"><i
                                            class="feather-video"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->
@endif

@if (Route::is(['user-payment']))
    <!-- View Invoice Modal -->
    <div class="modal new-modal fade" id="view_invoice" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0 m-0 p-0">
                    <div class="invoice-btns">
                        <a href="javascript:void(0)" class="btn me-2">
                            <i class="feather-printer"></i> Print
                        </a>
                        <a href="javascript:void(0)" class="btn">
                            <i class="feather-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="invoice-details">
                        <div class="invoice-items">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('/build/img/logo.svg') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info-text">
                                        <h4>Invoice</h4>
                                        <p>Invoice Number : <span>In983248782</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-item-bills">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-12">
                                    <div class="invoice-bill-info">
                                        <h6>Billed to</h6>
                                        <p>
                                            Customer Name <br>
                                            9087484288 <br>
                                            Address line 1, <br>
                                            Address line 2 <br>
                                            Zip code ,City - Country
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="invoice-bill-info">
                                        <h6>Invoice From</h6>
                                        <p>
                                            Company Name <br>
                                            9087484288 <br>
                                            Address line 1, <br>
                                            Address line 2 <br>
                                            Zip code ,City - Country
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="invoice-bill-info border-0">
                                        <p>Issue Date : 27 Jul 2022</p>
                                        <p>Due Amount : $1,54,22 </p>
                                        <p class="mb-0">PO Number : 54515454</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Rented Car</th>
                                                    <th>No of days</th>
                                                    <th>Rental Amount</th>
                                                    <th class="text-end">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6>Ferrari 458 MM Speciale</h6>
                                                    </td>
                                                    <td>7</td>
                                                    <td>$2000</td>
                                                    <td class="text-end">$2000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-details-info">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="invoice-terms">
                                        <h6>Payment Details</h6>
                                        <div class="invocie-note">
                                            <p>Debit Card<br>
                                                XXXXXXXXXXXX-2541<br>
                                                HDFC Bank</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="invoice-total-box">
                                        <div class="invoice-total-inner">
                                            <p><b>Trip Amount (This does not include fuel)</b> <span>$2592</span></p>
                                            <p>Trip Protection Fees <span>+ $25</span></p>
                                            <p>Convenience Fees <span>+ $2</span></p>
                                            <p>Refundable Deposit <span>+ $2000</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-total">
                            <h4>Total <span>$4,300.00</span></h4>
                        </div>
                        <div class="invoice-note-footer">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12">
                                    <div class="invocie-note">
                                        <h6>Notes</h6>
                                        <p>Enter customer notes or any other details</p>
                                    </div>
                                    <div class="invocie-note mb-0">
                                        <h6>Terms and Conditions</h6>
                                        <p>Enter customer notes or any other details</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="invoice-sign">
                                        <img class="img-fluid d-inline-block"
                                            src="{{ URL::asset('/build/img/signature.png') }}" alt="Sign">
                                        <span class="d-block">dreamsrent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Invoice Modal -->
@endif

@if (Route::is(['user-reviews']))
    <!-- Add Payment Modal -->
    <div class="modal new-modal multi-step fade" id="add_review" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Review</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="review-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="booking-img-wrap">
                                    <div class="book-img">
                                        <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" alt="img">
                                    </div>
                                    <div class="book-info">
                                        <h6>Chevrolet Camaro</h6>
                                        <p>Delivery</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="booking-view">
                                            <h6>Rental Type</h6>
                                            <p>Hourly</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="booking-view">
                                            <h6>Total Amount</h6>
                                            <p>$3000</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="booking-view">
                                            <h6>Booked On</h6>
                                            <p>15 Sep 2023, 09:30 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <div class="rating-wrap">
                            <div class="modal-form-group">
                                <label>Overall Ratings <span class="text-danger">*</span></label>
                                <div class="rating">
                                    <a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
                                    <a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
                                    <a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
                                    <a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
                                    <a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
                                </div>
                            </div>
                            <div class="modal-form-group">
                                <label>Enter Review <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="4" placeholder="Enter Comments"></textarea>
                            </div>
                        </div>
                        <div class="modal-btn modal-btn-sm text-end">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
                                Go Back
                            </a>
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
                                Submit
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Payment Modal -->
@endif

@if (Route::is(['user-security']))
    <!-- Change Password Modal -->
    <div class="modal new-modal fade" id="change_password" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modal-form-group">
                                    <label>Old Password <span class="text-danger">*</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input-three"
                                            placeholder=".............">
                                        <span class="feather-eye-off toggle-password-three"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form-group">
                                    <label>New Password <span class="text-danger">*</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input-four"
                                            placeholder=".............">
                                        <span class="feather-eye-off toggle-password-four"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form-group">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input-five"
                                            placeholder=".............">
                                        <span class="feather-eye-off toggle-password-five"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-btn modal-btn-sm">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Password Modal -->

    <!-- Change Phone Number Modal -->
    <div class="modal new-modal multi-step fade" id="change_phone_number" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Phone Number</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="modal-form-group">
                            <label>Current Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="modal-form-group">
                            <label>New Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="modal-form-group">
                            <p><i class="feather-alert-circle"></i> New Phone Number Only Updated Once You Verified
                            </p>
                        </div>
                    </form>
                    <div class="modal-btn modal-btn-sm">
                        <a href="javascript:void(0);" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-target="#otp_verification"
                            data-bs-toggle="modal" data-bs-dismiss="modal">
                            Change Number
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Phone Number Modal -->

    <!-- OTP Verification Modal -->
    <div class="modal new-modal multi-step fade" id="otp_verification" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title">OTP Verification</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="otp-number">
                        <p>Enter OTP Send to your Mobile number <span>+1 454445 45544</span></p>
                    </div>
                    <form method="get" class="digit-group login-form-control" data-group-name="digits"
                        data-autosubmit="false" autocomplete="off" action="#">
                        <div class="otp-box">
                            <input type="text" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                            <input type="text" id="digit-2" name="digit-2" data-next="digit-3"
                                data-previous="digit-1" maxlength="1">
                            <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                data-previous="digit-2" maxlength="1">
                            <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                data-previous="digit-3" maxlength="1">
                        </div>
                        <div class="otp-resend">
                            <a href="javascript:void(0);">Resend Again</a>
                            <p>Remaining 00:30s</p>
                        </div>
                    </form>
                    <div class="modal-btn modal-btn-group">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-secondary w-100"
                                    data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary w-100" data-bs-dismiss="modal"
                                    data-bs-target="#verification_success" data-bs-toggle="modal">
                                    Verify
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="verified-box">
                        <p><i class="feather-check"></i> Your Phone Number has been Successfully Verified</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /OTP Verification Modal -->

    <!-- Verification Success Modal -->
    <div class="modal new-modal verification-success-modal fade" id="verification_success" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="order-success-info">
                        <span class="order-success-icon">
                            <img src="{{ URL::asset('/build/img/icons/check-icon.svg') }}" alt="Icon">
                        </span>
                        <h4>Successful</h4>
                        <p>You Phone number has been successfully Verified.</p>
                        <div class="modal-btn">
                            <a href="{{ url('user-security') }}" class="btn btn-secondary">
                                Back to Settings <i class="feather-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Verification Success Modal -->

    <!-- Change Email Modal -->
    <div class="modal new-modal multi-step fade" id="change_email" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Email Address</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="modal-form-group">
                            <label>Current Email Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="modal-form-group">
                            <label>New Email Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="modal-form-group">
                            <p><i class="feather-alert-circle"></i> New Email Address Only Updated Once You Verified
                            </p>
                        </div>
                    </form>
                    <div class="modal-btn modal-btn-sm">
                        <a href="javascript:void(0);" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-target="#email_verification"
                            data-bs-toggle="modal" data-bs-dismiss="modal">
                            Change Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Email Modal -->

    <!-- Email Verification Modal -->
    <div class="modal new-modal multi-step fade" id="email_verification" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title">Email Verification</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="otp-number">
                        <p>Please click the verification link send to your email address
                            <span>Triddse3w@example.com</span>
                        </p>
                    </div>
                    <div class="otp-resend">
                        <a href="javascript:void(0);">Resend Again</a>
                    </div>
                    <div class="modal-btn">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-secondary w-100"
                                    data-bs-dismiss="modal">
                                    Close
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary w-100" data-bs-dismiss="modal"
                                    data-bs-target="#email_verification_success" data-bs-toggle="modal">
                                    Verify
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Email Verification Modal -->

    <!-- Email Verification Success Modal -->
    <div class="modal new-modal verification-success-modal fade" id="email_verification_success"
        data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="order-success-info">
                        <span class="order-success-icon">
                            <img src="{{ URL::asset('/build/img/icons/check-icon.svg') }}" alt="Icon">
                        </span>
                        <h4>Successful</h4>
                        <p>You Email has been successfully Verified.</p>
                        <div class="modal-btn">
                            <a href="{{ url('user-security') }}" class="btn btn-secondary">
                                Back to Settings <i class="feather-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Email Verification Success Modal -->

    <!-- Deactive Account Modal -->
    <div class="modal new-modal fade" id="deactive_account" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deactivate Account</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="deactive-content">
                        <p>Are you sureyou want to delete This Account? To delete your account, Type your password.</p>
                    </div>
                    <form action="#">
                        <div class="modal-form-group">
                            <label>Password <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input-six"
                                    placeholder=".............">
                                <span class="feather-eye-off toggle-password-six"></span>
                            </div>
                        </div>
                        <div class="modal-btn modal-btn-sm">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Delete Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Deactive Account Modal -->

    <!-- Delete Modal -->
    <div class="modal new-modal fade" id="delete_two_factor" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="delete-action">
                        <div class="delete-header">
                            <h4>Delete Two Factor</h4>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-secondary w-100">
                                        Delete
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-primary w-100">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->

    <!-- Delete Modal -->
    <div class="modal new-modal fade" id="delete_account" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="delete-action">
                        <div class="delete-header">
                            <h4>Delete Account</h4>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-secondary w-100">
                                        Delete
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-primary w-100">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['user-wallet']))
    <!-- Add Card Modal -->
    <div class="modal new-modal fade" id="add_card" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Card</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="modal-form-group">
                            <label>Card Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Card Number">
                        </div>
                        <div class="modal-form-group">
                            <label>Name on Card <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Card Name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-form-group">
                                    <label>CVV <span class="text-danger">*</span></label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control" placeholder="Enter CVV Number">
                                        <span class="cus-icon">
                                            <img src="{{ URL::asset('/build/img/icons/lock-icon.svg') }}"
                                                alt="Icon">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form-group">
                                    <label>Expiry Date <span class="text-danger">*</span></label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                                        <span class="cus-icon">
                                            <img src="{{ URL::asset('/build/img/icons/calendar-icon.svg') }}"
                                                alt="Icon">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-form-group">
                            <label class="custom_check">
                                <input type="checkbox" name="rememberme" class="rememberme">
                                <span class="checkmark"></span>
                                Save this account for future transaction
                            </label>
                        </div>
                        <div class="modal-btn">
                            <button type="submit" class="btn btn-secondary w-100">Pay $4700</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Card Modal -->

    <!-- Add Payment Modal -->
    <div class="modal new-modal multi-step fade" id="add_payment" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Payment</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="total-payment">
                        <p>Total Amount</p>
                        <h6>$22314</h6>
                    </div>
                    <div class="choose-payment-info">
                        <h5>Choose your Payment Method</h5>
                        <div class="choose-payment">
                            <label class="custom_radio">
                                <input type="radio" name="payment_one" value="wallet_one">
                                <span class="checkmark"></span>
                                <img src="{{ URL::asset('/build/img/icons/payment-1.svg') }}" alt="Icon">
                            </label>
                            <label class="custom_radio">
                                <input type="radio" name="payment_one" value="wallet_one">
                                <span class="checkmark"></span>
                                <img src="{{ URL::asset('/build/img/icons/payment-2.svg') }}" alt="Icon">
                            </label>
                            <label class="custom_radio">
                                <input type="radio" name="payment_one" value="wallet_one" checked="">
                                <span class="checkmark"></span>
                                <img src="{{ URL::asset('/build/img/icons/payment-3.svg') }}" alt="Icon">
                            </label>
                        </div>
                        <div class="add-payment-table-info">
                            <div class="wallet-table add-payment-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="payment_two" value="wallet_two"
                                                            checked="">
                                                        <span class="checkmark"></span>
                                                        <img src="{{ URL::asset('/build/img/icons/wallet-01.svg') }}"
                                                            alt="Icon">
                                                    </label>
                                                </td>
                                                <td>
                                                    <h6>3210 **** **** **12</h6>
                                                    <p>Card Number</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="wallet-table add-payment-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="payment_two" value="wallet_two">
                                                        <span class="checkmark"></span>
                                                        <img src="{{ URL::asset('/build/img/icons/wallet-02.svg') }}"
                                                            alt="Icon">
                                                    </label>
                                                </td>
                                                <td>
                                                    <h6>7847 **** **** **78</h6>
                                                    <p>Card Number</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="wallet-table add-payment-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="payment_two" value="wallet_two">
                                                        <span class="checkmark"></span>
                                                        <img src="{{ URL::asset('/build/img/icons/wallet-03.svg') }}"
                                                            alt="Icon">
                                                    </label>
                                                </td>
                                                <td>
                                                    <h6>4710 **** **** **64</h6>
                                                    <p>Card Number</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn">
                        <button class="btn btn-secondary w-100" data-bs-target="#order_success"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Add to Wallet</button>
                        <button class="btn btn-outline-cancel" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Payment Modal -->

    <!-- Order Success Modal -->
    <div class="modal new-modal order-success-modal fade" id="order_success" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="order-success-info">
                        <span class="order-success-icon">
                            <img src="{{ URL::asset('/build/img/icons/check-icon.svg') }}" alt="Icon">
                        </span>
                        <h4>Successful</h4>
                        <p>You Amount “$1000” has been successfully added. Order id : <span>#50641</span></p>
                        <div class="modal-btn">
                            <a href="{{ url('user-wallet') }}" class="btn btn-secondary">
                                Back to My Wallet <i class="feather-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Success Modal -->
@endif

@if (Route::is([
        'user-wallet',
        'user-reviews',
        'user-bookings',
        'user-booking-upcoming',
        'user-booking-inprogress',
        'user-booking-complete',
        'user-booking-cancelled',
    ]))
    <!-- Custom Date Modal -->
    <div class="modal new-modal fade" id="custom_date" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Custom Date</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="modal-form-group">
                            <label>From Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="modal-form-group">
                            <label>To Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="modal-btn modal-btn-sm text-end">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
                                Cancel Booking
                            </a>
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
                                Start Ride
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Custom Date Modal -->
@endif

@if (Route::is([
        'user-wallet',
        'user-reviews',
        'user-payment',
        'user-bookings',
        'user-booking-upcoming',
        'user-booking-inprogress',
        'user-booking-complete',
        'user-booking-cancelled',
    ]))
    <!-- Delete Modal -->
    <div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="delete-action">
                        <div class="delete-header">
                            <h4>Delete Wallet History</h4>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-secondary w-100">
                                        Delete
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                        class="btn btn-primary w-100">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endif

@if (Route::is(['user-booking-upcoming', 'user-bookings']))
    <!-- Cancel Reason Modal -->
    <div class="modal new-modal fade" id="cancel_reason" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cancel Reason</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="reason-item">
                        <p>On the booking date i have other work on my personal so i am cancelling my bookingOn the
                            booking date i have other work on my personal so i am cancelling my bookingOn the booking
                            date i have other work on my personal so i am cancelling my bookingOn the booking date i
                            have other work on my personal so i am cancelling my booking</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Cancel Reason Modal -->

    <!-- Order Success Modal -->
    <div class="modal new-modal order-success-modal fade" id="start_rides" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="order-success-info">
                        <span class="order-success-icon">
                            <img src="{{ URL::asset('/build/img/icons/check-icon.svg') }}" alt="Icon">
                        </span>
                        <h4>Successful</h4>
                        <p>You Ride has been successfully started. Order id : <span>#50641</span></p>
                        <div class="modal-btn">
                            <a href="{{ url('user-dashboard') }}" class="btn btn-secondary">
                                Go to Dashboard <i class="feather-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Success Modal -->

    <!-- Cancel Ride Modal -->
    <div class="modal new-modal fade" id="cancel_ride" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cancel Reason</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="modal-item cancel-ride">
                            <div class="modal-form-group">
                                <label>Reason <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="4">The car arrived early & the rep was courteous and polite.</textarea>
                            </div>
                        </div>
                        <div class="modal-btn modal-btn-sm text-end">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
                                Cancel
                            </a>
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
                                Submit
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Cancel Ride Modal -->

    <!-- Upcoming Booking -->
    <div class="modal new-modal multi-step fade" id="upcoming_booking" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="booking-header">
                        <div class="booking-img-wrap">
                            <div class="book-img">
                                <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" alt="img">
                            </div>
                            <div class="book-info">
                                <h6>Chevrolet Camaro</h6>
                                <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                            </div>
                        </div>
                        <div class="book-amount">
                            <p>Total Amount</p>
                            <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                        </div>
                    </div>
                    <div class="booking-group">
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Booking Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booking Type</h6>
                                        <p>Delivery</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Rental Type</h6>
                                        <p>Days (3 Days)</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Extra Service</h6>
                                        <p>Mobile Charging</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Delivery</h6>
                                        <p>45, Avenue ,Mark Street, USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Dropoff</h6>
                                        <p>78, 10th street Laplace,USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Status</h6>
                                        <span class="badge badge-light-secondary">Upcoming</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booked On</h6>
                                        <p>15 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Start Date</h6>
                                        <p>18 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>End Date</h6>
                                        <p>20 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Personal Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Details</h6>
                                        <p>Johna Melinda</p>
                                        <p>+1 56441 56464</p>
                                        <p>Johna@example.com</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Address</h6>
                                        <p>78, 10th street</p>
                                        <p>Laplace,USA</p>
                                        <p>316 654</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>No of Person’s</h6>
                                        <p>2 Adults, 1 Child</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn modal-btn-sm text-end">
                        <a href="javascript:void(0);" data-bs-target="#cancel_ride" data-bs-toggle="modal"
                            data-bs-dismiss="modal" class="btn btn-secondary">
                            Cancel Booking
                        </a>
                        <a href="javascript:void(0);" data-bs-target="#start_rides" data-bs-toggle="modal"
                            data-bs-dismiss="modal" class="btn btn-primary">
                            Start Ride
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Upcoming Booking -->

    <!-- Edit Booking -->
    <div class="modal new-modal multi-step fade" id="edit_booking" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                    <div class="badge-item w-100 text-end">
                        <span class="badge badge-light-warning">Inprogress</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="booking-header">
                        <div class="booking-img-wrap">
                            <div class="book-img">
                                <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" alt="img">
                            </div>
                            <div class="book-info">
                                <h6>Chevrolet Camaro</h6>
                                <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                            </div>
                        </div>
                        <div class="book-amount">
                            <p>Total Amount</p>
                            <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                        </div>
                    </div>
                    <div class="booking-group">
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Select Location</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="loc-wrap">
                                        <div class="modal-form-group loc-item">
                                            <label>Delivery Location</label>
                                            <input type="text" class="form-control" placeholder="Enter Location">
                                        </div>
                                        <div class="modal-form-group">
                                            <label class="d-sm-block">&nbsp;</label>
                                            <a href="javascript:void(0);" class="btn btn-secondary"><i
                                                    class="fa-solid fa-location-crosshairs"></i> Current Location</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="modal-form-group">
                                        <label>Dropoff Location</label>
                                        <input type="text" class="form-control"
                                            value="78, 10th street Laplace USA">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6><span class="title-icon"><i class="fa-solid fa-location-dot"></i></span>Select
                                    Booking type & Time <a href="javascript:void(0);"><i
                                            class="feather-alert-circle"></i></a></h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="modal-form-group rent-radio active">
                                        <label class="custom_radio">
                                            <input type="radio" class="rent-types" name="rent_type" checked>
                                            <span class="checkmark"></span>
                                            <span class="rent-option">Hourly</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="modal-form-group rent-radio">
                                        <label class="custom_radio">
                                            <input type="radio" class="rent-types" name="rent_type">
                                            <span class="checkmark"></span>
                                            <span class="rent-option">Day (8 Hrs)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="modal-form-group rent-radio">
                                        <label class="custom_radio">
                                            <input type="radio" class="rent-types" name="rent_type">
                                            <span class="checkmark"></span>
                                            <span class="rent-option">Weekly</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="modal-form-group rent-radio">
                                        <label class="custom_radio">
                                            <input type="radio" class="rent-types" name="rent_type">
                                            <span class="checkmark"></span>
                                            <span class="rent-option">Monthly</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form-group">
                                        <label>Start Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form-group">
                                        <label>Start Time</label>
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form-group">
                                        <label>Return Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form-group">
                                        <label>Return Time</label>
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6><span class="title-icon"><i class="fa-solid fa-medal"></i></span>Extra Service
                                </h6>
                            </div>
                            <div class="selectbox-cont">
                                <label class="custom_check w-100">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Baby Seat - <span class="amt">$10</span>
                                </label>
                                <label class="custom_check w-100">
                                    <input type="checkbox" name="username" checked>
                                    <span class="checkmark"></span> Mobile Charging - <span
                                        class="amt">$50</span>
                                </label>
                                <label class="custom_check w-100">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Wi-Fi Hotspot - <span class="amt">$60</span>
                                </label>
                                <label class="custom_check w-100">
                                    <input type="checkbox" name="username">
                                    <span class="checkmark"></span> Airport Shuttle Service - <span
                                        class="amt">$90</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn modal-btn-sm text-end">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
                            Go Back
                        </a>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
                            Save & Continue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Booking -->
@endif

@if (Route::is(['user-booking-cancelled', 'user-bookings']))
    <!-- View Status -->
    <div class="modal new-modal fade" id="view_status" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="booking-header">
                        <div class="booking-img-wrap">
                            <div class="book-img">
                                <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" alt="img">
                            </div>
                            <div class="book-info">
                                <h6>Chevrolet Camaro</h6>
                                <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                            </div>
                        </div>
                        <div class="book-amount">
                            <p>Total Amount</p>
                            <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                        </div>
                    </div>
                    <div class="refund-wrap booking-group">
                        <div class="booking-wrapper">
                            <h6>Refund Method</h6>
                            <div class="card-status-wrap">
                                <div class="card-status">
                                    <h5>Mastercard</h5>
                                    <p>Started on : 20 Oct 2023</p>
                                </div>
                                <div class="status-img">
                                    <img src="{{ URL::asset('/build/img/icons/card-icon.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="refund-process">
                                <h5>Refund Process</h5>
                                <ul>
                                    <li>
                                        <h6>Dreams Rent initiated your refund</h6>
                                        <p>20 Oct 2023</p>
                                    </li>
                                    <li>
                                        <h6>Mastercard has accepted your request</h6>
                                        <p>20 Oct 2023</p>
                                    </li>
                                    <li>
                                        <h6>Refund credited to you account successfully</h6>
                                        <p>20 Oct 2023</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Status -->

    <!-- Completed Booking -->
    <div class="modal new-modal multi-step fade" id="cancelled_booking" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="booking-header">
                        <div class="booking-img-wrap">
                            <div class="book-img">
                                <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" alt="img">
                            </div>
                            <div class="book-info">
                                <h6>Chevrolet Camaro</h6>
                                <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                            </div>
                        </div>
                        <div class="book-amount">
                            <p>Total Amount</p>
                            <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                        </div>
                    </div>
                    <div class="booking-group">
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Booking Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booking Type</h6>
                                        <p>Delivery</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Rental Type</h6>
                                        <p>Days (3 Days)</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Extra Service</h6>
                                        <p>Mobile Charging</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Delivery</h6>
                                        <p>45, Avenue ,Mark Street, USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Dropoff</h6>
                                        <p>78, 10th street Laplace,USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Status</h6>
                                        <span class="badge badge-light-danger">Refund Initiated</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booked On</h6>
                                        <p>15 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Start Date</h6>
                                        <p>18 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>End Date</h6>
                                        <p>20 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Personal Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Details</h6>
                                        <p>Johna Melinda</p>
                                        <p>+1 56441 56464</p>
                                        <p>Johna@example.com</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Address</h6>
                                        <p>78, 10th street</p>
                                        <p>Laplace,USA</p>
                                        <p>316 654</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>No of Person’s</h6>
                                        <p>2 Adults, 1 Child</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cancel-reason">
                            <h6>Cancel Reason</h6>
                            <p>On the booking date i have other work on my personal so i am cancelling my bookingOn the
                                booking date i have other work on my personal so i am cancelling my booking On the
                                booking date i have other work on my personal so i am cancelling my booking</p>
                        </div>
                        <div class="cancel-box">
                            <p>Cancelled By User on 17 Sep 2023, Refund will deposited in user account on 19 Sep 2023
                            </p>
                        </div>
                    </div>
                    <div class="modal-btn modal-btn-sm text-end">
                        <a href="javascript:void(0);" data-bs-target="#view_status" data-bs-toggle="modal"
                            data-bs-dismiss="modal" class="btn btn-primary">
                            View status
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Cancelled Booking -->
@endif

@if (Route::is(['user-booking-inprogress', 'user-bookings']))
    <!-- Inprogress Booking -->
    <div class="modal new-modal multi-step fade" id="inprogress_booking" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="booking-header">
                        <div class="booking-img-wrap">
                            <div class="book-img">
                                <img src="{{ URL::asset('/build/img/cars/car-05.jpg') }}" alt="img">
                            </div>
                            <div class="book-info">
                                <h6>Chevrolet Camaro</h6>
                                <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                            </div>
                        </div>
                        <div class="book-amount">
                            <p>Total Amount</p>
                            <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                        </div>
                    </div>
                    <div class="booking-group">
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Booking Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booking Type</h6>
                                        <p>Delivery</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Rental Type</h6>
                                        <p>Days (3 Days)</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Extra Service</h6>
                                        <p>Mobile Charging</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Delivery</h6>
                                        <p>45, Avenue ,Mark Street, USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Dropoff</h6>
                                        <p>78, 10th street Laplace,USA</p>
                                        <p>11 Jan 2023, 03:30 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Status</h6>
                                        <span class="badge badge-light-warning">Inprogress</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Booked On</h6>
                                        <p>15 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Start Date</h6>
                                        <p>18 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>End Date</h6>
                                        <p>20 Sep 2023, 09:30 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-wrapper">
                            <div class="booking-title">
                                <h6>Personal Details</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Details</h6>
                                        <p>Johna Melinda</p>
                                        <p>+1 56441 56464</p>
                                        <p>Johna@example.com</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>Address</h6>
                                        <p>78, 10th street</p>
                                        <p>Laplace,USA</p>
                                        <p>316 654</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="booking-view">
                                        <h6>No of Person’s</h6>
                                        <p>2 Adults, 1 Child</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn modal-btn-sm text-end">
                        <a href="javascript:void(0);" data-bs-target="#start_ride" data-bs-toggle="modal"
                            data-bs-dismiss="modal" class="btn btn-primary">
                            Complete Ride
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Inprogress Booking -->
@endif

@if (Route::is(['booking-cancelled-calendar']))
<!-- Completed Booking -->
<div class="modal new-modal multi-step fade" id="cancelled_booking" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
            </div>
            <div class="modal-body">
                <div class="booking-header">
                    <div class="booking-img-wrap">
                        <div class="book-img">
                            <img src="{{url::asset('/build/img/cars/car-05.jpg')}}" alt="img">
                        </div>
                        <div class="book-info">
                            <h6>Chevrolet Camaro</h6>
                            <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                        </div>
                    </div>
                    <div class="book-amount">
                        <p>Total Amount</p>
                        <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                    </div>
                </div>
                <div class="booking-group">
                    <div class="booking-wrapper">
                        <div class="booking-title">
                            <h6>Booking Details</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Booking Type</h6>
                                    <p>Delivery</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Rental Type</h6>
                                    <p>Days (3 Days)</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Extra Service</h6>
                                    <p>Mobile Charging</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Delivery</h6>
                                    <p>45, Avenue ,Mark Street, USA</p>
                                    <p>11 Jan 2023, 03:30 PM</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Dropoff</h6>
                                    <p>78, 10th street Laplace,USA</p>
                                    <p>11 Jan 2023, 03:30 PM</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Status</h6>
                                    <span class="badge badge-light-danger">Refund Initiated</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Booked On</h6>
                                    <p>15 Sep 2023, 09:30 AM</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Start Date</h6>
                                    <p>18 Sep 2023, 09:30 AM</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>End Date</h6>
                                    <p>20 Sep 2023, 09:30 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-wrapper">
                        <div class="booking-title">
                            <h6>Personal Details</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Details</h6>
                                    <p>Johna Melinda</p>
                                    <p>+1 56441 56464</p>
                                    <p>Johna@example.com</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>Address</h6>
                                    <p>78, 10th street</p>
                                    <p>Laplace,USA</p>
                                    <p>316 654</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">								
                                <div class="booking-view">
                                    <h6>No of Person’s</h6>
                                    <p>2 Adults, 1 Child</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cancel-reason">
                        <h6>Cancel Reason</h6>
                        <p>On the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my booking On the booking date i have other work on my personal  so i am cancelling my booking</p>
                    </div>
                    <div class="cancel-box">
                        <p>Cancelled By User on 17 Sep 2023, Refund will deposited in user account on 19 Sep 2023 </p>
                    </div>
                </div>
                <div class="modal-btn modal-btn-sm text-end">
                    <a href="javascript:void(0);" data-bs-target="#view_status" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
                        View status
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Cancelled Booking -->

<!-- View Status -->
<div class="modal new-modal fade" id="view_status" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="booking-header">
                    <div class="booking-img-wrap">
                        <div class="book-img">
                            <img src="{{url::asset('/build/img/cars/car-05.jpg')}}" alt="img">
                        </div>
                        <div class="book-info">
                            <h6>Chevrolet Camaro</h6>
                            <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                        </div>
                    </div>
                    <div class="book-amount">
                        <p>Total Amount</p>
                        <h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
                    </div>
                </div>
                <div class="refund-wrap booking-group">
                    <div class="booking-wrapper">
                        <h6>Refund Method</h6>
                        <div class="card-status-wrap">
                            <div class="card-status">
                                <h5>Mastercard</h5>
                                <p>Started on : 20 Oct 2023</p>
                            </div>
                            <div class="status-img">
                                <img src="{{url::asset('/build/img/icons/card-icon.svg')}}" alt="Img">
                            </div>
                        </div>
                        <div class="refund-process">
                            <h5>Refund Process</h5>
                            <ul>
                                <li>
                                    <h6>Dreams Rent initiated your refund</h6>
                                    <p>20 Oct 2023</p>
                                </li>
                                <li>
                                    <h6>Mastercard has accepted your request</h6>
                                    <p>20 Oct 2023</p>
                                </li>
                                <li>
                                    <h6>Refund credited to you account successfully</h6>
                                    <p>20 Oct 2023</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /View Status -->

<!-- Delete Modal -->
<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="delete-action">
                    <div class="delete-header">
                        <h4>Delete Booking</h4>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary w-100">
                                    Delete
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary w-100">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->

<!-- Custom Date Modal -->
<div class="modal new-modal fade" id="custom_date" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Custom Date</h4>
                <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="modal-form-group">
                        <label>From Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="modal-form-group">
                        <label>To Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="modal-btn modal-btn-sm text-end">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
                            Cancel Booking
                        </a>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
                            Start Ride
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Custom Date Modal -->
@endif
@if (Route::is(['booking-complete-calendar']))
	<!-- Completed Booking -->
	<div class="modal new-modal multi-step fade" id="complete_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="{{url::asset('/build/img/cars/car-05.jpg')}}" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Booking Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booking Type</h6>
										<p>Delivery</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Rental Type</h6>
										<p>Days (3 Days)</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Extra Service</h6>
										<p>Mobile Charging</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Delivery</h6>
										<p>45, Avenue ,Mark Street, USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Dropoff</h6>
										<p>78, 10th street Laplace,USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Status</h6>
										<span class="badge badge-light-success">Completed</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booked On</h6>
										<p>15 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Start Date</h6>
										<p>18 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>End Date</h6>
										<p>20 Sep 2023, 09:30 AM</p>
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Personal Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Details</h6>
										<p>Johna Melinda</p>
										<p>+1 56441 56464</p>
										<p>Johna@example.com</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Address</h6>
										<p>78, 10th street</p>
										<p>Laplace,USA</p>
										<p>316 654</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>No of Person’s</h6>
										<p>2 Adults, 1 Child</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-target="#start_ride" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
							Start Ride
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Completed Booking -->

	<!-- Order Success Modal -->
	<div class="modal new-modal order-success-modal fade" id="start_ride" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="order-success-info">
						<span class="order-success-icon">
							<img src="{{url::asset('/build/img/icons/check-icon.svg')}}" alt="Icon">
						</span>
						<h4>Successful</h4>
						<p>YYou Ride  has been successfully started. Order id : <span>#50641</span></p>
						<div class="modal-btn">
							<a href="{{url('user-dashboard')}}" class="btn btn-secondary">
								Go to Dashboard <i class="feather-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Order Success Modal -->

	<!-- Delete Modal -->
	<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="delete-action">
						<div class="delete-header">
							<h4>Delete Booking</h4>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary w-100">
										Delete
									</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary w-100">
										Cancel
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Modal -->

	<!-- Custom Date Modal -->
	<div class="modal new-modal fade" id="custom_date" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Custom Date</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="modal-form-group">
							<label>From Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-form-group">
							<label>To Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-btn modal-btn-sm text-end">
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
								Cancel Booking
							</a>
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
								Start Ride
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Custom Date Modal -->
    @endif
    @if (Route::is(['booking-detail']))
    <div class="modal new-modal multi-step fade" id="sign_in_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="login-wrapper">
						<div class="loginbox">						
							<div class="login-auth">
								<div class="login-auth-wrap">
									<h1>Sign In</h1>
									<p class="account-subtitle">We'll send a confirmation code to your email.</p>								
									<form action="{{url('index')}}">
										<div class="input-block">
											<label class="form-label">Email <span class="text-danger">*</span></label>
											<input type="email" class="form-control"  placeholder="Enter email">
										</div>
										<div class="input-block">
											<label class="form-label">Password <span class="text-danger">*</span></label>
											<div class="pass-group">
												<input type="password" class="form-control pass-input" placeholder=".............">
												<span class="fas fa-eye-slash toggle-password"></span>
											</div>
										</div>								
										<div class="input-block text-end">
											<a class="forgot-link" href="{{url('forgot-password')}}">Forgot Password ?</a>
										</div>
										<div class="input-block m-0">
											<label class="custom_check d-inline-flex"><span>Remember me</span>
												<input type="checkbox" name="remeber">
												<span class="checkmark"></span>
											</label>
										</div>
										<a href="{{url('index')}}" class="btn btn-outline-light w-100 btn-size mt-1">Sign In</a>
										<div class="login-or">
											<span class="or-line"></span>
											<span class="span-or-log">Or, log in with your email</span>
										</div>
										<!-- Social Login -->
										<div class="social-login">
											<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="{{url::asset('/build/img/icons/google.svg')}}" class="img-fluid" alt="Google"></span>Log in with Google</a>
										</div>
										<div class="social-login">
											<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="{{url::asset('/build/img/icons/facebook.svg')}}" class="img-fluid" alt="Facebook"></span>Log in with Facebook</a>
										</div>
										<!-- /Social Login -->
										<div class="text-center dont-have">Don't have an account ? <a href="{{url('register')}}">Sign Up</a></div>
									</form>							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @endif

    @if (Route::is(['booking-inprogress-calendar']))
    	<!-- Inprogress Booking -->
	<div class="modal new-modal multi-step fade" id="inprogress_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="{{URL::asset('/build/img/cars/car-05.jpg')}}" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Booking Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booking Type</h6>
										<p>Delivery</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Rental Type</h6>
										<p>Days (3 Days)</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Extra Service</h6>
										<p>Mobile Charging</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Delivery</h6>
										<p>45, Avenue ,Mark Street, USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Dropoff</h6>
										<p>78, 10th street Laplace,USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Status</h6>
										<span class="badge badge-light-warning">Inprogress</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booked On</h6>
										<p>15 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Start Date</h6>
										<p>18 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>End Date</h6>
										<p>20 Sep 2023, 09:30 AM</p>
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Personal Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Details</h6>
										<p>Johna Melinda</p>
										<p>+1 56441 56464</p>
										<p>Johna@example.com</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Address</h6>
										<p>78, 10th street</p>
										<p>Laplace,USA</p>
										<p>316 654</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>No of Person’s</h6>
										<p>2 Adults, 1 Child</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-target="#start_ride" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
							Complete Ride
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Inprogress Booking -->

	<!-- Delete Modal -->
	<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="delete-action">
						<div class="delete-header">
							<h4>Delete Booking</h4>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary w-100">
										Delete
									</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary w-100">
										Cancel
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Modal -->

	<!-- Custom Date Modal -->
	<div class="modal new-modal fade" id="custom_date" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Custom Date</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="modal-form-group">
							<label>From Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-form-group">
							<label>To Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-btn modal-btn-sm text-end">
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
								Cancel Booking
							</a>
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
								Start Ride
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Custom Date Modal -->
    @endif
    @if(Route::is(['booking-upcoming-calendar']))
    <!-- Upcoming Booking -->
	<div class="modal new-modal multi-step fade" id="upcoming_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="{{URL::asset('/build/img/cars/car-05.jpg')}}" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Booking Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booking Type</h6>
										<p>Delivery</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Rental Type</h6>
										<p>Days (3 Days)</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Extra Service</h6>
										<p>Mobile Charging</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Delivery</h6>
										<p>45, Avenue ,Mark Street, USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Dropoff</h6>
										<p>78, 10th street Laplace,USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Status</h6>
										<span class="badge badge-light-secondary">Upcoming</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booked On</h6>
										<p>15 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Start Date</h6>
										<p>18 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>End Date</h6>
										<p>20 Sep 2023, 09:30 AM</p>
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Personal Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Details</h6>
										<p>Johna Melinda</p>
										<p>+1 56441 56464</p>
										<p>Johna@example.com</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Address</h6>
										<p>78, 10th street</p>
										<p>Laplace,USA</p>
										<p>316 654</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>No of Person’s</h6>
										<p>2 Adults, 1 Child</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-target="#cancel_ride" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-secondary">
							Cancel Booking
						</a>
						<a href="javascript:void(0);" data-bs-target="#start_rides" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
							Start Ride
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Upcoming Booking -->

	<!-- Edit Booking -->
	<div class="modal new-modal multi-step fade" id="edit_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header border-0 pb-0">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
					<div class="badge-item w-100 text-end">
						<span class="badge badge-light-warning">Inprogress</span>
					</div>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="{{URL::asset('/build/img/cars/car-05.jpg')}}" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Select Location</h6>
							</div>
							<div class="row">
								<div class="col-md-12">								
									<div class="loc-wrap">								
										<div class="modal-form-group loc-item">
											<label>Delivery Location</label>
											<input type="text" class="form-control" placeholder="Enter Location">
										</div>							
										<div class="modal-form-group">
											<label class="d-sm-block">&nbsp;</label>
											<a href="javascript:void(0);" class="btn btn-secondary"><i class="fa-solid fa-location-crosshairs"></i> Current Location</a>
										</div>
									</div>
								</div>
								<div class="col-md-12">								
									<div class="modal-form-group">
										<label>Dropoff Location</label>
										<input type="text" class="form-control" value="78, 10th street Laplace USA">
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6><span class="title-icon"><i class="fa-solid fa-location-dot"></i></span>Select Booking type & Time <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
							</div>							
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio active">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type" checked>
											<span class="checkmark"></span> 
											<span class="rent-option">Hourly</span>
										</label>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type">
											<span class="checkmark"></span> 
											<span class="rent-option">Day (8 Hrs)</span>
										</label>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type">
											<span class="checkmark"></span> 
											<span class="rent-option">Weekly</span>
										</label>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type">
											<span class="checkmark"></span> 
											<span class="rent-option">Monthly</span>
										</label>
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Start Date</label>
										<input type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Start Time</label>
										<input type="time" class="form-control">
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Return Date</label>
										<input type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Return Time</label>
										<input type="time" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6><span class="title-icon"><i class="fa-solid fa-medal"></i></span>Extra Service</h6>
							</div>
							<div class="selectbox-cont">
								<label class="custom_check w-100">
									<input type="checkbox" name="username">
									<span class="checkmark"></span>  Baby Seat  - <span class="amt">$10</span>
								</label>
								<label class="custom_check w-100">
									<input type="checkbox" name="username" checked>
									<span class="checkmark"></span>  Mobile Charging  - <span class="amt">$50</span>
								</label>
								<label class="custom_check w-100">
									<input type="checkbox" name="username">
									<span class="checkmark"></span>  Wi-Fi Hotspot  - <span class="amt">$60</span>
								</label>
								<label class="custom_check w-100">
									<input type="checkbox" name="username">
									<span class="checkmark"></span>  Airport Shuttle Service  - <span class="amt">$90</span>
								</label>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
							Go Back
						</a>
						<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
							Save & Continue
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Booking -->

	<!-- Cancel Reason Modal -->
	<div class="modal new-modal fade" id="cancel_reason" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Cancel Reason</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="reason-item">
						<p>On the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my booking</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Cancel Reason Modal -->

	<!-- Cancel Ride Modal -->
	<div class="modal new-modal fade" id="cancel_ride" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Cancel Reason</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="modal-item cancel-ride">
							<div class="modal-form-group">
								<label>Reason <span class="text-danger">*</span></label>
								<textarea class="form-control" rows="4">The car arrived early & the rep was courteous and polite.</textarea>
							</div>
						</div>
						<div class="modal-btn modal-btn-sm text-end">
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
								Cancel
							</a>
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
								Submit
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Cancel Ride Modal -->

	<!-- Delete Modal -->
	<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="delete-action">
						<div class="delete-header">
							<h4>Delete Booking</h4>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary w-100">
										Delete
									</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary w-100">
										Cancel
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Modal -->

	<!-- Order Success Modal -->
	<div class="modal new-modal order-success-modal fade" id="start_rides" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="order-success-info">
						<span class="order-success-icon">
							<img src="{{URL::asset('/build/img/icons/check-icon.svg')}}" alt="Icon">
						</span>
						<h4>Successful</h4>
						<p>YYou Ride  has been successfully started. Order id : <span>#50641</span></p>
						<div class="modal-btn">
							<a href="{{url('user-dashboard')}}" class="btn btn-secondary">
								Go to Dashboard <i class="feather-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Order Success Modal -->

	<!-- Custom Date Modal -->
	<div class="modal new-modal fade" id="custom_date" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Custom Date</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="modal-form-group">
							<label>From Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-form-group">
							<label>To Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-btn modal-btn-sm text-end">
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
								Cancel Booking
							</a>
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
								Start Ride
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Custom Date Modal -->
    @endif
