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
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\InscriptionController;

Route::get('/', function () {
    return view('home');
});
Route::get('/confModelX', [HomeController::class, 'goToConf']);

Route::get('/inscription', [InscriptionController::class, 'goToSignUp']);
Route::post('/inscription', [InscriptionController::class, 'traitement']);


Route::get('/connection', [ConnectionController::class, 'goToConnection']);
Route::post('/connection', [ConnectionController::class, 'traitement']);


Route::post('/connection',function (){
    request() -> validate ([
        'email' => ['required','email'],
        'password' => ['required',/*'min:8'*/],
    ], [
        'password.min' => 'Pour des raisons de securité, motre mot de passe doit faire :min caractères.'
    ]);
    return "nous avons reçu votre email qui est " . request('email') . ' et mdp' . bcrypt(request('password'));
});