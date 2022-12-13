<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredAddressController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('address');
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
            'adresserue' => ['required', 'string', 'max:150'],
            'adresserue2' => ['required','string', 'max:150'],
            'ville' => ['required', 'string', 'max:100'],
            'cp' => ['required','integer', 'max:50'],
            'pays' => ['required', 'string','max:50'],
        ]);

        $address = Address::create([
            'adresserue' => $request->adresserue,
            'adresserue2' => $request->adresserue2,
            'ville' => $request->ville,
            'cp' =>$request->cp,
            'pays' => $request->pays,
        ]);

        event(new Registered($address));

        return redirect(RouteServiceProvider::HOME);
    }
}
