<?php

namespace App\Http\Controllers;
use PDF;


class HomeController extends Controller
{
    public function goToConf()
    {
        return view('confModelX');
    }
}
