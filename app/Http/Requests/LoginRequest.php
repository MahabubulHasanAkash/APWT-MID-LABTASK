<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'max:50',
            'password' => 'required|min:8|max:20|alpha_num'

        ];
    }

    public function messages()
    {
        return [
            'email.required' => "input email",
            'email.max' => "max 50 chars",
            'password.min' => "Password length min 8 characters",
            'password.max' => "Password length max 20 characters",
            'password.alpha_num' => "Password characters must be alpha-numeric",

        ];
    }
}
