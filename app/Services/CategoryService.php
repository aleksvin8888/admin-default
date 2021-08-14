<?php


namespace App\Services;


use App\Models\Category;
use App\Services\Base\MySqlService;
use DB;
use Exception;
use Illuminate\Support\Str;

final class CategoryService extends MySqlService
{
    public function create(array $data)
    {
        DB::beginTransaction();
        try{


            $data['slug'] = Str::slug($data['title']);

            $category = Category::make($data);
            $category->slug = $data['slug'];

            $category->save();

            DB::commit();

        } catch(Exception $exception) {
            $this->handleException($exception);
        }
    }

    public function update(Category $category, array $data)
    {
        DB::beginTransaction();
        try {
            $data['slug'] = Str::slug($data['title']);

            $category->slug = $data['slug'];

            $category->update($data);

            DB::commit();

        } catch(Exception $exception) {
            $this->handleException($exception);
        }
    }

}
