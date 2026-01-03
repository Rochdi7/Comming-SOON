<?php $page = 'user-security'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            User Settings
        @endslot
        @slot('li_1')
            User Settings
        @endslot
    @endcomponent

    @component('components.usermenu')
    @endcomponent

    <!-- Page Content -->
    <div class="content settings-profile-content">
        <div class="container">

            <!-- Content Header -->
            <div class="content-header content-settings-header">
                <h4>Settings</h4>
            </div>
            <!-- /Content Header -->

            <div class="row">

                @component('components.usersettingsmenu')
                @endcomponent

                <!-- Settings Details -->
                <div class="col-lg-9">
                    <div class="settings-info">
                        <div class="settings-sub-heading">
                            <h4>Security</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Google Authenticator</h5>
                                        <div class="status-toggle">
                                            <input id="google_authenticator" class="check" type="checkbox" checked>
                                            <label for="google_authenticator" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                    <div class="security-content">
                                        <p>Google Authenticator adds an extra layer of security to your online accounts by
                                            adding a second step of verification when you sign in.</p>
                                        <span class="badge badge-light-success">Connected</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Password</h5>
                                    </div>
                                    <div class="security-content">
                                        <p>Last Changed 15 Oct 2023, 09:00 AM</p>
                                    </div>
                                    <div class="security-btn security-btn-info">
                                        <a href="javascript:void(0)" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#change_password">
                                            Change
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Two Factor</h5>
                                        <div class="status-toggle">
                                            <input id="two_factor" class="check" type="checkbox" checked>
                                            <label for="two_factor" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                    <div class="security-content">
                                        <p>Receive codes via SMS or email every time you login</p>
                                    </div>
                                    <div class="security-btn security-btn-info">
                                        <a href="javascript:void(0)" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete_two_factor">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Phone Number Verification</h5>
                                    </div>
                                    <div class="security-content">
                                        <p class="text-success-light">Verified Mobile Number : 7261937185</p>
                                    </div>
                                    <div class="security-btn">
                                        <a href="javascript:void(0)" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#change_phone_number">Change</a>
                                        <a href="javascript:void(0)" class="btn btn-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Email Verification</h5>
                                    </div>
                                    <div class="security-content">
                                        <p class="text-success-light">Verified Email : info@example.com</p>
                                    </div>
                                    <div class="security-btn">
                                        <a href="javascript:void(0)" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#change_email">Change</a>
                                        <a href="javascript:void(0)" class="btn btn-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Device Management</h5>
                                    </div>
                                    <div class="security-content">
                                        <p>Last Changed 18 Oct 2023, 11:15 AM</p>
                                    </div>
                                    <div class="security-btn">
                                        <a href="javascript:void(0)" class="btn btn-secondary">Manage</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Account Activity</h5>
                                    </div>
                                    <div class="security-content">
                                        <p>Last Changed 04 Nov 2023, 04:30 PM</p>
                                    </div>
                                    <div class="security-btn">
                                        <a href="javascript:void(0)" class="btn btn-secondary">View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Deactive Account</h5>
                                    </div>
                                    <div class="security-content">
                                        <p>Last Changed 16 Nov 2023, 02:00 PM</p>
                                    </div>
                                    <div class="security-btn">
                                        <a href="javascript:void(0)" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#deactive_account">Deactive</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="security-grid flex-fill">
                                    <div class="security-heading">
                                        <h5>Delete Account</h5>
                                    </div>
                                    <div class="security-content">
                                        <p>Last Changed 30 Dec 2023, 08:40 PM</p>
                                    </div>
                                    <div class="security-btn">
                                        <a href="javascript:void(0)" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete_account">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Settings Details -->

            </div>

        </div>
    </div>
    <!-- /Page Content -->
@endsection
