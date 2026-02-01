<?php $page = 'users'; ?>
@extends('layout.mainlayout_admin')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-4">

            {{-- Breadcrumb --}}
            @include('backoffice.users.partials._breadcrumbs')

            <!-- Table Header -->
            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                <div class="d-flex align-items-center flex-wrap row-gap-3">
                    <div class="dropdown me-2">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <i class="ti ti-filter me-1"></i> Trier : Derniers
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-2">
                            <li><a href="javascript:void(0);" class="dropdown-item rounded-1">Derniers</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item rounded-1">A → Z</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item rounded-1">Z → A</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <a href="#filtercollapse" class="filtercollapse coloumn d-inline-flex align-items-center"
                            data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse">
                            <i class="ti ti-filter me-1"></i> Filtres
                            <span class="badge badge-xs rounded-pill bg-danger ms-2">0</span>
                        </a>
                    </div>
                </div>

                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                    <div class="top-search me-2">
                        <div class="top-search-group">
                            <span class="input-icon">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Rechercher">
                        </div>
                    </div>

                    <div class="mb-0">
                        <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center"
                            data-bs-toggle="modal" data-bs-target="#add_user">
                            <i class="ti ti-plus me-2"></i>Ajouter un utilisateur
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Table Header -->

            <div class="collapse" id="filtercollapse">
                <div class="filterbox mb-3 d-flex align-items-center">
                    <h6 class="me-3">Filtres</h6>

                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Statut
                        </a>
                        <ul class="dropdown-menu dropdown-menu-md p-2">
                            <li class="dropdown-item">Actif</li>
                            <li class="dropdown-item">Inactif</li>
                            <li class="dropdown-item">Bloqué</li>
                        </ul>
                    </div>

                    <a href="javascript:void(0);" class="me-2 text-purple links">Appliquer</a>
                    <a href="javascript:void(0);" class="text-danger links">Tout effacer</a>
                </div>
            </div>

            <!-- Custom Data Table -->
            <div class="custom-datatable-filter table-responsive">
                @include('backoffice.users.partials._table', ['users' => $users])
            </div>
            <!-- /Custom Data Table -->

            <div class="table-footer">
                <div class="d-flex justify-content-end">
                    {{ $users->links() }}
                </div>
            </div>

        </div>

        <!-- Footer-->
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">2024 © Rental Car. All rights reserved.</p>
            <p class="mb-0">v1.0</p>
        </div>
        <!-- /Footer-->

    </div>
    <!-- /Page Wrapper -->

    {{-- Modals --}}
    @include('backoffice.users.partials._modal_create')
    @include('backoffice.users.partials._modal_edit')
    @include('backoffice.users.partials._modal_delete')

    {{-- Scripts --}}
    @include('backoffice.users.partials._modals_js')
@endsection
