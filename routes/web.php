<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\API\AuthController;
use App\Http\Controllers\API\UserController;

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

//Route::any('/logout', [UserController::class, "logout"])->name("logout");
//Route::get('/home', [UserController::class, "home"])->name("home");
Route::post('/login', [AuthController::class, "login"])->name("login");
Route::get('/', [UserController::class, "index"])->name("index");
Route::get('/home', [UserController::class, "home"])->name("home");
