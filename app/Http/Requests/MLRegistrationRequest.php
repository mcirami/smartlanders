<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MLRegistrationRequest extends FormRequest
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

    /****
     * @var string
     */
    protected $redirect = "/?t=2&a=4#signup";

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company'   => 'required|string|max:50',
            'website'   => 'sometimes|nullable|string|max:100',
            'ssn'       => 'required|string|max:20',
            'address'   => 'required|string|max:60',
            'address2'  => 'sometimes|nullable|string|max:60',
            'city'      => 'required|string|max:30',
            'state'     => 'required|string|max:20',
            'postcode'  => 'required|string|max:10',
            'firstName' => 'required|string|max:25',
            'lastName'  => 'required|string|max:25',
            'email'     => 'required|string|email|max:60',
            'jobTitle'  => 'sometimes|nullable|string|max:30',
            'phone'     => 'required|string|max:30',
            'cell'      => 'sometimes|nullable|string|max:30',
            'fax'       => 'sometimes|nullable|string|max:30',
            'imName'    => 'required|string|max:30',
            'comments'  => 'sometimes|nullable|string|max:255'
        ];
    }
}
