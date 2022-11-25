<?php

namespace App\Http\Controllers;


use App\Models\Motorisation;

class HomeController extends Controller
{
    public function goToConf()
    {
        return view('confModelX');
    }

    public function showMotorisation(){
        return view('home',[
            'motorisations'=> Motorisation::all(),
            'motorisationMS'=> Motorisation::find(1),
            'motorisationM3'=> Motorisation::find(2),
            'motorisationMX'=> Motorisation::find(3),
            'motorisationMY'=> Motorisation::find(4)
        ]);
    }
    // public function showMotorisationModelS(){
    //     return view('home', [
            
    //     ]);
    // }
    // public function showMotorisationModel3(){
    //     return view('home', [
            
    //     ]);
    // }
    // public function showMotorisationModelX(){
    //     return view('home', [
            
    //     ]);
    // }
    // public function showMotorisationModelY(){
    //     return view('home', [
            
    //     ]);
    // }

}
