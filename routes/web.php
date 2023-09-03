<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContactController;
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

Route::get('/',[ContactController::class,"index"])->name(name: "products.index");
Route::get('/product/create',[ContactController::class,"create"])->name(name: "products.create");
Route::post('/product/store',[ContactController::class,"store"])->name(name: "products.store");
Route::get('/product/{id}/edit',[ContactController::class,"edit"])->name(name: "products.edit");
Route::put('/product/{id}/update',[ContactController::class,"update"])->name(name: "products.update");
/*Route::post('/product/store', function (){
    return 'abc';
});*/
