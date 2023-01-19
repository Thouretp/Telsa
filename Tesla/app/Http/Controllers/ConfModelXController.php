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
    public function modifModelX(){
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
        <h1>Configuration de votre Modèle X</h1>
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
    
    public static function RecupTime($var){
        $time = $var->puissancemoteur;
        $time = str_replace(":", "", $time);
        $time = floatval($time);
        return $time;
    }

    public function showOptions(){

        $getInfoMX = DB::table('detient')-> leftJoin('option', 'detient.numoption', '=', 'option.numoption')->get();
        $getModelXMoto = Motorisation::where('nummodel', '=', 3)->get();
        $getOptionMX = DB::table('detient')->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 7)->get();
        $getOptionCouleur = Detient::select("option.detailcaracteristique")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 7)->get();
        $getOptionDescription = Detient::select("option.description_option")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 7)->get();

        return view('Configuration.confModelX', [
            'modelX'=> $getInfoMX,
            'typeModelX'=> $getModelXMoto,
            'motorisationMX'=> Motorisation::find(7),
            'optionsMX'=> $getOptionMX,
            'optionCouleurMX'=>$getOptionCouleur,
            'optionDescMX'=>$getOptionDescription
        ]);
    }
}
