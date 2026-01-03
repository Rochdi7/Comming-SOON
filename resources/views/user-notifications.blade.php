<?php $page = 'user-notifications'; ?>
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
                        <h4>Notifications</h4>
                    </div>
                    <div class="notification-grid">
                        <div class="notification-checkbox">
                            <h5>Notify me when...</h5>
                            <ul class="nav">
                                <li>
                                    <label class="custom_check">
                                        <input type="checkbox" name="offers" checked="">
                                        <span class="checkmark"></span>
                                        Special Offers & Discounts
                                    </label>
                                </li>
                                <li>
                                    <label class="custom_check">
                                        <input type="checkbox" name="booking" checked="">
                                        <span class="checkmark"></span>
                                        Booking Confirmations
                                    </label>
                                </li>
                                <li>
                                    <label class="custom_check">
                                        <input type="checkbox" name="car_added" checked="">
                                        <span class="checkmark"></span>
                                        When new car added
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="notification-status">
                            <div class="notification-status-content">
                                <h5>Mobile Push notifications</h5>
                                <p>Receive push notification when you allow the option</p>
                            </div>
                            <div class="status-toggle">
                                <input id="mobile_notifications" class="check" type="checkbox" checked="">
                                <label for="mobile_notifications" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="notification-status">
                            <div class="notification-status-content">
                                <h5>Desktop notifications</h5>
                                <p>Receive desktop notification when you allow the option</p>
                            </div>
                            <div class="status-toggle">
                                <input id="desktop_notifications" class="check" type="checkbox" checked="">
                                <label for="desktop_notifications" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="notification-status">
                            <div class="notification-status-content">
                                <h5>Email notifications</h5>
                                <p>Receive notifications through mails when you allow the option</p>
                            </div>
                            <div class="status-toggle">
                                <input id="email_notifications" class="check" type="checkbox" checked="">
                                <label for="email_notifications" class="checktoggle">checkbox</label>
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


    @component('components.scrolltotop')
    @endcomponent
@endsection
