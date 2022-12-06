<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EssaiController extends Controller
{
    public function showEssai(){
        return view('essai');
    }
}
