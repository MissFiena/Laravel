<?php

use App\Http\Controllers\ProductController;
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

Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/product', function (){
    return view('product');
});

Route::get('/products', [ProductController::class, 'index']); 

Route::get ('products/create', [ProductController::class, 'create'])->name('products.create'); 

Route::post('products', [ProductController::class, 'store']);

Route::delete('products/{id}', [ProductController::class, 'destroy']); 

Route::get('products/{id}/edit', [ProductController::class, 'edit']);

Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');

