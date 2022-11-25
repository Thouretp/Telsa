<?php

namespace App\Http\Controllers;


class ConnectionController extends Controller
{
    public function goToConnection()
    {
        return view('connection');
    }
    public function traitement()
    {
        auth()->attempt([
            'email'=> request('email'),
            'password'=> request('password'),
        ]);
        return 'Traitement formulaire connexion';
    }
}
