<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TodoList>
 */
class TodoListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Liste #' . $this->faker->numberBetween(100, 1000),
            'description' => $this->faker->text(),
            'due_date' => $this->faker->dateTimeBetween(
                now(),
                now()->addWeek()
            ),
            'priority' => $this->faker->numberBetween(0, 1000)
        ];
    }
}
