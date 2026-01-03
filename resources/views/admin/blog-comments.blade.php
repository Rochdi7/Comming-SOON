<?php $page = 'blog-comments'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Blog Comments</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Comments</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Table Header -->
            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap row-gap-3">
                <div class="dropdown me-2">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        <i class="ti ti-filter me-1"></i> Sort By : Latest
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end p-2">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Latest</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                        </li>
                    </ul>
                </div>                    
                <div class="dropdown">
                    <a href="#filtercollapse" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse">
                        <i class="ti ti-filter me-1"></i> Filter <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
                    </a>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                <div class="top-search me-2">
                    <div class="top-search-group">
                        <span class="input-icon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>                        
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        <i class="ti ti-layout-board me-1"></i> Columns
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg p-2">
                        <ul>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>REVIEW</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>CREATED DATE </span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>BLOG</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>CUSTOMER</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>STATUS</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /Table Header -->

        <div class="collapse" id="filtercollapse">
            <div class="filterbox mb-3 d-flex align-items-center">
                <h6 class="me-3">Filters</h6>
                <div class="dropdown me-2">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        Rating
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg p-2">
                        <li>
                            <div class="top-search m-2">
                                <div class="top-search-group">
                                    <span class="input-icon">
                                        <i class="ti ti-search"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">5 Star
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">4 Star
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">3 Star
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">2 Star
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">1 Star
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="dropdown me-2">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        Status
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg p-2">
                        
                        <li class="dropdown-item d-flex align-items-center rounded-1">
                            Published
                        </li>
                        <li class="dropdown-item d-flex align-items-center rounded-1">
                            Unpublish
                        </li>
                        
                    </ul>
                </div>
                <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                <a href="javascript:void(0);" class="text-danger links">Clear All</a>
            </div>
        </div>

            <!-- Custom Data Table -->
            <div class="custom-datatable-filter table-responsive">
                <table class="table datatable custom-blog-table">
                    <thead class="thead-light">
                        <tr>
                            <th>REVIEW</th>
                            <th>CREATED DATE </th>
                            <th>RATING</th>
                            <th>BLOG</th>
                            <th>CUSTOMER</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate">Loved this list! I took the Pacific Coast Highway trip last summer, and it was breathtaking. Highly recommend renting a convertible!</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">24 Jan 2025</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span>(5.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate">Top 10 Car Rental Tips for a Hassle-Free Journey</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-20.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Andrew Simons </a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate">Great article! Do you have any tips on the best time of year to drive the Ring Road in Iceland?</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">19 Dec 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span>(4.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate">How to Save Money on Your Next Car Rental</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-21.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">David Steiger</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Unpublish
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate">The Scottish Highlands road trip is on my bucket list! Any recommendations for good rental car options for those narrow roads?</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">11 Dec 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span>(5.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate">Car Rental vs. Ride-Sharing: Which One is Right for You?</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-22.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Walter Hartmann</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate">I did the Great Ocean Road drive last year, and it was stunning! The views, the beaches, and the wildlife—unforgettable!</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">29 Nov 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span>(3.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate">The Best Road Trip Routes to Take in a Rental Car</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Dennis Eckhardt</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate">Iceland’s Ring Road sounds amazing! Is a 4x4 necessary, or can I manage with a regular rental car?</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">03 Nov 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span>(4.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate">Step-by-Step Guide to Booking a Rental Car Online</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-24.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Virginia Phu</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate">Just booked my rental car for a road trip next month! Can’t wait to explore new places. Thanks for the inspiration!</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">31 Oct 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span>(5.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate">What You Need to Know About Rental Car Insurance</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-25.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Lan Adams</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Unpublish
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate">Fantastic suggestions! I’d love to see a follow-up post on hidden road trip gems that aren’t as well known.</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">15 Oct 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span>(3.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate">Returning a Rental Car: Common Mistakes to Avoid</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-10.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Ann Crump</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Unpublish
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate ">Are there any scenic road trips in Europe you’d recommend that aren’t as crowded with tourists?</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">26 Sep 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span>(5.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate ">How to Find the Best Car Rental Deals & Discounts</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-26.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Andrea Jermaine</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate ">I’ve always wanted to do a cross-country road trip in the U.S.! Any tips on choosing the best rental car for long-distance travel?</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">01 Sep 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span>(4.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate ">Luxury Car Rentals: Are They Worth the Price?</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-23.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Julie Black</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <p class="text-gray-9 text-truncate ">This article makes me want to pack my bags and go! Road trips are the best way to travel. Thanks for the great ideas!</p>
                                
                            </td>
                            <td>
                                <p class="text-gray-9">15 Aug 2024</p>
                                
                            </td>
                            <td>
                                <div>
                                    <ul class="d-flex align-items-center gap-1">
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-warning"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span></li>
                                        <li><span><i class="ti ti-star-filled text-gray-2"></i></span>(3.0)</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <p class="text-gray-9 text-truncate ">Short-Term vs. Long-Term Car Rentals: Which Saves More?</p>
                            </td>
                            <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-16.jpg')}}" alt="image"></a>
                                <div>
                                    <h6 class="fw-semibold"><a href="javascript:void(0);">Jean Walker</a></h6>
                                </div>
                            </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            
                        </tr>                                                         
                                                                    
                    </tbody>
                </table>
            </div>
                        
        </div>			
        <!-- Footer-->
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="javascript:void(0);">Privacy Policy</a>
                <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
            </p>
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);" class="text-secondary">Dreams</a></p>
        </div>
        <!-- /Footer-->
    </div>
    <!-- /Page Wrapper -->
@endsection