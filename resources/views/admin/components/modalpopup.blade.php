@if (Route::is(['brands']))
    <!-- Add Brand -->
    <div class="modal fade" id="add_brand">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Brand</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Brand Image <span class="text-danger">*</span></label>							

                        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                    <div class="mb-3">
                        <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Brand -->

    <!-- Edit Brand -->
    <div class="modal fade" id="edit_brand">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Brand</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Brand Image <span class="text-danger">*</span></label>							

                        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <img src="{{URL::asset('admin_assets/img/brands/toyota.svg')}}" class="upload-img img-fluid" alt="brands">
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
                    <div class="mb-3">
                        <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Toyota">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Brand -->
    
    <!-- Delete Brand -->
    <div class="modal fade" id="delete_brand">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Brand</h4>
                    <p class="mb-3">Are you sure you want to delete brand?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Brand -->
@endif

@if (Route::is(['add-car']))

    <!-- Add New Tarrif -->
    <div class="modal fade" id="add-tarrif">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Add New Tarrif</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Tariff Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Daily Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">From Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">To Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Base Kilometers (Per Day) <span class="text-danger">*</span></label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox"  id="unlimited1">
                                            <label class="form-check-label" for="unlimited1">
                                                Unlimited
                                            </label>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Kilometers Extra Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create Tarrif</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Tarrif -->

    <!-- Edit Tarrif -->
    <div class="modal fade" id="edit-tarrif">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Tarrif</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Tariff Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="4 to 5 days">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Daily Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="50">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">From Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">To Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="5">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Base Kilometers (Per Day) <span class="text-danger">*</span></label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox"  id="unlimited2">
                                            <label class="form-check-label" for="unlimited2">
                                                Unlimited
                                            </label>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" value="100">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Kilometers Extra Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Tarrif -->

    <!-- Delete Tarrif -->
    <div class="modal fade" id="delete_tarrif">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Tarrif</h4>
                    <p class="mb-3">Are you sure you want to delete Tarrif?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/add-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Damage -->

    <!-- Add Brand -->
    <div class="modal fade" id="add_brand">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Brand</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Brand Image <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                    <div class="mb-3">
                        <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total Cars <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Brand -->

    <!-- Add Type -->
    <div class="modal fade" id="add_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Type</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Image <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Type -->

    <!-- Add Model -->
    <div class="modal fade" id="add_model">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Model</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Model <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">							
                    </div>                  
                    <div class="mb-3">
                        <label class="form-label">Brand <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option>Toyota</option>
                            <option>Audi</option>
                            <option>Lamborghini</option>
                        </select>
                    </div>                  
                    <div class="mb-3">
                        <label class="form-label">Total Cars <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Model -->

    <!-- Create Seasonal Pricing -->
    <div class="modal fade" id="add_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control">
                                </div>   
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create Seasonal Pricing -->

    <!-- Select Seasonal Pricing -->
    <div class="modal fade" id="select_price">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Halloween<span class="badge bg-secondary-transparent ms-2">01 Oct 2025 - 31 Oct 2025 </span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$200</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1400</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$4800</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$200</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Easter<span class="badge bg-secondary-transparent ms-2">01 Apr 2025 - 30 Apr 2025 </span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$220</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1540</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$6600</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$250</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">New Year<span class="badge bg-secondary-transparent ms-2">01 Jan 2025 - 15 Jan 2025</span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$240</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1680</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$6720</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$150</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Christmas<span class="badge bg-secondary-transparent ms-2">01 Dec 2024 - 31 Dec 2025</span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$250</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1750</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$7000</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$300</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Select Seasonal Pricing -->

    <!-- Select Seasonal Pricing -->
    <div class="modal fade" id="select_insurance">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Insurance</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Full Premium Insurance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$200</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">4</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div> 
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Roadside Assistance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$250</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">6</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Liability Insurance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$150</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">4</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Personal Accident Insurance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$300</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">5</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Select Seasonal Pricing -->

    <!-- Edit Insurance -->
    <div class="modal fade" id="edit_insurance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Insurance</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Insurane Name <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="Full Premium Insurance">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price Type <span class="text-danger"> *</span></label>
                            <div class="d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm" checked>
                                    <label class="form-check-label" for="Radio-sm">
                                        Daily
                                    </label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm2">
                                    <label class="form-check-label" for="Radio-sm2">
                                        Fixed
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm3">
                                    <label class="form-check-label" for="Radio-sm3">
                                        Percentage
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="$200">
                        </div>
                        <div class="add-insurance-benifit-2">
                            <div class="mb-1">
                                <label class="form-label">Benefit <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" value="No additional charges for emergency roadside services.">
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="d-inline-flex align-items-center text-info add-new-benifit-2"><i class="ti ti-plus me-1"></i>Add New</a>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>		
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit  Insurance -->

    <!-- Edit Seasonal Pricing -->
    <div class="modal fade" id="edit_seasonal_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control" value="Halloween">
                                </div>   
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="28-01-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-02-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="50">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="100">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="150">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="200">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Seasonal Pricing -->

    <!-- Delete Pricing -->
    <div class="modal fade" id="delete_price">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Pricing</h4>
                    <p class="mb-3">Are you sure you want to delete Pricing?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/add-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Pricing -->

    <!-- Delete Insurance -->
    <div class="modal fade" id="delete_insurance">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Insurance</h4>
                    <p class="mb-3">Are you sure you want to delete Insurance?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/add-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Insurance -->

    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <table class="table custom-table1">
                            <thead class="thead-white">
                                <tr>
                                    <th class="py-0">Extra Features</th>
                                    <th class="py-0">Pricing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-gray-9">Navigation</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="90">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>	
                                <tr>
                                    <td class="fw-medium text-gray-9">Satellite Radio</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="25">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="47">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Express Check-in/out</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="75">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Child Safety Seats</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="22">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="48">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>								
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->

    <!-- Add New Damage -->
    <div class="modal fade" id="add-damage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Add New Damage</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Damage Location <span class="text-danger">*</span></label>	
                            <select class="select">
                                <option>Select</option>
                                <option>Interior</option>
                                <option>Exterior</option>
                            </select>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Damage Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option>Scratch</option>
                                <option>Dent</option>
                                <option>Crack</option>
                                <option>Clip</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Damage -->

    <!-- Edit Damage -->
    <div class="modal fade" id="edit-damage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Damage</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Damage Location <span class="text-danger">*</span></label>	
                            <select class="select">
                                <option>Select</option>
                                <option selected>Interior</option>
                                <option>Exterior</option>
                            </select>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Damage Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Scratch</option>
                                <option>Dent</option>
                                <option>Crack</option>
                                <option>Clip</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3">Cracks, scratches, or faded surfaces due to heat exposure.</textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Damage -->

    <!-- Delete Damage -->
    <div class="modal fade deletemodal" id="delete_damage">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Damage</h4>
                    <p class="mb-3">Are you sure you want to delete Damage?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/add-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Damage -->

    <!-- Create FAQ -->
    <div class="modal fade" id="add-faq">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create FAQ</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Question <span class="text-danger">*</span></label>	
                            <input type="text" class="form-control">
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Answer <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create FAQ -->
@endif

@if (Route::is(['add-invoice']))
    <!-- Link Reservation -->
    <div class="modal fade" id="link_reservation">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Link Reservation</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <!-- Custom Data Table -->
                        <div class="custom-datatable-filter table-responsive">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="no-sort">ID</th>
                                    <th>CAR</th>
                                    <th>CUSTOMER</th>
                                    <th>PICK UP  DETAILS</th>
                                    <th>DROP OFF  DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3466</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="fs-14"><a href="javascript:void(0);">Ford Endeavour</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="mb-1 fs-14"><a href="javascript:void(0);">Reuben Keen</a></h6>
                                                <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">12</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">13</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#FR7321</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="fs-14"><a href="javascript:void(0);">Ferrari 458 MM</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="mb-1 fs-14"><a href="javascript:void(0);">William Jones</a></h6>
                                                <span class="badge bg-secondary-transparent rounded-pill">Company</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">14</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Los Angeles</p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">16</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#FD8414</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="fs-14"><a href="javascript:void(0);">Ford Mustang </a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="mb-1 fs-14"><a href="javascript:void(0);">Leonard Jandreau</a></h6>
                                                <span class="badge bg-secondary-transparent rounded-pill">Company</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">19</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Chicago </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">22</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                    <!-- Custom Data Table -->
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Link Reservation -->
@endif

@if (Route::is(['add-quotations']))
    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-quotations')}}">
                    <div class="modal-body pb-1">
                        <table class="table custom-table1">
                            <thead class="thead-white">
                                <tr>
                                    <th class="py-0">Extra Features</th>
                                    <th class="py-0">Pricing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-gray-9">Navigation</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="90">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>	
                                <tr>
                                    <td class="fw-medium text-gray-9">Satellite Radio</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="25">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="47">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Express Check-in/out</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="75">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Child Safety Seats</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="22">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="48">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>								
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->

    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-quotations')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Drivers <span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-center mt-2">
                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="#">Reuben Keen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pricing <span class="text-danger">*</span></label>
                                    <input type="text" value="$ 90" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->
        
    <!-- Add Driver -->
    <div class="modal fade" id="add_driver">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Driver</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <div class="d-flex align-items-center flex-wrap row-gap-3">                                                
                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                    <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Driver Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                        </div>            
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>   
                        <h6 class="fs-16 fw-medium mb-2">License Details</h6>   
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Card Number <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>   
                        <div class="col-md-4">            
                            <div class="mb-3">
                                <label class="form-label">Date of Issue <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-4">            
                            <div class="mb-3">
                                <label class="form-label">Valid Date <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <label class="form-label"> Document</label>
                            <div class="document-upload text-center br-3 mb-3">
                                <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                <p class="fs-12 mb-0">Maximum size 50mb</p>
                                <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Driver -->
	
	<!-- Add Client -->
	<div class="modal fade" id="add_client">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Create Client</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Client Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Birth <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Gender <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>English</option>
									<option>German</option>
									<option>Frence</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="phone1" name="phone">
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>            
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
						<h6 class="fs-16 fw-medium mb-2">License Details</h6>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Card Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Issue <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>    
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Valid Date <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>  
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Client -->
@endif

@if (Route::is(['add-reservation']))
    <!-- Completed -->
    <div class="modal fade" id="reservation_completed">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{url('admin/reservation-details')}}">
                        <span class="avatar avatar-lg bg-transparent-success rounded-circle text-success mb-3">
                            <i class="ti ti-check fs-26"></i>
                        </span>
                        <h4 class="mb-1">Created Successful</h4>
                        <p class="mb-3">Reservation created for the <span class="text-gray-9">“Ford Fiesta” </span> on <span class="text-gray-9">“24 Feb 2025”</span></p>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-100">View Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Completed -->

    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-quotations')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Drivers <span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-center mt-2">
                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="#">Reuben Keen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pricing <span class="text-danger">*</span></label>
                                    <input type="text" value="$ 90" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->
@endif

@if (Route::is(['announcements']))
    <!-- Add Announcement -->
    <div class="modal fade" id="add_announcement">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Add Announcement</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Announcement Title <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Announcement Type <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>New Rental Service</option>
									<option>Special Offer</option>
									<option>Seasonal Promotion</option>
								</select>
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Users <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Customer</option>
									<option>Admin</option>
									<option>Manager</option>
								</select>
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Description <span class="text-danger">*</span></label>
                                <div class="editor"></div>
                                <p class="mt-2">Maximum 60 Words</p>
							</div>
						</div>  
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Announcement -->

	<!-- Edit Announcement -->
    <div class="modal fade" id="edit_announcement">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Edit Announcement</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Announcement Title <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Limited-Time Offer!">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Announcement Type <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>New Rental Service</option>
									<option>Special Offer</option>
									<option>Seasonal Promotion</option>
								</select>
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Users <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>Customer</option>
									<option>Admin</option>
									<option>Manager</option>
								</select>
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Description <span class="text-danger">*</span></label>
                                <div class="editor">
                                    We are now offering premium car rentals in your city! Book your ride today and enjoy unbeatable rates.
                                </div>
                                <p class="mt-2">Maximum 60 Words</p>
							</div>
						</div>  
					</div>
				</div>
				<div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Announcement -->

	<!-- Announcement Details -->
    <div class="modal fade" id="announcement_detail">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Announcement Details</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="mb-3">
                        <p class="text-gray-9 fw-medium mb-0">Announcement Type</p>
                        <p>New Rental Servicepe</p>
                    </div>
					<div class="mb-3">
                        <p class="text-gray-9 fw-medium mb-0">Description</p>
                        <p>Limited-Time Offer!</p>
                    </div>
					<div class="mb-3">
                        <p class="text-gray-9 fw-medium mb-0">Announcement Type</p>
                        <p> We are now offering premium car rentals in your city! Book your ride today and enjoy unbeatable rates.</p>
                    </div>
					<div class="mb-3">
                        <p class="text-gray-9 fw-medium mb-0">Date</p>
                        <p>10 Jan 2025</p>
                    </div>
                    <h6 class="mb-3">Announcement Views</h6>
                    <div class="custom-datatable-filter table-responsive brandstable mb-3">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>USER</th>
                                    <th>ROLE</th>
                                    <th>VIEWED DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="car-details" class="avatar me-2 flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-20.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Andrew Simons</a></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Admin</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9 mb-0">29 Nov 2024</p>
                                        <p class="fs-13 text-gray-5">01:00 PM</p>
                                    </td>
                                </tr>                                                            
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="car-details" class="avatar me-2 flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-21.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">David Steiger</a></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Manager</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9 mb-0">19 Dec 2024</p>
                                        <p class="fs-13 text-gray-5">10:00 AM</p>
                                    </td>
                                </tr>                                                            
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="car-details" class="avatar me-2 flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-12.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Virginia Phu</a></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Customer</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9 mb-0">24 Dec 2024</p>
                                        <p class="fs-13 text-gray-5">12:32 PM</p>
                                    </td>
                                </tr>                                                            
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="car-details" class="avatar me-2 flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-22.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Walter Hartmann</a></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Accountant</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9 mb-0">29 Nov 2024</p>
                                        <p class="fs-13 text-gray-5">03:15 PM</p>
                                    </td>
                                </tr>                                                            
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="car-details" class="avatar me-2 flex-shrink-0">
                                                <img src="{{URL::asset('admin_assets/img/profiles/avatar-27.jpg')}}" class="rounded-circle" alt="">
                                            </a>
                                            <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Andrea Jermaine</a></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-gray-9">Inspector</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-9 mb-0">03 Nov 2024</p>
                                        <p class="fs-13 text-gray-5">04:10 PM</p>
                                    </td>
                                </tr>                                                            
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Announcement Details -->

	<!-- Delete  -->
	<div class="modal fade" id="delete_announcement">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Announcement</h4>
					<p class="mb-3">Are you sure you want to delete announcement?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/announcements')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['bank-accounts']))
    <!-- Add bank -->
    <div class="modal fade" id="add_bank">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Bank Account</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Bank Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Account Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Account Holder Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Branch <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">IFSC  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Mark as Default 
                            </label>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/bank-accounts')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add bank -->

    <!-- Edit bank -->
    <div class="modal fade" id="edit_bank">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Edit Bank Account</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Bank Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="HDFC">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Account Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="**** **** 1832">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Account Holder Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Andrew Simons">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Branch <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Bringham">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">IFSC  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="124547">
                    </div>                     
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
                            <label class="form-check-label" for="flexCheckChecked1">
                                Mark as Default 
                            </label>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/bank-accounts')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit bank -->

    <!-- Delete -->
    <div class="modal fade" id="delete_bank">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Bank Account</h4>
                    <p class="mb-3">Are you sure you want to delete bank account?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/bank-accounts')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete -->
@endif

