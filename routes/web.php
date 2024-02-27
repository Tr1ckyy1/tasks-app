<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\Localization;
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

Route::get('/localization/{locale}',LocalizationController::class)->name('localization');

Route::middleware(Localization::class)->group(function(){
    Route::view("/",'sessions.create')->middleware('guest')->name('sessions.create');
    Route::view("/user",'sessions.edit')->middleware('auth')->name('sessions.edit_profile');
    // WIP Route::post("/user",[SessionsController::class,'editProfile'])->middleware('auth')->name('sessions.editProfile');
    Route::post("/login",[SessionsController::class,'login'])->middleware('guest')->name('sessions.login');
    Route::post("/logout",[SessionsController::class,'logout'])->middleware('auth')->name('sessions.logout');

    Route::middleware('auth')->prefix('/tasks')->group(function(){
        Route::get('',[TaskController::class,'index'])->name("tasks.index");
        Route::view('/create','tasks.create')->name("tasks.create");
        Route::post('',[TaskController::class,'store'])->name("tasks.store");
        Route::get('/{task}',[TaskController::class,'show'])->name("tasks.show");
        Route::get('/{task}/edit',[TaskController::class,'edit'])->name('tasks.edit');
        Route::patch('{task}',[TaskController::class,'update'])->name('tasks.update');
        Route::delete('/delete-overdue',[TaskController::class,'destroyAll'])->name("tasks.destroy_all");
        Route::delete('/{task}',[TaskController::class,'destroy'])->name("tasks.destroy");
    });
});