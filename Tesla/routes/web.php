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

Route::get('/', function () {
    return view('home');
});
Route::get('/confModelX', [HomeController::class, 'goToConf']);

Route::get('/confModelX_PDF', [HomeController::class,'confModelX_PDF'])->name('confModelX_PDF'); //GENERER PDF