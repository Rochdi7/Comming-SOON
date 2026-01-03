<?php $page = 'permissions'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">
            
            <!-- Breadcrumb -->
                <div class="my-auto mb-3 pb-1">
                    <a href="{{url('admin/roles-permissions')}}" class="mb-1 text-gray-9 fw-medium"><i class="ti ti-arrow-left me-1"></i>Back to List</a>
                </div>
            <!-- /Breadcrumb -->

            <div class="filterbox mb-3 d-flex align-items-center mb-3">
                <span class="avatar avatar-lg bg-white text-secondary rounded-2 me-2">
                    <i class="ti ti-user-shield fs-25 fw-normal"></i>
                </span>
                <div>
                    <p class="mb-0">Role</p>
                    <h6 class="fw-medium">Administrator</h6>
                </div>
            </div>

            <!-- Custom Data Table -->
                <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>BOOKINGS</h6>
                        <div class="no-sort">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox" id="select-all4">
                                <label class="form-check-label" for="select-all4">Allow All</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>MODULE</th>
                                    <th>CREATE</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                    <th>VIEW</th>
                                    <th>ALLOW ALL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Reservations</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Calendar</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Quotations</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Enquiries</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Units</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">People</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Companies</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Drivers</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Locations</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check4">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>     
                            </tbody>	
                        </table>
                    </div>
                </div>
                </div>
                <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>RENTALS</h6>
                        <div class="no-sort">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox" id="select-all2">
                                <label class="form-check-label" for="select-all2">Allow All</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>MODULE</th>
                                    <th>CREATE</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                    <th>VIEW</th>
                                    <th>ALLOW ALL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Cars</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input " type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Car Attributes</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Inspections</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Issues</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Tracking</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Maintanence</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check2">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>  
                            </tbody>	
                        </table>
                    </div>
                </div>
                </div>
                <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>OTHERS</h6>
                        <div class="no-sort">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox" id="select-all3">
                                <label class="form-check-label" for="select-all3">Allow All</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>MODULE</th>
                                    <th>CREATE</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                    <th>VIEW</th>
                                    <th>ALLOW ALL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Payments</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input " type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Reviews</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Messages</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Blogs</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Reports</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                </tr>                                          
                                <tr>
                                    <td>
                                        <p class="text-gray-9 fw-medium">Settings</p>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-md check3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                </tr>  
                            </tbody>	
                        </table>
                    </div>
                </div>
                </div>
                <div class="card mb-0">
                <div class="card-body py-2 my-1">
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary me-2">Submit</a>
                    </div>
                </div>
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