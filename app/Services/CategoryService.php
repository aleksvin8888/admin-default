<?php


namespace App\Services;


use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['title']);

        $category = Category::make($data);
        $category->slug = $data['slug'];

        $category->save();

    }

    public function update(Category $category, array $data)
    {
        $data['slug'] = Str::slug($data['title']);

        $category->slug = $data['slug'];

        $category->update($data);

    }

}