@if (Route::is(['blog-categories']))
    <!-- Add Category -->
    <div class="modal fade" id="add_Category">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Category</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/faq-category')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Category -->

    <!-- Edit Category -->
    <div class="modal fade" id="edit_Category">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Category</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Rental Policies">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/faq-category')}}" class="btn btn-primary">Create New</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Category -->
    
    <!-- Delete Category -->
    <div class="modal fade" id="delete_Category">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Category</h4>
                    <p class="mb-3">Are you sure you want to delete category?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Category -->
@endif

@if (Route::is(['blog-tags']))
    <!-- Add Category -->
    <div class="modal fade" id="add_Category">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Tag</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label class="form-label">Tag <span class="text-danger">*</span></label>
                        <input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput" name="specialist">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/blog-tags')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Category -->

    <!-- Edit Category -->
    <div class="modal fade" id="edit_Category">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Tag</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label class="form-label">Tag <span class="text-danger">*</span></label>
                        <input class="input-tags form-control" id="inputBox1" type="text" data-role="tagsinput" name="specialist" value="Road Trip Essentials">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/blog-tags')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Category -->
    
    <!-- Delete Category -->
    <div class="modal fade" id="delete_Category">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Tag</h4>
                    <p class="mb-3">Are you sure you want to delete Tag?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Category -->
@endif

@if (Route::is(['blogs']))
    <!-- Delete Blogs -->
    <div class="modal fade" id="delete_blogs">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Blog</h4>
                    <p class="mb-3">Are you sure you want to delete Blog?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Blogs -->
@endif

@if (Route::is(['email-setting']))
    <!-- Add php mailer -->
    <div class="modal fade" id="phpmailersettings">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">PHP Mailer</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/email-setting')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                        
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">From Email Address <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">From Email Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>   
                    </div> 
                </form>
            </div>
        </div>
    </div>
    <!-- /Add php mailer -->

    <!-- Add sendgrid -->
    <div class="modal fade" id="sendgrid">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Test Mail</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/email-setting')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Enter Email Address <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>   
                    </div> 
                </form>
            </div>
        </div>
    </div>
    <!-- /Add sendgrid -->

    <!-- Add sendgrid -->
    <div class="modal fade" id="smtpsettings">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">SMTP</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/email-setting')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                        
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">From Email Address <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Host <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Port <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>   
                    </div> 
                </form>
            </div>
        </div>
    </div>
    <!-- /Add sendgrid -->
@endif

@if (Route::is(['email-templates']))
            <div class="modal fade" id="add_email">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="mb-0">Create Template</h5>
							<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
								<i class="ti ti-x fs-16"></i>
							</button>
						</div>
						<div class="modal-body ">
							<div class="row">
								<div class="col-lg-12">
									<div class="mb-0">
										<label class="form-label">Template Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="d-flex justify-content-center">
								<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Create New</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="edit_email">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="mb-0">Edit Template</h5>
							<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
								<i class="ti ti-x fs-16"></i>
							</button>
						</div>
						<div class="modal-body ">
							<div class="row">
								<div class="col-lg-12">
									<div class="border br-10 p-2 mb-3">
										<p>
											Hi <span class="text-info">{Customer Name}</span>,<br>
											Welcome to <span class="text-info">{Company Name}</span>!
											
										</p>
										<p>
											We’re thrilled to have you as part of our community and are excited to support you in finding the perfect car rental solution. Thank you for choosing us – we truly appreciate your trust and confidence.
										</p>
										<p>
											At <span class="text-info">{Company Name}</span>, our mission is to make your experience as smooth and efficient as possible. Whether you’re looking for the perfect vehicle or need assistance with booking, we’re here to help you every step of the way.
											If you have any questions or need help, our dedicated support team is always ready to assist you. Feel free to reach out at any time – we’re committed to ensuring you have the best experience possible
										</p>
										<p>
											Thank you again for choosing <span class="text-info">{Company Name}</span>. We’re excited to be part of your journey and look forward to supporting you throughout your rental experience.
										</p>
										<p>
											Best <br>
											The <span class="text-info">{Company Name}</span>Team
										</p>
									</div>
									<label class="form-label">Tags</label>
									<ul class="d-flex flex-wrap gap-2">
										<li><span class="text-info">{Company Name}</span></li>
										<li><span class="text-info">{Booking Number}</span></li>
										<li><span class="text-info">{Booking Date}</span></li>
										<li><span class="text-info">{Car Name}</span></li>
										<li><span class="text-info">{Invoice ID}</span></li>
										<li><span class="text-info">{Receipt ID}</span></li>
										<li><span class="text-info">{Pickup Location}</span></li>
										<li><span class="text-info">{Pickup Date}</span></li>
										<li><span class="text-info">{Drop-off Location}</span></li>
										<li><span class="text-info">{Drop-off Date}</span></li>
										<li><span class="text-info">{Rental Price}</span></li>
										<li><span class="text-info">{Website URL}</span></li>
										<li><span class="text-info">{Discount Code}</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="modal-footer justify-content-between">
							<div class="form-check form-check-md form-switch me-2">
								<label class="form-check-label form-label mt-0 mb-0">
								<input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
								Status
								</label>
							</div>
							<div class="d-flex justify-content-center ">
								<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save Changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="view_email">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="mb-0">Preview Template</h5>
							<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
								<i class="ti ti-x fs-16"></i>
							</button>
						</div>
						<div class="modal-body ">
							<div class="row">
								<div class="col-lg-12">
									<p>
										Hi <span class="text-info">{Customer Name}</span>,<br>
										Welcome to <span class="text-info">{Company Name}</span>!
										
									</p>
									<p>
										We’re thrilled to have you as part of our community and are excited to support you in finding the perfect car rental solution. Thank you for choosing us – we truly appreciate your trust and confidence.
									</p>
									<p>
										At <span class="text-info">{Company Name}</span>, our mission is to make your experience as smooth and efficient as possible. Whether you’re looking for the perfect vehicle or need assistance with booking, we’re here to help you every step of the way.
    If you have any questions or need help, our dedicated support team is always ready to assist you. Feel free to reach out at any time – we’re committed to ensuring you have the best experience possible
									</p>
									<p>
										Thank you again for choosing <span class="text-info">{Company Name}</span>. We’re excited to be part of your journey and look forward to supporting you throughout your rental experience.
									</p>
									<p>
										Best <br>
										The <span class="text-info">{Company Name}</span>Team
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            
			<!-- Delete  -->
			<div class="modal fade" id="delete_email">
				<div class="modal-dialog modal-dialog-centered modal-sm">
					<div class="modal-content">
						<div class="modal-body text-center">
							<form>
								<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
									<i class="ti ti-trash-x fs-26"></i>
								</span>
								<h4 class="mb-1">Delete Email Template</h4>
								<p class="mb-3">Are you sure you want to delete email template?</p>
								<div class="d-flex justify-content-center">
									<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
									<button type="button" data-bs-dismiss="modal" class="btn btn-primary">Yes, Delete</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete -->	
@endif

@if (Route::is(['fuel']))
    <!-- Add Fuel -->
    <div class="modal fade" id="add_fuel">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Fuel</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Fuel -->

    <!-- Edit Fuel -->
    <div class="modal fade" id="edit_fuel">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Fuel</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Petrol">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Fuel -->
    
    <!-- Delete Fuel -->
    <div class="modal fade" id="delete_fuel">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Fuel</h4>
                    <p class="mb-3">Are you sure you want to delete fuel?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Brand -->
@endif

@if (Route::is(['inspections']))
    <!-- Add Extra Service -->
    <div class="modal fade" id="add_inspection">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create  Inspection</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/inspections')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Car <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Ford Endeavour</option>
                                        <option>Ferrari 458 MM</option>
                                        <option>Ford Mustang</option>
                                        <option>Toyota Tacoma 4</option>
                                        <option>Chevrolet Truck</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Inspection Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Inspection By <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Shaun Farley</option>
                                        <option>Jenny Ellis</option>
                                        <option>Leon Baxter</option>
                                        <option>Karen Flores</option>
                                        <option>Michael Dawson</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2">Incoming Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Odometer <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Fuel <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2">Checklist</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-1" type="checkbox">
                                        <label for="check-1" class="form-check-label text-gray-9 fs-14 mt-0">Body Condition</label>
                                        <p class="ms-2">Look for dents, scratches, rust, or paint damage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-2" type="checkbox">
                                        <label for="check-2" class="form-check-label text-gray-9 fs-14 mt-0">Glass & Mirrors</label>
                                        <p class="ms-2">Ensure no cracks or chips.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-3" type="checkbox">
                                        <label for="check-3" class="form-check-label text-gray-9 fs-14 mt-0">Lights</label>
                                        <p class="ms-2">Test headlights, turn signals, and fog lights.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-4" type="checkbox">
                                        <label for="check-4" class="form-check-label text-gray-9 fs-14 mt-0">Tires & Wheels</label>
                                        <p class="ms-2">Inspect depth, pressure and signs of damage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-5" type="checkbox">
                                        <label for="check-5" class="form-check-label text-gray-9 fs-14 mt-0">Engine Oil, Coolant & Brake Fluid</label>
                                        <p class="ms-2">Check level, condition and any leaks</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-6" type="checkbox">
                                        <label for="check-6" class="form-check-label text-gray-9 fs-14 mt-0">Battery</label>
                                        <p class="ms-2">Check terminals for corrosion and test charge.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-7" type="checkbox">
                                        <label for="check-7" class="form-check-label text-gray-9 fs-14 mt-0">Seats & Seatbelts</label>
                                        <p class="ms-2">Look for dents, scratches, rust, or paint damage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-8" type="checkbox">
                                        <label for="check-8" class="form-check-label text-gray-9 fs-14 mt-0">AC & Heater</label>
                                        <p class="ms-2">Verify proper functioning.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-19" type="checkbox">
                                        <label for="check-19" class="form-check-label text-gray-9 fs-14 mt-0">Brakes & Suspension</label>
                                        <p class="ms-2">Listen for grinding or squeaking noises</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-10" type="checkbox">
                                        <label for="check-10" class="form-check-label text-gray-9 fs-14 mt-0">Exhaust System </label>
                                        <p class="ms-2">Look for rust, holes, or excessive smoke.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Notes</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Inspection Status <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Completed</option>
                                        <option>Inprogress</option>
                                        <option>Pending</option>
                                        <option>On Hold</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Repair Status <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Completed</option>
                                        <option>Pending</option>
                                        <option>Need Repair</option>
                                        <option>Inprogress</option>
                                        <option>On Hold</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                        </div>					
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Extra Service -->

    <!-- Edit Extra Service -->
    <div class="modal fade" id="edit_inspection">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Inspection</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/inspections')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Car <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Ford Endeavour</option>
                                        <option>Ferrari 458 MM</option>
                                        <option>Ford Mustang</option>
                                        <option>Toyota Tacoma 4</option>
                                        <option>Chevrolet Truck</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Inspection Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Inspection By <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Shaun Farley</option>
                                        <option>Jenny Ellis</option>
                                        <option>Leon Baxter</option>
                                        <option>Karen Flores</option>
                                        <option>Michael Dawson</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2">Incoming Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Odometer <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="12,000 km">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Fuel <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="2 litres">
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2">Checklist</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-11" type="checkbox" checked>
                                        <label for="check-11" class="form-check-label text-gray-9 fs-14 mt-0">Body Condition</label>
                                        <p class="ms-2">Look for dents, scratches, rust, or paint damage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-12" type="checkbox" checked>
                                        <label for="check-12" class="form-check-label text-gray-9 fs-14 mt-0">Glass & Mirrors</label>
                                        <p class="ms-2">Ensure no cracks or chips.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-13" type="checkbox" checked>
                                        <label for="check-13" class="form-check-label text-gray-9 fs-14 mt-0">Lights</label>
                                        <p class="ms-2">Test headlights, turn signals, and fog lights.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-14" type="checkbox" checked>
                                        <label for="check-14" class="form-check-label text-gray-9 fs-14 mt-0">Tires & Wheels</label>
                                        <p class="ms-2">Inspect depth, pressure and signs of damage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-15" type="checkbox" checked>
                                        <label for="check-15" class="form-check-label text-gray-9 fs-14 mt-0">Engine Oil, Coolant & Brake Fluid</label>
                                        <p class="ms-2">Check level, condition and any leaks</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-16" type="checkbox" checked>
                                        <label for="check-16" class="form-check-label text-gray-9 fs-14 mt-0">Battery</label>
                                        <p class="ms-2">Check terminals for corrosion and test charge.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-17" type="checkbox" checked>
                                        <label for="check-17" class="form-check-label text-gray-9 fs-14 mt-0">Seats & Seatbelts</label>
                                        <p class="ms-2">Look for dents, scratches, rust, or paint damage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-18" type="checkbox" checked>
                                        <label for="check-18" class="form-check-label text-gray-9 fs-14 mt-0">AC & Heater</label>
                                        <p class="ms-2">Verify proper functioning.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-20" type="checkbox" checked>
                                        <label for="check-20" class="form-check-label text-gray-19 fs-14 mt-0">Brakes & Suspension</label>
                                        <p class="ms-2">Listen for grinding or squeaking noises</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-check-md mb-0">
                                        <input class="form-check-input" id="check-39" type="checkbox" checked>
                                        <label for="check-39" class="form-check-label text-gray-9 fs-14 mt-0">Exhaust System </label>
                                        <p class="ms-2">Look for rust, holes, or excessive smoke.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Notes</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Inspection Status <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Completed</option>
                                        <option>Inprogress</option>
                                        <option>Pending</option>
                                        <option>On Hold</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Repair Status <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Completed</option>
                                        <option>Pending</option>
                                        <option>Need Repair</option>
                                        <option>Inprogress</option>
                                        <option>On Hold</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>					
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <!-- /Edit Extra Service -->
    
    <!-- Delete Extra Service -->
    <div class="modal fade" id="delete">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Inspection</h4>
                    <p class="mb-3">Are you sure you want to delete inspection?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Extra Service -->
@endif

@if (Route::is(['insurance-setting']))
    <!-- Add Insurance -->
    <div class="modal fade" id="add-insurance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Add New Insurance</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/insurance-setting')}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Insurane Name <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price Type <span class="text-danger"> *</span></label>
                            <div class="d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm4" checked>
                                    <label class="form-check-label" for="Radio-sm4">
                                        Daily
                                    </label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm5">
                                    <label class="form-check-label" for="Radio-sm5">
                                        Fixed
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm6">
                                    <label class="form-check-label" for="Radio-sm6">
                                        Percentage
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="add-insurance-benifit">
                            <div class="mb-1">
                                <label class="form-label">Benefit <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="d-inline-flex align-items-center text-info add-new-benifit"><i class="ti ti-plus me-1"></i>Add New</a>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create Insurance</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Insurance -->

    <!-- Edit Insurance -->
    <div class="modal fade" id="edit-insurance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Insurance</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/insurance-setting')}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Insurane Name <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="Full Premium Insurance">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price Type <span class="text-danger"> *</span></label>
                            <div class="d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm" checked>
                                    <label class="form-check-label" for="Radio-sm">
                                        Daily
                                    </label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm2">
                                    <label class="form-check-label" for="Radio-sm2">
                                        Fixed
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm3">
                                    <label class="form-check-label" for="Radio-sm3">
                                        Percentage
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="$200">
                        </div>
                        <div class="add-insurance-benifit-2">
                            <div class="mb-1">
                                <label class="form-label">Benefit <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" value="No additional charges for emergency roadside services.">
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="d-inline-flex align-items-center text-info add-new-benifit-2"><i class="ti ti-plus me-1"></i>Add New</a>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label form-label mt-0 mb-0">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                    Status
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>		
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit  Insurance -->

    <!-- Benifits Insurance -->
    <div class="modal fade" id="view-benifits">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Benefits</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <p class="d-flex align-items-center mb-2"><i class="ti ti-checks text-success me-1"></i>No additional charges for emergency roadside services.</p>
                        <p class="d-flex align-items-center mb-2"><i class="ti ti-checks text-success me-1"></i>Quick assistance for unexpected breakdowns.</p>
                        <p class="d-flex align-items-center mb-2"><i class="ti ti-checks text-success me-1"></i>Coverage for lost or stolen personal belongings</p>
                        <p class="d-flex align-items-center"><i class="ti ti-checks text-success me-1"></i>Covers the cost if the rental car is stolen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Benifits Insurance -->

    <!-- Delete  -->
	<div class="modal fade" id="delete_backup">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Insurance</h4>
					<p class="mb-3">Are you sure you want to delete insurance?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/insurance-setting')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['invoices']))
    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Invoice</h4>
                    <p class="mb-3">Are you sure you want to delete Invoice?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/invoices')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if (Route::is(['invoice-template']))
    <!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 1</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-01.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->

    <!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_2">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 2</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-02.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->

    <!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_3">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 3</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-03.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->

    <!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_4">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 4</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-04.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->
