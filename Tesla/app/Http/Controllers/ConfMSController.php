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

        return view('confModelS', [
            'modelS'=> $getInfoMS,
            'typeModelS'=> $getModelSMoto,
            'motorisations'=> Motorisation::all(),
            'motorisationMS'=> Motorisation::find(8)
            
        ]);
    }
}
