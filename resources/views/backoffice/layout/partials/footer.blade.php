@if (Route::is('index'))
    <!-- Footer -->
    <footer class="footer footer-four">	
        <!-- Footer Top -->	
        <div class="footer-top aos" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer-contact footer-widget">
                            <div class="footer-logo">
                                <img src="{{URL::asset('build/img/logo-white.svg')}}" class="img-fluid aos" alt="logo">
                            </div>
                            <div class="footer-contact-info">
                                <p>We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. </p>
                            </div>	
                            <div class="d-flex align-items-center gap-1 app-icon">
                                <a href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/icons/gpay.svg')}}" class="img-fluid" alt="logo">
                                </a>
                                <a href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/icons/app.svg')}}" class="img-fluid" alt="logo">
                                </a>
                            </div>
                            <ul class="social-icon">
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">Quick Links</h5>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">My account</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Campaigns</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Dreams rent Dealers</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Deals and Incentive</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Financial Services</a>
                                        </li>							
                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">Pages</h5>
                                    <ul>
                                        <li>
                                            <a href="{{url('about-us')}}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Become a Partner</a>
                                        </li>
                                        <li>
                                            <a href="{{url('faq')}}">Faq’s</a>
                                        </li>
                                        <li>
                                            <a href="{{url('testimonial')}}">Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="{{url('contact-us')}}">Contact Us</a>
                                        </li>							
                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>	
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">Useful Links</h5>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">My account</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Campaigns</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Dreams rent Dealers</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Deals and Incentive</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Financial Services</a>
                                        </li>							
                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>									
                        </div>							
                    </div>
                </div>					
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <!-- Copyright -->
                <div class="copyright">
                    <div class="row align-items-center row-gap-3">
                        <div class="col-lg-4">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2025 Dreams Rent. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="payment-list">
                                <a href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/icons/payment-01.svg')}}" alt="img">
                                </a>
                                <a href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/icons/payment-02.svg')}}" alt="img">
                                </a>
                                <a href="javascript:void(0);">
                                    <img src="{{URL::asset('build/img/icons/payment-03.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <ul class="privacy-link">
                                <li>
                                    <a href="{{url('privacy-policy')}}">Privacy</a>
                                </li>
                                <li>
                                    <a href="{{url('terms-condition')}}">Terms & Condition</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Refund Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
        </div>
        <!-- /Footer Bottom -->			
    </footer>
    <!-- /Footer -->	
@endif

@if (!Route::is(['forgot-password', 'login', 'register', 'reset-password','booking-adon','index','index-3', 'index-4']))
    <!-- Footer -->
    <footer class="footer">	
        <!-- Footer Top -->	
        <div class="footer-top aos" data-aos="fade-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">About Company</h5>
                                    <ul>
                                        <li>
                                            <a href="{{url('about-us')}}">Our Company</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Shop Toyota</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Dreamsrentals USA</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Dreamsrentals Worldwide</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Dreamsrental Category</a>
                                        </li>										
                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">Vehicles Type</h5>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">All  Vehicles</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">SUVs</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Trucks</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Cars</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Crossovers</a>
                                        </li>								
                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">Quick links</h5>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">My Account</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Champaigns</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Dreamsrental Dealers</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Deals and Incentive</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Financial Services</a>
                                        </li>								
                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-contact footer-widget">
                            <h5 class="footer-title">Contact Info</h5>
                            <div class="footer-contact-info">									
                                <div class="footer-address">											
                                    <span><i class="feather-phone-call"></i></span>
                                    <div class="addr-info">
                                        <a href="tel:+1(888)7601940">+ 1 (888) 760 1940</a>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <span><i class="feather-mail"></i></span>
                                    <div class="addr-info">
                                        <a href="mailto:support@example.com">support@example.com</a>
                                    </div>
                                </div>
                                <div class="update-form">
                                    <form action="#">
                                        <span><i class="feather-mail"></i></span> 
                                        <input type="email" class="form-control" placeholder="Enter You Email Here">
                                        <button type="submit" class="btn btn-subscribe"><span><i class="feather-send"></i></span></button>
                                    </form>
                                </div>
                            </div>								
                            <div class="footer-social-widget">
                                <ul class="nav-social">
                                    <li>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>					
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <!-- Copyright -->
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>© 2024 Dreams Rent. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Copyright Menu -->
                            <div class="copyright-menu">
                                <div class="vistors-details">
                                    <ul class="d-flex">											
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{URL::asset('/build/img/icons/paypal.svg')}}" alt="Paypal"></a></li>											
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{URL::asset('/build/img/icons/visa.svg')}}" alt="Visa"></a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{URL::asset('/build/img/icons/master.svg')}}" alt="Master"></a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{URL::asset('/build/img/icons/applegpay.svg')}}" alt="applegpay"></a></li>
                                    </ul>										   								
                                </div>
                            </div>
                            <!-- /Copyright Menu -->
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
        </div>
        <!-- /Footer Bottom -->			
    </footer>
    <!-- /Footer -->	
@endif

