<?php $page = 'edit-blog'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0 me-md-0 me-lg-4">
            
            <!-- Add Blogs -->
            <div class="add-blog-content">
                <div class="mb-4">
                    <a href="{{url('admin/blogs')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-narrow-left me-1"></i>Blogs</a>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Edit Blog</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Featured Image <span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">                                                
                                        <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames p-2">
                                            <img src="{{URL::asset('admin_assets/img/blog/blog-6.jpg')}}" class="rounded-2 img-fluid" alt="brands">
                                            <a href="javascript:void(0);" class="upload-img-trash btn btn-sm btn-danger-light rounded-circle">
                                                <i class="ti ti-trash fs-12"></i>
                                            </a>
                                        </div>                                              
                                        <div class="profile-upload">
                                            <div class="profile-uploader d-flex align-items-center">
                                                <div class="drag-upload-btn btn btn-md btn-dark">
                                                    <i class="ti ti-photo-up fs-14"></i>
                                                    Upload
                                                    <input type="file" class="form-control image-sign" multiple="">
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <p class="fs-14">Upload Image size 180*180, within 5MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="How to Find the Best Car Rental Deals & Discounts">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Discounts</option>
                                        <option>Car Reviews</option>
                                        <option>Rental Policies</option>
                                        <option>Insurance & Coverage</option>
                                        <option>Budget Rentals</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Tags</label>
                                    <input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput" name="specialist" value="Book Car, Online">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-0">
                                    <label class="form-label">Description</label>
                                    <div class="editor">
                                        Discover expert tips on finding the best car rental deals and discounts. Learn how to use promo codes, book early, compare prices, and take advantage of loyalty programs for maximum savings.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center w-100 flex-wrap gap-2">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label form-label mt-0 mb-0">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                    Status
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                                <a href="{{url('admin/blogs')}}" class="btn btn-primary">Save Changes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Blogs -->
                
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