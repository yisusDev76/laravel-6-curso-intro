<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'   => 1,
            'title'     => $this->faker->sentence,
            'body'      => $this->faker->text(800),
        ];
       /* Larvel 6:
        return [
            'user_id' =>1,
            'title'   =>$faker->sentence,
            'body'    =>$faker->text(800),
        ];
        */
    }
}
