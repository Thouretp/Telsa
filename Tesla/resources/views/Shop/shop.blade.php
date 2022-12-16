<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css">
    <title>Shop</title>
</head>
<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla"></a>
            <p id="title_pip">|</p>
            <p id="title_shop">Shop</p>
        </div>
        <div class="center">
            <a class="categorie_menu_label">Recharge</a>
            <a class="categorie_menu_label">Accessoires pour les véhicules</a>
            <a class="categorie_menu_label" href="/vetements_homme">Vêtements</a>
            <a class="categorie_menu_label">Lifestyle</a>
        </div>
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}"></a>
            <a href="#"><img class="see" src="{{asset('Models/cart_icon.png')}}"></a>
            <button class="hamburgeur">
            <div class="bar"></div>
        </div>        
</header>

<body>
    <div class="categorie_menu_list noZindex">
        <div class="clothes_man">
            <a href="">Homme</a>
            <a href="">T-shirts</a>
            <a href="">Vêtements de sport pour homme</a>
            <a href="">Sweat-shirts</a>
            <a href="">Vestes</a>
            <a href="">Casquettes et bonnets</a>
            <a href="">Chaussettes</a>
        </div>
        <div class="clothes_woman">
            <a href="">Femme</a>
            <a href="">T-shirts</a>
            <a href="">Vêtements de sport pour homme</a>
            <a href="">Sweat-shirts</a>
            <a href="">Vestes</a>
            <a href="">Casquettes et bonnets</a>
            <a href="">Chaussettes</a>
        </div>
        <div class="clothes_child">
            <a href="">Homme</a>
            <a href="">T-shirts</a>
            <a href="">Combinaison</a>
            <a href="">Vestes</a>
            <a href="">Casquettes et bonnets</a>
            <a href="">Chaussettes</a>
        </div>
    </div>
    <nav class="mobile-nav">
        <a href="/#modelS">Model S</a>
        <a href="/#model3">Model 3</a>
        <a href="/#modelX">Model X</a>
        <a href="/#modelY">Model Y</a>
        <a href="{{route('shop')}}">Shop</a>
        <a href="#help">Assistance</a>
        <span class="ajt-mobile-nav">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Mon compte</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</a>
                    @endif
                @endauth
            @endif
        </span>
    </nav>

    <h2>Meilleures ventes</h2>

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
        <img src="" alt="">
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <img src="" alt="">
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <img src="" alt="">
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <img src="" alt="">
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
    <div class="item">
        <h3>NOM</h3>
        <img src="" alt="">
        <h3>DESC</h3>
        <h3>PRIX</h3>
    </div>
</main>
<div class=affiche__accessoires>
    <table class="tableau-style">
    <thead>
        <tr>
            <td>Nom</td>
            <td>DESC</td>
            <td>PRIX</td>
        </tr>
    </thead>
    <tbody>
        @foreach($accessoires as $accessoire)
        <tr>
            <td>{{$accessoire->nomaccessoire}}</td>
            <td>{{$accessoire->desciptionaccessoire}}</td>
            <td>{{$accessoire->prixaccessoire}}</td>
        </tr>
        @endforeach
        
    </tbody>

    </table>
    
    
    
    
    
    
    
</div>







    


</body>

<script src="{{asset('js/hamburgeur.js')}}"></script>
<script src="{{asset('js/shop.js')}}"></script>
<script src="{{asset('js/shopListHeader.js')}}"></script>

</html>