<?php $page = 'invoice-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Invoice
        @endslot
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Invoice
        @endslot
    @endcomponent
    <!-- Invoice -->
    <div class="invoice-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <!-- Invoice heading -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('/build/img/logo.svg') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h1>Invoice</h1>
                                        <h6>Invoice Number : <span>In983248782</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice heading -->

                        <!-- Invoice To -->
                        <div class="invoice-item-bill">
                            <ul>
                                <li>
                                    <div class="invoice-info">
                                        <h6>Billed to</h6>
                                        <p>
                                            Customer Name<br>
                                            9087484288<br>
                                            Address line 1,<br>
                                            Address line 2<br>
                                            Zip code ,City - Country
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="invoice-info">
                                        <h6>Invoice From</h6>
                                        <p>
                                            Company Name<br>
                                            9087484288<br>
                                            Address line 1, Address line 2<br>
                                            Zip code ,City - Country
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="invoice-info">
                                        <p>Issue Date : <span> 14 Apr 2023</span></p>
                                        <p>Due Date : <span> 27 Jun 2023</span></p>
                                        <p>Due Amount : <span> $ 1,54,22</span></p>
                                        <p>Recurring Invoice : <span> 15 Months</span></p>
                                        <p>PO Number : <span> 54515454</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /Invoice To -->

                        <!-- Invoice Item -->
                        <div class="invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-center table-hover">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Category</th>
                                                    <th>Rate/Item</th>
                                                    <th>Quantity</th>
                                                    <th>Discount (%)</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dreams Rental Cars</td>
                                                    <td>Kia Soul</td>
                                                    <td>$1,110</td>
                                                    <td>2</td>
                                                    <td>2 %</td>
                                                    <td>$2,220</td>
                                                </tr>
                                                <tr>
                                                    <td>Dreams Rental Cars</td>
                                                    <td>Toyota Tacoma</td>
                                                    <td>$1,110</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>$2,220</td>
                                                </tr>
                                                <tr>
                                                    <td>Dreams Rental Cars</td>
                                                    <td>Audi A3</td>
                                                    <td>$1,110</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>$2,220</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Payment Details -->
                        <div class="payment-details">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="invoice-terms">
                                        <h6>Payment Details</h6>
                                        <div class="invocie-note">
                                            <p>Debit Card<br>
                                                XXXXXXXXXXXX-2541<br>
                                                HDFC Bank</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="invoice-total-box">
                                        <div class="invoice-total-inner">
                                            <p>Taxable <span>$6,660</span></p>
                                            <p>Additional Charges<span>$6,660</span></p>
                                            <p>Discount: <span>- $ 3,300</span></p>
                                            <p>Sub total <span> $ 3,300</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Payment Details -->

                        <!-- Total Amount -->
                        <div class="invoice-total">
                            <h4>Total Amount <span>$143,300</span></h4>
                        </div>
                        <!-- /Total Amount -->


                        <div class="invoice-note-footer">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12">
                                    <div class="invocie-note">
                                        <h6>Notes</h6>
                                        <p>Enter customer notes or any other details</p>
                                    </div>
                                    <div class="invocie-note mb-0">
                                        <h6>Terms And Conditions</h6>
                                        <p>Enter customer notes or any other details</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="invoice-sign">
                                        <img class="img-fluid d-inline-block"
                                            src="{{ URL::asset('/build/img/signature.png') }}" alt="sign">
                                        <span class="d-block">Harristemp</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoice -->

@endsection
