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

        $getTypeAccessoires = DB::table('typeaccessoire')->get();



        return view('Shop.shop', [
            'accessoires' => $getTypeAccessoires

        ]);
    }
}
