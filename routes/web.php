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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function() {
    return view('news');
});

Route::get('/news/{id}', function($id) {
    return view('news-id', [ 'id' => $id]);
});
Route::get('/other', function() {
    return redirect('/news');
});
Route::get('/404', function() {
    return abort(404);
});


Route::prefix('/products')->group(function(){
    Route::get('/', [Products::class, 'index'])->name('test');
    Route::get('/{id}', [Products::class, 'show']);
});