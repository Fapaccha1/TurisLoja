<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survey>
 */
class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'age' => $this->faker->randomElement([1,2,3]),
            'gender' => $this->faker->randomElement([1,2]),
            'country_id' => Country::all()->random()->id,
            'user_id' => User::role('Admin museo')->get()->random()->id,
            'recommend_visit' => $this->faker->randomElement([1,2]),
            'education_level' => $this->faker->randomElement([1,2,3]),
            'economic_activity' => $this->faker->randomElement([1,2,3]),
            'museum' => $this->faker->randomElement([1,2,3,4]),
            'interest' => $this->faker->randomElement([1,2,3,4,5]),
            'kid' => $this->faker->randomElement([1,2]),
            'day' => $this->faker->randomElement([1,2,3,4,5,6,7]),
            'reason' => $this->faker->randomElement([1,2,3,4,5])
        ];
    }
}
