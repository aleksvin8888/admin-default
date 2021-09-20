<?php


namespace App\Services;


use App\Models\Category;
use App\Models\Post;
use App\Services\Base\MySqlService;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

final class PostService extends MySqlService
{
    public function create(array $data)
    {
        DB::beginTransaction();
        try {


            $data['like'] = '0';
            $post = Post::make($data);
            $post->like = $data['like'];

            $post = $this->synchronize($post, $data, true);

            $post['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            $post['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);


            $post->save();
            if(isset($data['tag_ids'])) {
                $post->tags()->attach($data['tag_ids']);
            }
            DB::commit();

            return $post;
        } catch(Exception $exception) {
            $this->handleException($exception);
        }


    }

    public function update(Post $post, array $data)
    {
        DB::beginTransaction();
        try {

            $post = $this->synchronize($post, $data, true);
            $data['like'] = $post->like;

            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }


            $post->update($data);

            if(isset($data['tag_ids'])) {
                $post->tags()->sync($data['tag_ids']);
            }

            DB::commit();

            return $post;
        } catch(Exception $exception) {

            $this->handleException($exception);
        }
    }

    private function synchronize(Post $post, array $data, bool $true)
    {
        if(isset($data['category_id'])) {
            $post->category()->associate($data['category_id']);
        }
        return $post;
    }


}
