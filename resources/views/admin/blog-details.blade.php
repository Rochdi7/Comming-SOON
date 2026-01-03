<?php $page = 'blog-details'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0 me-md-0 me-lg-4">
            
            <!-- Blogs Details -->
                <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="blog-details">
                        <div>
                            <a href="{{url('admin/blogs')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-narrow-left me-1"></i>Back to Blogs</a>
                        </div>
                        <h3>What You Need to Know About Rental Car Insurance</h3>
                        <div class="blog-details-1">
                            <img src="{{URL::asset('admin_assets/img/blog/blog-details-1.jpg')}}" alt="img" class="w-100 rounded-3">
                        </div>
                        <p>Renting a car can be a convenient way to travel, but understanding rental car insurance is essential to avoid unexpected costs and risks. Many renters are unsure if they need extra insurance or if they are already covered by their personal auto policy or credit card. In this guide, we’ll break down the different types of rental car insurance, when you need it, and how to save money.</p>
                        <p>When deciding whether to purchase rental car insurance, it’s also important to consider the specific terms and exclusions of each coverage type. For example, a Collision Damage Waiver (CDW) often excludes certain damages, such as those caused by reckless driving, off-road use, or driving under the influence. Liability coverage limits may also vary by location, and in some countries, it is mandatory to purchase additional liability insurance even if you have personal auto coverage. </p>
    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <img src="{{URL::asset('admin_assets/img/blog/blog-details-2.jpg')}}" class="rounded-3" alt="img">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <img src="{{URL::asset('admin_assets/img/blog/blog-details-3.jpg')}}" class="rounded-3" alt="img">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <img src="{{URL::asset('admin_assets/img/blog/blog-details-4.jpg')}}" class="rounded-3" alt="img">
                                </div>
                            </div>
                        </div>
                        <p>When deciding whether to purchase rental car insurance, it’s also important to consider the specific terms and exclusions of each coverage type. For example, a Collision Damage Waiver (CDW) often excludes certain damages, such as those caused by reckless driving, off-road use, or driving under the influence. Liability coverage limits may also vary by location, and in some countries, it is mandatory to purchase additional liability insurance even if you have personal auto coverage. </p>
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <h6 class="me-2">Tags: </h6>
                            <span class="badge badge-blog-details badge-md me-2">Road Trip Essentials</span>
                            <span class="badge badge-blog-details badge-md me-2">Affordable Rides</span>
                            <span class="badge badge-blog-details badge-md">Exotic Cars</span>
                        </div>
                        <h5>Tips for Saving Money on Rental Car Insurance</h5>
                        <p class="mb-3">Review your existing coverage, use credit cards, compare third-party options, avoid unnecessary add-ons, and book in advance for savings.</p>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-point-filled text-secondary me-2"></i><span class="fw-medium">Check Existing Coverage:</span> Review personal auto or travel insurance to avoid extra costs.</p>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-point-filled text-secondary me-2"></i><span class="fw-medium">Use a Credit Card with Coverage:</span> Many credit cards offer rental insurance, saving on added fees.</p>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-point-filled text-secondary me-2"></i><span class="fw-medium">Compare Third-Party Insurance:</span> Third-party providers often offer better rates than rental companies.</p>
                        <p class="d-flex align-items-center mb-3"><i class="ti ti-point-filled text-secondary me-2"></i><span class="fw-medium">Book with Companies Offering Insurance:</span> Rent from companies that include basic coverage in their rates.</p>
                        <p class="d-flex align-items-center"><i class="ti ti-point-filled text-secondary me-2"></i><span class="fw-medium">Choose a Standard Car:</span> Economy Cars typically have lower insurance costs than luxury models.</p>
                    </div>
                </div>
                </div>
            <!-- Blogs Details -->
                
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