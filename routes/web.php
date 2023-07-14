<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [LibroController::class, 'inicio']);
Route::get('/libros', [LibroController::class, 'Libros'] );
Route::get('/detalle/{id}', [LibroController::class, 'detalleLibro'] );
Route::get('/alta', [LibroController::class, 'alta'] );


