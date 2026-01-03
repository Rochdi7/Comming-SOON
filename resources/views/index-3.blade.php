<?php $page = 'index-3'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Banner -->
    <section class="banner-section banner-slider">
        <div class="container">
            <div class="home-banner">
                <div class="row align-items-center">
                    <div class="col-lg-7" data-aos="fade-down">
                        <h1>Make your Ride Easy with <span>Dreams rent </span></h1>
                        <h4>We prioritizes customer satisfaction</h4>
                        <div class="banner-search">
                            <form action="{{url('listing-grid')}}" class="form-block d-flex align-items-center">
                                <div class="search-input">
                                    <div class="input-block">
                                        <label>Any type</label>
                                        <select class="select">
                                            <option>Cruiser</option>
                                            <option>Scooters</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <div class="input-block">
                                        <label>Model</label>
                                        <select class="select">
                                            <option>KTM 300</option>
                                            <option>KTM RC 390</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <div class="input-block">
                                        <label>Location</label>
                                        <select class="select">
                                            <option>Newyork</option>
                                            <option>Los Angeles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="bx bx-search-alt"></i>Search</button>
                                </div>
                            </form>
                        </div>
                        <p>Experience the ultimate freedown of Dreamsrental - tailor adventure by choosing from Premium
                            bikes</p>
                        <div class="customer-list">
                            <div class="users-wrap">
                                <ul class="users-list">
                                    <li>
                                        <img src="{{ URL::asset('/build/img/profiles/avatar-11.jpg') }}"
                                            class="img-fluid aos" alt="bannerimage">
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/build/img/profiles/avatar-15.jpg') }}"
                                            class="img-fluid aos" alt="bannerimage">
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                            class="img-fluid aos" alt="bannerimage">
                                    </li>
                                </ul>
                                <div class="customer-info">
                                    <h4>6K + Customers</h4>
                                    <p>has used our renting services </p>
                                </div>
                            </div>
                            <div class="view-all">
                                <a href="{{url('listing-grid')}}" class="btn btn-view d-inline-flex align-items-center">Rent a
                                    Bike</a>
                                <a href="{{url('listing-grid')}}" class="btn btn-secondary d-inline-flex align-items-center"><i
                                        class="bx bxs-plus-circle"></i>Add a Bike </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-image">
            <div class="banner-bg-img" data-aos="fade-left">
                <img src="{{ URL::asset('/build/img/banner-img-01.png') }}" class="img-fluid" alt="img">
                <div class="banner-bg">
                    <img src="{{ URL::asset('/build/img/bg/ban-bg.png') }}" class="img-fluid" alt="img">
                </div>
            </div>
        </div>
        <div class="banner-bgs">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-01.png') }}" class="shape-01 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-02.png') }}" class="shape-02 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-03.png') }}" class="shape-03 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-04.png') }}" class="shape-04 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-05.png') }}" class="shape-05 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-06.png') }}" class="shape-06 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-07.png') }}" class="shape-07 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-05.png') }}" class="shape-08 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-06.png') }}" class="shape-09 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-03.png') }}" class="shape-10 img-fluid" alt="img">
        </div>
    </section>
    <!-- /Banner -->

    <!-- Category  Section -->
    <section class="section category-section">
        <div class="category-bg">
            <img src="{{ URL::asset('/build/img/bg/category-bg.png') }}" class="img-fluid shape-01" alt="image">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-05.png') }}" class="img-fluid shape-02" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Heading title-->
                    <div class="section-heading heading-three" data-aos="fade-down">
                        <h2>Popular Bike <span>Categories</span></h2>
                        <p>Most popular worldwide Category due to their reliability, affordability, and features.</p>
                    </div>
                    <!-- /Heading title -->

                    <!-- Category List -->
                    <div class="bike-category-slider nav-center owl-carousel">
                        <div class="item">
                            <a href="javascript:void(0);" class="category-wrap">
                                <span class="category-img">
                                    <img src="{{ URL::asset('/build/img/icons/category-bike-01.svg') }}"
                                        class="img-fluid" alt="image">
                                </span>
                                <h6>Off Road </h6>
                                <p>35 Bikes</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);" class="category-wrap">
                                <span class="category-img">
                                    <img src="{{ URL::asset('/build/img/icons/category-bike-02.svg') }}"
                                        class="img-fluid" alt="image">
                                </span>
                                <h6>Cruiser</h6>
                                <p>15 Bikes</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);" class="category-wrap">
                                <span class="category-img">
                                    <img src="{{ URL::asset('/build/img/icons/category-bike-03.svg') }}"
                                        class="img-fluid" alt="image">
                                </span>
                                <h6>Scooters</h6>
                                <p>40 Bikes</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);" class="category-wrap">
                                <span class="category-img">
                                    <img src="{{ URL::asset('/build/img/icons/category-bike-04.svg') }}"
                                        class="img-fluid" alt="image">
                                </span>
                                <h6>Tourers</h6>
                                <p>10 Bikes</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);" class="category-wrap">
                                <span class="category-img">
                                    <img src="{{ URL::asset('/build/img/icons/category-bike-05.svg') }}"
                                        class="img-fluid" alt="image">
                                </span>
                                <h6>Sports</h6>
                                <p>20 Bikes</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);" class="category-wrap">
                                <span class="category-img">
                                    <img src="{{ URL::asset('/build/img/icons/category-bike-06.svg') }}"
                                        class="img-fluid" alt="image">
                                </span>
                                <h6>Electric</h6>
                                <p>30 Bikes</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);" class="category-wrap">
                                <span class="category-img">
                                    <img src="{{ URL::asset('/build/img/icons/category-bike-07.svg') }}"
                                        class="img-fluid" alt="image">
                                </span>
                                <h6>Scrambler</h6>
                                <p>20 Bikes</p>
                            </a>
                        </div>
                    </div>
                    <!-- /Category List -->

                    <div class="view-all-btn text-center aos" data-aos="fade-down">
                        <a href="{{url('listing-grid')}}" class="btn btn-secondary">View all Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Category  Section -->

    <!-- Featured Services -->
    <section class="section features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Heading title-->
                    <div class="section-heading heading-three mx-auto" data-aos="fade-down">
                        <h2>Featured & <span>Top Rated Bikes</span></h2>
                        <p>Here's a list of some of the most popular Bikes globally, based on sales and customer preferences
                        </p>
                    </div>
                    <!-- /Heading title -->
                    <div class="bike-feature-slider nav-center owl-carousel">
                        <div class="item">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="image-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-04.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>138 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Harley Davidson</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Drum</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>35 Km/hr</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="feature-text">
                                        <span class="bg-danger">Featured</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="image-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike2-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike2-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike2-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike2-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-07.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>150 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">KTM RC 390</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.0m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Disc</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>30 Km/L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$180 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-warning">Top Rated</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="image-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike3-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike3-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike3-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike3-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-14.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>110 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ducati Hypermotard</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.8m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Drum</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>19 Km/L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$190 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="feature-text">
                                        <span class="bg-danger">Featured</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="image-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike4-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike4-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike4-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike4-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-11.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>180 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">TVS Apache RR BS6</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Disc</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>41 Km/L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$120 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-warning">Top Rated</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="image-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike1-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-07.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>100 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Harley X220</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Drum</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>10 KM / L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="view-all-btn text-center aos" data-aos="fade-down">
                        <a href="{{url('listing-grid')}}" class="btn btn-secondary">View all Bikes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-bg">
            <img src="{{ URL::asset('/build/img/bg/destination-bg-01.png') }}" class="img-fluid shape-01"
                alt="img">
            <img src="{{ URL::asset('/build/img/bg/feature-bg.png') }}" class="img-fluid shape-02" alt="img">
        </div>
    </section>
    <!-- /Featured Services -->

    <!-- Choose Us Section -->
    <section class="section choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Heading title-->
                    <div class="section-heading heading-three" data-aos="fade-down">
                        <h2>Why People love to use <span>Dreams Rent</span></h2>
                        <p>Using Dreams Rent for bike rentals because it offers quality bikes, convenience, flexibility,
                            affordability, excellent customer service & a commitment to community engagement &
                            sustainability.</p>
                    </div>
                    <!-- /Heading title -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="quality-wrap" data-aos="fade-down">
                                <span>
                                    <i class="bx bxs-bookmarks"></i>
                                </span>
                                <h6>Quality Bikes</h6>
                                <p>Dreams Rent offers a fleet of high-quality bikes, that including mountain bikes, road
                                    bikes, city bikes.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quality-wrap" data-aos="fade-down">
                                <span>
                                    <i class="bx bxs-bolt-circle"></i>
                                </span>
                                <h6>Variety of Options</h6>
                                <p>Whether customers are looking for bikes for leisurely rides, commuting, or adventure
                                    cycling.--</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quality-wrap" data-aos="fade-down">
                                <span>
                                    <i class="bx bxs-calendar-heart"></i>
                                </span>
                                <h6>Flexible Rental Periods</h6>
                                <p>Customers appreciate the flexibility of choosing rental durations that suit their
                                    schedules.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quality-wrap" data-aos="fade-down">
                                <span>
                                    <i class="bx bxs-badge-dollar"></i>
                                </span>
                                <h6>Affordable Pricing</h6>
                                <p>Dreams Rent offers competitive pricing for bike rentals, making cycling accessible to a
                                    wide range of people.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quality-img">
            <img src="{{ URL::asset('/build/img/quality-img.png') }}" data-aos="fade-left" class="img-fluid"
                alt="img">
        </div>
        <div class="quality-bg">
            <img src="{{ URL::asset('/build/img/bg/quality-bg.png') }}" class="img-fluid" alt="img">
        </div>
    </section>
    <!-- /Choose Us Section -->

    <!-- Works Section -->
    <section class="section work-section">
        <div class="work-bg">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-01.png') }}" class="shape-01 img-fluid" alt="img">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-03.png') }}" class="shape-02 img-fluid" alt="img">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading heading-three" data-aos="fade-down">
                        <h2>How Dreams rent <span>Works</span></h2>
                        <p>Here's a basic outline of how our bike rental typically Works</p>
                    </div>
                </div>
            </div>
            <!-- /Heading title -->

            <div class="work-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="work-card flex-fill">
                            <div class="work-head">
                                <span class="num-icon">01</span>
                                <div class="work-icon">
                                    <i class="bx bxs-been-here"></i>
                                </div>
                            </div>
                            <div class="work-content">
                                <h5>Select Pickup/ Delivery Date & Location</h5>
                                <p>Determine the date & location for your Bike rental. Consider factors such as your travel
                                    itinerary, pickup/drop-off locations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="work-card flex-fill">
                            <div class="work-head">
                                <span class="num-icon">02</span>
                                <div class="work-icon bg-secondary1">
                                    <i class="bx bx-current-location"></i>
                                </div>
                            </div>
                            <div class="work-content">
                                <h5>Reserve your Bike</h5>
                                <p>Check the availability of your desired vehicle type for your chosen dates and location.
                                    Ensure that the rental rates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="work-card flex-fill">
                            <div class="work-head">
                                <span class="num-icon">03</span>
                                <div class="work-icon">
                                    <i class="bx bx-like"></i>
                                </div>
                            </div>
                            <div class="work-content">
                                <h5>Enjoy Your Ride</h5>
                                <p>Check the availability of your desired vehicle type for your chosen dates and location.
                                    Ensure that the rental rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brand Slider -->
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-sec">
                        <div class="section-heading heading-three" data-aos="fade-down">
                            <p>Bikes from popular Brands around the world</p>
                        </div>
                        <div class="brand-slider owl-carousel">
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-01.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-02.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-03.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-04.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-05.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-06.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-07.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                            <div class="brand-item">
                                <img src="{{ URL::asset('/build/img/brand/brand-04.svg') }}" class="img-fluid"
                                    alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Brand Slider -->

        </div>
    </section>
    <!-- /Works Section -->

    <!-- Popular Section -->
    <section class="section popular-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Heading title-->
                    <div class="section-heading heading-three mx-auto" data-aos="fade-down">
                        <h2>Most Popular <span>Bikes</span></h2>
                        <p>Here's a list of some of the most popular Bikes globally, based on sales and customer preferences
                        </p>
                    </div>
                    <!-- /Heading title -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike5-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike5-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike5-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike5-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-start">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-11.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>140 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Royal Enfield</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.9m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Drum</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>35 Km/L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$110 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike6-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike6-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike6-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike6-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-start">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>140 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Ducati Street fighter</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.9m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Drum</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>35 Km/L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$150 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike7-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike7-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike7-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike7-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-start">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>180 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">TVS Apache RR 310</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Drum</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>35 Km/L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$120 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="listing-item bike-list">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike8-slide-01.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike8-slide-02.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike8-slide-03.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{ URL::asset('/build/img/bike/bike8-slide-04.png') }}"
                                                    class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-start">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-12.jpg') }}"
                                                alt="author">
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex justify-content-between">
                                        <div class="list-rating">
                                            <div class="list-ratings">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>180 Reviews</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="{{url('listing-details')}}">Kawasaki Ninja 400</a>
                                            </h3>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                        alt="img"></span>
                                                <p>Drum</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                        alt="img"></span>
                                                <p>41 Km/L</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                        alt="img"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                        alt="img"></span>
                                                <p>Tubeless</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-button">
                                        <div class="listing-price">
                                            <h6>$120 <span>/ Day</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                            <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bike-bg">
            <img src="{{ URL::asset('/build/img/bg/bike-bg.png') }}" class="img-fluid" alt="img">
        </div>
    </section>
    <!-- /Popular Section -->

    <!-- Quote Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-list">
                <ul>
                    <li>
                        <img src="{{ URL::asset('/build/img/icons/quote-01.svg') }}" class="img-fluid" alt="img">
                    </li>
                    <li>
                        <img src="{{ URL::asset('/build/img/icons/quote-02.svg') }}" class="img-fluid" alt="img">
                    </li>
                    <li>
                        <img src="{{ URL::asset('/build/img/icons/quote-03.svg') }}" class="img-fluid" alt="img">
                    </li>
                    <li>
                        <img src="{{ URL::asset('/build/img/icons/quote-04.svg') }}" class="img-fluid" alt="img">
                    </li>
                    <li>
                        <img src="{{ URL::asset('/build/img/icons/quote-05.svg') }}" class="img-fluid" alt="img">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Quote Section -->

    <!-- Destinations Section -->
    <section class="section destination-section">
        <div class="destination-bg">
            <img src="{{ URL::asset('/build/img/bg/destination-bg-01.png') }}" class="img-fluid shape-01"
                alt="img">
            <img src="{{ URL::asset('/build/img/bg/destination-bg-02.png') }}" class="img-fluid shape-02"
                alt="img">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="section-heading heading-three mx-auto" data-aos="fade-down">
                        <h2>Featured <span>Destinations</span></h2>
                        <p>Here's a list of some of the most popular Bikes globally, based on sales and customer preferences
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Heading title -->

            <div class="row">
                <div class="col-lg-3 col-sm-6 order-lg-1 order-sm-1">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ URL::asset('/build/img/destination/destination-01.jpg') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Dubai</h5>
                            <p>50 Bikes</p>
                            <a href="javascript:void(0);" class="btn btn-primary">Explore all bikes<i
                                    class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6 order-lg-2 order-sm-5">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ URL::asset('/build/img/destination/destination-02.jpg') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Antalya</h5>
                            <p>87 Bikes</p>
                            <a href="javascript:void(0);" class="btn btn-primary">Explore all bikes<i
                                    class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-lg-3 order-sm-3">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ URL::asset('/build/img/destination/destination-03.jpg') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Honk kong</h5>
                            <p>153 Bikes</p>
                            <a href="javascript:void(0);" class="btn btn-primary">Explore all bikes<i
                                    class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6 order-lg-4 order-sm-last">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ URL::asset('/build/img/destination/destination-04.jpg') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Paris</h5>
                            <p>146 Bikes</p>
                            <a href="javascript:void(0);" class="btn btn-primary">Explore all bikes<i
                                    class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 order-lg-5 order-sm-2">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ URL::asset('/build/img/destination/destination-05.jpg') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Bangkok</h5>
                            <p>50 Bikes</p>
                            <a href="javascript:void(0);" class="btn btn-primary">Explore all bikes<i
                                    class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-lg-6 order-sm-4">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ URL::asset('/build/img/destination/destination-06.jpg') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Newyork</h5>
                            <p>140 Bikes</p>
                            <a href="javascript:void(0);" class="btn btn-primary">Explore all bikes<i
                                    class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Destinations Section -->

    <!-- Recommended Section -->
    <section class="section recommend-section">
        <div class="container-fluid">
            <!-- Heading title-->
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="section-heading heading-three mx-auto" data-aos="fade-down">
                        <h2>Highly <span>Recommended</span></h2>
                        <p>Here's a list of some of the most popular Bikes globally, based on sales and customer preferences
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Heading title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="recommend-slider owl-carousel">

                        <div class="listing-item bike-list">
                            <div class="listing-img">
                                <a href="{{url('listing-details')}}">
                                    <img src="{{ URL::asset('/build/img/bike/bike-01.png') }}" class="img-fluid"
                                        alt="img">
                                </a>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features d-flex justify-content-between">
                                    <div class="list-rating">
                                        <div class="list-ratings">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span>138 Reviews</span>
                                        </div>
                                        <h3 class="listing-title">
                                            <a href="{{url('listing-details')}}">KTM 1290 Super Duke R EVO</a>
                                        </h3>
                                    </div>
                                    <div class="list-km">
                                        <span class="km-count"><img
                                                src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                alt="author">3.2m</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                    alt="img"></span>
                                            <p>Drum</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                    alt="img"></span>
                                            <p>41 Km/L</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                    alt="img"></span>
                                            <p>Diesel</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                    alt="img"></span>
                                            <p>Tubeless</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-button">
                                    <div class="listing-price">
                                        <h6>$160 <span>/ Day</span></h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                        <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-item bike-list">
                            <div class="listing-img">
                                <a href="{{url('listing-details')}}">
                                    <img src="{{ URL::asset('/build/img/bike/bike-03.png') }}" class="img-fluid"
                                        alt="img">
                                </a>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features d-flex justify-content-between">
                                    <div class="list-rating">
                                        <div class="list-ratings">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span>112 Reviews</span>
                                        </div>
                                        <h3 class="listing-title">
                                            <a href="{{url('listing-details')}}">Honda Rebel 300</a>
                                        </h3>
                                    </div>
                                    <div class="list-km">
                                        <span class="km-count"><img
                                                src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                alt="author">3.5m</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                    alt="img"></span>
                                            <p>Drum</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                    alt="img"></span>
                                            <p>20 Km/L</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                    alt="img"></span>
                                            <p>Diesel</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                    alt="img"></span>
                                            <p>Tubeless</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-button">
                                    <div class="listing-price">
                                        <h6>$150 <span>/ Day</span></h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                        <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-item bike-list">
                            <div class="listing-img">
                                <a href="{{url('listing-details')}}">
                                    <img src="{{ URL::asset('/build/img/bike/bike-02.png') }}" class="img-fluid"
                                        alt="img">
                                </a>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features d-flex justify-content-between">
                                    <div class="list-rating">
                                        <div class="list-ratings">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span>125 Reviews</span>
                                        </div>
                                        <h3 class="listing-title">
                                            <a href="{{url('listing-details')}}">Kawasaki z900</a>
                                        </h3>
                                    </div>
                                    <div class="list-km">
                                        <span class="km-count"><img
                                                src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                alt="author">3.0m</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-01.svg') }}"
                                                    alt="img"></span>
                                            <p>Drum</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-02.svg') }}"
                                                    alt="img"></span>
                                            <p>17 Km/L</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-03.svg') }}"
                                                    alt="img"></span>
                                            <p>Diesel</p>
                                        </li>
                                        <li>
                                            <span><img src="{{ URL::asset('/build/img/icons/bike-icon-04.svg') }}"
                                                    alt="img"></span>
                                            <p>Tubeless</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-button">
                                    <div class="listing-price">
                                        <h6>$180 <span>/ Day</span></h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                        <a href="{{url('listing-details')}}" class="btn btn-order">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Recommended Section -->

    <!-- FAQ  -->
    <section class="section faq-section-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Heading title-->
                    <div class="section-heading heading-three" data-aos="fade-down">
                        <h2>Frequently Asked Questions</h2>
                        <p>Feel free to customize them further to align with your specific policies</p>
                    </div>
                    <!-- /Heading title -->
                    <div class="faq-info">
                        <div class="faq-card" data-aos="fade-down">
                            <h4 class="faq-title">
                                <a class="collapseds" data-bs-toggle="collapse" href="#faqOne"
                                    aria-expanded="true">How old do I need to be to rent a Bike ?</a>
                            </h4>
                            <div id="faqOne" class="card-collapse collapse show">
                                <p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans,
                                    SUVs and luxury vehicles. You can browse our selection online or contact us for
                                    assistance in choosing the right vehicle for you</p>
                            </div>
                        </div>
                        <div class="faq-card" data-aos="fade-down">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo"
                                    aria-expanded="false">What documents do I need to rent a Bike?</a>
                            </h4>
                            <div id="faqTwo" class="card-collapse collapse">
                                <p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans,
                                    SUVs and luxury vehicles. You can browse our selection online or contact us for
                                    assistance in choosing the right vehicle for you</p>
                            </div>
                        </div>
                        <div class="faq-card" data-aos="fade-down">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqThree"
                                    aria-expanded="false">What types of vehicles are available for rent?</a>
                            </h4>
                            <div id="faqThree" class="card-collapse collapse">
                                <p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans,
                                    SUVs and luxury vehicles. You can browse our selection online or contact us for
                                    assistance in choosing the right vehicle for you</p>
                            </div>
                        </div>
                        <div class="faq-card" data-aos="fade-down">
                            <h4 class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqFour"
                                    aria-expanded="false">Can I rent a Bike with a debit card?</a>
                            </h4>
                            <div id="faqFour" class="card-collapse collapse">
                                <p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans,
                                    SUVs and luxury vehicles. You can browse our selection online or contact us for
                                    assistance in choosing the right vehicle for you</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="customer-content">
                        <p>Overall, car rental counters serve as the primary point of contact for customers to pick up their
                            rental vehicles and complete the necessary paperwork before embarking on their journey. The
                            rental agents are there to assist customers every step of the way and ensure a smooth and
                            seamless rental experience.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="count-box">
                                    <span class="counts-icon">
                                        <img src="{{ URL::asset('/build/img/icons/count-01.svg') }}"
                                            class="img-fluid" alt="img">
                                    </span>
                                    <div class="count-info">
                                        <h3><span class="counterUp">625</span>+</h3>
                                        <p>Locations to Pickup</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="count-box">
                                    <span class="counts-icon">
                                        <img src="{{ URL::asset('/build/img/icons/count-02.svg') }}"
                                            class="img-fluid" alt="img">
                                    </span>
                                    <div class="count-info">
                                        <h3><span class="counterUp">2547</span>+</h3>
                                        <p>Count of Bikes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="count-box">
                                    <span class="counts-icon">
                                        <img src="{{ URL::asset('/build/img/icons/count-03.svg') }}"
                                            class="img-fluid" alt="img">
                                    </span>
                                    <div class="count-info">
                                        <h3><span class="counterUp">15000</span></h3>
                                        <p>Total Kilometers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="count-box">
                                    <span class="counts-icon">
                                        <img src="{{ URL::asset('/build/img/icons/count-04.svg') }}"
                                            class="img-fluid" alt="img">
                                    </span>
                                    <div class="count-info">
                                        <h3><span class="counterUp">16</span>+</h3>
                                        <p>Happy Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-bg">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-01.png') }}" class="img-fluid shape-01" alt="img">
            <img src="{{ URL::asset('/build/img/bg/faq-bg-01.png') }}" class="img-fluid shape-02" alt="img">
            <img src="{{ URL::asset('/build/img/bg/faq-bg-02.png') }}" class="img-fluid shape-03" alt="img">
        </div>
    </section>
    <!-- /FAQ -->

    <!-- Bike Section -->
    <section class="section bike-section">
        <div class="container">
            <div class="bike-wrap">
                <div class="bike-content">
                    <h2>Want to add your Bike for rent in Dreams rent</h2>
                </div>
                <div class="bike-btn">
                    <a href="{{url('register')}}" class="btn btn-theme">Add your Listing</a>
                </div>
            </div>
        </div>
        <div class="bike-bg">
            <img class="img-fluid shape-01" src="{{ URL::asset('/build/img/bg/ban-bg-05.png') }}" alt="Image">
            <img class="img-fluid shape-02" src="{{ URL::asset('/build/img/bg/ban-bg-06.png') }}" alt="Image">
            <img class="img-fluid shape-03" src="{{ URL::asset('/build/img/bg/shape-bg.png') }}" alt="Image">
            <img class="img-fluid shape-04" src="{{ URL::asset('/build/img/bg/ban-bg-06.png') }}" alt="Image">
        </div>
    </section>
    <!-- /Bike Section -->

    <!-- Pricing Plan -->
    <section class="price-section">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading heading-three mx-auto" data-aos="fade-down">
                <h2 class="mx-auto">Scrutinize the Optimum Pricing Scheme <span>to Begin</span>.</h2>
                <p>Pricing plans for businesses at every stage of growth. Try our risk-free for 14 days. No credit card
                    required.</p>
            </div>
            <!-- /Heading title -->

            <!-- Plan Selected -->
            <div class="price-tab">
                <ul class="nav">
                    <li>
                        <a href="#" data-bs-toggle="tab" data-bs-target="#month" class="active">Monthly</a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="tab" data-bs-target="#year">Yearly<span>Save 20%</span></a>
                    </li>
                </ul>
            </div>
            <!-- /Plan Selected -->
            <div class="tab-content">
                <div class="tab-pane show active" id="month">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="price-wrap">
                                <div class="price-head">
                                    <span class="level-badge">Basic </span>
                                    <p>For all individuals and starters who want to start with domaining.</p>
                                </div>
                                <div class="price-level">
                                    <h3>$15</h3>
                                    <p>Per member, per Month</p>
                                    <span class="trial-day">Start free 14-day Trial</span>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li><i class="bx bxs-check-circle"></i>Access to All Features</li>
                                        <li><i class="bx bxs-check-circle"></i>1k lookups / per month</li>
                                        <li><i class="bx bxs-check-circle"></i>10 Monitoring Quota</li>
                                        <li><i class="bx bxs-check-circle"></i>30K API Credits / month</li>
                                        <li><i class="bx bxs-check-circle"></i>60 minutes Monitoring intervel</li>
                                        <li><i class="bx bxs-check-circle"></i>20% discount on backorders</li>
                                        <li><i class="bx bxs-check-circle"></i>Domain Name Appraisal <span
                                                class="coming-soon">Coming Soon</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="price-wrap active">
                                <div class="price-head">
                                    <span class="level-badge bg-green">Commercial </span>
                                    <p>For all individuals and starters who want to start with domaining.</p>
                                </div>
                                <div class="price-level">
                                    <h3>$55</h3>
                                    <p>Per member, per Month</p>
                                    <span class="trial-day bg-primary">Start free 14-day Trial</span>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li><i class="bx bxs-check-circle"></i>Access to All Features</li>
                                        <li><i class="bx bxs-check-circle"></i>1k lookups / per month</li>
                                        <li><i class="bx bxs-check-circle"></i>10 Monitoring Quota</li>
                                        <li><i class="bx bxs-check-circle"></i>30K API Credits / month</li>
                                        <li><i class="bx bxs-check-circle"></i>60 minutes Monitoring intervel</li>
                                        <li><i class="bx bxs-check-circle"></i>20% discount on backorders</li>
                                        <li><i class="bx bxs-check-circle"></i>Domain Name Appraisal <span
                                                class="coming-soon">Coming Soon</span></li>
                                    </ul>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-danger">Best Value</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="price-wrap">
                                <div class="price-head">
                                    <span class="level-badge bg-purple">Premium </span>
                                    <p>For all individuals and starters who want to start with domaining.</p>
                                </div>
                                <div class="price-level">
                                    <h3>$105</h3>
                                    <p>Per member, per Month</p>
                                    <span class="trial-day">Start free 14-day Trial</span>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li><i class="bx bxs-check-circle"></i>Access to All Features</li>
                                        <li><i class="bx bxs-check-circle"></i>1k lookups / per month</li>
                                        <li><i class="bx bxs-check-circle"></i>10 Monitoring Quota</li>
                                        <li><i class="bx bxs-check-circle"></i>30K API Credits / month</li>
                                        <li><i class="bx bxs-check-circle"></i>60 minutes Monitoring intervel</li>
                                        <li><i class="bx bxs-check-circle"></i>20% discount on backorders</li>
                                        <li><i class="bx bxs-check-circle"></i>Domain Name Appraisal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="year">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="price-wrap">
                                <div class="price-head">
                                    <span class="level-badge">Basic </span>
                                    <p>For all individuals and starters who want to start with domaining.</p>
                                </div>
                                <div class="price-level">
                                    <h3>$55</h3>
                                    <p>Per member, per Month</p>
                                    <span class="trial-day">Start free 14-day Trial</span>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li><i class="bx bxs-check-circle"></i>Access to All Features</li>
                                        <li><i class="bx bxs-check-circle"></i>1k lookups / per month</li>
                                        <li><i class="bx bxs-check-circle"></i>10 Monitoring Quota</li>
                                        <li><i class="bx bxs-check-circle"></i>30K API Credits / month</li>
                                        <li><i class="bx bxs-check-circle"></i>60 minutes Monitoring intervel</li>
                                        <li><i class="bx bxs-check-circle"></i>20% discount on backorders</li>
                                        <li><i class="bx bxs-check-circle"></i>Domain Name Appraisal <span
                                                class="coming-soon">Coming Soon</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="price-wrap active">
                                <div class="price-head">
                                    <span class="level-badge bg-green">Commercial </span>
                                    <p>For all individuals and starters who want to start with domaining.</p>
                                </div>
                                <div class="price-level">
                                    <h3>$85</h3>
                                    <p>Per member, per Month</p>
                                    <span class="trial-day bg-primary">Start free 14-day Trial</span>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li><i class="bx bxs-check-circle"></i>Access to All Features</li>
                                        <li><i class="bx bxs-check-circle"></i>1k lookups / per month</li>
                                        <li><i class="bx bxs-check-circle"></i>10 Monitoring Quota</li>
                                        <li><i class="bx bxs-check-circle"></i>30K API Credits / month</li>
                                        <li><i class="bx bxs-check-circle"></i>60 minutes Monitoring intervel</li>
                                        <li><i class="bx bxs-check-circle"></i>20% discount on backorders</li>
                                        <li><i class="bx bxs-check-circle"></i>Domain Name Appraisal <span
                                                class="coming-soon">Coming Soon</span></li>
                                    </ul>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-danger">Best Value</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="price-wrap">
                                <div class="price-head">
                                    <span class="level-badge bg-purple">Premium </span>
                                    <p>For all individuals and starters who want to start with domaining.</p>
                                </div>
                                <div class="price-level">
                                    <h3>$105</h3>
                                    <p>Per member, per Month</p>
                                    <span class="trial-day">Start free 14-day Trial</span>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li><i class="bx bxs-check-circle"></i>Access to All Features</li>
                                        <li><i class="bx bxs-check-circle"></i>1k lookups / per month</li>
                                        <li><i class="bx bxs-check-circle"></i>10 Monitoring Quota</li>
                                        <li><i class="bx bxs-check-circle"></i>30K API Credits / month</li>
                                        <li><i class="bx bxs-check-circle"></i>60 minutes Monitoring intervel</li>
                                        <li><i class="bx bxs-check-circle"></i>20% discount on backorders</li>
                                        <li><i class="bx bxs-check-circle"></i>Domain Name Appraisal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-bg">
                <img class="img-fluid shape-01" src="{{ URL::asset('/build/img/bg/price-bg.png') }}"
                    alt="Image">
                <img src="{{ URL::asset('/build/img/bg/destination-bg-01.png') }}" class="img-fluid shape-02"
                    alt="img">
                <img src="{{ URL::asset('/build/img/bg/price-bg-01.png') }}" class="img-fluid shape-03"
                    alt="img">
            </div>
        </div>
    </section>
    <!-- /Pricing Plan -->

    <!-- About us Testimonials -->
    <section class="section testimonials-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-feedback">
                        <!-- Heading title-->
                        <div class="section-heading heading-three" data-aos="fade-down">
                            <h2 class="title">What Our <br><span>Customers Say</span> </h2>
                        </div>
                        <!-- /Heading title -->

                        <img src="{{ URL::asset('/build/img/testimonial-img.jpg') }}" alt="img"
                            class="img-fluid">
                        <div class="feedback-item">
                            <div class="feedback-info">
                                <h6>Great</h6>
                                <div class="rate-icon">
                                    <span><i class="bx bxs-star"></i></span>
                                    <span><i class="bx bxs-star"></i></span>
                                    <span><i class="bx bxs-star"></i></span>
                                    <span><i class="bx bxs-star"></i></span>
                                    <span><i class="bx bxs-star"></i></span>
                                </div>
                                <p>Based on 5,801 Reviews</p>
                            </div>
                            <div class="feedback-user">
                                <h3><i class="bx bxs-star"></i>Trustpilot</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-slider">
                            <div class="testimonial-wrap">
                                <div class="users-info">
                                    <div class="testimonial-name">
                                        <h6>Marian Hendriques</h6>
                                        <p>Dubai, Emirates</p>
                                    </div>
                                    <div class="users-rating">
                                        <div class="rate-icon">
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                        </div>
                                        <p><i class="bx bxs-check-circle"></i>Verified</p>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <h3>“ From a Satisfied Business Traveler “</h3>
                                    <p>As a frequent business traveler, I rely on Dreams Rent for all my transportation
                                        needs. Their extensive fleet of vehicles, convenient locations, and competitive
                                        pricing make them my go-to choice every time. Plus, their friendly staff always go
                                        the extra mile to ensure a seamless rental experience.</p>
                                </div>
                            </div>
                            <div class="testimonial-wrap">
                                <div class="users-info">
                                    <div class="testimonial-name">
                                        <h6>Lyon Avenue</h6>
                                        <p>Derby, UK</p>
                                    </div>
                                    <div class="users-rating">
                                        <div class="rate-icon">
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                        </div>
                                        <p><i class="bx bxs-check-circle"></i>Verified</p>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <h3>“ David's Urban Exploration “</h3>
                                    <p>As a frequent traveler, finding reliable bike rental services is crucial for me. I
                                        stumbled upon this website during my recent trip, and I'm glad I did. The process of
                                        booking was seamless, and the prices were reasonable. The best part was the quality
                                        of the bikes; they were well-maintained and comfortable to ride.</p>
                                </div>
                            </div>
                            <div class="testimonial-wrap">
                                <div class="users-info">
                                    <div class="testimonial-name">
                                        <h6>Westfall Avenue</h6>
                                        <p>New York, USA</p>
                                    </div>
                                    <div class="users-rating">
                                        <div class="rate-icon">
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                        </div>
                                        <p><i class="bx bxs-check-circle"></i>Verified</p>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <h3>“ Sarah's Adventure “</h3>
                                    <p>Absolutely loved my experience with Dreams Rent! Booking was a breeze; their website
                                        is user-friendly and intuitive. The bike I rented was in excellent condition, which
                                        made exploring the city a joy. What stood out the most was the exceptional customer
                                        service.</p>
                                </div>
                            </div>
                            <div class="testimonial-wrap">
                                <div class="users-info">
                                    <div class="testimonial-name">
                                        <h6>Saint Clair Street</h6>
                                        <p>Norwich, UK</p>
                                    </div>
                                    <div class="users-rating">
                                        <div class="rate-icon">
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                            <span><i class="bx bxs-star"></i></span>
                                        </div>
                                        <p><i class="bx bxs-check-circle"></i>Verified</p>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <h3>“ Edward's Scenic Ride “</h3>
                                    <p>From start to finish, renting a bike through this website was an absolute pleasure.
                                        The website interface was easy to navigate, and I could quickly find the perfect
                                        bike for my needs. When I arrived to pick up the bike, I was impressed by its
                                        excellent condition. It was evident that they take pride in maintaining their fleet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slider testimonial-thumbnails">
                            <div><img src="{{ URL::asset('/build/img/profiles/avatar-11.jpg') }}" alt="image">
                            </div>
                            <div><img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}" alt="image">
                            </div>
                            <div><img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}" alt="image">
                            </div>
                            <div><img src="{{ URL::asset('/build/img/profiles/avatar-04.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-bg">
            <img class="img-fluid shape-01" src="{{ URL::asset('/build/img/bg/ban-bg-04.png') }}" alt="Image">
            <img src="{{ URL::asset('/build/img/bg/ban-bg-01.png') }}" class="img-fluid shape-02" alt="img">
        </div>
    </section>
    <!-- About us Testimonials -->

    <!-- Blog Section -->
    <section class="blog-section bike-news">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading heading-three mx-auto" data-aos="fade-down">
                <h2>Contemporary news and insights <span>for you</span></h2>
                <p>Here's a hypothetical blog post about car rental services</p>
            </div>
            <!-- /Heading title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider nav-center owl-carousel">

                        <!-- Blog List -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{url('blog-details')}}"><img class="img-fluid"
                                        src="{{ URL::asset('/build/img/blog/blog-bike-01.jpg') }}"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="{{url('blog-details')}}">Unlocking the Freedom of Travel: The
                                        Ultimate Guide.</a></h3>
                                <p class="blog-description">Are you planning your next adventure but feeling over whelmed
                                    by the logistics of transportation...</p>
                                <div class="blog-footer">
                                    <p><i class="bx bx-calendar"></i>Apr 21, 2024</p>
                                    <a href="{{url('blog-details')}}" class="read-more">Read More<i
                                            class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog List -->

                        <!-- Blog List -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{url('blog-details')}}"><img class="img-fluid"
                                        src="{{ URL::asset('/build/img/blog/blog-bike-02.jpg') }}"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="{{url('blog-details')}}">Tips for a Seamless Rental
                                        Experience</a></h3>
                                <p class="blog-description">Book your rental car in advance to secure the best rates and
                                    availability, especially during...</p>
                                <div class="blog-footer">
                                    <p><i class="bx bx-calendar"></i>Apr 27, 2024</p>
                                    <a href="{{url('blog-details')}}" class="read-more">Read More<i
                                            class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog List -->

                        <!-- Blog List -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{url('blog-details')}}"><img class="img-fluid"
                                        src="{{ URL::asset('/build/img/blog/blog-bike-03.jpg') }}"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="{{url('blog-details')}}">Embark on Your Next Adventure with
                                        Confidence.</a></h3>
                                <p class="blog-description">With the freedom and flexibility of car rentals, the world is
                                    yours to explore!...</p>
                                <div class="blog-footer">
                                    <p><i class="bx bx-calendar"></i>May 02, 2024</p>
                                    <a href="{{url('blog-details')}}" class="read-more">Read More<i
                                            class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog List -->

                        <!-- Blog List -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{url('blog-details')}}"><img class="img-fluid"
                                        src="{{ URL::asset('/build/img/blog/blog-bike-04.jpg') }}"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="{{url('blog-details')}}">Exploring the Outdoors: A Guide to
                                        Bike Rentals and Adventure</a></h3>
                                <p class="blog-description">One of the first steps in planning your biking adventure is
                                    selecting the right bike...</p>
                                <div class="blog-footer">
                                    <p><i class="bx bx-calendar"></i>May 16, 2024</p>
                                    <a href="{{url('blog-details')}}" class="read-more">Read More<i
                                            class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog List -->

                        <!-- Blog List -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{url('blog-details')}}"><img class="img-fluid"
                                        src="{{ URL::asset('/build/img/blog/blog-bike-05.jpg') }}"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="{{url('blog-details')}}">Ride into Adventure: Exploring
                                        Nature's Beauty with Bikes </a></h3>
                                <p class="blog-description">From rugged mountain trails and scenic coastal paths to
                                    tranquil forested routes, the great...</p>
                                <div class="blog-footer">
                                    <p><i class="bx bx-calendar"></i>May 25, 2024</p>
                                    <a href="{{url('blog-details')}}" class="read-more">Read More<i
                                            class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog List -->

                    </div>
                </div>
            </div>
            <div class="view-all-btn text-center aos-init aos-animate" data-aos="fade-down">
                <a href="{{url('blog-details')}}" class="btn btn-secondary">View all Blog</a>
            </div>

        </div>
    </section>
    <!-- /Blog Section -->

    <!-- Best Section -->
    <section class="section rental-section">
        <div class="container">
            <div class="rental-wrap">
                <div class="rental-content">
                    <h2>We Make Finding The Right Bike Simple</h2>
                    <div class="btn-item">
                        <a href="{{url('listing-grid')}}" class="btn btn-theme">View all Bikes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rental-bg">
            <img class="img-fluid ban-bg" src="{{ URL::asset('/build/img/bg/bike-bg.jpg') }}" alt="Image">
            <img class="img-fluid shape-01" src="{{ URL::asset('/build/img/bg/ban-bg-05.png') }}" alt="Image">
            <img class="img-fluid shape-02" src="{{ URL::asset('/build/img/bg/ban-bg-06.png') }}" alt="Image">
            <img class="img-fluid shape-03" src="{{ URL::asset('/build/img/bg/shape-bg.png') }}" alt="Image">
            <img class="img-fluid shape-04" src="{{ URL::asset('/build/img/bg/ban-bg-04.png') }}" alt="Image">
        </div>
    </section>
    <!-- /Best Section -->
@endsection
