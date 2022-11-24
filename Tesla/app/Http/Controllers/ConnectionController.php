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
        return 'Traitement formulaire connexion';
    }
}
