<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\PeticionesController;
//use App\Http\Controllers\PrestamoController; 
use App\Http\Controllers\PDFController;
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

Route::get('/libros/crearLibro', [LibroController::class, 'create'])->middleware('auth');

Route::post('/libros/crearLibro',  [LibroController::class, 'store'])->middleware('auth');

Route::get('/libros/borrar/{isbn}', [LibroController::class, 'destroy'])->middleware('auth');

Route::get('/editoriales', [EditorialController::class, 'index'])->middleware('auth');

Route::get('/editoriales/crearEditorial', [EditorialController::class, 'create'])->middleware('auth');

Route::post('/editoriales/crearEditorial',  [EditorialController::class, 'store'])->middleware('auth');

Route::get('/home',function(){ return view('layouts.index'); });

Route::get('/formularioMail', [PeticionesController::class, 'create']);

Route::post('/formularioMail',  [PeticionesController::class, 'store']);

Route::get('/peticiones', [PeticionesController::class, 'index'])->middleware('auth');

Route::get('/libros/crearPDF', [PDFController::class, 'guardarTodosPDF']);

Route::get('/libro/crearPDF/{isbn}', [PDFController::class, 'guardarUnoPDF']);

require __DIR__.'/auth.php';
