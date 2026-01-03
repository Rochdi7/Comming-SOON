<?php $page = 'pages'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Pages</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/index')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Pages</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2">
                        <div>
                            <a href="{{url('admin/add-pages')}}" class="btn btn-primary btn-md d-inline-flex justify-content-center align-items-center">
                                <i class="ti ti-plus me-1"></i>Add Page
                            </a>
                        </div>
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
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <i class="ti ti-badge me-1"></i> Status
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Published</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Unpublish</a>
                            </li>
                            
                        </ul>
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

            <!-- Custom Data Table -->
            <div class="custom-datatable-filter table-responsive">
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>PAGE</th>
                            <th>PAGE SLUG</th>
                            <th>LAST UPDATED</th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Home</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/home</a>
                            </td>
                            <td>
                                <p class="text-gray-9">24 Jan 2025</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">About Us</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/about-us</a>
                            </td>
                            <td>
                                <p class="text-gray-9">19 Dec 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Unpublish
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Contact</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/contact</a>
                            </td>
                            <td>
                                <p class="text-gray-9">11 Dec 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Blog</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/blog</a>
                            </td>
                            <td>
                                <p class="text-gray-9">29 Nov 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">FAQ</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/faq</a>
                            </td>
                            <td>
                                <p class="text-gray-9">03 Nov 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Privacy Policy</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/privacy-policy</a>
                            </td>
                            <td>
                                <p class="text-gray-9">31 Oct 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Unpublish
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Terms & Conditions</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/terms</a>
                            </td>
                            <td>
                                <p class="text-gray-9">15 Oct 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Unpublish
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Support</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/support</a>
                            </td>
                            <td>
                                <p class="text-gray-9">26 Sep 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Testimonials</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/testimonials</a>
                            </td>
                            <td>
                                <p class="text-gray-9">01 Sep 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                                                         
                        <tr>
                        
                            <td>
                                <h6 class="fs-14">Rental Policies</h6>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="fs-12 text-info">/rental-policy</a>
                            </td>
                            <td>
                                <p class="text-gray-9">15 Aug 2024</p>
                            </td>
                            
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">
                                    <i class="ti ti-point-filled me-1"></i>Published
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end p-2">
                                        <li>
                                            <a class="dropdown-item rounded-1" href="{{url('admin/edit-pages')}}" ><i class="ti ti-edit me-1"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_page"><i class="ti ti-trash me-1"></i>Delete</a>
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