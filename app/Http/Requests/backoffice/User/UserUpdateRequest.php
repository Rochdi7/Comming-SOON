<?php

namespace App\Http\Requests\Backoffice\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        /** @var \App\Models\User $auth */
        $auth = Auth::guard('backoffice')->user();

        /** @var \App\Models\User $user */
        $user = $this->route('user');

        return [
            'name' => ['required', 'string', 'max:150'],
            'email' => [
                'required',
                'email',
                'max:150',
                Rule::unique('users', 'email')->ignore($user?->id)->whereNull('deleted_at'),
            ],
            'password' => ['nullable', 'string', 'min:6'],
            'phone' => ['nullable', 'string', 'max:50'],
            'status' => ['required', 'in:active,inactive,blocked'],
            'agency_id' => [
                Rule::requiredIf($auth->hasRole('super-admin')),
                Rule::prohibitedIf(!$auth->hasRole('super-admin')),
                'nullable',
                'exists:agencies,id',
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nom',
            'email' => 'email',
            'password' => 'mot de passe',
            'phone' => 'téléphone',
            'status' => 'statut',
            'agency_id' => 'agence',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est requis.',
            'name.string' => 'Le nom doit être une chaîne de caractères.',
            'name.max' => 'Le nom ne doit pas dépasser 150 caractères.',
            'email.required' => 'L\'email est requis.',
            'email.email' => 'L\'email doit être valide.',
            'email.max' => 'L\'email ne doit pas dépasser 150 caractères.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'phone.string' => 'Le téléphone doit être une chaîne de caractères.',
            'phone.max' => 'Le téléphone ne doit pas dépasser 50 caractères.',
            'status.required' => 'Le statut est requis.',
            'status.in' => 'Le statut doit être actif, inactif ou bloqué.',
            'agency_id.required' => 'L\'agence est requise.',
            'agency_id.exists' => 'L\'agence sélectionnée n\'existe pas.',
        ];
    }
}
