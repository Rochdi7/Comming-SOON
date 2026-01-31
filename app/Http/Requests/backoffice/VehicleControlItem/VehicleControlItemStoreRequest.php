<?php

namespace App\Http\Requests\Backoffice\VehicleControlItem;

use Illuminate\Foundation\Http\FormRequest;

class VehicleControlItemStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'item_key' => ['required', 'string', 'max:100'],
            'label' => ['nullable', 'string', 'max:150'],
            'status' => ['required', 'in:yes,no,na'],
            'comment' => ['nullable', 'string', 'max:255'],
        ];
    }
}
