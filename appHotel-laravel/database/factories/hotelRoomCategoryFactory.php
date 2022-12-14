<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hotelRoomCategoryFactory>
 */
class hotelRoomCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
 #  protected $model = hotelRoomCategory::class;
    
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'description'=>$this->faker->text(),
            'hotelStatusEntity_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
