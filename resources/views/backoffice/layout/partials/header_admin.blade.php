<!-- Header -->
<div class="header">
    <div class="main-header">

        <div class="header-left">
            <a href="{{ url('admin/index') }}" class="logo">
                <img src="{{ URL::asset('admin_assets/img/logo.svg') }}" alt="Logo">
            </a>
            <a href="{{ url('admin/index') }}" class="dark-logo">
                <img src="{{ URL::asset('admin_assets/img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">

                <div class="me-auto d-flex align-items-center" id="header-search">
                    <a id="toggle_btn" href="javascript:void(0);">
                        <i class="ti ti-menu-deep"></i>
                    </a>
                    <div class="add-dropdown">
                        <a href="{{ url('admin/add-reservation') }}"
                            class="btn btn-dark d-inline-flex align-items-center">
                            <i class="ti ti-plus me-1"></i>New Reservation
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-center header-icons">

                    <!-- Flag -->
                    <div class="nav-item dropdown has-arrow flag-nav nav-item-box">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                            role="button">
                            <img src="{{ URL::asset('admin_assets/img/flags/gb.svg') }}" alt="Language"
                                class="img-fluid">
                        </a>
                        <ul class="dropdown-menu p-2">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('admin_assets/img/flags/gb.svg') }}" alt=""
                                        height="16">English
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('admin_assets/img/flags/sa.svg') }}" alt=""
                                        height="16">Arabic
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('admin_assets/img/flags/de.svg') }}" alt=""
                                        height="16">German
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Flag -->

                    <div class="theme-item">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle btn btn-menubar">
                            <i class="ti ti-moon"></i>
                        </a>
                        <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle btn btn-menubar">
                            <i class="ti ti-sun-high"></i>
                        </a>
                    </div>

                    <div class="notification_item">
                        <a href="javascript:void(0);" class="btn btn-menubar position-relative" id="notification_popup"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="ti ti-bell"></i>
                            <span class="badge bg-violet rounded-pill"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end notification-dropdown">
                            <div class="topnav-dropdown-header pb-0">
                                <h5 class="notification-title">Notifications</h5>
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item"><a class="nav-link active" href="#active-notification"
                                            data-bs-toggle="tab">Active<span class="count ms-2">2</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#unread-notification"
                                            data-bs-toggle="tab">Unread</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#archieve-notification"
                                            data-bs-toggle="tab">Archieve</a></li>
                                </ul>
                            </div>
                            <div class="noti-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="active-notification">
                                        <div class="notification-list">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);"
                                                    class="avatar avatar-lg offline me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                                        alt="Profile" class="rounded-circle">
                                                </a>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><a href="javascript:void(0);"><span
                                                                class="text-gray-9">Jerry Manas</span> Added New Task
                                                            Creating <span class="text-gray-9">Login Pages</span></a>
                                                    </p>
                                                    <span class="fs-12 noti-time"><i class="ti ti-clock me-1"></i>4
                                                        Min Ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-list">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);"
                                                    class="avatar avatar-lg offline me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('admin_assets/img/profiles/avatar-05.jpg') }}"
                                                        alt="Profile" class="rounded-circle">
                                                </a>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><a href="javascript:void(0);"><span
                                                                class="text-gray-9">Robert Fox </span> Was Marked as
                                                            Late Login <span class="text-danger">09:55 AM</span></a>
                                                    </p>
                                                    <span class="fs-12 noti-time"><i class="ti ti-clock me-1"></i>5
                                                        Min Ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-list">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);"
                                                    class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('admin_assets/img/profiles/avatar-04.jpg') }}"
                                                        alt="Profile" class="rounded-circle">
                                                </a>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><a href="javascript:void(0);"><span
                                                                class="text-gray-9">Jenny Wilson </span> Completed
                                                            <span class="text-gray-9">Created New Component</span></a>
                                                    </p>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-12 noti-time"><i
                                                                class="ti ti-clock me-1"></i>15 Min Ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-list">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);"
                                                    class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                                        alt="Profile" class="rounded-circle">
                                                </a>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><a href="javascript:void(0);"><span
                                                                class="text-gray-9">Jacob Johnson </span> Added Manual
                                                            Time <span class="text-gray-9">2 Hrs</span></a></p>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-12 noti-time"><i
                                                                class="ti ti-clock me-1"></i>20 Min Ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-list">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);"
                                                    class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('admin_assets/img/profiles/avatar-01.jpg') }}"
                                                        alt="Profile" class="rounded-circle">
                                                </a>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><a href="javascript:void(0);"><span
                                                                class="text-gray-9">Annete Black </span> Completed
                                                            <span class="text-gray-9">Improved Workflow
                                                                React</span></a></p>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-12 noti-time"><i
                                                                class="ti ti-clock me-1"></i>22 Min Ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="unread-notification">
                                        <div class="notification-list">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-lg offline me-2 flex-shrink-0">
                                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="Profile" class="rounded-circle">
                                                    </span>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1"><span class="text-gray-9">Jerry Manas</span>
                                                            Added New Task Creating <span class="text-gray-9">Login
                                                                Pages</span></p>
                                                        <span class="fs-12 noti-time"><i
                                                                class="ti ti-clock me-1"></i>4 Min Ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="notification-list">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-lg offline me-2 flex-shrink-0">
                                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-05.jpg') }}"
                                                            alt="Profile" class="rounded-circle">
                                                    </span>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1"><span class="text-gray-9">Robert Fox </span>
                                                            Was Marked as Late Login <span class="text-danger">09:55
                                                                AM</span></p>
                                                        <span class="fs-12 noti-time"><i
                                                                class="ti ti-clock me-1"></i>5 Min Ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="notification-list">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-lg offline me-2 flex-shrink-0">
                                                        <img src="{{ URL::asset('admin_assets/img/profiles/avatar-06.jpg') }}"
                                                            alt="Profile" class="rounded-circle">
                                                    </span>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1"><span class="text-gray-9">Robert Fox </span>
                                                            Created New Component</p>
                                                        <span class="fs-12 noti-time"><i
                                                                class="ti ti-clock me-1"></i>5 Min Ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="archieve-notification">
                                        <div class="d-flex justify-content-center align-items-center p-3">
                                            <div class="text-center ">
                                                <img src="{{ URL::asset('admin_assets/img/icons/nodata.svg') }}"
                                                    class="mb-2" alt="nodata">
                                                <p class="text-gray-5">No Data Available</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between topnav-dropdown-footer">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);"
                                        class="link-primary text-decoration-underline me-3">Mark all as Read</a>
                                    <a href="javascript:void(0);" class="link-danger text-decoration-underline">Clear
                                        All</a>
                                </div>
                                <a href="javascript:void(0);"
                                    class="btn btn-primary btn-sm d-inline-flex align-items-center">View All
                                    Notifications<i class="ti ti-chevron-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ url('admin/income-report') }}" class="btn btn-menubar">
                            <i class="ti ti-chart-bar"></i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="btn btn-menubar" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            <i class="ti ti-grid-dots"></i>
                        </a>
                        <div class="dropdown-menu p-3">
                            <ul>
                                <li>
                                    <a href="{{ url('admin/add-car') }}"
                                        class="dropdown-item d-inline-flex align-items-center">
                                        <i class="ti ti-car me-2"></i>Car
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/add-quotations') }}"
                                        class="dropdown-item d-inline-flex align-items-center">
                                        <i class="ti ti-file-symlink me-2"></i>Quotation
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/pricing') }}"
                                        class="dropdown-item d-inline-flex align-items-center">
                                        <i class="ti ti-file-dollar me-2"></i>Seasonal Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/extra-services') }}"
                                        class="dropdown-item d-inline-flex align-items-center">
                                        <i class="ti ti-script-plus me-2"></i>Extra Service
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/inspections') }}"
                                        class="dropdown-item d-inline-flex align-items-center">
                                        <i class="ti ti-dice-6 me-2"></i>Inspection
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/maintenance') }}"
                                        class="dropdown-item d-inline-flex align-items-center">
                                        <i class="ti ti-color-filter me-2"></i>Maintenance
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="d-flex align-items-center" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            <span class="avatar avatar-sm">
                                <img src="{{ URL::asset('admin_assets/img/profiles/avatar-05.jpg') }}" alt="Img"
                                    class="img-fluid rounded-circle">
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="profileset d-flex align-items-center">
                                <span class="user-img me-2">
                                    <img src="{{ URL::asset('admin_assets/img/profiles/avatar-05.jpg') }}"
                                        alt="">
                                </span>
                                <div>
                                    <h6 class="fw-semibold mb-1">
                                        {{ auth()->user()->name ?? auth()->user()->email }}
                                    </h6>
                                    <p class="fs-13">
                                        {{ auth()->user()->email }}
                                    </p>
                                </div>
                                ح
                            </div>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ url('admin/profile-setting') }}">
                                <i class="ti ti-user-edit me-2"></i>Edit Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('admin/payments') }}">
                                <i class="ti ti-credit-card me-2"></i>Payments
                            </a>
                            <div class="dropdown-divider my-2"></div>
                            <div class="dropdown-item">
                                <div
                                    class="form-check form-switch  form-check-reverse  d-flex align-items-center justify-content-between">
                                    <label class="form-check-label" for="notify">
                                        <i class="ti ti-bell me-2"></i>Notificaions</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="notify"
                                        checked>
                                </div>
                            </div>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ url('admin/security-setting') }}">
                                <i class="ti ti-exchange me-2"></i>Change Password
                            </a>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ url('admin/profile-setting') }}">
                                <i class="ti ti-settings me-2"></i>Settings
                            </a>
                            <div class="dropdown-divider my-2"></div>
                            <a class="dropdown-item logout d-flex align-items-center justify-content-between"
                                href="{{ url('admin/login') }}">
                                <span><i class="ti ti-logout me-2"></i>Logout Account</span> <i
                                    class="ti ti-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="{{ url('admin/profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ url('admin/profile-setting') }}">Settings</a>
                <a class="dropdown-item" href="{{ url('admin/login') }}">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>

</div>
<!-- /Header -->
