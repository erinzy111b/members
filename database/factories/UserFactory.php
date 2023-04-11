<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'account' => 'guest',
            'password' => 'guest',
            'name' => $this->faker->name,
            'sex' => $this->faker->randomElement($array = array('男', '女')),
            'year' => $this->faker->numberbetween(60, 90),
            'month' => $this->faker->numberbetween(1, 12),
            'day' => $this->faker->numberbetween(1, 29),
            'telephone' => $this->faker->randomElement($array = array('(02) 2368-5978', '(04) 1000-9999', '(03) 8877-4400', '(04) 1234-5678')),
            'cellphone' => $this->faker->randomElement($array = array('(0968) 568-854', '(0974) 987-987', '(0978) 444-444', '(0964) 123-234')),
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'url' => 'http://www.kai.com.tw',
            'comment' => '這是 guest 帳號',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}