@endif

@if (Route::is(['language-setting2']))
    <!-- Language Setup -->
    <div class="modal language fade" id="language_setup">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Language Setup</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
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
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <a href="javascript:void(0);" class="btn btn-dark me-2"><i class="ti ti-arrow-left me-1"></i>Back to Translations</a>
                            <a href="javascript:void(0);" class="btn btn-white me-2">
                                <img src="{{URL::asset('admin_assets/img/flags/uae.svg')}}" alt="img" class="avatar avatar-sm rounded-circle me-1">
                                Arabic
                            </a>
                            <div class="progress-percent">
                                <span class="text-gray-9 fs-10">Progress</span>
                                <div class="d-flex align-items-center">
                                    <div class="progress progress-xs" style="width: 120px;">
                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="d-inline-flex fs-12 ms-2">80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Custom Data Table -->
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>ENGLISH</th>
                                    <th>ARABIC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Reservations
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="التحفظات">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Calendar
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="تقويم">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Quotations
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="الاقتباسات">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Enquiries
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="الاستفسارات">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Units
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="الوحدات">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        People
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="الناس">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Companies
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="شركات">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Drivers
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="السائقين">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Locations
                                    </td>
                                    <td>
                                        <input type="text" dir="rtl" class="form-control text-end" value="المواقع">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Custom Data Table -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Language Setup -->
@endif

@if (Route::is(['locations']))
    <!-- Add Location -->
	<div class="modal fade" id="add_location">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Create Location</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Location Title <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>            
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone" name="phone" class="form-control">
							</div>
						</div>    
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Location <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Country <span class="text-danger">*</span></label>
								<select class="select">
                                    <option>Select</option>
                                    <option>United States</option>
                                    <option>Canada</option>
									<option>Germany</option>
                                </select>
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">State <span class="text-danger">*</span></label>
								<select class="select">
                                    <option>Select</option>
                                    <option>California</option>
                                    <option>New York</option>
                                    <option>Texas</option>
                                </select>
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">City <span class="text-danger">*</span></label>
								<select class="select">
                                    <option>Select</option>
                                    <option>Los Angeles</option>
                                    <option>New York City</option>
									<option>Houston</option>
                                </select>
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Pincode <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
                        <label class="form-label mb-2">Working Days <span class="text-danger">*</span></label>   
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Monday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Tuesday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                Wednesday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Thursday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Friday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Saturday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Sunday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Driver -->

	<!-- Edit Driver -->
	<div class="modal fade" id="edit_location">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Edit Location</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 p-2 flex-shrink-0 text-dark frames">
									<img src="{{URL::asset('admin_assets/img/locations/location-01.jpg')}}" class="img-fluid rounded" alt="img">
									<span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
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
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Location Title <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Johnson Dealer Zone">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="johnsondealer@example.com">
							</div>
						</div>            
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone2" name="phone2" class="form-control" value="+1 56598 98956">
							</div>
						</div>    
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Location <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="2881 Jarvis Street">
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Country <span class="text-danger">*</span></label>
								<select class="select">
                                    <option>Select</option>
                                    <option selected>United States</option>
                                    <option>Canada</option>
									<option>Germany</option>
                                </select>
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">State <span class="text-danger">*</span></label>
								<select class="select">
                                    <option>Select</option>
                                    <option selected>California</option>
                                    <option>New York</option>
                                    <option>Texas</option>
                                </select>
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">City <span class="text-danger">*</span></label>
								<select class="select">
                                    <option>Select</option>
                                    <option selected>Los Angeles</option>
                                    <option>New York City</option>
									<option>Houston</option>
                                </select>
							</div>
						</div>   
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Pincode <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
                        <label class="form-label mb-2">Working Days <span class="text-danger">*</span></label>   
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                    Monday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="6:30 AM">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                    Tuesday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="6:30 AM">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Wednesday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="6:30 AM">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                    Thursday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="6:30 AM">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                    Friday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill ">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Saturday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check form-check-md form-switch me-2">
                                <label class="form-check-label mt-0 mb-0 text-gray-5">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch">
                                    Sunday
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="input-icon-start position-relative flex-fill  me-3">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                                <p class="text-gray-5 me-3 mb-0 fs-14">to</p>
                                <div class="input-icon-start position-relative flex-fill bg-light">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock"></i>
                                    </span>
                                    <input type="text" class="form-control timepicker bg-light" placeholder="">
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Driver -->


	<!-- Delete  -->
	<div class="modal fade" id="delete_location">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Location</h4>
					<p class="mb-3">Are you sure you want to delete location?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/locations')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['login-setting']))
    <!-- Google Login Settings -->
    <div class="modal fade" id="google_login">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Google Login Settings</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Client ID<span class="text-danger ms-1">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Client Secret Key<span class="text-danger ms-1">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Login Redirect URL<span class="text-danger ms-1">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Google Login Settings -->

    <!-- Facebook Login Settings -->
    <div class="modal fade" id="facebook_login">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Facebook Login Settings</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">API ID<span class="text-danger ms-1">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Secret Key<span class="text-danger ms-1">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Login Redirect URL<span class="text-danger ms-1">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Facebook Login Settings -->
@endif

@if (Route::is(['maintenance']))
    <!-- Create Maintenance -->
    <div class="modal fade modal-dropdown" id="add_maintenance">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create Maintenance</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/maintenance')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Car <span class="text-danger">*</span></label>	
                                    <div class="dropdown w-100">
                                        <a href="javascript:void(0);" class="w-100 dropdown-toggle btn btn-white d-inline-flex align-items-center justify-content-between" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            Select Car
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
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ford Endeavour</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ferrari 458 MM</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ford Mustang</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Odometer <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>   
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Details</label>	
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Maintenance Status <span class="text-danger">*</span></label>	
                                    <select class="select">
                                        <option>Completed</option>
                                        <option>In Progress</option>
                                        <option>Planned</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create Maintenance -->

    <!-- Edit Maintenance -->
    <div class="modal fade modal-dropdown" id="edit_maintenance">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Maintenance</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/maintenance')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Car <span class="text-danger">*</span></label>	
                                    <div class="dropdown w-100">
                                        <a href="javascript:void(0);" class="w-100 dropdown-toggle btn btn-white d-inline-flex align-items-center justify-content-between" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            Ford Endeavour
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
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ford Endeavour</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ferrari 458 MM</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ford Mustang</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Odometer <span class="text-danger">*</span></label>	
                                    <input type="text" value="12,215 km" class="form-control ">
                                </div>   
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" value="24 Jan 2025" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Details</label>	
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Maintenance Status <span class="text-danger">*</span></label>	
                                    <select class="select">
                                        <option selected>Completed</option>
                                        <option>In Progress</option>
                                        <option>Planned</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Maintenance -->

    <!-- Delete Maintenance -->
    <div class="modal fade" id="delete_maintenance">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Maintenance</h4>
                    <p class="mb-3">Are you sure you want to delete Maintenance?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Maintenance -->
@endif

@if (Route::is(['menu-management']))
    <!-- Add menu -->
    <div class="modal fade" id="add_menu">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mb-0">Add Menu</h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label"> Menu Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>                     
                <div class="mb-3">
                    <label class="form-label">Permalink<span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>      
                <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p> 
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="{{url('admin/menu-management')}}" class="btn btn-primary">Create New</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Add menu -->

    <!-- Edit menu -->
    <div class="modal fade" id="edit_menu">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-0">Edit Menu</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Contact">
                </div>                     
                <div class="mb-3">
                    <label class="form-label">Permalink<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="https://www.example.com/contact/">
                </div>                     
                <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p> 
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="form-check form-check-md form-switch me-2">
                        <label class="form-check-label form-label mt-0 mb-0">
                        <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                            Status
                        </label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/menu-management')}}" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>						
            </div>
        </div>
    </div>
    </div>
    <!-- /Edit menu -->


    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_menu">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                    <i class="ti ti-trash-x fs-26"></i>
                </span>
                <h4 class="mb-1">Delete Menu</h4>
                <p class="mb-3">Are you sure you want to delete Menu?</p>
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="{{url('admin/menu-management')}}" class="btn btn-primary">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if (Route::is(['models']))
        <!-- Add Brand -->
        <div class="modal fade" id="add_model">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
					<div class="modal-header">
						<h5 class="mb-0">Create Model</h5>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x fs-16"></i>
						</button>
					</div>
                    <div class="modal-body pb-1">
						<div class="mb-3">
							<label class="form-label">Model <span class="text-danger">*</span></label>
							<input type="text" class="form-control">
						</div>                     
                        <div class="mb-3">
							<label class="form-label">Brand <span class="text-danger">*</span></label>
							<select class="select">
                                <option>Select</option>
                                <option>Toyota</option>
                                <option>Audi</option>
                                <option>Lamborghini</option>
                                <option>BMW</option>
                                <option>KIA</option>
                                <option>Ferrari</option>
                                <option>Honda</option>
                                <option>Ford</option>
                                <option>Hyundai</option>
                                <option>Mercedes-Benz</option>
                            </select>
						</div>
                    </div>
					<div class="modal-footer">
						<div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                        </div>
					</div>
                </div>
            </div>
        </div>
        <!-- /Add Brand -->

        <!-- Edit Brand -->
        <div class="modal fade" id="edit_model">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
					<div class="modal-header">
						<h4 class="mb-0">Edit Model</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x fs-16"></i>
						</button>
					</div>
                    <div class="modal-body pb-1">
						<div class="mb-3">
							<label class="form-label">Model <span class="text-danger">*</span></label>
							<input type="text" class="form-control" placeholder="Urban Cruiser">
						</div>                     
                        <div class="mb-3">
							<label class="form-label">Brand <span class="text-danger">*</span></label>
							<select class="select">
                                <option>Select</option>
                                <option>Toyota</option>
                                <option>Audi</option>
                                <option selected>Lamborghini</option>
                                <option>BMW</option>
                                <option>KIA</option>
                                <option>Ferrari</option>
                                <option>Honda</option>
                                <option>Ford</option>
                                <option>Hyundai</option>
                                <option>Mercedes-Benz</option>
                            </select>
						</div>
                    </div>
					<div class="modal-footer">
						<div class="d-flex justify-content-between align-items-center w-100">
							<div class="form-check form-check-md form-switch me-2">
								<label class="form-check-label form-label mt-0 mb-0">
								<input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
									Status
								</label>
							</div>
							<div class="d-flex justify-content-center">
								<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
								<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
							</div>
						</div>						
					</div>
                </div>
            </div>
        </div>
        <!-- /Edit Brand -->
        
        <!-- Delete Brand -->
        <div class="modal fade" id="delete_model">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                            <i class="ti ti-trash-x fs-26"></i>
                        </span>
                        <h4 class="mb-1">Delete Model</h4>
                        <p class="mb-3">Are you sure you want to delete model?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Brand -->
@endif

@if (Route::is(['newsletters']))
    <!-- Delete  -->
    <div class="modal fade" id="delete">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Newsletter</h4>
					<p class="mb-3">Are you sure you want to delete Newsletter?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/newsletters')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['pages']))
    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_page">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                    <i class="ti ti-trash-x fs-26"></i>
                </span>
                <h4 class="mb-1">Delete Page</h4>
                <p class="mb-3">Are you sure you want to delete page?</p>
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="{{url('admin/pages')}}" class="btn btn-primary">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if (Route::is(['payment-methods']))
    <!-- Add paypal -->
    <div class="modal fade" id="add_paypal">
    <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mb-0">Paypal</h5>
            <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="ti ti-x fs-16"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">From Email Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control">
            </div>                     
            <div class="mb-3">
                <label class="form-label">API Keys <span class="text-danger">*</span></label>
                <input type="text" class="form-control">
            </div>                     
            <div class="mb-3">
                <label class="form-label">Secret Key <span class="text-danger">*</span></label>
                <input type="text" class="form-control">
            </div>                     
            
        </div>
        <div class="modal-footer">
            <div class="d-flex justify-content-center">
                <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                <a href="{{url('admin/payment-methods')}}" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- /Add paypal -->
@endif

@if (Route::is(['payments']))
        <!-- Add Driver -->
        <div class="modal fade" id="add_ticket">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="mb-0">Add Ticket</h5>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x fs-16"></i>
                        </button>
                    </div>
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Image <span class="text-danger">*</span></label>
                                <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                        <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Email<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Ticket Code<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category<span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Payment Issue</option>
                                        <option>Car Not Available</option>
                                        <option>Refund Request</option>
                                    </select>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Priority<span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                    </select>
                                </div>
                            </div>   
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Created Date<span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description<span class="text-danger">*</span></label>
                                    <div class="editor mb-2"></div>
                                    <p>Maximum 60 Words</p>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <label class="form-label"> Document</label>
                                <div class="document-upload text-center br-3 mb-3">
                                    <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                    <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                    <p class="fs-12 mb-0">Maximum size 50mb</p>
                                    <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Driver -->

    	<!-- Delete  -->
	<div class="modal fade" id="delete_contact">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Payments</h4>
					<p class="mb-3">Are you sure you want to delete Payments?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/payments')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['plugin-managers']))
    <!-- Add Plugin -->
    <div class="modal fade" id="add_plugin">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mb-0">Add Plugin</h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="plugin-content-modal">
                    <div class="d-flex flex-column align-items-center">
                        <span class="mb-2"><i class="ti ti-files text-primary"></i></span>
                        <p class="mb-0">Drop your files here or <a href="javascript:void(0);">Browse</a></p>
                        <p class="mb-0">Maximum size 50mb</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="{{url('admin/plugin-managers')}}" class="btn btn-primary">Install</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Add Plugin -->
@endif

@if (Route::is(['pricing']))
    <!-- Create Seasonal Pricing -->
    <div class="modal fade" id="add_pricing">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/pricing')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control">
                                </div>   
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create Seasonal Pricing -->

    <!-- Edit Seasonal Pricing -->
    <div class="modal fade" id="edit_pricing">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/pricing')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control" value="Halloween">
                                </div>   
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="28-01-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-02-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="50">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="100">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="150">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="200">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Seasonal Pricing -->

    <!-- Delete Pricing -->
    <div class="modal fade" id="delete_pricing">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Seasonal Pricing</h4>
                    <p class="mb-3">Are you sure you want to delete Seasonal Pricing?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Pricing -->
@endif

@if (Route::is(['quotations']))
    <!-- Delete Quotation -->
    <div class="modal fade" id="delete_quotation">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Quotation</h4>
                    <p class="mb-3">Are you sure you want to delete Quotation?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Quotation -->
@endif

@if (Route::is(['reservation-details']))
    <div class="modal fade" id="reservation_completed">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{url('admin/add-reservation')}}">
                        <span class="avatar avatar-lg bg-transparent-success rounded-circle text-success mb-3">
                            <i class="ti ti-check fs-26"></i>
                        </span>
                        <h4 class="mb-1">Created Successful</h4>
                        <p class="mb-3">Reservation created for the <span class="text-gray-9">“Ford Fiesta” </span> on <span class="text-gray-9">“24 Feb 2025”</span></p>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-100">View Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['reservations']))
    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Reservation</h4>
                    <p class="mb-3">Are you sure you want to delete Reservation?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/countries')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if (Route::is(['reviews']))
    <!-- Delete Maintenance -->
    <div class="modal fade" id="delete_review">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Review</h4>
                    <p class="mb-3">Are you sure you want to delete Review?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Maintenance -->
