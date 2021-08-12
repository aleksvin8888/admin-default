<?php


namespace App\Services;



use App\Models\Tag;
use Illuminate\Support\Str;

class TagService
{
    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['title']);

        $category = Tag::make($data);
        $category->slug = $data['slug'];

        $category->save();

    }

    public function update(Tag $tag, array $data)
    {
        $data['slug'] = Str::slug($data['title']);

        $tag->slug = $data['slug'];

        $tag->update($data);

    }

}
