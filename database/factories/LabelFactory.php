<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Label;
use App\Models\Task;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LabelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        return [
            'name' => $this->faker->word(),
            'created_at' => $this->faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
            'updated_at' => $this->faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
        ];
    }
}
