<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpaqueController;


Route::get('/', function () {return view('home');
})->middleware('auth');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [EmpaqueController::class, 'index'])->name('registro.index');
    //Route::get('/{pro_id}',['as'=>'productos','uses'=> 'App\Http\Controllers\EmpaqueController@show']);   
    Route::post('/vista', [EmpaqueController::class, 'store'])->name('registro.store');
    Route::put('/vista/{id}', [EmpaqueController::class, 'update'])->name('registro.update');
    Route::get('/vista', [EmpaqueController::class, 'vista'])->name('registro.vista');
});

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');