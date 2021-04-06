<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;

class AgregarImagenesIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imagen::factory()->count(10)->create();
    }
}
