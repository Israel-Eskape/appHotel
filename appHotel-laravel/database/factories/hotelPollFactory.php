<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hotelPollFactory>
 */
class hotelPollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'comments'=> $this->faker->name(),
            'satisfaction'=>$this->faker->text()
            //
        ];
    }
}
