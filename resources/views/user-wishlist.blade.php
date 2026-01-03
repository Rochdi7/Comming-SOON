<?php $page = 'user-wishlist'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            User Wishlist
        @endslot
        @slot('li_1')
            User Wishlist
        @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

    <!-- Page Content -->
    <div class="content dashboard-content">
        <div class="container">

            <!-- Content Header -->
            <div class="content-header">
                <h4>Wishlist</h4>
            </div>
            <!-- /Content Header -->

            <div class="row">

                <!-- Wishlist -->
                <div class="col-md-12">
                    <div class="wishlist-wrap">
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="{{ url('listing-details') }}">
                                            <img src="{{ URL::asset('/build/img/car-list-2.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-icon selected" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-original-title="Remove From Wishlist">
                                            <i class="feather-heart"></i>
                                        </a>
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
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
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
                                                        <p>Manual</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>4600 KM</p>
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
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2021</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>6 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin me-2"></i>Pattaya, Thailand</h6>
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
                                            <img src="{{ URL::asset('/build/img/car-list-1.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-icon selected" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-original-title="Remove From Wishlist">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                                    </h3>
                                                    <h6>Category : <span>Ferrarai</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>$100 <span>/ Day</span></h6>
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
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2018</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>5 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin me-2"></i>Newyork, USA</h6>
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
                                        <a href="javascript:void(0)" class="fav-icon" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-original-title="Add to Wishlist">
                                            <i class="feather-heart"></i>
                                        </a>
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
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>$400 <span>/ Day</span></h6>
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
                                                        <p>2500 KM</p>
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
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2019</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>4 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin me-2"></i>Lasvegas, USA</h6>
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
                                            <img src="{{ URL::asset('/build/img/car-list-5.jpg') }}" class="img-fluid"
                                                alt="blog-img">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-icon" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-original-title="Add to Wishlist">
                                            <i class="feather-heart"></i>
                                        </a>
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
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>$45 <span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Manual</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>1700 KM</p>
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
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2019</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>4 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin me-2"></i>Newyork, USA</h6>
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
                                        <a href="javascript:void(0)" class="fav-icon" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-original-title="Add to Wishlist">
                                            <i class="feather-heart"></i>
                                        </a>
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
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>$36 <span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>Manual</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-02.svg') }}"
                                                                alt="10 KM"></span>
                                                        <p>1200 KM</p>
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
                                                                src="{{ URL::asset('/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2018</p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>4 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="address-info">
                                                            <h6><i class="feather-map-pin me-2"></i>Lasvegas, USA</h6>
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

                    </div>
                    <!-- /Wishlist -->

                </div>

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
