<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Models\Motorisation;
use App\Models\Accessoire;
use App\Models\Detient;
use App\Models\Option;

class ShopController extends Controller
{
    public function showAccessoires(){

        $getTypeAccessoires = DB::table('typeaccessoire')->get();

        return view('shop', [
            'accessoires' => $getTypeAccessoires
        ]);
    }

    // public function DetailsAccessoire(Request $request){

    //     $idAccessoire = $request->input('idaccessoire');

    //     $accessoire = Accessoire::find($idAccessoire);
 
    //     return view('accessoire', [
    //         'accessoire' => $accessoire
    //     ]);
    // }

    public function DetailsAccessoire($numaccessoire){

        return view('accessoire', [
            'accessoire' => Accessoire::find($numaccessoire)
        ]);
    }

    public function showVetementsHomme(){

        $getTypeAccessoires = DB::table('typeaccessoire')->get();

        return view('shopClothesMan', [
            'accessoires' => $getTypeAccessoires
        ]);
    }
}


