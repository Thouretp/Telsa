<?php

namespace App\Http\Controllers;

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
        $getOptionMS = DB::table('detient')->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();
        $getOptionCouleur = Detient::select("option.detailcaracteristique")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();
        $getOptionDescription = Detient::select("option.description_option")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 8)->get();



        return view('confModelS', [
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
}
