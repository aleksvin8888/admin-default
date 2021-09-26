<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name'       => 'required|min:4|max:150',
            'email'      => 'required|email|unique:users,email',
            'role_id'    => 'required|numeric',
            'password'    => 'required|min:8|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обезательно для заполнения',
            'name.min' => 'Минимальное значения 4 символа',
            'name.max' => 'Максимальное значения 150 символов',
            'email.required' => 'Поле обезательно для заполнения',
            'email.email' => 'Поле не соответствует стандартам електронной  почты',
            'email.unique' => 'Пользователь с таким email уже существует',
            'role_id.required' => 'Поле обезательно для заполнения',
            'role_id.numeric' => 'Поле должно быть числом',
            'password.required' => 'Поле обезательно для заполнения',
            'password.min' => 'Пароль должен содержать мынымум 8 символов',
            'password.max' => 'Пароль должен содержать ьаксимум 50 символов',
        ];
    }
}
