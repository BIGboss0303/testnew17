<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusketController;


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

Route::get('/',function(){
    return view('index');
});
// Route::post('/products/filter',[ProductsController::class, 'filter'])->name('products.filter');

Route::get('/sort',[ProductsController::class, 'sort'])->name('products.sort');
Route::get('/sort/{category_id}/products',[ProductsController::class, 'index'])->name('products.index');
Route::get('/products/{id}',[ProductsController::class, 'show'])->name('products.show');
// Route::get('/products/{id}',[BusketController::class, 'buy'])->name('products.buy');
Route::get('/busket',[BusketController::class,'index'])->name('busket.index');

Route::get('/registre',[UserController::class,'create'])->name('users.registre')->middleware('guest');
Route::post('/registre',[UserController::class,'store'])->name('users.store')->middleware('guest');

Route::post('/logout',[UserController::class,'logout'])->name('users.logout')->middleware('auth');

Route::get('/login',[UserController::class,'login'])->name('users.login')->middleware('guest');
Route::post('/login',[UserController::class,'authentication'])->name('users.login')->middleware('guest');



// Route::resource('/sort/{category_id}/products', ProductsController::class);

