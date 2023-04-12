<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::put('insret', [OrderController::class,'store']);
Route::get('order', [OrderController::class,'show']);
Route::delete('delete/{id}', [OrderController::class,'destroy']);
Route::get('edit/{id}', [OrderController::class,'edit']);
Route::put('update/{id}', [OrderController::class,'update']);
Route::get('/', function () {
    return view('app');
});
Route::get('all_orders', function () {
    $action = 0;
    return view('all_orders',compact('action'));

});
Route::get('dashboard', function () {
    return view('dashboard');
});


