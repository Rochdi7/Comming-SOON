<table class="table datatable">
    <thead class="thead-light">
        <tr>
            <th class="no-sort">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox" id="select-all">
                </div>
            </th>
            <th>MODÈLE</th>
            <th>MARQUE</th>
            <th>STATUT</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @forelse($models as $model)
            @php
                $brandName = $model->brand->name ?? '—';
                $brandLogo = $model->brand->logo_url ?? asset('admin_assets/img/brands/toyota.svg');
            @endphp

            <tr>
                {{-- Checkbox --}}
                <td>
                    <div class="form-check form-check-md">
                        <input class="form-check-input" type="checkbox">
                    </div>
                </td>

                {{-- Model --}}
                <td>
                    <div class="d-flex align-items-center file-name-icon">
                        <div class="ms-0">
                            <h6 class="fw-medium mb-0">
                                <a href="javascript:void(0);">
                                    {{ $model->name }}
                                </a>
                            </h6>
                        </div>
                    </div>
                </td>

                {{-- Brand --}}
                <td>
                    <div class="d-flex align-items-center file-name-icon">
                        <a href="javascript:void(0);" class="avatar avatar-lg border">
                            <img src="{{ $brandLogo }}" class="img-fluid" alt="brand">
                        </a>
                        <div class="ms-2">
                            <h6 class="fw-medium mb-0">
                                <a href="javascript:void(0);">
                                    {{ $brandName }}
                                </a>
                            </h6>
                        </div>
                    </div>
                </td>

                {{-- Status (static UI for now) --}}
                <td>
                    <span class="badge badge-success-transparent d-inline-flex align-items-center badge-sm">
                        <i class="ti ti-point-filled me-1"></i>Actif
                    </span>
                </td>

                {{-- Actions (EDIT / DELETE) --}}
                <td>
                    @include('backoffice.vehicle-models.partials._actions', [
                        'model' => $model,
                    ])
                </td>
            </tr>
        @empty
            <tr>
                <td></td>
                <td colspan="3" class="text-center">Aucun modèle trouvé.</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
</table>
