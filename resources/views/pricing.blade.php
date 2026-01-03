<?php $page = 'pricing'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Pricing Plan
        @endslot
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Pricing Plan
        @endslot
    @endcomponent

    <!-- Pricing Plan -->
    <section class="section pricing-section pricing-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                    <div class="price-card">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Essential</h6>
                                <p>For The Basics</p>
                            </div>
                            <h4>$49</h4>
                            <span>Per user per month</span>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting
                                    message</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month,
                                    extend anytime</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car
                                    prices include tax</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Extend or
                                    return anytime</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Doorstep
                                    delivery in 2days</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Car system
                                    included free of charge.</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Min 1
                                    month, extend anytime</li>
                            </ul>
                            <div>
                                <a href="{{ url('login') }}" class="btn viewdetails-btn">Request a demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
                    <div class="price-card price-card-popular">
                        <div class="price-head">
                            <div class="price-level price-level-popular">
                                <h6>Recommended</h6>
                                <p>For The Users</p>
                            </div>
                            <h4>$95</h4>
                            <span>Per user per month</span>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting
                                    message</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month,
                                    extend anytime</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car
                                    prices include tax</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Extend or
                                    return anytime</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Doorstep
                                    delivery in 2days</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Car system
                                    included free of charge.</li>
                                <li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Min 1
                                    month, extend anytime</li>
                            </ul>
                            <div>
                                <a href="{{ url('login') }}" class="btn viewdetails-btn-popular">Request a demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="400">
                    <div class="price-card">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Pro</h6>
                                <p>For The Pro</p>
                            </div>
                            <h4>$154</h4>
                            <span>Per user per month</span>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting
                                    message</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month,
                                    extend anytime</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car
                                    prices include tax</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Extend or
                                    return anytime</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Doorstep
                                    delivery in 2days</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Car system
                                    included free of charge.</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month,
                                    extend anytime</li>
                            </ul>
                            <div>
                                <a href="{{ url('login') }}" class="btn viewdetails-btn">Request a demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Pricing Plan -->

@endsection
