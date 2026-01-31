<?php

namespace App\Http\Requests\Backoffice\AgencySubscription;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AgencySubscriptionStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // relation (1 abonnement max par agence)
            'agency_id' => [
                'required',
                'integer',
                'exists:agencies,id',
                Rule::unique('agency_subscriptions', 'agency_id'),
            ],

            // plan
            'plan_name' => ['required', 'string', 'max:100'],

            // activation
            'is_active' => ['nullable', 'boolean'],

            // dates
            'starts_at'     => ['nullable', 'date'],
            'ends_at'       => ['nullable', 'date', 'after_or_equal:starts_at'],
            'trial_ends_at' => ['nullable', 'date'],

            // facturation
            'billing_cycle' => ['nullable', Rule::in(['monthly', 'yearly'])],
            'provider'      => ['required', Rule::in(['stripe', 'paypal', 'manual', 'other'])],

            'provider_subscription_id' => ['nullable', 'string', 'max:150'],

            // notes
            'notes' => ['nullable', 'string', 'max:2000'],
        ];
    }

    public function attributes(): array
    {
        return [
            'agency_id' => 'agence',
            'plan_name' => 'nom du plan',
            'is_active' => 'statut',
            'starts_at' => 'date de début',
            'ends_at' => 'date de fin',
            'trial_ends_at' => 'fin de période d’essai',
            'billing_cycle' => 'cycle de facturation',
            'provider' => 'fournisseur',
            'provider_subscription_id' => 'ID abonnement fournisseur',
            'notes' => 'notes',
        ];
    }

    public function messages(): array
    {
        return [
            'agency_id.required' => 'Veuillez sélectionner une agence.',
            'agency_id.exists' => 'L’agence sélectionnée est introuvable.',
            'agency_id.unique' => 'Cette agence a déjà un abonnement.',

            'plan_name.required' => 'Le nom du plan est obligatoire.',
            'plan_name.max' => 'Le nom du plan ne doit pas dépasser 100 caractères.',

            'starts_at.date' => 'La date de début doit être une date valide.',
            'ends_at.date' => 'La date de fin doit être une date valide.',
            'ends_at.after_or_equal' => 'La date de fin doit être après (ou égale) à la date de début.',
            'trial_ends_at.date' => 'La fin de période d’essai doit être une date valide.',

            'billing_cycle.in' => 'Le cycle de facturation doit être : monthly ou yearly.',
            'provider.required' => 'Le fournisseur est obligatoire.',
            'provider.in' => 'Le fournisseur doit être : stripe, paypal, manual ou other.',

            'provider_subscription_id.max' => 'L’ID fournisseur ne doit pas dépasser 150 caractères.',
            'notes.max' => 'Les notes ne doivent pas dépasser 2000 caractères.',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'plan_name' => is_string($this->plan_name) ? trim($this->plan_name) : $this->plan_name,
            'provider_subscription_id' => is_string($this->provider_subscription_id) ? trim($this->provider_subscription_id) : $this->provider_subscription_id,
            'notes' => is_string($this->notes) ? trim($this->notes) : $this->notes,
            // checkbox absent => false (optionnel : tu peux le retirer si tu veux null)
            'is_active' => $this->has('is_active') ? (bool) $this->input('is_active') : false,
        ]);
    }
}
