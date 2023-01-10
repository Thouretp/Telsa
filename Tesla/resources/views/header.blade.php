<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/hamburgeur.css')}}">
</head>
<body>
    
<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla" title="Accueil"></a>
        </div>
        <div class="right">
            <a href="/profile"><img  id="iconCompte" class="see" src="{{asset('Models/Userv2.png')}}" title="Mon compte"></a>
            <a href="/shop"><img class="see" src="{{asset('Models/bagv2.png')}}" title="Magasin"></a>
            <button class="hamburgeur" title="Menu">
                <div class="bar"></div>
        </div>
        </div>
    </header>

    <nav class="mobile-nav">
        <a href="/#modelS" title="Model S">Model S</a>
        <a href="/#model3" title="Model 3">Model 3</a>
        <a href="/#modelX" title="Model X">Model X</a>
        <a href="/#modelY" title="Model Y">Model Y</a>
        <a href="{{route('shop')}}" title="Magasin">Shop</a>
        <a href="#help" title="Assistance">Assistance</a>
        <span class="ajt-mobile-nav">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" title="Mon compte">Mon compte</a>
                   <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Se deconnecter') }}
                    </x-responsive-nav-link>
                </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" title="Se connecter">Se connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" title="S'inscrire">S'inscrire</a>
                    @endif
                @endauth
            @endif
        </span>
    </nav>
</body>
</html>


