<?php

namespace App\Http\Requests\Backoffice\VehicleVignette;

use Illuminate\Foundation\Http\FormRequest;

class VehicleVignetteUpdateRequest extends FormRequest
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
            'year' => ['required', 'integer', 'min:2000'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
