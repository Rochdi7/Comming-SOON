<?php $page = 'user-booking-cancelled'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            User Bookings
        @endslot
        @slot('li_1')
            User Bookings
        @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <!-- Content Header -->
            <div class="content-header d-flex align-items-center justify-content-between">
                <h4>My Bookings</h4>
                <ul class="booking-nav">
                    <li>
                        <a href="{{url('user-booking-cancelled')}}" class="active"><i class="fa-solid fa-list"></i></a>
                    </li>
                    <li>
                        <a href="{{url('booking-cancelled-calendar')}}"><i class="fa-solid fa-calendar-days"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /Content Header -->

            <!-- Sort By -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="sorting-info">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-7 col-lg-8 col-sm-12 col-12">
                                <div class="booking-lists">
                                    <ul class="nav">
                                        <li><a href="{{ url('user-bookings') }}">All Bookings</a></li>
                                        <li><a href="{{ url('user-booking-upcoming') }}">Upcoming</a></li>
                                        <li><a href="{{ url('user-booking-inprogress') }}">Inprogress</a></li>
                                        <li><a href="{{ url('user-booking-complete') }}">Completed</a></li>
                                        <li><a class="active" href="{{ url('user-booking-cancelled') }}">Cancelled</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-sm-12 col-12">
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

                <!-- Cancelled -->
                <div class="col-lg-12 d-flex">
                    <div class="card book-card flex-fill mb-0">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <h4>Cancelled <span>40</span></h4>
                                </div>
                                <div class="col-md-7 text-md-end">
                                    <div class="table-search">
                                        <div id="tablefilter"></div>
                                        <a href="{{ url('listing-grid') }}" class="btn btn-add"><i
                                                class="feather-plus-circle"></i>Add Booking</a>
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
                                            <th>Booking ID</th>
                                            <th>Car Name</th>
                                            <th>Rental Type</th>
                                            <th>Pickup / Delivery Location</th>
                                            <th>Dropoff Location</th>
                                            <th>Booked On</th>
                                            <th>Total</th>
                                            <th>Cancelled By</th>
                                            <th>Reason</th>
                                            <th>Status</th>
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
                                            <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cancelled_booking">#1001</a></td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-04.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#">Ferrari 458 MM Speciale</a>
                                                        <p>Delivery</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Hourly</p>
                                            </td>
                                            <td>
                                                <p>45, Avenue ,Mark Street, <span class="d-block">USA 15 Sep 2023, 09:30
                                                        AM</span></p>
                                            </td>
                                            <td>
                                                <p>21, Avenue, Windham, <span class="d-block">USA 15 Sep 2023, 11:30
                                                        AM</span></p>
                                            </td>
                                            <td>
                                                <p>15 Sep 2023, 09:00 AM</p>
                                            </td>
                                            <td>
                                                <p class="text-darker">$300</p>
                                            </td>
                                            <td>
                                                <p class="text-darker">User</p>
                                            </td>
                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#cancel_reason"
                                                    class="reason-link"><i class="fa-regular fa-note-sticky"></i></a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-danger">Refund Started</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#cancelled_booking">
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
                                            <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cancelled_booking">#1006</a></td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-06.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#">Acura Sport Version</a>
                                                        <p>Sel pickup</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Hourly</p>
                                            </td>
                                            <td>
                                                <p>78 Cityview Drive, Glenolden <span class="d-block">24 Nov 2023, 06:40
                                                        AM</span></p>
                                            </td>
                                            <td>
                                                <p>66 Ottis Street, Shawnee <span class="d-block">24 Nov 2023, 08:40
                                                        AM</span></p>
                                            </td>
                                            <td>
                                                <p>24 Oct 2023, 05:40 PM</p>
                                            </td>
                                            <td>
                                                <p class="text-darker">$250</p>
                                            </td>
                                            <td>
                                                <p class="text-darker">Admin</p>
                                            </td>
                                            <td>
                                                <a href="#" class="reason-link"><i
                                                        class="fa-regular fa-note-sticky"></i></a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-danger">Cancelled</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#cancelled_booking">
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
                                            <td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cancelled_booking">#1007</a></td>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="#" class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-08.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="#">Toyota Tacoma 4WD</a>
                                                        <p>Delivery</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Monthly</p>
                                            </td>
                                            <td>
                                                <p>41 Duke Lane, Branchburg <span class="d-block">15 Dec 2023, 04:30
                                                        PM</span></p>
                                            </td>
                                            <td>
                                                <p>80 Glory Road, Nashville <span class="d-block">15 Jan 2024, 04:30
                                                        PM</span></p>
                                            </td>
                                            <td>
                                                <p>02 Nov 2023, 07:30 AM</p>
                                            </td>
                                            <td>
                                                <p class="text-darker">$1000</p>
                                            </td>
                                            <td>
                                                <p class="text-darker">User</p>
                                            </td>
                                            <td>
                                                <a href="#" class="reason-link"><i
                                                        class="fa-regular fa-note-sticky"></i></a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-danger">Refund Completed</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#cancelled_booking">
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
                <!-- /Cancelled -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
