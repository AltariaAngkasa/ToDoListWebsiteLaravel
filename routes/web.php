<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class,'index'])->name('index');
Route::post('/', [TodoController::class,'store'])->name('store');
Route::patch('/{todo}', [TodoController::class,'update'])->name('update');
Route::delete('/{todo}', [TodoController::class, 'destroy'])->name('destroy');