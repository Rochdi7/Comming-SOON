<?php $page = 'invoice-details'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            <div class="mb-3">
                <a href="{{url('admin/invoices')}}" class="d-inline-flex align-items-center fw-medium"><i class="ti ti-arrow-narrow-left me-2"></i>Back to List</a>
            </div>
            <div class="filterbox mb-3 d-flex align-items-center invoice-title">
                <h4 class="me-3"><i class="ti ti-menu-2 me-2"></i>Invoice Details</h4>
            </div>
            <div class="card car-invoice">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center border-bottom mb-3">
                        <div class="col-md-6">
                            <div class="  mb-3">
                                <h2 class="text-violet mb-3">#INV78245</h2>
                                <p class="mb-1 fw-medium d-flex"><span class="text-dark min-width-100 d-flex">Created Date</span>Sep 24, 2025 </p>
                                <p class="fw-medium d-flex"><span class="text-dark min-width-100 d-flex">Due Date</span>Sep 30, 2025 </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" text-end mb-2">
                                <img src="{{URL::asset('admin_assets/img/logo.svg')}}" class="invoice-logo img-fluid" alt="logo">
                                <p class="mb-2">Flat8, Park View House, 7 high Street , US</p>
                                <span class="badge badge-soft-violet"><i class="ti ti-point-filled me-1"></i>Partially Paid</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row border-bottom mb-3">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="text-dark mb-3 fw-semibold">From</h5>
                                    <div>
                                        <h6 class="mb-1">DreamsRent</h6>
                                        <p class="mb-1">Flat8,Park View House, 7 high Street , US</p>
                                        <p class="mb-1">Contact : <span class="text-dark">+447123456789</span></p>
                                        <p>dreamsrent@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="text-dark mb-3 fw-semibold">To</h5>
                                    <div>
                                        <h6 class="mb-1">David Seigar</h6>
                                        <p class="mb-1">20 Cooper Square, New York, NY 10003, USA</p>
                                        <p class="mb-1">Contact : <span class="text-dark">+447123456789</span></p>
                                        <p>your123@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div>
                        <div class="table-responsive border border-gray br-10 mb-3">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>DESCRIPTION</th>
                                        <th class="text-end">TYPE</th>
                                        <th class="text-end">QUANTITY</th>
                                        <th class="text-end">COST</th>
                                        <th class="text-end">DISCOUNT</th>
                                        <th class="text-end">TAX</th>
                                        <th class="text-end">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><h6 class="fw-semibold">Tesla Model Y Rental</h6></td>
                                        <td class="text-gray-5 fw-medium text-end">Car Rental</td>
                                        <td class="text-gray-5 fw-medium text-end">5 Days</td>
                                        <td class="text-gray-5 fw-medium text-end">$60.00</td>
                                        <td class="text-gray-5 fw-medium text-end">$20.00</td>
                                        <td class="text-gray-5 fw-medium text-end">30%</td>
                                        <td class="text-gray-9 fw-bold text-end">$270.00</td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="fw-semibold">GPS Navigation System</h6></td>
                                        <td class="text-gray-5 fw-medium text-end">Add-on</td>
                                        <td class="text-gray-5 fw-medium text-end">1 Unit</td>
                                        <td class="text-gray-5 fw-medium text-end">$10.00</td>
                                        <td class="text-gray-5 fw-medium text-end">$0.00</td>
                                        <td class="text-gray-5 fw-medium text-end">0%</td>
                                        <td class="text-gray-9 fw-bold text-end">$10.00</td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="fw-semibold">Full Coverage Insurance</h6></td>
                                        <td class="text-gray-5 fw-medium text-end">Insurance</td>
                                        <td class="text-gray-5 fw-medium text-end">5 Days</td>
                                        <td class="text-gray-5 fw-medium text-end">$20.00</td>
                                        <td class="text-gray-5 fw-medium text-end">$10.00</td>
                                        <td class="text-gray-5 fw-medium text-end">20%</td>
                                        <td class="text-gray-9 fw-bold text-end">$80.00</td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="fw-semibold">Extra Driver Fee</h6></td>
                                        <td class="text-gray-5 fw-medium text-end">Add-on</td>
                                        <td class="text-gray-5 fw-medium text-end">1 Person</td>
                                        <td class="text-gray-5 fw-medium text-end">$15.00</td>
                                        <td class="text-gray-5 fw-medium text-end">$5.00</td>
                                        <td class="text-gray-5 fw-medium text-end">5%</td>
                                        <td class="text-gray-9 fw-bold text-end">$10.00</td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="fw-semibold">Late Return Fee</h6></td>
                                        <td class="text-gray-5 fw-medium text-end">Penalty</td>
                                        <td class="text-gray-5 fw-medium text-end">1 Instance</td>
                                        <td class="text-gray-5 fw-medium text-end">$30.00</td>
                                        <td class="text-gray-5 fw-medium text-end">$0.00</td>
                                        <td class="text-gray-5 fw-medium text-end">0%</td>
                                        <td class="text-gray-9 fw-bold text-end">$30.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row border-bottom mb-3">
                        <div class="col-md-7">
                            <div class="py-4">
                                <div class="mb-3">
                                    <h6 class="mb-1">Terms and Conditions</h6>
                                    <p>The car must be returned in the same condition as rented. Additional charges may apply for damages, late returns, or excessive mileage.</p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="mb-1">Notes</h6>
                                    <p>All charges are final and include applicable taxes, fees, and additional costs incurred during the rental period.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                <p class="mb-0">Sub Total</p>
                                <p class="text-dark fw-medium mb-2">$400</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                <p class="mb-0">Discount(0%)</p>
                                <p class="text-danger fw-medium mb-2">00.0</p>
                            </div>
                            <div class="d-flex justify-content-between border-bottom align-items-center pb-2 mb-2 pe-3">
                                <p class="mb-0">TAX(0%)</p>
                                <p class="text-dark fw-medium mb-2">$54</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2 pe-3">
                                <h5>Total Amount</h5>
                                <h5>$500.00</h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-9">
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <p class="mb-2 text-center">Scan to the pay</p>
                                    <img src="{{URL::asset('admin_assets/img/icons/qr-img.svg')}}" alt="">
                                </div>
                                <div>
                                    <h5 class="mb-2">Bank Details</h5>
                                    <p class="mb-2 d-flex"><span class="text-dark min-width-150 d-flex">Bank Name</span>ABC Bank </p>
                                    <p class="mb-2 d-flex"><span class="text-dark min-width-150 d-flex">Account Number</span>782459739212</p>
                                    <p class="mb-2 d-flex"><span class="text-dark min-width-150 d-flex">IFSC Code</span>ABC0001345</p>
                                    <p class="mb-0 d-flex"><span class="text-dark min-width-150 d-flex">Payment Reference</span>INV-20250220-001</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-end">
                                <img src="{{URL::asset('admin_assets/img/icons/sign-2.svg')}}" class="img-fluid" alt="sign">
                            </div>
                            <div class="text-end mb-3">
                                <h6 class="fs-14 fw-medium pe-3">Ted M. Davis</h6>
                                <p>Assistant Manager</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-4">
                <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center align-items-center me-2"><i class="ti ti-printer me-2"></i>Print Invoice</a>
                <a href="javascript:void(0);" class="btn btn-dark d-flex justify-content-center align-items-center border"><i class="ti ti-download me-2"></i>Download Invoice</a>
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