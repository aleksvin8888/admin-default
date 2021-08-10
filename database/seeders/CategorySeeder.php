<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
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
                'title'              => 'General',
                'slug'              => 'general'

            ],
            [
                'title'              => 'Lifestyle',
                'slug'              => 'lifestyle'

            ],
            [
                'title'              => 'Travel',
                'slug'              => 'travel'

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
        ];

        DB::table('categories')->insert($data);
    }
}
