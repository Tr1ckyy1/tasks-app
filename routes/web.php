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

Route::get("/login",[SessionsController::class,'create'])->middleware('guest');
Route::post("/login",[SessionsController::class,'store'])->middleware('guest');
Route::post("/logout",[SessionsController::class,'destroy'])->middleware('auth');

// Logout, FOR NOW
Route::get("/",function(){
    return view("sessions.create");
});

// Route::middleware('auth')->group(function(){
//     Route::get('/',[TaskController::class,'index']);
//     Route::get('/tasks{task:slug}',[TaskController::class,'show']);
// });