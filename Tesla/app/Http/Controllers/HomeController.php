<?php

namespace App\Http\Controllers;
use PDF;


class HomeController extends Controller
{
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
