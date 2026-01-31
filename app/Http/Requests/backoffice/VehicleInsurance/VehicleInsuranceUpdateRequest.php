<?php

namespace App\Http\Requests\Backoffice\VehicleInsurance;

use Illuminate\Foundation\Http\FormRequest;

class VehicleInsuranceUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_name' => ['nullable', 'string', 'max:150'],
            'policy_number' => ['nullable', 'string', 'max:100'],
            'date' => ['required', 'date'],
            'amount' => ['required', 'numeric', 'min:0'],
            'next_insurance_date' => ['required', 'date'],
            'notes' => ['nullable', 'string'],
            'documents' => ['nullable', 'array'],
            'documents.*' => ['file', 'mimes:pdf,jpeg,png,jpg', 'max:5120'],
        ];
    }
}
