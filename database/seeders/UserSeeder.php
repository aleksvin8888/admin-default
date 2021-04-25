<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
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


        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com' ,
                'password'          => Hash::make('11111111'), // password
                'role_id'           => 1,
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User2',
                'email'             => 'User2@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User3',
                'email'             => 'User3@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User4',
            'email'                 => 'User4@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User5',
                'email'             => 'User5@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User6',
                'email'             => 'User6@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User7',
                'email'             => 'User7@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User8',
                'email'             => 'User8@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User9',
                'email'             =>'User9@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
            [
                'name'              => 'User10',
                'email'             => 'User10@gmail.com',
                'password'          => Hash::make('11111111'), // password
                'role_id'           => rand(2, 3),
                'soft_deleted'      => rand(0,1),
                'slug_name'         => Str::random(10),
                'is_blocked'        => rand(0,1),
            ],
        ];
        DB::table('users')->insert($data);


    }
}
