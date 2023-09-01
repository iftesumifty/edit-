<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('return',[HomeController::class,'ret'])->name('ret');
Route::post('ret',[HomeController::class,'rr'])->name('rr');
Route::get('edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::put('edit1/{id}',[HomeController::class,'pubcreate_update'])->name('pubcreate_update');