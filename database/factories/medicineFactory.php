<?php

namespace Database\Factories;

use App\Models\medicine;
use Illuminate\Database\Eloquent\Factories\Factory;

class medicineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = medicine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'     => $this->faker->name,
            'unit'     => 'Viên',
            'quantity' => rand(90, 100),
            'price'    => rand(1, 10) * 1000,
        ];
    }
}
