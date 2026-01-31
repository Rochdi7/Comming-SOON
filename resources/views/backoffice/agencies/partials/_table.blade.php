<table class="table datatable">
    <thead class="thead-light">
        <tr>
            <th class="no-sort">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox" id="select-all">
                </div>
            </th>
            <th>NOM</th>
            <th>TOTAL CARS</th>
            <th>STATUT</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @forelse($agencies as $agency)
            @php
                $carsCount = method_exists($agency, 'vehicles') ? $agency->vehicles()->count() : 0;
                $isActive = ($agency->status ?? 'active') === 'active';
            @endphp

            <tr>
                <td>
                    <div class="form-check form-check-md">
                        <input class="form-check-input" type="checkbox">
                    </div>
                </td>

                <td>
                    <div class="d-flex align-items-center file-name-icon">
                        <a href="javascript:void(0);" class="avatar avatar-lg border">
                            <span class="avatar-title bg-light text-dark fw-bold">
                                {{ strtoupper(mb_substr($agency->name, 0, 1)) }}
                            </span>
                        </a>
                        <div class="ms-2">
                            <h6 class="fw-medium mb-0">
                                <a href="javascript:void(0);">{{ $agency->name }}</a>
                            </h6>
                            @if(!empty($agency->email))
                                <small class="text-muted">{{ $agency->email }}</small>
                            @endif
                        </div>
                    </div>
                </td>

                <td>{{ $carsCount }}</td>

                <td>
                    @if($isActive)
                        <span class="badge badge-dark-transparent">
                            <i class="ti ti-point-filled text-success me-1"></i>Active
                        </span>
                    @else
                        <span class="badge badge-dark-transparent">
                            <i class="ti ti-point-filled text-danger me-1"></i>Inactive
                        </span>
                    @endif
                </td>

                <td>
                    @include('backoffice.agencies.partials._actions', ['agency' => $agency])
                </td>
            </tr>
        @empty
            <tr>
                <td></td>
                <td colspan="3" class="text-center">Aucune agence trouvée.</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
</table>
