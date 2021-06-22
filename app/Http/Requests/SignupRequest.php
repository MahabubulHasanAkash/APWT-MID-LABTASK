<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name' => 'required | min:3| max:30',
            'email' => 'required| min:10|max:50',
            'password' => 'required| min:8| max:20| alpha_num |  confirmed ',
            'password_confirmation' => 'required| min:8|max:20| alpha_num |',
            'address' => 'required | max:50',
            'company' => 'required| max:50',
            'city' => 'required| max:50',
            'country' => 'required| max:50',
            'usertype' => 'required',
            'phone' => 'required| regex:/(01)[0-9]{9}/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "input name",
            'email.required' => "input email",
            'password.required' => "input password",
            'address.required' => "input address",
            'company.required' => "input company",
            'city.required' => "input city",
            'country.required' => "input country",
            'phone.required' => "input phone",


            'name.min' => "min 3 chars",
            'name.max' => "max 30 chars",
            'email.min' => "min 10 chars",
            'email.max' => "max 50 chars",
            'phone.min' => "min 11 chars",

            'phone.integer' => "only integers allowed",
            'password.min' => "Password length min 8 characters",
            'password.max' => "Password length max 20 characters",
            'password.alpha_num' => "Password characters must be alpha-numeric",



        ];
    }
}
