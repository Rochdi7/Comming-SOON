<?php

namespace App\Http\Requests\Backoffice\Agency;

use Illuminate\Foundation\Http\FormRequest;

class AgencyStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150'],

            'legal_name' => ['nullable', 'string', 'max:150'],

            'tp_number'  => ['nullable', 'string', 'max:50'],
            'rc_number'  => ['nullable', 'string', 'max:50'],
            'if_number'  => ['nullable', 'string', 'max:50'],
            'ice_number' => ['nullable', 'string', 'max:50'],
            'vat_number' => ['nullable', 'string', 'max:50'],

            'creation_date' => ['nullable', 'date'],
            'description'   => ['nullable', 'string'],

            'email'   => ['nullable', 'email', 'max:150'],
            'website' => ['nullable', 'string', 'max:150'],
            'phone'   => ['nullable', 'string', 'max:50'],

            'address' => ['nullable', 'string'],
            'city'    => ['nullable', 'string', 'max:100'],
            'country' => ['nullable', 'string', 'max:100'],

            'default_currency' => ['nullable', 'string', 'size:3'],

            // settings json (si tu veux l’envoyer plus tard)
            'settings' => ['nullable', 'array'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nom',
            'legal_name' => 'raison sociale',

            'tp_number' => 'TP',
            'rc_number' => 'RC',
            'if_number' => 'IF',
            'ice_number' => 'ICE',
            'vat_number' => 'numéro de TVA',

            'creation_date' => 'date de création',
            'description' => 'description',

            'email' => 'email',
            'website' => 'site web',
            'phone' => 'téléphone',

            'address' => 'adresse',
            'city' => 'ville',
            'country' => 'pays',

            'default_currency' => 'devise par défaut',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est obligatoire.',
            'name.max' => 'Le nom ne doit pas dépasser :max caractères.',
            'email.email' => 'Veuillez saisir une adresse email valide.',
            'default_currency.size' => 'La devise doit contenir exactement 3 caractères (ex: MAD).',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => is_string($this->name) ? trim($this->name) : $this->name,
            'email' => is_string($this->email) ? trim($this->email) : $this->email,
            'website' => is_string($this->website) ? trim($this->website) : $this->website,
            'default_currency' => is_string($this->default_currency)
                ? strtoupper(trim($this->default_currency))
                : $this->default_currency,
        ]);
    }
}
