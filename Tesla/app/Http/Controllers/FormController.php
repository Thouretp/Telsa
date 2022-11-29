<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormController extends Controller
{
    public function AfficheRecap() : View {
        // $ded=2;
        $ded = $_POST['model'];
        dd($ded);
        // $modele = Request::get('model');
        // $couleur = \Request::get('color');
        // $jantes = \Request::get('jantes');
        // $interieur = \Request::get('interieur');

       // return view('generation', ['testmodel' => compact('modele')]);
       //return View('pdf.generation', compact('modele', 'couleur', 'jantes', 'interieur'));
       return view('pdf.generation', ['ded' => $ded]);
    }
}

