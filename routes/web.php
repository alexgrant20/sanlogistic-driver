<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehicleController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/', function () {
  return view('index', [
    'title' => 'Home'
  ]);
})->middleware('auth');

Route::resource('/activities', ActivityController::class)->middleware('auth');
Route::get('/vehicles/get/', [VehicleController::class, 'get'])->middleware('auth');
Route::get('/addresses/get/', [AddressController::class, 'get'])->middleware('auth');