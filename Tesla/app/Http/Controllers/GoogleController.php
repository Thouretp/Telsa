<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use function GuzzleHttp\Promise\some;

class GoogleController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle() {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if(!$user){
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => Hash::make($google_user->getName().'@'.$google_user->getId())
                ]);
           
                Auth::login($new_user);
    
                return redirect()->intended('profile');
            } else {
                Auth::login($user); 
                return redirect()->intended('profile');
            }

        } catch (\Throwable $th) {
            dd('Quelque chose est faux ! '. $th->getMessage());
        }
    }
}

