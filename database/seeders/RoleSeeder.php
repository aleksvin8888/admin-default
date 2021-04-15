<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [];

        for ($i = 1; $i <= 3; $i++) {
            $roles[] = [
                'title'           => Str::random(10),
                'description'     => Str::random(10),
            ];
        }

        DB::table('roles')->insert($roles);
    }
}
