<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Commande_vetement;
use App\Models\Fait_une;
use Illuminate\Support\Facades\DB;

class CommandeControler extends Controller
{
    public function index(){
        $numId = auth()->user()->id;
        // dd($numId);
        $commandeVetement = CommandeControler::GetCommande($numId);

        return view ("Commande.commande", [
            'CommandeVetements'=> $commandeVetement
        ]);
    }

    public function GetCommande($idUser){
        $commande = $getOptionM3 = DB::table('achataccessoire')->where('id', '=', $idUser)->get();
        return $commande;
    }

    public static function GetMethodePaiement($nummethodepaiement){
        if($nummethodepaiement == 1){
            return 'CB';
        }else if ($nummethodepaiement == 2){
            return 'Paypal';
        }else{
            return 'Apple Pay';
        }
    }

    public static function GetStatut($statut){
        if($statut == 0){
            return "Commander";
        } else if ($statut == 1){
            return "Payé";
        } else if ($statut == 2){
            return "Envoyé";
        }else if ($statut == 3){
            return "Livré";
        }else {
            return " ";
        }
    }
}
