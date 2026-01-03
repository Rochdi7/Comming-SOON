<?php $page = 'color'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
			<div class="content me-4">
                
                <!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Color</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="{{url('admin/index')}}">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Color</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap">                        
						<div class="mb-2">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_color" class="btn btn-primary d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add New Color</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

                <!-- Table Header -->
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                    <div class="d-flex align-items-center flex-wrap row-gap-3">    
                        <div class="top-search">
                            <div class="top-search-group">
                                <span class="input-icon">
									<i class="ti ti-search"></i>
								</span>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>                                     
                        
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
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
                </div>
                <!-- /Table Header -->

                <!-- Custom Data Table -->
                <div class="custom-datatable-filter table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th>NAME</th>
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
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Red</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare black"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Black</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare white"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">White</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
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
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare maroon"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Maroon</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input yellow" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare yellow"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Yellow</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input yellow" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare orange"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Orange</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input yellow" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare green"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Green</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input yellow" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-inline-flex gap-2 align-items-center">
                                        <div class="coloredsquare blue"></div>
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Blue</a></h6>
                                    </div>
                                </td>
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
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_color"><i class="ti ti-edit me-1"></i>Edit</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_color"><i class="ti ti-trash me-1"></i>Delete</a>
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