<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/second', [TestController::class, 'second'])->name('second');

Route::get('/third', [TestController::class, 'third'])->name('third');

Route::get('/', [MainController::class, 'showIndex'])-> name('home');

Route::get('/', [MainController::class, 'showArray'])-> name('array');

/*--------CRUD--------*/

Route::get('/products', [ProductController::class, 'index'])-> name('products.index');
//вставка переменны в строку - конкатенация
Route::get('/products/{product}', [ProductController::class, 'show'])-> name('products.show');

Route::delete('/products/{product}',
[ProductController::class, 'destroy'])
    -> name('products.destroy');