<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'password_current' => ['nullable','required_with:password_new'],
           'password_new' => ['nullable','required_with:password_current','min:4','confirmed','regex:/^[A-Za-z0-9\s,.()$!%@]+$/'],
           'password_new_confirmation' => '',
           'profile_image' => ['image'],
           'cover_image' => ['image']
        ];
    }
    
    public function messages(): array
    {
        return [
            'password_new.confirmed' => __('validation.password_match'),
            'password_new.regex' => __('validation.regex.name_en'),
        ];
    }
}
