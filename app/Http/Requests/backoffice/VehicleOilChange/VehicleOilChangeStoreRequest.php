<?php

namespace App\Http\Requests\Backoffice\VehicleOilChange;

use Illuminate\Foundation\Http\FormRequest;

class VehicleOilChangeStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date' => ['required', 'date'],
            'amount' => ['required', 'numeric', 'min:0'],
            'mileage' => ['required', 'integer', 'min:0'],
            'next_mileage' => ['required', 'integer', 'min:0'],
            'mechanic_name' => ['nullable', 'string', 'max:150'],
            'observations' => ['nullable', 'string'],
        ];
    }
}
