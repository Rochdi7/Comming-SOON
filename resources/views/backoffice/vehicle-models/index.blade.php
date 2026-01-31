<?php $page = 'models'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">

            {{-- Breadcrumb (same design) --}}
            @include('backoffice.vehicle-models.partials._breadcrumbs')

            <!-- Table Header -->
            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                <div class="top-search me-2">
                    <div class="top-search-group">
                        <span class="input-icon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Rechercher">
                    </div>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                        data-bs-toggle="dropdown">
                        <i class="ti ti-badge me-1"></i> Statut
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-2">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Actif</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactif</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Table Header -->

            <!-- Custom Data Table -->
            <div class="custom-datatable-filter table-responsive">
                @include('backoffice.vehicle-models.partials._table', ['models' => $models])
            </div>
            <!-- Custom Data Table -->

            <div class="table-footer">
                <div class="d-flex justify-content-end">
                    {{ $models->links() }}
                </div>
            </div>

        </div>

        <!-- Footer-->
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="#">Politique de confidentialité</a>
                <a href="#" class="ms-4">Conditions d’utilisation</a>
            </p>
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by
                <a href="#" class="text-secondary">Dreams</a>
            </p>
        </div>
        <!-- /Footer-->
    </div>
    <!-- /Page Wrapper -->

    {{-- Add Modal (Form) --}}
    @include('backoffice.vehicle-models.partials._modal_create')

    {{-- Edit Modal (Form) --}}
    @include('backoffice.vehicle-models.partials._modal_edit')

    {{-- Delete Modal (Form) --}}
    @include('backoffice.vehicle-models.partials._modal_delete')

    {{-- JS for modals --}}
    @include('backoffice.vehicle-models.partials._modals_js')
@endsection
