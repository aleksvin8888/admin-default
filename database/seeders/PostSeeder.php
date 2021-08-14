<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $model = User::class;
    private $faker;

    public function run()
    {

        $today = date("Y-m-d H:i:s");
        $data = [
            [
                'title' => 'Work',
                'content' => 'som text content',
                'like' => rand(1, 10000),
                'category_id' => rand(1, 5),
                'created_at' => $today,
            ],
            [
                'title' => 'Cet',
                'content' => 'som text content 2',
                'like' => rand(1, 10000),
                'category_id' => rand(1, 5),
                'created_at' => $today,
            ],
            [
                'title' => 'Pool',
                'content' => 'som text content 3',
                'like' => rand(1, 10000),
                'category_id' => rand(1, 5),
                'created_at' => $today,
            ],
        ];
        DB::table('posts')->insert($data);

    }
}
