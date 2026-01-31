<div class="dropdown">
    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti ti-dots-vertical"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-end p-2">

        {{-- (اختياري) View details إذا عندك route show --}}
        {{-- 
        <li>
            <a class="dropdown-item rounded-1"
               href="{{ route('backoffice.agency-subscriptions.show', $subscription) }}">
                <i class="ti ti-eye me-1"></i>Voir
            </a>
        </li> 
        --}}

        <li>
            <a class="dropdown-item rounded-1"
               href="javascript:void(0);"
               data-bs-toggle="modal"
               data-bs-target="#edit_subscription"

               data-edit-action="{{ route('backoffice.agency-subscriptions.update', $subscription) }}"
               data-subscription-agency-id="{{ $subscription->agency_id }}"
               data-subscription-plan-name="{{ $subscription->plan_name }}"
               data-subscription-is-active="{{ (int) $subscription->is_active }}"
               data-subscription-billing-cycle="{{ $subscription->billing_cycle }}"
               data-subscription-provider="{{ $subscription->provider }}"
               data-subscription-provider-subscription-id="{{ $subscription->provider_subscription_id }}"
               data-subscription-starts-at="{{ optional($subscription->starts_at)->format('Y-m-d') }}"
               data-subscription-ends-at="{{ optional($subscription->ends_at)->format('Y-m-d') }}"
               data-subscription-trial-ends-at="{{ optional($subscription->trial_ends_at)->format('Y-m-d') }}"
               data-subscription-notes="{{ $subscription->notes }}">
                <i class="ti ti-edit me-1"></i>Modifier
            </a>
        </li>

        <li>
            <a class="dropdown-item rounded-1"
               href="javascript:void(0);"
               data-bs-toggle="modal"
               data-bs-target="#delete_subscription"
               data-delete-action="{{ route('backoffice.agency-subscriptions.destroy', $subscription) }}"
               data-subscription-name="{{ $subscription->plan_name }}">
                <i class="ti ti-trash me-1"></i>Supprimer
            </a>
        </li>

    </ul>
</div>
