<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AboutFactory extends Factory
{
    protected $model = About::class;

    public function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
