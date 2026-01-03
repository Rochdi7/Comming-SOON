<?php $page = 'our-team'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Meet Our Team
        @endslot
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Meet Our Team
        @endslot
    @endcomponent
    <!-- Meet our Team -->
    <section class="our-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100">
                    <div class="our-team">
                        <div class="profile-pic">
                            <img src="{{ URL::asset('/build/img/our-team/team-01.jpg') }}" alt="Our Team">
                        </div>
                        <div class="team-prof">
                            <h3 class="team-post-title">Matt Fierce</h3>
                            <span class="team-designation">CEO</span>
                            <div class="footer-social-links m-0">
                                <ul class="nav">
                                    <li>
                                        <a href="javascript:;"><i
                                                class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                    <div class="our-team">
                        <div class="profile-pic">
                            <img src="{{ URL::asset('/build/img/our-team/team-02.jpg') }}" alt="Our Team">
                        </div>

                        <div class="team-prof">
                            <h3 class="team-post-title">May Daniel</h3>
                            <span class="team-designation">COO</span>

                            <div class="footer-social-links m-0">
                                <ul class="nav">
                                    <li>
                                        <a href="javascript:;"><i
                                                class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
                    <div class="our-team">
                        <div class="profile-pic">
                            <img src="{{ URL::asset('/build/img/our-team/team-03.jpg') }}" alt="Our Team">
                        </div>

                        <div class="team-prof">
                            <h3 class="team-post-title">Alberrt Hendrenz</h3>
                            <span class="team-designation">Business Head</span>

                            <div class="footer-social-links m-0">
                                <ul class="nav">
                                    <li>
                                        <a href="javascript:;"><i
                                                class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="400">
                    <div class="our-team">
                        <div class="profile-pic">
                            <img src="{{ URL::asset('/build/img/our-team/team-04.jpg') }}" alt="Our Team">
                        </div>

                        <div class="team-prof">
                            <h3 class="team-post-title">Roseline</h3>
                            <span class="team-designation">Business Analyst</span>

                            <div class="footer-social-links m-0">
                                <ul class="nav">
                                    <li>
                                        <a href="javascript:;"><i
                                                class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="500">
                    <div class="our-team">
                        <div class="profile-pic">
                            <img src="{{ URL::asset('/build/img/our-team/team-05.jpg') }}" alt="Our Team">
                        </div>

                        <div class="team-prof">
                            <h3 class="team-post-title">Hendriques</h3>
                            <span class="team-designation">Designer</span>

                            <div class="footer-social-links m-0">
                                <ul class="nav">
                                    <li>
                                        <a href="javascript:;"><i
                                                class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="600">
                    <div class="our-team">
                        <div class="profile-pic">
                            <img src="{{ URL::asset('/build/img/our-team/team-06.jpg') }}" alt="Our Team">
                        </div>

                        <div class="team-prof">
                            <h3 class="team-post-title">Maria</h3>
                            <span class="team-designation">Lead Developer</span>

                            <div class="footer-social-links m-0">
                                <ul class="nav">
                                    <li>
                                        <a href="javascript:;"><i
                                                class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Meet our Team -->
@endsection
