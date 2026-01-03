<?php $page = 'add-invoice'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            <div class="mb-3">
                <a href="{{url('admin/invoices')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-narrow-left me-2"></i>Back to List</a>
            </div>
            <div class="filterbox mb-3 d-flex align-items-center invoice-title">
                <h4 class="me-3"><i class="ti ti-menu-2 me-2"></i>Add Invoice</h4>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="border-bottom mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="me-lg-3">
                                    <h5 class="mb-3">Invoice Details</h5>
                                    <div class="row gx-3">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Invoice Number</label>
                                                <input type="text" class="form-control" value="5432" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Car</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Ford Endeavour</option>
                                                    <option>Ferrari 458 MM</option>
                                                    <option>Ford Mustang</option>
                                                    <option>Toyota Tacoma 4</option>
                                                    <option>Chevrolet Truck</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">From Date</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Due Date</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Currency</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Dollor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Paid</option>
                                                    <option>Pending</option>
                                                    <option>Overdue</option>
                                                    <option>Unpaid</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ms-lg-3">
                                    <h5 class="mb-3">Billing Details</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <select class="select">
                                                    <option>Dreams Rent</option>
                                                    <option>Ford Endeavour</option>
                                                    <option>Ferrari 458 MM</option>
                                                    <option>Ford Mustang</option>
                                                    <option>Toyota Tacoma 4</option>
                                                    <option>Chevrolet Truck</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label class="form-label">To</label>
                                                    <a href="#" class="text-info d-block mb-1">Add New</a>
                                                </div>
                                                <select class="select">
                                                    <option>Select Customer</option>
                                                    <option>Andrew Simons</option>
                                                    <option>David Steiger</option>
                                                    <option>Virginia Phu</option>
                                                    <option>Walter Hartmann</option>
                                                    <option>Andrea Jermaine</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-3">Rental Details</h5>
                        <div class="table-responsive border border-gray br-10 mb-3">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="w-50">DESCRIPTION</th>
                                        <th>QUANTITY</th>
                                        <th>NET PRICE</th>
                                        <th>TAX</th>
                                        <th>TOTAL PRICE</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pe-0">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="" class="btn btn-icon btn-sm text-danger"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                            <a href="#" class="btn btn-secondary d-inline-flex align-items-center me-2"><i class="ti ti-plus me-1"></i>Add More</a>
                            <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#link_reservation">Link Reservation</a>
                        </div>
                        <div class="border-bottom mb-3">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="me-lg-4">
                                        <h5 class="mb-3">Others</h5>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Payment Method</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Bank Transfer</option>
                                                    <option>Paypal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Terms & Conditions <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Notes <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="border-bottom mb-3">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>Subtotal</span>
                                                    <h6>$0.00</h6>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>Discount (0%)</span>
                                                    <h6 class="text-danger fs-14 fw-medium">$0.00</h6>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span>TAX (0%)</span>
                                                    <h6>$0.00</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h4>Total Amount </h4>
                                                <h4>$0.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="#" class="btn btn-light me-2">Cancel</a>
                        <a href="#" class="btn btn-primary">Save & Send</a>
                    </div>
                </div>
            </div>
            
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