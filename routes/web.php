<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\Cards;

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

Route::prefix('/products')->group(function(){
    Route::prefix('/cards')->group(function(){
        Route::get('/', [Cards::class, 'index']);
        Route::get('{id}/create',[Cards::class, 'create']);
    });
    Route::get('/', [Products::class, 'index']);
    Route::get('/create', [Products::class, 'create']);
    Route::post('/store', [Products::class, 'store']);
    Route::get('/{id}', [Products::class, 'show']);
    Route::get('/{id}/edit', [Products::class, 'edit']);
    Route::put('/{id}/update', [Products::class, 'update']);
    Route::get('/{id}/delete', [Products::class, 'delete']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
