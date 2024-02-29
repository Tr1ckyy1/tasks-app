<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as GeorgianFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition(): array
    {
        return [
            'name' => ['en' => $this->faker->text(), 'ka' => GeorgianFactory::create('ka_GE')->realText(10)
        ],
            'user_id' => User::factory(),
            'description' => ['en' => $this->faker->sentence(), 'ka' => GeorgianFactory::create('ka_GE')->realText(10)
        ],
            'due_date' => $this->faker->dateTime()
        ];
    }
}
