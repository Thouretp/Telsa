<?php

namespace App\Http\Controllers;


class InscriptionController extends Controller
{
    public function goToSignUp()
    {
        return view('inscription');
    }
}
