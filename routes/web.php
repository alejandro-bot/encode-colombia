<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'inicio']);

Route::get('nosotros', [HomeController::class, 'nosotros']);

Route::get('servicios', [HomeController::class, 'servicios']);

Route::get('portafolio', [HomeController::class, 'portafolio']);

Route::get('contacto', [HomeController::class, 'contacto']);
