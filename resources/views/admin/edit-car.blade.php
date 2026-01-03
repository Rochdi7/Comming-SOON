<?php $page = 'edit-car'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4 pb-0">
            <div class="mb-3">
                <a href="{{url('admin/cars')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-left me-1"></i>Back to List</a>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="add-wizard car-steps">
                        <ul class="nav d-flex align-items-center flex-wrap gap-3">
                            <li class="nav-item active">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-info-circle me-1"></i>Basic</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-flame me-1"></i>Features</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-files me-1"></i>Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-float-center me-1"></i>Extra Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-file-invoice me-1"></i>Uploads</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-id me-1"></i>Damages</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-question-mark me-1"></i>FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center"><i class="ti ti-seo me-1"></i>SEO</a>
                            </li>
                        </ul>
                        <fieldset id="first-field">
                            <form action="#">	
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-info-circle text-secondary me-2"></i>Basic Info</h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="border-bottom mb-4 pb-4">							
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Featured Image</h6>
                                            <p>Upload Featured Image</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="d-flex align-items-center flex-wrap row-gap-3 upload-pic">
                                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl me-3 flex-shrink-0 border rounded-circle frames">
                                                    <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" class="img-fluid rounded-circle" alt="brands">
                                                    <a href="javascript:void(0);" class="upload-img-trash trash-end btn btn-sm rounded-circle">
                                                        <i class="ti ti-trash fs-12"></i>
                                                    </a>
                                                </div>   
                                                <div>
                                                    <div class="drag-upload-btn btn btn-md btn-dark d-inline-flex align-items-center mb-2">
                                                        <i class="ti ti-photo me-1"></i>Change
                                                        <input type="file" class="form-control image-sign" multiple="">
                                                    </div>
                                                    <p>Recommended size is 500px x 500px</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>										
                                </div>	
                                <div class="border-bottom mb-2 pb-2">								
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Car Info</h6>
                                            <p>Add Information About Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="Acura Sport">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Permalink</label>
                                                <input type="text" class="form-control" value="https://www.example.com/cars/">
                                                <p class="fs-13 fw-medium mt-1">Preview : <a href="javascript:void(0);" class="link-info">https://www.example.com/cars/</a></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-label">Car Type <span class="text-danger">*</span></label>
                                                            <a href="javascript:void(0);" class="link-info mb-2" data-bs-toggle="modal" data-bs-target="#add_type">Add New</a>
                                                        </div>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>Sedan</option>
                                                            <option>Hatchback</option>
                                                            <option>SUV</option>
                                                            <option>Coupes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-label">Brand <span class="text-danger">*</span></label>
                                                            <a href="javascript:void(0);" class="link-info mb-2" data-bs-toggle="modal" data-bs-target="#add_brand">Add New</a>
                                                        </div>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>Toyota</option>
                                                            <option>Audi</option>
                                                            <option>Lamborghini</option>
                                                            <option>BMW</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-label">Model <span class="text-danger">*</span></label>
                                                            <a href="javascript:void(0);" class="link-info mb-2" data-bs-toggle="modal" data-bs-target="#add_model">Add New</a>
                                                        </div>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>Urban Cruiser</option>
                                                            <option>Fortuner</option>
                                                            <option>V8</option>
                                                            <option>Huracan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Category <span class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>Car</option>
                                                            <option>Bike</option>
                                                            <option>Truck</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Plate Number</label>
                                                        <input type="text" class="form-control" value="ABC 1234">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">VIN Number</label>
                                                        <input type="text" class="form-control" value="ABC12345">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Main Location <span class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>Johnson Dealer Zone</option>
                                                            <option>Miller Auto Trade Zone</option>
                                                            <option>Thompson Dealer Parking</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Link Other Location</label>
                                                        <select class="limited-multi-select" multiple="multiple">
                                                            <option value="1">Evans Dealer Car Zone</option>
                                                            <option value="2" selected>Allen Dealer Parking Lot</option>
                                                            <option value="3">Walker Auto Trade Yard</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Fuel</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>Petrol</option>
                                                            <option>Diesel</option>
                                                            <option>Electric</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Odometer</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Color <span class="text-danger">*</span></label>
                                                        <select class="select2-color">
                                                            <option value="red" class="bg-danger" selected>Red</option>
                                                            <option value="green" class="bg-success">Green</option>
                                                            <option value="blue" class="bg-info">Blue</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Year of Car <span class="text-danger">*</span></label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" class="form-control yearpicker" value="2025">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Transmission</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>Manual</option>
                                                            <option>Automatic</option>
                                                            <option>Semi Automatic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Mileage</label>
                                                        <input type="text" class="form-control" value="45 km">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Passengers</label>
                                                        <input type="text" class="form-control" value="04">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">No of Seats</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option selected>2 Seater</option>
                                                            <option>4 Seater</option>
                                                            <option>5 Seater</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">No of Doors</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>2 Doors</option>
                                                            <option>3 Doors</option>
                                                            <option selected>4 Doors</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">No of Air Bags</label>
                                                        <input type="text" class="form-control" value="02">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-light d-flex align-items-center me-2"><i class="ti ti-chevron-left me-1"></i>Cancel</button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center" type="button">Add Features<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>
                        <fieldset>
                            <form action="#">		
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-flame text-secondary me-2"></i>Features & Amenities</h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>									
                                <div class="border-bottom mb-2 pb-2 amenity-wrap">								
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Features & Amenities</h6>
                                            <p>Add Information About Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input select-all" type="checkbox"  id="select-all1">
                                                            <label class="form-check-label" for="amenity">
                                                                Check All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity">
                                                            <label class="form-check-label" for="amenity">
                                                                Air Condition
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity1">
                                                            <label class="form-check-label" for="amenity1">
                                                                Climate Control
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity2">
                                                            <label class="form-check-label" for="amenity2">
                                                                Climate Control Two Zones
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity3" checked>
                                                            <label class="form-check-label" for="amenity3">
                                                                Luxury Climate Control 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity4">
                                                            <label class="form-check-label" for="amenity4">
                                                                Sunroof
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity5" checked>
                                                            <label class="form-check-label" for="amenity5">
                                                                Panoramic Sunroof 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity6">
                                                            <label class="form-check-label" for="amenity6">
                                                                Moonroof  
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity7">
                                                            <label class="form-check-label" for="amenity7">
                                                                Push-button Start
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity8">
                                                            <label class="form-check-label" for="amenity8">
                                                                Keyless Access
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity9">
                                                            <label class="form-check-label" for="amenity9">
                                                                Rear Parking Sensors
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity10">
                                                            <label class="form-check-label" for="amenity10">
                                                                Parking Sensors
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity11">
                                                            <label class="form-check-label" for="amenity11">
                                                                Built-in Sat Nav
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity12">
                                                            <label class="form-check-label" for="amenity12">
                                                                Mobile Phone Technology
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity13">
                                                            <label class="form-check-label" for="amenity13">
                                                                Bluetooth
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity14">
                                                            <label class="form-check-label" for="amenity14">
                                                                Usb
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity15">
                                                            <label class="form-check-label" for="amenity15">
                                                                Qi Wireless Charging
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity16">
                                                            <label class="form-check-label" for="amenity16">
                                                                Audio/ipod 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity17" checked>
                                                            <label class="form-check-label" for="amenity17">
                                                                Cruise Control
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity18">
                                                            <label class="form-check-label" for="amenity18">
                                                                Adaptive Cruise Control
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity19">
                                                            <label class="form-check-label" for="amenity19">
                                                                Apple Carplay
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity20">
                                                            <label class="form-check-label" for="amenity20">
                                                                Android Auto
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity21">
                                                            <label class="form-check-label" for="amenity21">
                                                                Forward Collision Warning
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity22">
                                                            <label class="form-check-label" for="amenity22">
                                                                Lane Departure Warning
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity23">
                                                            <label class="form-check-label" for="amenity23">
                                                                Automatic Emergency Braking
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity24">
                                                            <label class="form-check-label" for="amenity24">
                                                                Active Parking Assist
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity25">
                                                            <label class="form-check-label" for="amenity25">
                                                                Automatic High Beams
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity26">
                                                            <label class="form-check-label" for="amenity26">
                                                                Adaptive Headlights
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity27">
                                                            <label class="form-check-label" for="amenity27">
                                                                360-degree Camera
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity29">
                                                            <label class="form-check-label" for="amenity29">
                                                                Rearview Camera
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity30">
                                                            <label class="form-check-label" for="amenity30">
                                                                Towing Hook
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity31">
                                                            <label class="form-check-label" for="amenity31">
                                                                Leather Interior
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="amenity32">
                                                            <label class="form-check-label" for="amenity32">
                                                                Fabric Interior
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center">Add Tariff & Pricing<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>
                        <fieldset>
                            <form action="#">	
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-files text-secondary me-2"></i>Pricing & Tariff </h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>										
                                <div class="border-bottom mb-4 pb-2 unlimited-price">								
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Pricing</h6>
                                            <p>Add Pricing for Cars</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Pricing Type <span class="text-danger">*</span></label>
                                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="checkbox"  id="price" checked>
                                                                <label class="form-check-label" for="price">
                                                                    Daily
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="checkbox"  id="price1" checked>
                                                                <label class="form-check-label" for="price1">
                                                                    Weekly
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="checkbox"  id="price2" checked>
                                                                <label class="form-check-label" for="price2">
                                                                    Monthly
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="checkbox"  id="price3" checked>
                                                                <label class="form-check-label" for="price3">
                                                                    Yearly
                                                                </label>
                                                            </div>
                                                        </div>															
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Daily Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="200">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Weekly Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="400">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Monthly Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="400">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Yearly Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="6000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <label class="form-label">Base Kilometers (Per Day) <span class="text-danger">*</span></label>
                                                            <div class="form-check unlimited-checkbox mb-2">
                                                                <input class="form-check-input" type="checkbox"  id="unlimited">
                                                                <label class="form-check-label" for="unlimited">
                                                                    Unlimited
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" value="45">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3 unlimited-wrap">
                                                        <label class="form-label">Kilometers Extra Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="21">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-4 pb-2">								
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Tarrif</h6>
                                            <p>Add Tariff Pricing for Cars</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md d-flex align-items-center"  data-bs-toggle="modal" data-bs-target="#add-tarrif"><i class="ti ti-plus me-1"></i>Add New Tarrif Rate</a>
                                            </div>
                                            <div class="empty-data bg-light text-center mb-3">
                                                <p class="fw-medium">No Data Added</p>
                                            </div>	
                                            <div class="card bg-light mb-3">
                                                <div class="card-body pb-3">
                                                    <h6 class="mb-3">Total Tariffs : 21</h6>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-1">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold mb-1">4 to 5 Days</h6>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Price : <span class="text-gray-9">$50</span></p>
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Base Kilometers : <span class="text-gray-9">25</span></p>
                                                                <p class="fs-13 fw-medium mb-0">Kilometers Extra Price : <span class="text-gray-9">$200</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center icon-list">
                                                            <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit-tarrif"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_tarrif"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border p-20 br-5 mb-1">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold mb-1">5 to 8 Days</h6>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Price : <span class="text-gray-9">$80</span></p>
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Base Kilometers : <span class="text-gray-9">15</span></p>
                                                                <p class="fs-13 fw-medium mb-0">Kilometers Extra Price : <span class="text-gray-9">$150</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center icon-list">
                                                            <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit-tarrif"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_tarrif"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-2 pb-2">								
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Seasonal Pricing</h6>
                                            <p>Add Seasonal Pricing for Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#select_price"><i class="ti ti-plus me-1"></i>Select Seasonal Pricing</a>
                                                <a href="javascript:void(0);" class="text-info" data-bs-toggle="modal" data-bs-target="#add_price">Add New</a>
                                            </div>
                                            <div class="empty-data bg-light text-center mb-3">
                                                <p class="fw-medium">No Data Added</p>
                                            </div>	
                                            <div class="card bg-light mb-3">
                                                <div class="card-body pb-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-1">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Halloween<span class="badge bg-secondary-transparent ms-2">01 Oct 2025 - 31 Oct 2025 </span></h6>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Daily Rate : <span class="text-gray-9">$200</span></p>
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Weekly Rate : <span class="text-gray-9">$1400</span></p>
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Monthly Rate : <span class="text-gray-9">$4800</span></p>
                                                                <p class="fs-13 fw-medium mb-0 pe-2 mb-0">Late Fee : <span class="text-gray-9">$200</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center icon-list">
                                                            <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit_seasonal_price"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_price"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-2 pb-2">								
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Insurance</h6>
                                            <p>Add Insurance for Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                                                <a href="javascript:void(0);" class="btn btn-dark btn-md d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#select_insurance"><i class="ti ti-plus me-1"></i>Select New Insurance</a>
                                            </div>
                                            <div class="empty-data bg-light text-center mb-3">
                                                <p class="fw-medium">No Data Added</p>
                                            </div>	
                                            <div class="card bg-light mb-3">
                                                <div class="card-body pb-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-3">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Full Premium Insurance</h6>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$200</span></p>
                                                                <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">04</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center icon-list">
                                                            <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit_insurance"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_insurance"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap bg-white gap-3 border br-5 p-20 mb-1">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold d-inline-flex align-items-center mb-1">Roadside Assistance </h6>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <p class="fs-13 fw-medium border-end pe-2 mb-0">Price : <span class="text-gray-9">$250</span></p>
                                                                <p class="fs-13 fw-medium mb-0">Benefits : <span class="text-gray-9">06</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center icon-list">
                                                            <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit_insurance"><i class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_insurance"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center">Add Extra Services<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>
                        <fieldset>
                            <form action="#">	
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-float-center text-secondary me-2"></i>Extra Services</h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>		
                                <div class="border-bottom mb-2 pb-1 extra-service">	
                                    <div class="text-end">
                                        <a href="javascript:void(0);" class="link-purple text-decoration-underline fw-medium d-inline-block" data-bs-toggle="modal" data-bs-target="#edit_price">Edit Price</a>			
                                    </div>				
                                    <div class="row">
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-gps"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Navigation</h6>
                                                        <p class="fs-13">Using GPS while travel</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-wifi-2"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Wi-Fi Hotspot</h6>
                                                        <p class="fs-13">Constant portable internet</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">One time</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill active">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-baby-carriage"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Child Safety Seats</h6>
                                                        <p class="fs-13">Secure infant/toddler car seat</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-fill flex-wrap gap-3 active">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-baby-carriage"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Fuel Pre-Purchase</h6>
                                                        <p class="fs-13">Full tank, return hassle-free</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-user-star"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Roadside Assistance</h6>
                                                        <p class="fs-13">24/7 emergency car support</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-satellite"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Satellite Radio</h6>
                                                        <p class="fs-13"> Unlimited premium music</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-usb"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">USB Charger</h6>
                                                        <p class="fs-13">Fast charging for devices</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill active">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-checkup-list"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Express Check-in/out</h6>
                                                        <p class="fs-13">Fast pickup & return process</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-tallymark-2"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Toll Pass</h6>
                                                        <p class="fs-13">Skip toll booth lines</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-file-pencil"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Insurance</h6>
                                                        <p class="fs-13">Full coverage protection</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>											
                                        <div class="col-xxl-4 col-md-6 d-flex">
                                            <div class="form-check form-checkbox d-flex align-items-center justify-content-between flex-wrap gap-3 flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="service-icon bg-dark d-flex align-items-center justify-content-center me-2 ms-2">
                                                        <i class="ti ti-camera"></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fs-14 fw-semibold mb-1">Dash Cam</h6>
                                                        <p class="fs-13">Records trips extra security</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="fs-13 mb-1">Per Day</p>
                                                    <h6 class="fs-14 fw-semibold">$10</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center">Upload Documents<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>
                        <fieldset>
                            <form action="#">	
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-file-invoice text-secondary me-2"></i>Documents</h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>		
                                <div class="border-bottom mb-4 pb-3">	
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Car Documents</h6>
                                            <p>Add Important Documents of your Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-xxl-8 col-lg-10">
                                                    <h6 class="mb-3">Upload  Document</h6>
                                                    <div class="document-upload text-center bg-light br-5 mb-3">
                                                        <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                                        <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                                        <p class="fs-12 mb-0">Maximum size 50mb</p>
                                                        <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                                                    </div>
                                                    <div class="mb-3">
                                                        <p class="fs-13 mb-1">Upload Insurance, Car Registration, Documents</p>
                                                        <p class="fs-13">Formats PDF, Word</p>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white border br-5 gap-3 flex-wrap p-20 mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <span>
                                                                <img src="{{URL::asset('admin_assets/img/icons/pdf-icon.svg')}}" alt="img">
                                                            </span>
                                                            <div class="ms-2">
                                                                <h6 class="fs-14 fw-medium">Insurance_car3546</h6>
                                                                <p class="fs-13">24.45 KB</p>
                                                            </div>
                                                        </div>
                                                        <div class="progress-wrap">
                                                            <div class="progress progress-sm" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-success" style="width: 25%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="icon-list">
                                                            <a href="javascript:void(0);" class="trash-icon"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white border br-5 gap-3 flex-wrap p-20 mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <span>
                                                                <img src="{{URL::asset('admin_assets/img/icons/pdf-icon.svg')}}" alt="img">
                                                            </span>
                                                            <div class="ms-2">
                                                                <h6 class="fs-14 fw-medium">Reg_car3546</h6>
                                                                <p class="fs-13">20.45 KB</p>
                                                            </div>
                                                        </div>
                                                        <div class="progress-wrap d-none">
                                                            <div class="progress" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-success" style="width: 25%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="icon-list">
                                                            <a href="javascript:void(0);" class="trash-icon"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-4 pb-3">	
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Policies</h6>
                                            <p>Add policies of your Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-xxl-8 col-lg-10">
                                                    <h6 class="mb-3">Upload  Document</h6>
                                                    <div class="document-upload text-center bg-light br-5 mb-3">
                                                        <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                                        <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                                        <p class="fs-12 mb-0">Maximum size 50mb</p>
                                                        <input type="file" class="form-control image-sign" multiple="" accept=".pdf, .txt, .doc, .docx">
                                                    </div>
                                                    <div class="mb-3">
                                                        <p class="fs-13 mb-1">Upload Car Policy Documents</p>
                                                        <p class="fs-13">Formats PDF, Word</p>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bg-white border br-5 gap-3 flex-wrap p-20 mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <span>
                                                                <img src="{{URL::asset('admin_assets/img/icons/pdf-icon.svg')}}" alt="img">
                                                            </span>
                                                            <div class="ms-2">
                                                                <h6 class="fs-14 fw-medium">Insurance_car3546</h6>
                                                                <p class="fs-13">24.45 KB</p>
                                                            </div>
                                                        </div>
                                                        <div class="progress-wrap">
                                                            <div class="progress progress-sm" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-success" style="width: 25%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="icon-list">
                                                            <a href="javascript:void(0);" class="trash-icon"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-4 pb-4">	
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Video</h6>
                                            <p>Add Video About Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-xxl-8 col-lg-10">
                                                    <h6 class="mb-3">Upload  Document</h6>
                                                    <div class="document-upload text-center bg-light br-5 mb-3">
                                                        <img src="{{URL::asset('admin_assets/img/icons/upload-icon.svg')}}" alt="img" class="mb-2">
                                                        <p class="mb-2">Drop your files here or <span class="text-info text-decoration-underline">Browse</span></p>
                                                        <p class="fs-12 mb-0">Maximum size 50mb</p>
                                                        <input type="file" class="form-control image-sign" multiple="" accept="image/*">
                                                    </div>
                                                    <div class="uploaded-images d-flex align-items-center flex-wrap gap-3">
                                                        <div class="uploaded-img">
                                                            <img src="{{URL::asset('admin_assets/img/car/car-02.jpg')}}" alt="img">
                                                            <a href="javscsript:void(0);" class="trash-icon fs-12"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                        <div class="uploaded-img">
                                                            <img src="{{URL::asset('admin_assets/img/car/car-07.jpg')}}" alt="img">
                                                            <a href="javscsript:void(0);" class="trash-icon fs-12"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                        <div class="uploaded-img">
                                                            <img src="{{URL::asset('admin_assets/img/car/car-08.jpg')}}" alt="img">
                                                            <a href="javscsript:void(0);" class="trash-icon fs-12"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-2 pb-4">	
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Video</h6>
                                            <p>Add Video About Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-4">
                                                        <label class="form-label">Platform <span class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Youtube</option>
                                                            <option>Vimeo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-4">
                                                        <label class="form-label">Video Link</label>
                                                        <input type="text" class="form-control" value="https://www.youtube.com/cars_add/">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="uploaded-video">
                                                        <img src="{{URL::asset('admin_assets/img/car/car-lg-01.jpg')}}" alt="img">
                                                        <a href="https://www.youtube.com/embed/1trvO6dqQUI" data-fancybox="" class="play-icon">
                                                            <i class="ti ti-player-play-filled"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center">Add Damage<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>
                        <fieldset>
                            <form action="#">	
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-id text-secondary me-2"></i>Damages</h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>	
                                <div class="border-bottom mb-2 pb-4">	
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Damages</h6>
                                            <p>Add Damages On Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <a href="javascript:void(0);" class="btn btn-dark btn-md d-inline-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#add-damage"><i class="ti ti-plus me-1"></i>Add Damage</a>
                                            <div class="card border-0 bg-light mb-0">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                                                        <h6>Total Damages : 04</h6>
                                                        <div class="dropdown flag-dropdown">
                                                            <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                                All Damages
                                                            </a>
                                                            <ul class="dropdown-menu p-2">
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                                        All Damages
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                                        Interior
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                                        Exterior
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="bg-white p-20 br-5 border mb-2">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-xxl-8 col-md-7">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <h6 class="fs-14 fw-medium">Scratch</h6>
                                                                    <span class="badge bg-pink-transparent badge-sm">Interior</span>
                                                                </div>
                                                                <p class="fs-13">Minor surface marks, often from keys, branches, or road debris.</p>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-5">
                                                                <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                                    <p class="mb-0">Added on : 15 Jan 2025</p>
                                                                    <div class="icon-list d-flex align-items-center">
                                                                        <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit-damage"><i class="ti ti-edit"></i></a>
                                                                        <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_damage"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>															
                                                    </div>
                                                    <div class="bg-white p-20 br-5 border mb-2">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-xxl-8 col-md-7">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <h6 class="fs-14 fw-medium">Dent</h6>
                                                                    <span class="badge bg-secondary-transparent badge-sm">Exterior</span>
                                                                </div>
                                                                <p class="fs-13">Cracks, scratches, or faded surfaces due to heat exposure.</p>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-5">
                                                                <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                                    <p class="mb-0">Added on : 15 Jan 2025</p>
                                                                    <div class="icon-list d-flex align-items-center">
                                                                        <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit-damage"><i class="ti ti-edit"></i></a>
                                                                        <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_damage"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>															
                                                    </div>
                                                    <div class="bg-white p-20 br-5 border mb-2">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-xxl-8 col-md-7">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <h6 class="fs-14 fw-medium">Crack</h6>
                                                                    <span class="badge bg-pink-transparent badge-sm">Interior</span>
                                                                </div>
                                                                <p class="fs-13">Seats, door panels, or carpets with stains, rips, or burns.</p>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-5">
                                                                <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                                    <p class="mb-0">Added on : 15 Jan 2025</p>
                                                                    <div class="icon-list d-flex align-items-center">
                                                                        <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit-damage"><i class="ti ti-edit"></i></a>
                                                                        <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_damage"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>															
                                                    </div>
                                                    <div class="bg-white p-20 br-5 border mb-0">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-xxl-8 col-md-7">
                                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                                    <h6 class="fs-14 fw-medium">Clip</h6>
                                                                    <span class="badge bg-pink-transparent badge-sm">Interior</span>
                                                                </div>
                                                                <p class="fs-13">Non-functional windows, AC, or infotainment system damage.</p>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-5">
                                                                <div class="d-flex align-items-center justify-content-md-end gap-2 flex-wrap">
                                                                    <p class="mb-0">Added on : 15 Jan 2025</p>
                                                                    <div class="icon-list d-flex align-items-center">
                                                                        <a href="javascript:void(0);" class="edit-icon me-2" data-bs-toggle="modal" data-bs-target="#edit-damage"><i class="ti ti-edit"></i></a>
                                                                        <a href="javascript:void(0);" class="trash-icon" data-bs-toggle="modal" data-bs-target="#delete_damage"><i class="ti ti-trash"></i></a>
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
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center">Add Faq<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>							
                        <fieldset>
                            <form action="#">	
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-question-mark text-secondary me-2"></i>FAQ</h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>	
                                <div class="border-bottom mb-2 pb-4">	
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">FAQ</h6>
                                            <p>Add FAQ of your Car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <a href="javascript:void(0);" class="btn btn-dark btn-md d-inline-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#add-faq"><i class="ti ti-plus me-1"></i>Add FAQ</a>
                                            <div class="card border-0 bg-light mb-0">
                                                <div class="card-body">														
                                                    <h6 class="mb-3">Total FAQ : 04</h6>
                                                    <div class="custom-accordion-icon" id="faqaccordion">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#faq-one"
                                                                    aria-expanded="false" aria-controls="faq-one">
                                                                    <span class="faq-icon"><i class="ti ti-grip-vertical"></i></span>What are the requirements to rent a car?
                                                                </button>
                                                            </h2>
                                                            <div id="faq-one" class="accordion-collapse collapse" data-bs-parent="#faqaccordion">
                                                                <div class="accordion-body">
                                                                    <p class="fs-13">You must be at least 21 years old, have a valid driver’s license, and a credit card for payment.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#faq-two"
                                                                    aria-expanded="false" aria-controls="faq-two">
                                                                    <span class="faq-icon"><i class="ti ti-grip-vertical"></i></span>What are the requirements to rent a car?
                                                                </button>
                                                            </h2>
                                                            <div id="faq-two" class="accordion-collapse collapse" data-bs-parent="#faqaccordion">
                                                                <div class="accordion-body">
                                                                    <p class="fs-13">You must be at least 21 years old, have a valid driver’s license, and a credit card for payment.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#faq-three"
                                                                    aria-expanded="false" aria-controls="faq-three">
                                                                    <span class="faq-icon"><i class="ti ti-grip-vertical"></i></span>What are the requirements to rent a car?
                                                                </button>
                                                            </h2>
                                                            <div id="faq-three" class="accordion-collapse collapse" data-bs-parent="#faqaccordion">
                                                                <div class="accordion-body">
                                                                    <p class="fs-13">You must be at least 21 years old, have a valid driver’s license, and a credit card for payment.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#faq-four"
                                                                    aria-expanded="false" aria-controls="faq-four">
                                                                    <span class="faq-icon"><i class="ti ti-grip-vertical"></i></span>What are the requirements to rent a car?
                                                                </button>
                                                            </h2>
                                                            <div id="faq-four" class="accordion-collapse collapse" data-bs-parent="#faqaccordion">
                                                                <div class="accordion-body">
                                                                    <p class="fs-13">You must be at least 21 years old, have a valid driver’s license, and a credit card for payment.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center">Add Seo<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>						
                        <fieldset>
                            <form action="{{url('admin/cars')}}">	
                                <div class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center"><i class="ti ti-question-mark text-secondary me-2"></i>SEO</h4>
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="Language" class="img-fluid me-1">English
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/gb.svg')}}" alt="" height="16" class="me-1">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                                                    <img src="{{URL::asset('admin_assets/img/flags/sa.svg')}}" alt="" height="16" class="me-1">Arabic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>	
                                <div class="border-bottom mb-2 pb-2">	
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">SEO</h6>
                                            <p>Add SEO Meta of the car</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="mb-3">
                                                <label class="form-label">Meta Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Keywords <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2"><i class="ti ti-chevron-left me-1"></i>Back</button>
                                    <button class="btn btn-primary d-flex align-items-center">Save & Exit<i class="ti ti-chevron-right ms-1"></i></button>
                                </div>
                            </form>
                        </fieldset>
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