<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Motorisation;


class HomeController extends Controller
{
    public function showInfo(){
        return view('welcome',[
            'motorisations'=> Motorisation::all(),
            'motorisationMS'=> Motorisation::find(8),
            'motorisationM3'=> Motorisation::find(4),
            'motorisationMX'=> Motorisation::find(7),
            'motorisationMY'=> Motorisation::find(1)
        ]);
    }
    public static function RecupTime($var){
            $time = $var->puissancemoteur;
            $time = str_replace(":", "", $time);
            $time = floatval($time);
            return $time;
        }


    public function goToConfModelX()
    {
        return view('confModelX');
    }
    public function goToConfModelS()
    {
        return view('confModelS');
    }
    public function goToConfModel3()
    {
        return view('confModel3');
    }
    public function goToConfModelY()
    {
        return view('confModelY');
    }

    public function confModelX_PDF(){
        $pdf = PDF::loadView('pdf.generationPdf');
        return $pdf->download('generationPdf.pdf');
    }
}