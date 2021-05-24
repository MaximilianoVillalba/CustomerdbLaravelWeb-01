<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers;

Route::get('/', function () {
    return redirect('/rubros');
});

/* Incisio 1 */

Route::get('/rubros', [Controllers\rubrosController::class, 'index']);
Route::get('/rubros/{id}', 'App\Http\Controllers\rubrosController@show')->name('rubros.show');

/* Inciso 2 */
Route::get('/rubros_busquedas', 'App\Http\Controllers\rubrosController@busquedasPorRubro');
Route::match(['post'], '/rubros_busquedas/listado', 'App\Http\Controllers\rubrosController@mostrarBusquedas');

/* Inciso 3 */
Route::get('/inscripcion/create', 'App\Http\Controllers\inscripcionController@index');
Route::get('/inscripcion', 'App\Http\Controllers\inscripcionController@store');

/* Inciso 4 */
Route::get('/busquedas_laborales', 'App\Http\Controllers\inscripcionController@inscripcionesLaborales');
Route::get('/busquedas_laborales/listado', 'App\Http\Controllers\inscripcionController@mostrarInscripciones');