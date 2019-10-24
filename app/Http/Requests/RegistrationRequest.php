<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|nullable|string|max:255',
            'last_name' => 'required|nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'sometimes|nullable|string|max:255',
        ];
    }
}
