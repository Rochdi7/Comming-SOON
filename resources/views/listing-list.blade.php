<?php $page = 'listing-list'; ?>
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
            Car Listings
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

    <!-- Sort By -->
    <div class="sort-section">
        <div class="container">
            <div class="sortby-sec">
                <div class="sorting-div">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                            <div class="count-search">
                                <p>Showing 1-9 of 154 Cars</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                            <div class="product-filter-group">
                                <div class="sortbyset">
                                    <ul>
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
                                            <a href="{{ url('listing-list') }}" class="active">
                                                <i class="feather-list"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('listing-map') }}">
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
        </div>
    </div>
    <!-- /Sort By -->

    <!-- Car Grid View -->
    <section class="section car-listing pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                    <form action="#" autocomplete="off" class="sidebar-form">
                        <div class="sidebar-heading">
                            <h3>What Are You Looking For</h3>
                        </div>
                        <div class="product-search">
                            <div class="form-custom">
                                <input type="text" class="form-control" id="member_search1" placeholder="">
                                <span><img src="{{ URL::asset('/build/img/icons/search.svg') }}" alt="img"></span>
                            </div>
                        </div>
                        <div class="product-availability">
                            <h6>Availability</h6>
                            <div class="status-toggle">
                                <input id="mobile_notifications" class="check" type="checkbox" checked="">
                                <label for="mobile_notifications" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="accord-list">
                            <div class="accordion" id="accordionMain1">
                                <div class="card-header-new" id="headingOne">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Car Brand
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample1">
                                    <div class="card-body-chat">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="checkBoxes1">
                                                    <div class="selectBox-cont">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Tesla
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Ford
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Mercediz Benz
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Audi
                                                        </label>
                                                        <!-- View All -->
                                                        <div class="view-content">
                                                            <div class="viewall-One">
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username">
                                                                    <span class="checkmark"></span> Kia
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username">
                                                                    <span class="checkmark"></span> Honda
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username">
                                                                    <span class="checkmark"></span> Toyota
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- /View All -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain2">
                                <div class="card-header-new" id="headingTwo">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Car Category
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes2">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Convertible (25)
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Coupe (15)
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Sedan (10)
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> EV (5)
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Hatchback (123)
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Luxury (06)
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> SUV (6)
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Wagon (5)
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain3">
                                <div class="card-header-new" id="headingYear">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseYear" aria-expanded="true"
                                            aria-controls="collapseYear">
                                            Year
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseYear" class="collapse" aria-labelledby="headingYear"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes3">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 2024
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 2022
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 2021
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 2020
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> 2019
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> 2018
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> 2019
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain4">
                                <div class="card-header-new" id="headingfuel">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefuel" aria-expanded="true"
                                            aria-controls="collapsefuel">
                                            Fuel Type
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsefuel" class="collapse" aria-labelledby="headingfuel"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="color" id="petrol"
                                                            value="red" checked="">
                                                        <label for="petrol">Petrol</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="color" id="diesel"
                                                            value="red" checked="">
                                                        <label for="diesel">Diesel</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="color" id="electric"
                                                            value="red" checked="">
                                                        <label for="electric">Electric</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="color" id="cng"
                                                            value="red" checked="">
                                                        <label for="cng">CNG</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain5">
                                <div class="card-header-new" id="headingmileage">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapsemileage" aria-expanded="true"
                                            aria-controls="collapsemileage">
                                            Mileage
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsemileage" class="collapse" aria-labelledby="headingmileage"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="mileage" id="limited"
                                                            value="red" checked="">
                                                        <label for="limited">Limited</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="mileage" id="unlimited"
                                                            value="red" checked="">
                                                        <label for="unlimited">Unlimited</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain06">
                                <div class="card-header-new" id="headingrental">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapserental" aria-expanded="true"
                                            aria-controls="collapserental">
                                            Rental Type
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapserental" class="collapse" aria-labelledby="headingrental"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="any" id="any">
                                                        <label for="any">Any</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="day" id="day"
                                                            checked="">
                                                        <label for="day">Per Day</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="hour" id="hour"
                                                            checked="">
                                                        <label for="hour">Per Hour</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="week" id="week">
                                                        <label for="week">Per Week</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain6">
                                <div class="card-header-new" id="headingspec">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapsespec" aria-expanded="true"
                                            aria-controls="collapsespec">
                                            Car Specifications
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsespec" class="collapse" aria-labelledby="headingspec"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes02">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Air Conditioners
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Keyless
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Panoramic
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Bluetooth
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Aux
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Top Window
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Speakers
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Automatic Window
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain7">
                                <div class="card-header-new" id="headingColor">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseColor" aria-expanded="true"
                                            aria-controls="collapseColor">
                                            Colors
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseColor" class="collapse" aria-labelledby="headingColor"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div class="theme-colorsset">
                                            <ul>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="greenColor"
                                                            value="red" checked="">
                                                        <label for="greenColor" class="green-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="yellowColor"
                                                            value="yellow">
                                                        <label for="yellowColor" class="yellow-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="brownColor"
                                                            value="blue">
                                                        <label for="brownColor" class="brown-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="blackColor"
                                                            value="green">
                                                        <label for="blackColor" class="black-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="redColor"
                                                            value="red" checked="">
                                                        <label for="redColor" class="red-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="grayColor"
                                                            value="blue">
                                                        <label for="grayColor" class="gray-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="gray100Color"
                                                            value="green">
                                                        <label for="gray100Color" class="gray100-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="blueColor"
                                                            value="yellow">
                                                        <label for="blueColor" class="blue-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" name="color" id="whiteColor"
                                                            value="yellow">
                                                        <label for="whiteColor" class="white-clr"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain8">
                                <div class="card-header-new" id="headingThree">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Capacity
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample3">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes6">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> 2 Seater
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> 4 Seater
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> 5 Seater
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> 7 Seater
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain9">
                                <div class="card-header-new" id="headingFour">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            Price
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample4">
                                    <div class="card-body-chat">
                                        <div class="filter-range">
                                            <input type="text" class="input-range">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain04">
                                <div class="card-header-new" id="headingtransmiss">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapsetransmission" aria-expanded="true"
                                            aria-controls="collapsetransmission">
                                            Transmission
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsetransmission" class="collapse" aria-labelledby="headingtransmiss"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="transmission" id="manual"
                                                            checked="">
                                                        <label for="manual">Manual </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="transmission" id="semi">
                                                        <label for="semi">Semi Automatic</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="transmission" id="automatic">
                                                        <label for="automatic">Automatic</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain10">
                                <div class="card-header-new" id="headingFive">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="true"
                                            aria-controls="collapseFive">
                                            Rating
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample5">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes4">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="rating-count">5.0</span>
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="rating-count">4.0</span>
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="rating-count">3.0</span>
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="rating-count">2.0</span>
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="rating-count">1.0</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain11">
                                <div class="card-header-new" id="headingSix">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="true"
                                            aria-controls="collapseSix">
                                            Customer Recommendation
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample6">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes5">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> 70% & up
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> 60% & up
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> 50% & up
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> 40% & up
                                                </label>
                                                <div class="viewall-Two">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span>30% & up
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                            <span><i class="feather-filter me-2"></i></span>Filter results
                        </button>
                        <a href="#" class="reset-filter">Reset Filter</a>
                    </form>
                </div>

                <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('listing-details') }}">
                                                    <img src="{{ URL::asset('/build/img/car-list-1.jpg') }}"
                                                        class="img-fluid" alt="Toyota">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('listing-details') }}">
                                                    <img src="{{ URL::asset('/build/img/car-list-1.jpg') }}"
                                                        class="img-fluid" alt="Toyota">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('listing-details') }}">
                                                    <img src="{{ URL::asset('/build/img/car-list-1.jpg') }}"
                                                        class="img-fluid" alt="Toyota">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="{{ url('listing-details') }}">
                                                    <img src="{{ URL::asset('/build/img/car-list-1.jpg') }}"
                                                        class="img-fluid" alt="Toyota">
                                                </a>
                                            </div>
                                        </div>
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
                                                    <a href="{{ url('listing-details') }}"
                                                        class="btn btn-order"><span><i
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
                                                    <a href="{{ url('listing-details') }}"
                                                        class="btn btn-order"><span><i
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
                                                    <a href="{{ url('listing-details') }}"
                                                        class="btn btn-order"><span><i
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
        </div>
    </section>
    <!-- /Car Grid View -->
@endsection
