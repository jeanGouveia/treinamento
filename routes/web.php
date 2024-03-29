<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/user/me',[UsersController::class, 'getMeProfile']);

Route::get('/user/{username}',[UsersController::class, 'getProfile'])->name('user-profile');

Route::get('/test', [UsersController::class, 'test']);