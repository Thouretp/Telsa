<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Motorisation;
use App\Models\Detient;
use App\Models\Option;
class ConfMSController extends Controller
{

    
    public function showOptions(){

        $getInfoMS = DB::table('detient')-> leftJoin('option', 'detient.numoption', '=', 'option.numoption')->get();
        $getModelSMoto = Motorisation::where('nummodel', '=', 1)->get();
        $getOptionMS = Detient::join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();
        $getOptionCouleur = Detient::select("option.detailcaracteristique")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();
        $getOptionDescription = Detient::select("option.description_option")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();
        

        return view('Configuration.confModelS', [
            'modelS'=> $getInfoMS,
            'typeModelS'=> $getModelSMoto,
            'motorisationMS'=> Motorisation::find(8),
            'optionsMS'=> $getOptionMS,
            'optionCouleurMS'=>$getOptionCouleur,
            'optionDescMS'=>$getOptionDescription
        ]);
    }

    public static function RecupTime($var){
        $time = $var->puissancemoteur;
        $time = str_replace(":", "", $time);
        $time = floatval($time);
        return $time;
    }

    public function modifModelS(){
        $modelChoisi = $_POST['model'];
        $couleurChoisie = $_POST['color'];
        $janteChoisie = $_POST['jantes'];
        $interieurChoisi = $_POST['interieur'];
        $selfdrive = $_POST['selfdriving_'];
        $autopilot = $_POST['autopilot_']; 
        $charge = $_POST['charge_'];
        $crochet = $_POST['crochett'];

        $dateActuelle = date('d-m-Y');
        
        $pdf = PDF::loadHTML('<html>
        <link rel="stylesheet" href="{{asset("css/confModel.css")}}" type="text/css">
        
        <head>
        <title class="title">Config Perso</title>
        </head>
        <body>
        <h1>Configuration de votre Modèle S</h1>
        <p>Date : '.$dateActuelle.'</p>
        <h2>Caractéristiques</h2>
        <h3>Modèle</h3>
        <p>'.$modelChoisi.'</p>
        <h3>Couleur</h3>
        <p>'.$couleurChoisie.'</p>
        <h3>Jantes</h3>
        <p>'.$janteChoisie.'</p>
        <h3>Intérieur</h3>
        <p>'.$interieurChoisi.'</p>
        <h2>Options supplémentaires</h2>
        <h3>Autopilot</h3>
        <p>'.$autopilot.'</p>
        <h3>Self drive</h3>
        <p>'.$selfdrive.'</p>
        <h3>Chargeur mural</h3>
        <p>'.$charge.'</p>
        <h3>Crochet mural</h3>
        <p>'.$crochet.'</p>
        
        
        
        
        </body>
        </html>');
        return $pdf->stream();
    }
}