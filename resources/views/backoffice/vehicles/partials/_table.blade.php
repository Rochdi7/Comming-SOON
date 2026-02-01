<!-- Custom Data Table -->
<div class="custom-datatable-filter table-responsive">
    <table class="table datatable">
        <thead class="thead-light">
            <tr>
                <th class="no-sort">
                    <div class="form-check form-check-md">
                        <input class="form-check-input" type="checkbox" id="select-all">
                    </div>
                </th>
                <th>CAR</th>
                <th>BASE LOCATION</th>
                <th>PRICE (PER DAY)</th>
                <th>MILEAGE</th>
                <th>CREATED DATE</th>
                <th>STATUS</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse($vehicles as $vehicle)
                @php
                    $photoUrl = $vehicle->getFirstMediaUrl('vehicle_photos') ?: asset('images/placeholder.jpg');

                    $brandName = optional(optional($vehicle->model)->brand)->name;
                    $modelName = optional($vehicle->model)->name;

                    $carTitle = trim(($brandName ? $brandName . ' ' : '') . ($modelName ?? ''));
                    if ($carTitle === '') {
                        $carTitle = $vehicle->registration_number;
                    }

                    // Status
                    $status = $vehicle->status;
                    $statusLabel = match ($status) {
                        'available' => 'Disponible',
                        'unavailable' => 'Indisponible',
                        'maintenance' => 'Maintenance',
                        'sold' => 'Vendu',
                        default => '—',
                    };
                    $statusDot = match ($status) {
                        'available' => 'text-success',
                        'unavailable' => 'text-danger',
                        'maintenance' => 'text-warning',
                        'sold' => 'text-secondary',
                        default => 'text-muted',
                    };

                    $createdDate = optional($vehicle->created_at)->format('d M Y');
                    $createdTime = optional($vehicle->created_at)->format('h:i A');

                    // “Base location” : on met registration_city (tu pourras changer par vraie location)
                    $baseLocation = $vehicle->registration_city ?: '—';

                    $daily = $vehicle->daily_rate !== null ? number_format((float) $vehicle->daily_rate, 2) : null;
                    $mileage =
                        $vehicle->current_mileage !== null ? number_format((int) $vehicle->current_mileage) : null;
                @endphp

                <tr>
                    <td>
                        <div class="form-check form-check-md">
                            <input class="form-check-input row-check" type="checkbox" value="{{ $vehicle->id }}">
                        </div>
                    </td>

                    <td>
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                <img src="{{ $photoUrl }}" class="rounded-3" alt="car">
                            </a>
                            <div>
                                <h6 class="mb-1">
                                    <a href="javascript:void(0);" class="fs-14 fw-semibold">
                                        {{ $carTitle }}
                                    </a>
                                </h6>
                                <p class="mb-0">
                                    {{ $vehicle->registration_number }}
                                    @if ($vehicle->year)
                                        <span class="ms-2">{{ $vehicle->year }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </td>

                    <td>
                        {{ $baseLocation }}
                    </td>

                    <td>
                        <p class="fs-14 fw-semibold text-gray-9">
                            @if ($daily !== null)
                                {{ $daily }} MAD
                            @else
                                —
                            @endif
                        </p>
                    </td>

                    <td>
                        <p class="text-gray-9">
                            @if ($mileage !== null)
                                {{ $mileage }} km
                            @else
                                —
                            @endif
                        </p>
                    </td>

                    <td>
                        <h6 class="fs-14 fw-normal">{{ $createdDate ?: '—' }}</h6>
                        <p class="fs-13">{{ $createdTime ?: '' }}</p>
                    </td>

                    <td>
                        <span class="badge badge-dark-transparent">
                            <i class="ti ti-point-filled {{ $statusDot }} me-1"></i>{{ $statusLabel }}
                        </span>
                    </td>

                    <td>
                        <div class="dropdown">
                            <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-end p-2">
                                {{-- VIEW (optionnel) --}}
                                <li>
                                    <a class="dropdown-item rounded-1"
                                        href="{{ route('Backoffice.vehicles.show', $vehicle) }}">
                                        <i class="ti ti-eye me-1"></i>Voir détails
                                    </a>
                                </li>

                                {{-- EDIT => ouvre ton modal edit --}}
                                <li>
                                    <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#modal_vehicle_edit"
                                        data-edit-action="{{ route('Backoffice.vehicles.update', $vehicle) }}"
                                        data-vehicle-id="{{ $vehicle->id }}"
                                        data-vehicle-model-id="{{ $vehicle->vehicle_model_id }}"
                                        data-registration-number="{{ $vehicle->registration_number }}"
                                        data-registration-city="{{ $vehicle->registration_city }}"
                                        data-year="{{ $vehicle->year }}" data-color="{{ $vehicle->color }}"
                                        data-current-mileage="{{ $vehicle->current_mileage }}"
                                        data-status="{{ $vehicle->status }}"
                                        data-daily-rate="{{ $vehicle->daily_rate }}"
                                        data-deposit-amount="{{ $vehicle->deposit_amount }}"
                                        data-has-gps="{{ (int) $vehicle->has_gps }}"
                                        data-has-air-conditioning="{{ (int) $vehicle->has_air_conditioning }}"
                                        data-notes="{{ $vehicle->notes }}" data-vin="{{ $vehicle->vin }}"
                                        data-fuel-policy="{{ $vehicle->fuel_policy }}"
                                        data-fuel-level-out="{{ $vehicle->fuel_level_out }}"
                                        data-fuel-level-in="{{ $vehicle->fuel_level_in }}">
                                        <i class="ti ti-edit me-1"></i>Modifier
                                    </a>
                                </li>

                                {{-- DELETE => ouvre ton modal delete --}}
                                <li>
                                    <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#modal_vehicle_delete"
                                        data-delete-action="{{ route('Backoffice.vehicles.destroy', $vehicle) }}"
                                        data-delete-name="{{ $carTitle }}">
                                        <i class="ti ti-trash me-1"></i>Supprimer
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center py-4">
                        <span class="text-muted">Aucun véhicule trouvé.</span>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<!-- /Custom Data Table -->

@if (method_exists($vehicles, 'links'))
    <div class="mt-3">
        {{ $vehicles->links() }}
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all checkbox (theme)
        const selectAll = document.getElementById('select-all');
        if (!selectAll) return;

        selectAll.addEventListener('change', function() {
            document.querySelectorAll('.row-check').forEach(cb => cb.checked = selectAll.checked);
        });
    });
</script>
