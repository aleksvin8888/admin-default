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
                'exists:categories,id',
                'integer'
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
            'tag_ids' => [
                'nullable',
                'array'
            ],
            'tag_ids.*' => [
                'nullable',
                'exists:tags,id',
                'integer'
            ]
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обезательно для заполнения',
            'title.string' => 'Поле должно соответствовать строчному типу',
            'title.max' => 'Максимальное количество символоа 255',
            'content.required' => 'Поле обезательно для заполнения',
            'content.string' => 'Поле должно соответствовать строчному типу',
            'category_id.required' => 'Поле обезательно для заполнения',
            'category_id.integer' => 'Значения должно быть числовым',
            'category_id.exists' => 'Выбраная категория должна быть в  базе',
            'main_image.mimes' => 'Формат файла должен быть jpeg png jpg svg ',
            'main_image.image' => 'Должен бить изображения',
            'main_image.required' => 'Добавления изображения обезательно',
            'main_image.max' => 'Привышен максимальный  розмер файла 30 MB',
            'preview_image.mimes' => 'Формат файла должен быть jpeg png jpg svg ',
            'preview_image.file' => 'Должен бить изображения',
            'preview_image.required' => 'Добавления изображения обезательно',
            'preview_image.max' => 'Привышен максимальный  розмер файла 30 MB',
            'tag_ids.array' => 'Входяще значения должнобыть масивом',
            'tag_ids.integer' => 'Входяще значения должнобыть числового типа',


        ];
    }
}
