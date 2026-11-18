<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Redirigir la página principal al listado
Route::redirect('/', '/productos');

// Rutas del CRUD de productos
Route::resource('productos', ProductoController::class)
    ->except(['show'])
    ->parameters(['productos' => 'id']);
