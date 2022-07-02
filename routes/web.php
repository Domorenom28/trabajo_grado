<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Acceso;
use App\Http\Controllers\Nav;
use App\Http\Controllers\Herramientas;

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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/conceptos', [App\Http\Controllers\Nav::class, 'conceptos'])->name('conceptos');

Route::get('/leyes', [App\Http\Controllers\Nav::class, 'leyes'])->name('leyes');

Route::get('/herramientas', [App\Http\Controllers\Nav::class, 'herramientas'])->name('herramientas');

Route::get('/lenguaje', [App\Http\Controllers\Herramientas::class, 'lenguaje'])->name('lenguaje');

Route::get('/inclusiometro', [App\Http\Controllers\Herramientas::class, 'inclusiometro'])->name('inclusiometro');

Route::get('/gaming', [App\Http\Controllers\Herramientas::class, 'gaming'])->name('gaming');

Route::get('/discapacidades', [App\Http\Controllers\Herramientas::class, 'discapacidades'])->name('discapacidades');