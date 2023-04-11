<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'm_name' => $this->faker->name,
            'm_username' => $this->faker->userName,
            'm_passwd' => $this->faker->numberbetween(100000, 999999),
            'm_sex' => $this->faker->randomElement($array = array('男', '女')),
            'm_birthday' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
            'm_level' => $this->faker->randomElement($array = array('admin', 'member')),
            'm_email' => $this->faker->email,
            'm_url' => 'http://www.kai.com.tw',
            'm_phone' => $this->faker->phoneNumber,
            'm_address' => $this->faker->address,
            'm_login' => $this->faker->numberbetween(0, 20),
            'm_logintime' => Carbon::now()->subDays(rand(0, 10)),
            'm_jointime' => Carbon::now()->subDays(rand(11, 365)),
        ];
    }
}