<?php $page = 'language-setting2'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0 me-md-0 me-lg-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Settings</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Settings Prefix -->
            <div class="row">
                <div class="col-lg-3">
					<!-- inner sidebar -->
                    <div class="settings-sidebar slimscroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li class="menu-title"><span>ACCOUNT SETTING</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{url('admin/profile-setting')}}">
                                                <i class="ti ti-user-edit me-2"></i><span>Profile</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/security-setting')}}">
                                                <i class="ti ti-lock me-2"></i><span>Security</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/notifications-setting')}}">
                                                <i class="ti ti-bell me-2"></i><span>Notifications</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/integrations-settings')}}">
                                                <i class="ti ti-device-nintendo me-2"></i><span>Integrations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/tracker-setting')}}">
                                                <i class="ti ti-brand-stackshare me-2"></i><span>Tracker</span>
                                            </a>
                                        </li>
                                    </ul>							
                                </li>
                                <li class="menu-title"><span>WEBSITE SETTING</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{url('admin/company-setting')}}">
                                                <i class="ti ti-building me-2"></i><span>Company Settings</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/localization-setting')}}">
                                                <i class="ti ti-settings-2 me-2"></i><span>Localization</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/prefixes')}}">
                                                <i class="ti ti-corner-up-left-double me-2"></i><span>Prefixes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/seo-setup')}}">
                                                <i class="ti ti-seo me-2"></i><span>SEO Setup</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{url('admin/language-setting')}}">
                                                <i class="ti ti-language me-2"></i><span>Language</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/maintenance-mode')}}">
                                                <i class="ti ti-color-filter me-2"></i><span>Maintenance Mode</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/login-setting')}}">
                                                <i class="ti ti-lock-bolt me-2"></i><span>Login & Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/ai-configuration')}}">
                                                <i class="ti ti-grain me-2"></i><span>AI Configuration</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/plugin-managers')}}">
                                                <i class="ti ti-car-crash me-2"></i><span>Plugin Managers</span>
                                            </a>
                                        </li>
                                    </ul>							
                                </li>
                                <li class="menu-title"><span>RENTAL SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{url('admin/rental-setting')}}">
                                                <i class="ti ti-file-invoice me-2"></i><span>Rental</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/insurance-setting')}}">
                                                <i class="ti ti-file-delta me-2"></i><span>Insurance</span>
                                            </a>
                                        </li>
                                    </ul>							
                                </li>
                                <li class="menu-title"><span>APP SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{url('admin/invoice-setting')}}">
                                                <i class="ti ti-file-invoice me-2"></i><span>Invoice Settings</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/invoice-template')}}">
                                                <i class="ti ti-template me-2"></i><span>Invoice Templates</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/signatures-setting')}}">
                                                <i class="ti ti-signature me-2"></i><span>Signatures</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/custom-fields')}}">
                                                <i class="ti ti-forms me-2"></i><span>Custom Fields</span>
                                            </a>
                                        </li>
                                    </ul>							
                                </li>
                                <li class="menu-title"><span>SYSTEM SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{url('admin/email-setting')}}">
                                                <i class="ti ti-mail me-2"></i><span>Email Settings</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/email-templates')}}">
                                                <i class="ti ti-mail-fast me-2"></i><span>Email Templates</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/sms-gateways')}}">
                                                <i class="ti ti-messages me-2"></i><span>SMS Gateways</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/gdpr-cookies')}}">
                                                <i class="ti ti-cookie me-2"></i><span>GDPR Cookies</span><span class="track-icon"></span>
                                            </a>
                                        </li>
                                    </ul>							
                                </li>
                                <li class="menu-title"><span>FINANCE SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{url('admin/payment-methods')}}">
                                                <i class="ti ti-currency-dollar me-2"></i><span>Payment Methods</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/bank-accounts')}}">
                                                <i class="ti ti-file-dollar me-2"></i><span>Bank Accounts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/tax-rates')}}">
                                                <i class="ti ti-file-percent me-2"></i><span>Tax Rates</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/currencies')}}">
                                                <i class="ti ti-world-dollar me-2"></i><span>Currencies</span>
                                            </a>
                                        </li>
                                    </ul>							
                                </li>
                                <li class="menu-title"><span>OTHER SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links">
                                        <li>
                                            <a href="{{url('admin/sitemap')}}">
                                                <i class="ti ti-map me-2"></i><span>Sitemap</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/clear-cache')}}">
                                                <i class="ti ti-database-x me-2"></i><span>Clear Cache</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/storage')}}">
                                                <i class="ti ti-database me-2"></i><span>Storage</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/cronjob')}}">
                                                <i class="ti ti-clock-cog me-2"></i><span>Cronjob</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/system-backup')}}">
                                                <i class="ti ti-file-check me-2"></i><span>System Backup</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/database-backup')}}">
                                                <i class="ti ti-file-database me-2"></i><span>Database Backup</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/system-update')}}">
                                                <i class="ti ti-refresh-dot me-2"></i><span>System Update</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
					<!-- /inner sidebar -->
                </div>
                <div class="col-lg-9">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="fw-bold">Website Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                <h6 class="fw-bold">Language</h6>
                                <div class="d-flex align-items-center">
                                    <div class="dropdown me-3">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <i class="ti ti-language me-1"></i>Language
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-lg p-2">
                                            <li>
                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                    English
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                    German
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                    Arabic
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                    French
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="ti ti-plus me-1"></i>Add New Language</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                    <div class="top-search me-2">
                                        <div class="top-search-group">
                                            <span class="input-icon">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="btn btn-dark me-2"><i class="ti ti-arrow-left me-1"></i>Back to Translations</a>
                                    <a href="javascript:void(0);" class="btn btn-white">
                                        <img src="{{URL::asset('admin_assets/img/flags/uae.svg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1">
                                        Arabic
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Custom Data Table -->
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="no-sort">
                                                <div class="form-check form-check-md">
                                                    <input class="form-check-input" type="checkbox" id="select-all">
                                                </div>
                                            </th>
                                            <th>LANGUAGE</th>
                                            <th>TOTAL</th>
                                            <th>DONE</th>
                                            <th>PROGRESS</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-md">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Main</a>
                                            </td>
                                            <td>
                                                1620
                                            </td>
                                            <td>
                                                1296
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-xs" style="width: 120px;">
                                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="d-inline-flex fs-12 ms-2">100%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">Web</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">App</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white">Admin</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-md">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Bookings</a>
                                            </td>
                                            <td>
                                                1620
                                            </td>
                                            <td>
                                                972
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-xs" style="width: 120px;">
                                                        <div class="progress-bar bg-pink rounded" role="progressbar" style="width: 70%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="d-inline-flex fs-12 ms-2">70%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">Web</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">App</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white">Admin</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-md">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Rentals</a>
                                            </td>
                                            <td>
                                                1620
                                            </td>
                                            <td>
                                                810
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-xs" style="width: 120px;">
                                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 50%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="d-inline-flex fs-12 ms-2">50%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">Web</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">App</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white">Admin</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-md">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="fw-semibold">Others</a>
                                            </td>
                                            <td>
                                                1620
                                            </td>
                                            <td>
                                                324
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-xs" style="width: 120px;">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 30%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="d-inline-flex fs-12 ms-2">30%</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">Web</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white me-1">App</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#language_setup" class="btn btn-white">Admin</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_testimonial"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_testimonials"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Custom Data Table -->
                            <!-- <div class="table-footer"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Settings Prefix -->		
        </div>			
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="javascript:void(0);">Privacy Policy</a>
                <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
            </p>
            <p>© 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by Dreamsrent</p>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection