<?php $page = 'roles-permissions'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content me-4">

        {{-- Breadcrumb --}}
        @include('Backoffice.roles-permissions.partials._breadcrumbs')

        <!-- Table Header -->
        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
            <div class="d-flex align-items-center flex-wrap row-gap-3">
                <div class="top-search me-2">
                    <div class="top-search-group">
                        <span class="input-icon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" id="rpSearchInput" placeholder="Rechercher (rôles / permissions)">
                    </div>
                </div>
            </div>

          
        </div>
        <!-- /Table Header -->

        <!-- Tabs (Theme: tab-style-6) -->
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs mb-3 tab-style-6" id="rolesPermTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="roles-tab"
                                data-bs-toggle="tab" data-bs-target="#roles-tab-pane"
                                type="button" role="tab" aria-controls="roles-tab-pane" aria-selected="true">
                            <i class="ti ti-user-shield me-1 align-middle d-inline-block"></i>Rôles
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="permissions-tab"
                                data-bs-toggle="tab" data-bs-target="#permissions-tab-pane"
                                type="button" role="tab" aria-controls="permissions-tab-pane" aria-selected="false">
                            <i class="ti ti-shield me-1 align-middle d-inline-block"></i>Permissions
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="rolesPermTabsContent">

                    {{-- ROLES --}}
                    <div class="tab-pane fade show active p-0 border-bottom-0" id="roles-tab-pane"
                         role="tabpanel" aria-labelledby="roles-tab" tabindex="0">
                        <div class="custom-datatable-filter table-responsive">
                            @include('Backoffice.roles-permissions.partials._table', ['mode' => 'roles'])
                        </div>

                        
                    </div>

                    {{-- PERMISSIONS --}}
                    <div class="tab-pane fade p-0 border-bottom-0" id="permissions-tab-pane"
                         role="tabpanel" aria-labelledby="permissions-tab" tabindex="0">
                        <div class="custom-datatable-filter table-responsive">
                            @include('Backoffice.roles-permissions.partials._table', ['mode' => 'permissions'])
                        </div>

                    
                    </div>

                </div>

            </div>
        </div>
        <!-- /Tabs -->

    </div>

    <!-- Footer-->
    <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
        <p class="mb-0">
            <a href="javascript:void(0);">Privacy Policy</a>
            <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
        </p>
        <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by
            <a href="javascript:void(0);" class="text-secondary">Dreams</a>
        </p>
    </div>
    <!-- /Footer-->
</div>
<!-- /Page Wrapper -->

{{-- Modals --}}
@include('Backoffice.roles-permissions.partials._modal_create')
@include('Backoffice.roles-permissions.partials._modal_edit')
@include('Backoffice.roles-permissions.partials._modal_delete')

{{-- JS --}}
@include('Backoffice.roles-permissions.partials._modals_js')

{{-- Small inline JS: search filter inside tabs (no extra file) --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('rpSearchInput');
    if (!input) return;

    input.addEventListener('input', function () {
        const q = (this.value || '').toLowerCase().trim();

        const tables = document.querySelectorAll('#rolesPermTabsContent table');
        tables.forEach(table => {
            const rows = table.querySelectorAll('tbody tr');
            rows.forEach(row => {
                const text = (row.innerText || '').toLowerCase();
                row.style.display = text.includes(q) ? '' : 'none';
            });
        });
    });
});
</script>
@endsection
