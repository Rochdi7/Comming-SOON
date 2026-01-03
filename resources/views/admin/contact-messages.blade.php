<?php $page = 'contact-messages'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content me-4">
        
        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h4 class="mb-1">Contact Messages</h4>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/index')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Messages</li>
                    </ol>
                </nav>
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
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        <i class="ti ti-layout-board me-1"></i> Columns
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg p-2">
                        <ul>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>FROM</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>PHONE</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>EMAIL</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>CREATED DATE</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                                    <span><i class="ti ti-grip-vertical me-1"></i>MESSAGE</span>
                                    <div class="form-check form-check-sm form-switch mb-0">
                                        <input class="form-check-input form-label" type="checkbox" role="switch" checked="">
                                    </div>
                                </div>
                            </li>
                        </ul>
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
                        <th>FROM</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>CREATED DATE</th>
                        <th>MESSAGE</th>
                        <th></th>
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
                            <p class="text-gray-9">+1 555 123 4567</p>
                        </td>
                        <td>
                            <p class="text-gray-9">andrew@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">24 Jan 2025</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
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
                            <p class="text-gray-9">+44 7911 123456</p>
                        </td>
                        <td>
                            <p class="text-gray-9">david@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">19 Dec 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
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
                            <p class="text-gray-9">+33 612 345678</p>
                        </td>
                        <td>
                            <p class="text-gray-9">phu@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">11 Dec 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
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
                            <p class="text-gray-9">+61 412 345 678</p>
                        </td>
                        <td>
                            <p class="text-gray-9">walter@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">29 Nov 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
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
                            <p class="text-gray-9">+91 98765 43210</p>
                        </td>
                        <td>
                            <p class="text-gray-9">jermaine@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">03 Nov 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>                                                
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="car-details" class="avatar me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-05.jpg')}}" class="rounded-circle" alt="">
                                </a>
                                <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Dennis Eckhardt</a></h6>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">+49 171 2345678</p>
                        </td>
                        <td>
                            <p class="text-gray-9">dennis@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">31 Oct 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>                                                
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="car-details" class="avatar me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-25.jpg')}}" class="rounded-circle" alt="">
                                </a>
                                <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Lan Adams</a></h6>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">+81 90 1234 5678</p>
                        </td>
                        <td>
                            <p class="text-gray-9">lan@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">15 Oct 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>                                                
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="car-details" class="avatar me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-28.jpg')}}" class="rounded-circle" alt="">
                                </a>
                                <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Ann Crump</a></h6>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">+34 612 345678</p>
                        </td>
                        <td>
                            <p class="text-gray-9">crump@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">26 Sep 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>                                                
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="car-details" class="avatar me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-07.jpg')}}" class="rounded-circle" alt="">
                                </a>
                                <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Julie Black</a></h6>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">+55 1987654321</p>
                        </td>
                        <td>
                            <p class="text-gray-9">julie@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">01 Sep 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>                                                
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="car-details" class="avatar me-2 flex-shrink-0">
                                    <img src="{{URL::asset('admin_assets/img/profiles/avatar-29.jpg')}}" class="rounded-circle" alt="">
                                </a>
                                <h6><a href="#javascript:void(0);" class="fs-14 fw-semibold">Jean Walker</a></h6>
                            </div>
                        </td>
                        <td>
                            <p class="text-gray-9">+27 82 12364567</p>
                        </td>
                        <td>
                            <p class="text-gray-9">jean@example.com</p>
                        </td>
                        <td>
                            <p class="text-gray-9">15 Aug 2024</p>
                        </td>
                        <td>
                            <span class="avatar avatar-md bg-light rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Hi, I booked a car but haven't received a confirmation email. Can you check?">
                            <i class="ti ti-file-invoice text-gray-9"></i>
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end p-2">
                                    
                                    <li>
                                        <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash me-1"></i>Delete</a>
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
            <a href="javascript:void(0);">Privacy Policy</a>
            <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
        </p>
        <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);" class="text-secondary">Dreams</a></p>
    </div>
    <!-- /Footer-->
</div>
<!-- /Page Wrapper -->
@endsection