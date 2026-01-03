<?php $page = 'listing-map'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Car Listings
        @endslot
        @slot('li_1')
            Listings
        @endslot
        @slot('li_2')
            Listings Map
        @endslot
    @endcomponent

    <!-- Search -->
    <div class="section-search page-search">
        <div class="container">
            <div class="search-box-banner">
                <form action="{{ url('listing-grid') }}">
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
                                    <button class="btn search-button" type="submit"> <i class="fa fa-search"
                                            aria-hidden="true"></i>Search</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- /Search -->

    <!-- Car Grid View -->
    <section class="section car-listing">
        <div class="container-fluid p-0">
            <div class="row gx-0">

                <div class="col-xl-8 col-lg-12">
                    <div class="map-list">

                        <!-- Sort By -->
                        <div class="sort-section">
                            <div class="container">
                                <div class="sortby-sec">
                                    <div class="sorting-div d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="count-search">
                                            <p>Showing 1-9 of 154 Cars</p>
                                        </div>
                                        <div class="product-filter-group">
                                            <div class="sortbyset">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="filter-btns add-popup"><i
                                                                class="feather-filter"></i>Filter</a>
                                                    </li>
                                                    <li>
                                                        <span class="sortbytitle">Show : </span>
                                                        <div class="sorting-select select-one">
                                                            <select class="form-control select">
                                                                <option>5</option>
                                                                <option>10</option>
                                                                <option>15</option>
                                                                <option>20</option>
                                                                <option>30</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="sortbytitle">Sort By </span>
                                                        <div class="sorting-select select-two">
                                                            <select class="form-control select">
                                                                <option>Newest</option>
                                                                <option>Relevance</option>
                                                                <option>Low to High</option>
                                                                <option>High to Low</option>
                                                                <option>Best Rated</option>
                                                                <option>Distance</option>
                                                                <option>Popularity</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="grid-listview">
                                                <ul>
                                                    <li>
                                                        <a href="{{ url('listing-grid') }}">
                                                            <i class="feather-grid"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('listing-list') }}">
                                                            <i class="feather-list"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('listing-map') }}" class="active">
                                                            <i class="feather-map-pin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Sort By -->

                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-1.jpg') }}" class="img-fluid"
                                                alt="Toyota">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <span class="img-count"><i class="feather-image"></i>04</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Ferrari 458 MM Special</a>
                                                    </h3>
                                                    <h6>Category : <span>Ferrarai</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>180 Reviews</span>
                                                    </div>
                                                    <h6>$160<span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-01.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Auto</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>10 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Diesel</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>5 Persons</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2022</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/profiles/avatar-14.jpg') }}"
                                                                alt="user">
                                                        </div>
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin"></i>Amsterdam, Netherland</h6>
                                                        </div>
                                                        <div class="list-km">
                                                            <span class="km-count"><img
                                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                                    alt="author">3.2m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-text">
                                        <span class="bg-danger">Featured</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-2.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">BMW 640 XI Gran Turismo</a>
                                                    </h3>
                                                    <h6>Category : <span>BMW</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>165 Reviews</span>
                                                    </div>
                                                    <h6>$60 <span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Auto</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>13 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Petrol</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                                alt="Power"></span>
                                                        <p>Normal</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>6 Persons</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2021</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                                alt="user">
                                                        </div>
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin"></i>Pattaya, Thailand</h6>
                                                        </div>
                                                        <div class="list-km">
                                                            <span class="km-count"><img
                                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                                    alt="author">3.7m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-3.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Ford Mustang, Blue 2014</a>
                                                    </h3>
                                                    <h6>Category : <span>Ford</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>200 Reviews</span>
                                                    </div>
                                                    <h6>$150<span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-01.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Auto</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>17 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Petrol</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>4 Persons</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2019</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}"
                                                                alt="user">
                                                        </div>
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin"></i>Lasvegas, USA</h6>
                                                        </div>
                                                        <div class="list-km">
                                                            <span class="km-count"><img
                                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                                    alt="author">4.0m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-text">
                                        <span class="bg-warning">Top Rated</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-5.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Audi A3 2019 new</a></h3>
                                                    <h6>Category : <span>Audi</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>150 Reviews</span>
                                                    </div>
                                                    <h6>$45<span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-01.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Manual</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>10 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Petrol</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>4 Persons</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2019</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                                alt="user">
                                                        </div>
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin"></i>Newyork, USA</h6>
                                                        </div>
                                                        <div class="list-km">
                                                            <span class="km-count"><img
                                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                                    alt="author">3.5m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-6.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Ford Mustang 4.0 AT</a>
                                                    </h3>
                                                    <h6>Category : <span>Ford</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>170 Reviews</span>
                                                    </div>
                                                    <h6>$90<span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-01.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Auto</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>10 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Petrol</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>5 Persons</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2019</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}"
                                                                alt="user">
                                                        </div>
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin"></i>Lasvegas, USA</h6>
                                                        </div>
                                                        <div class="list-km">
                                                            <span class="km-count"><img
                                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                                    alt="author">4.1m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-text">
                                        <span class="bg-danger">Featured</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-7.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                                    </h3>
                                                    <h6>Category : <span>Acura</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>180 Reviews</span>
                                                    </div>
                                                    <h6>$30<span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-01.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Auto</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>12 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Diesel</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>5 Persons</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2019</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/profiles/avatar-09.jpg') }}"
                                                                alt="user">
                                                        </div>
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin"></i>Newyork, USA</h6>
                                                        </div>
                                                        <div class="list-km">
                                                            <span class="km-count"><img
                                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                                    alt="author">4.2m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-4.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">2018 Chevrolet Camaro</a>
                                                    </h3>
                                                    <h6>Category : <span>Chevrolet</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>200 Reviews</span>
                                                    </div>
                                                    <h6>$36<span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-01.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Manual</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>18 KM</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>Diesel</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-04.svg') }}"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>5 Persons</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="{{ URL::asset('/build/img/profiles/avatar-13.jpg') }}"
                                                                alt="user">
                                                        </div>
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin"></i>Lasvegas, USA</h6>
                                                        </div>
                                                        <div class="list-km">
                                                            <span class="km-count"><img
                                                                    src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                                    alt="author">4.5m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-text">
                                        <span class="bg-warning">Top Rated</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Pagination-->
                        <div class="blog-pagination">
                            <nav>
                                <ul class="pagination page-item justify-content-center">
                                    <li class="previtem">
                                        <a class="page-link" href="#"><i
                                                class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
                                    </li>
                                    <li class="justify-content-center pagination-center">
                                        <div class="page-group">
                                            <ul>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="active page-link" href="#">2 <span
                                                            class="visually-hidden">(current)</span></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nextlink">
                                        <a class="page-link" href="#">Next <i
                                                class="fas fa-regular fa-arrow-right ms-2"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--/Pagination-->

                    </div>

                </div>

                <div class="col-xl-4 col-lg-12 map-right grid-list-map">

                    <!-- Map -->
                    <div id="map" class="map-listing"></div>
                    <!-- /Map-->

                </div>

            </div>
        </div>
    </section>
    <!-- /Car Grid View -->
@endsection
