<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password'          => Hash::make('11111111'), // password
            'role_id'           => rand(1, 3),
            'soft_deleted'      => rand(0,1),
            'slug_name'         => Str::random(10),
            'is_blocked'        => rand(0,1),

        ];
    }

}
