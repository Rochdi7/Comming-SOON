<?php $page = 'brands'; ?>
@extends('layout.mainlayout_admin')
@section('content')
   
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h4 class="mb-1">Brands</h4>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Brands</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2 me-2">
                        <a href="javascript:void(0);" class="btn btn-white d-flex align-items-center"><i class="ti ti-printer me-2"></i>Print</a>
                    </div>
                    <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                                <i class="ti ti-upload me-1"></i>Export
                            </a>
                        </div>
                    </div>
                    <div class="mb-2">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_brand" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add New Brand</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Table Header -->
            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                <div class="top-search me-2">
                    <div class="top-search-group">
                        <span class="input-icon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>  
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        <i class="ti ti-badge me-1"></i> Status
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end p-2">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Table Header -->

            <!-- Custom Data Table -->
            <div class="custom-datatable-filter table-responsive">
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th class="no-sort">
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox" id="select-all">
                                </div>
                            </th>
                            <th>NAME</th>
                            <th>TOTAL CARS</th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/toyota.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Toyota</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>20</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/audi.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Audi</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>15</td>
                            <td>
                                <span class="badge badge-danger-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Inactive
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/lamborghini.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Lamborghini</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>45</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/bmw.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">BMW</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>30</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/ferrari.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Ferrari</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>45</td>
                            <td>
                                <span class="badge badge-danger-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Inactive
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/honda.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Honda</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>20</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/ford.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Ford</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>22</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/kia-new.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">KIA</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>22</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/hyundai.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Hyundai</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>32</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-lg border">
                                        <img src="{{URL::asset('admin_assets/img/brands/benz.svg')}}" class="img-fluid" alt="brands">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Mercedes-Benz</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>40</td>
                            <td>
                                <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_brand"><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_brand"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>				

                        
                        
                    </tbody>
                </table>
            </div>
            <!-- Custom Data Table -->

            <div class="table-footer"></div>			

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