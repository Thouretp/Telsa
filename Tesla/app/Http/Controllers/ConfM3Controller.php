<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Motorisation;
use App\Models\Detient;
use App\Models\Option;

class ConfM3Controller extends Controller
{

    public function modifModel3(){
        $modelChoisi = $_POST['model'];
        $couleurChoisie = $_POST['color'];
        $janteChoisie = $_POST['jantes'];
        $interieurChoisi = $_POST['interieur'];

        
        $pdf = PDF::loadHTML('<html>
        <link rel="stylesheet" href="{{asset("css/confModel.css")}}" type="text/css">
        
        <head>
        <title class="title">Config Perso</title>
        </head>
        <body>
        <h3>Modèle</h3>
        <p>'.$modelChoisi.'</p>
        <h3>Couleur</h3>
        <p>'.$couleurChoisie.'</p>
        <h3>Jantes</h3>
        <p>'.$janteChoisie.'</p>
        <h3>Intérieur</h3>
        <p>'.$interieurChoisi.'</p>
        <h3>Prix</h3>
        <p>'.$interieurChoisi.' euros</p>
        
        </body>
        </html>');
        return $pdf->stream();
    }
    public function showOptions(){

        $getInfoM3 = DB::table('detient')-> leftJoin('option', 'detient.numoption', '=', 'option.numoption')->get();
        $getModel3Moto = Motorisation::where('nummodel', '=', 2)->get();
        $getOptionM3 = DB::table('detient')->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 4)->get();
        $getOptionCouleur = Detient::select("option.detailcaracteristique")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 4)->get();
        $getOptionDescription = Detient::select("option.description_option")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 4)->get();



        return view('confModel3', [
            'model3'=> $getInfoM3,
            'typeModel3'=> $getModel3Moto,
            'motorisationM3'=> Motorisation::find(4),
            'optionsM3'=> $getOptionM3,
            'optionCouleurM3'=>$getOptionCouleur,
            'optionDescM3'=>$getOptionDescription
        ]);
    }
    public static function RecupTime($var){
        $time = $var->puissancemoteur;
        $time = str_replace(":", "", $time);
        $time = floatval($time);
        return $time;
    }
}
