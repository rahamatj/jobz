<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 60),
            'title' => $this->faker->sentence(),
            'company' => $this->faker->company(),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
            'application_deadline' => now()->subDays(rand(1, 30)),
            'vacancy' => rand(1, 10),
            'experience' => rand(1, 10),
            'published' => now()->subDays(rand(1, 30)),
            'salary' => rand(10000, 50000),
            'requirements' => $this->faker->paragraph(),
            'responsibilities' => $this->faker->paragraph(),
            'skills' => $this->faker->paragraph(),
            'benefits' => $this->faker->paragraph(),
            'work_place' => $this->faker->randomElement(['onsite', 'remote']),
            'employment_status' => $this->faker->randomElement(['full time', 'part time']),
            'company_address' => $this->faker->address(),
        ];
    }
}
