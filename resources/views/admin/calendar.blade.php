<?php $page = 'calendar'; ?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content me-4">
			
			<!-- Breadcrumb -->
			<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
				<div class="my-auto mb-2">
					<h4 class="mb-1">Calendar</h4>
					<nav>
						<ol class="breadcrumb mb-0">
							<li class="breadcrumb-item">
								<a href="{{url('admin/index')}}">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Calendar</li>
						</ol>
					</nav>
				</div>
				<div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
					<div class="mb-2">
						<a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_booking"><i class="ti ti-plus me-2"></i>Add New Booking</a>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<div class="row">
				<div class="col-md-10">
					<ul class="nav nav-tabs nav-tabs-solid custom-nav-tabs bg-transparent mb-3" role="tablist">
						<li class="nav-item" role="presentation"><a class="nav-link active" href="#">All Bookings</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#">In Progress</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#">Confirmed</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#">Completed</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#">Rejected</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<div class="text-end mb-3">
						<a href="#filtercollapse" class="filtercollapse coloumn d-inline-flex align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse">
							<i class="ti ti-filter me-1"></i> Filter<span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
						</a>
					</div>
				</div>
			</div>

			<div class="collapse" id="filtercollapse">
				<div class="filterbox mb-3 d-flex align-items-center">
					<h6 class="me-3">Filters</h6>
					<div class="dropdown me-2">
						<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
							Cars
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
									<input class="form-check-input m-0 me-2" type="checkbox">Ford Endeavour
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Ferrari 458 MM
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Ford Mustang 
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Toyota Tacoma 4
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Chevrolet Pick Truck
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Etios Carmen
								</label>
							</li>
						</ul>
					</div>
					<div class="dropdown me-2">
						<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
							Customer
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
									<input class="form-check-input m-0 me-2" type="checkbox">
									Andrew Simons
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">David Steiger
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Darin Mabry
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">
									Mark Neiman
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">
									Jacob Johnson
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">
									Walter Hartmann
								</label>
							</li>
						</ul>
					</div>
					<div class="dropdown me-2">
						<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
							Driver
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
									<input class="form-check-input m-0 me-2" type="checkbox">Reuben Keen
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">William Jones
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Leonard Jandreau
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Adam Bolden
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Harvey Jimenez
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">William Ward
								</label>
							</li>
						</ul>
					</div>
					<div class="dropdown me-2">
						<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
							Rental Type
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
									<input class="form-check-input m-0 me-2" type="checkbox">Sedan
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Hatchback
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">SUV
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Coupes
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Convertible
								</label>
							</li>
							<li>
								<label class="dropdown-item d-flex align-items-center rounded-1">
									<input class="form-check-input m-0 me-2" type="checkbox">Pickup Truck
								</label>
							</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="me-2 text-purple links">Apply</a>
					<a href="javascript:void(0);" class="text-danger links">Clear All</a>
				</div>
			</div>
			<div>
				<div class="card mb-0">
					<div class="card-body">			
						<div class="calendar"></div>
					</div>
				</div>
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