@endif

@if (Route::is(['roles-permissions']))
    <!-- Add User -->
	<div class="modal fade" id="add_role">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Add Role</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="mb-3">
						<label class="form-label">Role <span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
				</div> 
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add User -->

    <!-- Edit User -->
	<div class="modal fade" id="edit_role">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Edit Role</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="mb-3">
						<label class="form-label">Role <span class="text-danger">*</span></label>
						<input type="text" class="form-control" value="Admin">
					</div>
				</div> 
				<div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit User -->

    <!-- Delete  -->
	<div class="modal fade" id="delete_role">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Role</h4>
					<p class="mb-3">Are you sure you want to delete role?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/roles-permissions')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['safety-features']))
        <!-- Add Safety Feature -->
        <div class="modal fade" id="add_safety_feature">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
					<div class="modal-header">
						<h5 class="mb-0">Create Safety Feature</h5>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x fs-16"></i>
						</button>
					</div>
                    <div class="modal-body pb-1">
						<div class="mb-3">
							<label class="form-label">Safety Feature <span class="text-danger">*</span></label>
							<input type="text" class="form-control">
						</div>
                    </div>
					<div class="modal-footer">
						<div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                        </div>
					</div>
                </div>
            </div>
        </div>
        <!-- /Add Safety Feature -->

        <!-- Edit Safety Feature -->
        <div class="modal fade" id="edit_safety_feature">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
					<div class="modal-header">
						<h4 class="mb-0">Edit Safety Feature</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x fs-16"></i>
						</button>
					</div>
                    <div class="modal-body pb-1">
						<div class="mb-3">
							<label class="form-label">Safety Feature <span class="text-danger">*</span></label>
							<input type="text" class="form-control" placeholder="Active Head Restraints">
						</div>
                    </div>
					<div class="modal-footer">
						<div class="d-flex justify-content-between align-items-center w-100">
							<div class="form-check form-check-md form-switch me-2">
								<label class="form-check-label form-label mt-0 mb-0">
								<input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
									Status
								</label>
							</div>
							<div class="d-flex justify-content-center">
								<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
								<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
							</div>
						</div>						
					</div>
                </div>
            </div>
        </div>
        <!-- /Edit Safety Feature -->
        
        <!-- Delete Safety Feature -->
        <div class="modal fade" id="delete_safety_feature">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                            <i class="ti ti-trash-x fs-26"></i>
                        </span>
                        <h4 class="mb-1">Delete Safety Feature</h4>
                        <p class="mb-3">Are you sure you want to delete safety feature?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Safety Feature -->
@endif

@if (Route::is(['seats']))
    <!-- Add Seat Type -->
    <div class="modal fade" id="add_seat_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Seat Type</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Seat Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Seat Type -->

    <!-- Edit Seat Type -->
    <div class="modal fade" id="edit_seat_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Seat Type</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Seat Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="4 Seater">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Seat Type -->
    
    <!-- Delete Seat Type -->
    <div class="modal fade" id="delete_seat_type">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Seat Type</h4>
                    <p class="mb-3">Are you sure you want to seat type?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Seat Type -->
@endif

@if (Route::is(['security-setting']))
    <!-- Change-password -->
    <div class="modal fade" id="change_password">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Change Password</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" class="pass-inputs form-control">
                            <span class="ti toggle-passwords ti-eye-off"></span>
                        </div>
                    </div>
                    <div class="input-block mb-3">
                        <div class="mb-3">
                            <label class="form-label">New Password <span class="text-danger">*</span></label>
                            <div class="pass-group" id="passwordInput">
                                <input type="password" class="form-control pass-input">
                                <span class="ti toggle-password ti-eye-off"></span>
                            </div>
                        </div>
                        <div class="password-strength d-flex" id="passwordStrength">
                            <span id="poor"></span>
                            <span id="weak"></span>
                            <span id="strong"></span>
                            <span id="heavy"></span>
                        </div>
                        <div id="passwordInfo" class="mb-2"></div>
                        <p class="fs-12">Use 8 or more characters with a mix of letters, numbers &
                            symbols.</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" class="pass-inputa form-control">
                            <span class="ti toggle-passworda ti-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/security-setting')}}" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change-password -->

    <!-- Change-phone-number -->
    <div class="modal fade" id="change_phonenumber">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Change Phone Number</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Current Phone Number<span class="text-danger">*</span></label>
                        <div>
                            <input type="password" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="form-label">New Phone Number <span class="text-danger">*</span></label>
                            <div >
                                <input type="password" class="form-control" id="phone2">
                            </div>
                        </div>
                        <p class="d-flex align-items-center"><i class="ti ti-info-circle me-1"></i>New phone number only updated once you verified </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" class="pass-inputa form-control" >
                            <span class="ti toggle-passworda ti-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/security-setting')}}" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change-phone-number -->

    <!-- Change-email -->
    <div class="modal fade" id="change_email">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Change Email Address</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Current Email Address <span class="text-danger">*</span></label>
                        <div>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="form-label">New Email Address <span class="text-danger">*</span></label>
                            <div >
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <p class="d-flex align-items-center"><i class="ti ti-info-circle me-1"></i>New email address only updated once you verified </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" class="pass-inputa form-control">
                            <span class="ti toggle-passworda ti-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/security-setting')}}" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change-email -->

    <!-- Delete Account -->
    <div class="modal fade" id="delete_account">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Delete Account</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <p class="text-gray-9 fw-medium mb-0">Why Are You Deleting Your Account?</p>
                        <span class="fs-13">We're sorry to see you go! To help us improve, please let us know your reason for deleting your account</span>
                    </div>
                    <label class="d-flex align-items-center mb-3 form-check-label">
                        <input class="form-check-input me-2" type="radio" name="flexRadioDefault">
                            <div>
                            <p class="text-gray-9 fw-medium mb-0">No longer using the service</p>
                            <span class="fs-13">I no longer need this service and won’t be using it in the future.</span>
                            </div>
                    </label>
                    <label class="d-flex align-items-center mb-3 form-check-label">
                        <input class="form-check-input me-2" type="radio" name="flexRadioDefault">
                            <div>
                            <p class="text-gray-9 fw-medium mb-0">Privacy concerns</p>
                            <span class="fs-13">I am concerned about how my data is handled and want to remove</span>
                            </div>
                    </label>
                    <label class="d-flex align-items-center mb-3 form-check-label">
                        <input class="form-check-input me-2" type="radio" name="flexRadioDefault">
                            <div>
                            <p class="text-gray-9 fw-medium mb-0">Too many notifications/emails</p>
                            <span class="fs-13">I’m overwhelmed by the volume of notifications or emails</span>
                            </div>
                    </label>
                    <label class="d-flex align-items-center mb-3 form-check-label">
                        <input class="form-check-input me-2" type="radio" name="flexRadioDefault">
                            <div>
                            <p class="text-gray-9 fw-medium mb-0">Poor user experience</p>
                            <span class="fs-13">I’ve had difficulty using the platform, and it didn’t meet my expectations</span>
                            </div>
                    </label>
                    <label class="d-flex align-items-center mb-3 form-check-label">
                        <input class="form-check-input mt-0 me-2" type="radio" name="flexRadioDefault">
                            <div>
                            <p class="text-gray-9 fw-medium mb-0">Other (Please specify)</p>
                            </div>
                    </label>
                    <div class="mb-0">
                        <label class="form-label">Reason<span class="text-danger ms-1">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Confirm & Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Account -->
@endif

@if (Route::is(['sitemap']))
    <!-- Add Sitemap -->
    <div class="modal fade" id="add_sitemap">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Sitemap</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-0">
                        <label class="form-label">Sitemap URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                                   
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/sitemap')}}" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Sitemap -->


    <!-- Delete Sitemap  -->
    <div class="modal fade" id="delete_sitemap">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Sitemap</h4>
                    <p class="mb-3">Are you sure you want to delete sitemap?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/sitemap')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /Delete Sitemap -->
@endif

@if (Route::is(['sms-gateways']))
    <!-- Add nexom -->
    <div class="modal fade" id="add_nexmo">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Nexmo</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">API Key  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">API Secret Key <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Sender ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/sms-gateways')}}" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add nexom -->
@endif

@if (Route::is(['state']))
    <!-- Add state -->
    <div class="modal fade" id="add_state">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add State</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">State Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Country Name <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option>United States</option>
                            <option>Germany</option>
                            <option>Canada</option>
                            <option>Australia</option>
                        </select>
                    </div>  					
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/state')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add state -->

    <!-- Edit state -->
    <div class="modal fade" id="edit_state">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit State</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">State Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="California">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Country Name <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option selected>United States</option>
                            <option>Germany</option>
                            <option>Canada</option>
                            <option>Australia</option>
                        </select>
                    </div> 
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/state')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit state -->     

    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_state">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete State</h4>
                    <p class="mb-3">Are you sure you want to delete State?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/state')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if (Route::is(['steering']))
    <!-- Add Steering -->
    <div class="modal fade" id="add_steering">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Steering Type</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Steering Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Steering -->

    <!-- Edit Steering -->
    <div class="modal fade" id="edit_steering">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Steering Type</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Steering Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Manual Steering">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Steering -->
    
    <!-- Delete Steering -->
    <div class="modal fade" id="delete_steering">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Steering</h4>
                    <p class="mb-3">Are you sure you want to delete steering?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Brand -->
@endif

@if (ROute::is(['storage']))
    <!--Add Cronjob -->
    <div class="modal fade" id="aws_settings">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">AWS Settings</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">AWS Access Key <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>									
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Secret Key <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>									
                        </div>								
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Bucket Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>									
                        </div>								
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Region <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>									
                        </div>								
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Base URL <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>									
                        </div>								
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Cronjob -->
@endif

@if (Route::is(['system-backup']))
    <!-- Generate  -->
	<div class="modal fade" id="generate">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<form action="{{url('admin/system-backup')}}">
						<span class="avatar avatar-lg bg-primary-transparent rounded-circle text-primary mb-3">
							<i class="ti ti-folders fs-26"></i>
						</span>
						<h4 class="mb-1">Generate Backup</h4>
						<p class="mb-3">Are you sure you want to generate database backup?</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-primary">Generate</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Generate -->

    <!-- Delete  -->
	<div class="modal fade" id="delete_backup">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Backup</h4>
					<p class="mb-3">Are you sure you want to delete backup?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/system-backup')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['tags']))
        <!-- Add Tag -->
        <div class="modal fade" id="add_tag">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
					<div class="modal-header">
						<h5 class="mb-0">Create Tag</h5>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x fs-16"></i>
						</button>
					</div>
                    <div class="modal-body">
						<div class="mb-3">
							<label class="form-label">Tag <span class="text-danger">*</span></label>
							<input type="text" class="form-control">
						</div>
                    </div>
					<div class="modal-footer">
						<div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                        </div>
					</div>
                </div>
            </div>
        </div>
        <!-- /Add Tag -->

        <!-- Edit Tag -->
        <div class="modal fade" id="edit_tag">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
					<div class="modal-header">
						<h4 class="mb-0">Edit Tag</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x fs-16"></i>
						</button>
					</div>
                    <div class="modal-body">
						<div class="mb-3">
							<label class="form-label">Tag <span class="text-danger">*</span></label>
							<input type="text" class="form-control" placeholder="Featured">
						</div>
                    </div>
					<div class="modal-footer">
						<div class="d-flex justify-content-between align-items-center w-100">
							<div class="form-check form-check-md form-switch me-2">
								<label class="form-check-label form-label mt-0 mb-0">
								<input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
									Status
								</label>
							</div>
							<div class="d-flex justify-content-center">
								<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
								<a href="javascript:void(0);" class="btn btn-primary">Create New</a>
							</div>
						</div>						
					</div>
                </div>
            </div>
        </div>
        <!-- /Edit Tag -->
        
        <!-- Delete Tag -->
        <div class="modal fade" id="delete_tag">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                            <i class="ti ti-trash-x fs-26"></i>
                        </span>
                        <h4 class="mb-1">Delete Tag</h4>
                        <p class="mb-3">Are you sure you want to tag?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Tag -->
@endif

@if (Route::is(['tax-rates']))
    <!-- Add Tax Rate -->
    <div class="modal fade" id="add_tax_rate">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Tax Rate</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tax Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Tax Rate (%) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/tax-rates')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Tax Rate -->

    <!-- Edit Tax Rate -->
    <div class="modal fade" id="edit_tax_rate">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Edit Tax Rate</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tax Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="VAT">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Tax Rate (%) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="10">
                    </div>                     
                    
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/tax-rates')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Tax Rate -->

    <!-- Delete Rate  -->
    <div class="modal fade" id="delete_tax_rate">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Tax Rate</h4>
                    <p class="mb-3">Are you sure you want to delete tax rate?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/tax-rates')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Rate -->

    <!-- Add Tax Group -->
    <div class="modal fade" id="add_tax_group">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Tax Group</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tax Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-2">
                        <label class="form-label">Sub Taxes <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div> 
                    <p class="fs-13">Enter value separated by comma</p>                    
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/tax-rates')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Tax Group -->

    <!-- Edit Tax Group -->
    <div class="modal fade" id="edit_tax_group">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Tax Group</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tax Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="VAT">
                    </div>                     
                    <div class="mb-3 ">
                        <label class="form-label">Sub Taxes  <span class="text-danger"> *</span> </label>
                        <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="CGST">
                    </div>                   
                    
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/tax-rates')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Tax Rate -->

    <!-- Delete Rate  -->
    <div class="modal fade" id="delete_tax_group">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Tax Group</h4>
                    <p class="mb-3">Are you sure you want to delete tax group?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/tax-rates')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /Delete Rate -->
@endif

@if (Route::is(['testimonials']))
    <!-- Add Extra Service -->
    <div class="modal fade" id="add_testimonial">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Testimonial</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Image <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                    <div class="mb-3">
                        <label class="form-label">Customer <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ratings <span class="text-danger">*</span></label>
                        <select class="select">
                            <option value="">Select</option>
                            <option value="">5 Star</option>
                            <option value="">4 Star</option>
                            <option value="">3 Star</option>
                            <option value="">2 Star</option>
                            <option value="">1 Star</option>
                        </select>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Review <span class="text-danger">*</span></label>							
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/testimonials')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Extra Service -->

    <!-- Edit Brand -->
    <div class="modal fade" id="edit_testimonial">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Testimonial</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Image <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames p-2">
                                <img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" class="rounded-2 img-fluid" alt="brands">
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
                    <div class="mb-3">
                        <label class="form-label">Customer <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Andrew Simmons">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ratings <span class="text-danger">*</span></label>
                        <select class="select">
                            <option value="">Select</option>
                            <option value="">5 Star</option>
                            <option value="" selected>4 Star</option>
                            <option value="">3 Star</option>
                            <option value="">2 Star</option>
                            <option value="">1 Star</option>
                        </select>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Review <span class="text-danger">*</span></label>							
                        <textarea class="form-control">The rental was spotless, great host!</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/testimonials')}}" class="btn btn-primary">Create New</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Brand -->
    
    <!-- Delete Extra Service -->
    <div class="modal fade" id="delete_testimonials">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Testimonial</h4>
                    <p class="mb-3">Are you sure you want to delete testimonial?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Extra Service -->
@endif

