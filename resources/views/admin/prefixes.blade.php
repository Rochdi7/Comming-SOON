<?php $page = 'prefixes'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0 pb-0 me-lg-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Settings</h4>
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
                                        <li class="active">
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
                    <div class="card">
                        <div class="card-header">
                            <h5 class="fw-bold">Website Settings</h5>
                        </div>
                        <form action="{{url('admin/prefixes')}}">
                            <div class="card-body pb-1">
                                <h6 class="fw-bold mb-3">Prefixes</h6>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Reservations</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">RES -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Reservations</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">QUO -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Enquiries</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">ENQ -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Companies</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">COM -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Inspections</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">INS -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Invoice</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">INV -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Reports</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">REP -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Customers</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <span class="input-group-text border-end-0 fs-14 pe-1">CUS -</span>
                                                <input type="text" class="form-control border-start-0 ps-0" aria-label="Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Settings Prefix -->		
        </div>			
        <!-- Footer-->
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="javascript:void(0);">Privacy Policy</a>
                <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
            </p>
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);" class="text-secondary">Dreams</a></p>
        </div>
        <!-- /Footer-->
    </div>
    <!-- /Page Wrapper -->
@endsection