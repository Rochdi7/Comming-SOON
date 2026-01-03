<?php $page = 'ticket-details'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <div class="mb-3">
                <a href="{{url('admin/tickets')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-left me-1"></i>Back to List</a>
            </div>

            <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                <h4 class="d-flex align-items-center"><i class="ti ti-menu-2 text-secondary fs-24 me-2"></i>Ticket Details</h4>
            </div>

            <!-- Ticket Details -->
            <div class="card mb-0">
                <div class="card-body">

                    <div class="border br-5 mb-3">
                        <div class="p-3 bg-light d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <h6>#TCKT001 - <span class="text-default">Car Engine Issue During Rental</span></h6>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-badge me-1"></i>Resolved
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-2">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Resolved</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Inprogress</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Open</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Closed</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 row-gap-3">
                                <div class="col">
                                    <h6 class="fs-14 fw-semibold mb-1">Created By</h6>
                                    <p class="fs-13">Michael Dawson</p>
                                </div>
                                <div class="col">
                                    <h6 class="fs-14 fw-semibold mb-1">Priority</h6>
                                    <span class="badge badge-danger-transparent d-inline-flex align-items-center badge-md rounded-pill">
                                        <i class="ti ti-point-filled me-1"></i>High
                                    </span>
                                </div>
                                <div class="col">
                                    <h6 class="fs-14 fw-semibold mb-1">Assigned To</h6>
                                    <p class="fs-13">Michael Dawson</p>
                                </div>
                                <div class="col">
                                    <h6 class="fs-14 fw-semibold mb-1">Created at</h6>
                                    <p class="fs-13">20 Jan 2025</p>
                                </div>
                                <div class="col">
                                    <h6 class="fs-14 fw-semibold mb-1">Last Updated</h6>
                                    <p class="fs-13">18 Feb 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">					
                        <h6 class="mb-2">Description</h6>
                        <p class="mb-2">Hello, I rented a Toyota Camry 2022 (Booking ID: CR987654) from your Los Angeles branch on February 6, 2025. While driving on the highway, I experienced engine trouble and the car suddenly stopped. I had to call roadside assistance, and it took almost 2 hours for help to arrive.</p>
                        <p class="mb-0">This was a huge inconvenience, and I would like a replacement vehicle and compensation for the lost time. Please assist me as soon as possible.</p>
                    </div>
                    <div class="mb-3">					
                        <h6 class="mb-2">Attachments</h6>
                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <div class="bg-light br-5 p-3 d-flex align-items-center border">
                                <span class="avatar bg-white d-flex align-items-center justify-content-center me-2">
                                    <img src="{{URL::asset('admin_assets/img/icons/pdf.svg')}}" alt="img" class="w-auto h-auto">
                                </span>
                                <div class="me-2">
                                    <h6 class="fs-14 fw-medium">Report1.pdf</h6>
                                    <p class="fs-12">45 KB</p>
                                </div>
                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded download-icon d-flex align-items-center justify-content-center">
                                    <i class="ti ti-download fs-16"></i>
                                </a>
                            </div>
                            <div class="bg-light br-5 p-3 d-flex align-items-center border">
                                <span class="avatar bg-white d-flex align-items-center justify-content-center me-2">
                                    <img src="{{URL::asset('admin_assets/img/media/repair.')}}jpg" alt="img">
                                </span>
                                <div class="me-2">
                                    <h6 class="fs-14 fw-medium">Image2.jpg</h6>
                                    <p class="fs-12">38 KB</p>
                                </div>
                                <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded download-icon d-flex align-items-center justify-content-center">
                                    <i class="ti ti-download fs-16"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-2">Reply</h6>
                        <div class="editor">Dear Michael Dawson, we sincerely apologize for the inconvenience. We have forwarded your issue to our Los Angeles branch for an immediate resolution. Meanwhile, we are arranging a replacement vehicle, and we will update you shortly.</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="javascript:void(0);" class="btn btn-light me-3">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
                    </div>
                </div>
            </div>
            <!-- /Ticket Details -->

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