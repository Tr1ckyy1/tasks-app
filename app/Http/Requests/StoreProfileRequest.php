<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
           'password_current' => ['nullable','required_with:password_new'],
           'password_new' => ['nullable','required_with:password_current','min:8','confirmed','regex:/^[A-Za-z0-9\s,.()$!%@]+$/'],
           'password_new_confirmation' => '',
           'profile_image' => ['image'],
           'cover_image' => ['image']
        ];
    }
    
    public function messages(): array
    {
        return [
            'password_new' => __('validation.password_match')
        ];
    }
}
