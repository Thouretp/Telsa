<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Photo;
use App\Models\TypeAccessoire;

class ShopClothesManController extends Controller
{
    public function showClothes()
    {
        return view('shopClothesMan', [
            'vetements'=> TypeAccessoire::all()
        ]);
    }
}