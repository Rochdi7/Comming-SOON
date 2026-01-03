<?php $page = 'edit-menu'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content me-4">
        <div class="edit-menu-header">
            <p><a href="{{url('admin/menu-management')}}" class="d-flex align-items-center"><i class="ti ti-arrow-narrow-left me-1"></i>Back to List</a></p>
        </div>
        <div class="filterbox menu-filter">
            <div>
                <h4 class="d-flex align-items-center"><span class="me-1"><i class="ti ti-menu-2 text-secondary fw-normal"></i></span>Menu Management</h4>
            </div>
        </div>
        <div class="card mb-0">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label fw-normal">Select the menu you want to edit</label>
                        <select class="select">
                            <option>Select</option>
                            <option selected>Header Top</option>
                            <option>Footer 1</option>
                            <option>Footer 2</option>
                            <option>Footer 3</option>
                        </select>
                    </div>  
                </div>
                <div class="row row-gap-4">
                    <div class="col-md-8">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label me-2 mb-0">Name</label>
                                        <input type="text" class="form-control" value="nav-menu">
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="btn btn-primary">Save Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="edit-menu-header">
                                    <h5 class="mb-2">Menu Structure</h5>
                                    <p class="text-gray-9">Place each item in the order you prefer. Click on the arrow to the right of the item to display more configuration options.</p>
                                </div>
                                <div class="edit-menu-list">
                                    <ol class="list-group sortable-list list-group-numbered" id="simple-list">
                                        <li class="list-group-item">
                                        <div class="accordion " id="accordionExample">
                                            <div class="accordion-item">
                                                  <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      <span class="me-2"><i class="ti ti-grid-dots"></i></span>Home
                                                    </button>
                                                  </h2>
                                                  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Menu <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control">
                                                        </div>  
                                                        <div class="mb-2">
                                                            <label class="form-label">Permalink</label>
                                                            <input type="text" class="form-control" value="https://www.example.com/contact/">
                                                        </div>  
                                                        <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p>
                                                        <div class="form-check form-check-md form-switch me-2">
                                                            <label class="form-check-label form-label mt-0 mb-0">
                                                                Status
                                                            </label>
                                                            <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </div>
                                         </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="accordion " id="accordionExample2">
                                                <div class="accordion-item">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne">
                                                          <span class="me-2"><i class="ti ti-grid-dots"></i></span>Listings
                                                        </button>
                                                      </h2>
                                                      <div id="collapsetwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Menu <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control">
                                                            </div>  
                                                            <div class="mb-2">
                                                                <label class="form-label">Permalink</label>
                                                                <input type="text" class="form-control" value="https://www.example.com/contact/">
                                                            </div>  
                                                            <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p>
                                                            <div class="form-check form-check-md form-switch me-2">
                                                                <label class="form-check-label form-label mt-0 mb-0">
                                                                    Status
                                                                </label>
                                                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>
                                             </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="accordion " id="accordionExample3">
                                                <div class="accordion-item">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="true" aria-controls="collapseOne">
                                                          <span class="me-2"><i class="ti ti-grid-dots"></i></span>User
                                                        </button>
                                                      </h2>
                                                      <div id="collapsethree" class="accordion-collapse collapse " data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Menu <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control">
                                                            </div>  
                                                            <div class="mb-2">
                                                                <label class="form-label">Permalink</label>
                                                                <input type="text" class="form-control" value="https://www.example.com/contact/">
                                                            </div>  
                                                            <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p>
                                                            <div class="form-check form-check-md form-switch me-2">
                                                                <label class="form-check-label form-label mt-0 mb-0">
                                                                    Status
                                                                </label>
                                                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>
                                             </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="accordion " id="accordionExample4">
                                                <div class="accordion-item">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapseOne">
                                                          <span class="me-2"><i class="ti ti-grid-dots"></i></span>Pages
                                                        </button>
                                                      </h2>
                                                      <div id="collapsefour" class="accordion-collapse collapse " data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Menu <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control">
                                                            </div>  
                                                            <div class="mb-2">
                                                                <label class="form-label">Permalink</label>
                                                                <input type="text" class="form-control" value="https://www.example.com/contact/">
                                                            </div>  
                                                            <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p>
                                                            <div class="form-check form-check-md form-switch me-2">
                                                                <label class="form-check-label form-label mt-0 mb-0">
                                                                    Status
                                                                </label>
                                                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>
                                             </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="accordion " id="accordionExample5">
                                                <div class="accordion-item">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapseOne">
                                                          <span class="me-2"><i class="ti ti-grid-dots"></i></span>Blog
                                                        </button>
                                                      </h2>
                                                      <div id="collapsefive" class="accordion-collapse collapse " data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Menu <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control">
                                                            </div>  
                                                            <div class="mb-2">
                                                                <label class="form-label">Permalink</label>
                                                                <input type="text" class="form-control" value="https://www.example.com/contact/">
                                                            </div>  
                                                            <p>Preview : <a href="javascript:void(0);" class="text-info">https://www.example.com</a> </p>
                                                            <div class="form-check form-check-md form-switch me-2">
                                                                <label class="form-check-label form-label mt-0 mb-0">
                                                                    Status
                                                                </label>
                                                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>
                                             </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-right">
                            <div class="accordion" id="accordionright">
                                <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapserightone" aria-expanded="true" aria-controls="collapserightone">
                                            Pages
                                        </button>
                                      </h2>
                                      <div id="collapserightone" class="accordion-collapse collapse show" data-bs-parent="#accordionright">
                                        <div class="accordion-body p-0">
                                            <ul>
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
                                                        <input class="form-check-input m-0 me-2" type="checkbox">Home
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="dropdown-item d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox">Listings
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="dropdown-item d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox">Users
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class=" menu-rightfooter border border-top">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label class="dropdown-item d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox">Select All
                                                    </label>
                                                    <a href="javascript:void(0);" class="p-2">Add to Menu</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                      </div>
                                </div>
                             </div>
                            <div class="accordion mb-0" id="accordionright2">
                                <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapserighttwo" aria-expanded="true" aria-controls="collapserighttwo">
                                            Custom Link
                                        </button>
                                      </h2>
                                      <div id="collapserighttwo" class="accordion-collapse collapse show" data-bs-parent="#accordionright2">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label class="form-label">URL <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="http://">
                                            </div>  
                                            <div class="mb-2">
                                                <label class="form-label">Label</label>
                                                <input type="text" class="form-control" placeholder="Placeholder">
                                            </div>  
                                            <div class=" menu-rightfooter border border-top">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <a href="javascript:void(0);" class="p-2">Add to Menu</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                      </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
        <p class="mb-0">
            <a href="javascript:void(0);">Privacy Policy</a>
            <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
        </p>
        <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);" class="text-secondary">Dreams</a></p>
    </div>
</div>
<!-- /Page Wrapper -->


@endsection