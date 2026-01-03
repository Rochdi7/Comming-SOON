<?php $page = 'listing-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Chevrolet Camaro
        @endslot
        @slot('li_1')
            Listings
        @endslot
        @slot('li_2')
            Chevrolet Camaro
        @endslot
    @endcomponent
        <!-- Detail Page Head-->
        <section class="product-detail-head">
            <div class="container">
                <div class="detail-page-head">
                    <div class="detail-headings">
                        <div class="star-rated">
                            <ul class="list-rating">
                            	<li>
	                            	<div class="car-brand">
	                            		<span>
	                            			<img src="{{URL::asset('build/img/icons/car-icon.svg')}}" alt="img">
	                            		</span>
	                            		Sedan
	                            	</div>
	                            </li>
	                            <li>
                                <span class="year">2023</span>
                            </li>
                            <li class="ratings">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-list-rating">(5.0)</span>
                            </li>
                            </ul>
                            <div class="camaro-info">
                                <h3>Chevrolet Camaro</h3>
                                <div class="camaro-location">
                                    <div class="camaro-location-inner">
                                        <i class='bx bx-map'></i>                                        
                                        <span>Location : Miami St, Destin, FL 32550, USA </span> 
                                    </div>
                                    <div class="camaro-location-inner">    
                                        <i class='bx bx-show'></i>                                     
                                        <span>Views : 250 </span>
                                    </div>
                                    <div class="camaro-location-inner">    
                                        <i class='bx bx-car'></i>                                
                                        <span>Views : Listed on: 01 Jan, 2024 </span>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="details-btn">
                    	<span class="total-badge"><i class='bx bx-calendar-edit'></i>Total Booking : 300</span>
                        <a href="#"> <i class='bx bx-git-compare'></i>Compare</a>
                    </div>				  
                </div>
            </div>
        </section>
        <!-- /Detail Page Head-->

        <section class="section product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="detail-product">
	                    	<div class="pro-info">
	                    		<div class="pro-badge">
		                    		<span class="badge-km"><i class="fa-solid fa-person-walking"></i>4.2 Km Away</span>
		                    		<a href="javascript:void(0);" class="fav-icon"><i class="fa-regular fa-heart"></i></a>
		                    	</div>
		                    	<ul>
		                    		<li class="del-airport"><i class="fa-solid fa-check"></i>Airport delivery</li>
		                    		<li class="del-home"><i class="fa-solid fa-check"></i>Home delivery</li>
		                    	</ul>
	                    	</div>
                            <div class="slider detail-bigimg">
                                <div class="product-img">
                                    <img src="{{URL::asset('build/img/cars/slider-01.jpg')}}" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="{{URL::asset('build/img/cars/slider-02.jpg')}}" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="{{URL::asset('build/img/cars/slider-03.jpg')}}" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="{{URL::asset('build/img/cars/slider-04.jpg')}}" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="{{URL::asset('build/img/cars/slider-05.jpg')}}" alt="Slider">
                                </div>
                            </div>
                            <div class="slider slider-nav-thumbnails">
                                <div><img src="{{URL::asset('build/img/cars/slider-thum-01.jpg')}}" alt="product image"></div>
                                <div><img src="{{URL::asset('build/img/cars/slider-thum-02.jpg')}}" alt="product image"></div>
                                <div><img src="{{URL::asset('build/img/cars/slider-thum-03.jpg')}}" alt="product image"></div>
                                <div><img src="{{URL::asset('build/img/cars/slider-thum-04.jpg')}}" alt="product image"></div>
                                <div><img src="{{URL::asset('build/img/cars/slider-thum-05.jpg')}}" alt="product image"></div>
                            </div>
                        </div>
                        <div class="review-sec pb-0">
                            <div class="review-header">
                                <h4>Extra Service</h4>
                            </div>
                            <div class="lisiting-service">
                                <div class="row">
                                    <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-01.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>GPS Navigation Systems</p>
                                        </div>
                                    </div>
                                     <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-02.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>Wi-Fi Hotspot</p>
                                        </div>
                                    </div>
                                     <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-03.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>Child Safety Seats</p>
                                        </div>
                                    </div>
                                     <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-04.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>Fuel Options</p>
                                        </div>
                                    </div>
                                     <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-05.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>Roadside Assistance</p>
                                        </div>
                                    </div>
                                     <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-06.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>Satellite Radio</p>
                                        </div>
                                    </div>
                                     <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-07.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>Additional Accessories</p>
                                        </div>
                                    </div>
                                     <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/icons/service-08.svg')}}" alt="Icon">
                                        </div>
                                        <div class="service-info">
                                            <p>Express Check-in/out</p>
                                        </div>
                                    </div>
                                </div>	
                            </div>	
                        </div>

						<!-- Listing Section -->
                        <div class="review-sec mb-0">
                            <div class="review-header">
                                <h4>Description of Listing</h4>
                            </div>
                            <div class="description-list">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>                                    
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                                    PageMaker including versions of Lorem Ipsum.
                                </p>                                    
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                                <div class="read-more">
                                	<div class="more-text">
		                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
		                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the
		                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
		                                    PageMaker including versions of Lorem Ipsum.
		                                </p>
		                            </div>
	                                <a href="javascript:void(0);" class="more-link">Show More</a>
	                           </div>
                            </div>
                        </div>
                        <!-- /Listing Section -->

                        <!-- Specifications -->
                        <div class="review-sec specification-card ">
                            <div class="review-header">
                                <h4>Specifications</h4>
                            </div>
                            <div class="card-body">
                            <div class="lisiting-featues">
                                <div class="row">
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-1.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Body </span>
                                            <h6> Sedan</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-2.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Make </span>
                                            <h6> Nisssan</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-3.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Transmission </span>
                                            <h6> Automatic</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-4.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Fuel Type </span>
                                            <h6> Diesel</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-5.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Mileage </span>
                                            <h6>16 Km</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-6.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Drivetrian </span>
                                            <h6>Front Wheel</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-7.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Year</span>
                                            <h6> 2018</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-8.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>AC </span>
                                            <h6> Air Condition</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-9.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>VIN </span>
                                            <h6> 45456444</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-10.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Door </span>
                                            <h6> 4 Doors</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-11.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Brake </span>
                                            <h6> ABS</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{URL::asset('build/img/specification/specification-icon-12.svg')}}" alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Engine (Hp) </span>
                                            <h6> 3,000</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>	
                            </div>	
                        </div>	
                        <!-- Specifications -->

                        <!-- Car Features -->	
                        <div class="review-sec listing-feature">
                            <div class="review-header">
                                <h4>Car Features</h4>
                            </div>
                            <div class="listing-description">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><span><i class="bx bx-check-double"></i></span>Multi-zone A/C</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Heated front seats</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Andriod Auto</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Navigation system</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><span><i class="bx bx-check-double"></i></span>Premium sound system</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Bluetooth</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Keyles Start</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Memory seat</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><span><i class="bx bx-check-double"></i></span>6 Cylinders</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Adaptive Cruise Control</li>
                                            <li><span><i class="bx bx-check-double"></i></span>Intermittent wipers</li>
                                            <li><span><i class="bx bx-check-double"></i></span>4 power windows</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Features -->	

                        <!-- Tariff -->	
                        <div class="review-sec listing-feature">
                            <div class="review-header">
                                <h4>Tariff</h4>
                            </div>
                            <div class="table-responsive">
								<table class="table border mb-3">
									<thead class="thead-dark">
										<tr>
											<th>Name</th>
											<th>Daily Price</th>
											<th>Base Kilometers</th>
											<th>Kilometers Extra Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>4 to 5 Days</td>
											<td>$150</td>
											<td>25</td>
											<td>$28</td>
										</tr>
										<tr>
											<td>5 to 8 Days</td>
											<td>$250</td>
											<td>90</td>
											<td>$45</td>
										</tr>
										<tr>
											<td>8 to 15 Days</td>
											<td>$380</td>
											<td>120</td>
											<td>$60</td>
										</tr>
										<tr>
											<td>16 to 25 Days</td>
											<td>$500</td>
											<td>500</td>
											<td>$80</td>
										</tr>
									</tbody>
								</table>
							</div>
                        </div>
                        <!-- /Tariff -->	

                        <!-- Gallery -->	
                        <div class="review-sec mb-0 pb-0">
                            <div class="review-header">
                                <h4>Gallery</h4>
                            </div>
                            <div class="gallery-list">
                                <ul>
                                	<li>
                                		<div class="gallery-widget">
											<a href="{{URL::asset('build/img/gallery/gallery-big-01.jpg')}}" data-fancybox="gallery1">
												<img class="img-fluid" alt="Image" src="{{URL::asset('build/img/gallery/gallery-thumb-01.jpg')}}">
											</a>
										</div>
                                	</li>
                                	<li>
                                		<div class="gallery-widget">
											<a href="{{URL::asset('build/img/gallery/gallery-big-02.jpg')}}" data-fancybox="gallery1">
												<img class="img-fluid" alt="Image" src="{{URL::asset('build/img/gallery/gallery-thumb-02.jpg')}}">
											</a>
										</div>
                                	</li>
                                	<li>
                                		<div class="gallery-widget">
											<a href="{{URL::asset('build/img/gallery/gallery-big-03.jpg')}}" data-fancybox="gallery1">
												<img class="img-fluid" alt="Image" src="{{URL::asset('build/img/gallery/gallery-thumb-03.jpg')}}">
											</a>
										</div>
                                	</li>
                                	<li>
                                		<div class="gallery-widget">
											<a href="{{URL::asset('build/img/gallery/gallery-big-04.jpg')}}" data-fancybox="gallery1">
												<img class="img-fluid" alt="Image" src="{{URL::asset('build/img/gallery/gallery-thumb-04.jpg')}}">
											</a>
										</div>
                                	</li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Gallery -->	
                        
                        <!-- Video -->	
                        <div class="review-sec mb-0">
                            <div class="review-header">
                                <h4>Video</h4>
                            </div>
                            <div class="short-video">
                            	<img class="img-fluid" alt="Image" src="{{URL::asset('build/img/video-img.jpg')}}">
                            	<a href="https://www.youtube.com/embed/ExJZAegsOis" data-fancybox="video" class="video-icon">
                            		<i class="bx bx-play"></i>
                            	</a>
                            </div>
                        </div>
                        <!-- /Video -->	

                        <!-- FAQ -->	
                        <div class="review-sec faq-feature">
                            <div class="review-header">
                                <h4>FAQ’s</h4>
                            </div>
                            <div class="faq-info">
								<div class="faq-card">
									<h4 class="faq-title">
										<a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">How old do I need to be to rent a car?</a>
									</h4>
									<div id="faqOne" class="card-collapse collapse">
										<p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
									</div>
								</div>	
								<div class="faq-card">
									<h4 class="faq-title">
										<a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">What documents do I need to rent a car?</a>
									</h4>
									<div id="faqTwo" class="card-collapse collapse">
										<p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
									</div>
								</div>
								<div class="faq-card">
									<h4 class="faq-title">
										<a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">What types of vehicles are available for rent?</a>
									</h4>
									<div id="faqThree" class="card-collapse collapse">
										<p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
									</div>
								</div>	
								<div class="faq-card">
									<h4 class="faq-title">
										<a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Can I rent a car with a debit card?</a>
									</h4>
									<div id="faqFour" class="card-collapse collapse">
										<p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
									</div>
								</div>													
							</div>	
                        </div>
                        <!-- /FAQ -->	

                        <!-- Policies -->	
                        <div class="review-sec">
                            <div class="review-header">
                                <h4>Policies</h4>
                            </div>
                            <div class="policy-list">
                                <div class="policy-item">
                                	<div class="policy-info">
                                		<h6>Cancellation Charges</h6>
                                		<p>Cancellation charges will be applied as per the policy</p>
                                	</div>
                                	<a href="{{url('privacy-policy')}}">Know More</a>
                                </div>
                                <div class="policy-item">
                                	<div class="policy-info">
                                		<h6>Policy</h6>
                                		<p>I hereby agree to the terms and conditions of the Lease Agreement with Host</p>
                                	</div>
                                	<a href="{{url('privacy-policy')}}">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- /Policies -->

                        <!-- Reviews -->
                        <div class="review-sec listing-review">
                            <div class="review-header">
                                <h4>Reviews</h4>
                            </div>
                            <div class="rating-wrapper">
                            	<div class="rating-wraps">
                                    <h2>4.5<span>/5</span></h2>
                                    <p>Excellent</p>
                                	<h6>Based on 256 Reviews</h6>
                                </div>
                                <div class="rating-progress">
	                                <div class="progress-info">
	                                   <h6>Service</h6>
	                                   <div class="progress" role="progressbar">
	  										<div class="progress-bar bg-primary" style="width: 70%"></div>
											</div>
	                                    <div class="progress-percent">4.6</div>
	                                </div>
	                                <div class="progress-info">
	                                   <h6>Location</h6>
	                                   <div class="progress" role="progressbar">
	  										<div class="progress-bar bg-primary" style="width: 85%"></div>
											</div>
	                                    <div class="progress-percent">4.8</div>
	                                </div>
	                                <div class="progress-info">
	                                   <h6>Value for Money</h6>
	                                   <div class="progress" role="progressbar">
	  										<div class="progress-bar bg-primary" style="width: 60%"></div>
											</div>
	                                    <div class="progress-percent">3.0</div>
	                                </div>
	                                <div class="progress-info">
	                                   <h6>Facilities</h6>
	                                   <div class="progress" role="progressbar">
	  										<div class="progress-bar bg-primary" style="width: 65%"></div>
											</div>
	                                    <div class="progress-percent">4.5</div>
	                                </div>
	                                <div class="progress-info">
	                                   <h6>Cleanliness</h6>
	                                   <div class="progress" role="progressbar">
	  										<div class="progress-bar bg-primary" style="width: 90%"></div>
											</div>
	                                    <div class="progress-percent">4.8</div>
	                                </div>
                                </div>
                            </div>
                            <div  class="review-card">
                            	<div class="review-head">
                            		<h6>Showing 3 guest reviews</h6>
                            	</div>
	                            <ul>
	                            	<li>
			                            <div class="review-wraps">
			                                <div class="review-header-group">
			                                    <div class="review-widget-header">
			                                        <span class="review-widget-img">
			                                            <img src="{{URL::asset('build/img/profiles/avatar-01.jpg')}}"  class="img-fluid" alt="User">
			                                        </span>
			                                        <div class="review-design">
			                                            <h6>Johnson</h6>
			                                            <p>02 Jan 2023</p>
			                                        </div>
			                                    </div>
			                                    <div class="reviewbox-list-rating">
			                                        <p>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>	
			                                            <span> (5.0)</span> 
			                                        </p>
			                                    </div>
			                                </div>						
			                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s </p>
			                                <div class="review-reply">
			                                    <a class="btn" href="#">
			                                    	<i class="fa-solid fa-reply"></i>Reply
			                                     </a>
			                                     <div class="review-action">
			                                     	<a href="#"><i class="fa-regular fa-thumbs-up"></i>10</a>
			                                        <a href="#"><i class="fa-regular fa-thumbs-down"></i>12</a>
			                                        <a href="#"><i class="fa-regular fa-heart"></i>15</a>
			                                   	</div>
			                                </div>
			                            </div>
			                            <ul>
			                            	<li>
					                            <div class="review-wraps">
					                                <div class="review-header-group">
					                                    <div class="review-widget-header">
					                                        <span class="review-widget-img">
					                                            <img src="{{URL::asset('build/img/profiles/avatar-01.jpg')}}"  class="img-fluid" alt="User">
					                                        </span>
					                                        <div class="review-design">
					                                            <h6>Johnson</h6>
					                                            <p>02 Jan 2023</p>
					                                        </div>
					                                    </div>
					                                    <div class="reviewbox-list-rating">
					                                        <p>
					                                            <i class="fas fa-star filled"></i>
					                                            <i class="fas fa-star filled"></i>
					                                            <i class="fas fa-star filled"></i>
					                                            <i class="fas fa-star filled"></i>
					                                            <i class="fas fa-star filled"></i>	
					                                            <span> (5.0)</span> 
					                                        </p>
					                                    </div>
					                                </div>						
					                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s </p>
					                                <div class="review-reply">
					                                    <a class="btn" href="#">
					                                    	<i class="fa-solid fa-reply"></i>Reply
					                                     </a>
					                                     <div class="review-action">
					                                     	<a href="#"><i class="fa-regular fa-thumbs-up"></i>10</a>
					                                        <a href="#"><i class="fa-regular fa-thumbs-down"></i>12</a>
					                                        <a href="#"><i class="fa-regular fa-heart"></i>15</a>
					                                   	</div>
					                                </div>
					                            </div>
					                        </li>
			                            </ul>
			                        </li>
			                        <li>
			                            <div class="review-wraps wrap-card">
			                                <div class="review-header-group">
			                                     <div class="review-widget-header">
			                                        <span class="review-widget-img">
			                                            <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}"  class="img-fluid" alt="User">
			                                        </span>
			                                        <div class="review-design">
			                                            <h6>Casandra</h6>
			                                            <p>Reviewed 25 March 2024</p>
			                                        </div>
			                                    </div>
			                                    <div class="reviewbox-list-rating">
			                                        <p>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>
			                                            <i class="fas fa-star filled"></i>	
			                                            <span> (5.0)</span> 
			                                        </p>
			                                    </div>
			                                </div>						
			                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the elease of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page Maker including versions of Lorem Ipsum.</p>
			                                <div class="review-reply">
			                                    <a class="btn" href="#">
			                                    	<i class="fa-solid fa-reply"></i>Reply
			                                     </a>
			                                     <div class="review-action">
			                                     	<a href="#"><i class="fa-regular fa-thumbs-up"></i>10</a>
			                                        <a href="#"><i class="fa-regular fa-thumbs-down"></i>12</a>
			                                        <a href="#"><i class="fa-regular fa-heart"></i>15</a>
			                                   	</div>
			                                </div>
			                            </div>
			                        </li>
		                        </ul>
		                    </div>
                        </div>
                        <!-- /Reviews -->

                        <!-- Leave a Reply -->
                        <div class="review-sec leave-reply-form mb-0">
                            <div class="review-header">
                                <h4>Leave a Reply</h4>
                            </div>
                            <div class="review-list-rating">
                                <div class="row">
	                                <div class="col-xl-4 col-md-6">
	                                   <div class="set-rating">
	                                   		<p>Service</p>
	                                   		<div class="rating-selection">
                                                <input type="checkbox" id="service1" value="1">
                                                <label for="service1"></label>
                                                <input type="checkbox" id="service2" value="2">
                                                <label for="service2"></label>
                                                <input type="checkbox" id="service3" value="3">
                                                <label for="service3"></label>
                                                <input type="checkbox" id="service4" value="4">
                                                <label for="service4"></label>
                                                <input type="checkbox" id="service5" value="5">
                                                <label for="service5"></label>
                                           	</div>
	                                   </div>
	                                </div>
	                                 <div class="col-xl-4 col-md-6">
	                                   <div class="set-rating">
	                                   		<p>Location</p>
	                                   		<div class="rating-selection">
                                                <input type="checkbox" id="loc1" value="1">
                                                <label for="loc1"></label>
                                                <input type="checkbox" id="loc2" value="2">
                                                <label for="loc2"></label>
                                                <input type="checkbox" id="loc3" value="3">
                                                <label for="loc3"></label>
                                                <input type="checkbox" id="loc4" value="4">
                                                <label for="loc4"></label>
                                                <input type="checkbox" id="loc5" value="5">
                                                <label for="loc5"></label>
                                           	</div>
	                                   </div>
	                                </div>
	                                 <div class="col-xl-4 col-md-6">
	                                   <div class="set-rating">
	                                   		<p>Facilities</p>
	                                   		<div class="rating-selection">
                                                <input type="checkbox" id="fac1" value="1">
                                                <label for="fac1"></label>
                                                <input type="checkbox" id="fac2" value="2">
                                                <label for="fac2"></label>
                                                <input type="checkbox" id="fac3" value="3">
                                                <label for="fac3"></label>
                                                <input type="checkbox" id="fac4" value="4">
                                                <label for="fac4"></label>
                                                <input type="checkbox" id="fac5" value="5">
                                                <label for="fac5"></label>
                                           	</div>
	                                   </div>
	                                </div>
	                                 <div class="col-xl-4 col-md-6">
	                                   <div class="set-rating">
	                                   		<p>Value for Money</p>
	                                   		<div class="rating-selection">
                                                <input type="checkbox" id="val1" value="1">
                                                <label for="val1"></label>
                                                <input type="checkbox" id="val2" value="2">
                                                <label for="val2"></label>
                                                <input type="checkbox" id="val3" value="3">
                                                <label for="val3"></label>
                                                <input type="checkbox" id="val4" value="4">
                                                <label for="val4"></label>
                                                <input type="checkbox" id="val5" value="5">
                                                <label for="val5"></label>
                                           	</div>
	                                   </div>
	                                </div>
	                                 <div class="col-xl-4 col-md-6">
	                                   <div class="set-rating">
	                                   		<p>Cleanliness</p>
	                                   		<div class="rating-selection">
                                                <input type="checkbox" id="clean1" value="1">
                                                <label for="clean1"></label>
                                                <input type="checkbox" id="clean2" value="2">
                                                <label for="clean2"></label>
                                                <input type="checkbox" id="clean3" value="3">
                                                <label for="clean3"></label>
                                                <input type="checkbox" id="clean4" value="4">
                                                <label for="clean4"></label>
                                                <input type="checkbox" id="clean5" value="5">
                                                <label for="clean5"></label>
                                           	</div>
	                                   </div>
	                                </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="review-list">
                                    <ul>
                                        <li class="review-box feedbackbox mb-0">
                                            <div class="review-details">
                                                <form class="#">
                                                    <div class="row">
                                                        <div class="col-lg-6">												
                                                            <div class="input-block">														
                                                                <label>Full Name <span class="text-danger">*</span></label>	
                                                                <input type="text" class="form-control" placeholder="Your name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">													
                                                            <div class="input-block">
                                                                <label>Email Address <span class="text-danger">*</span></label>	
                                                                <input type="email" class="form-control" placeholder="Your email Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-block">
                                                                <label>Comments </label>	
                                                                <textarea rows="4" class="form-control" placeholder="Comments"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submit-btn text-end">
                                                        <button class="btn btn-primary submit-review" type="submit"> Submit Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Leave a Reply -->

                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                    	<div class="review-sec mt-0">
                            <div class="review-header">
                                <h4>Pricing</h4>
                            </div>
							<div class="mb-3">
								<label class="booking_custom_check bookin-check-2" >
									<input type="radio" name="price_rate" checked="">
									<span class="booking_checkmark">
										<span class="checked-title">Daily</span>
										<span class="price-rate">$300</span>		
									</span>			
								</label>
								<label class="booking_custom_check bookin-check-2" >
									<input type="radio" name="price_rate">
									<span class="booking_checkmark">
										<span class="checked-title">Weekly</span>
										<span class="price-rate">$820</span>		
									</span>			
								</label>
								<label class="booking_custom_check bookin-check-2" >
									<input type="radio" name="price_rate">
									<span class="booking_checkmark">
										<span class="checked-title">Monthly</span>
										<span class="price-rate">$2400</span>		
									</span>			
								</label>
								<label class="booking_custom_check bookin-check-2" >
									<input type="radio" name="price_rate">
									<span class="booking_checkmark">
										<span class="checked-title">Yearly</span>
										<span class="price-rate">$9400</span>		
									</span>			
								</label>
							</div>
                            <div class="location-content">
                            	<div class="delivery-tab">	
	                            	<ul class="nav">
	                            		<li>
		                            		<label class="booking_custom_check" >
												<input type="radio" name="rent_type" checked="">
												<span class="booking_checkmark">
													<span class="checked-title">Delivery</span>
												</span>							
											</label>
	                            		</li>
	                            		<li>
		                            		<label class="booking_custom_check">
												<input type="radio" name="rent_type">
												<span class="booking_checkmark">
													<span class="checked-title">Self Pickup</span>
												</span>							
											</label>
	                            		</li>
	                            	</ul>	
	                            </div>
	                            <div class="tab-content">
	                            	<div class="tab-pane fade active show" id="delivery">
		                                <form class="">
		                                    <ul>
		                                        <li class="column-group-main">
		                                            <div class="input-block">
		                                                <label>Delivery Location</label>
		                                                <div class="group-img">
		                                                	<div class="form-wrap">
		                                                    	<input type="text" class="form-control" placeholder="45, 4th Avanue  Mark Street USA">
		                                                    	<span class="form-icon">
		                                                    		<i class="fa-solid fa-location-crosshairs"></i>
		                                                    	</span>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </li>
		                                        <li class="column-group-main">
			                                        <div class="input-block">
														<label class="custom_check d-inline-flex location-check m-0"><span>Return to same location</span>
															<input type="checkbox" name="remeber">
															<span class="checkmark"></span>
														</label>
													</div>
												</li>
		                                        <li class="column-group-main">
		                                            <div class="input-block">
		                                                <label>Return Location</label>										
		                                                <div class="group-img">
		                                                	<div class="form-wrap">
		                                                    	<input type="text" class="form-control" placeholder="78, 10th street Laplace USA">
		                                                    	<span class="form-icon">
		                                                    		<i class="fa-solid fa-location-crosshairs"></i>
		                                                    	</span>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </li>
		                                        <li class="column-group-main">						
		                                            <div class="input-block m-0">	
		                                            	<label>Pickup Date</label>
		                                            </div>
		                                            <div class="input-block-wrapp sidebar-form">
		                                                <div class="input-block  me-lg-2">											
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
			                                                    	<input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-calendar-days"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                                <div class="input-block">											
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
			                                                    	<input type="text" class="form-control timepicker" placeholder="11:00 AM">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-clock"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                            </div>	
		                                        </li>
		                                        <li class="column-group-main">						
		                                            <div class="input-block m-0">		                                       		<label>Return Date</label>
		                                            </div>
		                                            <div class="input-block-wrapp sidebar-form">
		                                                <div class="input-block me-lg-2">												
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
		                                                    		<input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-calendar-days"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                                <div class="input-block">											
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
		                                                    		<input type="text" class="form-control timepicker" placeholder="11:00 AM">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-clock"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                            </div>	
		                                        </li>
		                                        <li class="column-group-last">
		                                            <div class="input-block mb-0">
		                                                <div class="search-btn">
		                                                    <a href="{{url('booking-checkout')}}" class="btn btn-primary check-available w-100">Book</a>
		                                                     <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#enquiry" class="btn btn-theme">Enquire Us</a>
		                                                </div>
		                                            </div>
		                                        </li>
		                                    </ul>
		                                </form>	
		                            </div>
	                            	<div class="tab-pane fade" id="pickup">
		                                <form class="">
		                                    <ul>
		                                        <li class="column-group-main">
		                                            <div class="input-block">
		                                                <label>Delivery Location</label>
		                                                <div class="group-img">
		                                                	<select class="select">
		                                                		<option>Newyork Office - 78, 10th street Laplace USA</option>
		                                                		<option>Newyork Office - 12, 5th street USA</option>
		                                                	</select>
		                                                </div>
		                                            </div>
		                                        </li>
		                                        <li class="column-group-main">
			                                        <div class="input-block">
														<label class="custom_check d-inline-flex location-check m-0"><span>Return to same location</span>
															<input type="checkbox" name="remeber">
															<span class="checkmark"></span>
														</label>
													</div>
												</li>
		                                        <li class="column-group-main">
		                                            <div class="input-block">
		                                                <label>Delivery Location</label>
		                                                <div class="group-img">
		                                                	<select class="select">
		                                                		<option>Newyork Office - 78, 10th street Laplace USA</option>
		                                                		<option>Newyork Office - 12, 5th street USA</option>
		                                                	</select>
		                                                </div>
		                                            </div>
		                                        </li>
		                                        <li class="column-group-main">
		                                            <div class="input-block">
		                                                <label>Return Location</label>										
		                                                <div class="group-img">
		                                                	<div class="form-wrap">
		                                                    	<input type="text" class="form-control" placeholder="78, 10th street Laplace USA">
		                                                    	<span class="form-icon">
		                                                    		<i class="fa-solid fa-location-crosshairs"></i>
		                                                    	</span>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </li>
		                                        <li class="column-group-main">						
		                                            <div class="input-block m-0">	
		                                            	<label>Pickup Date</label>
		                                            </div>
		                                            <div class="input-block-wrapp sidebar-form">
		                                                <div class="input-block  me-lg-2">											
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
			                                                    	<input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-calendar-days"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                                <div class="input-block">											
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
			                                                    	<input type="text" class="form-control timepicker" placeholder="11:00 AM">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-clock"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                            </div>	
		                                        </li>
		                                        <li class="column-group-main">						
		                                            <div class="input-block m-0">		                                       		<label>Return Date</label>
		                                            </div>
		                                            <div class="input-block-wrapp sidebar-form">
		                                                <div class="input-block me-2">												
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
		                                                    		<input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-calendar-days"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                                <div class="input-block">											
		                                                    <div class="group-img">
		                                                    	<div class="form-wrap">
		                                                    		<input type="text" class="form-control timepicker" placeholder="11:00 AM">
			                                                    	<span class="form-icon">
			                                                    		<i class="fa-regular fa-clock"></i>
			                                                    	</span>
			                                                    </div>
		                                                    </div>
		                                                </div>
		                                            </div>	
		                                        </li>
		                                        <li class="column-group-last">
		                                            <div class="input-block mb-0">
		                                                <div class="search-btn">
		                                                    <a href="{{url('booking-checkout')}}" class="btn btn-primary check-available w-100">Book</a>
		                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#enquiry" class="btn btn-theme">Enquire Us</a>
		                                                </div>
		                                            </div>
		                                        </li>
		                                    </ul>
		                                </form>	
		                            </div>
		                        </div>
                            </div>	
                        </div>
                        <div class="review-sec extra-service mt-0">
                            <div class="review-header">
                                <h4>Listing Owner Details</h4>
                            </div>
                            <div class="owner-detail">
                                <div class="owner-img">
                                    <a href="#"><img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="User"></a>
                                    <span class="badge-check"><img src="{{URL::asset('build/img/icons/badge-check.svg')}}" alt="User"></span>
                                </div>
                                <div class="reviewbox-list-rating">
                                    <h5><a>Brooklyn Cars</a></h5>
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>	
                                        <span> (5.0)</span> 
                                    </p>
                                </div>
                            </div>
                            <ul class="booking-list">
                                <li>
                                    Email
                                    <span>info@example.com</span>
                                </li>
                                <li>
                                    Phone Number
                                    <span>+1 14XXX XXX78</span>
                                </li>
                                <li>
                                    Location
                                    <span>4635 Pheasant Ridge Road, City Hollywood, USA</span>
                                </li>
                            </ul>
                            <div class="message-btn">
                                <a href="#" class="btn btn-order">Message to owner</a>
                                <a href="#" class="chat-link"><i class="fa-brands fa-whatsapp"></i>Chat Via Whatsapp</a>
                            </div>	
                        </div>
                        <div class="review-sec share-car mt-0">
                            <div class="review-header">
                                <h4>View Car Location</h4>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin" class="iframe-video"></iframe>
                        </div>
                        <div class="review-sec share-car mt-0 mb-0">
                            <div class="review-header">
                                <h4>Share</h4>
                            </div>
                            <ul class="nav-social">
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">               
                    <div class="col-md-12">
                        <div class="details-car-grid">
                            <div class="details-slider-heading">
                                <h3>You May be Interested in</h3>
                            </div>
                            <div class="owl-carousel rental-deal-slider details-car owl-theme">

							<!-- owl carousel item -->
						    <div class="rental-car-item">
								<div class="listing-item pb-0">											
									<div class="listing-img">
										<a href="{{url('listing-details')}}">
											<img src="{{URL::asset('build/img/cars/car-03.jpg')}}" class="img-fluid" alt="Audi">
										</a>
										<div class="fav-item justify-content-end">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="feather-heart"></i>
											</a>										
										</div>	
										<span class="featured-text">Audi</span>
									</div>										
									<div class="listing-content">
										<div class="listing-features d-flex align-items-end justify-content-between">
											<div class="list-rating">
												<a href="javascript:void(0)" class="author-img">
													<img src="{{URL::asset('build/img/profiles/avatar-03.jpg')}}" alt="author">
												</a>
												<h3 class="listing-title">
													<a href="{{url('listing-details')}}">Audi A3 2019 new</a>
												</h3>																	  
												<div class="list-rating">							
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span>(4.0) 150 Reviews</span>
												</div>
											</div>
											<div class="list-km">
												<span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.5m</span>
											</div>
										</div> 
										<div class="listing-details-group">
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="Manual"></span>
													<p>Manual</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM"></span>
													<p>10 KM</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
													<p>Petrol</p>
												</li>
											</ul>	
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Power"></span>
													<p>Power</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2019"></span>
													<p>2019</p>	
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
													<p>4 Persons</p>
												</li>
											</ul>
										</div>																 
										<div class="listing-location-details">
											<div class="listing-price">
												<span><i class="feather-map-pin"></i></span>Newyork, USA
											</div>
											<div class="listing-price">
												<h6>$45 <span>/ Day</span></h6>
											</div>
										</div>
										<div class="listing-button">
											<a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
										</div>	
									</div>
								</div>	
							</div>
							<!-- /owl carousel item -->

							<!-- owl carousel item -->
						    <div class="rental-car-item">
								<div class="listing-item pb-0">										
									<a href="{{url('listing-details')}}">
										<img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
									</a>							
									<div class="listing-content">
										<div class="listing-features d-flex align-items-end justify-content-between">
											<div class="list-rating">
												<a href="javascript:void(0)" class="author-img">
													<img src="{{URL::asset('build/img/profiles/avatar-04.jpg')}}" alt="author">
												</a>
												<h3 class="listing-title">
													<a href="{{url('listing-details')}}">Toyota Camry SE 350</a>
												</h3>																	  
												<div class="list-rating">							
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span>(4.0) 138 Reviews</span>
												</div>
											</div>
											<div class="list-km">
												<span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.2m</span>
											</div>
										</div> 
										<div class="listing-details-group">
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
													<p>Auto</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM"></span>
													<p>10 KM</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
													<p>Petrol</p>
												</li>
											</ul>	
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Power"></span>
													<p>Power</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018"></span>
													<p>2018</p>	
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
													<p>5 Persons</p>
												</li>
											</ul>
										</div>																 
										<div class="listing-location-details">
											<div class="listing-price">
												<span><i class="feather-map-pin"></i></span>Washington
											</div>
											<div class="listing-price">
												<h6>$160 <span>/ Day</span></h6>
											</div>
										</div>
										<div class="listing-button">
											<a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
										</div>	
									</div>
									<div class="feature-text">
										<span class="bg-danger">Featured</span>
									</div>
								</div>		
							</div>
							<!-- /owl carousel item -->

							<!-- owl carousel item -->
						    <div class="rental-car-item">
								<div class="listing-item pb-0">											
									<div class="listing-img">
										<a href="{{url('listing-details')}}">
											<img src="{{URL::asset('build/img/cars/car-04.jpg')}}" class="img-fluid" alt="Audi">
										</a>
										<div class="fav-item justify-content-end">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="feather-heart"></i>
											</a>										
										</div>	
										<span class="featured-text">Ferrai</span>
									</div>										
									<div class="listing-content">
										<div class="listing-features d-flex align-items-end justify-content-between">
											<div class="list-rating">
												<a href="javascript:void(0)" class="author-img">
													<img src="{{URL::asset('build/img/profiles/avatar-04.jpg')}}" alt="author">
												</a>
												<h3 class="listing-title">
													<a href="{{url('listing-details')}}">Ferrari 458 MM Speciale</a>
												</h3>																	  
												<div class="list-rating">							
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span>(4.0) 160 Reviews</span>
												</div>
											</div>
											<div class="list-km">
												<span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.5m</span>
											</div>
										</div> 
										<div class="listing-details-group">
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="Manual"></span>
													<p>Manual</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="14 KM"></span>
													<p>14 KM</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Diesel"></span>
													<p>Diesel</p>
												</li>
											</ul>	
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Basic"></span>
													<p>Basic</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2022"></span>
													<p>2022</p>	
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
													<p>5 Persons</p>
												</li>
											</ul>
										</div>																 
										<div class="listing-location-details">
											<div class="listing-price">
												<span><i class="feather-map-pin"></i></span>Newyork, USA
											</div>
											<div class="listing-price">
												<h6>$160 <span>/ Day</span></h6>
											</div>
										</div>
										<div class="listing-button">
											<a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
										</div>	
									</div>	
									<div class="feature-text">
										<span class="bg-danger">Featured</span>
									</div>	 
								</div>	
							</div>
							<!-- /owl carousel item -->

							<!-- owl carousel item -->
						    <div class="rental-car-item">
								<div class="listing-item pb-0">											
									<div class="listing-img">
										<a href="{{url('listing-details')}}">
											<img src="{{URL::asset('build/img/cars/car-05.jpg')}}" class="img-fluid" alt="Audi">
										</a>
										<div class="fav-item justify-content-end">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="feather-heart"></i>
											</a>										
										</div>
										<span class="featured-text">Chevrolet</span>	
									</div>										
									<div class="listing-content">
										<div class="listing-features d-flex align-items-end justify-content-between">
											<div class="list-rating">
												<a href="javascript:void(0)" class="author-img">
													<img src="{{URL::asset('build/img/profiles/avatar-05.jpg')}}" alt="author">
												</a>
												<h3 class="listing-title">
													<a href="{{url('listing-details')}}">2018 Chevrolet Camaro</a>
												</h3>																	  
												<div class="list-rating">							
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<span>(5.0) 200 Reviews</span>
												</div>
											</div>
											<div class="list-km">
												<span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.5m</span>
											</div>
										</div> 
										<div class="listing-details-group">
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="Manual"></span>
													<p>Manual</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="18 KM"></span>
													<p>18 KM</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Diesel"></span>
													<p>Diesel</p>
												</li>
											</ul>	
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Power"></span>
													<p>Power</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018"></span>
													<p>2018</p>	
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
													<p>4 Persons</p>
												</li>
											</ul>
										</div>																 
										<div class="listing-location-details">
											<div class="listing-price">
												<span><i class="feather-map-pin"></i></span>Germany
											</div>
											<div class="listing-price">
												<h6>$36 <span>/ Day</span></h6>
											</div>
										</div>
										<div class="listing-button">
											<a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
										</div>	
									</div>
									<div class="feature-text">
										<span class="bg-warning">Top Rated</span>
									</div>	
								</div>	
							</div>
							<!-- /owl carousel item -->

							<!-- owl carousel item -->
						    <div class="rental-car-item">
								<div class="listing-item">											
									<div class="listing-img">
										<a href="{{url('listing-details')}}">
											<img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid" alt="Audi">
										</a>
										<div class="fav-item justify-content-end">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="feather-heart"></i>
											</a>										
										</div>	
										<span class="featured-text">Acura</span>
									</div>										
									<div class="listing-content">
										<div class="listing-features d-flex align-items-end justify-content-between">
											<div class="list-rating">
												<a href="javascript:void(0)" class="author-img">
													<img src="{{URL::asset('build/img/profiles/avatar-06.jpg')}}" alt="author">
												</a>
												<h3 class="listing-title">
													<a href="{{url('listing-details')}}">Acura Sport Version</a>
												</h3>																	  
												<div class="list-rating">							
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span>(4.0) 125 Reviews</span>
												</div>
											</div>
											<div class="list-km">
												<span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.2m</span>
											</div>
										</div> 
										<div class="listing-details-group">
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
													<p>Auto</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="12 KM"></span>
													<p>12 KM</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Diesel"></span>
													<p>Diesel</p>
												</li>
											</ul>	
											<ul>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Power"></span>
													<p>Power</p>
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2013"></span>
													<p>2013</p>	
												</li>
												<li>
													<span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
													<p>5 Persons</p>
												</li>
											</ul>
										</div>																 
										<div class="listing-location-details">
											<div class="listing-price">
												<span><i class="feather-map-pin"></i></span>Newyork, USA
											</div>
											<div class="listing-price">
												<h6>$30 <span>/ Day</span></h6>
											</div>
										</div>
										<div class="listing-button">
											<a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
										</div>	
									</div>
								</div>	
							</div>
							<!-- /owl carousel item -->

						</div>	
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
