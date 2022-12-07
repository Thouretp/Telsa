<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Models\Motorisation;
use App\Models\Detient;
use App\Models\Option;

class ConfModelXController extends Controller
{
    
    public function confModelX_PDF(){
        
        $pdf = PDF::loadView('pdf.generation');
        return $pdf->download('configuration_personnelle.pdf');
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

