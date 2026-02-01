<table class="table datatable">
    <thead class="thead-light">
        <tr>
            <th class="no-sort">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox" id="select-all">
                </div>
            </th>
            <th>NOM</th>
            <th>EMAIL</th>
            <th>TÉLÉPHONE</th>
            <th>STATUT</th>
            @auth('backoffice')
                @if (auth('backoffice')->user()->hasRole('super-admin'))
                    <th>AGENCE</th>
                @endif
            @endauth
            <th></th>
        </tr>
    </thead>

    <tbody>
        @forelse($users as $user)
            @php
                $isActive = ($user->status ?? 'active') === 'active';
                $isInactive = ($user->status ?? 'active') === 'inactive';
                $isBlocked = ($user->status ?? 'active') === 'blocked';
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
                                {{ strtoupper(mb_substr($user->name, 0, 1)) }}
                            </span>
                        </a>
                        <div class="ms-2">
                            <h6 class="fw-medium mb-0">
                                <a href="javascript:void(0);">{{ $user->name }}</a>
                            </h6>
                        </div>
                    </div>
                </td>

                <td>{{ $user->email }}</td>

                <td>{{ $user->phone ?? '—' }}</td>

                <td>
                    @if ($isActive)
                        <span class="badge badge-dark-transparent">
                            <i class="ti ti-point-filled text-success me-1"></i>Actif
                        </span>
                    @elseif($isInactive)
                        <span class="badge badge-dark-transparent">
                            <i class="ti ti-point-filled text-warning me-1"></i>Inactif
                        </span>
                    @elseif($isBlocked)
                        <span class="badge badge-dark-transparent">
                            <i class="ti ti-point-filled text-danger me-1"></i>Bloqué
                        </span>
                    @endif
                </td>

                @auth('backoffice')
                    @if (auth('backoffice')->user()->hasRole('super-admin'))
                        <td>
                            {{ $user->agency?->name ?? '—' }}
                        </td>
                    @endif
                @endauth

                <td>
                    @include('backoffice.users.partials._actions', ['user' => $user])
                </td>
            </tr>
        @empty
            <tr>
                <td></td>
                <td colspan="3" class="text-center">Aucun utilisateur trouvé.</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
</table>
