<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicinasController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('/login', "auth.login")->name('login');
Route::view('/registro', "auth.register")->name('registro');
Route::view('/inicio', "inicio")->middleware('auth')->name('inicio');
Route::view('/privada', "secret")->middleware('auth')->name('privada');

Route::post('/validar-registro',[LoginController::class,'register'])->
    name('validar-registro');

Route::post('/inicia-sesion',[LoginController::class,'login'])->
    name('inicia-sesion');

Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/index', [MedicinasController::class,'index'])->name('medicinas.index')->middleware('auth');
Route::get('/create', [MedicinasController::class,'create'])->name('medicinas.create')->middleware('auth');
Route::post('/store', [MedicinasController::class,'store'])->name('medicinas.store');
Route::get('/edit/{id}', [MedicinasController::class,'edit'])->name('medicinas.edit');
Route::put('/update/{id}', [MedicinasController::class,'update'])->name('medicinas.update');
Route::get('/show/{id}', [MedicinasController::class,'show'])->name('medicinas.show');
Route::delete('/destroy/{id}', [MedicinasController::class,'destroy'])->name('medicinas.destroy');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route::get('/', [PersonasController::class,'index'])->name('personas.index');
Route::get('/create', [PersonasController::class,'create'])->name('personas.create');
Route::post('/store', [MedicinasController::class,'store'])->name('personas.store');
Route::get('/edit/{id}', [MedicinasController::class,'edit'])->name('personas.edit');
Route::put('/update/{id}', [MedicinasController::class,'update'])->name('personas.update');
Route::get('/show/{id}', [MedicinasController::class,'show'])->name('personas.show');
Route::delete('/destroy/{id}', [MedicinasController::class,'destroy'])->name('personas.destroy');
|
*/