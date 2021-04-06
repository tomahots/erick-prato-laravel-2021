<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarEmpresaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table){
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table){
            $table->dropColumn('empresa_id');
            $table->dropforeign('empresa_id');
        });
    }
}
