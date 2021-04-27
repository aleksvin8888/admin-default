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
                'password'          => Hash::make('password'), // password
                'role_id'           => 1,
                'soft_deleted'      => 0,
                'is_blocked'        => 0,
            ],
        ];
        DB::table('users')->insert($data);


    }
}
