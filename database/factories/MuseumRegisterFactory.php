<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Museum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MuseumRegister>
 */
class MuseumRegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::role('Admin museo')->get()->random()->id;
        $museum = 0;
        if ($user == 2) {
            $museum = 1;
        }
        if ($user == 4) {
            $museum = $this->faker->numberBetween(3, 4);
        }
        if ($user == 3) {
            $user = 2;
            $museum = 1;
        }
        
        return [
            'document' => $this->faker->numberBetween(0000000000, 9999999999),
            'name' => $this->faker->name(),
            'age' => $this->faker->randomNumber(2, true),
            'gender' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'transport' => $this->faker->randomElement(['Taxi', 'Bus', 'Pie', 'Otro']),
            'register_date' => $this->faker->dateTimeInInterval('-5 week', '+5 week', 'America/Guayaquil'),
            'day' => $this->faker->numberBetween(1, 7),
            'country_id' => Country::all()->random()->id,
            'museum_id' => $museum,
            'user_id' => $user
        ];
    }
}
