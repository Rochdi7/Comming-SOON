<?php $page = 'index-4'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Yacht Categories -->
    <section class="yacht-category-sec">
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/yacht-cat-sec-bg-01.png')}}" class="anchor-img" alt="Img">
            <img src="{{URL::asset('build/img/bg/yacht-cat-sec-bg-02.png')}}" class="vector-round" alt="Img">
            <img src="{{URL::asset('build/img/bg/yacht-cat-sec-bg-03.png')}}" class="design-round" alt="Img">
        </div>
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-small"></span>
            <span class="bg-dark-blue round-small"></span>
        </div>
        <div class="container">
            <div class="banner-yacht-type-slider owl-carousel">
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-01.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Standard</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-02.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Luxury</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-03.svg')}}" alt="Img"></span>
                    </div>
                    <h6>50+ Guests</h6>
                </div>
                <div class="slider-card slider-card-active">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-04.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Wedding</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-05.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Birthday</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-06.svg')}}" alt="Img"></span>
                    </div>
                    <h6>100+ Guests</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-04.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Fishing</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-08.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Party</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-09.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Corporate</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-10.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Community</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-02.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Luxury</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{URL::asset('build/img/icons/banner-slider-03.svg')}}" alt="Img"></span>
                    </div>
                    <h6>50+ Guests</h6>
                </div>
                
            </div>
            <div class="section-header-two">
                <h2>Popular Yacht Categories</h2>
                <p>Know what you’re looking for? Browse our extensive selection 
                    of charter yachts from around the world. 
                </p>
            </div>
            <div class="row yacht-category-lists">
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-01.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Motor yachts</a></h4>
                                <span>30 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-02.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Sailing yachts</a></h4>
                                <span>56 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-03.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Yacht gulet</a></h4>
                                <span>21 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-04.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Catamaran</a></h4>
                                <span>47 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-05.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Fishing yachts</a></h4>
                                <span>32 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-06.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Sports Cruisers</a></h4>
                                <span>15 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-07.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Displacement Yachts</a></h4>
                                <span>75 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-08.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Classic Yachts</a></h4>
                                <span>41 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-09.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Flybridge Yachts</a></h4>
                                <span>65 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="yacht-cat-grid">
                        <div class="yatch-card-img">
                            <a href="{{url('listing-grid')}}"><img src="{{URL::asset('build/img/yacht/yacht-10.jpg')}}" class="img-fluid" alt="yacht"></a>
                        </div>
                        <div class="card-content d-flex align-items-center justify-content-between">
                            <div>
                                <h4><a href="{{url('listing-grid')}}">Hybrid Yachts</a></h4>
                                <span>145 Yachts</span>
                            </div>
                            <a href="{{url('listing-grid')}}" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="view-more-btn text-center">
                        <a href="{{url('listing-grid')}}" class="btn btn-secondary">View  More Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Yacht Categories -->

    <!-- Renting Yacht  -->
    <section class="renting-yacht-sec">
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-small"></span>
            <span class="bg-dark-blue round-big"></span>
            <span class="bg-orange round-big"></span>
        </div>
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/ship-part-bg-01.png')}}" alt="Bg">
        </div>
        <div class="container">
            <div class="section-header-two">
                <h2>Benefits Of Renting Yacht</h2>
                <p>Renting a yacht offers numerous benefits for individuals and groups 
                    looking to experience luxury, relaxation, and adventure on the water.
                </p>
            </div>
            <div class="renting-yacht-benifits d-flex align-items-center justify-content-between">
                <ul>
                    <li>
                        <span class="benifit-icon"><img src="{{URL::asset('build/img/icons/benifits-icon-05.svg')}}" alt="icon"></span>
                        <div class="benifit-contents">
                            <h5>Luxurious Experience</h5>
                            <p>Yacht rental provides a unique and 
                                luxurious experience that allows you to explore stunning coastal destinations.
                            </p>
                        </div>
                    </li>
                    <li>
                        <span class="benifit-icon"><img src="{{URL::asset('build/img/icons/benifits-icon-04.svg')}}" alt="icon"></span>
                        <div class="benifit-contents">
                            <h5>Customized Itineraries</h5>
                            <p>
                                Yacht charters offer flexibility and freedom to create customized 
                                itineraries based on your interests and preferences.
                            </p>
                        </div>
                    </li>
                    <li>
                        <span class="benifit-icon"><img src="{{URL::asset('build/img/icons/benifits-icon-05.svg')}}" alt="icon"></span>
                        <div class="benifit-contents">
                            <h5>Gourmet Dining and Catering</h5>
                            <p>
                                Many yacht charters offer gourmet dining options 
                                and catering services, allowing you to indulge in delicious cuisine.
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="yatcht-center-img">
                    <span><img src="{{URL::asset('build/img/bg/benifits-sec-bg-01.png')}}" class="img-fluid" alt="Img"></span>
                    <span class="roung-img-bg"></span>
                </div>
                <ul>
                    <li>
                        <span class="benifit-icon"><img src="{{URL::asset('build/img/icons/benifits-icon-03.svg')}}" alt="icon"></span>
                        <div class="benifit-contents">
                            <h5>Privacy and Exclusivity</h5>
                            <p>
                                With a private yacht charter, you have the opportunity to 
                                escape the crowds and enjoy intimate moments with your loved ones.
                            </p>
                        </div>
                    </li>
                    <li>
                        <span class="benifit-icon"><img src="{{URL::asset('build/img/icons/benifits-icon-02.svg')}}" alt="icon"></span>
                        <div class="benifit-contents">
                            <h5>Variety of Activities</h5>
                            <p>Yacht rental provides a unique and 
                                Yachts offer a wide range of onboard activities 
                                and amenities to keep you entertained throughout your charter.
                            </p>
                        </div>
                    </li>
                    <li>
                        <span class="benifit-icon"><img src="{{URL::asset('build/img/icons/benifits-icon-01.svg')}}" alt="icon"></span>
                        <div class="benifit-contents">
                            <h5>Relaxation and Wellness</h5>
                            <p>Yacht charters offer the ultimate relaxation and wellness experience, allowing you 
                                to unwind and rejuvenate in tranquil surroundings.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Renting Yacht -->

    <!-- Top Feature Yacht -->
    <section class="top-features-yachts">
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/yacht-cat-sec-bg-01.png')}}" class="anchor-img" alt="Img">
            <img src="{{URL::asset('build/img/bg/yacht-cat-sec-bg-03.png')}}" class="design-round" alt="Img">
            <img src="{{URL::asset('build/img/bg/ship-part-bg-01.png')}}" alt="Bg">
        </div>
        <div class="container">
            <div class="sec-title">
                <h4>Select From Professional Charter Companies</h4>
            </div>
            <div class="charter-company-slider owl-carousel">
                <div class="charter-company-logo">
                    <span><img src="{{URL::asset('build/img/icons/charter-company-01.svg')}}" alt="Icon"></span>
                </div>
                <div class="charter-company-logo">
                    <span><img src="{{URL::asset('build/img/icons/charter-company-02.svg')}}" alt="Icon"></span>
                </div>
                <div class="charter-company-logo">
                    <span><img src="{{URL::asset('build/img/icons/charter-company-03.svg')}}" alt="Icon"></span>
                </div>
                <div class="charter-company-logo">
                    <span><img src="{{URL::asset('build/img/icons/charter-company-04.svg')}}" alt="Icon"></span>
                </div>
                <div class="charter-company-logo">
                    <span><img src="{{URL::asset('build/img/icons/charter-company-05.svg')}}" alt="Icon"></span>
                </div>
            </div>
            <div class="top-rated-yachts">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="section-header-two">
                            <h2>Featured & Top Rated Yachts</h2>
                            <p>A premier collection of exceptional luxury yachts, professionally
                                staffed and privately owned, yet available for you to experience as your own.
                            </p>
                            <div class="owl-nav slide-nav-1 nav-control"></div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="top-rated-yachts-slider owl-carousel">
                            <div class="top-rated-card">
                                <div class="rated-yacht-img slide-card-images">
                                    <div class="image-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-01.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-02.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-03.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-04.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="img-top-ribbon">
                                        <span class="ribbon-text bg-danger">Featured</span>
                                    </div>
                                </div>
                                <div class="rated-yacht-content">
                                    <div class="yacht-content-head">
                                        <div class="head-items-left">
                                            <h4><a href="{{url('listing-details')}}">Bavaria 50 Cruiser</a></h4>
                                            <span class="d-flex align-items-center"><i class="bx bx-map me-2"></i>Chicago, IL</span>
                                        </div>
                                        <div class="head-items-right">
                                            <div class="rated-star">
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star"></i>
                                            </div>
                                            <span class="km-badge"><i class="bx bx-map-pin me-2"></i>3.2m</span>
                                        </div>
                                    </div>
                                    <div class="yacht-content-body">
                                        <ul class="yacht-features-info">
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-01.svg')}}" alt="Img"></span>
                                                <h6>People <span> : 8</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-02.svg')}}" alt="Img"></span>
                                                <h6>Length <span> : 4.6m</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-03.svg')}}" alt="Img"></span>
                                                <h6>Fuel <span> : Diesel</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-04.svg')}}" alt="Img"></span>
                                                <h6>Build <span> : 2024</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-05.svg')}}" alt="Img"></span>
                                                <h6>Engine <span> : MTU</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-06.svg')}}" alt="Img"></span>
                                                <h6>Cabins <span> :4</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="yacht-content-footer">
                                        <p>From <span>$180 </span> /day</p>
                                        <div class="yacht-book-btn">
                                            <a href="javascript:void(0);" class="yacht-user-img"><img src="{{URL::asset('build/img/profiles/avatar-14.jpg')}}" alt="Img"></a>
                                            <a href="{{url('listing-details')}}" class="btn btn-secondary">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-rated-card">
                                <div class="rated-yacht-img slide-card-images">
                                    <div class="image-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-05.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{url('listing-details')}}">
                                                <img src="{{URL::asset('build/img/yacht/top-yacht-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="img-top-ribbon">
                                        <span class="ribbon-text bg-warning">Top Rated</span>
                                    </div>
                                </div>
                                <div class="rated-yacht-content">
                                    <div class="yacht-content-head">
                                        <div class="head-items-left">
                                            <h4><a href="javascript:void(0);">My Fair Shaare</a></h4>
                                            <span class="d-flex align-items-center"><i class="bx bx-map me-2"></i>Warwick, Cowesst mariana</span>
                                        </div>
                                        <div class="head-items-right">
                                            <div class="rated-star">
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star filled"></i>
                                                <i class="bx bxs-star"></i>
                                            </div>
                                            <span class="km-badge"><i class="bx bx-map-pin me-2"></i>2.2m</span>
                                        </div>
                                    </div>
                                    <div class="yacht-content-body">
                                        <ul class="yacht-features-info">
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-01.svg')}}" alt="Img"></span>
                                                <h6>People <span> : 3</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-02.svg')}}" alt="Img"></span>
                                                <h6>Length <span> : 5.6m</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-03.svg')}}" alt="Img"></span>
                                                <h6>Fuel <span> : Diesel</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-04.svg')}}" alt="Img"></span>
                                                <h6>Build <span> : 2023</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-05.svg')}}" alt="Img"></span>
                                                <h6>Engine <span> : 57hp</span></h6>
                                            </li>
                                            <li>
                                                <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-06.svg')}}" alt="Img"></span>
                                                <h6>Cabins <span> :3</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="yacht-content-footer">
                                        <p>From <span>$280 </span> /day</p>
                                        <div class="yacht-book-btn">
                                            <a href="javascript:void(0);" class="yacht-user-img"><img src="{{URL::asset('build/img/profiles/avatar-15.jpg')}}" alt="Img"></a>
                                            <a href="{{url('listing-details')}}" class="btn btn-secondary">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Top Feature Yacht -->

    <!-- Boat Info Steps -->
    <section class="boat-info-steps-sec">
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-big"></span>
            <span class="bg-dark-blue round-small"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-steps-card">
                        <div class="hex-hover">
                            <div class="hex d-flex align-items-center justify-content-center">
                                <div class="hexTop"></div>
                                <div class="hexBottom"></div>
                                <div class="hex-icon"><i class="bx bx-map"></i></div>
                            </div>
                        </div>
                        <div class="steps-content">
                            <span class="step-badge">Step 1</span>
                            <h4>Browse thousands of boats, all around world</h4>
                            <p>Determine the date & location for your Yacht rental. Consider factors such as your travel itinerary,</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-steps-card">
                        <div class="hex-hover">
                            <div class="hex d-flex align-items-center justify-content-center">
                                <div class="hexTop"></div>
                                <div class="hexBottom"></div>
                                <div class="hex-icon"><i class="bx bx-chat"></i></div>
                            </div>
                        </div>
                        <div class="steps-content">
                            <span class="step-badge">Step 2</span>
                            <h4>Chat with boat owners to customize the perfect trip</h4>
                            <p>Check the availability of your desired type for your chosen dates and location. Ensure that the rental rates.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-steps-card">
                        <div class="hex-hover">
                            <div class="hex d-flex align-items-center justify-content-center">
                                <div class="hexTop"></div>
                                <div class="hexBottom"></div>
                                <div class="hex-icon"><i class="bx bx-water"></i></div>
                            </div>
                        </div>	
                        <div class="steps-content">
                            <span class="step-badge">Step 3</span>
                            <h4>Meet your captain and get out the water!</h4>
                            <p>Check the availability of your desired type for your chosen dates <br> and location. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Boat Info Steps -->

    <!-- Poplar Location -->
    <section class="popular-location-sec">
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-big"></span>
            <span class="bg-dark-blue round-small"></span>
        </div>
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/yacht-cat-sec-bg-02.png')}}" class="vector-round" alt="Img">
            <img src="{{URL::asset('build/img/bg/ship-part-bg-01.png')}}" alt="Bg">
        </div>
        <div class="container">
            <div class="section-header-two">
                <h2>Popular Location</h2>
                <p>Most popular worldwide Category due to their reliability, 
                    affordability, and features.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-location-slider owl-carousel home-two-slider">
                        <div class="popular-location-card">
                            <div class="location-img">
                                <a href="javascript:void(0);"><img src="{{URL::asset('build/img/destination/popular-location-01.jpg')}}" alt="City Img"></a>
                            </div>
                            <div class="location-contents">
                                <div class="location-city-name">
                                    <h4><a href="javascript:void(0);">Dubai</a></h4>
                                    <span>42 Yachts</span>
                                </div>
                                <a href="javascript:void(0);" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                        <div class="popular-location-card">
                            <div class="location-img">
                                <a href="javascript:void(0);"><img src="{{URL::asset('build/img/destination/popular-location-02.jpg')}}" alt="City Img"></a>
                            </div>
                            <div class="location-contents">
                                <div class="location-city-name">
                                    <h4><a href="javascript:void(0);">Bangkok</a></h4>
                                    <span>50 Yachts</span>
                                </div>
                                <a href="javascript:void(0);" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                        <div class="popular-location-card">
                            <div class="location-img">
                                <a href="javascript:void(0);"><img src="{{URL::asset('build/img/destination/popular-location-03.jpg')}}" alt="City Img"></a>
                            </div>
                            <div class="location-contents">
                                <div class="location-city-name">
                                    <h4><a href="javascript:void(0);">Newyork</a></h4>
                                    <span>78 Yachts</span>
                                </div>
                                <a href="javascript:void(0);" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                        <div class="popular-location-card">
                            <div class="location-img">
                                <a href="javascript:void(0);"><img src="{{URL::asset('build/img/destination/popular-location-04.jpg')}}" alt="City Img"></a>
                            </div>
                            <div class="location-contents">
                                <div class="location-city-name">
                                    <h4><a href="javascript:void(0);">Singapore</a></h4>
                                    <span>124 Yachts</span>
                                </div>
                                <a href="javascript:void(0);" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                        <div class="popular-location-card">
                            <div class="location-img">
                                <a href="javascript:void(0);"><img src="{{URL::asset('build/img/destination/popular-location-05.jpg')}}" alt="City Img"></a>
                            </div>
                            <div class="location-contents">
                                <div class="location-city-name">
                                    <h4><a href="javascript:void(0);">Honk kong</a></h4>
                                    <span>100 Yachts</span>
                                </div>
                                <a href="javascript:void(0);" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                        <div class="popular-location-card">
                            <div class="location-img">
                                <a href="javascript:void(0);"><img src="{{URL::asset('build/img/destination/popular-location-06.jpg')}}" alt="City Img"></a>
                            </div>
                            <div class="location-contents">
                                <div class="location-city-name">
                                    <h4><a href="javascript:void(0);">Paris</a></h4>
                                    <span>110 Yachts</span>
                                </div>
                                <a href="javascript:void(0);" class="arrow-right"><i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Poplar Location -->

    <!-- Yacht Offer -->
    <section class="yacht-offer-sec">
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/sec-bg-wave.png')}}" class="wave-bottom" alt="Bg">
        </div>
        <div class="container">
            <div class="section-header-two">
                <h2>Yacht - Last Minute Offers!</h2>
                <p>Most popular worldwide Category due to their 
                    reliability, affordability, and features.
                </p>
            </div>
            <div class="yacht-list-cards">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="top-rated-card">
                            <div class="rated-yacht-img slide-card-images">
                                <div class="yacht-image-slider owl-carousel">
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-01.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-02.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-03.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-04.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="rated-yacht-content">
                                <div class="yacht-content-head">
                                    <div class="head-items-left">
                                        <h4><a href="{{url('listing-details')}}">Yacht Sun Odyssey 419</a></h4>
                                        <span class="d-flex align-items-center"><i class="bx bx-map me-2"></i>Chicago, IL</span>
                                    </div>
                                    <div class="head-items-right">
                                        <div class="rated-star">
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <span class="km-badge"><i class="bx bx-map-pin me-2"></i>3.2m</span>
                                    </div>
                                </div>
                                <div class="yacht-content-body">
                                    <ul class="yacht-features-info">
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-01.svg')}}" alt="Img"></span>
                                            <h6>People <span> : 8</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-02.svg')}}" alt="Img"></span>
                                            <h6>Length <span> : 4.6m</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-04.svg')}}" alt="Img"></span>
                                            <h6>Build <span> : 2024</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-06.svg')}}" alt="Img"></span>
                                            <h6>Cabins <span> : 4</span></h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="yacht-content-footer">
                                    <p>From <span>$180 </span> /day</p>
                                    <div class="yacht-book-btn">
                                        <a href="javascript:void(0);" class="yacht-user-img"><img src="{{URL::asset('build/img/profiles/avatar-14.jpg')}}" alt="Img"></a>
                                        <a href="{{url('listing-details')}}" class="btn btn-secondary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="top-rated-card">
                            <div class="rated-yacht-img slide-card-images">
                                <div class="yacht-image-slider owl-carousel">
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-05.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="rated-yacht-content">
                                <div class="yacht-content-head">
                                    <div class="head-items-left">
                                        <h4><a href="{{url('listing-details')}}">Bavaria Cruiser | Oceanos</a></h4>
                                        <span class="d-flex align-items-center"><i class="bx bx-map me-2"></i>Miami beach, Miami</span>
                                    </div>
                                    <div class="head-items-right">
                                        <div class="rated-star">
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <span class="km-badge"><i class="bx bx-map-pin me-2"></i>3.2m</span>
                                    </div>
                                </div>
                                <div class="yacht-content-body">
                                    <ul class="yacht-features-info">
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-01.svg')}}" alt="Img"></span>
                                            <h6>People <span> : 4</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-02.svg')}}" alt="Img"></span>
                                            <h6>Length <span> : 2.6m</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-04.svg')}}" alt="Img"></span>
                                            <h6>Build <span> : 2023</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-06.svg')}}" alt="Img"></span>
                                            <h6>Cabins <span> : 8</span></h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="yacht-content-footer">
                                    <p>From <span>$150 </span> /day</p>
                                    <div class="yacht-book-btn">
                                        <a href="javascript:void(0);" class="yacht-user-img"><img src="{{URL::asset('build/img/profiles/avatar-15.jpg')}}" alt="Img"></a>
                                        <a href="{{url('listing-details')}}" class="btn btn-secondary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="top-rated-card">
                            <div class="rated-yacht-img slide-card-images">
                                <div class="yacht-image-slider owl-carousel">
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-10.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-12.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-13.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="rated-yacht-content">
                                <div class="yacht-content-head">
                                    <div class="head-items-left">
                                        <h4><a href="{{url('listing-details')}}">Sailing yacht Dufour</a></h4>
                                        <span class="d-flex align-items-center"><i class="bx bx-map me-2"></i>Key West, harbour</span>
                                    </div>
                                    <div class="head-items-right">
                                        <div class="rated-star">
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <span class="km-badge"><i class="bx bx-map-pin me-2"></i>7.1m</span>
                                    </div>
                                </div>
                                <div class="yacht-content-body">
                                    <ul class="yacht-features-info">
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-01.svg')}}" alt="Img"></span>
                                            <h6>People <span> : 2</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-02.svg')}}" alt="Img"></span>
                                            <h6>Length <span> : 4.6m</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-04.svg')}}" alt="Img"></span>
                                            <h6>Build <span> : 2023</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-06.svg')}}" alt="Img"></span>
                                            <h6>Cabins <span> : 3</span></h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="yacht-content-footer">
                                    <p>From <span>$410 </span> /day</p>
                                    <div class="yacht-book-btn">
                                        <a href="javascript:void(0);" class="yacht-user-img"><img src="{{URL::asset('build/img/profiles/avatar-13.jpg')}}" alt="Img"></a>
                                        <a href="{{url('listing-details')}}" class="btn btn-secondary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="top-rated-card">
                            <div class="rated-yacht-img slide-card-images">
                                <div class="yacht-image-slider owl-carousel">
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-11.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-14.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-15.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="{{url('listing-details')}}">
                                            <img src="{{URL::asset('build/img/yacht/boat-16.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="rated-yacht-content">
                                <div class="yacht-content-head">
                                    <div class="head-items-left">
                                        <h4><a href="{{url('listing-details')}}">Beneteau Oceanis 41.1</a></h4>
                                        <span class="d-flex align-items-center"><i class="bx bx-map me-2"></i>Annopolis, Mariana</span>
                                    </div>
                                    <div class="head-items-right">
                                        <div class="rated-star">
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star filled"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <span class="km-badge"><i class="bx bx-map-pin me-2"></i>7.1m</span>
                                    </div>
                                </div>
                                <div class="yacht-content-body">
                                    <ul class="yacht-features-info">
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-01.svg')}}" alt="Img"></span>
                                            <h6>People <span> : 3</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-02.svg')}}" alt="Img"></span>
                                            <h6>Length <span> : 5.6m</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-04.svg')}}" alt="Img"></span>
                                            <h6>Build <span> : 2024</span></h6>
                                        </li>
                                        <li>
                                            <span class="yacht-feature-icon"><img src="{{URL::asset('build/img/icons/yacht-feature-icon-06.svg')}}" alt="Img"></span>
                                            <h6>Cabins <span> : 4</span></h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="yacht-content-footer">
                                    <p>From <span>$680 </span> /day</p>
                                    <div class="yacht-book-btn">
                                        <a href="javascript:void(0);" class="yacht-user-img"><img src="{{URL::asset('build/img/profiles/avatar-13.jpg')}}" alt="Img"></a>
                                        <a href="{{url('listing-details')}}" class="btn btn-secondary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="view-more-btn text-center">
                            <a href="{{url('listing-grid')}}" class="btn btn-secondary">View all Yachts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Yacht Offer -->

    <!-- More Boats Info -->
    <section class="more-boats-info-sec">
        <div class="container-fluid">
            <div class="sec-bottom-info">
                <div class="row bottom-text-row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="bottom-ship-info-card">
                            <div class="hover-ship-info w-100">
                                <h4>Classic Dancer premium A/C Boat rental</h4>
                                <div class="address-info">
                                    <span><i class="bx bx-map"></i>Hulbert, MI</span>
                                    <div class="rated-star">
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star"></i>
                                        <span>55 Reviews</span>
                                    </div>
                                </div>
                                <ul class="ship-features">
                                    <li>Cabins : 4</li>
                                    <li>People : 8</li>
                                    <li>Length : 4.6</li>
                                </ul>
                                <div class="ship-pricing">
                                    <h5>From <span> $180 </span> /day</h5>
                                    <a href="{{url('listing-details')}}" class="btn btn-primary btn-buy">Book Now</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="bottom-ship-info-card">
                            <div class="hover-ship-info w-100">
                                <h4>Exclusive "Classic Paradise" Premium Vessel</h4>
                                <div class="address-info">
                                    <span><i class="bx bx-map"></i>Miami, FL</span>
                                    <div class="rated-star">
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star"></i>
                                        <span>55 Reviews</span>
                                    </div>
                                </div>
                                <ul class="ship-features">
                                    <li>Cabins : 4</li>
                                    <li>People : 8</li>
                                    <li>Length : 4.6</li>
                                </ul>
                                <div class="ship-pricing">
                                    <h5>From <span> $180 </span> /day</h5>
                                    <a href="{{url('listing-details')}}" class="btn btn-primary btn-buy">Book Now</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="bottom-ship-info-card">
                            <div class="hover-ship-info w-100">
                                <h4>Explore the water in Style: Exclusive Houseboat</h4>
                                <div class="address-info">
                                    <span><i class="bx bx-map"></i>Poug, NY</span>
                                    <div class="rated-star">
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star"></i>
                                        <span>55 Reviews</span>
                                    </div>
                                </div>
                                <ul class="ship-features">
                                    <li>Cabins : 4</li>
                                    <li>People : 8</li>
                                    <li>Length : 4.6</li>
                                </ul>
                                <div class="ship-pricing">
                                    <h5>From <span> $180 </span> /day</h5>
                                    <a href="{{url('listing-details')}}" class="btn btn-primary btn-buy">Book Now</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="bottom-ship-info-card">
                            <div class="hover-ship-info w-100">
                                <h4>2022 Sea Doo Pontoon for Exciting Adventure</h4>
                                <div class="address-info">
                                    <span><i class="bx bx-map"></i>Heflin, AL</span>
                                    <div class="rated-star">
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star filled"></i>
                                        <i class="bx bxs-star"></i>
                                        <span>55 Reviews</span>
                                    </div>
                                </div>
                                <ul class="ship-features">
                                    <li>Cabins : 4</li>
                                    <li>People : 8</li>
                                    <li>Length : 4.6</li>
                                </ul>
                                <div class="ship-pricing">
                                    <h5>From <span> $180 </span> /day</h5>
                                    <a href="{{url('listing-details')}}" class="btn btn-primary btn-buy">Book Now</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /More Boats Info -->

    <!-- Boat marketplace -->
    <section class="boats-marketplace-sec">
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-small"></span>
            <span class="bg-dark-blue round-small"></span>
            <span class="bg-dark-blue round-big"></span>
        </div>
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/dotted-round-bg.png')}}" alt="Bg">
            <img src="{{URL::asset('build/img/bg/anchor-img.png')}}" alt="Bg">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="sec-col-left-imgs">
                        <span class="sec-left-one"><img src="{{URL::asset('build/img/bg/sec-modal-img-01.jpg')}}" class="img-fluid" alt="Img"></span>
                        <span class="sec-left-two"><img src="{{URL::asset('build/img/bg/sec-modal-img-02.jpg')}}" class="img-fluid" alt="Img"></span>
                        <div class="experience-info">
                            <h5>15+ <span>Years of <br> Experience</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header-two">
                        <h2>Providing a large fleet of Boats marketplace for a perfect and dreamy experience</h2>
                        <h4>Know what you looking for? Browse our extensive 
                            select of charter yachts from around the world.
                        </h4>
                        <p>Find and book your dream yacht through Floaty, the world’s 
                            leading luxury yacht charter comparison site. View all superyachts available to rent,
                                get expert advice from our comprehensive 
                            destination guides and be inspired by our bespoke superyacht itineraries. 
                        </p>
                        <a href="{{url('listing-details')}}" class="btn btn-primary d-flex align-items-center"><i class="bx bx-bar-chart me-2"></i>Learn More</a>
                    </div>
                </div>
            </div>
            <div class="yacht-owner-card">
                <div class="sec-bg">
                    <img src="{{URL::asset('build/img/bg/sec-bg-wave.png')}}" alt="Img">
                </div>
                <div class="yacht-owner-title">
                    <h3>Are you a Yacht Owner ?</h3>
                    <p>List your boat on Boataround and earn money.</p>
                    <a href="javascript:void(0);" class="btn btn-primary">Get Started</a>
                </div>
                <div class="yacht-owner-img">
                    <img src="{{URL::asset('build/img/bg/yacht-owner-bg-01.png')}}" alt="Img">
                </div>
            </div>
        </div>
    </section>
    <!-- /Boat marketplace -->

    <!-- Client Review -->
    <section class="our-client-review-sec">
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/ship-part-bg-01.png')}}" alt="Bg">
        </div>
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
        </div>
        <div class="container">
            <div class="section-header-two">
                <h2>What Our Clients Speak’s</h2>
                <p>Discover what our customers have think about us
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="client-review-card flex-fill">
                        <div class="client-review-content">
                            <div class="client-img">
                                <a href="javascript:void(0);" class="img-avatar"><img src="{{URL::asset('build/img/profiles/avatar-16.jpg')}}" alt="Img"></a>
                                <p>The crew went above and beyond to ensure that every detail was perfect, from the 
                                    gourmet dining experience to the
                                    sunset cruise along the coast. It was truly a dream come true, and we can't wait to do it again!
                                </p>
                                <h5><a href="javascript:void(0);">Rabien Ustoc</a></h5>
                                <span>Newyork, USA</span>
                                <div class="quataion-mark">
                                    <img src="{{URL::asset('build/img/icons/quatation-mark.svg')}}" class="img-fluid" alt="Img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="client-review-card flex-fill">
                        <div class="client-review-content">
                            <div class="client-img">
                                <a href="javascript:void(0);" class="img-avatar"><img src="{{URL::asset('build/img/profiles/avatar-17.jpg')}}" alt="Img"></a>
                                <p> 
                                    Our family vacation with Seaside Yacht Rentals was simply spectacular! Renting a yacht was a 
                                    new experience for us, 
                                    and it exceeded all our expectations. The kids had a blast exploring the coastline.
                                </p>
                                <h5><a href="javascript:void(0);">Adrian Tres</a></h5>
                                <span>Newyork, USA</span>
                                <div class="quataion-mark">
                                    <img src="{{URL::asset('build/img/icons/quatation-mark.svg')}}" class="img-fluid" alt="Img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="client-review-card flex-fill">
                        <div class="client-review-content">
                            <div class="client-img">
                                <a href="javascript:void(0);" class="img-avatar"><img src="{{URL::asset('build/img/profiles/avatar-18.jpg')}}" alt="Img"></a>
                                <p> 
                                    Our weekend yacht rental with Ocean Escape Charters was an absolute blast! We wanted to plan 
                                    a memorable getaway 
                                    with our friends, and chartering a yacht seemed like the perfect idea.
                                </p>
                                <h5><a href="javascript:void(0);">Mariana Fauzel</a></h5>
                                <span>Newyork, USA</span>
                                <div class="quataion-mark">
                                    <img src="{{URL::asset('build/img/icons/quatation-mark.svg')}}" class="img-fluid" alt="Img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="view-all text-center">
                        <a href="{{url('testimonial')}}" class="btn btn-secondary">View all Testimonails</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Client Review -->

    <!-- FAQ -->
    <section class="faq-sec-two">
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-small"></span>
            <span class="bg-dark-blue round-big"></span>
        </div>
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/anchor-img.png')}}" alt="Bg">
            <img src="{{URL::asset('build/img/bg/ship-part-bg-02.png')}}" alt="Bg">
            <img src="{{URL::asset('build/img/bg/ship-part-bg-03.png')}}" alt="Bg">
            <img src="{{URL::asset('build/img/bg/sec-bg-wave.png')}}" alt="Bg">
        </div>
        <div class="container">
            <div class="counter-group counter-group-two">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 d-flex">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/counter-icon-01.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">2547</span>+</h4>
                                    <p>Count of Yachts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/counter-icon-02.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">16</span>k</h4>
                                    <p>Happy Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/counter-icon-03.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">15000</span></h4>
                                    <p>Total Nauticles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{URL::asset('build/img/icons/counter-icon-04.svg')}}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">5000</span>+</h4>
                                    <p>Booking Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-items">
                <div class="section-header-two">
                    <h2>Frequently Asked Questions</h2>
                    <p>Feel free to customize them further to align with your specific policies</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-main-items" id="faq-details">
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <a href="javascript:void(0);" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What documents do I need to rent a Yacht?
                                    </a>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>We offer a diverse fleet of vehicles to suit every 
                                                need, including compact yachts. You can browse our selection online or contact us for 
                                                assistance in choosing the right vehicle for you
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What types of Yacht’s are available for rent?
                                    </a>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>We offer a diverse fleet of vehicles to suit every 
                                                need, including compact yachts. You can browse our selection online or contact us for 
                                                assistance in choosing the right vehicle for you
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I rent a yacht for more than one week?
                                    </a>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>We offer a diverse fleet of vehicles to suit every 
                                                need, including compact yachts. You can browse our selection online or contact us for 
                                                assistance in choosing the right vehicle for you
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How old do I need to be to rent a Yacht ?
                                    </a>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>We offer a diverse fleet of vehicles to suit every 
                                                need, including compact yachts. You can browse our selection online or contact us for 
                                                assistance in choosing the right vehicle for you
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Can I rent a Yacht with a debit card?
                                    </a>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>We offer a diverse fleet of vehicles to suit every 
                                                need, including compact yachts. You can browse our selection online or contact us for 
                                                assistance in choosing the right vehicle for you
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ -->

    <!-- Seasonal Special -->
    <section class="seasonal-special-sec">
        <div class="container">
            <div class="sec-title">
                <h2>Yacht Charter Seasonal Specials</h2>
                <p>Experience the ultimate in luxury and adventure with our yacht rental services.</p>
                <div class="sec-btns">
                    <a href="{{url('login')}}" class="btn btn-dark-blue">Get Started</a>
                    <a href="{{url('listing-details')}}" class="btn btn-primary d-flex align-items-center"><i class="bx bx-bar-chart me-2"></i>Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Seasonal Special -->

    <!-- News & Insights -->
    <section class="news-insights-sec">
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-small"></span>
            <span class="bg-dark-blue round-big"></span>
            <span class="bg-dark-blue round-big"></span>
        </div>
        <div class="sec-bg">
            <img src="{{URL::asset('build/img/bg/ship-part-bg-01.png')}}" alt="Img">
        </div>
        <div class="container">
            <div class="section-header-two">
                <h2>News & Insights For You</h2>
                <p>This blog post provides valuable insights into the benefits of yacht rentals 
                    and offers practical tips for planning the perfect charter.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="article-grid-card">
                        <div class="article-img">
                            <a href="{{url('blog-grid')}}"><img src="{{URL::asset('build/img/blog/article-01.jpg')}}" class="img-fluid" alt="Img"></a>
                            <span class="date-info"><i class="bx bx-calendar me-2"></i>Apr 21, 2024</span>
                        </div>
                        <div class="user-head">
                            <a href="javascript:void(0);" class="img-avatar"><img src="{{URL::asset('build/img/profiles/avatar-14.jpg')}}" alt="Img">By Sanax</a>
                            <div class="user-head-right">
                                <span class="me-3"><i class="bx bx-comment-detail me-2"></i>25 Comments</span>
                                <span><i class="bx bx-like me-2"></i>25 Likes</span>
                            </div>
                        </div>
                        <div class="article-title">
                            <h4><a href="{{url('blog-grid')}}">The Ultimate Guide to Yacht Rentals: Experience Luxury</a></h4>
                            <p>Are you dreaming of a vacation where luxury meets adventure? Look no further</p>
                            <a href="{{url('blog-details')}}" class="read-more">Read More <i class="bx bx-right-arrow-alt ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="article-grid-card">
                        <div class="article-img">
                            <a href="{{url('blog-grid')}}"><img src="{{URL::asset('build/img/blog/article-02.jpg')}}" class="img-fluid" alt="Img"></a>
                            <span class="date-info"><i class="bx bx-calendar me-2"></i>Apr 25, 2024</span>
                        </div>
                        <div class="user-head">
                            <a href="javascript:void(0);" class="img-avatar"><img src="{{URL::asset('build/img/profiles/avatar-15.jpg')}}" alt="Img">By Adrian</a>
                            <div class="user-head-right">
                                <span class="me-3"><i class="bx bx-comment-detail me-2"></i>25 Comments</span>
                                <span><i class="bx bx-like me-2"></i>25 Likes</span>
                            </div>
                        </div>
                        <div class="article-title">
                            <h4><a href="{{url('blog-grid')}}">Planning Your Yacht Charter this Summer </a></h4>
                            <p>Start planning your yacht charter today and experience the magic of luxury travel....</p>
                            <a href="{{url('blog-details')}}" class="read-more">Read More <i class="bx bx-right-arrow-alt ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="article-grid-card">
                        <div class="article-img">
                            <a href="{{url('blog-grid')}}"><img src="{{URL::asset('build/img/blog/article-03.jpg')}}" class="img-fluid" alt="Img"></a>
                            <span class="date-info"><i class="bx bx-calendar me-2"></i>Apr 30, 2024</span>
                        </div>
                        <div class="user-head">
                            <a href="javascript:void(0);" class="img-avatar"><img src="{{URL::asset('build/img/profiles/avatar-16.jpg')}}" alt="Img">By Hendrita</a>
                            <div class="user-head-right">
                                <span class="me-3"><i class="bx bx-comment-detail me-2"></i>25 Comments</span>
                                <span><i class="bx bx-like me-2"></i>25 Likes</span>
                            </div>
                        </div>
                        <div class="article-title">
                            <h4><a href="{{url('blog-grid')}}">Experience the Magic of Yacht Rentals in your Location</a></h4>
                            <p>Whether you're cruising the Caribbean, exploring the Mediterranean, or discovering the...</p>
                            <a href="{{url('blog-details')}}" class="read-more">Read More <i class="bx bx-right-arrow-alt ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="view-more text-center">
                        <a href="{{url('blog-grid')}}" class="btn btn-secondary">View all Articles</a>
                    </div>
                </div>
            </div>
            <div class="yacht-owner-card party-rental-yacht">
                <div class="sec-bg">
                    <img src="{{URL::asset('build/img/bg/sec-bg-wave.png')}}" alt="Img">
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="yacht-owner-title">
                            <h3>Special Offers on Party rental Yachts!!!</h3>
                            <p>View all the yachts under the Offer</p>
                            <a href="{{url('listing-details')}}" class="btn btn-primary">View Yachts</a>
                        </div>
                    </div>
                </div>
                <div class="yacht-owner-img">
                    <img src="{{URL::asset('build/img/bg/yacht-owner-bg-02.png')}}" alt="Img">
                </div>
            </div>
        </div>
    </section>
    <!-- /News & Insights -->
@endsection