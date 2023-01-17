<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css">
    <link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
    <title>Lates : {{$accessoire->nomaccessoire}}</title>
</head>

<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla" title="Accueil"></a>
            <p id="title_pip">|</p>
            <a href="{{route('shop')}}" id="title_shop" title="Magasin">Magasin</a>
        </div>
        <div class="center">
            <a class="categorie_menu_label" title="Recharge">Recharge</a>
            <a class="categorie_menu_label" title="Accessoires pour les véhicules">Accessoires pour les véhicules</a>
            <a class="categorie_menu_label" href="/shop" title="Vêtements">Vêtements</a>
            <a class="categorie_menu_label" title="Lifestyle">Lifestyle</a>
        </div>
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}" title="Mon compte"></a>
            <a href="{{route('cart_index')}}"><img class="see" src="{{asset('Models/cart_icon.png')}}" title="Panier"></a>
            <div class="compteur_cart"><p>{{Cart::count()}}</p></div>
            <button class="hamburgeur" title="Menu">
            <div class="bar"></div>
        </div>        
</header>

<body>
<nav class="mobile-nav">
        <a href="/#modelS" title="Model S">Model S</a>
        <a href="/#model3" title="Model 3">Model 3</a>
        <a href="/#modelX" title="Model X">Model X</a>
        <a href="/#modelY" title="Model Y">Model Y</a>
        <a href="{{route('shop')}}" title="Magasin">Magasin</a>
        <a href="#help" title="Assistance">Assistance</a>
        <span class="ajt-mobile-nav">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" title="Mon compte">Mon compte</a>
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" title="Se deconnecter" onclick="event.preventDefault();
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
    <div class="container">
        <div class="image">
            <img class="img__spécifique" src="/Models/Images/Shop/All/{{$accessoire->numaccessoire}}.avif" title="{{$accessoire->nomaccessoire}}" alt="{{$accessoire->nomaccessoire}}">
        </div>
        <div class="content__details">
            <h1>{{$accessoire->nomaccessoire}}</h1>
            <h2>{{$accessoire->prixaccessoire}} €</h2>

            <div class="flex">
                <div id="compteur__moins"class="compteur_cart"><p>-</p></div>
                <p id="nb__choisi">1</p>
                <div id="compteur__plus"class="compteur_cart"><p>+</p></div>
            </div>
            

            <form action="{{ route('cart') }}" method="post">
                @csrf
                <input type="hidden" name="productId" value="{{$accessoire->numaccessoire}}">
                <input type="hidden" name="nameA" value="{{$accessoire->nomaccessoire}}">
                <input type="hidden" name="price" value="{{$accessoire->prixaccessoire}}">
                <input type="hidden" id="qte" name="qtt" >
                <input type="hidden" name="descA" value="{{$accessoire->desciptionaccessoire}}">
                <button type="submit" title="Ajouter au panier">Ajouter au panier</button>
            </form>
            
            <p id="tititre">Description</p>
            <p>{{$accessoire->desciptionaccessoire}}</p>
        </div>
    </div>
</body>

<script src="{{asset('js/hamburgeur.js')}}"></script>
<script src="{{asset('js/shop.js')}}"></script>
<script src="{{asset('js/shopListHeader.js')}}"></script>

</html>