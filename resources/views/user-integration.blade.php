<?php $page = 'user-integration'; ?>
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
                        <h4>Integrations</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="integration-grid">
                                <div class="integration-calendar">
                                    <img src="{{URL::asset('build/img/icons/integration-icon.svg')}}" alt="Icon">
                                    <div class="status-toggle">
                                        <input id="google_calendar" class="check" type="checkbox" checked="">
                                        <label for="google_calendar" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="integration-content">
                                    <h5>Google Calendar</h5>
                                    <p>Powerful & free service  to organize your schedule and coordinate events </p>
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

    @component('components.scrolltotop')
    @endcomponent
@endsection