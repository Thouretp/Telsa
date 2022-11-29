<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Motorisation;


class HomeController extends Controller
{
    public function showInfo(){
        return view('home',[
            'motorisations'=> Motorisation::all(),
            'motorisationMS'=> Motorisation::find(1),
            'motorisationM3'=> Motorisation::find(2),
            'motorisationMX'=> Motorisation::find(3),
            'motorisationMY'=> Motorisation::find(4)
        ]);
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
