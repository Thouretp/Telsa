<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css">
    <link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
    <title>Lates : Magasin</title>
</head>
<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla" title="Accueil"></a>
            <p id="title_pip">|</p>
            <a href="{{route('shop')}}" id="title_shop" title="Magasin">Magasin</a>
        </div>
        <div class="center">
        <nav class="wrapper"> 
            <ul>
                <li>
                    <a href="" title="Recharge">Recharge</a>
                </li>
                <li>
                    <a href="" title="Accessoires Vehicules">Accessoires Vehicules</a>
                </li>
                <li>
                    <a href="" title="Vêtements">Vêtements</a>
                    <div class="container-sub-menu">
                        <ul class="sub-menu">
                            <h3 title="Homme">Homme</h3>
                            <li title="Meilleurs ventes">Meilleurs ventes</li>
                            <li title="T-shirts">T-shirts</li>
                            <li title="Vêtements de sport">Vêtements de sport</li>
                            <li title="Sweat-shirt">Sweat-shirt</li>
                            <li title="Vestes">Vestes</li>
                            <li title="Casquettes et bonnets"><a href="#titrecasquetes">Casquettes et bonnets</a></li>
                            <li title="Chausettes">Chausettes</li>
                        </ul>
                        <ul class="sub-menu">
                            <h3 title="Femme">Femme</h3>
                            <li title="Meilleurs ventes">Meilleurs ventes</li>
                            <li title="T-shirts">T-shirts</li>
                            <li title="Vêtements de sport">Vêtements de sport</li>
                            <li title="Sweat-shirt">Sweat-shirt</li>
                            <li title="Vestes">Vestes</li>
                            <li title="Casquettes et bonnets">Casquettes et bonnets</li>
                            <li title="Chausettes">Chausettes</li>
                        </ul>
                        <ul class="sub-menu">
                            <h3 title="Enfants">Enfant</h3>
                            <li title="Meilleurs ventes">Meilleurs ventes</li>
                            <li title="T-shirts">T-shirts</li>
                            <li title="Combinaisons">Combinaisons</li>
                            <li title="Vestes">Vestes</li>
                            <li title="Casquettes et bonnets">Casquettes et bonnets</li>
                            <li title="Chausettes">Chausettes</li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="" title="Lifestyle">Lifestyle</a>
                </li>
            </ul>
        </nav>
        </div>
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}" title="Mon compte"></a>
            <<a href="{{route('cart_index')}}"><img class="see" src="{{asset('Models/cart_icon.png')}}" title="Panier"></a>
            <div class="compteur_cart" id="compteurcart"><p>{{Cart::count()}}</p></div>
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

    <!-- <h2>Meilleures ventes</h2>
<input id="radio1" class="radio_buttons" type="radio" name="position"  />
<input id="radio2" class="radio_buttons" type="radio" name="position" />
<input id="radio3" class="radio_buttons" type="radio" name="position" checked />
<input id="radio4" class="radio_buttons" type="radio" name="position" />
<input id="radio5" class="radio_buttons" type="radio" name="position" />
<button class=add__basket id="btn_add-1">Ajouter au panier</button>
<button class=add__basket id="btn_add-2">Ajouter au panier</button>
<button class=add__basket id="btn_add-3">Ajouter au panier</button>
<button class=add__basket id="btn_add-4">Ajouter au panier</button>
<button class=add__basket id="btn_add-5">Ajouter au panier</button>
<main id="carousel">
    <div id="zazaza"class="item">
        <h3>NOM</h3>
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
</main> -->

        @if (session('success'))
                <div class="alert alert_success">
                    {{ session('success')}}
                </div>
        @endif 

    <button id="titreMeilleuresV">Meilleures ventes</button>

    <div class=affiche__accessoires>
        @foreach($accessoires as $accessoire)
        
            <div class="card__accessoire">
                <div class="section__image">
                    <img class="images__galerie" src="/Models/Images/Shop/All/{{$accessoire->numaccessoire}}.avif" title="{{$accessoire->nomaccessoire}}">     
                    <div class="ease">
                        <a href="shop/{{$accessoire->numaccessoire}}" title="Plus de détails">Plus de détails</a>
                    </div>
                </div>
                <div class="content_accessoire">
                    <p>{{$accessoire->nomaccessoire}}</p>
                    <p>{{$accessoire->prixaccessoire}} €</p>
                </div>
            </div>
        @endforeach 
    </div>

    <h1 id="titrecasquetes">Casquettes et Bonnets Homme</h1>
    <div class=affiche__bonnets>
        @foreach($casquetteBonnets as $uneCasquetteOuBonnet)
        
            <div class="card__accessoire">
                <div class="section__image">
                    <img class="images__galerie" src="/Models/Images/Shop/All/{{$uneCasquetteOuBonnet->numaccessoire}}.avif" title="{{$uneCasquetteOuBonnet->nomaccessoire}}">     
                    <div class="ease">
                        <a href="shop/{{$uneCasquetteOuBonnet->numaccessoire}}" title="Plus de détails">Plus de détails</a>
                    </div>
                </div>
                <div class="content_accessoire">
                    <p>{{$uneCasquetteOuBonnet->nomaccessoire}}</p>
                    <p>{{$uneCasquetteOuBonnet->prixaccessoire}} €</p>
                </div>
            </div>
        @endforeach  
    </div>

</body>

<script src="{{asset('js/hamburgeur.js')}}"></script>
<script src="{{asset('js/shop.js')}}"></script>
<script src="{{asset('js/shopListHeader.js')}}"></script>

</html>