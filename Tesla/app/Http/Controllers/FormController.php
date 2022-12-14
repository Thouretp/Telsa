<?php

namespace App\Http\Controllers;

use Request;


class FormController extends Controller
{
    public function AfficheRecap() : View {
        
       $model=[
        'Jean',
        'Marc'
       ];

       return view('pdf.generation', [
        'clients' => $model
       ]);
    }
}

