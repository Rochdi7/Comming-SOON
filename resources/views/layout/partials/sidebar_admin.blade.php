<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <a href="{{ route('backoffice.dashboard') }}" class="logo logo-normal">
            <img src="{{ URL::asset('admin_assets/img/logo.svg') }}" alt="Logo">
        </a>
        <a href="{{ route('backoffice.dashboard') }}" class="logo-small">
            <img src="{{ URL::asset('admin_assets/img/logo-small.svg') }}" alt="Logo">
        </a>
        <a href="{{ route('backoffice.dashboard') }}" class="dark-logo">
            <img src="{{ URL::asset('admin_assets/img/logo-white.svg') }}" alt="Logo">
        </a>
    </div>

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li>
                    <ul>
                        @role('super-admin|admin|manager')
                            <li class="{{ request()->routeIs('backoffice.dashboard') ? 'active' : '' }}">
                                <a href="{{ route('backoffice.dashboard') }}">
                                    <i class="ti ti-layout-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        @endrole
                    </ul>
                </li>

                @role('super-admin|admin')
                    <li class="menu-title"><span>AGENCIES</span></li>
                    <li>
                        <ul>
                            <li class="{{ request()->routeIs('backoffice.agencies.*') ? 'active' : '' }}">
                                <a href="{{ route('backoffice.agencies.index') }}">
                                    <i class="ti ti-building"></i>
                                    <span>Agencies</span>
                                </a>
                            </li>

                            <li class="{{ request()->routeIs('backoffice.agency-subscriptions.*') ? 'active' : '' }}">
                                <a href="{{ route('backoffice.agency-subscriptions.index') }}">
                                    <i class="ti ti-credit-card"></i>
                                    <span>Subscriptions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endrole

                @role('super-admin|admin')
                    <li class="menu-title"><span>ACCÈS</span></li>
                    <li>
                        <ul>
                            <li class="{{ request()->routeIs('backoffice.roles-permissions.*') ? 'active' : '' }}">
                                <a href="{{ route('backoffice.roles-permissions.index') }}">
                                    <i class="ti ti-shield"></i>
                                    <span>Rôles & Permissions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endrole

                @role('super-admin|admin|manager')
                    <li class="menu-title"><span>MANAGEMENT</span></li>
                    <li>
                        <ul>
                            <li class="{{ request()->routeIs('backoffice.users.*') ? 'active' : '' }}">
                                <a href="{{ route('backoffice.users.index') }}">
                                    <i class="ti ti-users"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endrole


                <li class="menu-title"><span>RENTALS</span></li>
                <li>
                    <ul>
                        @role('super-admin|admin|manager')
                            <li class="{{ request()->routeIs('backoffice.vehicles.*') ? 'active' : '' }}">
                                <a href="{{ route('backoffice.vehicles.index') }}">
                                    <i class="ti ti-car"></i>
                                    <span>Cars</span>
                                </a>
                            </li>

                            <li class="submenu">
                                <a href="javascript:void(0);"
                                    class="{{ request()->routeIs('backoffice.vehicle-brands.*', 'backoffice.vehicle-models.*') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-device-camera-phone"></i>
                                    <span>Car Attributes</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('backoffice.vehicle-brands.index') }}"
                                            class="{{ request()->routeIs('backoffice.vehicle-brands.*') ? 'active' : '' }}">
                                            Brands
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backoffice.vehicle-models.index') }}"
                                            class="{{ request()->routeIs('backoffice.vehicle-models.*') ? 'active' : '' }}">
                                            Models
                                        </a>
                                    </li>

                                    <li><a href="{{ url('admin/types') }}">Types</a></li>
                                    <li><a href="{{ url('admin/transmissions') }}">Transmissions</a></li>
                                    <li><a href="{{ url('admin/fuel') }}">Fuels</a></li>
                                    <li><a href="{{ url('admin/color') }}">Colors</a></li>
                                    <li><a href="{{ url('admin/steering') }}">Steering</a></li>
                                    <li><a href="{{ url('admin/seats') }}">Seats</a></li>
                                    <li><a href="{{ url('admin/cylinders') }}">Cylinders</a></li>
                                    <li><a href="{{ url('admin/doors') }}">Doors</a></li>
                                    <li><a href="{{ url('admin/features') }}">Features</a></li>
                                    <li><a href="{{ url('admin/safety-features') }}">Safety Features</a></li>
                                </ul>
                            </li>
                        @endrole
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
