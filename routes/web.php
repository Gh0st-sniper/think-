<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    return view('home.home');
});

Route::resource('users', UserController::class);
Route::resource('ideas', IdeaController::class);
Route::resource('comments',CommentController::class);

/* users */

Route::get("/users/create", [UserController::class, 'create']);

/* ideas */

Route::get("/ideas", [IdeaController::class, 'create']);
Route::get("/ideas", [IdeaController::class, 'index']);


Route::get("/ideas/{id}", [IdeaController::class, 'show']);

// login 

Route::get("/login", [LoginController::class,'create']);

Route::post("/session", [LoginController::class,'store']);