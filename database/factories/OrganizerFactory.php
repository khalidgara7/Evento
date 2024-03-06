<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organizer>
 */
class OrganizerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'cin' => $this->faker->regexify('PA[0-9]{6}'), // Moroccan CIN format
            'phone_number' => $this->faker->phoneNumber,
            'profile_picture' => $this->faker->imageUrl(),
            'bio' => $this->faker->paragraph,
                ];
    }
}
