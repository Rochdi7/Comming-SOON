<?php $page = 'user-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            User Dashboard
        @endslot
      
        @slot('li_1')
        User Dashboard
    @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

    <!-- Page Content -->
    <div class="content dashboard-content">
        <div class="container">

            <!-- Status List -->
            <ul class="status-lists">
                <li class="approve-item">
                    <div class="status-info">
                        <span><i class="fa-solid fa-calendar-days"></i></span>
                        <p>Your Booking has been Approved by admin</p>
                    </div>
                    <a href="javascript:void(0);" class="view-detail">View Details</a>
                </li>
                <li>
                    <div class="status-info">
                        <span><i class="fa-solid fa-money-bill"></i></span>
                        <p>Your Refund request has been approved by admin & your payment will be updated in 3 days.</p>
                    </div>
                    <a href="javascript:void(0);" class="close-link"><i class="feather-x"></i></a>
                </li>
                <li class="bg-danger-light">
                    <div class="status-info">
                        <span><i class="fa-solid fa-money-bill"></i></span>
                        <p>Your Refund request has been rejected by admin <a href="javascript:void(0);">View Reason</a></p>
                    </div>
                    <a href="javascript:void(0);" class="close-link"><i class="feather-x"></i></a>
                </li>
            </ul>
            <!-- /Status List -->

            <!-- Content Header -->
            <div class="content-header">
                <h4>Dashboard</h4>
            </div>
            <!-- /Content Header -->

            <!-- Dashboard -->
            <div class="row">

                <!-- Widget Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="widget-box flex-fill">
                        <div class="widget-header">
                            <div class="widget-content">
                                <h6>My Bookings</h6>
                                <h3>450</h3>
                            </div>
                            <div class="widget-icon">
                                <span>
                                    <img src="{{ URL::asset('/build/img/icons/book-icon.svg') }}" alt="icon">
                                </span>
                            </div>
                        </div>
                        <a href="{{ url('user-bookings') }}" class="view-link">View all Bookings <i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
                <!-- /Widget Item -->

                <!-- Widget Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="widget-box flex-fill">
                        <div class="widget-header">
                            <div class="widget-content">
                                <h6>Wallet Balance</h6>
                                <h3>$24,665</h3>
                            </div>
                            <div class="widget-icon">
                                <span class="bg-warning">
                                    <img src="{{ URL::asset('/build/img/icons/balance-icon.svg') }}" alt="icon">
                                </span>
                            </div>
                        </div>
                        <a href="{{ url('user-wallet') }}" class="view-link">View Balance <i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
                <!-- /Widget Item -->

                <!-- Widget Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="widget-box flex-fill">
                        <div class="widget-header">
                            <div class="widget-content">
                                <h6>Total Transactions</h6>
                                <h3>$15,210</h3>
                            </div>
                            <div class="widget-icon">
                                <span class="bg-success">
                                    <img src="{{ URL::asset('/build/img/icons/transaction-icon.svg') }}" alt="icon">
                                </span>
                            </div>
                        </div>
                        <a href="{{ url('user-payment') }}" class="view-link">View all Transactions <i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
                <!-- /Widget Item -->

                <!-- Widget Item -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="widget-box flex-fill">
                        <div class="widget-header">
                            <div class="widget-content">
                                <h6>Wishlist Cars</h6>
                                <h3>24</h3>
                            </div>
                            <div class="widget-icon">
                                <span class="bg-danger">
                                    <img src="{{ URL::asset('/build/img/icons/cars-icon.svg') }}" alt="icon">
                                </span>
                            </div>
                        </div>
                        <a href="{{ url('user-wishlist') }}" class="view-link">Go to Wishlist <i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
                <!-- /Widget Item -->

            </div>

            <div class="row">

                <!-- Last 5 Bookings -->
                <div class="col-lg-8 d-flex">
                    <div class="card user-card flex-fill">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-sm-5">
                                    <h5>Last 5 Bookings</h5>
                                </div>
                                <div class="col-sm-7 text-sm-end">
                                    <div class="booking-select">
                                        <select class="form-control select">
                                            <option>Last 30 Days</option>
                                            <option>Last 7 Days</option>
                                        </select>
                                        <a href="{{ url('user-bookings') }}" class="view-link">View all Bookings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive dashboard-table dashboard-table-info">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-04.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Ferrari 458 MM Speciale</a>
                                                        <p>Rent Type : Hourly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Start date</h6>
                                                <p>15 Sep 2023, 11:30 PM</p>
                                            </td>
                                            <td>
                                                <h6>End Date</h6>
                                                <p>15 Sep 2023, 1:30 PM</p>
                                            </td>
                                            <td>
                                                <h6>Price</h6>
                                                <h5 class="text-danger">$200</h5>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-secondary">Upcoming</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-05.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Kia Soul 2016</a>
                                                        <p>Rent Type : Hourly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Start date</h6>
                                                <p>15 Sep 2023, 09:00 AM</p>
                                            </td>
                                            <td>
                                                <h6>End Date</h6>
                                                <p>15 Sep 2023, 1:30 PM</p>
                                            </td>
                                            <td>
                                                <h6>Price</h6>
                                                <h5 class="text-danger">$300</h5>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-secondary">Upcoming</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-01.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Toyota Camry SE 350</a>
                                                        <p>Rent Type : Day</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Start date</h6>
                                                <p>18 Sep 2023, 09:00 AM</p>
                                            </td>
                                            <td>
                                                <h6>End Date</h6>
                                                <p>18 Sep 2023, 05:00 PM</p>
                                            </td>
                                            <td>
                                                <h6>Price</h6>
                                                <h5 class="text-danger">$600</h5>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-warning">Inprogress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-03.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Audi A3 2019 new</a>
                                                        <p>Rent Type : Weekly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Start date</h6>
                                                <p>10 Oct 2023, 10:30 AM</p>
                                            </td>
                                            <td>
                                                <h6>End Date</h6>
                                                <p>16 Oct 2023, 10:30 AM</p>
                                            </td>
                                            <td>
                                                <h6>Price</h6>
                                                <h5 class="text-danger">$800</h5>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-05.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">2018 Chevrolet Camaro</a>
                                                        <p>Rent Type : Hourly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Start date</h6>
                                                <p>14 Nov 2023, 02:00 PM</p>
                                            </td>
                                            <td>
                                                <h6>End Date</h6>
                                                <p>14 Nov 2023, 04:00 PM</p>
                                            </td>
                                            <td>
                                                <h6>Price</h6>
                                                <h5 class="text-danger">$240</h5>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-lg flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-06.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Acura Sport Version</a>
                                                        <p>Rent Type : Monthly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Start date</h6>
                                                <p>01 Dec 2023, 08:15 AM</p>
                                            </td>
                                            <td>
                                                <h6>End Date</h6>
                                                <p>01 Jan 2024, 08:15 AM</p>
                                            </td>
                                            <td>
                                                <h6>Price</h6>
                                                <h5 class="text-danger">$1000</h5>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-danger">Cancelled</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Last 5 Bookings -->

                <!-- Recent Transaction -->
                <div class="col-lg-4 d-flex">
                    <div class="card user-card flex-fill">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h5>Recent Transaction</h5>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <div class="booking-select">
                                        <select class="form-control select">
                                            <option>Last 30 Days</option>
                                            <option>Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive dashboard-table dashboard-table-info">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="border-0">
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-md flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-04.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Ferrari 458 MM Speciale</a>
                                                        <p>Rent Type : Hourly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 text-end">
                                                <span class="badge badge-light-secondary">Upcoming</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="pt-0">
                                                <div class="status-box">
                                                    <p><span>Status : </span>On 15 Sep 2023, 11:30 PM</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-md flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-07.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Chevrolet Pick Truck 3.5L</a>
                                                        <p>Rent Type : Day</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 text-end">
                                                <span class="badge badge-light-warning">Refund started </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="pt-0">
                                                <div class="status-box">
                                                    <p><span>Status : </span>Yet to recieve</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-md flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-08.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Toyota Tacoma 4WD</a>
                                                        <p>Rent Type : Weekly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 text-end">
                                                <span class="badge badge-light-danger">Cancelled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="pt-0">
                                                <div class="status-box">
                                                    <p><span>Status : </span>On 15 Sep 2023, 11:30 PM</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <div class="table-avatar">
                                                    <a href="{{ url('user-bookings') }}"
                                                        class="avatar avatar-md flex-shrink-0">
                                                        <img class="avatar-img"
                                                            src="{{ URL::asset('/build/img/cars/car-01.jpg') }}"
                                                            alt="Booking">
                                                    </a>
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="{{ url('user-bookings') }}">Ford Mustang 4.0 AT</a>
                                                        <p>Rent Type : Monthly</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 text-end">
                                                <span class="badge badge-light-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="pt-0 pb-0 border-0">
                                                <div class="status-box">
                                                    <p><span>Status : </span>On 20 Dec 2023, 05:20 PM</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Recent Transaction -->

            </div>
            <!-- /Dashboard -->

        </div>
    </div>
    <!-- /Page Content -->

@endsection
