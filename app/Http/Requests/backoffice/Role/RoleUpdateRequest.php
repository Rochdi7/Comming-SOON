<?php

namespace App\Http\Requests\Backoffice\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RoleUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        // return Auth::guard('backoffice')->user()?->can('roles.update') ?? false;
        return Auth::guard('backoffice')->check();
    }

    public function rules(): array
    {
        // On récupère l'ID depuis la route: route model binding ou param {role}
        $roleId = $this->route('role')?->id ?? $this->route('role');

        return [
            'name' => [
                'required',
                'string',
                'max:150',
                Rule::unique('roles', 'name')
                    ->where(fn ($q) => $q->where('guard_name', 'backoffice'))
                    ->ignore($roleId),
            ],

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
            'name.unique'   => 'Ce nom de rôle est déjà utilisé.',

            'permissions.array' => 'Les permissions doivent être envoyées sous forme de liste.',
            'permissions.*.integer' => 'Une permission invalide a été fournie.',
            'permissions.*.exists'  => 'Une permission sélectionnée est invalide.',
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
