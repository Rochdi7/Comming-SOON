<?php

namespace App\Http\Requests\Backoffice\VehicleTechnicalCheck;

use Illuminate\Foundation\Http\FormRequest;

class VehicleTechnicalCheckUpdateRequest extends FormRequest
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
            'next_check_date' => ['required', 'date'],
            'notes' => ['nullable', 'string'],
            'documents' => ['nullable', 'array'],
            'documents.*' => ['file', 'mimes:pdf,jpeg,png,jpg', 'max:5120'],
        ];
    }
}
