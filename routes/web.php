<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;

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
    Route::get('/', [Products::class, 'index'])->name('test');
    Route::get('/{id}', [Products::class, 'show']);
});