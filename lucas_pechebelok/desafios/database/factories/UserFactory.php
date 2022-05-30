<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

<<<<<<< HEAD
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
=======
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
<<<<<<< HEAD
     * @return array<string, mixed>
=======
     * @return array
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
<<<<<<< HEAD
     * @return static
=======
     * @return \Illuminate\Database\Eloquent\Factories\Factory
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
