 @if (!Route::is(['forgot-password', 'login', 'register', 'reset-password', 'index-4','index-3','index-2']))
     <!-- Header -->
     @if (!Route::is(['index-3']))
         <header class="header">
     @endif
     @if (Route::is(['index']))
     <header class="header header-four">
    @endif
     @if (Route::is(['index-3']))
         <header class="header header-three">
     @endif
     @if (!Route::is(['index','/']))
     <div class="container-fluid">
    @endif
    @if (Route::is(['index','/']))
        <div class="container">
            @endif
         <nav class="navbar navbar-expand-lg header-nav">
             <div class="navbar-header">
                 <a id="mobile_btn" href="javascript:void(0);">
                     <span class="bar-icon">
                         <span></span>
                         <span></span>
                         <span></span>
                     </span>
                 </a>
                 <a href="{{ url('/') }}" class="navbar-brand logo">
                    @if(Route::is('index'))
                    <img src="{{URL::asset('build/img/logo-white.svg')}}" class="img-fluid white-logo" alt="Logo">

							<img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid dark-logo" alt="Logo">
                            @endif
                            @if(!Route::is('index'))
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                            @endif

                                     </a>
                 <a href="{{ url('/') }}" class="navbar-brand logo-small">
                     <img src="{{ URL::asset('/build/img/logo-small.png') }}" class="img-fluid" alt="Logo">
                 </a>
             </div>
             <div class="main-menu-wrapper">
                 <div class="menu-header">
                     <a href="{{ url('/') }}" class="menu-logo">
                         <img src="{{ URL::asset('/build/img/logo.svg') }}" class="img-fluid" alt="Logo">
                     </a>
                     <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                 </div>
                 <ul class="main-nav">
                     <li class="has-submenu megamenu{{ Request::is('/','index-2', 'index-3') ? 'active' : '' }}">
                         <a href="{{ url('/') }}">Home <i class="fas fa-chevron-down"></i></a>
                        
                         <ul class="submenu mega-submenu">
                            <li>
                                <div class="megamenu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                              
                                                <div class="demo-img">
                                                    <a href="{{url('index')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-01.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index')}}">Car Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index-2')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-02.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-2')}}">Car Rental 1<span class="hot">Hot</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index-3')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-03.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-3')}}">Bike Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index-4')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-04.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-4')}}">Yacht Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>						
                        </ul>

                     </li>
                     <li
                         class="has-submenu {{ Request::is('listing-grid', 'listing-list', 'listing-details', 'listing-map') ? 'active' : '' }}">
                         <a href="">Listings <i class="fas fa-chevron-down"></i></a>
                         <ul class="submenu">
                             <li class="{{ Request::is('listing-grid') ? 'active' : '' }}"><a
                                     href="{{ url('listing-grid') }}">Listing Grid</a></li>
                             <li class="{{ Request::is('listing-list') ? 'active' : '' }}"><a
                                     href="{{ url('listing-list') }}">Listing List</a></li>
                             <li class="{{ Request::is('listing-map') ? 'active' : '' }}"><a
                                     href="{{ url('listing-map') }}">Listing With Map</a></li>
                             <li class="{{ Request::is('listing-details') ? 'active' : '' }}"><a
                                     href="{{ url(path: 'listing-details') }}">Listing Details</a></li>
                         </ul>
                     </li>

                     <li
                         class="has-submenu {{ Request::is('about-us', 'booking-payment','booking-checkout', 'booking', 'invoice-details', 'register', 'login', 'forgot-password', 'reset-password', 'error-404', 'error-400', 'pricing', 'faq', 'gallery', 'our-team', 'testimonial', 'terms-condition', 'privacy-policy', 'maintenance', 'coming-soon') ? 'active' : '' }}">
                         <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                         <ul class="submenu">
                             <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a
                                     href="{{ url('about-us') }}">About Us</a></li>
                             <li class="has-submenu">
                                 <a href="javascript:void(0);">Authentication</a>
                                 <ul
                                     class="submenu {{ Request::is('register', 'login', 'forgot-password', 'reset-password') ? 'active' : '' }}">
                                     <li class="{{ Request::is('register') ? 'active' : '' }}"><a
                                             href="{{ url('register') }}">Signup</a></li>
                                     <li class="{{ Request::is('login') ? 'active' : '' }}"><a
                                             href="{{ url('login') }}">Signin</a></li>
                                     <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a
                                             href="{{ url('forgot-password') }}">Forgot Password</a></li>
                                     <li class="{{ Request::is('reset-password') ? 'active' : '' }}"><a
                                             href="{{ url('reset-password') }}">Reset Password</a></li>
                                 </ul>
                             </li>
                             <li
                                 class="has-submenu {{ Request::is('booking-checkout','booking-payment', 'booking', 'invoice-details') ? 'active' : '' }}">
                                 <a href="javascript:void(0);">Booking</a>
                                 <ul class="submenu">
                                     <li class="{{ Request::is('booking-checkout','booking-payment') ? 'active' : '' }}"><a
                                             href="{{ url('booking-checkout') }}">Booking Checkout</a></li>
                                     <li class="{{ Request::is('booking') ? 'active' : '' }}"><a
                                             href="{{ url('booking') }}">Booking</a></li>
                                     <li class="{{ Request::is('invoice-details') ? 'active' : '' }}"><a
                                             href="{{ url('invoice-details') }}">Invoice Details</a></li>
                                 </ul>
                             </li>
                             <li class="has-submenu {{ Request::is('error-404', 'error-400') ? 'active' : '' }}">
                                 <a href="javascript:void(0);">Error Page</a>
                                 <ul class="submenu">
                                     <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a
                                             href="{{ url('error-404') }}">404 Error</a></li>
                                     <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a
                                             href="{{ url('error-500') }}">500 Error</a></li>
                                 </ul>
                             </li>
                             <li class="{{ Request::is('pricing') ? 'active' : '' }}"><a
                                     href="{{ url('pricing') }}">Pricing</a></li>
                             <li class="{{ Request::is('faq') ? 'active' : '' }}"><a
                                     href="{{ url('faq') }}">FAQ</a></li>
                             <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a
                                     href="{{ url('gallery') }}">Gallery</a></li>
                             <li class="{{ Request::is('our-team') ? 'active' : '' }}"><a
                                     href="{{ url('our-team') }}">Our Team</a></li>
                             <li class="{{ Request::is('testimonial') ? 'active' : '' }}"><a
                                     href="{{ url('testimonial') }}">Testimonials</a></li>
                             <li class="{{ Request::is('terms-condition') ? 'active' : '' }}"><a
                                     href="{{ url('terms-condition') }}">Terms & Conditions</a></li>
                             <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a
                                     href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                             <li class="{{ Request::is('maintenance') ? 'active' : '' }}"><a
                                     href="{{ url('maintenance') }}">Maintenance</a></li>
                             <li class="{{ Request::is('coming-soon') ? 'active' : '' }}"><a
                                     href="{{ url('coming-soon') }}">Coming Soon</a></li>
                         </ul>
                     </li>
                     <li
                         class="has-submenu {{ Request::is('blog-list', 'blog-grid', 'blog-details') ? 'active' : '' }}">
                         <a href="">Blog <i class="fas fa-chevron-down"></i></a>
                         <ul class="submenu">
                             <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a
                                     href="{{ url('blog-list') }}">Blog List</a></li>
                             <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a
                                     href="{{ url('blog-grid') }}">Blog Grid</a></li>
                             <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a
                                     href="{{ url('blog-details') }}">Blog Details</a></li>
                         </ul>
                     </li>
                    
                     <li class="has-submenu {{ Request::is('user-dashboard',
                            'user-bookings',
                            'user-reviews',
                            'user-wishlist',
                            'user-wallet',
                            'user-payment',
                            'user-settings',
                             'user-integration', 
                             'user-notifications',
                              'user-preferences', 
                              'user-security',
                              'admin/index',
                              'admin/reservations',
                              'admin/customers',
                              'admin/cars',
                              'admin/invoices',
                              'admin/coupons',
                              'admin/pages',
                              'admin/contact-messages',
                              'admin/users',
                              'admin/earnings-report',
                              'admin/profile-setting'

                            ) ? 'active' : '' }} ">
                        <a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu {{ Request::is('user-dashboard',
                            'user-bookings',
                            'user-reviews',
                            'user-wishlist',
                            'user-wallet',
                            'user-payment',
                            'user-settings',
                             'user-integration', 
                             'user-notifications',
                              'user-preferences', 
                              'user-security',
                             

                            ) ? 'active' : '' }}">
                                <a href="javascript:void(0);">User Dashboard</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('user-dashboard') ? 'active' : '' }}"><a href="{{url('user-dashboard')}}">Dashboard</a></li>
                                    <li class="{{ Request::is('user-bookings') ? 'active' : '' }}"><a href="{{url('user-bookings')}}">My Bookings</a></li>
                                    <li class="{{ Request::is('user-reviews') ? 'active' : '' }}"><a href="{{url('user-reviews')}}">Reviews</a></li>
                                    <li class="{{ Request::is('user-wishlist') ? 'active' : '' }}"><a href="{{url('user-wishlist')}}">Wishlist</a></li>
                                    <li class="{{ Request::is('user-messages') ? 'active' : '' }}"><a href="{{url('user-messages')}}">Messages</a></li>
                                    <li class="{{ Request::is('user-wallet') ? 'active' : '' }}"><a href="{{url('user-wallet')}}">My Wallet</a></li>
                                    <li class="{{ Request::is('user-payment') ? 'active' : '' }}"><a href="{{url('user-payment')}}">Payments</a></li>
                                    <li class="{{ Request::is('user-settings', 'user-integration', 'user-notifications', 'user-preferences', 'user-security') ? 'active' : '' }}"><a href="{{url('user-settings')}}">Settings</a></li>			
                                </ul>
                            </li>		
                            <li class="has-submenu  {{ Request::is(
                            'admin/index',
                              'admin/reservations',
                              'admin/customers',
                              'admin/cars',
                              'admin/invoices',
                              'admin/coupons',
                              'admin/pages',
                              'admin/contact-messages',
                              'admin/users',
                              'admin/earnings-report',
                              'admin/profile-setting'

                            ) ? 'active' : '' }}">
                                <a href="javascript:void(0);">Admin Dashboard</a>
                                <ul class="submenu">
                                    <li class="{{ Request::is('admin/index') ? 'active' : '' }}"><a href="{{url('admin/index')}}">Dashboard</a></li>
                                    <li class="{{ Request::is('admin/reservations') ? 'active' : '' }}"><a href="{{url('admin/reservations')}}">Bookings</a></li>
                                    <li class="{{ Request::is('admin/customers') ? 'active' : '' }}"><a href="{{url('admin/customers')}}">Manage</a></li>
                                    <li class="{{ Request::is('admin/cars') ? 'active' : '' }}"><a href="{{url('admin/cars')}}">Rentals</a></li>
                                    <li class="{{ Request::is('admin/invoices') ? 'active' : '' }}"><a href="{{url('admin/invoices')}}">Finance & Accounts</a></li>
                                    <li class="{{ Request::is('admin/coupons') ? 'active' : '' }}"><a href="{{url('admin/coupons')}}">Others</a></li>
                                    <li class="{{ Request::is('admin/pages') ? 'active' : '' }}"><a href="{{url('admin/pages')}}">CMS</a></li>			
                                    <li class="{{ Request::is('admin/contact-messages') ? 'active' : '' }}"><a href="{{url('admin/contact-messages')}}">Support</a></li>			
                                    <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{url('admin/users')}}">User Management</a></li>			
                                    <li class="{{ Request::is('admin/earnings-report') ? 'active' : '' }}"><a href="{{url('admin/earnings-report')}}">Reports</a></li>			
                                    <li class="{{ Request::is('admin/profile-setting') ? 'active' : '' }}"><a href="{{url('admin/profile-setting')}}">Settings & Configuration</a></li>		
                                </ul>
                            </li>				
                        </ul>
                    </li>	

                     <li class="login-link">
                         <a href="{{ url('register') }}">Sign Up</a>
                     </li>
                     <li class="login-link">
                         <a href="{{ url('login') }}">Sign In</a>
                     </li>
                 </ul>
             </div>
             @if (Route::is([
                     'user-dashboard',
                     'user-bookings',
                     'user-reviews',
                     'user-wishlist',
                     'user-messages',
                     'user-wallet',
                     'user-payment',
                     'user-settings',
                     'user-booking-cancelled',
                     'user-booking-complete',
                     'user-booking-inprogress',
                     'user-booking-upcoming',
                     'user-integration',
                     'user-notifications',
                     'user-preferences',
                     'user-security',
                     'booking-adon',
                     'booking-cancelled-calendar',
                     
                     'booking-complete-calendar',
                     'booking-detail',
                     'booking-inprogress-calendar',
                     
                     'booking-success',
                     'booking-upcoming-calendar',
                     
                     'bookings-calendar',
                 ]))
                 <ul class="nav header-navbar-rht">

                     <!-- Notifications -->
                     <li class="nav-item dropdown logged-item noti-nav noti-wrapper">
                         <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                             <span class="bell-icon"><img src="{{ URL::asset('build/img/icons/bell-icon.svg') }}"
                                     alt="Bell"></span>
                             <span class="badge badge-pill"></span>
                         </a>
                         <div class="dropdown-menu notifications">
                             <div class="topnav-dropdown-header">
                                 <span class="notification-title">Notifications</span>
                                 <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                             </div>
                             <div class="noti-content">
                                 <ul class="notification-list">
                                     <li class="notification-message">
                                         <a href="#">
                                             <div class="media d-flex">
                                                 <span class="avatar avatar-lg flex-shrink-0">
                                                     <img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{ URL::asset('build/img/profiles/avatar-01.jpg') }}">
                                                 </span>
                                                 <div class="media-body flex-grow-1">
                                                     <p class="noti-details"><span class="noti-title">Jonathan Doe
                                                         </span> has booked <span class="noti-title">your
                                                             service</span></p>
                                                     <p class="noti-time"><span class="notification-time">4 mins
                                                             ago</span></p>
                                                 </div>
                                             </div>
                                         </a>
                                     </li>
                                     <li class="notification-message">
                                         <a href="#">
                                             <div class="media d-flex">
                                                 <span class="avatar avatar-lg flex-shrink-0">
                                                     <img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{ URL::asset('build/img/profiles/avatar-03.jpg') }}">
                                                 </span>
                                                 <div class="media-body flex-grow-1">
                                                     <p class="noti-details"><span class="noti-title">Julie
                                                             Pennington</span> has booked <span class="noti-title">your
                                                             service</span></p>
                                                     <p class="noti-time"><span class="notification-time">6 mins
                                                             ago</span></p>
                                                 </div>
                                             </div>
                                         </a>
                                     </li>
                                     <li class="notification-message">
                                         <a href="#">
                                             <div class="media d-flex">
                                                 <span class="avatar avatar-lg flex-shrink-0">
                                                     <img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{ URL::asset('build/img/profiles/avatar-02.jpg') }}">
                                                 </span>
                                                 <div class="media-body flex-grow-1">
                                                     <p class="noti-details"><span class="noti-title">Tyrone
                                                             Roberts</span> has booked <span class="noti-title">your
                                                             service</span></p>
                                                     <p class="noti-time"><span class="notification-time">8 mins
                                                             ago</span></p>
                                                 </div>
                                             </div>
                                         </a>
                                     </li>
                                     <li class="notification-message">
                                         <a href="#">
                                             <div class="media d-flex">
                                                 <span class="avatar avatar-lg flex-shrink-0">
                                                     <img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{ URL::asset('build/img/profiles/avatar-04.jpg') }}">
                                                 </span>
                                                 <div class="media-body flex-grow-1">
                                                     <p class="noti-details"><span class="noti-title">Patricia
                                                             Manzi</span> has booked <span class="noti-title">your
                                                             service</span></p>
                                                     <p class="noti-time"><span class="notification-time">12 mins
                                                             ago</span></p>
                                                 </div>
                                             </div>
                                         </a>
                                     </li>
                                     <li class="notification-message">
                                         <a href="#">
                                             <div class="media d-flex">
                                                 <span class="avatar avatar-lg flex-shrink-0">
                                                     <img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{ URL::asset('build/img/profiles/avatar-01.jpg') }}">
                                                 </span>
                                                 <div class="media-body flex-grow-1">
                                                     <p class="noti-details"><span class="noti-title">Jonathan
                                                             Doe</span> has booked <span class="noti-title">your
                                                             service</span></p>
                                                     <p class="noti-time"><span class="notification-time">4 mins
                                                             ago</span></p>
                                                 </div>
                                             </div>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="topnav-dropdown-footer">
                                 <a href="#">View all Notifications</a>
                             </div>
                         </div>
                     </li>
                     <!-- /Notifications -->

                     <!-- User Menu -->
                     <li class="nav-item dropdown has-arrow logged-item">
                         <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                             <span class="user-img">
                                 <img class="rounded-circle"
                                     src="{{ URL::asset('build/img/profiles/avatar-14.jpg') }}" alt="Profile">
                             </span>
                             <span class="user-text">Daniel Johshuva</span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">
                             <a class="dropdown-item" href="{{ url('user-dashboard') }}">
                                 <i class="feather-user-check"></i> Dashboard
                             </a>
                             <a class="dropdown-item" href="{{ url('user-settings') }}">
                                 <i class="feather-settings"></i> Settings
                             </a>
                             <a class="dropdown-item" href="{{ url('index') }}">
                                 <i class="feather-power"></i> Logout
                             </a>
                         </div>
                     </li>
                     <!-- /User Menu -->

                 </ul>
             @endif
             @if (
                 !Route::is([
                     'user-dashboard',
                     'user-bookings',
                     'user-reviews',
                     'user-wishlist',
                     'user-messages',
                     'user-wallet',
                     'user-payment',
                     'user-settings',
                     'user-booking-cancelled',
                     'user-booking-complete',
                     'user-booking-inprogress',
                     'user-booking-upcoming',
                     'user-integration',
                     'user-notifications',
                     'user-preferences',
                     'user-security',
                     'index-3',
                     'booking-adon',
                     'booking-cancelled-calendar',
                     
                     'booking-complete-calendar',
                     'booking-detail',
                     'booking-inprogress-calendar',
                     
                     'booking-success',
                     'booking-upcoming-calendar',
                    
                     'bookings-calendar',
                 ]))
                 <ul class="nav header-navbar-rht">
                     <li class="nav-item">
                         <a class="nav-link header-login" href="{{ url('login') }}"><span><i
                                     class="fa-regular fa-user"></i></span>Sign In</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link header-reg" href="{{ url('register') }}"><span><i
                                     class="fa-solid fa-lock"></i></span>Sign Up</a>
                     </li>
                 </ul>
             @endif
             @if (Route::is(['index-3']))
                 <ul class="nav header-navbar-rht">
                     <li class="nav-item user-link">
                         <a class="nav-link header-user" href="{{ url('register') }}"><i
                                 class="bx bx-user"></i></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link header-reg" href="{{ url('listing-list') }}"><span><i
                                     class="bx bx-plus-circle"></i></span>Add Listing</a>
                     </li>
                 </ul>
             @endif
         </nav>
     </div>
     </header>
     <!-- /Header -->
 @endif

 @if (Route::is(['forgot-password', 'login', 'register', 'reset-password']))
     <!-- Header -->
     <header class="log-header">
         <a href="{{ url('/') }}"><img class="img-fluid logo-dark"
                 src="{{ URL::asset('/build/img/logo.svg') }}" alt="Logo"></a>
     </header>
     <!-- /Header -->
 @endif

 @if (Route::is(['index-4']))
     <!-- Hero Sec Main -->
     <div class="hero-sec-main">
         <!-- Header -->
         <header class="header header-two">
             <div class="header-two-top">
                 <div class="container">
                     <div class="header-top-items">
                         <ul class="header-address">
                             <li><span><i class="bx bxs-phone"></i></span>(+088) 123 456 7890</li>
                             <li><span><i class="bx bx-map"></i></span>5617 Glassford Street New York, NY 10000, USA
                             </li>
                         </ul>
                         <div class="header-top-right d-flex align-items-center">
                             <div class="header-top-flag-drops d-flex align-items-center">
                                 <div class="header-top-drpodowns me-3">
                                     <div class="dropdown header-dropdown country-flag">
                                         <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                             href="javascript:void(0);">
                                             <img src="{{ URL::asset('/build/img/flags/us.png') }}"
                                                 alt="Img">English
                                         </a>
                                         <div class="dropdown-menu dropdown-menu-end">
                                             <a href="javascript:void(0);" class="dropdown-item">
                                                 <img src="{{ URL::asset('/build/img/flags/fr.png') }}"
                                                     alt="Img">French
                                             </a>
                                             <a href="javascript:void(0);" class="dropdown-item">
                                                 <img src="{{ URL::asset('/build/img/flags/es.png') }}"
                                                     alt="Img">Spanish
                                             </a>
                                             <a href="javascript:void(0);" class="dropdown-item">
                                                 <img src="{{ URL::asset('/build/img/flags/de.png') }}"
                                                     alt="Img">German
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="header-top-drpodowns">
                                     <div class="dropdown header-dropdown country-flag">
                                         <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                             href="javascript:void(0);">
                                             <i class="bx bx-globe me-2"></i>USD
                                         </a>
                                         <div class="dropdown-menu dropdown-menu-end">
                                             <a href="javascript:void(0);" class="dropdown-item">
                                                 Euro
                                             </a>
                                             <a href="javascript:void(0);" class="dropdown-item">
                                                 INR
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="header-top-social-links">
                                 <ul>
                                     <li>
                                         <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                     </li>
                                     <li>
                                         <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                     </li>
                                     <li>
                                         <a href="#"><i class="fa-brands fa-behance"></i></a>
                                     </li>
                                     <li>
                                         <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                     </li>
                                     <li>
                                         <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                     </li>
                                     <li>
                                         <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="container">
                 <nav class="navbar navbar-expand-lg header-nav">
                     <div class="navbar-header">
                         <a id="mobile_btn" href="javascript:void(0);">
                             <span class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </span>
                         </a>
                         <a href="{{ url('/') }}" class="navbar-brand logo">
                             <img src="{{ URL::asset('/build/img/logo-2.svg') }}" class="img-fluid" alt="Logo">
                         </a>
                         <a href="{{ url('/') }}" class="navbar-brand logo-small">
                             <img src="{{ URL::asset('/build/img/logo-small.png') }}" class="img-fluid"
                                 alt="Logo">
                         </a>
                     </div>
                     <div class="main-menu-wrapper">
                         <div class="menu-header">
                             <a href="{{ url('/') }}" class="menu-logo">
                                 <img src="{{ URL::asset('/build/img/logo.svg') }}" class="img-fluid"
                                     alt="Logo">
                             </a>
                             <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                     class="fas fa-times"></i></a>
                         </div>
                         <ul class="main-nav">
                             <li class="has-submenu  megamenu active">
                                 <a href="{{ url('/') }}">Home <i class="fas fa-chevron-down"></i></a>
                                 <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="{{url('index')}}">
                                                                <img src="{{URL::asset('build/img/menu/home-01.svg')}}" class="img-fluid " alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index')}}">Car Rental<span class="new">New</span> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-2')}}">
                                                                <img src="{{URL::asset('build/img/menu/home-02.svg')}}" class="img-fluid " alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-2')}}">Car Rental 1<span class="hot">Hot</span> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-3')}}">
                                                                <img src="{{URL::asset('build/img/menu/home-03.svg')}}" class="img-fluid " alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-3')}}">Bike Rental<span class="new">New</span> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="{{url('index-4')}}">
                                                                <img src="{{URL::asset('build/img/menu/home-04.svg')}}" class="img-fluid " alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="{{url('index-4')}}">Yacht Rental<span class="new">New</span> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>						
                                </ul>
                             </li>
                             <li class="has-submenu">
                                 <a href="#">Listings <i class="fas fa-chevron-down"></i></a>
                                 <ul class="submenu">
                                     <li><a href="{{ url('listing-grid') }}">Listing Grid</a></li>
                                     <li><a href="{{ url('listing-list') }}">Listing List</a></li>
                                     <li><a href="{{ url('listing-map') }}">Listing With Map</a></li>
                                     <li><a href="{{ url('listing-details') }}">Listing Details</a></li>
                                 </ul>
                             </li>
                            
                             <li class="has-submenu">
                                 <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                                 <ul class="submenu">
                                     <li><a href="{{ url('about-us') }}">About Us</a></li>
                                     <li class="has-submenu">
                                         <a href="javascript:void(0);">Authentication</a>
                                         <ul class="submenu">
                                             <li><a href="{{ url('register') }}">Signup</a></li>
                                             <li><a href="{{ url('login') }}">Signin</a></li>
                                             <li><a href="{{ url('forgot-password') }}">Forgot Password</a></li>
                                             <li><a href="{{ url('reset-password') }}">Reset Password</a></li>
                                         </ul>
                                     </li>
                                     <li class="has-submenu">
                                         <a href="javascript:void(0);">Booking</a>
                                         <ul class="submenu">
                                             <li><a href="{{ url('booking-checkout') }}">Booking Checkout</a></li>
                                             <li><a href="{{ url('booking') }}">Booking</a></li>
                                             <li><a href="{{ url('invoice-details') }}">Invoice Details</a></li>
                                         </ul>
                                     </li>
                                     <li class="has-submenu">
                                         <a href="javascript:void(0);">Error Page</a>
                                         <ul class="submenu">
                                             <li><a href="{{ url('error-404') }}">404 Error</a></li>
                                             <li><a href="{{ url('error-500') }}">500 Error</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ url('pricing') }}">Pricing</a></li>
                                     <li><a href="{{ url('faq') }}">FAQ</a></li>
                                     <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                     <li><a href="{{ url('our-team') }}">Our Team</a></li>
                                     <li><a href="{{ url('testimonial') }}">Testimonials</a></li>
                                     <li><a href="{{ url('terms-condition') }}">Terms & Conditions</a></li>
                                     <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                     <li><a href="{{ url('maintenance') }}">Maintenance</a></li>
                                     <li><a href="{{ url('coming-soon') }}">Coming Soon</a></li>
                                 </ul>
                             </li>
                             <li class="has-submenu">
                                 <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                                 <ul class="submenu">
                                     <li><a href="{{ url('blog-list') }}">Blog List</a></li>
                                     <li><a href="{{ url('blog-grid') }}">Blog Grid</a></li>
                                     <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                                 </ul>
                             </li>
                             <li class="has-submenu {{ Request::is('user-dashboard',
                             'user-bookings',
                             'user-reviews',
                             'user-wishlist',
                             'user-wallet',
                             'user-payment',
                             'user-settings',
                              'user-integration', 
                              'user-notifications',
                               'user-preferences', 
                               'user-security',
                               'admin/index',
                               'admin/reservations',
                               'admin/customers',
                               'admin/cars',
                               'admin/invoices',
                               'admin/coupons',
                               'admin/pages',
                               'admin/contact-messages',
                               'admin/users',
                               'admin/earnings-report',
                               'admin/profile-setting'
 
                             ) ? 'active' : '' }} ">
                         <a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
                         <ul class="submenu">
                             <li class="has-submenu {{ Request::is('user-dashboard',
                             'user-bookings',
                             'user-reviews',
                             'user-wishlist',
                             'user-wallet',
                             'user-payment',
                             'user-settings',
                              'user-integration', 
                              'user-notifications',
                               'user-preferences', 
                               'user-security',
                              
 
                             ) ? 'active' : '' }}">
                                 <a href="javascript:void(0);">User Dashboard</a>
                                 <ul class="submenu">
                                     <li class="{{ Request::is('user-dashboard') ? 'active' : '' }}"><a href="{{url('user-dashboard')}}">Dashboard</a></li>
                                     <li class="{{ Request::is('user-bookings') ? 'active' : '' }}"><a href="{{url('user-bookings')}}">My Bookings</a></li>
                                     <li class="{{ Request::is('user-reviews') ? 'active' : '' }}"><a href="{{url('user-reviews')}}">Reviews</a></li>
                                     <li class="{{ Request::is('user-wishlist') ? 'active' : '' }}"><a href="{{url('user-wishlist')}}">Wishlist</a></li>
                                     <li class="{{ Request::is('user-messages') ? 'active' : '' }}"><a href="{{url('user-messages')}}">Messages</a></li>
                                     <li class="{{ Request::is('user-wallet') ? 'active' : '' }}"><a href="{{url('user-wallet')}}">My Wallet</a></li>
                                     <li class="{{ Request::is('user-payment') ? 'active' : '' }}"><a href="{{url('user-payment')}}">Payments</a></li>
                                     <li class="{{ Request::is('user-settings', 'user-integration', 'user-notifications', 'user-preferences', 'user-security') ? 'active' : '' }}"><a href="{{url('user-settings')}}">Settings</a></li>			
                                 </ul>
                             </li>		
                             <li class="has-submenu  {{ Request::is(
                             'admin/index',
                               'admin/reservations',
                               'admin/customers',
                               'admin/cars',
                               'admin/invoices',
                               'admin/coupons',
                               'admin/pages',
                               'admin/contact-messages',
                               'admin/users',
                               'admin/earnings-report',
                               'admin/profile-setting'
 
                             ) ? 'active' : '' }}">
                                 <a href="javascript:void(0);">Admin Dashboard</a>
                                 <ul class="submenu">
                                     <li class="{{ Request::is('admin/index') ? 'active' : '' }}"><a href="{{url('admin/index')}}">Dashboard</a></li>
                                     <li class="{{ Request::is('admin/reservations') ? 'active' : '' }}"><a href="{{url('admin/reservations')}}">Bookings</a></li>
                                     <li class="{{ Request::is('admin/customers') ? 'active' : '' }}"><a href="{{url('admin/customers')}}">Manage</a></li>
                                     <li class="{{ Request::is('admin/cars') ? 'active' : '' }}"><a href="{{url('admin/cars')}}">Rentals</a></li>
                                     <li class="{{ Request::is('admin/invoices') ? 'active' : '' }}"><a href="{{url('admin/invoices')}}">Finance & Accounts</a></li>
                                     <li class="{{ Request::is('admin/coupons') ? 'active' : '' }}"><a href="{{url('admin/coupons')}}">Others</a></li>
                                     <li class="{{ Request::is('admin/pages') ? 'active' : '' }}"><a href="{{url('admin/pages')}}">CMS</a></li>			
                                     <li class="{{ Request::is('admin/contact-messages') ? 'active' : '' }}"><a href="{{url('admin/contact-messages')}}">Support</a></li>			
                                     <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{url('admin/users')}}">User Management</a></li>			
                                     <li class="{{ Request::is('admin/earnings-report') ? 'active' : '' }}"><a href="{{url('admin/earnings-report')}}">Reports</a></li>			
                                     <li class="{{ Request::is('admin/profile-setting') ? 'active' : '' }}"><a href="{{url('admin/profile-setting')}}">Settings & Configuration</a></li>		
                                 </ul>
                             </li>				
                         </ul>
                     </li>	
                             <li class="login-link">
                                 <a href="{{ url('register') }}">Sign Up</a>
                             </li>
                             <li class="login-link">
                                 <a href="{{ url('login') }}">Sign In</a>
                             </li>
                         </ul>
                     </div>
                     <ul class="nav header-navbar-rht">
                         <li class="nav-item">
                             <a class="nav-link login-link" href="{{ url('login') }}"><span><i
                                         class="bx bx-user me-2"></i></span>Sign In / </a>
                             <a class="nav-link login-link ms-1" href="{{ url('register') }}">Register </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link header-reg" href="{{ url('listing-list') }}"><span><i
                                         class="bx bx-plus-circle"></i></span>Add Listing</a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </header>
         <!-- /Header -->

         <!-- Banner -->
         <section class="banner-section banner-sec-two banner-slider">
             <div class="banner-img-slider owl-carousel">
                 <div class="slider-img">
                     <img src="{{ URL::asset('/build/img/bg/home-banner-img.png') }}" alt="Img">
                 </div>
                 <div class="slider-img">
                     <img src="{{ URL::asset('/build/img/bg/home-banner-img-02.png') }}" alt="Img">
                 </div>
                 <div class="slider-img">
                     <img src="{{ URL::asset('/build/img/bg/home-banner-img-03.png') }}" alt="Img">
                 </div>
             </div>
             <div class="container">
                 <div class="home-banner">
                     <div class="row align-items-center">
                         <div class="col-md-12">
                             <div class="hero-sec-contents">
                                 <div class="banner-title">
                                     <h1>Online Yacht Booking.
                                         <span>Made Simple.</span>
                                     </h1>
                                     <p>Modern design sports cruisers for those who crave adventure & grandeur yachts
                                         for relaxing with your loved ones.
                                         We Offer diverse and fully equipped yachts
                                     </p>
                                 </div>
                                 <div class="banner-form">
                                     <form action="{{ url('listing-grid') }}">
                                         <div class="banner-search-list">
                                             <div class="input-block">
                                                 <label><i class="bx bx-map"></i>Location</label>
                                                 <select class="select">
                                                     <option>Choose Location</option>
                                                     <option>Newyork</option>
                                                 </select>
                                             </div>
                                             <div class="input-block">
                                                 <label><i class="bx bx-calendar"></i>Pickup Date</label>
                                                 <div class="date-widget">
                                                     <div class="group-img">
                                                         <input type="text" class="form-control datetimepicker"
                                                             placeholder="04/11/2023">
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="input-block">
                                                 <label><i class="bx bx-calendar"></i>Pickup Date</label>
                                                 <div class="date-widget">
                                                     <div class="group-img">
                                                         <input type="text" class="form-control datetimepicker"
                                                             placeholder="04/11/2023">
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="input-block">
                                                 <label><i class="bx bxs-ship"></i>Yacht Type</label>
                                                 <select class="select">
                                                     <option>Catamaran</option>
                                                     <option>Motor yachts</option>
                                                     <option>Sailing yachts</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="input-block-btn">
                                             <button class="btn btn-primary" type="submit">
                                                 <i class="bx bx-search-alt me-2"></i> Search
                                             </button>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="banner-user-group text-center">
                                     <ul>
                                         <li>
                                             <a href="javascript:void(0);"><img
                                                     src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                                     alt="Img"></a>
                                         </li>
                                         <li>
                                             <a href="javascript:void(0);"><img
                                                     src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                     alt="Img"></a>
                                         </li>
                                         <li>
                                             <a href="javascript:void(0);"><img
                                                     src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                     alt="Img"></a>
                                         </li>
                                         <li class="users-text">
                                             <h5>6K + Customers</h5>
                                             <span>has used our renting services </span>
                                         </li>
                                     </ul>
                                 </div>

                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="video-btn text-center">
                     <a href="https://www.youtube.com/embed/ExJZAegsOis" data-fancybox><span><i
                                 class="bx bx-play"></i></span></a>
                     <h6>Check Our Video</h6>
                 </div>
             </div>
         </section>
         <!-- /Banner -->
     </div>
     <!-- /Hero Sec Main -->
 @endif

