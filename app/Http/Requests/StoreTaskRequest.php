<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'name_en' => ['required','min:6','max:255','regex:/^[A-Za-z\s,.$!%@]+$/'],
            'name_ka' => ['required','min:6','max:255','regex:/^[ა-ჰ\s,.$!%@]+$/'],
            'description_en' => ['required','min:10','max:255','regex:/^[A-Za-z\s,.$!%@]+$/'],
            'description_ka' => ['required','min:10','max:255','regex:/^[ა-ჰ\s,.$!%@]+$/'],
            'date' => ['required','date'],
        ];
    }
}
