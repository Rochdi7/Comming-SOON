<table class="table datatable">
    <thead class="thead-light">
        <tr>
            <th class="no-sort">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox" id="select-all">
                </div>
            </th>
            <th>NAME</th>
            <th>TOTAL CARS</th>
            <th>STATUS</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @forelse($brands as $brand)
            @php
                $logo = $brand->logo_url ?: asset('admin_assets/img/brands/toyota.svg');
                $carsCount = $brand->vehicles()->count();
            @endphp

            <tr>
                {{-- Checkbox --}}
                <td>
                    <div class="form-check form-check-md">
                        <input class="form-check-input" type="checkbox">
                    </div>
                </td>

                {{-- Brand --}}
                <td>
                    <div class="d-flex align-items-center file-name-icon">
                        <a href="javascript:void(0);" class="avatar avatar-lg border">
                            <img src="{{ $logo }}" class="img-fluid" alt="brand">
                        </a>
                        <div class="ms-2">
                            <h6 class="fw-medium mb-0">
                                <a href="javascript:void(0);">
                                    {{ $brand->name }}
                                </a>
                            </h6>
                        </div>
                    </div>
                </td>

                {{-- Total Cars --}}
                <td>{{ $carsCount }}</td>

                {{-- Status (static UI for now) --}}
                <td>
                    <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                        <i class="ti ti-point-filled me-1"></i>Active
                    </span>
                </td>

                {{-- Actions (EDIT / DELETE) --}}
                <td>
                    @include('backoffice.vehicle-brands.partials._actions', [
                        'brand' => $brand,
                        'logo' => $logo,
                    ])
                </td>
            </tr>
        @empty
            <tr>
                <td></td>
                <td colspan="3" class="text-center">No brands found.</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
</table>