@if (Route::is(['tickets']))
    <!-- Add Driver -->
    <div class="modal fade" id="add_ticket">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Ticket</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <div class="d-flex align-items-center flex-wrap row-gap-3">                                                
                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                    <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Ticket Code <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Category <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Payment Issue</option>
                                    <option>Car Not Available</option>
                                    <option>Refund Request</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Priority <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Low</option>
                                    <option>Medium</option>
                                    <option>High</option>
                                </select>
                            </div>
                        </div>   
                        <div class="col-md-6">            
                            <div class="mb-3">
                                <label class="form-label">Created Date <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description <span class="text-danger">*</span></label>
                                <div class="editor"></div>
                                <p class="mt-2">Maximum 60 Words</p>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <label class="form-label"> Document</label>
                            <div class="document-upload text-center br-3 mb-3">
                                <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                <p class="fs-12 mb-0">Maximum size 50mb</p>
                                <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Driver -->

    <!-- Delete  -->
	<div class="modal fade" id="delete_contact">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Tickets</h4>
					<p class="mb-3">Are you sure you want to delete Tickets?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/tickets')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['transmissions']))
    <!-- Add Transmission -->
    <div class="modal fade" id="add_transmission">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Transmission</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Transmission -->

    <!-- Edit Transmission -->
    <div class="modal fade" id="edit_transmission">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Transmission</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Manual">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Transmission -->
    
    <!-- Delete Transmission -->
    <div class="modal fade" id="delete_transmission">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Transmission</h4>
                    <p class="mb-3">Are you sure you want to delete transmission?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/companies-crm')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Brand -->
@endif

@if (Route::is(['types']))
    <!-- Add Type -->
    <div class="modal fade" id="add_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Type</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Type -->

    <!-- Edit Type -->
    <div class="modal fade" id="edit_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Type</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Sedan">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Type -->
    
    <!-- Delete Type -->
    <div class="modal fade" id="delete_type">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Type</h4>
                    <p class="mb-3">Are you sure you want to delete type?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Brand -->
@endif

@if (Route::is(['users']))
    <!-- Add User -->
	<div class="modal fade" id="add_user">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Create User</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">User <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Role <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Admin</option>
									<option>Manager</option>
									<option>Customer</option>
									<option>Inspector</option>
								</select>
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>  
                        <div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone" name="phone" class="form-control">
							</div>
						</div> 
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Current Password <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="pass-inputs form-control">
                                    <span class="ti toggle-passwords ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputa">
                                    <span class="ti toggle-passworda ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add User -->

    <!-- Edit User -->
	<div class="modal fade" id="edit_user">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Edit User</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 p-2 flex-shrink-0 text-dark frames">
									<img src="{{URL::asset('admin_assets/img/profiles/avatar-20.jpg')}}" class="img-fluid rounded" alt="img">
									<span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
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
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">User <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Andrew Simmons">
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Role <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>Admin</option>
									<option>Manager</option>
									<option>Customer</option>
									<option>Inspector</option>
								</select>
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="andrew@example.com">
							</div>
						</div>  
                        <div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone2" name="phone2" class="form-control" value="+1 555 123 4567">
							</div>
						</div> 
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Current Password <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="pass-inputs form-control" value="12345678">
                                    <span class="ti toggle-passwords ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputa" value="12345678">
                                    <span class="ti toggle-passworda ti-eye-off"></span>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				<div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit User -->

    <!-- Delete  -->
	<div class="modal fade" id="delete_user">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
					<i class="ti ti-trash-x fs-26"></i>
				</span>
				<h4 class="mb-1">Delete User</h4>
				<p class="mb-3">Are you sure you want to delete user?</p>
				<div class="d-flex justify-content-center">
					<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
					<a href="{{url('admin/users')}}" class="btn btn-primary">Yes, Delete</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['blog-comments']))
    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_page">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Page</h4>
                    <p class="mb-3">Are you sure you want to delete page?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/pages')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if (Route::is(['calendar']))

    <!-- Event -->
    <div class="modal fade" id="add_booking">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="d-inline-flex align-items-center">Create Booking</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="wizard-form">
                    <fieldset id="first-field">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('admin/calendar')}}">
                                    <div>
                                        <div class="modal-body pb-0">
                                            <div class="reservation-wizard mb-4">
                                                <ul class="d-flex align-items-center flex-wrap row-gap-2">
                                                    <li class="d-flex align-items-center active me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                                        <h6>Car & Dates Info</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                                        <h6>Customer</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                                        <h6>Extra Services</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                                        <h6>Billing Details</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card card-bg">
                                                <div class="card-body">
                                                    <h4 class="d-flex align-items-center"><i class="ti ti-info-circle me-2 text-secondary fs-24"></i>Basic Info</h4>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <h5 class="mb-1">Date & Time Of Travel</h5>
                                                    <p>Add Information on Date of Travel</p>
                                                </div>
                                                <div class="border-bottom mb-3 pb-3">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Tarrif</label>
                                                                <select class="select">
                                                                    <option>Weekly</option>
                                                                    <option>Daily</option>
                                                                    <option>Monthly</option>
                                                                    <option>Yearly</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Rental Type</label>
                                                                <select class="select">
                                                                    <option>Self Pickup</option>
                                                                    <option>Delivery</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">No of Passengers</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="col-xl-6">
                                                            <div class="row gx-3">
                                                                <div class="col-md-7">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Start Date <span class="text-danger"> *</span> </label>
                                                                        <div class="input-icon-end position-relative">
                                                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                                            <span class="input-icon-addon">
                                                                                <i class="ti ti-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Time <span class="text-danger"> *</span> </label>
                                                                        <div class="input-icon-end position-relative flex-fill">
                                                                            <input type="text" class="form-control timepicker" placeholder="">
                                                                            <span class="input-icon-addon">
                                                                                <i class="ti ti-clock"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="row gx-3">
                                                                <div class="col-md-7">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">End Date <span class="text-danger"> *</span> </label>
                                                                        <div class="input-icon-end position-relative">
                                                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                                            <span class="input-icon-addon">
                                                                                <i class="ti ti-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Time <span class="text-danger"> *</span> </label>
                                                                        <div class="input-icon-end position-relative">
                                                                            <input type="text" class="form-control timepicker" placeholder="">
                                                                            <span class="input-icon-addon">
                                                                                <i class="ti ti-clock"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Pickup Location <span class="text-danger">*</span></label>
                                                                <select class="select">
                                                                    <option>Select</option>
                                                                    <option>Los Angles</option>
                                                                    <option>New York City</option>
                                                                    <option>Houston</option>
                                                                    <option>Munich</option>
                                                                    <option>Montreal</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Return Location <span class="text-danger">*</span></label>
                                                                <select class="select">
                                                                    <option>Select</option>
                                                                    <option>Los Angles</option>
                                                                    <option>New York City</option>
                                                                    <option>Houston</option>
                                                                    <option>Munich</option>
                                                                    <option>Montreal</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Security Deposit </label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="d-flex align-items-center">
                                                        <input class="form-check-input m-0 me-2" type="checkbox">Return Same Location
                                                    </label>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <h5 class="mb-1">Select Vehicle</h5>
                                                            <p>Select Vehicle for your rental</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="d-flex align-items-center justify-content-end flex-wrap row-gap-3 mb-3">
                                                            <div class="dropdown me-2">
                                                                <a href="#filtercollapse2" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="filtercollapse2">
                                                                    <i class="ti ti-filter me-1"></i> Filter <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
                                                                </a>
                                                            </div>
                                                            <div class="top-search me-2">
                                                                <div class="top-search-group">
                                                                    <span class="input-icon">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                                                                    <i class="ti ti-plus me-1"></i>Add New
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="filtercollapse2">
                                                    <div class="filterbox mb-3 px-3">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-10">
                                                                <div class=" d-flex align-items-center flex-wrap row-gap-3">
                                                                    <div class="dropdown me-2">
                                                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                            Select Brand
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
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Toyota
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Honda
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Ford
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Chevrolet
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">BMW
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="dropdown me-2">
                                                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                                            Select Type
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
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Economy
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Compact
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Sedan
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">SUV
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Luxury
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="dropdown me-2">
                                                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                                            <i class="ti ti-badge me-1"></i>Select Model
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
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Urban Cruiser
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Fortuner
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">V8
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Q3
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Huracan
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                                            <i class="ti ti-badge me-1"></i>Select Color
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
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">White
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Black
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Silver
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Gray
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label class="dropdown-item d-flex align-items-center rounded-1">
                                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Blue
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    <a href="javascript:void(0);" class="me-3 text-purple links">Apply</a>
                                                                    <a href="javascript:void(0);" class="text-danger links">Clear</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="car-select">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row gy-3">
                                                                <div class="col-lg-4">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check form-check-md me-3">
                                                                            <input class="form-check-input" type="checkbox">
                                                                        </div>
                                                                        <span class="avatar flex-shrink-0 me-2">
                                                                            <img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt="">
                                                                        </span>
                                                                        <div>
                                                                            <p class="mb-0">Sedan</p>
                                                                            <h6 class="fs-14">Ford Endeavour</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <div class="row gy-3">
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Color</p>
                                                                                <h6 class="fs-14 d-inline-flex align-items-center"><i class="ti ti-square-filled text-warning me-1"></i>Yellow</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Year</p>
                                                                                <h6 class="fs-14">2003</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Price</p>
                                                                                <h6 class="fs-14">$800<span class="text-gray-5">/day</span></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="float-md-end">
                                                                        <span class="badge bg-orange-transparent d-inline-flex align-items-center badge-sm mb-1">
                                                                            <i class="ti ti-point-filled me-1"></i>Requested
                                                                        </span>
                                                                        <h6 class="fs-14">2881 Jarvis Street</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row gy-3">
                                                                <div class="col-lg-4">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check form-check-md me-3">
                                                                            <input class="form-check-input" type="checkbox">
                                                                        </div>
                                                                        <span class="avatar flex-shrink-0 me-2">
                                                                            <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt="">
                                                                        </span>
                                                                        <div>
                                                                            <p class="mb-1">Sports</p>
                                                                            <h6 class="fs-14">Ferrari 458 MM</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <div class="row gy-3">
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Color</p>
                                                                                <h6 class="fs-14 d-inline-flex align-items-center"><i class="ti ti-square-filled text-danger me-1"></i>Red</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Year</p>
                                                                                <h6 class="fs-14">2003</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Price</p>
                                                                                <h6 class="fs-14">$120<span class="text-gray-5">/day</span></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="float-md-end">
                                                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center badge-sm mb-1">
                                                                            <i class="ti ti-point-filled me-1"></i>Reserved
                                                                        </span>
                                                                        <h6 class="fs-14">2881 Jarvis Street</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row gy-3">
                                                                <div class="col-lg-4">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check form-check-md me-3">
                                                                            <input class="form-check-input" type="checkbox">
                                                                        </div>
                                                                        <span class="avatar flex-shrink-0 me-2">
                                                                            <img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt="">
                                                                        </span>
                                                                        <div>
                                                                            <p class="mb-0">Sedan</p>
                                                                            <h6 class="fs-14">Acura Sport </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <div class="row gy-3">
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Color</p>
                                                                                <h6 class="fs-14 d-inline-flex align-items-center"><i class="ti ti-square-filled text-info me-1"></i>Blue</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Year</p>
                                                                                <h6 class="fs-14">2003</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div>
                                                                                <p class="mb-1">Price</p>
                                                                                <h6 class="fs-14">$60<span class="text-gray-5">/day</span></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="float-md-end">
                                                                        <span class="badge bg-success-transparent d-inline-flex align-items-center badge-sm mb-1">
                                                                            <i class="ti ti-point-filled me-1"></i>Available
                                                                        </span>
                                                                        <h6 class="fs-14">2881 Jarvis Street</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div>
                                                    <button class="btn btn-light me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Cancel</button>
                                                </div> 
                                                <div>
                                                    <button class="btn btn-primary wizard-next-btn" type="button">Add Customer <i class="ti ti-chevron-right ms-1"></i></button>
                                                </div>  
                                            </div> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('admin/calendar')}}">
                                    <div>
                                        <div class="modal-body pb-0">
                                            <div class="reservation-wizard mb-4">
                                                <ul class="d-flex align-items-center flex-wrap row-gap-2">
                                                    <li class="d-flex align-items-center activated me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                                        <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                                        <h6>Car & Dates Info</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center active me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                                        <h6>Customer</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                                        <h6>Extra Services</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                                        <h6>Billing Details</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card card-bg">
                                                <div class="card-body">
                                                    <h4 class="d-flex align-items-center"><i class="ti ti-user-check me-2 text-secondary fs-24"></i>Customer</h4>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3">
                                                <div class="mb-3">
                                                    <h6 class="mb-1">Select Customer </h6>
                                                    <p>Add Information of Customer</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Customer <span class="text-danger">*</span></label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-fill ">
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Andrew Simons</option>
                                                                <option>David Steiger</option>
                                                                <option>Darin Mabry</option>
                                                                <option>Mark Neiman</option>
                                                            </select>
                                                        </div>
                                                        <div class="ms-4">
                                                            <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                                                                <i class="ti ti-plus me-1"></i>Add New
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card bg-light">
                                                    <div class="card-body">
                                                        <div class="row align-items-center gy-3">
                                                            <div class="col-md-11">
                                                                <div class="row gx-2 gy-3">
                                                                    <div class="col-md-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="avatar avatar-rounded flex-shrink-0 me-2">
                                                                                <img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" alt="">
                                                                            </span>
                                                                            <div>
                                                                                <h6 class="fs-14 mb-1">Andrew Simons</h6>
                                                                                <span class="badge bg-info-transparent">15 Bookings</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div>
                                                                            <h6 class="fs-14 mb-1">Phone</h6>
                                                                            <p>+1 58514 45546</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div>
                                                                            <h6 class="fs-14 mb-1">Email</h6>
                                                                            <p>andrew34@example.com</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    <a href="javascript:void(0);" class="me-2"><i class="ti ti-eye"></i></a>
                                                                    <a href="javascript:void(0);"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <h6 class="mb-1">Select Driver </h6>
                                                    <p>Add Information of Driver</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Driver <span class="text-danger">*</span></label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-fill ">
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Reuben Keen</option>
                                                                <option>William Jones</option>
                                                                <option>Leonard Jandreau</option>
                                                                <option>Adam Bolden</option>
                                                            </select>
                                                        </div>
                                                        <div class="ms-4">
                                                            <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                                                                <i class="ti ti-plus me-1"></i>Add New
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-end mb-3">
                                                    <a href="javascript:void(0);" class="text-purple text-decoration-underline fw-medium" data-bs-toggle="modal" data-bs-target="#edit_price">Edit Price</a>
                                                </div>
                                                <div class="card bg-light">
                                                    <div class="card-body">
                                                        <div class="row align-items-center gy-3">
                                                            <div class="col-md-11">
                                                                <div class="row gx-2 gy-3">
                                                                    <div class="col-md-5">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="form-check form-check-md me-3">
                                                                                <input class="form-check-input" type="checkbox">
                                                                            </div>
                                                                            <span class="avatar avatar-rounded flex-shrink-0 me-2">
                                                                                <img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt="">
                                                                            </span>
                                                                            <div>
                                                                                <h6 class="fs-14 mb-1">Reuben Keen</h6>
                                                                                <span class="badge bg-violet-transparent">50 Rides</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div>
                                                                            <h6 class="fs-14 mb-1">Phone</h6>
                                                                            <p>+1 58514 45546</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div>
                                                                            <h6 class="fs-14 mb-1">Price</h6>
                                                                            <p>$18 </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    <a href="javascript:void(0);" class="me-2"><i class="ti ti-eye"></i></a>
                                                                    <a href="javascript:void(0);"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="field-btns">
                                                    <button class="btn btn-light wizard-prev-btn me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                                </div> 
                                                <div class="field-btns">
                                                    <button class="btn btn-primary wizard-next-btn" type="button">Add Extra Services<i class="ti ti-chevron-right ms-1"></i></button>
                                                </div>  
                                            </div> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('admin/calendar')}}">
                                    <div>
                                        <div class="modal-body pb-0">
                                            <div class="reservation-wizard mb-4">
                                                <ul class="d-flex align-items-center flex-wrap row-gap-2">
                                                    <li class="d-flex align-items-center activated me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                                        <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                                        <h6>Car & Dates Info</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center activated  me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                                        <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                                        <h6>Customer</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center active me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                                        <h6>Extra Services</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                                        <h6>Billing Details</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card card-bg">
                                                <div class="card-body">
                                                    <h4 class="d-flex align-items-center"><i class="ti ti-float-center me-2 text-secondary fs-24"></i>Extra Service</h4>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3">
                                                <div class="mb-3">
                                                    <h6 class="mb-1">Select Extra Services</h6>
                                                    <p>Add extra services for your rental</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox active">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-1" checked>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-1">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Navigation</span>
                                                                <span class="d-block">Using GPS while travel</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-2">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-2">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Wi-Fi Hotspot</span>
                                                                <span class="d-block">Constant portable internet</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-3">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-3">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Fuel Pre-Purchase</span>
                                                                <span class="d-block">Full tank, return hassle-free</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">One Time</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-4">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-4">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Satellite Radio</span>
                                                                <span class="d-block"> Unlimited premium music</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-5">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-5">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">USB Charger</span>
                                                                <span class="d-block">Fast charging for devices</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-6">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-6">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Toll Pass</span>
                                                                <span class="d-block">Skip toll booth lines</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">One Time</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-7">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-7">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Dash Cam</span>
                                                                <span class="d-block">Records trips extra security</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-8">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-8">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Express Check-in/out</span>
                                                                <span class="d-block">Fast pickup & return process</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox active">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-9" checked>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-9">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Child Safety Seats</span>
                                                                <span class="d-block">Secure infant/toddler car seat</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-checkbox">
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="custom-check-10">
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-check-label ms-2 ps-4" for="custom-check-10">
                                                                <span class="fw-semibold text-gray-9 d-block mb-1">Roadside Assistance</span>
                                                                <span class="d-block">24/7 emergency car support</span>
                                                            </label>
                                                            <div class="text-end">
                                                                <p class="mb-1">Per Day</p>
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="field-btns">
                                                    <button class="btn btn-light wizard-prev-btn me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                                </div> 
                                                <div class="field-btns">
                                                    <button class="btn btn-primary wizard-next-btn" type="button">Add Extra Services<i class="ti ti-chevron-right ms-1"></i></button>
                                                </div>  
                                            </div> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('admin/calendar')}}">
                                    <div>
                                        <div class="modal-body pb-0">
                                            <div class="reservation-wizard mb-4">
                                                <ul class="d-flex align-items-center flex-wrap row-gap-2">
                                                    <li class="d-flex align-items-center activated me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-calendar"></i></span>
                                                        <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                                        <h6>Car & Dates Info</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center activated  me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-user-check"></i></span>
                                                        <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                                        <h6>Customer</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center activated me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-float-center"></i></span>
                                                        <span class="active-check me-2"><i class="ti ti-check"></i></span>
                                                        <h6>Extra Services</h6>
                                                    </li>
                                                    <li class="d-flex align-items-center active me-2">
                                                        <span class="me-2 wizard-icon"><i class="ti ti-file-invoice"></i></span>
                                                        <h6>Billing Details</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card card-bg">
                                                <div class="card-body">
                                                    <h4 class="d-flex align-items-center"><i class="ti ti-file-invoice me-2 text-secondary fs-24"></i>Billing Details</h4>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3">
                                                <div class="mb-3">
                                                    <h6 class="mb-1">Rent & Service Billing</h6>
                                                    <p>Add extra services for your rental</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <label class="form-label">Base Kilometers (Per Day)</label>
                                                                <label class="d-flex align-items-center">
                                                                    <input class="form-check-input m-0 me-2" type="checkbox">Unlimited
                                                                </label>
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Kilometers Extra Price </label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div>
                                                        <h6 class="mb-1">Insurance</h6>
                                                        <p>Add Insurance of Your Ride</p>
                                                    </div>
                                                    <div class="form-check form-check-md form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="switch-sm">
                                                        <label class="form-check-label mt-0" for="switch-sm">Enable</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-checkbox active">
                                                            <div class="form-check form-check-md">
                                                                <input class="form-check-input" type="checkbox" id="custom-check-11" checked>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label ms-2 ps-4" for="custom-check-11">
                                                                    <span class="fw-semibold text-gray-9 d-block mb-1">Full Premium Insurance</span>
                                                                    <span class="d-block text-info">+4 Benefits<i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i></span>
                                                                </label>
                                                                <div class="text-end">
                                                                    <p class="mb-1">Onetime Ride</p>
                                                                    <h6>$200</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-checkbox">
                                                            <div class="form-check form-check-md">
                                                                <input class="form-check-input" type="checkbox" id="custom-check-12">
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label ms-2 ps-4" for="custom-check-12">
                                                                    <span class="fw-semibold text-gray-9 d-block mb-1">Satellite Radio</span>
                                                                    <span class="d-block text-info">+6 Benefits<i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Quick assistance for unexpected breakdowns"></i></span>
                                                                </label>
                                                                <div class="text-end">
                                                                    <p class="mb-1">Onetime Ride</p>
                                                                    <h6>$250</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="field-btns">
                                                    <button class="btn btn-light wizard-prev-btn me-2" type="button"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                                </div> 
                                                <div class="field-btns">
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#reservation_completed">Finish & Save<i class="ti ti-chevron-right ms-1"></i></button>
                                                </div>  
                                            </div> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- /Event -->

    <!-- Completed -->
    <div class="modal fade" id="reservation_completed">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{url('admin/reservation-details')}}">
                        <span class="avatar avatar-lg bg-transparent-success rounded-circle text-success mb-3">
                            <i class="ti ti-check fs-26"></i>
                        </span>
                        <h4 class="mb-1">Created Successful</h4>
                        <p class="mb-3">Reservation created for the <span class="text-gray-9">“Ford Fiesta” </span> on <span class="text-gray-9">“24 Feb 2025”</span></p>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-100">View Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Completed -->

    <!-- Event -->
    <div class="modal fade" id="event_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="d-inline-flex align-items-center">Booking Details<a href="javascript:void(0);" class="ms-2"><i class="ti ti-edit"></i></a></h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="border-bottom mb-3">
                        <div class="border rounded p-3 bg-light mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar flex-shrink-0 me-2">
                                            <img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt="">
                                        </span>
                                        <div>
                                            <h6 class="fs-14 mb-1">Ford Endeavour</h6>
                                            <p>Sedan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div>
                                        <h6 class="fs-14 mb-1">Price</h6>
                                        <p class="fs-14 text-gray-9">$60<span class="text-gray-5 fw-normal">/day</span></p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div>
                                        <h6 class="fs-14 mb-1">Status</h6>
                                        <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Completed
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-medium fs-14">Start Date</h6>
                            <p>10 Feb 2025, 12:00 PM</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-medium fs-14">End Date</h6>
                            <p>11 Feb 2025, 01:00 PM</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-medium fs-14">Rental Period</h6>
                            <p>2 Days</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-medium fs-14">Driving Type</h6>
                            <p>Self</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-medium fs-14">Pickup Location</h6>
                            <p>2nd Avenue, Lasvegas</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-medium fs-14">Return Location</h6>
                            <p>4th Street, Newyork</p>
                        </div>
                    </div>
                    <div class="border-bottom mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="mb-3">
                                <h6 class="d-inline-flex align-items-center fs-14 fw-medium ">Customer</h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <span class="avatar avatar-rounded flex-shrink-0 me-2">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt="">
                                </span>
                                <div>
                                    <h6 class="fs-14 fw-medium mb-1">Andrew Simons</h6>
                                    <p>+1 56598 98956</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="mb-3">
                                <h6 class="d-inline-flex align-items-center fs-14 fw-medium ">Driver</h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <span class="avatar avatar-rounded flex-shrink-0 me-2">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt="">
                                </span>
                                <div>
                                    <h6 class="fs-14 fw-medium mb-1">Reuben Keen</h6>
                                    <p>+1 56598 98956</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6>Total Price</h6>
                        <h6>$120</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Event -->

