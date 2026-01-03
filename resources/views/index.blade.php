<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Banner -->
    <section class="banner-section-four">		
        <div class="container">
            <div class="home-banner">		
                <div class="row align-items-center">					    
                    <div class="col-lg-5" data-aos="fade-down">
                        <div class="banner-content">
                            <h1>Explore our <span>Verified & Professional</span> Cars</h1>
                            <p>Modern design sports cruisers for those who crave adventure & grandeur Cars for relaxing with your loved ones.
                            </p>
                            <div class="customer-list">
                                <div class="users-wrap">
                                    <ul class="users-list">
                                        <li>
                                            <img src="{{URL::asset('build/img/profiles/avatar-11.jpg')}}" class="img-fluid aos" alt="bannerimage">
                                        </li>
                                        <li>
                                            <img src="{{URL::asset('build/img/profiles/avatar-15.jpg')}}" class="img-fluid aos" alt="bannerimage">
                                        </li>
                                        <li>
                                            <img src="{{URL::asset('build/img/profiles/avatar-03.jpg')}}" class="img-fluid aos" alt="bannerimage">
                                        </li>
                                    </ul>
                                    <div class="customer-info">
                                        <h4>6K + Customers</h4>
                                        <p>has used our renting services </p>
                                    </div>
                                </div>
                                <div class="view-all d-flex align-items-center gap-3">
                                    <a href="{{url('listing-grid')}}" class="btn btn-primary d-inline-flex align-items-center">Rent a Car<i class="bx bx-right-arrow-alt ms-1"></i></a>
                                    <a href="{{url('add-listing')}}" class="btn btn-secondary d-inline-flex align-items-center"><i class="bx bxs-plus-circle me-1"></i>Add Your Car</a>
                                </div>
                            </div>	
                        </div>	
                    </div>
                    <div class="col-lg-7">							
                        <div class="banner-image">
                            <div class="banner-img" data-aos="fade-down">
                                <div class="amount-icon">
                                    <span class="day-amt">
                                        <p>Starts From</p>
                                        <h6>$650 <span> /day</span></h6>
                                    </span>
                                </div>
                                <span class="rent-tag"><i class="bx bxs-circle"></i> Available for Rent</span>
                                <img src="{{URL::asset('build/img/banner/banner.png')}}" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            <div class="banner-search">
                    <form action="{{url('listing-grid')}}" class="form-block d-flex align-items-center">
                        <div class="search-input">
                            <div class="input-block">
                                <label>Pickup Location</label>
                                <select class="select">
                                    <option>Choose Location</option>
                                    <option>New York</option>
                                    <option>Dallas</option>
                                    <option>Chicago</option>
                                    <option>San Diego</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-input">
                            <div class="input-block">
                                <label>Drop Location</label>
                                <select class="select">
                                    <option>Choose Location</option>
                                    <option>San Francisco</option>
                                    <option>Austin</option>
                                    <option>Boston</option>
                                    <option>Chicago</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-input">
                            <div class="input-block">
                                <label>Pickup Date & time</label>
                                <div class="input-wrap">
                                    <input type="text" class="form-control flatpickr-datetime" value="2025-03-14 12:00">
                                    <span class="input-icon"><i class="bx bx-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="search-input input-end">
                            <div class="input-block">
                                <label>Drop Date & time</label>
                                <div class="input-wrap">
                                    <input type="text" class="form-control flatpickr-datetime" value="2025-03-15 12:00">
                                    <span class="input-icon"><i class="bx bx-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="search-btn">
                            <button class="btn btn-primary" type="submit"><i class="bx bx-search-alt"></i></button>
                        </div>
                    </form>
                </div>
        </div>
        <div class="banner-bgs">
            <img src="{{URL::asset('build/img/bg/banner-bg-01.png')}}" class="bg-01 img-fluid" alt="img">
        </div>
    </section>
    <!-- /Banner -->

    <!-- Category  Section -->
    <section class="category-section-four">
        <div class="container">	
            <div class="row">	
                <div class="col-md-12">	

                    <!-- Heading title-->
                    <div class="section-heading heading-four" data-aos="fade-down">
                        <h2>Featured Categories</h2>
                        <p>Know what you’re looking for? Browse our extensive selection of cars</p>
                    </div>
                    <!-- /Heading title -->

                    <div class="row row-gap-4">
                        
                        <!-- Category Item -->
                        <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                            <div class="category-item flex-fill">
                                <div class="category-info d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="title"><a href="{{url('listing-grid')}}">Sports Coupe</a></h6>
                                        <p>14 Cars</p>
                                    </div>
                                    <a href="{{url('listing-grid')}}" class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                                <div class="category-img">
                                    <img src="{{URL::asset('build/img/category/category-01.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- /Category Item -->

                        <!-- Category Item -->
                        <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                            <div class="category-item flex-fill">
                                <div class="category-info d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="title"><a href="{{url('listing-grid')}}">Sedan</a></h6>
                                        <p>12 Cars</p>
                                    </div>
                                    <a href="{{url('listing-grid')}}" class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                                <div class="category-img">
                                    <img src="{{URL::asset('build/img/category/category-02.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- /Category Item -->

                        <!-- Category Item -->
                        <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                            <div class="category-item flex-fill">
                                <div class="category-info d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="title"><a href="{{url('listing-grid')}}">Sports Car</a></h6>
                                        <p>35 Cars</p>
                                    </div>
                                    <a href="{{url('listing-grid')}}" class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                                <div class="category-img">
                                    <img src="{{URL::asset('build/img/category/category-03.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- /Category Item -->

                        <!-- Category Item -->
                        <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                            <div class="category-item flex-fill">
                                <div class="category-info d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="title"><a href="{{url('listing-grid')}}">Pickup</a></h6>
                                        <p>35 Cars</p>
                                    </div>
                                    <a href="{{url('listing-grid')}}" class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                                <div class="category-img">
                                    <img src="{{URL::asset('build/img/category/category-04.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- /Category Item -->

                        <!-- Category Item -->
                        <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                            <div class="category-item flex-fill">
                                <div class="category-info d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="title"><a href="{{url('listing-grid')}}">Family MPV</a></h6>
                                        <p>35 Cars</p>
                                    </div>
                                    <a href="{{url('listing-grid')}}" class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                                <div class="category-img">
                                    <img src="{{URL::asset('build/img/category/category-05.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- /Category Item -->

                        <!-- Category Item -->
                        <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                            <div class="category-item flex-fill">
                                <div class="category-info d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="title"><a href="{{url('listing-grid')}}">Crossover</a></h6>
                                        <p>30 Cars</p>
                                    </div>
                                    <a href="{{url('listing-grid')}}" class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                                <div class="category-img">
                                    <img src="{{URL::asset('build/img/category/category-06.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- /Category Item -->

                    </div>

                    <div class="view-all-btn text-center aos" data-aos="fade-down">
                        <a href="{{url('listing-grid')}}" class="btn btn-secondary">View All<i class="bx bx-right-arrow-alt ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Category  Section -->

    <!-- Feature Section -->
    <section class="feature-section pt-0">
        <div class="container">	
            <div class="row align-items-center">	
                <div class="col-lg-6">	

                    <div class="feature-img">
                        <div class="section-heading heading-four text-start" data-aos="fade-down">
                            <h2>Best Platform for Car Rental</h2>
                            <p>Why do we choose relax rent bikes generally if we travel in a un known cities with a bike in our hand we feel which is like a home town</p>
                        </div>
                        <img src="{{URL::asset('build/img/cars/car.png')}}" alt="img" class="img-fluid">
                    </div>

                </div>

                <div class="col-lg-6">	
                    <div class="row row-gap-4">
                        
                        <!-- Feature Item -->
                        <div class="col-md-6 d-flex">
                            <div class="feature-item flex-fill">
                                <span class="feature-icon">
                                    <i class="bx bxs-info-circle"></i>
                                </span>
                                <div>
                                    <h6 class="mb-1">Best Deal</h6>
                                    <p>Dreams Rent offers a fleet of high-quality </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Item -->

                        <!-- Feature Item -->
                        <div class="col-md-6 d-flex">
                            <div class="feature-item flex-fill">
                                <span class="feature-icon">
                                    <i class="bx bx-exclude"></i>
                                </span>
                                <div>
                                    <h6 class="mb-1">Doorstep Delivery</h6>
                                    <p>Dreams Rent offers a fleet of high-quality </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Item -->

                        <!-- Feature Item -->
                        <div class="col-md-6 d-flex">
                            <div class="feature-item flex-fill">
                                <span class="feature-icon">
                                    <i class="bx bx-money"></i>
                                </span>
                                <div>
                                    <h6 class="mb-1">Low Security Deposit</h6>
                                    <p>Dreams Rent offers a fleet of high-quality </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Item -->

                        <!-- Feature Item -->
                        <div class="col-md-6 d-flex">
                            <div class="feature-item flex-fill">

                                <span class="feature-icon">
                                    <i class="bx bxs-car-mechanic"></i>
                                </span>
                                <div>
                                    <h6 class="mb-1">Latest Cars</h6>
                                    <p>Dreams Rent offers a fleet of high-quality</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Item -->

                        <!-- Feature Item -->
                        <div class="col-md-6 d-flex">
                            <div class="feature-item flex-fill">
                                <span class="feature-icon">
                                    <i class="bx bx-support"></i>
                                </span>
                                <div>
                                    <h6 class="mb-1">Customer Support</h6>
                                    <p>Dreams Rent offers a fleet of high-quality</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Item -->

                        <!-- Feature Item -->
                        <div class="col-md-6 d-flex">
                            <div class="feature-item flex-fill">
                                <span class="feature-icon">
                                    <i class="bx bxs-coin"></i>
                                </span>
                                <div>
                                    <h6 class="mb-1">No Hidden Charges</h6>
                                    <p>Dreams Rent offers a fleet of high-quality</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature Section -->

    <!-- Car Section -->
    <section class="car-section">
        <div class="container">	

            <div class="section-heading heading-four" data-aos="fade-down">
                <h2>Explore Most Popular Cars</h2>
                <p>Here's a list of some of the most popular cars globally</p>
            </div>

            <div class="row">

                <!-- Car List -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-item listing-item-two">										
                        <div class="listing-img">
                            <div class="img-slider owl-carousel">
                                <div class="slide-images">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/car-11.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                </div>
                                <div class="slide-images">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                </div>
                                <div class="slide-images">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/car-11.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                </div>
                            </div>
                            <div class="fav-item">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="featured-text">Toyota</span>
                                    <span class="availability">Available</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon selected">
                                    <i class="feather-heart"></i>
                                </a>										
                            </div>									
                            <span class="location"><i class="bx bx-map me-1"></i>Lasvegas</span>
                        </div>										
                        <div class="listing-content">
                            <div class="listing-features d-flex align-items-center justify-content-between">
                                <div class="list-rating">
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
                                <div>
                                    <h4 class="price">$160 <span>/ Day</span></h4>
                                </div>
                            </div> 
                            <div class="listing-details-group">
                                <ul>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto">
                                        <p>Auto</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM">
                                        <p>10 KM</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol">
                                        <p>Diesel</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018">
                                        <p>2018</p>	
                                    </li>
                                </ul>
                            </div>	
                        </div>
                    </div>	
                </div>
                <!-- /Car List -->

                <!-- Car List -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-item listing-item-two">										
                        <div class="listing-img">
                            <a href="{{url('listing-details')}}">
                                <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid" alt="Toyota">
                            </a>
                            <div class="fav-item">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="featured-text">Toyota</span>
                                    <span class="availability">Available</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon selected">
                                    <i class="feather-heart"></i>
                                </a>										
                            </div>									
                            <span class="location"><i class="bx bx-map me-1"></i>Lasvegas</span>
                        </div>										
                        <div class="listing-content">
                            <div class="listing-features d-flex align-items-center justify-content-between">
                                <div class="list-rating">
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
                                <div>
                                    <h4 class="price">$45 <span>/ Day</span></h4>
                                </div>
                            </div> 
                            <div class="listing-details-group">
                                <ul>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto">
                                        <p>Auto</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM">
                                        <p>10 KM</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol">
                                        <p>Diesel</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018">
                                        <p>2019</p>	
                                    </li>
                                </ul>
                            </div>	
                        </div>
                    </div>	
                </div>
                <!-- /Car List -->

                <!-- Car List -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-item listing-item-two">										
                        <div class="listing-img">
                            <a href="{{url('listing-details')}}">
                                <img src="{{URL::asset('build/img/cars/car-13.jpg')}}" class="img-fluid" alt="Toyota">
                            </a>
                            <div class="fav-item">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="featured-text">Toyota</span>
                                    <span class="availability">Available</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>										
                            </div>									
                            <span class="location"><i class="bx bx-map me-1"></i>Lasvegas</span>
                        </div>										
                        <div class="listing-content">
                            <div class="listing-features d-flex align-items-center justify-content-between">
                                <div class="list-rating">
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
                                <div>
                                    <h4 class="price">$90 <span>/ Day</span></h4>
                                </div>
                            </div> 
                            <div class="listing-details-group">
                                <ul>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto">
                                        <p>Auto</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM">
                                        <p>10 KM</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol">
                                        <p>Petrol</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018">
                                        <p>2021</p>	
                                    </li>
                                </ul>
                            </div>	
                        </div>
                    </div>	
                </div>
                <!-- /Car List -->

                <!-- Car List -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-item listing-item-two">										
                        <div class="listing-img">
                            <div class="img-slider owl-carousel">
                                <div class="slide-images">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/car-14.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                </div>
                                <div class="slide-images">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/car-13.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                </div>
                                <div class="slide-images">
                                    <a href="{{url('listing-details')}}">
                                        <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" class="img-fluid" alt="Toyota">
                                    </a>
                                </div>
                            </div>
                            <div class="fav-item">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="featured-text">Toyota</span>
                                    <span class="availability">Available</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>										
                            </div>									
                            <span class="location"><i class="bx bx-map me-1"></i>Spain</span>
                        </div>										
                        <div class="listing-content">
                            <div class="listing-features d-flex align-items-center justify-content-between">
                                <div class="list-rating">
                                    <h3 class="listing-title">
                                        <a href="{{url('listing-details')}}">Chevrolet Picker</a>
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
                                <div>
                                    <h4 class="price">$48 <span>/ Day</span></h4>
                                </div>
                            </div> 
                            <div class="listing-details-group">
                                <ul>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto">
                                        <p>Manual</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM">
                                        <p>18 KM</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol">
                                        <p>Diesel</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018">
                                        <p>2018</p>	
                                    </li>
                                </ul>
                            </div>	
                        </div>
                    </div>	
                </div>
                <!-- /Car List -->

                <!-- Car List -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-item listing-item-two">										
                        <div class="listing-img">
                            <a href="{{url('listing-details')}}">
                                <img src="{{URL::asset('build/img/cars/car-15.jpg')}}" class="img-fluid" alt="Toyota">
                            </a>
                            <div class="fav-item">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="featured-text">Toyota</span>
                                    <span class="availability">Available</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>										
                            </div>									
                            <span class="location"><i class="bx bx-map me-1"></i>Lasvegas</span>
                        </div>										
                        <div class="listing-content">
                            <div class="listing-features d-flex align-items-center justify-content-between">
                                <div class="list-rating">
                                    <h3 class="listing-title">
                                        <a href="{{url('listing-details')}}">Ferrari 458 MM Special</a>
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
                                <div>
                                    <h4 class="price">$95 <span>/ Day</span></h4>
                                </div>
                            </div> 
                            <div class="listing-details-group">
                                <ul>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto">
                                        <p>Auto</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM">
                                        <p>16 KM</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol">
                                        <p>Petrol</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018">
                                        <p>2021</p>	
                                    </li>
                                </ul>
                            </div>	
                        </div>
                    </div>	
                </div>
                <!-- /Car List -->

                <!-- Car List -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-item listing-item-two">										
                        <div class="listing-img">
                            <a href="{{url('listing-details')}}">
                                <img src="{{URL::asset('build/img/cars/car-16.jpg')}}" class="img-fluid" alt="Toyota">
                            </a>
                            <div class="fav-item">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="featured-text">Toyota</span>
                                    <span class="availability">Available</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>										
                            </div>									
                            <span class="location"><i class="bx bx-map me-1"></i>Newyork, USA</span>
                        </div>										
                        <div class="listing-content">
                            <div class="listing-features d-flex align-items-center justify-content-between">
                                <div class="list-rating">
                                    <h3 class="listing-title">
                                        <a href="{{url('listing-details')}}">2018 Chevrolet Camaro</a>
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
                                <div>
                                    <h4 class="price">$120 <span>/ Day</span></h4>
                                </div>
                            </div> 
                            <div class="listing-details-group">
                                <ul>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-01.svg')}}" alt="Auto">
                                        <p>Auto</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-02.svg')}}" alt="10 KM">
                                        <p>10 KM</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-03.svg')}}" alt="Petrol">
                                        <p>Diesel</p>
                                    </li>
                                    <li>
                                        <img src="{{URL::asset('build/img/icons/car-parts-05.svg')}}" alt="2018">
                                        <p>2019</p>	
                                    </li>
                                </ul>
                            </div>	
                        </div>
                    </div>	
                </div>
                <!-- /Car List -->

            </div>

            <div class="view-all-btn text-center aos" data-aos="fade-down">
                <a href="{{url('listing-grid')}}" class="btn btn-secondary d-inline-flex align-items-center">View More Cars<i class="bx bx-right-arrow-alt ms-1"></i></a>
            </div>

        </div>
    </section>
    <!-- /Car Section -->

    <!-- Brand Section -->
    <section class="brand-section">
        <div class="container">	
            <div class="section-heading heading-four" data-aos="fade-down">
                <h2 class="text-white">Rent by Brands</h2>
                <p>Here's a list of some of the most popular cars globally</p>
            </div>
            <div class="brands-slider owl-carousel">
                <div class="brand-wrap">
                    <img src="{{URL::asset('build/img/brand/brand-09.svg')}}" alt="img">
                    <p>Chevrolet</p>
                </div>
                <div class="brand-wrap">
                    <img src="{{URL::asset('build/img/brand/brand-10.svg')}}" alt="img">
                    <p>Chevrolet</p>
                </div>
                <div class="brand-wrap">
                    <img src="{{URL::asset('build/img/brand/brand-11.svg')}}" alt="img">
                    <p>Chevrolet</p>
                </div>
                <div class="brand-wrap">
                    <img src="{{URL::asset('build/img/brand/brand-12.svg')}}" alt="img">
                    <p>Chevrolet</p>
                </div>
                <div class="brand-wrap">
                    <img src="{{URL::asset('build/img/brand/brand-13.svg')}}" alt="img">
                    <p>Chevrolet</p>
                </div>
                <div class="brand-wrap">
                    <img src="{{URL::asset('build/img/brand/brand-14.svg')}}" alt="img">
                    <p>Chevrolet</p>
                </div>
            </div>
            <div class="brand-img text-center">
                <img src="{{URL::asset('build/img/bg/brand.png')}}" alt="img" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- /Brand Section -->

    <!-- Rental Section -->
    <section class="rental-section-four">
        <div class="container">	
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="rental-img">
                        <img src="{{URL::asset('build/img/about/rent-car.png')}}" alt="img" class="img-fluid">
                        <div class="grid-img">
                            <img src="{{URL::asset('build/img/about/car-grid.png')}}" alt="img" class="img-fluid">
                        </div>
                    </div>						
                </div>
                <div class="col-lg-5">
                    <div class="rental-content">
                        <div class="section-heading heading-four text-start" data-aos="fade-down">
                            <h2>Rent Our Cars in 3 Steps</h2>
                            <p>Check how it Works to Rent Cars in DreamsRent</p>
                        </div>
                        <div class="step-item d-flex align-items-center">
                            <span class="step-icon bg-primary me-3">
                                <i class="bx bx-calendar-heart"></i>
                            </span>
                            <div>
                                <h5>Choose Date &  Locations</h5>
                                <p>Determine the date & location for your car rental. Consider factors such as your travel itinerary, pickup/drop-off locations</p>
                            </div>
                        </div>
                        <div class="step-item d-flex align-items-center">
                            <span class="step-icon bg-secondary-100 me-3">
                                <i class="bx bxs-edit-location"></i>
                            </span>
                            <div>
                                <h5>Select Pick-Up & Drop Locations</h5>
                                <p>Check the availability of your desired vehicle type for your chosen dates and location. Ensure that the rental rates, taxes, fees, and any additional charges.</p>
                            </div>
                        </div>
                        <div class="step-item d-flex align-items-center">
                            <span class="step-icon bg-dark me-3">
                                <i class="bx bx-coffee-togo"></i>
                            </span>
                            <div>
                                <h5>Book your Car</h5>
                                <p>Determine the date & location for your car rental. Consider factors such as your travel itinerary, pickup/drop-off locations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="count-sec">
                <div class="row row-gap-4" >
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="count-item flex-fill">
                            <h3><span class="counterUp">16</span>K+</h3>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="count-item flex-fill">
                            <h3><span class="counterUp">2547</span>K+</h3>
                            <p>Count of Cars</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="count-item flex-fill">
                            <h3><span class="counterUp">625</span>K+</h3>
                            <p>Locations to Pickup</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="count-item flex-fill">
                            <h3><span class="counterUp">15000</span>K+</h3>
                            <p>Total Kilometers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Rental Section -->

    <!-- Popular Section -->
    <section class="popular-section-four">
        <div class="container">
            <!-- Section Header -->
            <div class="section-heading heading-four" data-aos="fade-down">
                <h2>Popular Cars On Recommendations</h2>
                <p>Here are some versatile options that cater to different needs</p>
            </div>
            <!-- /Section Header -->
            <div class="car-slider owl-carousel">

                <!-- Car Item -->
                <div class="car-item">
                    <h6>FORD</h6>
                    <h2 class="display-1">MUSTANG</h2>
                    <div class="car-img">
                        <img src="{{URL::asset('build/img/cars/car-15.png')}}" alt="img" class="img-fluid">
                        <div class="amount-icon">
                            <span class="day-amt">
                                <p>Starts From</p>
                                <h6>$650 <span> /day</span></h6>
                            </span>
                        </div>
                    </div>
                    <div class="spec-list">
                        <span><img src="{{URL::asset('build/img/icons/spec-01.svg')}}" alt="img">Auto</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-02.svg')}}" alt="img">Power</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-03.svg')}}" alt="img">30 K</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-04.svg')}}" alt="img">AC</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-05.svg')}}" alt="img">Diesel</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-05.svg')}}" alt="img">5 Persons</span>
                    </div>
                    <a href="{{url('listing-details')}}" class="btn btn-primary">Rent Now</a>
                </div>
                <!-- /Car Item -->

                <!-- Car Item -->
                <div class="car-item">
                    <h6>AUDI</h6>
                    <h2 class="display-1">A3 2024 New</h2>
                    <div class="car-img">
                        <img src="{{URL::asset('build/img/cars/car-16.png')}}" alt="img" class="img-fluid">
                        <div class="amount-icon">
                            <span class="day-amt">
                                <p>Starts From</p>
                                <h6>$650 <span>/day</span></h6>
                            </span>
                        </div>
                    </div>
                    <div class="spec-list">
                        <span><img src="{{URL::asset('build/img/icons/spec-01.svg')}}" alt="img">Auto</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-02.svg')}}" alt="img">Power</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-03.svg')}}" alt="img">60 K</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-04.svg')}}" alt="img">AC</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-05.svg')}}" alt="img">Gas</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-05.svg')}}" alt="img">4 Persons</span>
                    </div>
                    <a href="{{url('listing-details')}}" class="btn btn-primary">Rent Now</a>
                </div>
                <!-- /Car Item -->

                <!-- Car Item -->
                <div class="car-item">
                    <h6>TOYOTO</h6>
                    <h2 class="display-1">CAMREY SE 350</h2>
                    <div class="car-img">
                        <img src="{{URL::asset('build/img/cars/car-17.png')}}" alt="img" class="img-fluid">
                        <div class="amount-icon">
                            <span class="day-amt">
                                <p>Starts From</p>
                                <h6>$799 <span>/day</span></h6>
                            </span>
                        </div>
                    </div>
                    <div class="spec-list">
                        <span><img src="{{URL::asset('build/img/icons/spec-01.svg')}}" alt="img">Auto</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-02.svg')}}" alt="img">Power</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-03.svg')}}" alt="img">80 K</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-04.svg')}}" alt="img">AC</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-05.svg')}}" alt="img">Petrol</span>
                        <span><img src="{{URL::asset('build/img/icons/spec-05.svg')}}" alt="img">6 Persons</span>
                    </div>
                    <a href="{{url('listing-details')}}" class="btn btn-primary">Rent Now</a>
                </div>
                <!-- /Car Item -->

            </div>
        </div>
    </section>
    <!-- /Popular Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">	
            <div class="section-heading heading-four" data-aos="fade-down">
                <h2>Our Clients Feedback</h2>
                <p>Provided by customers about their experience with a product or service.</p>
            </div>

            <div class="row row-gap-4 justify-content-center">

                <!-- Testimonial Item -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="testimonial-item testimonial-item-two flex-fill">
                        <div class="user-img">
                            <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" class="img-fluid" alt="img">
                        </div>
                        <p>Renting a car from Dreams rent made my vacation so much smoother! The process was quick</p>							
                        <div class="rating">
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                        </div>
                        <div class="user-info">
                            <h6>Kyle Roberts DVM</h6>
                            <p>Newyork, USA</p>												
                        </div>
                    </div>
                </div>
                <!-- /Testimonial Item -->

                <!-- Testimonial Item -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="testimonial-item testimonial-item-two flex-fill">
                        <div class="user-img">
                            <img src="{{URL::asset('build/img/profiles/avatar-18.jpg')}}" class="img-fluid" alt="img">
                        </div>
                        <p>Their wide selection of vehicles, convenient locations, and competitive prices</p>							
                        <div class="rating">
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                        </div>
                        <div class="user-info">
                            <h6>Hardley Vanessa</h6>
                            <p>Newyork, USA</p>												
                        </div>
                    </div>
                </div>
                <!-- /Testimonial Item -->

                <!-- Testimonial Item -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="testimonial-item testimonial-item-two flex-fill">
                        <div class="user-img">
                            <img src="{{URL::asset('build/img/profiles/avatar-15.jpg')}}" class="img-fluid" alt="img">
                        </div>
                        <p>The spacious SUV we rented comfortably fit our family and all our luggage</p>							
                        <div class="rating">
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                        </div>
                        <div class="user-info">
                            <h6>Wilson</h6>
                            <p>Nevada, USA</p>												
                        </div>
                    </div>
                </div>
                <!-- /Testimonial Item -->

            </div>

            <div class="view-all-btn text-center aos" data-aos="fade-down">
                <a href="{{url('listing-grid')}}" class="btn btn-secondary">View All<i class="bx bx-right-arrow-alt ms-1"></i></a>
            </div>

            <div class="client-slider owl-carousel">
                <div>
                    <img src="{{URL::asset('build/img/clients/client-01.svg')}}" alt="img">
                </div>
                <div>
                    <img src="{{URL::asset('build/img/clients/client-02.svg')}}" alt="img">
                </div>
                <div>
                    <img src="{{URL::asset('build/img/clients/client-03.svg')}}" alt="img">
                </div>
                <div>
                    <img src="{{URL::asset('build/img/clients/client-04.svg')}}" alt="img">
                </div>
                <div>
                    <img src="{{URL::asset('build/img/clients/client-05.svg')}}" alt="img">
                </div>
                <div>
                    <img src="{{URL::asset('build/img/clients/client-06.svg')}}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonial Section -->

    <!-- Price Section -->
    <section class="pricing-section-four">
        <div class="container">	
            <div class="section-heading heading-four" data-aos="fade-down">
                <h2>Best Pricing in Rental</h2>
                <p>Choose the Right Plan for Your Business</p>
            </div>

            <div class="row">

                <!-- Price Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="price-item price-item-two flex-fill">
                        <div class="price-head">
                            <h6>Stater</h6>
                            <div class="price-level">
                                <div>
                                    <h3>$299</h3>
                                    <p>Per Month</p>
                                </div>
                                <span class="offer-tag bg-danger">30% Offer</span>	
                            </div>						
                        </div>	
                        <div class="price-details">
                            <ul>
                                <li>50% Downpayment</li>
                                <li>Insurance not Included</li>
                                <li>Doorstep Not Included</li>
                                <li>Roadside Assistance</li>
                                <li>Minimal Insurance Coverage</li>
                                <li>Additional Perks - GPS</li>
                                <li>No Flexible timing & extension</li>
                            </ul>
                            <a href="{{url('login')}}" class="btn btn-secondary w-100">Choose Plan<i class="bx bx-right-arrow-alt ms-1"></i></a>							
                        </div>							
                    </div>
                </div>
                <!-- /Price Item -->

                <!-- Price Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="price-item price-item-two flex-fill">
                        <div class="price-head">
                            <h6>Premium</h6>
                            <div class="price-level">
                                <div>
                                    <h3>$1299</h3>
                                    <p>Per Month</p>
                                </div>
                                <span class="offer-tag bg-pink">100% Offer</span>	
                            </div>						
                        </div>	
                        <div class="price-details">
                            <ul>
                                <li>25% Downpayment</li>
                                <li>Insurance Included</li>
                                <li>Doorstep Delivery Available</li>
                                <li>Roadside Assistance</li>
                                <li>Personal Injury Protection</li>
                                <li>Additional Perks GPS, Car Seat</li>
                                <li>Flexible timing & extension</li>
                            </ul>
                            <a href="{{url('login')}}" class="btn btn-secondary w-100">Choose Plan<i class="bx bx-right-arrow-alt ms-1"></i></a>							
                        </div>							
                    </div>
                </div>
                <!-- /Price Item -->

                <!-- Price Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="price-item price-item-two recommend flex-fill">
                        <span class="recommend-tag"><i class="bx bxs-star me-1"></i>Recommended</span>
                        <div class="price-head">
                            <h6>Enterprise</h6>
                            <div class="price-level">
                                <div>
                                    <h3>$1599</h3>
                                    <p>Per Month</p>
                                </div>
                            </div>						
                        </div>	
                        <div class="price-details">
                            <ul>
                                <li>0% Downpayment</li>
                                <li>Insurance Included</li>
                                <li>Doorstep Delivery Available</li>
                                <li>Roadside Assistance</li>
                                <li>Personal Injury Protection</li>
                                <li>Additional Perks GPS, Car Seat</li>
                                <li>Flexible timing & extension</li>
                            </ul>
                            <a href="{{url('login')}}" class="btn btn-secondary w-100">Choose Plan<i class="bx bx-right-arrow-alt ms-1"></i></a>							
                        </div>							
                    </div>
                </div>
                <!-- /Price Item -->

                <!-- Price Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="price-item price-item-two active flex-fill">
                        <div class="price-head">
                            <h6>Custom</h6>
                            <div class="price-level">
                                <div>
                                    <h3>Contact Us</h3>
                                </div>
                            </div>						
                        </div>	
                        <div class="price-details">
                            <ul>
                                <li>Weekend/Weekly Deals</li>
                                <li>Membership Discounts</li>
                                <li>Insurance Upgrades</li>
                                <li>Personal Accident Insurance</li>
                                <li>Minimal Insurance Coverage</li>
                                <li>No Long term Commitment</li>
                                <li>Refundable Deposit </li>
                                <li>Priority Service</li>
                            </ul>
                            <a href="{{url('login')}}" class="btn btn-secondary w-100">Choose Plan<i class="bx bx-right-arrow-alt ms-1"></i></a>							
                        </div>							
                    </div>
                </div>
                <!-- /Price Item -->

            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="view-all-btn text-center aos" data-aos="fade-down">
                        <p>Whether you're a small startup or a large enterprise, our goal is to provide you with the most value and help you leverage the full potential of AI analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Price Section -->		

    <!-- Support Section -->
    <section class="support-section">
        <div class="horizontal-slide d-flex" data-direction="left" data-speed="slow">
            <div class="slide-list d-flex">
                <div class="support-item">
                    <h2>Best Rate Guarateed</h2>
                </div>
                <div class="support-item">
                    <h2>Free Cancellation</h2>
                </div>
                <div class="support-item">
                    <h2>Best Security</h2>
                </div>
                <div class="support-item">
                    <h2>Latest Update of Bikes</h2>
                </div>
                <div class="support-item">
                    <h2>Trusted Proof</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /Support Section -->

    <!-- Blog Section -->
    <section class="blog-section-four">
        <div class="container">	
            <div class="section-heading heading-four" data-aos="fade-down">
                <h2>Insights and Innovations</h2>
                <p>Dive into our articles to stay ahead in the fast-paced world of technology.</p>
            </div>

            <div class="row row-gap-3 justify-content-center">

                <!-- Blog Item -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog-item flex-fill">
                        <div class="blog-img">
                            <img src="{{URL::asset('build/img/blog/blog-11.jpg')}}" class="img-fluid" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-center justify-content-between blog-category">
                                <a href="javascript:void(0);" class="category">Journey</a>
                                <p class="date d-inline-flex align-center"><i class="bx bx-calendar me-1"></i>October 6, 2022</p>
                            </div>
                            <h5 class="title"><a href="{{url('blog-details')}}">The 2025 Ford F-150 Raptor – A First Look you need to know</a></h5>
                        </div>
                    </div>
                </div>
                <!-- /Blog Item -->

                <!-- Blog Item -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog-item flex-fill">
                        <div class="blog-img">
                            <img src="{{URL::asset('build/img/blog/blog-12.jpg')}}" class="img-fluid" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-center justify-content-between blog-category">
                                <a href="javascript:void(0);" class="category">Journey</a>
                                <p class="date d-inline-flex align-center"><i class="bx bx-calendar me-1"></i>October 7, 2022</p>
                            </div>
                            <h5 class="title"><a href="{{url('blog-details')}}">The 2025 Ford F-150 Raptor – A First Look you need to know</a></h5>
                        </div>
                    </div>
                </div>
                <!-- /Blog Item -->

                <!-- Blog Item -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog-item flex-fill">
                        <div class="blog-img">
                            <img src="{{URL::asset('build/img/blog/blog-13.jpg')}}" class="img-fluid" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-center justify-content-between blog-category">
                                <a href="javascript:void(0);" class="category">Journey</a>
                                <p class="date d-inline-flex align-center"><i class="bx bx-calendar me-1"></i>October 8, 2022</p>
                            </div>
                            <h5 class="title"><a href="{{url('blog-details')}}">The 2025 Ford F-150 Raptor – A First Look you need to know</a></h5>
                        </div>
                    </div>
                </div>
                <!-- /Blog Item -->

            </div>

            <div class="view-all-btn text-center aos" data-aos="fade-down">
                <a href="{{url('blog-grid')}}" class="btn btn-secondary d-inline-flex align-center">View More<i class="bx bx-right-arrow-alt ms-1"></i></a>
            </div>				

            <div class="subscribe-sec">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="subscribe-content">
                            <h2>Subscribe To Get User Friendly <span>Mobile & Web App</span></h2>
                            <p>Appropriately monetize one-to-one interfaces rather than  cutting-edge. Competently disintermediate backward.</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <span><i class="bx bx-mail-send"></i></span> 
                                    <input type="email" class="form-control" placeholder="Enter You Email Here">
                                    <button type="submit" class="btn btn-subscribe"><i class="bx bx-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="subscribe-img">
                            <img src="{{URL::asset('build/img/about/web-app.png')}}" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div>
                <img src="{{URL::asset('build/img/bg/app-bg.svg')}}" alt="icon" class="app-bg-01">
            </div>

        </div>
    </section>
    <!-- /Blog Section -->

    <!-- FAQ Section -->
    <section class="faq-section-four pt-0">
        <div class="container">	
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading heading-four" data-aos="fade-down">
                        <h2>Frequently asked questions</h2>
                        <p>Explore to learn more about how can empower your business</p>
                    </div>				
                    <div class="accordion faq-accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                    How old do I need to be to rent a car?
                                </button>
                            </h2>
                            <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="true" aria-controls="faqTwo">
                                    What documents do I need to rent a car?
                                </button>
                            </h2>
                            <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="true" aria-controls="faqThree">
                                    What types of vehicles are available for rent?
                                </button>
                            </h2>
                            <div id="faqThree" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="true" aria-controls="faqFour">
                                    Can I rent a car with a debit card?
                                </button>
                            </h2>
                            <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="true" aria-controls="faqFive">
                                    What is your fuel policy?
                                </button>
                            </h2>
                            <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqSix" aria-expanded="true" aria-controls="faqSix">
                                    Can I add additional drivers to my rental agreement?
                                </button>
                            </h2>
                            <div id="faqSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>You can browse our selection online or contact us for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ Section --->

    <section class="categories-section">
        <div class="container">
            <div class="accordion custom-accordion" id="faqAcordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                            View All Cars & Categories
                        </button>
                    </h2>
                    <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAcordion">
                        <div class="accordion-body">
                            <div class="row row-gap-3">
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Coupe</a></li>
                                        <li><a href="javascript:void(0);">Convertible</a></li>
                                        <li><a href="javascript:void(0);">Hatchback</a></li>
                                        <li><a href="javascript:void(0);">Sport utility vehicles</a></li>
                                        <li><a href="javascript:void(0);">Minivan</a></li>
                                        <li><a href="javascript:void(0);">Pickup Truck</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Sports car</a></li>
                                        <li><a href="javascript:void(0);">SUV</a></li>
                                        <li><a href="javascript:void(0);">Wagon</a></li>
                                        <li><a href="javascript:void(0);">Crossover</a></li>
                                        <li><a href="javascript:void(0);">Electric vehicle</a></li>
                                        <li><a href="javascript:void(0);">Jeep</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">C1-segment cars</a></li>
                                        <li><a href="javascript:void(0);">Compact car</a></li>
                                        <li><a href="javascript:void(0);">Hatchback</a></li>
                                        <li><a href="javascript:void(0);">Luxury car</a></li>
                                        <li><a href="javascript:void(0);">MPV</a></li>
                                        <li><a href="javascript:void(0);">Van</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Maruti Suzuki</a></li>
                                        <li><a href="javascript:void(0);">Hyundai</a></li>
                                        <li><a href="javascript:void(0);">Tata Motors</a></li>
                                        <li><a href="javascript:void(0);">Skoda</a></li>
                                        <li><a href="javascript:void(0);">Volkswagen</a></li>
                                        <li><a href="javascript:void(0);">Renault</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Toyota</a></li>
                                        <li><a href="javascript:void(0);">Nissan</a></li>
                                        <li><a href="javascript:void(0);">MG Motor</a></li>
                                        <li><a href="javascript:void(0);">Kia</a></li>
                                        <li><a href="javascript:void(0);">Ford</a></li>
                                        <li><a href="javascript:void(0);">Jeep</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Coupe</a></li>
                                        <li><a href="javascript:void(0);">Convertible</a></li>
                                        <li><a href="javascript:void(0);">Hatchback</a></li>
                                        <li><a href="javascript:void(0);">Sport utility vehicles</a></li>
                                        <li><a href="javascript:void(0);">Minivan</a></li>
                                        <li><a href="javascript:void(0);">Pickup Truck</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @component('components.scrolltotop')
    @endcomponent
@endsection
