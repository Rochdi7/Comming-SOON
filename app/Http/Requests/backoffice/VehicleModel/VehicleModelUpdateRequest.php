<?php

namespace App\Http\Requests\Backoffice\VehicleModel;

use Illuminate\Foundation\Http\FormRequest;

class VehicleModelUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'vehicle_brand_id' => ['required', 'exists:vehicle_brands,id'],
            'name' => ['required', 'string', 'max:150'],
            'doors' => ['nullable', 'integer', 'min:2', 'max:10'],
            'seats' => ['nullable', 'integer', 'min:1', 'max:10'],
            'transmission' => ['nullable', 'in:manual,automatic'],
            'fuel_type' => ['nullable', 'in:diesel,petrol,hybrid,electric,other'],
            'category' => ['nullable', 'string', 'max:100'],
        ];
    }
}
