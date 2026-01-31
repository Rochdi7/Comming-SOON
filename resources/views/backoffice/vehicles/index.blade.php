<?php $page = 'cars'; ?>
@extends('layout.mainlayout_admin')

@section('content')
    <div class="page-wrapper">
        <div class="content me-4">

            {{-- Breadcrumb + top buttons (Print/Export/Add) --}}
            @include('backoffice.vehicles.partials._breadcrumbs')

            {{-- Table header (sort/date/filter + bulk/search/columns) --}}
            @include('backoffice.vehicles.partials._table_header')

            {{-- Collapse filters (block “Filters”) --}}
            @include('backoffice.vehicles.partials._filters')

            {{-- Data table --}}
            @include('backoffice.vehicles.partials._table')

            <div class="table-footer"></div>
        </div>

        {{-- Footer theme --}}
        @include('backoffice.vehicles.partials._footer')
    </div>
@endsection
