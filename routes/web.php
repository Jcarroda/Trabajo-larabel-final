<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PictogramaController;

Route::get('/ejercicio1', [PictogramaController::class, 'ej1']);

Route::get('/ejercicio2', [PictogramaController::class, 'ej2']);

Route::post('/addAgenda', [PictogramaController::class, 'ej2Añadir'])->name('addAgenda');


