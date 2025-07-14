<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'show_id' => 'required|exists:shows,id',
            'city_id' => 'required|exists:cities,id',
            'stand_size' => 'required|string|max:10',
            'stand_size_measurement_unit' => 'required|in:msq,fsq',
            'services' => 'required|in:design_and_construction,construction,other',
            'price_range' => 'required|json',
            'design_attachments' => 'sometimes|nullable|json',
            'employee_onsite_avilable' => 'string|required'
        ];
    }
}
