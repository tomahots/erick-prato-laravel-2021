<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'producto_id'=> $this->faker->numberBetween(1,Producto::count()),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ];
    }
}
