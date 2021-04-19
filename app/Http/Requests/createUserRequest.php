<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            'name'          => ['required', 'min:4'],
            'email'         => ['required', 'email'],
            'password'      => ['required', 'min:8'],
        ];
    }

    public function messages() {
        return [

            'name.required'=>'Name field is required',
            'email.required'=>'Email field is required',
            'email.email'=>'Wrong Email format',

            'password.required'=>'Password field is required',
            'password.min'=>'Password min long is 8'
        ];
    }
}