@endif

@if (Route::is(['car-details']))
    <!-- Add New Tarrif -->
    <div class="offcanvas offcanvas-end offsetcanvas" data-bs-backdrop="false" tabindex="-1" id="add-tarrif">
        <div class="offcanvas-header border-bottom">
            <h5>Add New Tarrif</h5>
            <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ti ti-x"></i>
            </button>
        </div>
        <form action="{{url('admin/add-car')}}" class="d-flex flex-column justify-content-between canvas-height">
            <div class="offcanvas-body pb-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tariff Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Daily Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">From Days <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">To Days <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="form-label">Base Kilometers (Per Day) <span class="text-danger">*</span></label>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"  id="unlimited1">
                                    <label class="form-check-label" for="unlimited1">
                                        Unlimited
                                    </label>
                                </div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Kilometers Extra Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer">
                <div class="d-flex align-items-center justify-content-end">
                    <button type="button" class="btn btn-light me-2">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Tarrif</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /Add New Tarrif -->

    <!-- Edit Tarrif -->
    <div class="offcanvas offcanvas-end offsetcanvas" data-bs-backdrop="false" tabindex="-1" id="edit-tarrif">
        <div class="offcanvas-header border-bottom">
            <h5>Edit Tarrif</h5>
            <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ti ti-x"></i>
            </button>
        </div>
        <form action="{{url('admin/add-car')}}" class="d-flex flex-column justify-content-between canvas-height">
            <div class="offcanvas-body pb-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tariff Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="4 to 5 days">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Daily Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="50">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">From Days <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="4">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">To Days <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="5">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="form-label">Base Kilometers (Per Day) <span class="text-danger">*</span></label>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"  id="unlimited2">
                                    <label class="form-check-label" for="unlimited2">
                                        Unlimited
                                    </label>
                                </div>
                            </div>
                            <input type="text" class="form-control" value="100">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Kilometers Extra Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="50">
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer">
                <div class="d-flex align-items-center justify-content-end">
                    <button type="button" class="btn btn-light me-2">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /Edit Tarrif -->

    <!-- Delete Tarrif -->
    <div class="modal fade" id="delete_tarrif">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Tarrif</h4>
                    <p class="mb-3">Are you sure you want to delete Tarrif?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/car-details')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Damage -->

    <!-- Add Brand -->
    <div class="modal fade" id="add_brand">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Brand</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Brand Image <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                    <div class="mb-3">
                        <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total Cars <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Brand -->

    <!-- Create Seasonal Pricing -->
    <div class="modal fade" id="add_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control input-tags" data-role="tagsinput" value="Winter">
                                </div>   
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create Seasonal Pricing -->

    <!-- Edit Seasonal Pricing -->
    <div class="modal fade" id="edit_seasonal_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control input-tags" data-role="tagsinput" value="Winter">
                                </div>   
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="28-01-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-02-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="50">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="100">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="150">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="200">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Seasonal Pricing -->

    <!-- Delete Pricing -->
    <div class="modal fade" id="delete_price">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Pricing</h4>
                    <p class="mb-3">Are you sure you want to delete Pricing?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/car-details')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Pricing -->

    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <table class="table custom-table1">
                            <thead class="thead-white">
                                <tr>
                                    <th class="py-0">Extra Features</th>
                                    <th class="py-0">Pricing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-gray-9">Navigation</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="90">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>	
                                <tr>
                                    <td class="fw-medium text-gray-9">Satellite Radio</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="25">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="47">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Express Check-in/out</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="75">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Child Safety Seats</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="22">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="48">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>								
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->

    <!-- Add New Damage -->
    <div class="modal fade" id="add-damage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Add New Damage</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Damage Location <span class="text-danger">*</span></label>	
                            <select class="select">
                                <option>Select</option>
                                <option>Scratch</option>
                                <option>Dashboard Damage</option>
                                <option>Electrical Issues</option>
                            </select>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Damage Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option>Interior</option>
                                <option>Exterior</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Damage -->

    <!-- Edit Damage -->
    <div class="modal fade" id="edit-damage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Damage</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Damage Location <span class="text-danger">*</span></label>	
                            <select class="select">
                                <option>Select</option>
                                <option selected>Scratch</option>
                                <option>Dashboard Damage</option>
                                <option>Electrical Issues</option>
                            </select>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Damage Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Interior</option>
                                <option>Exterior</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3">Cracks, scratches, or faded surfaces due to heat exposure.</textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Damage -->

    <!-- Delete Damage -->
    <div class="modal fade" id="delete_damage">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Damage</h4>
                    <p class="mb-3">Are you sure you want to delete Damage?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/car-details')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Damage -->

    <!-- Create FAQ -->
    <div class="modal fade" id="add-faq">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create FAQ</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Question <span class="text-danger">*</span></label>	
                            <input type="text" class="form-control">
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Answer <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create FAQ -->
@endif

@if(Route::is(['city']))
    <!-- Add city -->
    <div class="modal fade" id="add_city">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add City</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">City Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">State Name <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option>California</option>
                            <option>New York</option>
                            <option>Texas</option>
                            <option>Baveria</option>
                        </select>
                    </div>  
                    <div class="mb-3">
                        <label class="form-label">Country Name <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option>United States</option>
                            <option>Germany</option>
                            <option>Canada</option>
                            <option>Australia</option>
                        </select>
                    </div>  
                
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/city')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add city -->

    <!-- Edit city -->
    <div class="modal fade" id="edit_city">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Edit City</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">City Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Los Angles">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">State Name <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option selected>California</option>
                            <option>New York</option>
                            <option>Texas</option>
                            <option>Baveria</option>
                        </select>
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Country Name <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option selected>United States</option>
                            <option>Germany</option>
                            <option>Canada</option>
                            <option>Australia</option>
                        </select>
                    </div> 
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/city')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit city -->
    
    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_city">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete City</h4>
                    <p class="mb-3">Are you sure you want to delete City?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/city')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if(Route::is(['color']))
    <!-- Add Color -->
    <div class="modal fade" id="add_color">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Color</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Value <span class="text-danger">*</span></label>
                        <div class="colorbox-container">
                            <input type="color" class="colorbox" name="color" value="#bada55"> 
                            <input type="text" class="form-control colorhex" id="hexcolor" value="#bada55">
                        </div>							
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Color -->

    <!-- Edit Color -->
    <div class="modal fade" id="edit_color">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Color</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Red">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Value <span class="text-danger">*</span></label>
                        <div class="colorbox-container">
                            <input type="color" class="colorbox" name="color" value="#bada55"> 
                            <input type="text" class="form-control colorhex" id="hexcolor1" value="#bada55">
                        </div>							
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Color -->
    
    <!-- Delete Color -->
    <div class="modal fade" id="delete_color">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Color</h4>
                    <p class="mb-3">Are you sure you want to delete color?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Color -->
@endif

@if(Route::is(['company-details']))
    <!-- Edit Company -->
    <div class="modal fade addmodal" id="edit_company">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Company</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 p-2 flex-shrink-0 text-dark frames">
                                    <img src="{{URL::asset('admin_assets/img/companies/Toyota.jpg')}}" class="img-fluid rounded" alt="img">
                                    <span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="TechNova Solutions">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Contact Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="Andrew Simons">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" id="phone2" name="phone2" class="form-control" value="+1 56598 98956">
                            </div>
                        </div>            
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="andr72@example.com">
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Language <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>English</option>
                                    <option>German</option>
                                    <option>Frence</option>
                                </select>
                            </div>
                        </div>          
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Website <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="https://www.example.com">
                            </div>
                        </div>   
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="2881 Jarvis Street">
                            </div>
                        </div>   
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <label class="form-label"> Document</label>
                            <div class="document-upload text-center br-3 mb-3">
                                <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                <p class="fs-12 mb-0">Maximum size 50mb</p>
                                <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Company -->
@endif

