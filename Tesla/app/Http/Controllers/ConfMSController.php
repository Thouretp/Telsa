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

        $getInfoMS = DB::table('detient')
                    -> leftJoin('option', 'detient.nummoteur', '=', 'option.detient.nummoteur')
                    ->get();

        return view('confModelS', [
            'modelS'=> $getInfoMS ]);
    }
}
