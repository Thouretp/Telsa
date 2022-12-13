<?php

namespace App\Http\Controllers;


use PDF;
use Illuminate\Support\Facades\DB;
use App\Models\Motorisation;
use App\Models\Detient;
use App\Models\Option;
use Illuminate\Http\Request;


class ConfModelXController extends Controller
{
    
    // public function confModelX_PDF(){
        
    //     $pdf = PDF::loadView('pdf.generation');
    //     return $pdf->download('configuration_personnelle.pdf');
    // }
    public function modif(){
        $modelChoisi = $_POST['model'];
        $couleurChoisie = $_POST['color'];
        $janteChoisie = $_POST['jantes'];
        $interieurChoisi = $_POST['interieur'];

        
        $pdf = PDF::loadHTML('<html>
        <link rel="stylesheet" href="{{asset("css/confModelX.css")}}" type="text/css">
        
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

        $getInfoMX = DB::table('detient')-> leftJoin('option', 'detient.numoption', '=', 'option.numoption')->get();
        $getModelXMoto = Motorisation::where('nummodel', '=', 3)->get();
        $getOptionMX = DB::table('detient')->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();
        $getOptionCouleur = Detient::select("option.detailcaracteristique")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();
        $getOptionDescription = Detient::select("option.description_option")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();

        return view('confModelX', [
            'modelX'=> $getInfoMX,
            'typeModelX'=> $getModelXMoto,
            'motorisationMX'=> Motorisation::find(8),
            'optionsMX'=> $getOptionMX,
            'optionCouleurMX'=>$getOptionCouleur,
            'optionDescMX'=>$getOptionDescription
        ]);
    }
    public static function RecupTime($var){
        $time = $var->puissancemoteur;
        $time = str_replace(":", "", $time);
        $time = floatval($time);
        return $time;
    }
}

