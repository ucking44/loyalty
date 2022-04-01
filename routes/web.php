<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LGAController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CitizenController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/////////////////////////  STATE ROUTE  ////////////////////////////
Route::get('/states', [StateController::class, 'index']);
Route::post('/save-state', [StateController::class, 'store']);
Route::put('/update-state/{id}', [StateController::class, 'update']);
Route::delete('/delete-state/{id}', [StateController::class, 'destroy']);

/////////////////////////  LGA ROUTE  ////////////////////////////
Route::get('/lgas', [LGAController::class, 'index']);
Route::post('/save-lga', [LGAController::class, 'store']);
Route::put('/update-lga/{id}', [LGAController::class, 'update']);
Route::delete('/delete-lga/{id}', [LGAController::class, 'destroy']);


/////////////////////////  WARD ROUTE  ////////////////////////////
Route::get('/wards', [WardController::class, 'index']);
Route::post('/save-ward', [WardController::class, 'store']);
Route::put('/update-ward/{id}', [WardController::class, 'update']);
Route::delete('/delete-ward/{id}', [WardController::class, 'destroy']);

/////////////////////////  CITIZEN ROUTE  ////////////////////////////
Route::get('/citizens', [CitizenController::class, 'index']);
Route::post('/save-citizen', [CitizenController::class, 'store']);
Route::put('/update-citizen/{id}', [CitizenController::class, 'update']);
Route::delete('/delete-citizen/{id}', [CitizenController::class, 'destroy']);

