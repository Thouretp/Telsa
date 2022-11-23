<?php

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
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'showMotorisation']);
//Route::get('/', [HomeController::class, 'showMotorisationModelS']);
// Route::get('/', [HomeController::class, 'showMotorisationModel3']);
// Route::get('/', [HomeController::class, 'showMotorisationModelX']);
// Route::get('/', [HomeController::class, 'showMotorisationModelY']);
Route::get('/confModelX', [HomeController::class, 'goToConf']);
