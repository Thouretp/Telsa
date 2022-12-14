<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Modele;
use Illuminate\Support\Facades\DB;

class EssaiController extends Controller
{
    public function showEssai(){
        return view('essai');
    }

    public function store(Request $request){
        $newClient = array(                                 // Récupération des données du formulaire Essai 
            'prenom' => $request->input("prenom"),
            'nom'=> $request->input("nom"),
            'mail'=> $request->input("mail"),
            'tel'=> $request->input("tel"),
            'adresse'=> $request->input("adresse"),
            'cp'=> $request->input("cp"),
            'ville'=> $request->input("ville"),
            'modele' => $request->input("model")

        );

        //INIIATION DES ID RECUPERER 

        $numclient_max = EssaiController::RecupNumMax("client", "numclient");
        $numadresse_max = EssaiController::RecupNumMax("adresse", "numadresse");



        // Vérification des données récolés : 
            // Verificaion des données du client

        $verifMail = false;
        $verifTel = false;
        $verifPrenom = false;
        $verifNom = false;

        if(preg_match('#^[A-Z][A-Za-z\é\è\ê\-]+$#', $newClient['prenom'])){
            $verifPrenom = True;
        }else{
            echo "Le prenom n'est pas valide ! ";
        }

        if(preg_match('#^[A-Z][A-Za-z\é\è\ê\-]+$#', $newClient['nom'])){
            $verifNom = true;
        }else{
            echo "Le nom n'est pas valide ! ";
        }

        if(filter_var($newClient['mail'], FILTER_VALIDATE_EMAIL)){
            $verifMail = true;
        }else{
            echo "L'email n'est pas valide !";
        }

        if(preg_match("#/^[0-9-]*$/#", $newClient['tel'])){
          $verifTel = true;  
        }else{
            echo "Le tel n'est pas valide ";
        }



        // INSERT DANS LA BASE DE DONNEE si les données ont été vérifié
            // INSERT CLIENT

        if($verifPrenom && $verifNom && $verifMail && $verifTel){       
            $insertClient = DB::table('client')->insert(                      
                ['numclient'=> $numclient_max,
                 'numcompte' => $numclient_max,
                 'prenomclient'=> $newClient['prenom'],
                 'nomclient' => $newClient['nom'],
                 'adressemailclient' => $newClient['mail'],
                 'numerotelephone' => $newClient['tel']
                 ]
            );
        }

            //INSERT ADRESSE

        $insertAdresse = DB::table('adresse')->insert([
            'numadresse' => $numadresse_max,
            'adresserue1' => $newClient['adresse'],
            'ville' => $newClient['ville'],
            'cp' => $newClient['cp']
        ]);

            //INSERT SE SITUE

         $insertSeSitue = DB::table('se_situe')->insert([
           'numclient' => $numclient_max,
           'numadresse' => $numadresse_max
        ]);

            //INSERT ESSAYE

        $insertEssaye = DB::table('essaye')->insert([
            'numclient' => $numclient_max,
            'nummodel' => EssaiController::RecupIdModel($newClient['modele'])
        ]);

        if($insertClient && $insertAdresse && $insertSeSitue && $insertEssaye){ // Si les inserts sont bien passé retourne la vue comme quoi c'est
            return view('okFormulaire');
        }
    }

    public function RecupNumMax($nameTable, $id){ // Fonction qui permet de déterminer le prochain numcompte de la table client
        $val = DB::table($nameTable)->max($id);  // on va chercher l'id max de la table demandé
        return $val + 1;                           // On retourne la valeur + 1
    }
    public function RecupIdModel($nameModel){   // Fonction qui permet de récuper l'id du model selectionner dans l'esssai 
        $idModel = DB::table('modele')->where('libellemodel', '=', $nameModel)->get();
        return $idModel[0]->nummodel;
    }

}