<?php

namespace App\Http\Requests\Backoffice\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        /** @var \Spatie\Permission\Models\Role|null $role */
        $role = $this->route('role');
        $roleId = $role?->id;

        return [
            'name' => [
                'required',
                'string',
                'max:150',
                Rule::unique('roles', 'name')
                    ->ignore($roleId)
                    ->where(fn ($q) => $q->where('guard_name', 'backoffice')),
            ],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => [
                'string',
                Rule::exists('permissions', 'name')->where(fn ($q) => $q->where('guard_name', 'backoffice')),
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nom',
            'permissions' => 'permissions',
        ];
    }
}
