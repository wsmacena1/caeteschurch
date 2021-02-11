<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
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
            'email' => 'admin@church.com',
            'password' => '$2y$10$kAWONnUMmsZEL3ksJfc1SO79hlZ2IuTVLo1qlG8WwzOTUNDsh3KZe',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
