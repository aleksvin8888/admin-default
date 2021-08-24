<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'content' => [
                'required',
                'string',
            ],
            'category_id' => [
                'required',
                'exists:categories,id'
            ],
            'main_image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,svg',
                'max:30000000'
            ],
            'preview_image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,svg',
                'max:30000000'
            ],
        ];
    }
}
