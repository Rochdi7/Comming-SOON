<?php

namespace App\Http\Requests\Backoffice\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RoleStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Mets ta logique policy/permission ici si besoin
        // return Auth::guard('backoffice')->user()?->can('roles.create') ?? false;
        return Auth::guard('backoffice')->check();
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:150',

                // IMPORTANT: un rôle doit être unique pour ce guard
                Rule::unique('roles', 'name')->where(fn ($q) => $q->where('guard_name', 'backoffice')),
            ],

            // Liste des permissions à attacher au rôle (optionnel)
            'permissions' => ['nullable', 'array'],
            'permissions.*' => [
                'integer',
                Rule::exists('permissions', 'id')->where(fn ($q) => $q->where('guard_name', 'backoffice')),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom du rôle est obligatoire.',
            'name.string'   => 'Le nom du rôle doit être une chaîne de caractères.',
            'name.max'      => 'Le nom du rôle ne doit pas dépasser 150 caractères.',
            'name.unique'   => 'Ce rôle existe déjà.',

            'permissions.array' => 'Les permissions doivent être envoyées sous forme de liste.',
            'permissions.*.integer' => 'Une permission invalide a été fournie.',
            'permissions.*.exists'  => 'Une permission sélectionnée est invalide.',
        ];
    }

    protected function prepareForValidation(): void
    {
        // Nettoyage simple du name
        if ($this->has('name')) {
            $this->merge([
                'name' => trim((string) $this->input('name')),
            ]);
        }
    }
}
