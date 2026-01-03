<?php $page = 'blog-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
    @endcomponent

    <!-- Blog Grid-->
    <div class="blog-section">
        <div class="container">
            <div class="blog-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec nisi aliquam, vitae
                    finibus purus sodales. Mauris at turpis nulla. Curabitur nec tellus est. Class aptent taciti sociosqu ad
                    litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pharetra arcu ac arcu varius, non
                    congue neque aliquet. Pellentesque at feugiat purus. Aenean faucibus vehicula eros.</p>
                <p>varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla fermentum
                    malesuada pulvinar. Vestibulum laoreet rutrum semper. Vivamus malesuada, nisl in consectetur semper,
                    mauris nulla aliquam risus, nec ultricies sapien elit sed ante. Aenean luctus felis in sem consequat
                    auctor. Nulla turpis enim, scelerisque sit amet consectetur vel, lacinia sed augue. Proin ultricies dui
                    id ex fringilla porta. Morbi nisi justo, venenatis ac nibh at, bibendum mattis risus. Maecenas
                    tincidunt, ligula sed congue tempus, magna augue cursus ipsum, in malesuada justo risus nec lorem. Nam
                    augue augue, mollis nec condimentum euismod, lacinia ultricies leo.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="{{ URL::asset('/build/img/blogquote.svg') }}" alt="quotes">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula sapien nec nisi aliquam, vitae
                    finibus purus sodales. Mauris at turpis nulla. Curabitur nec tellus est. Class aptent taciti sociosqu ad
                    litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pharetra arcu ac arcu varius, non
                    congue neque aliquet. Pellentesque at feugiat purus. Aenean faucibus vehicula eros.</p>
                <h6>Luis Pickford</h6>
            </blockquote>
            <div class="blog-description">
                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla fermentum
                    malesuada pulvinar. Vestibulum laoreet rutrum semper. Vivamus malesuada, nisl in consectetur semper,
                    mauris nulla aliquam risus, nec ultricies sapien elit sed ante. Aenean luctus felis in sem consequat
                    auctor. Nulla turpis enim, scelerisque sit amet consectetur vel, lacinia sed augue. Proin ultricies dui
                    id ex fringilla porta. Morbi nisi justo, venenatis ac nibh at, bibendum mattis risus. Maecenas
                    tincidunt, ligula sed congue tempus, magna augue cursus ipsum, in malesuada justo risus nec lorem. Nam
                    augue augue, mollis nec condimentum euismod, lacinia ultricies leo.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ URL::asset('/build/img/blog/blog-detail-01.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ URL::asset('/build/img/blog/blog-detail-02.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="share-postsection">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sharelink d-flex align-items-center">
                            <a href="javasvript:void();" class="share-img"><i class="feather-share-2"></i></a>
                            <a href="javasvript:void();" class="share-text">Share</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tag-list">
                            <ul class="tags">
                                <li>Rims </li>
                                <li>Speed </li>
                                <li>Make </li>
                                <li>Transmission </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogdetails-pagination">
                <ul>
                    <li>
                        <a href="{{ url('blog-details') }}" class="prev-link"><i class="fas fa-regular fa-arrow-left"></i>
                            Previous Post</a>
                        <a href="{{ url('blog-details') }}">
                            <h3>The Best SPA Salons For Your Relaxation</h3>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('blog-details') }}" class="next-link">Next Post <i
                                class="fas fa-regular fa-arrow-right"></i> </a>
                        <a href="{{ url('blog-details') }}">
                            <h3>8 Amazing Tricks About Business</h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="review-sec mb-0">
                <div class="review-header">
                    <h4>Reviews<span>(2)</span></h4>
                    <div class="reviewbox-list-rating">
                        <p>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <span> (5 out of 5)</span>
                        </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}" class="img-fluid"
                                    alt="">
                            </span>
                            <div class="review-design">
                                <h6>Johnson</h6>
                                <p>02 Jun 2023</p>
                            </div>
                        </div>
                        <div class="reviewbox-list-rating">
                            <p>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fa-regular fa-star rating-overall"></i>
                                <span> (4 out of 5)</span>
                            </p>
                        </div>
                    </div>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.It was popularised in the 1960s </p>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}" class="img-fluid"
                                    alt="">
                            </span>
                            <div class="review-design">
                                <h6>Casandra</h6>
                                <p>02 Jun 2023</p>
                            </div>
                        </div>
                        <div class="reviewbox-list-rating">
                            <p>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span> (5 out of 5)</span>
                            </p>
                        </div>
                    </div>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.It was popularised in the 1960s </p>
                </div>
            </div>

            <div class="review-sec mb-0">
                <div class="review-header">
                    <h4>Leave a Reply</h4>
                </div>
                <div class="card-body">
                    <div class="review-list">
                        <ul>
                            <li class="review-box feedbackbox mb-0">
                                <div class="review-details">
                                    <form action="blog-details">
                                        <div class="row">
                                            <div class="col-lg-6">												
                                                <div class="input-block">														
                                                    <label>Full Name <span class="text-danger">*</span></label>	
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">													
                                                <div class="input-block">
                                                    <label>Email Address <span class="text-danger">*</span></label>	
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-block">
                                                    <label>Comments </label>	
                                                    <textarea rows="4" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-review" type="submit"> Submit Review</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Blog Grid-->
@endsection
