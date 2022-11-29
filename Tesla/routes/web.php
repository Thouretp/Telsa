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

Route::get('/', [HomeController::class, 'showInfo', 'RecupTime']);
Route::get('/confModelX', [HomeController::class, 'goToConfModelX']);
Route::get('/confModelS', [HomeController::class, 'goToConfModelS']);
Route::get('/confModel3', [HomeController::class, 'goToConfModel3']);
Route::get('/confModelY', [HomeController::class, 'goToConfModelY']);

Route::get('/confModelX_PDF', [HomeController::class,'confModelX_PDF'])->name('confModelX_PDF'); //GENERER PDF