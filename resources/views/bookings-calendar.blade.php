<?php $page = 'bookings-calendar'; ?>
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
                        <a href="{{ url('user-bookings') }}"><i class="fa-solid fa-list"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('bookings-calendar') }}" class="active"><i class="fa-solid fa-calendar-days"></i></a>
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
                                        <li><a class="active" href="{{ url('user-bookings') }}">All Bookings</a></li>
                                        <li><a href="{{ url('user-booking-upcoming') }}">Upcoming</a></li>
                                        <li><a href="{{ url('user-booking-inprogress') }}">Inprogress</a></li>
                                        <li><a href="{{ url('user-booking-complete') }}">Completed</a></li>
                                        <li><a href="{{ url('user-booking-cancelled') }}">Cancelled</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-sm-12 col-12">
                                <div class="filter-group">
                                    <div class="sort-week sort">
                                        <div class="dropdown dropdown-action">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Monthly <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Monthly
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Last Month
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    Yearly
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

                <!-- All Bookings -->
                <div class="col-lg-12 ">
                    <div class="card calendar-card mb-0">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <!-- /All Bookings -->

            </div>
            <!-- /Dashboard -->

        </div>
    </div>
    <!-- /Page Content -->
    @component('components.scrolltotop')
    @endcomponent
@endsection