@if(Route::is(['index-3']))

<!-- Header -->
<header class="header header-three">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{url('index')}}" class="navbar-brand logo">
                    <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                </a>
                <a href="{{url('index')}}" class="navbar-brand logo-small">
                    <img src="{{URL::asset('build/img/logo-small.png')}}" class="img-fluid" alt="Logo">
                </a>					
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{url('index')}}" class="menu-logo">
                        <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu active">
                        <a href="{{url('index')}}">Home <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu mega-submenu">
                            <li>
                                <div class="megamenu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-01.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index')}}">Car Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index-2')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-02.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-2')}}">Car Rental 1<span class="hot">Hot</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo active">
                                                <div class="demo-img">
                                                    <a href="{{url('index-3')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-03.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-3')}}">Bike Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index-4')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-04.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-4')}}">Yacht Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>						
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Listings <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{url('listing-grid')}}">Listing Grid</a></li>
                            <li><a href="{{url('listing-list')}}">Listing List</a></li>
                            <li><a href="{{url('listing-map')}}">Listing With Map</a></li>						
                            <li><a href="{{url('listing-details')}}">Listing Details</a></li>								
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li ><a href="{{url('about-us')}}">About Us</a></li>
                            <li><a href="{{url('contact-us')}}">Contact</a></li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Authentication</a>
                                <ul class="submenu">
                                    <li><a href="{{url('register')}}">Sign Up</a></li>
                                    <li><a href="{{url('login')}}">Sign In</a></li>
                                    <li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                    <li><a href="{{url('reset-password')}}">Reset Password</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Booking</a>
                                <ul class="submenu">
                                    <li><a href="{{url('booking-checkout')}}">Booking Checkout</a></li>
                                    <li><a href="{{url('booking')}}">Booking</a></li>
                                    <li><a href="{{url('invoice-details')}}">Invoice Details</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Error Page</a>
                                <ul class="submenu">
                                    <li><a href="{{url('error-404')}}">404 Error</a></li>
                                    <li><a href="{{url('error-500')}}">500 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('pricing')}}">Pricing</a></li>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li><a href="{{url('gallery')}}">Gallery</a></li>
                            <li><a href="{{url('our-team')}}">Our Team</a></li>
                            <li><a href="{{url('testimonial')}}">Testimonials</a></li>
                            <li><a href="{{url('terms-condition')}}">Terms & Conditions</a></li>
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('maintenance')}}">Maintenance</a></li>
                            <li><a href="{{url('coming-soon')}}">Coming Soon</a></li>							
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{url('blog-list')}}">Blog List</a></li>
                            <li><a href="{{url('blog-grid')}}">Blog Grid</a></li>
                            <li><a href="{{url('blog-details')}}">Blog Details</a></li>																		
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="javascript:void(0);">User Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{url('user-dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('user-bookings')}}">My Bookings</a></li>
                                    <li><a href="{{url('user-reviews')}}">Reviews</a></li>
                                    <li><a href="{{url('user-wishlist')}}">Wishlist</a></li>
                                    <li><a href="{{url('user-messages')}}">Messages</a></li>
                                    <li><a href="{{url('user-wallet')}}">My Wallet</a></li>
                                    <li><a href="{{url('user-payment')}}">Payments</a></li>
                                    <li><a href="{{url('user-settings')}}">Settings</a></li>			
                                </ul>
                            </li>		
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Admin Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{url('admin/index')}}">Dashboard</a></li>
                                    <li><a href="{{url('admin/reservations')}}">Bookings</a></li>
                                    <li><a href="{{url('admin/customers')}}">Manage</a></li>
                                    <li><a href="{{url('admin/cars')}}">Rentals</a></li>
                                    <li><a href="{{url('admin/invoices')}}">Finance & Accounts</a></li>
                                    <li><a href="{{url('admin/coupons')}}">Others</a></li>
                                    <li><a href="{{url('admin/pages')}}">CMS</a></li>			
                                    <li><a href="{{url('admin/contact-messages')}}">Support</a></li>			
                                    <li><a href="{{url('admin/users')}}">User Management</a></li>			
                                    <li><a href="{{url('admin/earnings-report')}}">Reports</a></li>			
                                    <li><a href="{{url('admin/profile-setting')}}">Settings & Configuration</a></li>		
                                </ul>
                            </li>				
                        </ul>
                    </li>	
                    <li class="login-link">
                        <a href="{{url('register')}}">Sign Up</a>
                    </li>
                    <li class="login-link">
                        <a href="{{url('login')}}">Sign In</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item user-link">
                    <a class="nav-link header-user" href="{{url('register')}}"><i class="bx bx-user"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-reg" href="{{url('listing-list')}}"><span><i class="bx bx-plus-circle"></i></span>Add Listing</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->

@endif

@if(Route::is(['index-2']))
<!-- Header -->
<header class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{url('index')}}" class="navbar-brand logo">
                    <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                </a>
                <a href="{{url('index')}}" class="navbar-brand logo-small">
                    <img src="{{URL::asset('build/img/logo-small.png')}}" class="img-fluid" alt="Logo">
                </a>					
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{url('index')}}" class="menu-logo">
                        <img src="{{URL::asset('build/img/logo.svg')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu active">
                        <a href="{{url('index')}}">Home <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu mega-submenu">
                            <li>
                                <div class="megamenu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-01.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index')}}">Car Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo active">
                                                <div class="demo-img">
                                                    <a href="{{url('index-2')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-02.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-2')}}">Car Rental 1<span class="hot">Hot</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index-3')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-03.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-3')}}">Bike Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="{{url('index-4')}}">
                                                        <img src="{{URL::asset('build/img/menu/home-04.svg')}}" class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-4')}}">Yacht Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>						
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Listings <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{url('listing-grid')}}">Listing Grid</a></li>
                            <li><a href="{{url('listing-list')}}">Listing List</a></li>
                            <li><a href="{{url('listing-map')}}">Listing With Map</a></li>						
                            <li><a href="{{url('listing-details')}}">Listing Details</a></li>								
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li ><a href="{{url('about-us')}}">About Us</a></li>
                            <li><a href="{{url('contact-us')}}">Contact</a></li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Authentication</a>
                                <ul class="submenu">
                                    <li><a href="{{url('register')}}">Sign Up</a></li>
                                    <li><a href="{{url('login')}}">Sign In</a></li>
                                    <li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                                    <li><a href="{{url('reset-password')}}">Reset Password</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Booking</a>
                                <ul class="submenu">
                                    <li><a href="{{url('booking-checkout')}}">Booking Checkout</a></li>
                                    <li><a href="{{url('booking')}}">Booking</a></li>
                                    <li><a href="{{url('invoice-details')}}">Invoice Details</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Error Page</a>
                                <ul class="submenu">
                                    <li><a href="{{url('error-404')}}">404 Error</a></li>
                                    <li><a href="{{url('error-500')}}">500 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('pricing')}}">Pricing</a></li>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li><a href="{{url('gallery')}}">Gallery</a></li>
                            <li><a href="{{url('our-team')}}">Our Team</a></li>
                            <li><a href="{{url('testimonial')}}">Testimonials</a></li>
                            <li><a href="{{url('terms-condition')}}">Terms & Conditions</a></li>
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('maintenance')}}">Maintenance</a></li>
                            <li><a href="{{url('coming-soon')}}">Coming Soon</a></li>							
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{url('blog-list')}}">Blog List</a></li>
                            <li><a href="{{url('blog-grid')}}">Blog Grid</a></li>
                            <li><a href="{{url('blog-details')}}">Blog Details</a></li>																		
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="javascript:void(0);">User Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{url('user-dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('user-bookings')}}">My Bookings</a></li>
                                    <li><a href="{{url('user-reviews')}}">Reviews</a></li>
                                    <li><a href="{{url('user-wishlist')}}">Wishlist</a></li>
                                    <li><a href="{{url('user-messages')}}">Messages</a></li>
                                    <li><a href="{{url('user-wallet')}}">My Wallet</a></li>
                                    <li><a href="{{url('user-payment')}}">Payments</a></li>
                                    <li><a href="{{url('user-settings')}}">Settings</a></li>			
                                </ul>
                            </li>		
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Admin Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{url('admin/index')}}">Dashboard</a></li>
                                    <li><a href="{{url('admin/reservations')}}">Bookings</a></li>
                                    <li><a href="{{url('admin/customers')}}">Manage</a></li>
                                    <li><a href="{{url('admin/cars')}}">Rentals</a></li>
                                    <li><a href="{{url('admin/invoices')}}">Finance & Accounts</a></li>
                                    <li><a href="{{url('admin/coupons')}}">Others</a></li>
                                    <li><a href="{{url('admin/pages')}}">CMS</a></li>			
                                    <li><a href="{{url('admin/contact-messages')}}">Support</a></li>			
                                    <li><a href="{{url('admin/users')}}">User Management</a></li>			
                                    <li><a href="{{url('admin/earnings-report')}}">Reports</a></li>			
                                    <li><a href="{{url('admin/profile-setting')}}">Settings & Configuration</a></li>		
                                </ul>
                            </li>				
                        </ul>
                    </li>	
                    <li class="login-link">
                        <a href="{{url('register')}}">Sign Up</a>
                    </li>
                    <li class="login-link">
                        <a href="{{url('login')}}">Sign In</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('login')}}"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-reg" href="{{url('register')}}"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->

@endif