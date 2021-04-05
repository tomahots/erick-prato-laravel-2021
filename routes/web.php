<?php

use Illuminate\Support\Facades\Route;
use App\Models\Empresa;
use App\Models\Empleado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('testEmpresas', function () {
    $empresa = Empresa::where('nit','44507015')->first();
    dd($empresa);
});

Route::get('/empleado/{idempleado}', function ($idempleado) {
    $empleado= Empleado::where('id',$idempleado)->get();
    dd($empleado);
});

Route::get('testEmpresas', function () {
    //$empresa = Empresa::where('nit','44507015')->first();
    //dd($empresa);
    $empresaHeredia = Empresa::find(1);
    $empresaHeredia->nombre = 'Empresa prato';
    $empresaHeredia->save();
    dd($empresaHeredia);
});

Route::get('tarea1', function () {
    //$empresa = Empresa::where('nit','44507015')->first();
    //dd($empresa);
    foreach ( Empresa::all() as $v) {
        var_dump($v->nit);
    }
});
Route::get('tarea2', function () {
    $flight = EMpresa::where('nombre', 'Centro Barajas SA')->first();
    $freshFlight = $flight->fresh();
    echo $freshFlight;
});
Route::get('tarea3', function () {
    $flight = Empresa::find(9);
    $flight->delete();
});

Route::get('saludar/{nombre}', function ($nombre) {
    return view('hola')->with('nombre',$nombre);
});

Route::get('saludarEmpleados/{estado}', function ($estado) {
    $empleado= Empleado:: where('estado',$estado)->get();
    return view('hola')->with('empleado',$empleado);
});
//escribir un dashboard para mostrar datos de empleados, en una tabla


Route::get('listaempleados', function (){
    $empleado= Empleado:: all();
    return view('hola',compact('empresa','empleado'));
});
