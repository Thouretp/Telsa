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

        $getTypeAccessoires = DB::table('typeaccessoire')->orderby('numaccessoire')->get();
        $getCasquetteBonnets = DB::table('typeaccessoire')->where('numaccessoire', '>=', 16, 'and')->where('numaccessoire', '<=', 20)->get();

        return view('Shop.shop', [
            'accessoires' => $getTypeAccessoires,
            'casquetteBonnets'=> $getCasquetteBonnets
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
            'accessoire' => Accessoire::find($numaccessoire),
            
        ]);
    }
}
