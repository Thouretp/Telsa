<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ConfModelXController extends Controller
{
    
    public function confModelX_PDF(){
        
        $pdf = PDF::loadView('pdf.generation');
        return $pdf->download('configuration_personnelle.pdf');
    }
}

