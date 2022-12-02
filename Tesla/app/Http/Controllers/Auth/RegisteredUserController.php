<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenomclient' => ['required', 'string', 'max:255'],
            'nomclient' => ['required', 'string', 'max:255'],
            'adressemailclient' => ['required', 'string', 'email', 'max:255', 'unique:'.Client::class],
            'numerotelephone' => ['required', 'string', 'max:255'],
            'secondprenom' => ['required', 'string', 'max:255'],
        ]);

        $user = Client::create([
            'numcompte' => 200,
            'prenomclient' => $request->prenomclient,
            'nomclient' => $request->nomclient,
            'adressemailclient' => $request->adressemailclient,
            'numerotelephone' =>$request->numerotelephone,
            'secondprenom' => $request->secondprenom,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
