<?php

namespace App\Http\Requests\Backoffice\Vehicle;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class VehicleUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $agencyId = Auth::user()->agency_id;

        return [
            'vehicle_model_id' => [
                'required',
                Rule::exists('vehicle_models', 'id')->where('agency_id', $agencyId),
            ],
            'registration_number' => ['required', 'string', 'max:50'],
            'registration_city' => ['nullable', 'string', 'max:100'],
            'year' => ['nullable', 'integer', 'min:1900', 'max:' . ((int) date('Y') + 1)],
            'color' => ['nullable', 'string', 'max:50'],
            'current_mileage' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', 'in:available,unavailable,maintenance,sold'],
            'daily_rate' => ['nullable', 'numeric', 'min:0'],
            'deposit_amount' => ['nullable', 'numeric', 'min:0'],
            'has_gps' => ['nullable', 'boolean'],
            'has_air_conditioning' => ['nullable', 'boolean'],
            'notes' => ['nullable', 'string'],
            'vin' => ['nullable', 'string', 'max:50'],
            'fuel_policy' => ['required', 'in:full_to_full,same_to_same,other'],
            'fuel_level_out' => ['nullable', 'integer', 'min:0', 'max:100'],
            'fuel_level_in' => ['nullable', 'integer', 'min:0', 'max:100'],

            'photos' => ['nullable', 'array'],
            'photos.*' => ['file', 'mimes:jpeg,png,gif,jpg', 'max:5120'],

            'documents' => ['nullable', 'array'],
            'documents.*' => ['file', 'max:10240'],
        ];
    }
}