@if(Route::is(['contact-messages']))
    <!-- Delete  -->
    <div class="modal fade" id="delete_contact">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{url('admin/contact-messages')}}">
                        <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                            <i class="ti ti-trash-x fs-26"></i>
                        </span>
                        <h4 class="mb-1">Delete Message</h4>
                        <p class="mb-3">Are you sure you want to delete message?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Yes, Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete -->
@endif

@if (Route::is(['countries']))
    <!-- Add countries -->
    <div class="modal fade" id="add_countries">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Country</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Country Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Country Code <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>  					
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/countries')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add countries -->

    <!-- Edit countries -->
    <div class="modal fade" id="edit_country">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Country</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Country Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="United States">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Country Code <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="US">
                    </div> 
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/countries')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit countries -->     

    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_country">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Country</h4>
                    <p class="mb-3">Are you sure you want to delete Country?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/countries')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if(Route::is(['coupons']))
    <!-- Add Coupons -->
    <div class="modal fade" id="add_coupons">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Coupon</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Coupon Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Coupon Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Type <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Percentage</option>
                                    <option>Fixed</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Discount Value <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Start Date <span class="text-danger"> *</span> </label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">End Date <span class="text-danger"> *</span> </label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Applicable To <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>New Customers</option>
                                    <option>Weekly Rentals</option>
                                    <option>VIP Members</option>
                                    <option>Luxury Cars</option>
                                    <option>Long Rentals</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Limit <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                                <span class="text-gray-5 fs-13 mt-1">Enter 0 for unlimited</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-0">
                                <label class="form-label">Description </label>
                                <div class="editor"></div>
                                <p class="mt-2 fs-14">Maximum 60 Words</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Coupons -->

    <!-- Edit Coupons -->
    <div class="modal fade" id="edit_coupons">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Coupon</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Coupon Name <span class="text-danger">*</span></label>
                                <input type="text" value="Summer Sale 2025" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Coupon Code <span class="text-danger">*</span></label>
                                <input type="text" value="SUMMER2024" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Type <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Percentage</option>
                                    <option>Fixed</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Discount Value <span class="text-danger">*</span></label>
                                <input type="text" value="25%" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Start Date <span class="text-danger"> *</span> </label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">End Date <span class="text-danger"> *</span> </label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Applicable To <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>New Customers</option>
                                    <option>Weekly Rentals</option>
                                    <option>VIP Members</option>
                                    <option>Luxury Cars</option>
                                    <option>Long Rentals</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Limit <span class="text-danger">*</span></label>
                                <input type="text" value="15" class="form-control">
                                <span class="text-gray-5 fs-13 mt-1">Enter 0 for unlimited</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-0">
                                <label class="form-label">Description </label>
                                <div class="editor">20% off on all rentals in January to March.</div>
                                <p class="mt-2 fs-14">Maximum 60 Words</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Coupons -->

    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_coupons">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Coupon</h4>
                    <p class="mb-3">Are you sure you want to delete Coupon?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Delete Modal-->
@endif

@if (Route::is(['currencies']))
    <!-- Add Currency -->
    <div class="modal fade" id="add_currency">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Currency</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Currency Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Exchange Rate <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>     
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Symbol <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/currencies')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Currency -->

    <!-- Edit Currency -->
    <div class="modal fade" id="edit_currencies">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Edit Currency</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Currency Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Dhirams">
                    </div>                     
                    <div class="mb-3">
                        <label class="form-label">Exchange Rate <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="3.67">
                    </div>                     
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="AED">
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Symbol <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="د.إ">
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/currencies')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Currency -->

    <!-- Delete Currency  -->
    <div class="modal fade" id="delete_currency">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Currency</h4>
                    <p class="mb-3">Are you sure you want to delete currency?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/currencies')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Currency -->
@endif

@if (Route::is(['customer-details']))
    <!-- Edit Client -->
    <div class="modal fade" id="edit_client">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Edit Client</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <div class="d-flex align-items-center flex-wrap row-gap-3">                                                
                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames p-2">
                                    <img src="{{URL::asset('admin_assets/img/customer/customer-11.jpg')}}" class="img-fluid rounded" alt="img">
                                    <span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
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
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Client Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="Andrew Simons">
                            </div>
                        </div>  
                        <div class="col-md-4">            
                            <div class="mb-3">
                                <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="24 Jan 1995">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>     
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>            
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Language <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>English</option>
                                    <option>German</option>
                                    <option>Frence</option>
                                </select>
                            </div>
                        </div>            
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="phone2" name="phone2" value="+56598 98956 ">
                            </div>
                        </div>            
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="andr72@example.com">
                            </div>
                        </div>            
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="2881 Jarvis Street">
                            </div>
                        </div>   
                        <h6 class="fs-16 fw-medium mb-2">License Details</h6>     
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Card Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="DL123456789">
                            </div>
                        </div>  
                        <div class="col-md-4">            
                            <div class="mb-3">
                                <label class="form-label">Date of Issue <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="03 Feb 2014">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-4">            
                            <div class="mb-3">
                                <label class="form-label">Valid Date <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="02 Feb 2034">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <label class="form-label"> Document</label>
                            <div class="document-upload text-center br-3 mb-3">
                                <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                <p class="fs-12 mb-0">Maximum size 50mb</p>
                                <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Client -->
@endif

@if (Route::is(['customers']))
	<!-- Add Client -->
	<div class="modal fade" id="add_client">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Create Client</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Client Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Birth <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Gender <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>English</option>
									<option>German</option>
									<option>Frence</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="phone" name="phone">
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>            
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
						<h6 class="fs-16 fw-medium mb-2">License Details</h6>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Card Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Issue <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>    
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Valid Date <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>  
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Client -->

	<!-- Edit Client -->
	<div class="modal fade" id="edit_client">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Edit Client</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames p-2">
									<img src="{{URL::asset('admin_assets/img/customer/customer-11.jpg')}}" class="img-fluid rounded" alt="img">
									<span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
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
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Client Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Andrew Simons">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Birth <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="24 Jan 1995">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Gender <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>English</option>
									<option>German</option>
									<option>Frence</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input class="form-control" type="text" id="phone2" name="phone2" value="+56598 98956 ">
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="andr72@example.com">
							</div>
						</div>            
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="2881 Jarvis Street">
							</div>
						</div>   
						<h6 class="fs-16 fw-medium mb-2">License Details</h6>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Card Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="DL123456789">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Issue <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="03 Feb 2014">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>    
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Valid Date <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="02 Feb 2034">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>  
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Client -->

	<!-- Delete Tarrif -->
	<div class="modal fade" id="delete_modal">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Client</h4>
					<p class="mb-3">Are you sure you want to delete Client?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/customers')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Damage -->
@endif

@if (Route::is(['customers-companies']))
	<!-- Add Company -->
	<div class="modal fade" id="add_company">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Create Company</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Company Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Contact Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone" name="phone" class="form-control">
							</div>
						</div>            
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
                        <div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>English</option>
									<option>German</option>
									<option>Frence</option>
								</select>
							</div>
						</div>          
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Website <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Notes</label>
								<textarea class="form-control"></textarea>
							</div>
						</div>    
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Company -->

	<!-- Edit Company -->
	<div class="modal fade" id="edit_company">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Edit Company</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 p-2 flex-shrink-0 text-dark frames">
									<img src="{{URL::asset('admin_assets/img/companies/Toyota.jpg')}}" class="img-fluid rounded" alt="img">
									<span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
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
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Company Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="TechNova Solutions">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Contact Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Andrew Simons">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone2" name="phone2" class="form-control" value="+1 56598 98956">
							</div>
						</div>            
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="andr72@example.com">
							</div>
						</div>   
                        <div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>English</option>
									<option>German</option>
									<option>Frence</option>
								</select>
							</div>
						</div>          
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Website <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="https://www.example.com">
							</div>
						</div>   
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="2881 Jarvis Street">
							</div>
						</div>   
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Notes</label>
								<textarea class="form-control"></textarea>
							</div>
						</div>    
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Company -->

	<!-- Delete  -->
	<div class="modal fade" id="delete_modal">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Client</h4>
					<p class="mb-3">Are you sure you want to delete Client?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/customers-companies')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if (Route::is(['cylinders']))
    <!-- Add Cylinder Type -->
    <div class="modal fade" id="add_cylinder_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Cylinder Type</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Cylinder Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Cylinder Type -->

    <!-- Edit Cylinder Type -->
    <div class="modal fade" id="edit_cylinder_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Cylinder Type</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Cylinder Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="V-Type Cylinders">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Cylinder Type -->
    
    <!-- Delete Cylinder Type -->
    <div class="modal fade" id="delete_cylinder_type">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Cylinder Type</h4>
                    <p class="mb-3">Are you sure you want to cylinder type?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Cylinder Type -->
@endif

@if (Route::is(['database-backup']))
    <!-- Generate  -->
    <div class="modal fade deletemodal" id="generate">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{url('admin/system-backup')}}">
                        <span class="avatar avatar-lg bg-primary-transparent rounded-circle text-primary mb-3">
                            <i class="ti ti-folders fs-26"></i>
                        </span>
                        <h4 class="mb-1">Generate Backup</h4>
                        <p class="mb-3">Are you sure you want to generate database backup?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Generate -->

    <!-- Delete  -->
    <div class="modal fade deletemodal" id="delete_backup">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{url('admin/system-backup')}}">
                        <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                            <i class="ti ti-trash-x fs-26"></i>
                        </span>
                        <h4 class="mb-1">Delete Backup</h4>
                        <p class="mb-3">Are you sure you want to delete backup?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Yes, Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete -->
@endif

@if (Route::is(['doors']))
    <!-- Add Door Type -->
    <div class="modal fade" id="add_door_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Door Type</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Door Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Door Type -->

    <!-- Edit Door Type -->
    <div class="modal fade" id="edit_door_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Door Type</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Door Type <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="2 Doors">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Door Type -->
    
    <!-- Delete Door Type -->
    <div class="modal fade" id="delete_door_type">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Door Type</h4>
                    <p class="mb-3">Are you sure you want to door type?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Door Type -->
@endif

@if (Route::is(['drivers']))
    <!-- Add Driver -->
	<div class="modal fade" id="add_driver">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Create Driver</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Driver Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Gender <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone" name="phone" class="form-control">
							</div>
						</div>            
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
                        <h6 class="fs-16 fw-medium mb-2">License Details</h6>   
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Card Number <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
                        <div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Issue <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>    
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Valid Date <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>  
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Driver -->

	<!-- Edit Driver -->
	<div class="modal fade" id="edit_driver">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Edit Driver</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 p-2 flex-shrink-0 text-dark frames">
									<img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" class="img-fluid rounded" alt="img">
									<span class="avatar-badge bg-light text-danger m-1"><i class="ti ti-trash"></i></span>
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
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Driver Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Reuben Keen">
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Gender <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>  
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" id="phone2" name="phone2" class="form-control" value="+1 56598 98956">
							</div>
						</div>            
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="reuben@example.com">
							</div>
						</div>  
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="2881 Jarvis Street">
							</div>
						</div>   
                        <h6 class="fs-16 fw-medium mb-2">License Details</h6>   
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Card Number <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="DL123456789">
							</div>
						</div>   
                        <div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Issue <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="03 Feb 2014">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>    
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Valid Date <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="02 Feb 2034">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>  
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Driver -->

	<!-- Delete  -->
	<div class="modal fade" id="delete_driver">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<div class="modal-body text-center">
					<span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
						<i class="ti ti-trash-x fs-26"></i>
					</span>
					<h4 class="mb-1">Delete Driver</h4>
					<p class="mb-3">Are you sure you want to delete Driver?</p>
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<a href="{{url('admin/drivers')}}" class="btn btn-primary">Yes, Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete -->
@endif

@if(Route::is(['edit-car']))
    <!-- Add New Tarrif -->
    <div class="modal fade" id="add-tarrif">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Add New Tarrif</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Tariff Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Daily Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">From Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">To Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Base Kilometers (Per Day) <span class="text-danger">*</span></label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox"  id="unlimited1">
                                            <label class="form-check-label" for="unlimited1">
                                                Unlimited
                                            </label>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Kilometers Extra Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create Tarrif</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Tarrif -->

    <!-- Edit Tarrif -->
    <div class="modal fade" id="edit-tarrif">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Tarrif</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Tariff Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="4 to 5 days">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Daily Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="50">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">From Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">To Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="5">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Base Kilometers (Per Day) <span class="text-danger">*</span></label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox"  id="unlimited2">
                                            <label class="form-check-label" for="unlimited2">
                                                Unlimited
                                            </label>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" value="100">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Kilometers Extra Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Tarrif -->

    <!-- Delete Tarrif -->
    <div class="modal fade" id="delete_tarrif">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Tarrif</h4>
                    <p class="mb-3">Are you sure you want to delete Tarrif?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/edit-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Damage -->

    <!-- Add Brand -->
    <div class="modal fade" id="add_brand">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Brand</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Brand Image <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                    <div class="mb-3">
                        <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total Cars <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Brand -->

    <!-- Add Type -->
    <div class="modal fade" id="add_type">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Type</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Image <span class="text-danger">*</span></label>
                        <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Type -->

    <!-- Add Model -->
    <div class="modal fade" id="add_model">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Model</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Model <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">							
                    </div>                  
                    <div class="mb-3">
                        <label class="form-label">Brand <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Select</option>
                            <option>Toyota</option>
                            <option>Audi</option>
                            <option>Lamborghini</option>
                        </select>
                    </div>                  
                    <div class="mb-3">
                        <label class="form-label">Total Cars <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Model -->

    <!-- Create Seasonal Pricing -->
    <div class="modal fade" id="add_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control">
                                </div>   
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create Seasonal Pricing -->

    <!-- Select Seasonal Pricing -->
    <div class="modal fade" id="select_price">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Halloween<span class="badge bg-secondary-transparent ms-2">01 Oct 2025 - 31 Oct 2025 </span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$200</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1400</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$4800</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$200</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Easter<span class="badge bg-secondary-transparent ms-2">01 Apr 2025 - 30 Apr 2025 </span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$220</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1540</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$6600</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$250</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">New Year<span class="badge bg-secondary-transparent ms-2">01 Jan 2025 - 15 Jan 2025</span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$240</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1680</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$6720</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$150</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Christmas<span class="badge bg-secondary-transparent ms-2">01 Dec 2024 - 31 Dec 2025</span></h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$250</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1750</span></p>
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$7000</span></p>
                                    <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$300</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Select Seasonal Pricing -->

    <!-- Select Seasonal Pricing -->
    <div class="modal fade" id="select_insurance">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Insurance</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Full Premium Insurance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$200</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">4</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div> 
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Roadside Assistance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$250</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">6</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Liability Insurance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$150</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">4</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                            <div>
                                <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Personal Accident Insurance</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$300</span></p>
                                    <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">5</span>
                                        <i class="ti ti-info-circle-filled text-gray-5 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="No additional charges for emergency roadside services"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center icon-list delivery-add">
                                <a href="javascript:void(0);"><i class="ti ti-plus plus-active"></i><i class="ti ti-check check-active"></i></a>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Select Seasonal Pricing -->

    <!-- Edit Insurance -->
    <div class="modal fade" id="edit_insurance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Insurance</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Insurane Name <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="Full Premium Insurance">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price Type <span class="text-danger"> *</span></label>
                            <div class="d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm" checked>
                                    <label class="form-check-label" for="Radio-sm">
                                        Daily
                                    </label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm2">
                                    <label class="form-check-label" for="Radio-sm2">
                                        Fixed
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio" id="Radio-sm3">
                                    <label class="form-check-label" for="Radio-sm3">
                                        Percentage
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price <span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" value="$200">
                        </div>
                        <div class="add-insurance-benifit-2">
                            <div class="mb-1">
                                <label class="form-label">Benefit <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" value="No additional charges for emergency roadside services.">
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="d-inline-flex align-items-center text-info add-new-benifit-2"><i class="ti ti-plus me-1"></i>Add New</a>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>		
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit  Insurance -->

    <!-- Edit Seasonal Pricing -->
    <div class="modal fade" id="edit_seasonal_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Seasonal Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Season Name <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control" value="Halloween">
                                </div>   
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="28-01-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">            
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-02-2025">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Daily Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="50">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Weekly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="100">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Monthly Rate <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="150">
                                </div>
                            </div>
                            <div class="col-md-6">            
                                <div class="mb-3">
                                    <label class="form-label">Late Fees <span class="text-danger">*</span></label>	
                                    <input type="text" class="form-control " value="200">
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Seasonal Pricing -->

    <!-- Delete Pricing -->
    <div class="modal fade" id="delete_price">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Pricing</h4>
                    <p class="mb-3">Are you sure you want to delete Pricing?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/edit-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Pricing -->

    <!-- Delete Insurance -->
    <div class="modal fade" id="delete_insurance">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Insurance</h4>
                    <p class="mb-3">Are you sure you want to delete Insurance?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/edit-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Insurance -->

    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <table class="table custom-table1">
                            <thead class="thead-white">
                                <tr>
                                    <th class="py-0">Extra Features</th>
                                    <th class="py-0">Pricing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-gray-9">Navigation</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="90">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>	
                                <tr>
                                    <td class="fw-medium text-gray-9">Satellite Radio</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="25">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="47">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Express Check-in/out</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="75">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Child Safety Seats</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="22">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="48">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>								
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->

    <!-- Add New Damage -->
    <div class="modal fade" id="add-damage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Add New Damage</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Damage Location <span class="text-danger">*</span></label>	
                            <select class="select">
                                <option>Select</option>
                                <option>Interior</option>
                                <option>Exterior</option>
                            </select>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Damage Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option>Scratch</option>
                                <option>Dent</option>
                                <option>Crack</option>
                                <option>Clip</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add New Damage -->

    <!-- Edit Damage -->
    <div class="modal fade" id="edit-damage">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Damage</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Damage Location <span class="text-danger">*</span></label>	
                            <select class="select">
                                <option>Select</option>
                                <option selected>Interior</option>
                                <option>Exterior</option>
                            </select>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Damage Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Scratch</option>
                                <option>Dent</option>
                                <option>Crack</option>
                                <option>Clip</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3">Cracks, scratches, or faded surfaces due to heat exposure.</textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Damage -->

    <!-- Delete Damage -->
    <div class="modal fade" id="delete_damage">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Damage</h4>
                    <p class="mb-3">Are you sure you want to delete Damage?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/edit-car')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Damage -->

    <!-- Create FAQ -->
    <div class="modal fade" id="add-faq">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Create FAQ</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/edit-car')}}">
                    <div class="modal-body pb-1">
                        <div class="mb-3">
                            <label class="form-label">Question <span class="text-danger">*</span></label>	
                            <input type="text" class="form-control">
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Answer <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Create FAQ -->
@endif

