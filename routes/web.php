<?php
use App\Http\Controllers\CategoriaController; 
use Illuminate\Support\Facades\Route;

Route::get("/", function () { 
    return view("welcome");
});
Route::get('/categorias', CategoriaController::class . '@index')->name('categoria.index');
Route::get('/categorias/crate', CategoriaController::class . '@create')->name('categoria.create');
Route::post('/categorias', CategoriaController::class . '@store')->name('categoria.store');
Route::get('/categorias/{id}/edit', CategoriaController::class . '@edit')->name('categoria.edit');
Route::put('/categorias/{id}', CategoriaController::class . '@update')->name('categoria.update');
Route::delete('/categorias/{id}', CategoriaController::class . '@destroy')->name('categoria.destroy');