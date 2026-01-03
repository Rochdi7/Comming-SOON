<?php $page = 'payment-methods'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4 pb-0">

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

            <div class="row">
                <div class="col-xl-3">
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
                                        <li>
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
                                        <li class="active">
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
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h5>System Settings</h5>
                        </div>
                        <div class="card-body pb-0">
                            <div class="payment-section">
                                <h6 class="mb-3">Payment Methods</h6>
                                <div class="row">
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/paypal-name.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_paypal"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">PayPal is the faster, safer way to send and receive money </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-success me-1"></i>Connected</span>
                                                    <div class="form-check form-check-sm form-switch p-0 m-0">
                                                        <input class="form-check-input form-label m-0" type="checkbox" role="switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/stripe-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">APIs to accept cards, manage subscriptions, send money.</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/brain-tree.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Braintree offers more fraud protection and security features.</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/Razorpay-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Razorpay is an India's all in one payment solution.</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/2checkout-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Works stably and reliably and features are valuable </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-success me-1"></i>Connected</span>
                                                    <div class="form-check form-check-sm form-switch p-0 m-0">
                                                        <input class="form-check-input form-label m-0" type="checkbox" role="switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/skrill-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Allows  send international money transfers and payments quickly </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/payu-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Provide payment solution to individuals to make payments</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/apple-pay-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Replaces your physical cards and cash with private and secure </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/payonner-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Fast, Low-Cost Solution for your International Business.</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/mercad-pago-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Online payment platform that enables to send & receive money </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/payment-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Paytm is a leading Indian digital payments & financial services platform.</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-success me-1"></i>Connected</span>
                                                    <div class="form-check form-check-sm form-switch p-0 m-0">
                                                        <input class="form-check-input form-label m-0" type="checkbox" role="switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/midtrans-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Midtrans provides the maximum number of payment methods</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/pytorch-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">PyTorch, a network through which your customers transfer funds</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-success me-1"></i>Connected</span>
                                                    <div class="form-check form-check-sm form-switch p-0 m-0">
                                                        <input class="form-check-input form-label m-0" type="checkbox" role="switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/bank-transfer-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Direct transfer of funds from one bank account into another.</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex">
                                        <div class="card flex-fill">
                                            <div class="card-body">
                                                <div>
                                                    <div class="payment-content">
                                                        <span><img src="{{URL::asset('admin_assets/img/icons/cash-delivery-icon.svg')}}" alt="image"></span>
                                                        <a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
                                                    </div>
                                                    <p class="fs-13">Indicating that goods must be paid for at the time of delivery. </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="badge badge-outline d-inline-flex align-items-center text-gray-9"><i class="ti ti-point-filled text-dark me-1"></i>Not Connected</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            
            </div>			
        
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="javascript:void(0);">Privacy Policy</a>
                <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
            </p>
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);" class="text-secondary">Dreams</a></p>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection