<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Models\Shop;
use Session as Se;

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
    Se::flush();
    return view('index')->with('items',[]);
});

Route::get('/checkout',[CheckoutController::class,'checkout']);

Route::post('/scan',[CheckoutController::class,'scan'])->name('scan');

Route::get('/discount',[CheckoutController::class,'discount'])->name('discount');
