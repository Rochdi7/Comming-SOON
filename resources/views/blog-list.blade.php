<?php $page = 'blog-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blog List
        @endslot
        @slot('li_1')
            Blogs
        @endslot
        @slot('li_2')
            Blog List
        @endslot
    @endcomponent
    <!-- Blog List-->
    <div class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 d-lg-flex">
                            <div class="blog grid-blog">
                                <div class="blog-image-list">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/blog-list-01.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-list-date">
                                        <ul class="meta-item-list">
                                            <li>
                                                <div class="post-author">
                                                    <div class="post-author-img">
                                                        <img src="{{ URL::asset('/build/img/profiles/avatar-13.jpg') }}"
                                                            alt="author">
                                                    </div>
                                                    <a href="javascript:void(0)"> <span> Alphonsa Daniel </span></a>
                                                </div>
                                            </li>
                                            <li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>Jun
                                                    6, 2023</span></li>
                                        </ul>
                                        <p class="blog-category mb-0">
                                            <a href="javascript:void(0)"><span>Dealers</span></a>
                                            <a href="javascript:void(0)"><span>Car Showcase</span></a>
                                        </p>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Tesla Model S: Top Secret Car
                                            Collector’s Garage</a></h3>
                                    <p class="blog-description">Everyone has the right to freedom of thought, conscience and
                                        religion; this right includes freedom to change his religion or belief, and freedom,
                                        either alone...</p>
                                    <a href="{{ url('blog-details') }}"
                                        class="viewlink btn btn-primary justify-content-center">Read More <i
                                            class="feather-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 d-lg-flex">
                            <div class="blog grid-blog">
                                <div class="blog-image-list">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/blog-list-02.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-list-date">
                                        <ul class="meta-item-list">
                                            <li>
                                                <div class="post-author">
                                                    <div class="post-author-img">
                                                        <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                            alt="author">
                                                    </div>
                                                    <a href="javascript:void(0)"> <span> Helan </span></a>
                                                </div>
                                            </li>
                                            <li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>May
                                                    15, 2023</span></li>
                                        </ul>
                                        <p class="blog-category mb-0">
                                            <a href="javascript:void(0)"><span>Dealers</span></a>
                                            <a href="javascript:void(0)"><span>Car Showcase</span></a>
                                        </p>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Tesla Model S: Top Secret Car
                                            Collector’s Garage</a></h3>
                                    <p class="blog-description">Everyone has the right to freedom of thought, conscience and
                                        religion; this right includes freedom to change his religion or belief, and freedom,
                                        either alone...</p>
                                    <a href="{{ url('blog-details') }}"
                                        class="viewlink btn btn-primary justify-content-center">Read More <i
                                            class="feather-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 d-lg-flex">
                            <div class="blog grid-blog">
                                <div class="blog-image-list">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/blog-list-03.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-list-date">
                                        <ul class="meta-item-list">
                                            <li>
                                                <div class="post-author">
                                                    <div class="post-author-img">
                                                        <img src="{{ URL::asset('/build/img/profiles/avatar-05.jpg') }}"
                                                            alt="author">
                                                    </div>
                                                    <a href="javascript:void(0)"> <span> Rabien Ustoc </span></a>
                                                </div>
                                            </li>
                                            <li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>Apr
                                                    17, 2023</span></li>
                                        </ul>
                                        <p class="blog-category mb-0">
                                            <a href="javascript:void(0)"><span>Dealers</span></a>
                                            <a href="javascript:void(0)"><span>Car Showcase</span></a>
                                        </p>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Tesla Model S: Top Secret
                                            Car Collector’s Garage</a></h3>
                                    <p class="blog-description">Everyone has the right to freedom of thought, conscience and
                                        religion; this right includes freedom to change his religion or belief, and freedom,
                                        either alone...</p>
                                    <a href="{{ url('blog-details') }}"
                                        class="viewlink btn btn-primary justify-content-center">Read More <i
                                            class="feather-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 d-lg-flex">
                            <div class="blog grid-blog">
                                <div class="blog-image-list">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/build/img/blog/blog-list-04.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-list-date">
                                        <ul class="meta-item-list">
                                            <li>
                                                <div class="post-author">
                                                    <div class="post-author-img">
                                                        <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}"
                                                            alt="author">
                                                    </div>
                                                    <a href="javascript:void(0)"> <span> Valerie L. Ellis </span></a>
                                                </div>
                                            </li>
                                            <li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>Mar
                                                    10, 2023</span></li>
                                        </ul>
                                        <p class="blog-category mb-0">
                                            <a href="javascript:void(0)"><span>Dealers</span></a>
                                            <a href="javascript:void(0)"><span>Car Showcase</span></a>
                                        </p>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Tesla Model S: Top Secret
                                            Car Collector’s Garage</a></h3>
                                    <p class="blog-description">Everyone has the right to freedom of thought, conscience
                                        and religion; this right includes freedom to change his religion or belief, and
                                        freedom, either alone...</p>
                                    <a href="{{ url('blog-details') }}"
                                        class="viewlink btn btn-primary justify-content-center">Read More <i
                                            class="feather-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @component('components.pagination')
                    @endcomponent

                </div>
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="rightsidebar">
                        <div class="card">
                            <h4><img src="{{ URL::asset('/build/img/icons/details-icon.svg') }}" alt="details-icon">
                                Filter</h4>
                            <div class="filter-content looking-input input-block mb-0">
                                <input type="text" class="form-control" placeholder="To Search type and hit enter">
                            </div>
                        </div>
                        <div class="card">
                            <h4><img src="{{ URL::asset('/build/img/icons/category-icon.svg') }}" alt="details-icon">
                                Categories</h4>
                            <ul class="blogcategories-list">
                                <li><a href="javascript:void(0)">Accept Credit Cards</a></li>
                                <li><a href="javascript:void(0)">Smoking Allowed</a></li>
                                <li><a href="javascript:void(0)">Bike Parking</a></li>
                                <li><a href="javascript:void(0)">Street Parking</a></li>
                                <li><a href="javascript:void(0)">Wireless Internet</a></li>
                                <li><a href="javascript:void(0)">Pet Friendly</a></li>
                            </ul>
                        </div>
                        <div class="card tags-widget">
                            <h4><i class="feather-tag"></i> Tags</h4>
                            <ul class="tags">
                                <li>Air </li>
                                <li>Engine </li>
                                <li>Item </li>
                                <li>On Road </li>
                                <li>Rims </li>
                                <li>Speed </li>
                                <li>Make </li>
                                <li>Transmission </li>
                            </ul>
                        </div>
                        <div class="card">
                            <h4><i class="feather-tag"></i>Top Article</h4>
                            <div class="article">
                                <div class="article-blog">
                                    <a href="{{ url('blog-details') }}">
                                        <img class="img-fluid" src="{{ URL::asset('/build/img/blog/blog-3.jpg') }}"
                                            alt="Blog">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h5><a href="{{ url('blog-details') }}">Great Business Tips in 2023</a></h5>
                                    <div class="article-date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>Jun 6, 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="article">
                                <div class="article-blog">
                                    <a href="{{ url('blog-details') }}">
                                        <img class="img-fluid" src="{{ URL::asset('/build/img/blog/blog-4.jpg') }}"
                                            alt="Blog">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h5><a href="{{ url('blog-details') }}">Excited News About Cars.</a></h5>
                                    <div class="article-date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>May 5, 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="article">
                                <div class="article-blog">
                                    <a href="{{ url('blog-details') }}">
                                        <img class="img-fluid" src="{{ URL::asset('/build/img/blog/blog-5.jpg') }}"
                                            alt="Blog">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h5><a href="{{ url('blog-details') }}">8 Amazing Tricks About Business</a></h5>
                                    <div class="article-date">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>April 10, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Blog Grid-->
@endsection
