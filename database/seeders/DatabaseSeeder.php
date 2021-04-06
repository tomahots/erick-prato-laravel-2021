<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AgregarEmpresasIniciales;
use Database\Seeders\AgregarEmpleadosAdicionales;
use Database\Seeders\AgregarProductosIniciales;
use Database\Seeders\AgregarUsuariosIniciales;
use Database\Seeders\AgregarImagenesIniciales;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgregarEmpresasIniciales::Class);
        $this->call(AgregarEmpleadosIniciales::CLass);
        $this->call(AgregarEmpresasAdicionales::CLass);
        $this->call(AgregarEmpleadosAdicionales::Class);
        $this->call(AgregarProductosIniciales::Class);
        $this->call(AgregarUsuariosIniciales::Class);
        $this->call(AgregarImagenesIniciales::Class);
        
    }
}
