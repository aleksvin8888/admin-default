<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title'              => 'Dota',
                'slug'              => 'dota'

            ],
            [
                'title'              => 'Funny',
                'slug'              => 'funny'

            ],
            [
                'title'              => 'Paris',
                'slug'              => 'paris'

            ],
            [
                'title'              => 'Design ',
                'slug'              => 'design '

            ],
            [
                'title'              => 'Creative',
                'slug'              => 'creative'

            ],
            [
                'title'              => 'Education',
                'slug'              => 'education'

            ],
            [
                'title'              => 'Cars',
                'slug'              => 'cars'

            ],
            [
                'title'              => 'Phone',
                'slug'              => 'phone'

            ],
            [
                'title'              => 'Film',
                'slug'              => 'film'

            ],
            [
                'title'              => 'Girl',
                'slug'              => 'girl'

            ],
        ];

        DB::table('tags')->insert($data);
    }
}
