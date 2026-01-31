<?php

namespace App\Http\Requests\Backoffice\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class PermissionUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        // return Auth::guard('backoffice')->user()?->can('permissions.update') ?? false;
        return Auth::guard('backoffice')->check();
    }

    public function rules(): array
    {
        $permissionId = $this->route('permission')?->id ?? $this->route('permission');

        return [
            'name' => [
                'required',
                'string',
                'max:190',
                Rule::unique('permissions', 'name')
                    ->where(fn ($q) => $q->where('guard_name', 'backoffice'))
                    ->ignore($permissionId),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom de la permission est obligatoire.',
            'name.string'   => 'Le nom de la permission doit être une chaîne de caractères.',
            'name.max'      => 'Le nom de la permission ne doit pas dépasser 190 caractères.',
            'name.unique'   => 'Ce nom de permission est déjà utilisé.',
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
