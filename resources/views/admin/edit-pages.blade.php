<?php $page = 'edit-pages'; ?>
@extends('layout.mainlayout_admin')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content me-4">
        <div class="mb-4">
            <a href="{{url('admin/pages')}}" class="d-flex align-items-center"><span class="me-1"><i class="ti ti-arrow-narrow-left"></i></span>Pages</a>
        </div>	
        <div class="add_page">
            <div class="card mb-0">
                <div class="card-header">
                    <h5>Edit Page</h5>
                </div>
                <form action="{{url('admin/pages')}}">
                    <div class="card-body pb-1">
                        <div class="border-bottom mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="Book Your Car Online">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug  <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control text-info" value="/book-your-car-online">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Keywords</label>
                                        <input class="input-tags form-control" type="text" data-role="tagsinput"
                                            name="Label" value="Book Car, Online">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <div class="editor">Book your car rental online with ease. Choose from a wide variety of cars, from budget to luxury, all at affordable prices.</div>
                                        <p class="mt-2 fs-14">Maximum 60 Words</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <h6>SEO Settings</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="Best Car Rental Deals & Discounts – XYZ Rentals">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="car rental deals, cheap car rentals, best car rental discounts">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Permalink <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control text-info" value="https://www.dreamsrentals.com/best-deals">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea rows="4" class="form-control" >Find the best car rental deals, discounts, and offers. Compare prices & save on your next rental.</textarea>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2"> Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
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