<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('/listado', [App\Http\Controllers\ServiceController::class, 'list'])->name('service.list');
Route::get('/listado/buscar', [App\Http\Controllers\ServiceController::class, 'search'])->name('service.search');

