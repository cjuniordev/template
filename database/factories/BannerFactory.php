<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'button_text' => $this->faker->text(),
            'message' => 'Olá, tudo bem?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
