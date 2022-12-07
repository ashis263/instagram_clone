<?php

use App\Http\Controllers\InstaController;
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

Route::get('/', [InstaController::class, 'index']);
Route::get('/signup', [InstaController::class, 'signup']);
Route::put('/login', [InstaController::class, 'login']);
Route::put('/saveUser', [InstaController::class, 'saveUser']);
Route::get('/home/{id}', [InstaController::class, 'home']);
Route::get('/profile/{id}', [InstaController::class, 'profile']);
Route::get('/logout/{id}', [InstaController::class, 'logout']);
