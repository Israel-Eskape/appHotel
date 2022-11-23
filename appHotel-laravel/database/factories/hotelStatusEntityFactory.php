<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hotelStatusEntity>
 */
class hotelStatusEntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   #   protected $model = hotelStatusEntity::class;
    public function definition()
    {
        return [
            "name"=> $this->faker->name(),
            "description"=>$this->faker->text()
        ];
    }
}