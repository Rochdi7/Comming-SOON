    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Logo -->
        <div class="sidebar-logo">
            <a href="{{url('admin/index')}}" class="logo logo-normal">
                <img src="{{URL::asset('admin_assets/img/logo.svg')}}" alt="Logo">
            </a>
            <a href="{{url('admin/index')}}" class="logo-small">
                <img src="{{URL::asset('admin_assets/img/logo-small.svg')}}" alt="Logo">
            </a>
            <a href="{{url('admin/index')}}" class="dark-logo">
                <img src="{{URL::asset('admin_assets/img/logo-white.svg')}}" alt="Logo">
            </a>
        </div>
        <!-- /Logo -->
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                
                <div class="form-group">
                    <!-- Search -->
                    <div class="input-group input-group-flat d-inline-flex">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                            </span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="group-text">
                            <i class="ti ti-command"></i>
                        </span>
                    </div>
                    <!-- /Search -->
                </div>
                <ul>
                    <li class="menu-title"><span>Main</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/index') ? 'active' : '' }}">
                                <a href="{{url('admin/index')}}">
                                    <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>Bookings</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/reservations', 'admin/add-reservation', 'admin/edit-reservation', 'admin/reservation-details') ? 'active' : '' }}">
                                <a href="{{url('admin/reservations')}}">
                                    <i class="ti ti-files"></i><span>Reservations</span><span class="track-icon"></span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/calendar') ? 'active' : '' }}">
                                <a href="{{url('admin/calendar')}}">
                                    <i class="ti ti-calendar-bolt"></i><span>Calendar</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/quotations', 'admin/add-quotations', 'admin/edit-quotations', 'admin/quotation-details') ? 'active' : '' }}">
                                <a href="{{url('admin/quotations')}}">
                                    <i class="ti ti-file-symlink"></i><span>Quotations</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/enquiries') ? 'active' : '' }}">
                                <a href="{{url('admin/enquiries')}}">
                                    <i class="ti ti-mail"></i><span>Enquiries</span>
                                </a>
                            </li>
                        </ul>							
                    </li>
                    <li class="menu-title"><span>Manage</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/customers', 'admin/company-details', 'admin/customers-companies', 'admin/customer-details') ? 'active' : '' }}">
                                <a href="{{url('admin/customers')}}">
                                    <i class="ti ti-users-group"></i><span>Customers</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/drivers') ? 'active' : '' }}">
                                <a href="{{url('admin/drivers')}}">
                                    <i class="ti ti-user-bolt"></i><span>Drivers</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/locations') ? 'active' : '' }}">
                                <a href="{{url('admin/locations')}}">
                                    <i class="ti ti-map-pin"></i><span>Locations</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>RENTALS</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/cars', 'admin/add-car', 'admin/car-details', 'admin/edit-car') ? 'active' : '' }}">
                                <a href="{{url('admin/cars')}}">
                                    <i class="ti ti-car"></i><span>Cars</span>
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/brands', 'admin/types', 'admin/models', 'admin/transmissions', 'admin/fuel', 'admin/color', 'admin/steering', 'admin/seats', 'admin/cylinders', 'admin/doors', 'admin/features', 'admin/safety-features') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-device-camera-phone"></i><span>Car Attributes</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/brands')}}" class=" {{ Request::is('admin/brands') ? 'active' : '' }}">Brands</a></li>
                                    <li><a href="{{url('admin/types')}}" class=" {{ Request::is('admin/types') ? 'active' : '' }}">Types</a></li>
                                    <li><a href="{{url('admin/models')}}" class=" {{ Request::is('admin/models') ? 'active' : '' }}">Models</a></li>
                                    <li><a href="{{url('admin/transmissions')}}" class=" {{ Request::is('admin/transmissions') ? 'active' : '' }}">Transmissions</a></li>
                                    <li><a href="{{url('admin/fuel')}}" class=" {{ Request::is('admin/fuel') ? 'active' : '' }}">Fuels</a></li>
                                    <li><a href="{{url('admin/color')}}" class=" {{ Request::is('admin/color') ? 'active' : '' }}">Colors</a></li>
                                    <li><a href="{{url('admin/steering')}}" class=" {{ Request::is('admin/steering') ? 'active' : '' }}">Steering</a></li>
                                    <li><a href="{{url('admin/seats')}}" class=" {{ Request::is('admin/seats') ? 'active' : '' }}">Seats</a></li>
                                    <li><a href="{{url('admin/cylinders')}}" class=" {{ Request::is('admin/cylinders') ? 'active' : '' }}">Cylinders</a></li>
                                    <li><a href="{{url('admin/doors')}}" class=" {{ Request::is('admin/doors') ? 'active' : '' }}">Doors</a></li>
                                    <li><a href="{{url('admin/features')}}" class=" {{ Request::is('admin/features') ? 'active' : '' }}">Features</a></li>
                                    <li><a href="{{url('admin/safety-features')}}" class=" {{ Request::is('admin/safety-features') ? 'active' : '' }}">Safty Features</a></li>
                                </ul>
                            </li>
                            <li class=" {{ Request::is('admin/extra-services') ? 'active' : '' }}">
                                <a href="{{url('admin/extra-services')}}">
                                    <i class="ti ti-script-plus"></i><span>Extra Service</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/pricing') ? 'active' : '' }}">
                                <a href="{{url('admin/pricing')}}">
                                    <i class="ti ti-file-dollar"></i><span>Seasonal Pricing</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/inspections') ? 'active' : '' }}">
                                <a href="{{url('admin/inspections')}}">
                                    <i class="ti ti-dice-6"></i><span>Inspections</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/tracking') ? 'active' : '' }}">
                                <a href="{{url('admin/tracking')}}">
                                    <i class="ti ti-map-pin-pin"></i><span>Tracking</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/maintenance') ? 'active' : '' }}">
                                <a href="{{url('admin/maintenance')}}">
                                    <i class="ti ti-color-filter"></i><span>Maintenance</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/reviews') ? 'active' : '' }}">
                                <a href="{{url('admin/reviews')}}">
                                    <i class="ti ti-star"></i><span>Reviews</span>
                                </a>
                            </li>
                        </ul>
                    </li>	
                    <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>					
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/invoices', 'admin/add-invoice', 'admin/edit-invoice', 'admin/invoice-details') ? 'active' : '' }}">
                                <a href="{{url('admin/invoices')}}">
                                    <i class="ti ti-file-invoice"></i><span>Invoices</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/payments') ? 'active' : '' }}">
                                <a href="{{url('admin/payments')}}">
                                    <i class="ti ti-credit-card"></i><span>Payments</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>OTHERS</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/chat') ? 'active' : '' }}">
                                <a href="{{url('admin/chat')}}">
                                    <i class="ti ti-message"></i><span>Messages</span><span class="count">5</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/coupons') ? 'active' : '' }}">
                                <a href="{{url('admin/coupons')}}">
                                    <i class="ti ti-discount-2"></i><span>Coupons</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/newsletters') ? 'active' : '' }}">
                                <a href="{{url('admin/newsletters')}}">
                                    <i class="ti ti-file-horizontal"></i><span>Newsletters</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>CMS</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/pages', 'admin/add-pages', 'admin/edit-pages') ? 'active' : '' }}">
                                <a href="{{url('admin/pages')}}" >
                                    <i class="ti ti-file-invoice"></i><span>Pages</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/menu-management', 'admin/edit-menu') ? 'active' : '' }}">
                                <a href="{{url('admin/menu-management')}}" >
                                    <i class="ti ti-menu-2"></i><span>Menu Management</span>
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/blogs', 'admin/add-blog', 'admin/blog-details', 'admin/edit-blog', 'admin/blog-categories', 'admin/blog-comments', 'admin/blog-tags') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-device-desktop-analytics"></i><span>Blogs</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/blogs')}}" class=" {{ Request::is('admin/blogs', 'admin/add-blog', 'admin/blog-details', 'admin/edit-blog') ? 'active' : '' }}">All Blogs</a></li>
                                    <li><a href="{{url('admin/blog-categories')}}" class=" {{ Request::is('admin/blog-categories') ? 'active' : '' }}">Categories</a></li>
                                    <li><a href="{{url('admin/blog-comments')}}" class=" {{ Request::is('admin/blog-comments') ? 'active' : '' }}">Comments</a></li>
                                    <li><a href="{{url('admin/blog-tags')}}" class=" {{ Request::is('admin/blog-tags') ? 'active' : '' }}">Blog Tags</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/countries', 'admin/state', 'admin/city') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-map"></i><span>Locations</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/countries')}}" class=" {{ Request::is('admin/countries') ? 'active' : '' }}">Countries</a></li>
                                    <li><a href="{{url('admin/state')}}" class=" {{ Request::is('admin/state') ? 'active' : '' }}">States</a></li>
                                    <li><a href="{{url('admin/city')}}" class=" {{ Request::is('admin/city') ? 'active' : '' }}">Cities</a></li>
                                </ul>
                            </li>
                            <li class=" {{ Request::is('admin/testimonials') ? 'active' : '' }}">
                                <a href="{{url('admin/testimonials')}}">
                                    <i class="ti ti-brand-hipchat"></i><span>Testimonials</span>
                                </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/faq', 'admin/faq-category') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-question-mark"></i><span>FAQ’s</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/faq')}}" class=" {{ Request::is('admin/faq') ? 'active' : '' }}">FAQ's</a></li>
                                    <li><a href="{{url('admin/faq-category')}}" class=" {{ Request::is('admin/faq-category') ? 'active' : '' }}">FAQ Category</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>SUPPORT</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/contact-messages') ? 'active' : '' }}">
                                <a href="{{url('admin/contact-messages')}}" >
                                    <i class="ti ti-messages"></i><span>Contact Messages</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/announcements') ? 'active' : '' }}">
                                <a href="{{url('admin/announcements')}}">
                                    <i class="ti ti-speakerphone"></i><span>Announcements</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/tickets', 'admin/ticket-details') ? 'active' : '' }}">
                                <a href="{{url('admin/tickets')}}">
                                    <i class="ti ti-ticket"></i><span>Tickets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>USER MANAGEMENT</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/users') ? 'active' : '' }}">
                                <a href="{{url('admin/users')}}" >
                                    <i class="ti ti-user-circle"></i><span>Users</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/roles-permissions', 'admin/permissions') ? 'active' : '' }}">
                                <a href="{{url('admin/roles-permissions')}}">
                                    <i class="ti ti-user-shield"></i><span>Roles & Permissions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>REPORTS</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/income-report') ? 'active' : '' }}">
                                <a href="{{url('admin/income-report')}}" >
                                    <i class="ti ti-chart-histogram"></i><span>Income vs Expense</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/earnings-report') ? 'active' : '' }}">
                                <a href="{{url('admin/earnings-report')}}">
                                    <i class="ti ti-chart-line"></i><span>Earnings</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/rental-report') ? 'active' : '' }}">
                                <a href="{{url('admin/rental-report')}}">
                                    <i class="ti ti-chart-infographic"></i><span>Rentals</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>AUTHENTICATION</span></li>
                    <li>
                        <ul>
                            <li class=" {{ Request::is('admin/login') ? 'active' : '' }}">
                                <a href="{{url('admin/login')}}" >
                                    <i class="ti ti-login"></i><span>Login</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/forgot-password') ? 'active' : '' }}">
                                <a href="{{url('admin/forgot-password')}}">
                                    <i class="ti ti-help-triangle"></i><span>Forgot Password</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/otp') ? 'active' : '' }}">
                                <a href="{{url('admin/otp')}}">
                                    <i class="ti ti-mail-exclamation"></i><span>Email Verification</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/reset-password') ? 'active' : '' }}">
                                <a href="{{url('admin/reset-password')}}">
                                    <i class="ti ti-restore"></i><span>Reset Password</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>SETTINGS & CONFIGURATION</span></li>
                    <li>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/profile-setting', 'admin/security-setting', 'admin/notifications-setting', 'admin/integrations-settings', 'admin/integrations-settings', 'admin/tracker-setting') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-user-cog"></i><span>Account Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/profile-setting')}}" class=" {{ Request::is('admin/profile-setting') ? 'active' : '' }}">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/security-setting')}}" class=" {{ Request::is('admin/security-setting') ? 'active' : '' }}">Security</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/notifications-setting')}}" class=" {{ Request::is('admin/notifications-setting') ? 'active' : '' }}">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/integrations-settings')}}" class=" {{ Request::is('admin/integrations-settings') ? 'active' : '' }}">Integrations</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/tracker-setting')}}" class=" {{ Request::is('admin/tracker-setting') ? 'active' : '' }}">Tracker</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/company-setting', 'admin/localization-setting', 'admin/prefixes', 'admin/seo-setup', 'admin/language-setting', 'admin/language-setting2', 'admin/maintenance-mode', 'admin/login-setting', 'admin/ai-configuration', 'admin/plugin-managers') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-world-cog"></i><span>Website Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/company-setting')}}" class=" {{ Request::is('admin/company-setting') ? 'active' : '' }}">Company Settings</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/localization-setting')}}" class=" {{ Request::is('admin/localization-setting') ? 'active' : '' }}">Localization</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/prefixes')}}" class=" {{ Request::is('admin/prefixes') ? 'active' : '' }}">Prefixes</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/seo-setup')}}" class=" {{ Request::is('admin/seo-setup') ? 'active' : '' }}">SEO Setup</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/language-setting')}}" class=" {{ Request::is('admin/language-setting', 'admin/language-setting2') ? 'active' : '' }}">Language</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/maintenance-mode')}}" class=" {{ Request::is('admin/maintenance-mode') ? 'active' : '' }}">Maintenance Mode</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/login-setting')}}" class=" {{ Request::is('admin/login-setting') ? 'active' : '' }}">Login & Register</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/ai-configuration')}}" class=" {{ Request::is('admin/ai-configuration') ? 'active' : '' }}">AI Configuration</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/plugin-managers')}}" class=" {{ Request::is('admin/plugin-managers') ? 'active' : '' }}">Plugin Managers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/rental-setting', 'admin/insurance-setting') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-clock-cog"></i><span>Rental Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/rental-setting')}}" class=" {{ Request::is('admin/rental-setting') ? 'active' : '' }}">Rental</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/insurance-setting')}}" class=" {{ Request::is('admin/insurance-setting') ? 'active' : '' }}">Insurance</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/invoice-setting', 'admin/invoice-template', 'admin/signatures-setting', 'admin/custom-fields') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-device-mobile-cog"></i><span>App Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/invoice-setting')}}" class=" {{ Request::is('admin/invoice-setting') ? 'active' : '' }}">Invoice Settings</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/invoice-template')}}" class=" {{ Request::is('admin/invoice-template') ? 'active' : '' }}">Invoice Templates</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/signatures-setting')}}" class=" {{ Request::is('admin/signatures-setting') ? 'active' : '' }}">Signatures</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/custom-fields')}}" class=" {{ Request::is('admin/custom-fields') ? 'active' : '' }}">Custom Fields</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/email-setting', 'admin/email-templates', 'admin/sms-gateways', 'admin/gdpr-cookies') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-device-desktop-cog"></i><span>System Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/email-setting')}}" class=" {{ Request::is('admin/email-setting') ? 'active' : '' }}">Email Settings</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/email-templates')}}" class=" {{ Request::is('admin/email-templates') ? 'active' : '' }}">Email Templates</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/sms-gateways')}}" class=" {{ Request::is('admin/sms-gateways') ? 'active' : '' }}">SMS Gateways</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/gdpr-cookies')}}" class=" {{ Request::is('admin/gdpr-cookies') ? 'active' : '' }}">GDPR Cookies</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/payment-methods', 'admin/bank-accounts', 'admin/tax-rates', 'admin/currencies') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-settings-dollar"></i><span>Finance Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/payment-methods')}}" class=" {{ Request::is('admin/payment-methods') ? 'active' : '' }}">Payment Methods</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/bank-accounts')}}" class=" {{ Request::is('admin/bank-accounts') ? 'active' : '' }}">Bank Accounts</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/tax-rates')}}" class=" {{ Request::is('admin/tax-rates') ? 'active' : '' }}">Tax Rates</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/currencies')}}" class=" {{ Request::is('admin/currencies') ? 'active' : '' }}">Currencies</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/sitemap', 'admin/clear-cache', 'admin/storage', 'admin/cronjob', 'admin/system-backup', 'admin/database-backup', 'admin/system-update') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-settings-2"></i><span>Other Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/sitemap')}}" class=" {{ Request::is('admin/sitemap') ? 'active' : '' }}">Sitemap</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/clear-cache')}}" class=" {{ Request::is('admin/clear-cache') ? 'active' : '' }}">Clear Cache</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/storage')}}" class=" {{ Request::is('admin/storage') ? 'active' : '' }}">Storage</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/cronjob')}}" class=" {{ Request::is('admin/cronjob') ? 'active' : '' }}">Cronjob</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/system-backup')}}" class=" {{ Request::is('admin/system-backup') ? 'active' : '' }}">System Backup</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/database-backup')}}" class=" {{ Request::is('admin/database-backup') ? 'active' : '' }}">Database Backup</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/system-update')}}" class=" {{ Request::is('admin/system-update') ? 'active' : '' }}">System Update</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>UI Interface</span></li>
                    <li>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/ui-alerts', 'admin/ui-accordion', 'admin/ui-avatar', 'admin/ui-badges', 'admin/ui-borders', 'admin/ui-buttons', 'admin/ui-buttons-group', 'admin/ui-breadcrumb', 'admin/ui-cards', 'admin/ui-carousel', 'admin/ui-colors', 'admin/ui-dropdowns', 'admin/ui-grid', 'admin/ui-images',
                                 'admin/ui-lightbox', 'admin/ui-media', 'admin/ui-modals', 'admin/ui-offcanvas', 'admin/ui-pagination', 'admin/ui-popovers', 'admin/ui-progress', 'admin/ui-placeholders', 'admin/ui-spinner', 'admin/ui-sweetalerts', 'admin/ui-nav-tabs', 'admin/ui-toasts', 'admin/ui-tooltips', 'admin/ui-typography', 'admin/ui-video', 'admin/ui-sortable', 'admin/ui-swiperjs') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-hierarchy"></i><span>Base UI</span><span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/ui-alerts')}}" class=" {{ Request::is('admin/ui-alerts') ? 'active' : '' }}">Alerts</a></li>
                                    <li><a href="{{url('admin/ui-accordion')}}" class=" {{ Request::is('admin/ui-accordion') ? 'active' : '' }}">Accordion</a></li>
                                    <li><a href="{{url('admin/ui-avatar')}}" class=" {{ Request::is('admin/ui-avatar') ? 'active' : '' }}">Avatar</a></li>
                                    <li><a href="{{url('admin/ui-badges')}}" class=" {{ Request::is('admin/ui-badges') ? 'active' : '' }}">Badges</a></li>
                                    <li><a href="{{url('admin/ui-borders')}}" class=" {{ Request::is('admin/ui-borders') ? 'active' : '' }}">Border</a></li>
                                    <li><a href="{{url('admin/ui-buttons')}}" class=" {{ Request::is('admin/ui-buttons') ? 'active' : '' }}">Buttons</a></li>
                                    <li><a href="{{url('admin/ui-buttons-group')}}" class=" {{ Request::is('admin/ui-buttons-group') ? 'active' : '' }}">Button Group</a></li>
                                    <li><a href="{{url('admin/ui-breadcrumb')}}" class=" {{ Request::is('admin/ui-breadcrumb') ? 'active' : '' }}">Breadcrumb</a></li>
                                    <li><a href="{{url('admin/ui-cards')}}" class=" {{ Request::is('admin/ui-cards') ? 'active' : '' }}">Card</a></li>
                                    <li><a href="{{url('admin/ui-carousel')}}" class=" {{ Request::is('admin/ui-carousel') ? 'active' : '' }}">Carousel</a></li>
                                    <li><a href="{{url('admin/ui-colors')}}" class=" {{ Request::is('admin/ui-colors') ? 'active' : '' }}">Colors</a></li>
                                    <li><a href="{{url('admin/ui-dropdowns')}}" class=" {{ Request::is('admin/ui-dropdowns') ? 'active' : '' }}">Dropdowns</a></li>
                                    <li><a href="{{url('admin/ui-grid')}}" class=" {{ Request::is('admin/ui-grid') ? 'active' : '' }}">Grid</a></li>
                                    <li><a href="{{url('admin/ui-images')}}" class=" {{ Request::is('admin/ui-images') ? 'active' : '' }}">Images</a></li>
                                    <li><a href="{{url('admin/ui-lightbox')}}" class=" {{ Request::is('admin/ui-lightbox') ? 'active' : '' }}">Lightbox</a></li>
                                    <li><a href="{{url('admin/ui-media')}}" class=" {{ Request::is('admin/ui-media') ? 'active' : '' }}">Media</a></li>
                                    <li><a href="{{url('admin/ui-modals')}}" class=" {{ Request::is('admin/ui-modals') ? 'active' : '' }}">Modals</a></li>
                                    <li><a href="{{url('admin/ui-offcanvas')}}" class=" {{ Request::is('admin/ui-offcanvas') ? 'active' : '' }}">Offcanvas</a></li>
                                    <li><a href="{{url('admin/ui-pagination')}}" class=" {{ Request::is('admin/ui-pagination') ? 'active' : '' }}">Pagination</a></li>
                                    <li><a href="{{url('admin/ui-popovers')}}" class=" {{ Request::is('admin/ui-popovers') ? 'active' : '' }}">Popovers</a></li>
                                    <li><a href="{{url('admin/ui-progress')}}" class=" {{ Request::is('admin/ui-progress') ? 'active' : '' }}">Progress</a></li>
                                    <li><a href="{{url('admin/ui-placeholders')}}" class=" {{ Request::is('admin/ui-placeholders') ? 'active' : '' }}">Placeholders</a></li>
                                    <li><a href="{{url('admin/ui-spinner')}}" class=" {{ Request::is('admin/ui-spinner') ? 'active' : '' }}">Spinner</a></li>
                                    <li><a href="{{url('admin/ui-sweetalerts')}}" class=" {{ Request::is('admin/ui-sweetalerts') ? 'active' : '' }}">Sweet Alerts</a></li>
                                    <li><a href="{{url('admin/ui-nav-tabs')}}" class=" {{ Request::is('admin/ui-tabs') ? 'active' : '' }}">Tabs</a></li>
                                    <li><a href="{{url('admin/ui-toasts')}}" class=" {{ Request::is('admin/ui-toasts') ? 'active' : '' }}">Toasts</a></li>
                                    <li><a href="{{url('admin/ui-tooltips')}}" class=" {{ Request::is('admin/ui-tooltips') ? 'active' : '' }}">Tooltips</a></li>
                                    <li><a href="{{url('admin/ui-typography')}}" class=" {{ Request::is('admin/ui-typography') ? 'active' : '' }}">Typography</a></li>
                                    <li><a href="{{url('admin/ui-video')}}" class=" {{ Request::is('admin/ui-video') ? 'active' : '' }}">Video</a></li>
                                    <li><a href="{{url('admin/ui-sortable')}}" class=" {{ Request::is('admin/ui-sortable') ? 'active' : '' }}">Sortable</a></li>
                                    <li><a href="{{url('admin/ui-swiperjs')}}" class=" {{ Request::is('admin/ui-swiperjs') ? 'active' : '' }}">Swiperjs</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/ui-ribbon', 'admin/ui-clipboard', 'admin/ui-drag-drop', 'admin/ui-rangeslider', 'admin/ui-rating', 'admin/ui-text-editor', 'admin/ui-counter', 'admin/ui-scrollbar', 'admin/ui-stickynote', 'admin/ui-timeline') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-whirl"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/ui-ribbon')}}" class=" {{ Request::is('admin/ui-ribbon') ? 'active' : '' }}">Ribbon</a></li>
                                    <li><a href="{{url('admin/ui-clipboard')}}" class=" {{ Request::is('admin/ui-clipboard') ? 'active' : '' }}">Clipboard</a></li>
                                    <li><a href="{{url('admin/ui-drag-drop')}}" class=" {{ Request::is('admin/ui-drag-drop') ? 'active' : '' }}">Drag & Drop</a></li>
                                    <li><a href="{{url('admin/ui-rangeslider')}}" class=" {{ Request::is('admin/ui-rangeslider') ? 'active' : '' }}">Range Slider</a></li>
                                    <li><a href="{{url('admin/ui-rating')}}" class=" {{ Request::is('admin/ui-rating') ? 'active' : '' }}">Rating</a></li>
                                    <li><a href="{{url('admin/ui-text-editor')}}" class=" {{ Request::is('admin/ui-text-editor') ? 'active' : '' }}">Text Editor</a></li>
                                    <li><a href="{{url('admin/ui-counter')}}" class=" {{ Request::is('admin/ui-counter') ? 'active' : '' }}">Counter</a></li>
                                    <li><a href="{{url('admin/ui-scrollbar')}}" class=" {{ Request::is('admin/ui-scrollbar') ? 'active' : '' }}">Scrollbar</a></li>
                                    <li><a href="{{url('admin/ui-stickynote')}}" class=" {{ Request::is('admin/ui-stickynote') ? 'active' : '' }}">Sticky Note</a></li>
                                    <li><a href="{{url('admin/ui-timeline')}}" class=" {{ Request::is('admin/ui-timeline') ? 'active' : '' }}">Timeline</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/form-basic-inputs', 'admin/form-checkbox-radios', 'admin/form-input-groups', 'admin/form-grid-gutters', 'admin/form-select', 'admin/form-mask', 'admin/form-fileupload', 'admin/form-horizontal', 'admin/form-vertical', 'admin/form-floating-labels', 'admin/form-validation', 'admin/form-select2', 'admin/form-wizard', 'admin/form-pickers') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class=" {{ Request::is('admin/form-basic-inputs', 'admin/form-checkbox-radios', 'admin/form-input-groups', 'admin/form-grid-gutters', 'admin/form-select', 'admin/form-mask', 'admin/form-fileupload') ? 'active subdrop' : '' }}">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="{{url('admin/form-basic-inputs')}}" class=" {{ Request::is('admin/form-basic-inputs') ? 'active' : '' }}">Basic Inputs</a></li>
                                            <li><a href="{{url('admin/form-checkbox-radios')}}" class=" {{ Request::is('admin/form-checkbox-radios') ? 'active' : '' }}">Checkbox & Radios</a></li>
                                            <li><a href="{{url('admin/form-input-groups')}}" class=" {{ Request::is('admin/form-input-groups') ? 'active' : '' }}">Input Groups</a></li>
                                            <li><a href="{{url('admin/form-grid-gutters')}}" class=" {{ Request::is('admin/form-grid-gutters') ? 'active' : '' }}">Grid & Gutters</a></li>
                                            <li><a href="{{url('admin/form-select')}}" class=" {{ Request::is('admin/form-select') ? 'active' : '' }}">Form Select</a></li>
                                            <li><a href="{{url('admin/form-mask')}}" class=" {{ Request::is('admin/form-mask') ? 'active' : '' }}">Input Masks</a></li>
                                            <li><a href="{{url('admin/form-fileupload')}}" class=" {{ Request::is('admin/form-fileupload') ? 'active' : '' }}">File Uploads</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class=" {{ Request::is('admin/form-horizontal', 'admin/form-vertical', 'admin/form-floating-labels') ? 'active subdrop' : '' }}">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="{{url('admin/form-horizontal')}}" class=" {{ Request::is('admin/form-horizontal') ? 'active' : '' }}">Horizontal Form</a></li>
                                            <li><a href="{{url('admin/form-vertical')}}" class=" {{ Request::is('admin/form-vertical') ? 'active' : '' }}">Vertical Form</a></li>
                                            <li><a href="{{url('admin/form-floating-labels')}}" class=" {{ Request::is('admin/form-floating-labels') ? 'active' : '' }}">Floating Labels</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('admin/form-validation')}}" class=" {{ Request::is('admin/form-validation') ? 'active' : '' }}">Form Validation</a></li>
                                    <li><a href="{{url('admin/form-select2')}}" class=" {{ Request::is('admin/form-select2') ? 'active' : '' }}">Select2</a></li>
                                    <li><a href="{{url('admin/form-wizard')}}" class=" {{ Request::is('admin/form-wizard') ? 'active' : '' }}">Form Wizard</a></li>
                                    <li><a href="{{url('admin/form-pickers')}}" class=" {{ Request::is('admin/form-pickers') ? 'active' : '' }}">Form Picker</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/tables-basic', 'admin/data-tables') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-table"></i><span>Tables</span><span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/tables-basic')}}" class=" {{ Request::is('admin/tables-basic') ? 'active' : '' }}">Basic Tables </a></li>
                                    <li><a href="{{url('admin/data-tables')}}" class=" {{ Request::is('admin/data-tables') ? 'active' : '' }}">Data Table </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/chart-apex', 'admin/chart-c3', 'admin/chart-js', 'admin/chart-morris', 'admin/chart-flot', 'admin/chart-peity') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-chart-pie-3"></i>
                                    <span>Charts</span><span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/chart-apex')}}" class=" {{ Request::is('admin/chart-apex') ? 'active' : '' }}">Apex Charts</a></li>
                                    <li><a href="{{url('admin/chart-c3')}}" class=" {{ Request::is('admin/chart-c3') ? 'active' : '' }}">Chart C3</a></li>
                                    <li><a href="{{url('admin/chart-js')}}" class=" {{ Request::is('admin/chart-js') ? 'active' : '' }}">Chart Js</a></li>
                                    <li><a href="{{url('admin/chart-morris')}}" class=" {{ Request::is('admin/chart-morris') ? 'active' : '' }}">Morris Charts</a></li>
                                    <li><a href="{{url('admin/chart-flot')}}" class=" {{ Request::is('admin/chart-flot') ? 'active' : '' }}">Flot Charts</a></li>
                                    <li><a href="{{url('admin/chart-peity')}}" class=" {{ Request::is('admin/chart-peity') ? 'active' : '' }}">Peity Charts</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/icon-fontawesome', 'admin/icon-tabler', 'admin/icon-bootstrap', 'admin/icon-remix', 'admin/icon-feather', 'admin/icon-ionic', 'admin/icon-material', 'admin/icon-pe7', 'admin/icon-simpleline', 'admin/icon-themify', 'admin/icon-weather', 'admin/icon-typicon', 'admin/icon-flag') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-icons"></i>
                                    <span>Icons</span><span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('admin/icon-fontawesome')}}" class=" {{ Request::is('admin/icon-fontawesome') ? 'active' : '' }}">Fontawesome Icons</a></li>
                                    <li><a href="{{url('admin/icon-tabler')}}" class=" {{ Request::is('admin/icon-tabler') ? 'active' : '' }}">Tabler Icons</a></li>
                                    <li><a href="{{url('admin/icon-bootstrap')}}" class=" {{ Request::is('admin/icon-bootstrap') ? 'active' : '' }}">Bootstrap Icons</a></li>
                                    <li><a href="{{url('admin/icon-remix')}}" class=" {{ Request::is('admin/icon-remix') ? 'active' : '' }}">Remix Icons</a></li>
                                    <li><a href="{{url('admin/icon-feather')}}" class=" {{ Request::is('admin/icon-feather') ? 'active' : '' }}">Feather Icons</a></li>
                                    <li><a href="{{url('admin/icon-ionic')}}" class=" {{ Request::is('admin/icon-ionic') ? 'active' : '' }}">Ionic Icons</a></li>
                                    <li><a href="{{url('admin/icon-material')}}" class=" {{ Request::is('admin/icon-material') ? 'active' : '' }}">Material Icons</a></li>
                                    <li><a href="{{url('admin/icon-pe7')}}" class=" {{ Request::is('admin/icon-pe7') ? 'active' : '' }}">Pe7 Icons</a></li>
                                    <li><a href="{{url('admin/icon-simpleline')}}" class=" {{ Request::is('admin/icon-simpleline') ? 'active' : '' }}">Simpleline Icons</a></li>
                                    <li><a href="{{url('admin/icon-themify')}}" class=" {{ Request::is('admin/icon-themify') ? 'active' : '' }}">Themify Icons</a></li>
                                    <li><a href="{{url('admin/icon-weather')}}" class=" {{ Request::is('admin/icon-weather') ? 'active' : '' }}">Weather Icons</a></li>
                                    <li><a href="{{url('admin/icon-typicon')}}" class=" {{ Request::is('admin/icon-typicon') ? 'active' : '' }}">Typicon Icons</a></li>
                                    <li><a href="{{url('admin/icon-flag')}}" class=" {{ Request::is('admin/icon-flag') ? 'active' : '' }}">Flag Icons</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=" {{ Request::is('admin/maps-vector', 'admin/maps-leaflet') ? 'active subdrop' : '' }}">
                                    <i class="ti ti-map-2"></i>
                                    <span>Maps</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('admin/maps-vector')}}" class=" {{ Request::is('admin/maps-vector') ? 'active' : '' }}">Vector</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/maps-leaflet')}}" class=" {{ Request::is('admin/maps-leaflet') ? 'active' : '' }}">Leaflet</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title"><span>Extras</span></li>
                    <li>
                        <ul>
                            <li>
                                <a href="javascript:void(0);"><i class="ti ti-file-shredder"></i><span>Documentation</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="ti ti-exchange"></i><span>Changelog</span></a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">
                                    <i class="ti ti-menu-2"></i><span>Multi Level</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);">Multilevel 2<span
                                                class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                            <li class="submenu submenu-two submenu-three">
                                                <a href="javascript:void(0);">Multilevel 2.2<span
                                                        class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                <ul>
                                                    <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                    <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Multilevel 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->