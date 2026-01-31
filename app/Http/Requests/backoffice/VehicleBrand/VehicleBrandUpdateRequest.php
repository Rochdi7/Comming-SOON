<?php

namespace App\Http\Requests\Backoffice\VehicleBrand;

use Illuminate\Foundation\Http\FormRequest;

class VehicleBrandUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'logo' => ['nullable', 'file', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ];
    }
}
