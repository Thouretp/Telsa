<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Motorisation;
use App\Models\Detient;
use App\Models\Option;

class ShopController extends Controller
{
    public function showOptions(){

        // $getInfoM3 = DB::table('detient')-> leftJoin('option', 'detient.numoption', '=', 'option.numoption')->get();
        // $getModel3Moto = Motorisation::where('nummodel', '=', 2)->get();
        // $getOptionM3 = DB::table('detient')->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 4)->get();
        // $getOptionCouleur = Detient::select("option.detailcaracteristique")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 4)->get();
        // $getOptionDescription = Detient::select("option.description_option")->join('option', 'detient.numoption', '=', 'option.numoption')->where('nummoteur', '=', 4)->get();
        $getTypeAccessoires = DB::table('typeaccessoire')->get();



        return view('shop', [
            'accessoires' => $getTypeAccessoires
            // 'model3'=> $getInfoM3,
            // 'typeModel3'=> $getModel3Moto,
            // 'motorisationM3'=> Motorisation::find(4),
            // 'optionsM3'=> $getOptionM3,
            // 'optionCouleurM3'=>$getOptionCouleur,
            // 'optionDescM3'=>$getOptionDescription

        ]);
    }
}
