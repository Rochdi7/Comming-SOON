<?php

namespace App\Http\Requests\Backoffice\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class PermissionStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        // return Auth::guard('backoffice')->user()?->can('permissions.create') ?? false;
        return Auth::guard('backoffice')->check();
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:190',

                // Permission unique pour le guard backoffice
                Rule::unique('permissions', 'name')->where(fn ($q) => $q->where('guard_name', 'backoffice')),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom de la permission est obligatoire.',
            'name.string'   => 'Le nom de la permission doit être une chaîne de caractères.',
            'name.max'      => 'Le nom de la permission ne doit pas dépasser 190 caractères.',
            'name.unique'   => 'Cette permission existe déjà.',
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('name')) {
            $this->merge([
                'name' => trim((string) $this->input('name')),
            ]);
        }
    }
}
