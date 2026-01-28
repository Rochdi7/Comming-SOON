<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->user->id),
            ],
            'password' => 'nullable|string|min:8',
            'phone' => 'nullable|string|max:20',
            'agency_id' => 'nullable|exists:agencies,id',
            'status' => 'required|in:active,inactive,blocked',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'phone.max' => 'Le téléphone ne peut pas dépasser 20 caractères.',
            'agency_id.exists' => 'L\'agence sélectionnée n\'existe pas.',
            'status.required' => 'Le statut est obligatoire.',
            'status.in' => 'Le statut doit être actif, inactif ou bloqué.',
        ];
    }
}
