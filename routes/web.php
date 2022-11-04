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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Rutas para usuarios
//Rutas para usuario
Route::get('/usuarios',[App\Http\Controllers\UserController::class, 'index'])->name('Usuarios.index');
Route::get('/usuarios/crear',[App\Http\Controllers\UserController::class, 'create'])->name('Usuarios.create');
Route::post('/usuarios/crear',[App\Http\Controllers\UserController::class, 'store'])->name('Usuarios.store');
Route::get('/usuarios/{user}',[App\Http\Controllers\UserController::class, 'show'])->name('Usuarios.showU');
Route::delete('/usuarios/{user}',[\App\Http\Controllers\UserController::class,'destroy'])->name('usuarios.delete');
Route::get('/usuario/{user}/edit',[App\Http\Controllers\UserController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuario/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('usuarios.update');
// Rutas para Clientes
Route::get('/clientes',[App\Http\Controllers\ClientController::class, 'index'])->name('Cliente.index');
