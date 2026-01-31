<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Agence</th>
                <th>Plan</th>
                <th>Statut</th>
                <th>Période</th>
                <th>Essai</th>
                <th>Cycle</th>
                <th>Provider</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($subscriptions as $subscription)
                @php
                    $agencyName = $subscription->agency?->name ?? '—';

                    $starts = $subscription->starts_at ? $subscription->starts_at->format('d/m/Y') : '—';
                    $ends   = $subscription->ends_at ? $subscription->ends_at->format('d/m/Y') : '—';
                    $trial  = $subscription->trial_ends_at ? $subscription->trial_ends_at->format('d/m/Y') : '—';

                    $isExpired = method_exists($subscription, 'isExpired') ? $subscription->isExpired() : false;
                    $isOnTrial = method_exists($subscription, 'isOnTrial') ? $subscription->isOnTrial() : false;

                    $statusLabel = $subscription->is_active ? 'Actif' : 'Inactif';
                    $statusClass = $subscription->is_active ? 'bg-success' : 'bg-secondary';

                    if ($subscription->is_active && $isExpired) {
                        $statusLabel = 'Expiré';
                        $statusClass = 'bg-danger';
                    }

                    if ($subscription->is_active && $isOnTrial) {
                        $statusLabel = 'Essai';
                        $statusClass = 'bg-warning text-dark';
                    }
                @endphp

                <tr>
                    <td class="fw-semibold">#{{ $subscription->id }}</td>
                    <td>{{ $agencyName }}</td>
                    <td>
                        <span class="badge bg-light text-dark border">
                            {{ $subscription->plan_name ?? 'basic' }}
                        </span>
                    </td>
                    <td>
                        <span class="badge {{ $statusClass }}">{{ $statusLabel }}</span>
                    </td>
                    <td>
                        <div class="small text-muted">
                            <div><span class="fw-semibold">Début:</span> {{ $starts }}</div>
                            <div><span class="fw-semibold">Fin:</span> {{ $ends }}</div>
                        </div>
                    </td>
                    <td>{{ $trial }}</td>
                    <td>{{ $subscription->billing_cycle ?? '—' }}</td>
                    <td>
                        <div class="small">
                            <div class="fw-semibold">{{ $subscription->provider ?? 'manual' }}</div>
                            <div class="text-muted">{{ $subscription->provider_subscription_id ?? '—' }}</div>
                        </div>
                    </td>

                    <td class="text-end">
                        @include('Backoffice.agency-subscriptions.partials._actions', ['subscription' => $subscription])
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center text-muted py-4">
                        Aucun abonnement trouvé.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if(method_exists($subscriptions, 'links'))
    <div class="mt-3">
        {{ $subscriptions->links() }}
    </div>
@endif
