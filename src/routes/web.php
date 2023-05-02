<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\EmployeesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/greeting',[GreetingController::class, 'index']);
Route::get('/greeting/welcome',[GreetingController::class, 'welcome']);
Route::post('/greeting/welcome',[GreetingController::class, 'welcome']);
Route::get('/greeting/hello',[GreetingController::class, 'hello']);

Route::get('/profile',[ProfileController::class, 'index']);
Route::get('/profile/confirm',[ProfileController::class, 'confirm']);
Route::post('/profile/confirm',[ProfileController::class, 'confirm']);

Route::get('/lot',[LotController::class, 'index']);

Route::get('/employees',[EmployeesController::class, 'index']);
Route::get('/employees/create',[EmployeesController::class, 'create']);
Route::post('/employees/store',[EmployeesController::class, 'store']);