@if (Route::is(['edit-invoice']))
    <!-- Link Reservation -->
    <div class="modal fade" id="link_reservation">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Link Reservation</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <!-- Custom Data Table -->
                        <div class="custom-datatable-filter table-responsive">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="no-sort">ID</th>
                                    <th>CAR</th>
                                    <th>CUSTOMER</th>
                                    <th>PICK UP  DETAILS</th>
                                    <th>DROP OFF  DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#BR3466</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="fs-14"><a href="javascript:void(0);">Ford Endeavour</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-01.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="mb-1 fs-14"><a href="javascript:void(0);">Reuben Keen</a></h6>
                                                <span class="badge bg-secondary-transparent rounded-pill">Client</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">12</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">13</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#FR7321</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="fs-14"><a href="javascript:void(0);">Ferrari 458 MM</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-02.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="mb-1 fs-14"><a href="javascript:void(0);">William Jones</a></h6>
                                                <span class="badge bg-secondary-transparent rounded-pill">Company</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">14</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Los Angeles</p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">16</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                        <a href="{{url('admin/reservation-details')}}" class="text-info d-block mb-1">#FD8414</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="fs-14"><a href="javascript:void(0);">Ford Mustang </a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/customer/customer-03.jpg')}}" alt=""></a>
                                            <div>
                                                <h6 class="mb-1 fs-14"><a href="javascript:void(0);">Leonard Jandreau</a></h6>
                                                <span class="badge bg-secondary-transparent rounded-pill">Company</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">19</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Chicago </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="border rounded text-center flex-shrink-0 p-1 me-2">
                                                <h5 class="mb-2 fs-16">22</h5>
                                                <span class="fw-medium fs-12 bg-light p-1 rounded-1 d-inline-block text-gray-9">Feb, 2025</span>
                                            </div>
                                            <div>
                                                <p class="text-gray-9 mb-0">Newyork </p>
                                                <span class="fs-13">01:00 PM</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                    <!-- Custom Data Table -->
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Link Reservation -->
@endif

@if(Route::is(['edit-menu']))
    <!-- Add menu -->
    <div class="modal fade" id="add_menu">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h45 class="mb-0">Add Menu</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label"> Menu Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Permalink<span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/menu-management')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add menu -->

    <!-- Edit menu -->
    <div class="modal fade" id="edit_menu">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Menu</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Contact">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Permalink<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="https://www.example.com/contact/">
                    </div>
                    <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch"
                                    checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3"
                                data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/menu-management')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit menu -->

    <!-- Delete Modal  -->
    <div class="modal fade" id="delete_menu">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Menu</h4>
                    <p class="mb-3">Are you sure you want to delete Menu?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/menu-management')}}" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Route::is(['edit-quotations']))
    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-quotations')}}">
                    <div class="modal-body pb-1">
                        <table class="table custom-table1">
                            <thead class="thead-white">
                                <tr>
                                    <th class="py-0">Extra Features</th>
                                    <th class="py-0">Pricing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium text-gray-9">Navigation</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="90">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>	
                                <tr>
                                    <td class="fw-medium text-gray-9">Satellite Radio</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="25">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="47">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Express Check-in/out</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="75">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Child Safety Seats</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="22">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>		
                                <tr>
                                    <td class="fw-medium text-gray-9">Roadside Assistance</td>
                                    <td>		
                                        <div class="d-flex align-items-center">								
                                            <select class="select">
                                                <option>One Time</option>
                                                <option selected>Per Day</option>
                                            </select>
                                            <div class="input-icon-start position-relative w-100 ms-2">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </span>
                                                <input type="text" class="form-control" value="48">
                                            </div>
                                        </div>	
                                    </td>
                                </tr>								
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->

    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-quotations')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Drivers <span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-center mt-2">
                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="#">Reuben Keen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pricing <span class="text-danger">*</span></label>
                                    <input type="text" value="$ 90" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->

    <!-- Add Driver -->
    <div class="modal fade" id="add_driver">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Driver</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                    <i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Driver Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                        </div>            
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>   
                        <h6 class="fs-16 fw-medium mb-2">License Details</h6>   
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Card Number <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>   
                        <div class="col-md-4">            
                            <div class="mb-3">
                                <label class="form-label">Date of Issue <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-4">            
                            <div class="mb-3">
                                <label class="form-label">Valid Date <span class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <label class="form-label"> Document</label>
                            <div class="document-upload text-center br-3 mb-3">
                                <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                <p class="fs-12 mb-0">Maximum size 50mb</p>
                                <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Driver -->
	
	<!-- Add Client -->
	<div class="modal fade" id="add_client">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="mb-0">Create Client</h5>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x fs-16"></i>
					</button>
				</div>
				<div class="modal-body pb-1">
					<div class="row">
						<div class="mb-3">
							<label class="form-label">Image <span class="text-danger">*</span></label>
							<div class="d-flex align-items-center flex-wrap row-gap-3  mb-3">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-up text-gray-4 fs-24"></i>
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
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Client Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Birth <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Gender <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>English</option>
									<option>German</option>
									<option>Frence</option>
								</select>
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Phone Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="phone1" name="phone">
							</div>
						</div>            
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>            
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>   
						<h6 class="fs-16 fw-medium mb-2">License Details</h6>     
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Card Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>  
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Date of Issue <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>    
						<div class="col-md-4">            
							<div class="mb-3">
								<label class="form-label">Valid Date <span class="text-danger">*</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar"></i>
									</span>
								</div>
							</div>
						</div>  
						<div class="col-md-12">
							<label class="form-label"> Document</label>
							<div class="document-upload text-center br-3 mb-3">
								<img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
								<p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
								<p class="fs-12 mb-0">Maximum size 50mb</p>
								<input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
							</div>  
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-primary">Create New</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Client -->
@endif

@if(Route::is(['edit-reservation']))
    <!-- Completed -->
    <div class="modal fade" id="reservation_completed">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{url('admin/reservation-details')}}">
                        <span class="avatar avatar-lg bg-transparent-success rounded-circle text-success mb-3">
                            <i class="ti ti-check fs-26"></i>
                        </span>
                        <h4 class="mb-1">Created Successful</h4>
                        <p class="mb-3">Reservation created for the <span class="text-gray-9">“Ford Fiesta” </span> on <span class="text-gray-9">“24 Feb 2025”</span></p>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-100">View Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Completed -->

    <!-- Edit Pricing -->
    <div class="modal fade" id="edit_price">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-0">Edit Pricing</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <form action="{{url('admin/add-quotations')}}">
                    <div class="modal-body pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Drivers <span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-center mt-2">
                                        <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" alt=""></a>
                                        <div>
                                            <a class="d-block fw-semibold" href="#">Reuben Keen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pricing <span class="text-danger">*</span></label>
                                    <input type="text" value="$ 90" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Pricing -->
@endif

@if(Route::is(['enquiries']))
    <!-- Delete Quotation -->
    <div class="modal fade" id="delete_enquiries">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Enquiry</h4>
                    <p class="mb-3">Are you sure you want to delete Enquiry?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Brand -->
@endif

@if(Route::is(['extra-services']))
    <!-- Add Extra Service -->
    <div class="modal fade" id="add_extra_service">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Extra Service</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3 row">
                        <div class="col-lg-6">
                            <label class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type <span class="text-danger">*</span></label>
                        <select class="select">
                            <option value="">Select</option>
                            <option value="">One Time</option>
                            <option value="">Per Day</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description <span class="text-danger">*</span></label>							
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Extra Service -->

    <!-- Edit Extra Service -->
    <div class="modal fade" id="edit_extra_services">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Service</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Camping Equipment">
                    </div>
                    <div class="mb-3 row">
                        <div class="col-lg-6">
                            <label class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="12">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="$120">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type <span class="text-danger">*</span></label>
                        <select class="select">
                            <option value="">One Time</option>
                            <option value="">Per Day</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description <span class="text-danger">*</span></label>							
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
            
        </div>
    </div>
    <!-- /Edit Extra Service -->

    <!-- Delete Extra Service -->
    <div class="modal fade" id="delete_extra_services">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Extra Service</h4>
                    <p class="mb-3">Are you sure you want to delete extra service?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Extra Service -->

    <!-- Cars List -->
    <div class="modal fade" id="cars_list">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Cars</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex gap-3">
                        <div class="w-100">
                            <div class="top-search">
                                <div class="top-search-group">
                                    <span class="input-icon">
                                        <i class="ti ti-search"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <a href="#filtercollapsepopup" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapsepopup">
                                    <i class="ti ti-filter me-1"></i> Filter <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="collapse mt-3" id="filtercollapsepopup">
                        <div class="filterbox mb-3 d-flex align-items-center">
                            <h6 class="me-3">Filters</h6>
                            <div class="dropdown me-2">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    Select Brand
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Ford</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Ferrari</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Toyota</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">KIA</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Chevrolet</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown me-2">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    Select Type
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Sedan</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Coupe</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Mini Van</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Crossover</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Sports</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown me-2">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    Select Model
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Ford Mustang</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Ford Endeavour</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown me-3">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    Select Color
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Black</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Red</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">White</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                            <a href="javascript:void(0);" class="text-danger links">Clear All</a>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-01.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Ford Endeavour</h6>
                                            <p class="mb-0 fs-13">Sedan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Ferrari 458 MM</h6>
                                            <p class="mb-0 fs-13">Convertible</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-03.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Ford Mustang </h6>
                                            <p class="mb-0 fs-13">Coupe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-04.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Toyota Tacoma 4</h6>
                                            <p class="mb-0 fs-13">Hatchback</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-05.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Chevrolet Pick Truck</h6>
                                            <p class="mb-0 fs-13">Mini Van</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-06.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Etios Carmen</h6>
                                            <p class="mb-0 fs-13">Hatchback</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Acura Sport Version</h6>
                                            <p class="mb-0 fs-13">Crossover</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-08.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Kia Soul 2016</h6>
                                            <p class="mb-0 fs-13">SUV</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-09.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Chevrolet Camaro</h6>
                                            <p class="mb-0 fs-13">Sport</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center w-100 rounded-2 border p-3">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="avatar me-2 flex-shrink-0"><img src="{{URL::asset('admin_assets/img/car/car-10.jpg')}}" alt="img"></div>
                                        <div>
                                            <h6>Toyota Camry SE 350</h6>
                                            <p class="mb-0 fs-13">Sedan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch form-check-md mb-0 ms-3">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
    <!-- /Cars List -->
@endif

@if(Route::is(['faq-category']))
	<!-- Add Category -->
    <div class="modal fade" id="add_Category">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add Category</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/faq-category')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Category -->

    <!-- Edit Category -->
    <div class="modal fade" id="edit_Category">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Category</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Rental Policies">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/faq-category')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Category -->
    
    <!-- Delete Category -->
    <div class="modal fade" id="delete_Category">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Category</h4>
                    <p class="mb-3">Are you sure you want to delete category?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Category -->
@endif

@if(Route::is(['faq']))
    <!-- Add FAQ -->
    <div class="modal fade" id="add_FAQ">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Add FAQ</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <select class="select">
                            <option value="">Select</option>
                            <option value="">Rental Policies</option>
                            <option value="">Payments</option>
                            <option value="">Insurance</option>
                            <option value="">Booking</option>
                            <option value="">Requirements</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Answer <span class="text-danger">*</span></label>							
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="{{url('admin/faq')}}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add FAQ -->

    <!-- Edit FAQ -->
    <div class="modal fade" id="edit_FAQ">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit FAQ</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <select class="select">
                            <option value="">Select</option>
                            <option value="" selected>Rental Policies</option>
                            <option value="">Payments</option>
                            <option value="">Insurance</option>
                            <option value="">Booking</option>
                            <option value="">Requirements</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Question <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="What are the requirements to rent a car?">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Answer <span class="text-danger">*</span></label>							
                        <textarea class="form-control">You must be at least 21 years old, have a valid driver’s license, and a credit card for payment.</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="{{url('admin/faq')}}" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit FAQ -->

    <!-- Delete FAQ -->
    <div class="modal fade" id="delete_FAQ">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete FAQ</h4>
                    <p class="mb-3">Are you sure you want to delete FAQ?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete FAQ -->
@endif

@if(Route::is(['features']))
    <!-- Add Feature -->
    <div class="modal fade" id="add_feature">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Create Feature</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Feature <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Type -->

    <!-- Edit Type -->
    <div class="modal fade" id="edit_feature">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">Edit Feature</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Feature <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Air Conditioner">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                Status
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Type -->

    <!-- Delete Type -->
    <div class="modal fade" id="delete_feature">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Delete Feature</h4>
                    <p class="mb-3">Are you sure you want to delete feature?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Brand -->
@endif

@if (Route::is(['invoice-template']))
	<!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 1</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-01.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->
    <!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_2">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 2</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-02.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->
    <!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_3">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 3</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-03.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->
    <!-- Invoivce View -->
    <div class="modal fade addmodal" id="invoice_view_4">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mb-0">General Invoice 4</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div><img src="{{URL::asset('admin_assets/img/invoice/invoice-view-04.svg')}}" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoivce View -->



@endif