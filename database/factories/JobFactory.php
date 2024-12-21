<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50,000 CDN', '$90,000 CDN', '$120,000 CDN', '$150,000 CDN']),
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
