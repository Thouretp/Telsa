<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    
    public function viewAddress()
    {
        $getAddress = DB::table('adresse')->join('se_situe', 'adresse.numadresse', '=', 'se_situe.numadresse')->get();

        return view('testAddress', [
            'adresse' => $getAddress
        ]);
        
    }
}
