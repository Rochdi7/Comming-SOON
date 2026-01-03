<?php $page = 'user-payment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        User Payments
        @endslot
      
        @slot('li_1')
        User Payments
    @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

  <!-- Page Content -->
  <div class="content">
    <div class="container">

        <!-- Content Header -->
        <div class="content-header">
            <h4>Payments</h4>
        </div>
        <!-- /Content Header -->

        <!-- Sort By -->
        <div class="row">
            <div class="col-lg-12">
                <div class="sorting-info">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="filter-group">
                                <div class="sort-week sort">
                                    <div class="dropdown dropdown-action">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                Custom
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sort-relevance sort">
                                    <div class="dropdown dropdown-action">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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

        <!-- Payments Table -->
        <div class="row">
            <div class="col-lg-12 d-flex">
                <div class="card book-card flex-fill mb-0">
                    <div class="card-header">	
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <h4>All Payments <span>40</span></h4>	
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
                                        <th>Booking ID</th>
                                        <th>Car Name</th>
                                        <th>Paid on</th>
                                        <th>Total</th>
                                        <th>Mode</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="reference">
                                                <span class="checkmark"></span> 
                                            </label>
                                        </td>
                                        <td>#1001</td>
                                        <td>
                                            <div class="table-avatar">
                                                <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                                    <img class="avatar-img" src="{{ URL::asset('/build/img/cars/car-04.jpg')}}" alt="Booking">
                                                </a>
                                                <div class="table-head-name flex-grow-1">
                                                    <a href="javascript:void(0);">Ferrari 458 MM Speciale</a>
                                                    <p>Delivery</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>15 Sep 2023, 09:30 AM</td>
                                        <td><p class="text-darker">$300</p></td>
                                        <td>
                                            <span class="badge badge-light-secondary">Wallet</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-success">Completed</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
                                                        <i class="feather-file-plus"></i> View Invoice
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                        <i class="feather-trash-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="reference">
                                                <span class="checkmark"></span> 
                                            </label>
                                        </td>
                                        <td>#1002</td>
                                        <td>
                                            <div class="table-avatar">
                                                <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                                    <img class="avatar-img" src="{{ URL::asset('/build/img/cars/car-01.jpg')}}" alt="Booking">
                                                </a>
                                                <div class="table-head-name flex-grow-1">
                                                    <a href="javascript:void(0);">Toyota Camry SE 350</a>
                                                    <p>Self Pickup</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>23 Oct 2023, 12:00 PM</td>
                                        <td><p class="text-darker">$500</p></td>
                                        <td>
                                            <span class="badge badge-light-secondary">Paypal</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-success">Completed</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
                                                        <i class="feather-file-plus"></i> View Invoice
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                        <i class="feather-trash-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="reference">
                                                <span class="checkmark"></span> 
                                            </label>
                                        </td>
                                        <td>#1003</td>
                                        <td>
                                            <div class="table-avatar">
                                                <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                                    <img class="avatar-img" src="{{ URL::asset('/build/img/cars/car-02.jpg')}}" alt="Booking">
                                                </a>
                                                <div class="table-head-name flex-grow-1">
                                                    <a href="javascript:void(0);">Kia Soul 2016</a>
                                                    <p>Delivery</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>02 Nov 2023, 10:30 AM</td>
                                        <td><p class="text-darker">$600</p></td>
                                        <td>
                                            <span class="badge badge-light-secondary">Stripe</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-success">Completed</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
                                                        <i class="feather-file-plus"></i> View Invoice
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                        <i class="feather-trash-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="reference">
                                                <span class="checkmark"></span> 
                                            </label>
                                        </td>
                                        <td>#1004</td>
                                        <td>
                                            <div class="table-avatar">
                                                <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                                    <img class="avatar-img" src="{{ URL::asset('/build/img/cars/car-03.jpg')}}" alt="Booking">
                                                </a>
                                                <div class="table-head-name flex-grow-1">
                                                    <a href="javascript:void(0);">Audi A3 2019 new</a>
                                                    <p>Self Pickup</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>18 Dec 2023, 02:30 PM</td>
                                        <td><p class="text-darker">$1500</p></td>
                                        <td>
                                            <span class="badge badge-light-secondary">Stripe</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-warning">Pending</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
                                                        <i class="feather-file-plus"></i> View Invoice
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                        <i class="feather-trash-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="reference">
                                                <span class="checkmark"></span> 
                                            </label>
                                        </td>
                                        <td>#1005</td>
                                        <td>
                                            <div class="table-avatar">
                                                <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                                    <img class="avatar-img" src="{{ URL::asset('/build/img/cars/car-05.jpg')}}" alt="Booking">
                                                </a>
                                                <div class="table-head-name flex-grow-1">
                                                    <a href="javascript:void(0);">2018 Chevrolet Camaro</a>
                                                    <p>Delivery</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>05 Jan 2024, 08:00 AM</td>
                                        <td><p class="text-darker">$450</p></td>
                                        <td>
                                            <span class="badge badge-light-secondary">Wallet</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-danger">Failed</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
                                                        <i class="feather-file-plus"></i> View Invoice
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                        <i class="feather-trash-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="reference">
                                                <span class="checkmark"></span> 
                                            </label>
                                        </td>
                                        <td>#1006</td>
                                        <td>
                                            <div class="table-avatar">
                                                <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                                    <img class="avatar-img" src="{{ URL::asset('/build/img/cars/car-06.jpg')}}" alt="Booking">
                                                </a>
                                                <div class="table-head-name flex-grow-1">
                                                    <a href="javascript:void(0);">Acura Sport Version</a>
                                                    <p>Self Pickup</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>20 Feb 2024, 11:30 PM</td>
                                        <td><p class="text-darker">$250</p></td>
                                        <td>
                                            <span class="badge badge-light-secondary">Stripe</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-success">Completed</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
                                                        <i class="feather-file-plus"></i> View Invoice
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                        <i class="feather-trash-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="reference">
                                                <span class="checkmark"></span> 
                                            </label>
                                        </td>
                                        <td>#1007</td>
                                        <td>
                                            <div class="table-avatar">
                                                <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                                    <img class="avatar-img" src="{{ URL::asset('/build/img/cars/car-08.jpg')}}" alt="Booking">
                                                </a>
                                                <div class="table-head-name flex-grow-1">
                                                    <a href="javascript:void(0);">Toyota Tacoma 4WD</a>
                                                    <p>Delivery</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>12 Mar 2024, 10:00 PM</td>
                                        <td><p class="text-darker">$1000</p></td>
                                        <td>
                                            <span class="badge badge-light-secondary">Paypal</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-warning">Pending</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
                                                        <i class="feather-file-plus"></i> View Invoice
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
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
        </div>
        <!-- /Payments Table -->

    </div>
</div>
<!-- /Page Content -->

    @component('components.modalpopup') 
    @endcomponent
    @component('components.scrolltotop')
    @endcomponent
@endsection