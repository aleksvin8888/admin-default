<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateUserRequest extends FormRequest
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
            'name'       => ['required', 'min:4', 'max:25'],
            'email'    => ['required', 'email']
        ];
    }

    public function messages() {
        return [

            'name.required'=>'Name field is required',
            'name.min'=>'Name min long is 4',
            'name.max'=>'Name max long is 25',

            'email.required'=>'email field is required'

        ];
    }
}
