<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfMSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfModelXController;
use App\Http\Controllers\ConfM3Controller;
use App\Http\Controllers\ConfMYController;
use App\Http\Controllers\EssaiController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ShopController;
use FontLib\Table\Type\name;
use App\Http\Controllers\CommandeControler;
use App\Http\Controllers\CartController;

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

Route::get('/commande', [CommandeControler::class, 'index'])->middleware(['auth', 'verified'])->name('commande');

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

Route::get('/shop', [ShopController::class, 'showAccessoires', 'RecupTime'])->name('shop');
// Route::post('DetailsAccessoire', [ShopController::class, 'DetailsAccessoire'])->name('DetailsAccessoire');
Route::get('/shop/{numaccessoire}', [ShopController::class, 'DetailsAccessoire'])->name('accessoire');

Route::post('essai', [EssaiController::class, 'store']);

Route::get('/essai',[EssaiController::class, 'showEssai']);
Route::get('/okFormulaire', function(){
    return view('okFormulaire');
});
Route::get('/addresse',[AddressController::class,'viewAddress'])->name('adresse.update');
Route::post('/EssaiController','App\Http\Controllers\EssaiController@imageOkRDV');
Route::post('/essai', [EssaiController::class, 'store']);

// LES ROUTES POUR LES PDF DES CONFIG

Route::post('/modifModelS', [ConfMSController::class,'modifModelS'])->name('modifModelS');
Route::post('/modifModel3', [ConfM3Controller::class,'modifModel3'])->name('modifModel3');
Route::post('/modifModelX', [ConfModelXController::class,'modifModelX'])->name('modifModelX');
Route::post('/modifModelY', [ConfMYController::class,'modifModelY'])->name('modifModelY');

Route::get('auth/google',[GoogleController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back/',[GoogleController::class, 'callbackGoogle']);


//ROUTES POUR LE PANIER

Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart');
Route::get('/panier', [CartController::class, 'index'])->name('cart_index');
Route::delete('/panier{rowId}', [CartController::class, 'destroy'])->name('destroy');




// Route::get('/shop',function(){
//     Cart::destroy();
// });
