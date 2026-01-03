<?php $page = 'blogs'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0 me-md-0 me-lg-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Blogs</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="p-1 border rounded bg-white me-3 mb-2">
                        <a href="javascript:void(0);" class="p-1 rounded d-inline-flex align-items-center justify-content-center me-1"><i class="ti ti-list-tree"></i></a>
                        <a href="javascript:void(0);" class="p-1 rounded text-white bg-primary d-inline-flex align-items-center justify-content-center"><i class="ti ti-layout-grid fs-14"></i></a>
                    </div>
                    <div class="mb-2">
                        <a href="{{url('admin/add-blog')}}" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add Blogs</a>
                    </div>
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
                </div>
            </div>
            <!-- /Table Header -->

            <div class="collapse" id="filtercollapse">
                <div class="filterbox mb-3 d-flex align-items-center">
                    <h6 class="me-3">Filters</h6>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Category
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
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Travel Tips
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Car Reviews
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Rental Policies
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Insurance & Coverage
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Budget Rentals
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Luxury Car Rentals
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Road Trip Guides
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    Eco-Friendly Rentals
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Seasonal Deals
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    Customer Stories
                                </label>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                    <a href="javascript:void(0);" class="text-danger links">Clear All</a>
                </div>
            </div>

            <!-- Blogs -->
            <div class="row blogs-cover">
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-1.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Sustainability
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">Bryan Bradfield</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">Why Electric Cars Are the Future of Car Rentals</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-2.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Money-Saving
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">James Carter</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">How to Save Money on Your Next Car Rental</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-3.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Ride-Sharing Insights
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">Ethan Reynolds</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">Car Rental vs. Ride-Sharing: Which One is Right for You?</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-4.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Travel Inspiration
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-04.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">Liam Bennett</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">The Best Road Trip Routes to Take in a Rental Car</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-5.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Booking Tips
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-05.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">Daniel Foster</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">Step-by-Step Guide to Booking a Rental Car Online</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-6.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Insurance & Protection
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-06.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">Noah Harrison</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">What You Need to Know About Rental Car Insurance</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-7.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Customer Experience
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-07.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">David Rodriguez</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">Returning a Rental Car: Common Mistakes to Avoid</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-8.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        Product Design
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-08.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">Lily Johnson</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">10 Tips for Creating Engaging User Interfaces</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item-1">
                        <div class="card-body p-0">
                            <div class="blog-img">
                                <a href="{{url('admin/blog-details')}}"><img src="{{URL::asset('admin_assets/img/blog/blog-9.jpg')}}" alt="img"></a>
                                <div class="edit-delete-btns d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('admin/edit-blog')}}" class="blog-edit me-2"><i class="ti ti-edit"></i></a>
                                        <a href="javascript:void(0);" class="blog-delete" data-bs-toggle="modal" data-bs-target="#delete_blogs"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <span class="badge badge-info badge-md">
                                        User Research
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"><img src="{{URL::asset('admin_assets/img/customer/customer-09.jpg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1"></a>
                                        <a href="javascript:void(0);" class="fs-16">David Rodriguez</a>
                                    </div>
                                    <span class="d-flex align-items-center fs-16">
                                        <i class="ti ti-calendar me-1"></i>
                                        14 Mar 2025
                                    </span>
                                </div>
                                <h5><a href="{{url('admin/blog-details')}}">Understanding Customer Behavior in E-commerce</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex align-items-center justify-content-center">
                    <a href="javascript:void(0);" class="load-btn"><i class="ti ti-loader me-1"></i> Load More</a>
                </div>
            </div>
            <!-- Blogs -->		
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