<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/ventas', function () {
    return view('ventas.Ventas');
})->name('ventas');

Auth::routes();
//productos

Route::get('/productosl', [App\Http\Controllers\ProductosController::class, 'getProductos'])->name('productosl');
Route::get('/categoriasl', [App\Http\Controllers\CategoriaController::class, 'getCategorias'])->name('categoriasl');
Route::get('/clasificacionl', [App\Http\Controllers\ClasificacionController::class, 'getClasificacion'])->name('clasificacionl');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
