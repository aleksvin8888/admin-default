<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $today = date("Y-m-d H:i:s");
        $data = [
            [
                'name'              => 'admin',
                'email'             => 'admin@gmail.com' ,
                'password'          => Hash::make('password'), // password
                'role_id'           => 1,
                'is_blocked'        => 0,
                'created_at'        => $today,
                'email_verified_at' => $today,
            ],
        ];
        DB::table('users')->insert($data);


    }
}
