<?php


namespace App\Services;


use App\Models\Tag;
use App\Services\Base\MySqlService;
use DB;
use Exception;
use Illuminate\Support\Str;

final class TagService extends MySqlService
{
    public function create(array $data)
    {
        DB::beginTransaction();
        try {
            $data['slug'] = Str::slug($data['title']);

            $category = Tag::make($data);
            $category->slug = $data['slug'];

            $category->save();

            DB::commit();

        } catch(Exception $exception) {
            $this->handleException($exception);
        }


    }

    public function update(Tag $tag, array $data)
    {
        DB::beginTransaction();
        try {

            $data['slug'] = Str::slug($data['title']);

            $tag->slug = $data['slug'];

            $tag->update($data);

            DB::commit();


        } catch(Exception $exception) {
            $this->handleException($exception);
        }
    }

}
