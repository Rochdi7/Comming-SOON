<?php $page = 'user-wallet'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            User Wallet
        @endslot
        @slot('li_1')
            User Wallet
        @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <!-- Content Header -->
            <div class="content-header">
                <h4>Wallet</h4>
            </div>
            <!-- /Content Header -->

            <!-- Wallet Info -->
            <div class="row">
                <div class="col-lg-5 col-md-12 d-flex">
                    <div class="card wallet-card flex-fill">
                        <div class="card-body">
                            <div class="balance-info">
                                <div class="balance-grid">
                                    <div class="balance-content">
                                        <h6>Available Balance</h6>
                                        <h4>$4544</h4>
                                    </div>
                                    <div class="refersh-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fas fa-arrows-rotate"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="balance-list">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 d-flex">
                                            <div class="balance-inner credit-info">
                                                <h6>$1,23,464</h6>
                                                <p>Total Credit</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 d-flex">
                                            <div class="balance-inner debit-info">
                                                <h6>$7,357</h6>
                                                <p>Total Debit</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 d-flex">
                                            <div class="balance-inner transaction-info">
                                                <h6>$6,56,415</h6>
                                                <p>Total Transaction</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group wallet-form-group">
                                <label>Add Wallet Credits ($)</label>
                                <input type="text" class="form-control" placeholder="1000">
                            </div>
                            <div class="wallet-btn">
                                <a href="javascript:void(0);" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#add_payment">Add Payment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 d-flex">
                    <div class="card your-card flex-fill">
                        <div class="card-body">
                            <div class="wallet-header">
                                <h4>Your Cards</h4>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_card">
                                    <i class="feather-plus-circle"></i>
                                </a>
                            </div>
                            <div class="wallet-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom_radio">
                                                        <input type="radio" name="payment" value="wallet" checked="">
                                                        <span class="checkmark"></span>
                                                        <img src="{{ URL::asset('/build/img/icons/wallet-01.svg') }}"
                                                            alt="Icon">
                                                    </label>
                                                </td>
                                                <td>
                                                    <h6>3210 **** **** **12</h6>
                                                    <p>Card Number</p>
                                                </td>
                                                <td>
                                                    <h6>$3000</h6>
                                                    <p>Balance</p>
                                                </td>
                                                <td>
                                                    <h6>Active</h6>
                                                    <p>Status</p>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="feather-edit-3"></i> Edit
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
                                                    <label class="custom_radio">
                                                        <input type="radio" name="payment" value="wallet">
                                                        <span class="checkmark"></span>
                                                        <img src="{{ URL::asset('/build/img/icons/wallet-02.svg') }}"
                                                            alt="Icon">
                                                    </label>
                                                </td>
                                                <td>
                                                    <h6>7847 **** **** **78</h6>
                                                    <p>Card Number</p>
                                                </td>
                                                <td>
                                                    <h6>$2300</h6>
                                                    <p>Balance</p>
                                                </td>
                                                <td>
                                                    <h6>Active</h6>
                                                    <p>Status</p>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="feather-edit-3"></i> Edit
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
                                                    <label class="custom_radio">
                                                        <input type="radio" name="payment" value="wallet">
                                                        <span class="checkmark"></span>
                                                        <img src="{{ URL::asset('/build/img/icons/wallet-03.svg') }}"
                                                            alt="Icon">
                                                    </label>
                                                </td>
                                                <td>
                                                    <h6>4710 **** **** **64</h6>
                                                    <p>Card Number</p>
                                                </td>
                                                <td>
                                                    <h6>$1800</h6>
                                                    <p>Balance</p>
                                                </td>
                                                <td>
                                                    <h6>Active</h6>
                                                    <p>Status</p>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="feather-edit-3"></i> Edit
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Wallet Info -->

            <!-- Wallet Table -->
            <div class="row">
                <div class="col-lg-12 d-flex">
                    <div class="card book-card flex-fill mb-0">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <h4>Wallet Usage History</h4>
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
                                            <th>Ref Id</th>
                                            <th>Transaction For</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1001</td>
                                            <td>
                                                <div class="table-avatar">
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="javascript:void(0);" class="mb-0">Self Deposit
                                                            Paypal</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>15 Sep 2023, 09:00 AM</td>
                                            <td class="text-success-light">+ $300</td>
                                            <td>
                                                <span class="badge badge-light-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1002</td>
                                            <td>
                                                <div class="table-avatar">
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="javascript:void(0);" class="mb-0">Audi A3 2019 new</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>23 Oct 2023, 12:00 PM</td>
                                            <td class="text-danger">- $500</td>
                                            <td>
                                                <span class="badge badge-light-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1003</td>
                                            <td>
                                                <div class="table-avatar">
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="javascript:void(0);" class="mb-0">Self Deposit
                                                            Stripe</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>02 Nov 2023, 10:30 AM</td>
                                            <td class="text-success-light">+ $600</td>
                                            <td>
                                                <span class="badge badge-light-success">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1004</td>
                                            <td>
                                                <div class="table-avatar">
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="javascript:void(0);" class="mb-0">Audi A3 2020 new</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>18 Dec 2023, 02:30 PM</td>
                                            <td class="text-success-light">+ $1500</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1005</td>
                                            <td>
                                                <div class="table-avatar">
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="javascript:void(0);" class="mb-0">Self Deposit
                                                            Stripe</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>05 Jan 2024, 08:00 AM</td>
                                            <td class="text-danger">- $450</td>
                                            <td>
                                                <span class="badge badge-light-danger">Failed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1006</td>
                                            <td>
                                                <div class="table-avatar">
                                                    <div class="table-head-name flex-grow-1">
                                                        <a href="javascript:void(0);" class="mb-0">Self Deposit
                                                            Paypal</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>20 Feb 2024, 11:30 PM</td>
                                            <td class="text-success-light">+ $1000</td>
                                            <td>
                                                <span class="badge badge-light-success">Completed</span>
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
            <!-- /Wallet Table -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
