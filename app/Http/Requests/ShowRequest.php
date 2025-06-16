<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
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
            'meta_title' => 'required|string|max:500',
            'meta_description' => 'required|string|max:500',
            'markup_schema' =>  'sometimes|nullable|json',
            'slug' => 'required|string|unique:shows,slug',
            'logo' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'sometimes|nullable|in:published,draft',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'sometimes|nullable|exists:cities,id',
            'start_date' => 'sometimes|nullable|date',
            'end_date' => 'sometimes|nullable|date',
            'industry' => 'sometimes|nullable|string',
            'website' => 'sometimes|nullable|url'
        ];
    }
}
