<?php $page = 'signatures-setting'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0 pb-0 me-lg-4">
            
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
                                        <li class="active">
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
                            <h5 class="fw-bold">App Settings</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">Signatures</h6>
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                <div class="d-flex align-items-center flex-wrap row-gap-3">
                                    <div class="top-search me-2">
                                        <div class="top-search-group">
                                            <span class="input-icon">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                    </div> 
                                </div>
                                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_signatures" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add New Signature</a>
                                </div>
                            </div>
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>SIGNATURE NAME</th>
                                            <th>SIGNATURE</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Allen</a><span class=" ms-2 badge badge-soft-purple">Default</span></h6>
                                            </td>
                                            <td>
                                                <img src="{{URL::asset('admin_assets/img/icons/sign.svg')}}" alt="">
                                            </td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                                    <i class="ti ti-point-filled me-1"></i>Active
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_signature"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_signature"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Raymond</a></h6>
                                            </td>
                                            <td>
                                                <img src="{{URL::asset('admin_assets/img/icons/sign.svg')}}" alt="">
                                            </td>
                                            <td>
                                                <span class="badge badge-danger-transparent d-inline-flex align-items-center badge-sm">
                                                    <i class="ti ti-point-filled me-1"></i>Inactive
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_signature"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_signature"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Ralph</a></h6>
                                            </td>
                                            <td>
                                                <img src="{{URL::asset('admin_assets/img/icons/sign.svg')}}" alt="">
                                            </td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                                    <i class="ti ti-point-filled me-1"></i>Active
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_signature"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_signature"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="fw-medium"><a href="javascript:void(0);">Steven</a></h6>
                                            </td>
                                            <td>
                                                <img src="{{URL::asset('admin_assets/img/icons/sign.svg')}}" alt="">
                                            </td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                                    <i class="ti ti-point-filled me-1"></i>Active
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_signature"><i class="ti ti-edit me-1"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_signature"><i class="ti ti-trash me-1"></i>Delete</a>
                                                        </li>
                                                    </ul>
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
            <!-- /Settings Prefix -->		
        </div>	
        
        <div class="modal fade" id="add_signatures">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="mb-0">Create Signature</h5>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x fs-16"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Image <span class="text-danger">*</span></label>
                                <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                        <i class="ti ti-photo-up text-gray-4 fs-24"></i>
                                    </div>                                              
                                    <div class="profile-upload">
                                        <div class="profile-uploader d-flex align-items-center">
                                            <div class="drag-upload-btn btn btn-md btn-dark">
                                                <i class="ti ti-photo-up fs-14"></i>
                                                Upload
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <p class="fs-14">Upload Image size 180*180, within 5MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form-check-label form-label mb-3">
                                <input class="form-check-input form-label" type="checkbox" role="switch" checked>
                                Mark as Default 
                            </label>
                            <div class="mb-0">
                                <label class="form-label">Signature Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="edit_signature">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="mb-0">Edit Signature</h5>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x fs-16"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Image <span class="text-danger">*</span></label>
                                <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 p-2 flex-shrink-0 text-dark frames">
                                        <img src="{{URL::asset('admin_assets/img/icons/sign.svg')}}" class="img-fluid rounded object-fit-contain" alt="img">
                                        <span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
                                    </div>                                              
                                    <div class="profile-upload">
                                        <div class="profile-uploader d-flex align-items-center">
                                            <div class="drag-upload-btn btn btn-md btn-dark">
                                                <i class="ti ti-photo-up fs-14"></i>
                                                Upload
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <p class="fs-14">Upload Image size 180*180, within 5MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="form-check-label form-label mb-3">
                                <input class="form-check-input form-label" type="checkbox" role="switch" checked>
                                Mark as Default 
                            </label>
                            <div class="mb-0">
                                <label class="form-label">Signature Name <span class="text-danger">*</span></label>
                                <input type="text" value="Allen" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
                            Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete  -->
        <div class="modal fade" id="delete_signature">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <form>
                            <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                                <i class="ti ti-trash-x fs-26"></i>
                            </span>
                            <h4 class="mb-1">Delete Signatures</h4>
                            <p class="mb-3">Are you sure you want to delete Signatures?</p>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                                <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Yes, Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete -->		
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