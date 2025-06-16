<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StandbuilderRequest extends FormRequest
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
            'username' => 'required|unique:standbuilders,username|string|max:30',
            'title' => 'required|string',
            'description' => 'required|string',
            'founded_year' => 'required|string|max:4',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'website' => 'sometimes|nullable|url',
            'email' => 'required|email',
            'phone' => 'sometimes|nullable|string',
            'logo' => 'sometimes|nullable|string',
            'cover_image' => 'sometimes|nullable|string',
            'services' =>  'sometimes|nullable|json',
            'services_continents' => 'sometimes|nullable|json',
            'priorty' => 'sometimes|string',
            'status' => 'sometimes|in:published,draft'
        ];
    }
}
