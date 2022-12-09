<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfMSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfModelXController;
use App\Http\Controllers\ConfM3Controller;
use App\Http\Controllers\ConfMYController;
use App\Http\Controllers\EssaiController;
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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'showInfo', 'RecupTime']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/confModelX', [ConfModelXController::class, 'showOptions', 'RecupTime']);
Route::get('/confModelS', [ConfMSController::class, 'showOptions', 'RecupTime']);
Route::get('/confModel3', [ConfM3Controller::class, 'showOptions', 'RecupTime']);
Route::get('/confModelY', [ConfMYController::class, 'showOptions', 'RecupTime']);

Route::get('/confModelX_PDF', [ConfModelXController::class,'confModelX_PDF'])->name('confModelX_PDF');
Route::get('/pdf.generation', [\App\Http\Controllers\FormController::class,'AfficheRecap']);

Route::get('/essai',[EssaiController::class, 'showEssai']);

Route::post('/EssaiController', [EssaiController::class, 'imageOkRDV']);