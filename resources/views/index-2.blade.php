<?php $page = 'index-2'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Banner -->
    <section class="banner-section banner-slider">		
        <div class="container">
            <div class="home-banner">		
                <div class="row align-items-center">					    
                    <div class="col-lg-6" data-aos="fade-down">
                        <p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>100% Trusted car rental platform in the World</p>
                        <h1><span>Find Your Best</span> <br>									
                        Dream Car for Rental</h1>
                        <p>Experience the ultimate in comfort, performance, and sophistication with our luxury car rentals. From sleek sedans and stylish coupes to spacious SUVs and elegant convertibles, we offer a range of premium vehicles to suit your preferences and lifestyle. </p>
                        <div class="view-all">
                            <a href="{{url('listing-grid')}}" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="banner-imgs">
                            <img src="{{URL::asset('build/img/car-right.png')}}" class="img-fluid aos" alt="bannerimage">							
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </section>
    <!-- /Banner -->
    
    <!-- Search -->	
    <div class="section-search"> 
        <div class="container">	  
            <div class="search-box-banner">
                <form action="{{url('listing-grid')}}">
                    <ul class="align-items-center">
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Pickup Location</label>												
                                <div class="group-img">
                                    <input type="text" class="form-control" placeholder="Enter City, Airport, or Address">
                                    <span><i class="feather-map-pin"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-main">						
                            <div class="input-block">																	
                                <label>Pickup Date</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widget">												
                                    <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">											
                                    <div class="group-img">
                                    <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>	
                        </li>
                        <li class="column-group-main">						
                            <div class="input-block">																	
                                <label>Return Date</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widge">												
                                    <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">											
                                    <div class="group-img">
                                    <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>	
                        </li>
                        <li class="column-group-last">
                            <div class="input-block">
                                <div class="search-btn">
                                    <button class="btn search-button" type="submit"> <i class="fa fa-search" aria-hidden="true"></i>Search</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>	
            </div>
        </div>	
    </div>	
    <!-- /Search -->

    <!-- services -->
    <section class="section services">
        <div class="service-right">
            <img src="{{URL::asset('build/img/bg/service-right.svg')}}" class="img-fluid" alt="services right">
        </div>		
        <div class="container">	
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>How It Works</h2>
                <p>Booking a car rental is a straightforward process that typically involves the following steps</p>
            </div>
            <!-- /Heading title -->
            <div class="services-work">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-date flex-fill">
                            <div class="services-icon border-secondary">
                                <img class="icon-img bg-secondary" src="{{URL::asset('build/img/icons/services-icon-01.svg')}}" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>1. Choose Date &  Locations</h3>
                                <p>Determine the date & location for your car rental. Consider factors such as your travel itinerary, pickup/drop-off locations (e.g., airport, city center), and duration of rental.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-loc flex-fill">
                            <div class="services-icon border-warning">
                                <img class="icon-img bg-warning" src="{{URL::asset('build/img/icons/services-icon-02.svg')}}" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>2. Pick-Up Locations</h3>
                                <p>Check the availability of your desired vehicle type for your chosen dates and location. Ensure that the rental rates, taxes, fees, and any additional charges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-book flex-fill">
                            <div class="services-icon border-dark">
                                <img class="icon-img bg-dark" src="{{URL::asset('build/img/icons/services-icon-03.svg')}}" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>3. Book your Car</h3>
                                <p>Once you've found car rental option, proceed to make a reservation. Provide the required information, including your details, driver's license, contact info, and payment details.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /services -->

    <!-- Popular Services -->
    <section class="section popular-services popular-explore">		
        <div class="container">	
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Explore Most Popular Cars</h2>
                <p>Here's a list of some of the most popular cars globally, based on sales and customer preferences</p>
            </div>
            <!-- /Heading title -->
            <div class="row justify-content-center">
                <div class="col-lg-12" data-aos="fade-down">
                    <div class="listing-tabs-group">
                        <ul class="nav listing-buttons gap-3" data-bs-tabs="tabs">
                            <li>
                                <a class="active" aria-current="true" data-bs-toggle="tab" href="#Carmazda">
                                    <span>
                                        <img src="{{URL::asset('build/img/icons/car-icon-01.svg')}}" alt="Mazda">
                                    </span>
                                    Mazda
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Caraudi">
                                    <span>
                                        <img src="{{URL::asset('build/img/icons/car-icon-02.svg')}}" alt="Audi">
                                    </span>
                                    Audi
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Carhonda">
                                    <span>
                                        <img src="{{URL::asset('build/img/icons/car-icon-03.svg')}}" alt="Honda">
                                    </span>
                                    Honda
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Cartoyota">
                                    <span>
                                        <img src="{{URL::asset('build/img/icons/car-icon-04.svg')}}" alt="Toyota">
                                    </span>
                                    Toyota
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Caracura">
                                    <span>
                                        <img src="{{URL::asset('build/img/icons/car-icon-05.svg')}}" alt="Acura">
                                    </span>
                                    Acura 
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Cartesla">
                                    <span>
                                        <img src="{{URL::asset('build/img/icons/car-icon-06.svg')}}" alt="Tesla">
                                    </span>
                                    Tesla 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                            
            <div class="tab-content">
                <div class="tab-pane active" id="Carmazda">	
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">										
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
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
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">KIA</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Kia Soul 2016</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.0m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2016"></span>
                                                <p>2016</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
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
                                                <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.6m</span>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2012"></span>
                                                <p>2012</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-08.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Toyota Tacoma 4WD</a>
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
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>22 miles</p>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2019"></span>
                                                <p>2019</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Ford</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-10.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ford Mustang 4.0 AT</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>42 miles</p>
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
                                                <p>2021</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
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
                        <!-- /col -->
                    </div>						
                </div>
                <div class="tab-pane fade" id="Caraudi">	
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->
                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
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
                                                <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.6m</span>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2012"></span>
                                                <p>2012</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-08.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Toyota Tacoma 4WD</a>
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
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>22 miles</p>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2019"></span>
                                                <p>2019</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
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
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">										
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
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
                                                <i class="fas fa-star filled"></i>
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">KIA</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Kia Soul 2016</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.0m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2016"></span>
                                                <p>2016</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Ford</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-10.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ford Mustang 4.0 AT</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>42 miles</p>
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
                                                <p>2021</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
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
                        <!-- /col -->
                    </div>						
                </div>
                <div class="tab-pane fade" id="Carhonda">	
                    <div class="row">	
                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-08.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Toyota Tacoma 4WD</a>
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
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>22 miles</p>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2019"></span>
                                                <p>2019</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
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
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">										
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
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
                                                <i class="fas fa-star filled"></i>
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
                            </div>				 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">KIA</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Kia Soul 2016</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.0m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2016"></span>
                                                <p>2016</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
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
                                                <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.6m</span>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2012"></span>
                                                <p>2012</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Ford</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-10.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ford Mustang 4.0 AT</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>42 miles</p>
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
                                                <p>2021</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->
                    </div>						
                </div>
                <div class="tab-pane fade" id="Cartoyota">	
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">										
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
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
                                                <i class="fas fa-star filled"></i>
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">KIA</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Kia Soul 2016</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.0m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2016"></span>
                                                <p>2016</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
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
                                                <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.6m</span>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2012"></span>
                                                <p>2012</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-08.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Toyota Tacoma 4WD</a>
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
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>22 miles</p>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2019"></span>
                                                <p>2019</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Ford</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-10.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ford Mustang 4.0 AT</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>42 miles</p>
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
                                                <p>2021</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->
                    </div>						
                </div>
                <div class="tab-pane fade" id="Caracura">	
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">										
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
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
                                                <i class="fas fa-star filled"></i>
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">KIA</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Kia Soul 2016</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.0m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2016"></span>
                                                <p>2016</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
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
                                                <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.6m</span>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2012"></span>
                                                <p>2012</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-08.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Toyota Tacoma 4WD</a>
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
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>22 miles</p>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2019"></span>
                                                <p>2019</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Ford</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-10.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ford Mustang 4.0 AT</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>42 miles</p>
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
                                                <p>2021</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->
                    </div>						
                </div>
                <div class="tab-pane fade" id="Cartesla">	
                    <div class="row">	
                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-08.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Toyota Tacoma 4WD</a>
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
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>22 miles</p>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2019"></span>
                                                <p>2019</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
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
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">										
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-01-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Toyota</span>
                                </div>										
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
                                                <i class="fas fa-star filled"></i>
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
                            </div>		 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-02-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">KIA</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Kia Soul 2016</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.0m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2016"></span>
                                                <p>2016</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
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
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
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
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
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
                                                <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">3.6m</span>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2012"></span>
                                                <p>2012</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->

                        <!-- col -->	
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">											
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10-slide3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>	
                                    <span class="featured-text">Ford</span>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{URL::asset('build/img/profiles/avatar-10.jpg')}}" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ford Mustang 4.0 AT</a>
                                            </h3>																	  
                                            <div class="list-rating">							
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img src="{{URL::asset('build/img/icons/map-pin.svg')}}" alt="author">4.1m</span>
                                        </div>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="22 miles"></span>
                                                <p>42 miles</p>
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
                                                <p>2021</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>																 
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('listing-details')}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>	
                                </div>
                            </div>			 
                        </div>
                        <!-- /col -->
                    </div>						
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Services -->

    <!-- Popular Cartypes -->
    <section class="section popular-car-type">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading"  data-aos="fade-down">
                <h2>Most Popular Cartypes</h2>
                <p>Most popular worldwide Car Category due to their reliability, affordability, and features.</p>
            </div>
            <!-- /Heading title -->
            <div class="row">
                <div class="popular-slider-group">
                    <div class="owl-carousel popular-cartype-slider owl-theme">
                        <!-- owl carousel item -->
                        <div class="listing-owl-item">
                            <div class="listing-owl-group">
                                <div class="listing-owl-img">
                                    <img src="{{URL::asset('build/img/cars/mp-vehicle-01.svg')}}" class="img-fluid" alt="Popular Cartypes">
                                </div>
                                <h6>Crossover</h6>
                                <p>35 Cars</p>								
                            </div>
                        </div>
                        <!-- /owl carousel item -->

                        <!-- owl carousel item -->
                        <div class="listing-owl-item">
                            <div class="listing-owl-group">
                                <div class="listing-owl-img">
                                    <img src="{{URL::asset('build/img/cars/mp-vehicle-02.svg')}}" class="img-fluid" alt="Popular Cartypes">
                                </div>
                                <h6>Sports Coupe</h6>
                                <p>45 Cars</p>								
                            </div>
                        </div>
                        <!-- /owl carousel item -->

                        <!-- owl carousel item -->
                        <div class="listing-owl-item">
                            <div class="listing-owl-group">
                                <div class="listing-owl-img">
                                    <img src="{{URL::asset('build/img/cars/mp-vehicle-03.svg')}}" class="img-fluid" alt="Popular Cartypes">
                                </div>
                                <h6>Sedan</h6>
                                <p>15 Cars</p>								
                            </div>
                        </div>
                        <!-- /owl carousel item -->

                        <!-- owl carousel item -->
                        <div class="listing-owl-item">
                            <div class="listing-owl-group">
                                <div class="listing-owl-img">
                                    <img src="{{URL::asset('build/img/cars/mp-vehicle-04.svg')}}" class="img-fluid" alt="Popular Cartypes">
                                </div>
                                <h6>Pickup</h6>
                                <p>17 Cars</p>								
                            </div>
                        </div>
                        <!-- /owl carousel item -->

                        <!-- owl carousel item -->
                        <div class="listing-owl-item">
                            <div class="listing-owl-group">
                                <div class="listing-owl-img">
                                    <img src="{{URL::asset('build/img/cars/mp-vehicle-05.svg')}}" class="img-fluid" alt="Popular Cartypes">
                                </div>
                                <h6>Family MPV</h6>
                                <p>24 Cars</p>								
                            </div>
                        </div>
                        <!-- /owl carousel item -->
                    </div>	
                </div>
            </div>
            <!-- View More -->
            <div class="view-all text-center" data-aos="fade-down">
                <a href="{{url('listing-grid')}}" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
            </div>
            <!-- View More -->
        </div>
    </section>
    <!-- /Popular Cartypes -->

    <!-- Facts By The Numbers -->
    <section class="section facts-number">
        <div class="facts-left">
            <img src="{{URL::asset('build/img/bg/facts-left.png')}}" class="img-fluid" alt="facts left">
        </div>
        <div class="facts-right">
            <img src="{{URL::asset('build/img/bg/facts-right.png')}}" class="img-fluid" alt="facts right">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2 class="title text-white">Facts By The Numbers</h2>
                <p class="description">Here are some dreamsrent interesting facts presented by the numbers</p>
            </div>
            <!-- /Heading title -->
            <div class="counter-group">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/bx-heart.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">16</span>K+</h4>
                                    <p>Happy Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/bx-car.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">2547</span>+</h4>
                                    <p>Count of Cars</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/bx-headphone.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">625</span>+</h4>
                                    <p>Car Center Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/bx-history.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">15000</span>+</h4>
                                    <p>Total Kilometer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Facts By The Numbers -->

    <!-- Rental deals -->
    <section class="section popular-services">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading"  data-aos="fade-down">
                <h2>Recommended Car Rental deals</h2>
                <p>Here are some versatile options that cater to different needs</p>
            </div>
            <!-- /Heading title -->
            <div class="row">
                <div class="popular-slider-group">
                    <div class="owl-carousel rental-deal-slider owl-theme">
                        <!-- owl carousel item -->
                        <div class="rental-car-item">
                            <div class="listing-item mb-0">										
                                <div class="listing-img">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/rental-car-01.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features">												
                                        <div class="fav-item-rental">
                                            <div class="featured-text">$400<span>/day</span></div>					
                                        </div>																  
                                        <div class="list-rating">							
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>													
                                        <h3 class="listing-title">
                                            <a href="{{url('listing-details')}}">BMW 640 XI Gran Turismo</a>
                                        </h3>
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
                                                <p>Diesel</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-07.svg')}}" alt="2018"></span>
                                                <p>AC</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
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
                            <div class="listing-item mb-0">										
                                <div class="listing-img">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/rental-car-02.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features">												
                                        <div class="fav-item-rental">
                                            <div class="featured-text">$210<span>/day</span></div>
                                        </div>																  
                                        <div class="list-rating">							
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>													
                                        <h3 class="listing-title">
                                            <a href="{{url('listing-details')}}">Camz Ferrari Portofino M</a>
                                        </h3>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM"></span>
                                                <p>30 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-07.svg')}}" alt="2018"></span>
                                                <p>AC</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
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
                            <div class="listing-item mb-0">										
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel owl-theme">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/rental-car-03.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/rental-car-03-slider1.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/rental-car-03-slider2.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/cars/rental-car-03-slider3.jpg')}}" class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features">												
                                        <div class="fav-item-rental">
                                            <div class="featured-text">$380<span>/day</span></div>	
                                        </div>																  
                                        <div class="list-rating">							
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>													
                                        <h3 class="listing-title">
                                            <a href="{{url('listing-details')}}">Mercedes-Benz</a>
                                        </h3>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM"></span>
                                                <p>30 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>	
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-04.svg')}}" alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-07.svg')}}" alt="2018"></span>
                                                <p>AC</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
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
                            <div class="listing-item mb-0">										
                                <div class="listing-img">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/rental-car-04.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>										
                                    </div>
                                </div>										
                                <div class="listing-content">
                                    <div class="listing-features">												
                                        <div class="fav-item-rental">
                                            <span class="featured-text">$250/day</span>									
                                        </div>																  
                                        <div class="list-rating">							
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(4.5)</span>
                                        </div>													
                                        <h3 class="listing-title">
                                            <a href="{{url('listing-details')}}">Range Rover</a>
                                        </h3>
                                    </div> 
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM"></span>
                                                <p>28 KM</p>
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
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-07.svg')}}" alt="2018"></span>
                                                <p>AC</p>	
                                            </li>
                                            <li>
                                                <span><img src="{{URL::asset('build/img/icons/car-parts-06.svg')}}" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
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
            <!-- View More -->
            <div class="view-all text-center" data-aos="fade-down">
                <a href="{{url('listing-grid')}}" class="btn btn-view d-inline-flex align-items-center">Go to all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
            </div>
            <!-- View More -->
        </div>
    </section>
    <!-- /Rental deals -->

    <!-- Why Choose Us -->
    <section class="section why-choose popular-explore">
        <div class="choose-left">
            <img src="{{URL::asset('build/img/bg/choose-left.png')}}" class="img-fluid" alt="Why Choose Us">
        </div>		
        <div class="container">	
            <!-- Heading title-->
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="section-heading" data-aos="fade-down">
                        <h2>Why Choose Us</h2>
                        <p>We are innovative and passionate about the work we do. </p>
                    </div>
                </div>
            </div>
            <!-- /Heading title -->
            <div class="why-choose-group">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="choose-img choose-black">
                                    <img src="{{URL::asset('build/img/icons/bx-selection.svg')}}" alt="Icon">
                                </div>
                                <div class="choose-content">
                                    <h4>Easy & Fast Booking</h4>
                                    <p>Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="choose-img choose-secondary">
                                    <img src="{{URL::asset('build/img/icons/bx-crown.svg')}}" alt="Icon">
                                </div>
                                <div class="choose-content">
                                    <h4>Many Pickup Location</h4>
                                    <p>Enthusiastically magnetic initiatives with cross-platform sources. Dynamically target testing procedures through effective.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="choose-img choose-primary">
                                    <img src="{{URL::asset('build/img/icons/bx-user-check.svg')}}" alt="Icon">
                                </div>
                                <div class="choose-content">
                                    <h4>Customer Satisfaction</h4>
                                    <p>Globally user centric method interactive. Seamlessly revolutionize unique portals orporate collaboration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Why Choose Us -->

    <!-- About us Testimonials -->
    <section class="section about-testimonial testimonials-section">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2 class="title text-white">What People say about us? </h2>
                <p class="description text-white">Discover what our customers have think about us</p>
            </div>
            <!-- /Heading title -->
            <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">							
                    <div class="card flex-fill">
                        <div class="card-body">								
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" class="img-fluid" alt="img">
                                    </div>															
                                </div>
                                <div class="review-details">
                                    <h6>Rabien Ustoc</h6>
                                    <p>Newyork, USA</p>												
                                </div>
                            </div>									
                            <p>Renting a car from Dreams rent made my vacation so much smoother! The process was quick and easy, the car was clean and well-maintained, and the staff were friendly and helpful.</p>
                            <div class="list-rating">
                                <div class="list-rating-star">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p><span>(5.0)</span></p>
                            </div>							
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">							
                    <div class="card flex-fill">
                        <div class="card-body">								
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{URL::asset('build/img/profiles/avatar-03.jpg')}}" class="img-fluid" alt="img">
                                    </div>															
                                </div>
                                <div class="review-details">
                                    <h6>Valerie L. Ellis</h6>
                                    <p>Las Vegas, USA</p>												
                                </div>
                            </div>									
                            <p>As a frequent business traveller, I rely on Dreams rent for all my needs. Their wide selection of vehicles, convenient locations, and competitive prices make them my go-to choice every time. Plus, their customer service is top-notch!</p>
                            <div class="list-rating">
                                <div class="list-rating-star">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p><span>(5.0)</span></p>
                            </div>							
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">							
                    <div class="card flex-fill">
                        <div class="card-body">								
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{URL::asset('build/img/profiles/avatar-04.jpg')}}" class="img-fluid" alt="img">
                                    </div>															
                                </div>
                                <div class="review-details">
                                    <h6>Laverne Marier</h6>
                                    <p>Nevada, USA</p>													
                                </div>
                            </div>									
                            <p>Renting a car from Dreams rent made our family vacation unforgettable and top-notch customer service. The spacious SUV we rented comfortably fit our family and all our luggage, and it was a smooth ride throughout our trip.</p>	
                            <div class="list-rating">
                                <div class="list-rating-star">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p><span>(5.0)</span></p>
                            </div>						
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">							
                    <div class="card flex-fill">
                        <div class="card-body">								
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{URL::asset('build/img/profiles/avatar-06.jpg')}}" class="img-fluid" alt="img">
                                    </div>															
                                </div>
                                <div class="review-details">
                                    <h6>Sydney Salmons</h6>
                                    <p>Newyork, USA</p>											
                                </div>
                            </div>									
                            <p>As a frequent business traveller, I rely on Dreams rent for all my needs. Their wide selection of vehicles, convenient locations, and competitive prices make them my go-to choice every time. Plus, their customer service is top-notch!</p>	
                            <div class="list-rating">
                                <div class="list-rating-star">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p><span>(5.0)</span></p>
                            </div>						
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">							
                    <div class="card flex-fill">
                        <div class="card-body">								
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" class="img-fluid" alt="img">
                                    </div>															
                                </div>
                                <div class="review-details">
                                    <h6>Lucas Moquin</h6>
                                    <p>Nevada, USA</p>																	
                                </div>
                            </div>									
                            <p>Renting a car from Dreams rent made our family vacation unforgettable and top-notch customer service. The spacious SUV we rented comfortably fit our family and all our luggage, and it was a smooth ride throughout our trip.</p>	
                            <div class="list-rating">
                                <div class="list-rating-star">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p><span>(5.0)</span></p>
                            </div>	
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->
            </div>
        </div>
    </section>
    <!-- About us Testimonials -->

    <!-- FAQ  -->
    <section class="section faq-section bg-light-primary">
        <div class="container">				
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Frequently Asked Questions </h2>
                <p>Find answers to your questions from our previous answers</p>
            </div>
            <!-- /Heading title -->
            <div class="faq-info">
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapseds" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">How old do I need to be to rent a car?</a>
                    </h4>
                    <div id="faqOne" class="card-collapse collapse show">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>	
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">What documents do I need to rent a car?</a>
                    </h4>
                    <div id="faqTwo" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">What types of vehicles are available for rent?</a>
                    </h4>
                    <div id="faqThree" class="card-collapse collapse">
                        <p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
                    </div>
                </div>	
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Can I rent a car with a debit card?</a>
                    </h4>
                    <div id="faqFour" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>	
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">What is your fuel policy?</a>
                    </h4>
                    <div id="faqFive" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>	
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">Can I add additional drivers to my rental agreement?</a>
                    </h4>
                    <div id="faqSix" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>	
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">What happens if I return the car late?</a>
                    </h4>
                    <div id="faqSeven" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>													
            </div>		
        </div>	
    </section>	
    <!-- /FAQ -->

    <!-- Pricing Plan -->
    <section class="pricing-section pricing-page pricing-section-bottom">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Transparent Pricing For you</h2>
                <p>Choose a package that suits you</p>
            </div>
            <!-- /Heading title -->
                                
            <!-- Plan Selected -->
            <div class="plan-selected" data-aos="fade-down">
                <h4>Monthly</h4>
                <div class="status-toggle me-2 ms-2">
                    <input id="list-rating_1" class="px-4 check" type="checkbox" checked>
                    <label for="list-rating_1" class="px-4 checktoggle checkbox-bg">checkbox</label>
                </div>
                <h4>Annually</h4>
            </div>
            <!-- /Plan Selected -->
            <div class="row">
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card price-selected flex-fill">
                        <div class="price-head">
                            <h2>Save more with Good Plans</h2>	
                            <p>Choose a plan and get onboard in Minutes, then get $100 with next payment</p>
                            <a href="javascript:void(0);"><i class="bx bx-right-arrow-alt"></i></a>			
                        </div>	
                        <div class="price-body">
                            <img class="img-fluid" src="{{URL::asset('build/img/price-plan.png')}}" alt="Price Plan">		
                        </div>							
                    </div>
                </div>
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Basic Rental </h6>
                                <p>For the basics</p>
                            </div>
                            <h4>$49</h4>	
                            <span>Per user per month</span>							
                        </div>	
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>50% Downpayment</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Insurance not Included</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Doorstep delivery</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Safe & Sanitized</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>No Long term Commitment</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Refundable deposit has to pay</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>No Flexible timing & extension</li>
                            </ul>
                            <a href="{{url('login')}}" class="btn viewdetails-btn">Buy Package</a>							
                        </div>							
                    </div>
                </div>
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card flex-fill active">
                        <div class="price-head">
                            <div class="price-level price-level-popular">
                                <h6>Recommended</h6>
                                <p>For the Users</p>
                            </div>
                            <h4>$95</h4>	
                            <span>Per user per month</span>							
                        </div>		
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>50% Downpayment</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Insurance not Included</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Doorstep delivery</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Safe & Sanitized</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Long term Commitment 1 month</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Refundable deposit has to pay</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>No Flexible timing & extension</li>
                            </ul>
                            <a href="{{url('login')}}" class="btn viewdetails-btn btn-popular">Buy Package</a>							
                        </div>							
                    </div>
                </div>
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Pro</h6>
                                    <p>For the Pro</p>
                                </div>
                                <h4>$154</h4>	
                                <span>Per user per month</span>							
                            </div>	
                            <div class="price-details">
                                <ul>
                                    <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>50% Downpayment</li>
                                    <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Insurance not Included</li>
                                    <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Doorstep delivery</li>
                                    <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Safe & Sanitized</li>
                                    <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Long term Commitment 1 month</li>
                                    <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>No Refundable deposit</li>
                                    <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>No Flexible timing & extension</li>
                                </ul>
                            <a href="{{url('login')}}" class="btn viewdetails-btn">Buy Package</a>						
                        </div>							
                    </div>
                </div>
            </div>

            <!-- App Available -->
            <div class="user-app-group">
                <div class="app-left">
                    <img src="{{URL::asset('build/img/bg/app-left.png')}}" class="img-fluid" alt="App Available">
                </div>
                <div class="app-right">
                    <img src="{{URL::asset('build/img/bg/app-right.png')}}" class="img-fluid" alt="App Available">
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="userapp-heading">
                            <h2 data-aos="fade-down">Dreamsrental User Friendly App Available</h2>
                            <p data-aos="fade-down">Appropriately monetize one-to-one interfaces rather than cutting-edge Competently disinte rmediate backward.</p>
                            <div class="download-btn">
                                <div class="app-avilable" data-aos="fade-down">								
                                    <a href="javascript:void(0)"><img src="{{URL::asset('build/img/play-store.svg')}}" alt="PlayStore"></a>
                                </div>
                                <div class="app-avilable" data-aos="fade-down">								
                                    <a href="javascript:void(0)"><img src="{{URL::asset('build/img/apple.svg')}}" alt="AppStore"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="car-holder">
                            <img class="app-car img-fluid" src="{{URL::asset('build/img/app-car.png')}}" alt="App Available"  data-aos="fade-down">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /App Available -->

        </div>
    </section>
    <!-- /Pricing Plan -->

    <!-- Blog Section -->
    <section class="blog-section news-section pt-0">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>News & Insights For You</h2>
                <p>This blog post provides valuable insights into the benefits</p>
            </div>
            <!-- /Heading title -->

            <div class="row">
                <div class="col-lg-4 col-md-6 d-lg-flex">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('build/img/blog/blog-4.jpg')}}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                                <p class="blog-category">
                                <a href="javascript:void(0)"><span>Journey</span></a>
                            </p>
                            <h3 class="blog-title"><a href="{{url('blog-details')}}">The 2023 Ford F-150 Raptor – A First Look</a></h3>
                            <p class="blog-description">Covers all aspects of the automotive industry with a focus on accessibility and consumer relevance.....</p>
                            <ul class="meta-item mb-0">
                                <li>
                                    <div class="post-author">
                                        <div class="post-author-img">
                                            <img src="{{URL::asset('build/img/profiles/avatar-04.jpg')}}" alt="author">
                                        </div>
                                        <a href="javascript:void(0)"> <span> Hellan </span></a>
                                    </div>
                                </li>
                                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> <span>October 6, 2022</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-lg-flex">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('build/img/blog/blog-3.jpg')}}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <p class="blog-category">
                                <a href="javascript:void(0)"><span>Tour & tip</span></a>
                            </p>
                            <h3 class="blog-title"><a href="{{url('blog-details')}}">Tesla Model S: Top Secret Car Collector’s Garage</a></h3>
                            <p class="blog-description">Catering to driving enthusiasts, Road & Track provides engaging content on...</p>
                            <ul class="meta-item mb-0">
                                <li>
                                    <div class="post-author">
                                        <div class="post-author-img">
                                            <img src="{{URL::asset('build/img/profiles/avatar-13.jpg')}}" alt="author">
                                        </div>
                                        <a href="javascript:void(0)"> <span> Alphonsa Daniel </span></a>
                                    </div>
                                </li>
                                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> <span>March 6, 2023</span></li>
                            </ul>
                        </div>
                    </div>
                </div>					

                <div class="col-lg-4 col-md-6 d-lg-flex">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('build/img/blog/blog-10.jpg')}}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <p class="blog-category">
                                <a href="javascript:void(0)"><span>Updates</span></a>
                            </p>
                            <h3 class="blog-title"><a href="{{url('blog-details')}}">Dedicated To Cars, Covering Everything</a></h3>
                            <p class="blog-description">Known for its irreverent take on car culture, offers a mix of news, reviews...</p>
                            <ul class="meta-item mb-0">
                                <li>
                                    <div class="post-author">
                                        <div class="post-author-img">
                                            <img src="{{URL::asset('build/img/profiles/avatar-13.jpg')}}" alt="author">
                                        </div>
                                        <a href="javascript:void(0)"> <span> Hellan</span></a>
                                    </div>
                                </li>
                                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> <span>March 6, 2023</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all text-center aos-init aos-animate" data-aos="fade-down">
                <a href="{{url('blog-details')}}" class="btn btn-view d-inline-flex align-items-center">View all Blogs <span><i class="feather-arrow-right ms-2"></i></span></a>
            </div>

        </div>
    </section>
    <!-- /Blog Section -->
@endsection
