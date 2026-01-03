<?php $page = 'state'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">States</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Locations</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2 me-2">
                        <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_state"><i class="ti ti-plus me-2"></i>Add State</a>
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
                <div class="dropdown me-2">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <span class="badge badge-xs rounded-pill bg-success me-2">3</span>Country Name Selected
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
                                <input class="form-check-input m-0 me-2" type="checkbox">Australia
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">Canada
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">China
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">Egypt
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">Germany
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">India
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">Iron
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">Japan
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">United Kingdom
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center rounded-1">
                                <input class="form-check-input m-0 me-2" type="checkbox">United States
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
                            Active
                        </li>
                        <li class="dropdown-item d-flex align-items-center rounded-1">
                            Inactive
                        </li>
                        
                    </ul>
                </div>
                <a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
                <a href="javascript:void(0);" class="text-danger links">Clear All</a>
            </div>
        </div>

            <!-- Custom Data Table -->
            <div class="custom-datatable-filter table-responsive brandstable country-table">
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>STATE NAME</th>
                            <th>CREATED DATE </th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">California</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/us.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">United States</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">New York</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/us.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">United States</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Texas</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/us.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">United States</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Baveria</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/de.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">Germany</p>
                                </div>
                            </td>
                            
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Quebec</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/ca.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">Canada</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Ontario</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/ca.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">Canada</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Florida</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/us.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">United States</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-danger"></i>Inactive</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Berlin</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/de.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">Germany</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Victoria</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/au.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">Australia</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>                                                                                                  
                        <tr>
                        
                            <td>
                                <p class="text-gray-9">Gauteng</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center flag-image">
                                    <img src="{{URL::asset('admin_assets/img/flags/eg.png')}}" class="img-fluid me-2" alt="image">
                                    <p class="text-gray-9">Egypt</p>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-outline d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1 text-success"></i>Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_state"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_state"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
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