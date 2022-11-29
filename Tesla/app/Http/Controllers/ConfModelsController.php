<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ConfModelsController extends Controller
{
    public function confMX(){
        return view('confModelX');
    }
    public function confModelX_PDF(){
        $pdf = PDF::loadView('pdf.generationPdf');
        return $pdf->download('generationPdf.pdf');
    }
}
