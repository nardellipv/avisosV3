<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('/listado', [App\Http\Controllers\ServiceController::class, 'list'])->name('service.list');
Route::get('/listado/filtro', [App\Http\Controllers\ServiceController::class, 'filter'])->name('service.filter');


