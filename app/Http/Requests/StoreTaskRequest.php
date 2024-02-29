<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name.en' => ['required','min:6','max:255','regex:/^[A-Za-z0-9\s,.()$!%@]+$/'],
            'name.ka' => ['required','min:6','max:255','regex:/^[ა-ჰ0-9\s,.()$!%@]+$/'],
            'description.en' => ['required','min:10','max:255','regex:/^[A-Za-z0-9\s,.()$!%@]+$/'],
            'description.ka' => ['required','min:10','max:255','regex:/^[ა-ჰ0-9\s,.()$!%@]+$/'],
            'due_date' => ['required','date'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.en.regex' => __('validation.regex.name_en'),
            'name.ka.regex' => __('validation.regex.name_ka'),
            'description.en.regex' => __('validation.regex.description_en'),
            'description.ka.regex' => __('validation.regex.description_ka'),
        ];
    }
}
