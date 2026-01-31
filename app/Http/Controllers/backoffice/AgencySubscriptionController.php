<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\AgencySubscription\AgencySubscriptionStoreRequest;
use App\Http\Requests\Backoffice\AgencySubscription\AgencySubscriptionUpdateRequest;
use App\Models\Agency;
use App\Models\AgencySubscription;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AgencySubscriptionController extends Controller
{
    use AuthorizesRequests;

    public function index(): View
{
    $this->authorize('viewAny', AgencySubscription::class);

    $subscriptions = AgencySubscription::query()
        ->with(['agency'])
        ->latest()
        ->paginate(15);

    $agencies = Agency::query()
        ->orderBy('name')
        ->get(['id', 'name']);

    return view('Backoffice.agency-subscriptions.index', compact('subscriptions', 'agencies'));
}


    public function create(): View
    {
        $this->authorize('create', AgencySubscription::class);

        $agencies = Agency::query()
            ->orderBy('name')
            ->get(['id', 'name']);

        return view('backoffice.agency-subscriptions.create', compact('agencies'));
    }

    public function store(AgencySubscriptionStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', AgencySubscription::class);

        $subscription = AgencySubscription::create($request->validated());
        $subscription->load('agency');

        $agencyName = $subscription->agency?->name ?? 'Agence';

        return redirect()
            ->route('backoffice.agency-subscriptions.index')
            ->with('toast', [
                'title'   => 'Créé',
                'message' => "L’abonnement de « {$agencyName} » a été créé avec succès.",
                'dot'     => '#198754',
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function show(AgencySubscription $agencySubscription): View
    {
        $this->authorize('view', $agencySubscription);

        $agencySubscription->load('agency');

        return view('backoffice.agency-subscriptions.show', [
            'subscription' => $agencySubscription,
        ]);
    }

    public function edit(AgencySubscription $agencySubscription): View
    {
        $this->authorize('update', $agencySubscription);

        $agencySubscription->load('agency');

        $agencies = Agency::query()
            ->orderBy('name')
            ->get(['id', 'name']);

        return view('backoffice.agency-subscriptions.edit', [
            'subscription' => $agencySubscription,
            'agencies'     => $agencies,
        ]);
    }

    public function update(AgencySubscriptionUpdateRequest $request, AgencySubscription $agencySubscription): RedirectResponse
    {
        $this->authorize('update', $agencySubscription);

        $agencySubscription->update($request->validated());
        $agencySubscription->load('agency');

        $agencyName = $agencySubscription->agency?->name ?? 'Agence';

        return redirect()
            ->route('backoffice.agency-subscriptions.index')
            ->with('toast', [
                'title'   => 'Modifié',
                'message' => "L’abonnement de « {$agencyName} » a été modifié avec succès.",
                'dot'     => '#0d6efd',
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }

    public function destroy(AgencySubscription $agencySubscription): RedirectResponse
    {
        $this->authorize('delete', $agencySubscription);

        $agencySubscription->load('agency');
        $agencyName = $agencySubscription->agency?->name ?? 'Agence';

        $agencySubscription->delete();

        return redirect()
            ->route('backoffice.agency-subscriptions.index')
            ->with('toast', [
                'title'   => 'Supprimé',
                'message' => "L’abonnement de « {$agencyName} » a été supprimé avec succès.",
                'dot'     => '#dc3545',
                'delay'   => 3500,
                'time'    => 'now',
            ]);
    }
}
