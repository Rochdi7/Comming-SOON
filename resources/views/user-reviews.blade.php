<?php $page = 'user-reviews'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            User Reviews
        @endslot
        @slot('li_1')
            User Reviews
        @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <!-- Sort By -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="sorting-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="filter-group">
                                    <div class="sort-week sort">
                                        <div class="dropdown dropdown-action">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                This Week <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    This Week
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    This Month
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Last 30 Days
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#custom_date">
                                                    Custom
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sort-relevance sort">
                                        <div class="dropdown dropdown-action">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Sort By Relevance <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Sort By Relevance
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Sort By Ascending
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Sort By Descending
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Sort By Alphabet
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Sort By -->

            <div class="row">

                <!-- Reviews -->
                <div class="col-lg-12 d-flex">
                    <div class="card book-card flex-fill mb-0">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <h4>All Reviews <span>40</span></h4>
                                </div>
                                <div class="col-md-7 text-md-end">
                                    <div class="table-search">
                                        <div id="tablefilter" class="me-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive dashboard-table">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username" id="select-all">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Car Name</th>
                                            <th>Rental Type</th>
                                            <th>Review</th>
                                            <th>Ratings</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-04.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#add_review">Ferrari 458 MM Speciale</a>
                                                        <p>Delivery</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Hourly</p>
                                            </td>
                                            <td>
                                                <p>The car arrived early & the rep was courteous and polite.</p>
                                            </td>
                                            <td>
                                                <div class="review-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star-half-stroke filled"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="feather-eye"></i> View
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-01.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#add_review">Toyota Camry SE 350</a>
                                                        <p>Self Pickup</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Day</p>
                                            </td>
                                            <td>
                                                <p>The car was a lovely car to drive no problem with it all.</p>
                                            </td>
                                            <td>
                                                <div class="review-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(4.0)</span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#inprogress_booking">
                                                            <i class="feather-eye"></i> View
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-05.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#add_review">Kia Soul 2016</a>
                                                        <p>Delivery</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Weekly</p>
                                            </td>
                                            <td>
                                                <p>Experience was great travelling wih Dreams Rental</p>
                                            </td>
                                            <td>
                                                <div class="review-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span>(5.0)</span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="feather-eye"></i> View
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-03.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#add_review">Audi A3 2019 new</a>
                                                        <p>Self Pickup</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Monthly</p>
                                            </td>
                                            <td>
                                                <p>Best service with good price, nice vehicle overall very good</p>
                                            </td>
                                            <td>
                                                <div class="review-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span>(5.0)</span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="feather-eye"></i> View
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-05.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#add_review">2018 Chevrolet Camaro</a>
                                                        <p>Delivery</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Day</p>
                                            </td>
                                            <td>
                                                <p>Smooth process, modern vehicle & fair price - great rental experience</p>
                                            </td>
                                            <td>
                                                <div class="review-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span>(5.0)</span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="feather-eye"></i> View
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-06.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#add_review">Acura Sport Version</a>
                                                        <p>Sel pickup</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Hourly</p>
                                            </td>
                                            <td>
                                                <p>Excellent service, clean car & smooth pickup & drop-off process</p>
                                            </td>
                                            <td>
                                                <div class="review-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span>(5.0)</span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="feather-eye"></i> View
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-08.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#add_review">Toyota Tacoma 4WD</a>
                                                        <p>Delivery</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Monthly</p>
                                            </td>
                                            <td>
                                                <p>Quick & easy rental and also fair price for what you get</p>
                                            </td>
                                            <td>
                                                <div class="review-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(4.0)</span>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="feather-eye"></i> View
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                            <i class="feather-trash-2"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="tablelength"></div>
                                    </div>
                                    <div class="col-md-6 text-md-end">
                                        <div id="tablepage"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Reviews -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
