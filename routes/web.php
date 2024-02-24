<?php

use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskController;
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

Route::get("/",[SessionsController::class,'create'])->middleware('guest')->name('sessions.create');
Route::post("/login",[SessionsController::class,'login'])->middleware('guest')->name('sessions.login');
Route::post("/logout",[SessionsController::class,'logout'])->middleware('auth')->name('sessions.logout');


Route::middleware('auth')->prefix('/tasks')->group(function(){
    Route::get('',[TaskController::class,'index'])->name("tasks.index");
    Route::get('/{task}',[TaskController::class,'show'])->name("tasks.show");
    Route::delete('/delete_overdue',[TaskController::class,'destroyAll'])->name("tasks.destroyAll");
    Route::delete('/{task}',[TaskController::class,'destroy'])->name("tasks.destroy");
});