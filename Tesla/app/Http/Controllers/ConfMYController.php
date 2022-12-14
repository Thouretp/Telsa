<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Motorisation;
use App\Models\Detient;
use App\Models\Option;

class ConfMYController extends Controller
{
    public function showOptions(){

        $getInfoMY = DB::table('detient')-> leftJoin('option', 'detient.numoption', '=', 'option.numoption')->get();
        $getModelYMoto = Motorisation::where('nummodel', '=', 4)->get();
        $getOptionMY = DB::table('detient')->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 1)->get();
        $getOptionCouleur = Detient::select("option.detailcaracteristique")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 1)->get();
        $getOptionDescription = Detient::select("option.description_option")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 1)->get();



        return view('confModelY', [
            'modelY'=> $getInfoMY,
            'typeModelY'=> $getModelYMoto,
            'motorisationMY'=> Motorisation::find(1),
            'optionsMY'=> $getOptionMY,
            'optionCouleurMY'=>$getOptionCouleur,
            'optionDescMY'=>$getOptionDescription
        ]);
    }
    public static function RecupTime($var){
        $time = $var->puissancemoteur;
        $time = str_replace(":", "", $time);
        $time = floatval($time);
        return $time;
    }
}
