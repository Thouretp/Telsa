<?php

namespace App\Http\Controllers;


class ConnectionController extends Controller
{
    public function goToConnection()
    {
        return view('connection');
    }
    public function loginUser(Request $request)
    {
        dump($request->all());
        die;
    }
}


// auth()->attempt([
//     'email'=> request('email'),
//     'password'=> request('password'),
// ]);
// return 'Traitement formulaire connexion';