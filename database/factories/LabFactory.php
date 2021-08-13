<?php

namespace Database\Factories;

use App\Models\Lab;
use Illuminate\Database\Eloquent\Factories\Factory;

class LabFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lab::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_name'      =>  $this->faker->name,
            'item_desc'     =>  $this->faker->paragraph,
            'item_quantity' => $this->faker->randomDigit(),
            'item_error' => $this->faker->randomDigit(),
            'item_value' => $this->faker->randomDigit(),
            'item_total' => $this->faker->randomDigit(),
            'place_id' => $this->faker->numberBetween(1,2),
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
