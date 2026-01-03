<?php $page = 'announcements'; ?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content me-4">
			
			<!-- Breadcrumb -->
			<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
				<div class="my-auto mb-2">
					<h4 class="mb-1">Announcement</h4>
					<nav>
						<ol class="breadcrumb mb-0">
							<li class="breadcrumb-item">
								<a href="{{url('admin/index')}}">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Announcement</li>
						</ol>
					</nav>
				</div>
				<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
					<div class="mb-2">
						<a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_announcement"><i class="ti ti-plus me-2"></i>Add Announcement</a>
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
							<i class="ti ti-filter me-1"></i> Filter<span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
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
							<span class="badge badge-xs rounded-pill bg-success me-2">4</span>Type
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
									<input class="form-check-input m-0 me-2" type="checkbox" checked>New Rental Service
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Special Offer
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox" checked>New Vehicle Addition
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox" checked>Seasonal Promotion
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Policy Update
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Branch Opening
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox" checked>Customer Safety
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Loyalty Program
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Emergency Closure
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Online Booking Update
								</label>
							</li>
						</ul>
					</div>
					<div class="dropdown me-2">
						<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
							Status
						</a>
						<ul class="dropdown-menu dropdown-menu-md p-2">
							<li class="dropdown-item">
								Published
							</li>
							<li class="dropdown-item">
								Unpublish
							</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
					<a href="javascript:void(0);" class="text-danger links">Clear All</a>
				</div>
			</div>

			<!-- Custom Data Table -->
			<div class="custom-datatable-filter table-responsive">
				<table class="table datatable">
					<thead class="thead-light">
						<tr>
							<th>DATE</th>
							<th>ANNOUNCEMENT</th>
							<th>TYPE</th>
							<th>STATUS</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<p class="text-gray-9 mb-0">29 Nov 2024</p>
								<p class="fs-13 text-gray-5">01:00 PM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Exciting News!</p>
								<p class="fs-13 text-gray-5">We are now offering premium car rentals in your city!</p>
							</td>
							<td>
								<p class="text-gray-9">New Rental Service</p>
							</td>
							<td>
								<span class="badge bg-success-transparent badge-sm"><i class="ti ti-point-filled text-success me-1"></i>Published</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                         
						<tr>
							<td>
								<p class="text-gray-9 mb-0">03 Nov 2024</p>
								<p class="fs-13 text-gray-5">10:00 AM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Limited-Time Offer!</p>
								<p class="fs-13 text-gray-5">Get 20% off on all weekend rentals. Book now and hit the road for less!</p>
							</td>
							<td>
								<p class="text-gray-9">Special Offer</p>
							</td>
							<td>
								<span class="badge bg-danger-transparent badge-sm"><i class="ti ti-point-filled text-danger me-1"></i>Unpublish</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                             
						<tr>
							<td>
								<p class="text-gray-9 mb-0">31 Oct 2024</p>
								<p class="fs-13 text-gray-5">08:30 AM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">New Arrivals!</p>
								<p class="fs-13 text-gray-5">We’ve added luxury SUVs and electric vehicles to our fleet.</p>
							</td>
							<td>
								<p class="text-gray-9">New Vehicle Addition</p>
							</td>
							<td>
								<span class="badge bg-success-transparent badge-sm"><i class="ti ti-point-filled text-success me-1"></i>Published</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                         
						<tr>
							<td>
								<p class="text-gray-9 mb-0">15 Oct 2024</p>
								<p class="fs-13 text-gray-5">03:15 PM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Holiday Special!</p>
								<p class="fs-13 text-gray-5">Rent a car for 3 days and get the 4th day free this festive season.</p>
							</td>
							<td>
								<p class="text-gray-9">Seasonal Promotion</p>
							</td>
							<td>
								<span class="badge bg-success-transparent badge-sm"><i class="ti ti-point-filled text-success me-1"></i>Published</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                             
						<tr>
							<td>
								<p class="text-gray-9 mb-0">26 Sep 2024</p>
								<p class="fs-13 text-gray-5">04:10 PM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Important Update!</p>
								<p class="fs-13 text-gray-5"> Our rental deposit policy has changed.</p>
							</td>
							<td>
								<p class="text-gray-9">Policy Update</p>
							</td>
							<td>
								<span class="badge bg-success-transparent badge-sm"><i class="ti ti-point-filled text-success me-1"></i>Published</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                         
						<tr>
							<td>
								<p class="text-gray-9 mb-0">01 Sep 2024</p>
								<p class="fs-13 text-gray-5">11:00 AM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">We’ve Expanded!</p>
								<p class="fs-13 text-gray-5">Now serving customers at our brand-new Downtown Rental Center.</p>
							</td>
							<td>
								<p class="text-gray-9">Branch Opening</p>
							</td>
							<td>
								<span class="badge bg-danger-transparent badge-sm"><i class="ti ti-point-filled text-danger me-1"></i>Unpublish</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                             
						<tr>
							<td>
								<p class="text-gray-9 mb-0">15 Aug 2024</p>
								<p class="fs-13 text-gray-5">09:40 AM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Your Safety Matters!</p>
								<p class="fs-13 text-gray-5">We ensure all rental cars are maintained for a worry-free journey.</p>
							</td>
							<td>
								<p class="text-gray-9">Customer Safety</p>
							</td>
							<td>
								<span class="badge bg-danger-transparent badge-sm"><i class="ti ti-point-filled text-danger me-1"></i>Unpublish</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                         
						<tr>
							<td>
								<p class="text-gray-9 mb-0">24 Jan 2025</p>
								<p class="fs-13 text-gray-5">02:30 PM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Introducing Our Rewards Program!</p>
								<p class="fs-13 text-gray-5">Earn points every time you rent and redeem them for discounts.</p>
							</td>
							<td>
								<p class="text-gray-9">Loyalty Program</p>
							</td>
							<td>
								<span class="badge bg-success-transparent badge-sm"><i class="ti ti-point-filled text-success me-1"></i>Published</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                             
						<tr>
							<td>
								<p class="text-gray-9 mb-0">19 Dec 2024</p>
								<p class="fs-13 text-gray-5">05:20 PM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Temporary Closure Alert!</p>
								<p class="fs-13 text-gray-5">Due to weather conditions, our rental office will be closed on 20Jan 2025.</p>
							</td>
							<td>
								<p class="text-gray-9">Emergency Closure</p>
							</td>
							<td>
								<span class="badge bg-success-transparent badge-sm"><i class="ti ti-point-filled text-success me-1"></i>Published</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>                                                         
						<tr>
							<td>
								<p class="text-gray-9 mb-0">11 Dec 2024</p>
								<p class="fs-13 text-gray-5">09:30 AM</p>
							</td>
							<td>
								<p class="text-gray-9 mb-0">Easier Than Ever!</p>
								<p class="fs-13 text-gray-5">Our new website now lets you book your rentals in just a few clicks!</p>
							</td>
							<td>
								<p class="text-gray-9">Online Booking Update</p>
							</td>
							<td>
								<span class="badge bg-success-transparent badge-sm"><i class="ti ti-point-filled text-success me-1"></i>Published</span>
							</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="ti ti-dots-vertical"></i>
									</button>
									<ul class="dropdown-menu dropdown-menu-end p-2">
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_announcement"><i class="ti ti-edit me-1"></i>Edit</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#announcement_detail"><i class="ti ti-eye me-1"></i>Details</a>
										</li>
										<li>
											<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_announcement"><i class="ti ti-trash me-1"></i>Delete</a>
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