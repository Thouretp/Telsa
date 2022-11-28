<?php

namespace App\Http\Controllers;


class InscriptionController extends Controller
{
    public function goToSignUp()
    {
        return view('inscription');
    }
    public function RegisterUser(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return back()-> with('success','Utilisateur crée');
    }
}
