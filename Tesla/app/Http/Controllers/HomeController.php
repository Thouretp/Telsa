<?php

namespace App\Http\Controllers;
use PDF;


class HomeController extends Controller
{
    public function goToConf()
    {
        return view('confModelX');
    }

    public function confModelX_PDF(){
        $pdf = PDF::loadView('pdf.generationPdf');
        return $pdf->download('generationPdf.pdf');
    }
}
