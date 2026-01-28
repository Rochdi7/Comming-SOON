<?php $page = 'profile-setting'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0 pb-0">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Settings</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/index') }}">Home</a>
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
                                        <li class="active">
                                            <a href="{{ url('admin/profile-setting') }}">
                                                <i class="ti ti-user-edit me-2"></i><span>Profile</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/security-setting') }}">
                                                <i class="ti ti-lock me-2"></i><span>Security</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/notifications-setting') }}">
                                                <i class="ti ti-bell me-2"></i><span>Notifications</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/integrations-settings') }}">
                                                <i class="ti ti-device-nintendo me-2"></i><span>Integrations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/tracker-setting') }}">
                                                <i class="ti ti-brand-stackshare me-2"></i><span>Tracker</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"><span>WEBSITE SETTING</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{ url('admin/company-setting') }}">
                                                <i class="ti ti-building me-2"></i><span>Company Settings</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/localization-setting') }}">
                                                <i class="ti ti-settings-2 me-2"></i><span>Localization</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/prefixes') }}">
                                                <i class="ti ti-corner-up-left-double me-2"></i><span>Prefixes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/seo-setup') }}">
                                                <i class="ti ti-seo me-2"></i><span>SEO Setup</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/language-setting') }}">
                                                <i class="ti ti-language me-2"></i><span>Language</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/maintenance-mode') }}">
                                                <i class="ti ti-color-filter me-2"></i><span>Maintenance Mode</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/login-setting') }}">
                                                <i class="ti ti-lock-bolt me-2"></i><span>Login & Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/ai-configuration') }}">
                                                <i class="ti ti-grain me-2"></i><span>AI Configuration</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/plugin-managers') }}">
                                                <i class="ti ti-car-crash me-2"></i><span>Plugin Managers</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"><span>RENTAL SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{ url('admin/rental-setting') }}">
                                                <i class="ti ti-file-invoice me-2"></i><span>Rental</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/insurance-setting') }}">
                                                <i class="ti ti-file-delta me-2"></i><span>Insurance</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"><span>APP SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{ url('admin/invoice-setting') }}">
                                                <i class="ti ti-file-invoice me-2"></i><span>Invoice Settings</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/invoice-template') }}">
                                                <i class="ti ti-template me-2"></i><span>Invoice Templates</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/signatures-setting') }}">
                                                <i class="ti ti-signature me-2"></i><span>Signatures</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/custom-fields') }}">
                                                <i class="ti ti-forms me-2"></i><span>Custom Fields</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"><span>SYSTEM SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{ url('admin/email-setting') }}">
                                                <i class="ti ti-mail me-2"></i><span>Email Settings</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/email-templates') }}">
                                                <i class="ti ti-mail-fast me-2"></i><span>Email Templates</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/sms-gateways') }}">
                                                <i class="ti ti-messages me-2"></i><span>SMS Gateways</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/gdpr-cookies') }}">
                                                <i class="ti ti-cookie me-2"></i><span>GDPR Cookies</span><span
                                                    class="track-icon"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"><span>FINANCE SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links pb-3 mb-3 border-bottom">
                                        <li>
                                            <a href="{{ url('admin/payment-methods') }}">
                                                <i class="ti ti-currency-dollar me-2"></i><span>Payment Methods</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/bank-accounts') }}">
                                                <i class="ti ti-file-dollar me-2"></i><span>Bank Accounts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/tax-rates') }}">
                                                <i class="ti ti-file-percent me-2"></i><span>Tax Rates</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/currencies') }}">
                                                <i class="ti ti-world-dollar me-2"></i><span>Currencies</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-title"><span>OTHER SETTINGS</span></li>
                                <li>
                                    <ul class="sidebar-links">
                                        <li>
                                            <a href="{{ url('admin/sitemap') }}">
                                                <i class="ti ti-map me-2"></i><span>Sitemap</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/clear-cache') }}">
                                                <i class="ti ti-database-x me-2"></i><span>Clear Cache</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/storage') }}">
                                                <i class="ti ti-database me-2"></i><span>Storage</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/cronjob') }}">
                                                <i class="ti ti-clock-cog me-2"></i><span>Cronjob</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/system-backup') }}">
                                                <i class="ti ti-file-check me-2"></i><span>System Backup</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/database-backup') }}">
                                                <i class="ti ti-file-database me-2"></i><span>Database Backup</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/system-update') }}">
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
                    <div class="card profile-setting-section">
                        <div class="card-header">
                            <h5 class="fw-bold">Account Settings</h5>
                        </div>
                        <form action="{{ route('backoffice.profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body pb-1">
                                <h6 class="fw-bold mb-3">Basic Information</h6>

                                @if (session('success'))
                                    <div class="alert alert-success mb-3">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="border-bottom mb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Profile Photo</label>
                                                <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center avatar avatar-xxl me-3 flex-shrink-0 text-dark frames">
                                                        <img src="{{ auth()->user()->getFirstMediaUrl('avatar') ?: URL::asset('admin_assets/img/customer/customer-01.jpg') }}"
     class="img-fluid" alt="brands">

                                                        <a href="javascript:void(0);"
                                                            class="upload-img-trash btn btn-sm rounded-circle">
                                                            <i class="ti ti-trash fs-12"></i>
                                                        </a>
                                                    </div>

                                                    <div class="profile-upload">
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn btn btn-md btn-dark">
                                                                <i class="ti ti-photo-up fs-14"></i>
                                                                Change
                                                                <input type="file" name="avatar"
                                                                    class="form-control image-sign" accept="image/*">
                                                            </div>
                                                        </div>

                                                        @error('avatar')
                                                            <small
                                                                class="text-danger d-block mt-2">{{ $message }}</small>
                                                        @enderror

                                                        <div class="mt-2">
                                                            <p class="fs-14">Recommended size is 500px x 500px</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ old('name', auth()->user()->name) }}">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" name="last_name" class="form-control"
                                                    value="{{ old('last_name', auth()->user()->last_name ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email Address<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" name="email" class="form-control"
                                                    value="{{ old('email', auth()->user()->email) }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    value="{{ old('phone', auth()->user()->phone) }}">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <h6 class="fw-bold mb-3">Address Information</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address Line</label>
                                            <input type="text" name="address_line" class="form-control"
                                                value="{{ old('address_line', auth()->user()->address_line ?? '') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <select class="select" name="country">
                                                <option value="">Select</option>
                                                <option value="USA"
                                                    {{ old('country', auth()->user()->country ?? '') === 'USA' ? 'selected' : '' }}>
                                                    USA</option>
                                                <option value="Canada"
                                                    {{ old('country', auth()->user()->country ?? '') === 'Canada' ? 'selected' : '' }}>
                                                    Canada</option>
                                                <option value="UK"
                                                    {{ old('country', auth()->user()->country ?? '') === 'UK' ? 'selected' : '' }}>
                                                    UK</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <select class="select" name="state">
                                                <option value="">Select</option>
                                                <option value="California"
                                                    {{ old('state', auth()->user()->state ?? '') === 'California' ? 'selected' : '' }}>
                                                    California</option>
                                                <option value="New York"
                                                    {{ old('state', auth()->user()->state ?? '') === 'New York' ? 'selected' : '' }}>
                                                    New York</option>
                                                <option value="Florida"
                                                    {{ old('state', auth()->user()->state ?? '') === 'Florida' ? 'selected' : '' }}>
                                                    Florida</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <select class="select" name="city">
                                                <option value="">Select</option>
                                                <option value="Los Angeles"
                                                    {{ old('city', auth()->user()->city ?? '') === 'Los Angeles' ? 'selected' : '' }}>
                                                    Los Angeles</option>
                                                <option value="San Diego"
                                                    {{ old('city', auth()->user()->city ?? '') === 'San Diego' ? 'selected' : '' }}>
                                                    San Diego</option>
                                                <option value="Fresno"
                                                    {{ old('city', auth()->user()->city ?? '') === 'Fresno' ? 'selected' : '' }}>
                                                    Fresno</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" name="postal_code" class="form-control"
                                                value="{{ old('postal_code', auth()->user()->postal_code ?? '') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <a href="javascript:void(0);" class="btn btn-light me-3"
                                        data-bs-dismiss="modal">Cancel</a>
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
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);"
                    class="text-secondary">Dreams</a></p>
        </div>
        <!-- /Footer-->
    </div>
    <!-- /Page Wrapper -->
@endsection
