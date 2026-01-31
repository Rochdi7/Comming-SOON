<?php

namespace App\Http\Requests\Backoffice\VehicleControl;

use Illuminate\Foundation\Http\FormRequest;

class VehicleControlUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $control = $this->route('control');

        return [
            'control_number' => ['required', 'string', 'max:50', 'unique:vehicle_controls,control_number,' . $control->id],
            'start_mileage' => ['required', 'integer', 'min:0'],
            'end_mileage' => ['nullable', 'integer', 'min:0'],
            'notes' => ['nullable', 'string'],
            'performed_by' => ['nullable', 'exists:users,id'],
        ];
    }
}
