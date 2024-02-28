<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//    return view('welcome');
// });
Route::get('/', [UserController::class, 'index']);
Route::post('login', [UserController::class, 'proseslogin']);
Route::get('register', [UserController::class, 'register']);
Route::resource('galeri', GaleriController::class)->middleware('auth');
Route::post('simpanreg', [UserController::class, 'saveRegister']);
Route::get('logout', [UserController::class, 'logout']);
