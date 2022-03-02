<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
//use App\Http\Controllers\PrestamoController; 
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/libros', [LibroController::class, 'index']);

Route::get('/libro/{isbn}', [LibroController::class, 'show']);

Route::get('/libros/editar/{isbn}', [LibroController::class, 'edit']);

Route::put('/libros/editar/{isbn}',  [LibroController::class, 'update']);

Route::get('/libros/crearLibro', [LibroController::class, 'create']);

Route::post('/libros/crearLibro',  [LibroController::class, 'store']);

//Route::get('/libros/borrar/{isbn}', [LibroController::class, 'destroy']);

Route::get('/editoriales', [EditorialController::class, 'index']);

Route::get('/editoriales/crearEditorial', [EditorialController::class, 'create']);

Route::post('/editoriales/crearEditorial',  [EditorialController::class, 'store']);

Route::get('/home',function(){ return view('layouts.index'); });

Route::get('/about',function(){ return view('layouts.about'); });

Route::get('/contact',function(){ return view('layouts.contact'); });

require __DIR__.'/auth.php';
