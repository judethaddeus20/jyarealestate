<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => [
                'required','min:3'
            ],
            'email' => [
                'required','email'
            ],
            'phone_number' => [
                'required','numeric','digits:11'
            ],
            'license' => [
                'required','numeric', 'digits:7'
            ],
            'hlurb' => [
                'required',
            ],
            'password' => [
                'sometimes','required', Password::min(8)
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'name.required' => 'Name is required',
            'phone_number.required' => 'Number is required',
            'password.required' => 'Password is required',
            'hlurb.required' => 'HLURB is required',
            'license.required' => 'License is required'
        ];
    }
}
