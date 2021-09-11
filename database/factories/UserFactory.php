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
        if (!is_dir(public_path('storage/images/users/'))) {
            mkdir(public_path('storage/images/users/'), 0755, true);
        }
        $genders = array("male", "female", "other");
        return [
            'name'              => $this->faker->name(),
            'username'          => $this->faker->userName(),
            'image'             => $this->faker->image('public/storage/images/users', 640, 480, null, false),
            'email'             => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => bcrypt('12345678'), // password
            'remember_token'    => Str::random(10),
            'gender'            => $genders[array_rand($genders, 1)],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
