<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1,5),
            'title_uz' => $this->faker->sentence,
            'title_ru' => $this->faker->sentence,
            'body_uz' => $this->faker->text,
            'body_ru' => $this->faker->text,
            'image' => '1700275480.png',
            'view' => rand(0, 30),
            'is_special' => rand(0,1)
        ];
    }
}
