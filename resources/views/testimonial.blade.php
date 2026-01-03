<?php $page = 'testimonial'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Testimonials
        @endslot
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Testimonials
        @endslot
    @endcomponent
    <!-- Testimonials-->
    <div class="testimonials-section">
        <div class="container">
            <div class="testimonial-group">
                <div class="row">
                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex " data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Rabien Ustoc</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                            </div>
                                            <p><span>(4.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Valerie L. Ellis</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-04.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Laverne Marier</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="400">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Courtland Artois</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                            </div>
                                            <p><span>(4.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="500">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Sydney Salmons</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                            </div>
                                            <p><span>(4.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200"
                        data-aos-delay="600">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-07.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Lucas Moquin</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200"
                        data-aos-delay="700">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-08.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Philippe Tachel</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-regular fa-star rating-overall"></i>
                                            </div>
                                            <p><span>(4.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->

                    <!-- Col -->
                    <div class="col-lg-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200"
                        data-aos-delay="800">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="{{ URL::asset('/build/img/profiles/avatar-09.jpg') }}"
                                                class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Dixie Bazin</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="900">
                    <div class="pagination d-flex align-items-center justify-content-center">
                        <nav>
                            <ul class="pagination">
                                <li class="previtem">
                                    <a class="page-link" href="javascript:;"><i
                                            class="fas fa-regular fa-arrow-left me-2"></i>
                                        Prev</a>
                                </li>
                                <li class="justify-content-center pagination-center">
                                    <div class="page-group">
                                        <ul>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="active page-link" href="javascript:;">2 <span
                                                        class="visually-hidden">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:;">5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nextlink">
                                    <a class="page-link" href="javascript:;">Next <i
                                            class="fas fa-regular fa-arrow-right ms-2"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /Pagination -->
        </div>
    </div>
    <!-- /Testimonials-->
@endsection
