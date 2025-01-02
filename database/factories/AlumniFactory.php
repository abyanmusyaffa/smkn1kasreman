<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Alumni;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumni>
 */
class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->regexify('[A-D]{3}[0-3]{2}'),
            'password' => Hash::make('alumni'),
            'class' => fake()->year(),
            'major_id' => fake()->numberBetween(1, 4),
            'position' => fake()->jobTitle(),
            'company' => fake()->company(),
        ];
    }
}
