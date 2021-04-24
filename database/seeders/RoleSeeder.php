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
        $availableGroups = ['Без категории', 'admin', 'user1', 'user2'];

        for ($i = 0; $i <= 3; $i++) {
            $roles[] = [
                'title'           => $availableGroups[$i],
                'description'     => Str::random('100'),
            ];
        }

        DB::table('roles')->insert($roles);
    }
}
