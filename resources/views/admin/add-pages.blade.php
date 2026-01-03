<?php $page = 'add-pages'; ?>
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
                        <h5>Add Page</h5>
                    </div>
                    <form action="{{url('admin/pages')}}">
                        <div class="card-body pb-1">
                            <div class="border-bottom mb-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Slug  <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
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
                                            <div class="editor"></div>
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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Meta Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Meta Description</label>
                                            <textarea rows="4" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Canonical URL <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">OG Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">OG Description</label>
                                            <textarea rows="4" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div>
                                            <label class="form-label mb-2">OG Image <span class="text-danger">*</span></label>
                                            <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                                    <i class="ti ti-photo-up fs-14"></i>
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
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="javascript:void(0);" class="btn btn-light me-2"> Cancel</a>
                                <button type="submit" class="btn btn-primary">Create New</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>			
        <!-- Footer-->
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="#">Privacy Policy</a>
                <a href="#" class="ms-4">Terms of Use</a>
            </p>
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="#" class="text-secondary">Dreams</a></p>
        </div>
        <!-- /Footer-->
    </div>
    <!-- /Page Wrapper -->
@endsection