@if(Route::is(['index-3']))
    <!-- Footer -->
    <footer class="footer footer-three">	
        <!-- Footer Top -->	
        <div class="footer-top aos" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="footer-contact footer-widget">
                            <div class="footer-logo">
                                <img src="{{URL::asset('/build/img/logo.svg')}}" class="img-fluid aos" alt="logo">
                            </div>
                            <div class="footer-contact-info">
                                <h6>Want to book a bike instantly Contact Us !!!</h6>
                                <div class="footer-address">
                                    <div class="addr-info">
                                        <a href="tel:+1(888)7601940"><i class="bx bxs-phone"></i>+ 1 (888) 760 1940</a>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <div class="addr-info">
                                        <a href="mailto:support@example.com"><i class="bx bxs-envelope"></i>support@example.com</a>
                                    </div>
                                </div>
                            </div>	
                            <ul class="store-icon">
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="{{URL::asset('/build/img/icons/play-icon.svg')}}" class="img-fluid" alt="logo">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="{{URL::asset('/build/img/icons/app-icon.svg')}}" class="img-fluid" alt="logo">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h5 class="footer-title">Company</h5>
                            <ul>
                                <li>
                                    <a href="{{url('about-us')}}">Our Company</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Bike Rent</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Dreams rent USA</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Dreams rent Worldwide</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Dreams rent Category</a>
                                </li>									
                            </ul>
                        </div>
                        <!-- /Footer Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h5 class="footer-title">Vehicles Type</h5>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Electric</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Scooters</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Sports</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Racing Bikes</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Off-road</a>
                                </li>							
                            </ul>
                        </div>
                        <!-- /Footer Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h5 class="footer-title">Quick Links</h5>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">My account</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Campaigns</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Dreams rent Dealers</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Deals and Incentive</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Financial Services</a>
                                </li>							
                            </ul>
                        </div>
                        <!-- /Footer Widget -->
                    </div>	
                    <div class="col-lg-2 col-md-6">
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h5 class="footer-title">Resources</h5>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Support</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Security</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Help Centers</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Preferences</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Preferences</a>
                                </li>							
                            </ul>
                        </div>
                        <!-- /Footer Widget -->
                    </div>	
                    <div class="col-lg-2 col-md-6">
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h5 class="footer-title">Getting Started</h5>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Introduction</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Documentation</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Usage</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">API</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Elements</a>
                                </li>							
                            </ul>
                        </div>
                        <!-- /Footer Widget -->
                    </div>
                </div>					
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <!-- Copyright -->
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>Copyright © 2024 <span>Dreams Rent</span>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="footer-list">
                                <ul>
                                    <li class="country-flag">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                <img src="{{URL::asset('/build/img/flags/us.png')}}" alt="Img">English
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <img src="{{URL::asset('/build/img/flags/fr.png')}}" alt="Img">French
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <img src="{{URL::asset('/build/img/flags/es.png')}}" alt="Img">Spanish
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <img src="{{URL::asset('/build/img/flags/de.png')}}" alt="Img">German
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="country-flag lang-nav">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <i class="bx bx-globe"></i>USD
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{URL::asset('/build/img/flags/fr.png')}}" alt="Img">Euro
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{URL::asset('/build/img/flags/es.png')}}" alt="Img">INR
                                            </a>
                                        </div>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class="social-icon">
                                            <li>
                                                <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-behance"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
        </div>
        <!-- /Footer Bottom -->			
    </footer>
    <!-- /Footer -->	
@endif

@if(Route::is(['index-4']))
    <!-- Footer -->
    <footer class="footer-two">
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/sec-bg-wave.png')}}" alt="Img">
            <img src="{{URL::asset('build/img/bg/anchor-img-02.png')}}" alt="Img">
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4>Company</h4>
                                <ul class="footer-links">
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Our Company</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Yacht Rent</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Dreams rent USA</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Dreams rent Worldwide</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Dreams rent Category</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4>Vehicles Type</h4>
                                <ul class="footer-links">
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Electric</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Scooters</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Sports</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Racing Bikes</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Off-road</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4>Quick links</h4>
                                <ul class="footer-links">
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>My account</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Campaigns</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Dreams rent Dealers</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Deals and Incentive</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Financial Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4>Resources</h4>
                                <ul class="footer-links">
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Support</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Security</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Help Centers</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Preferences</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Customers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4>Getting Started</h4>
                                <ul class="footer-links">
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Introduction</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Documentation</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Usage</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>API</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i>Elements</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4>24/7 Live Support</h4>
                                <ul class="footer-address">
                                    <li>Want to book a Yacht instantly Contact Us !!!</li>
                                    <li>Contact  : + 1 (888) 760 1940</li>
                                    <li>Emergency  : +1 68564 55664</li>
                                    <li>Email : support@example.com</li>
                                    <li class="social-link">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa-brands fa-behance"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copy-right">
                    <p>Copyright &copy; 2024 <span> Dreams Rent</span> . All Rights Reserved.</p>
                </div>
                <div class="app-store-links d-flex align-items-center">
                    <span class="me-2"><a href="javascript:void(0);"><img src="{{URL::asset('build/img/icons/google-play.svg')}}" alt="Img"></a></span>
                    <span><a href="javascript:void(0);"><img src="{{URL::asset('build/img/icons/app-store.svg')}}" alt="Img"></a></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
@endif