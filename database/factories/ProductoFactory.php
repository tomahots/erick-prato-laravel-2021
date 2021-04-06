<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

 
    public function definition()
    {
        return [
            'codigo' => $this->faker->ean8,
            'nombre' => $this->faker->lastName,
            'precio' => $this->faker->numberBetween(5000,10000),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
];
    }
}
