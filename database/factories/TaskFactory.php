<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => ['en' => 'random eng name', 'ka' => 'GEORGIA'],
            'user_id' => User::factory(),
            'description' => ['en' => 'random eng description', 'ka' => 'random georgian description'],
            'due_date' => $this->faker->dateTime()
        ];
    }
}
