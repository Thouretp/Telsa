<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css">
    <link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
    <title>Lates : Panier</title>
</head>
<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla" title="Accueil"></a>
            <p id="title_pip">|</p>
            <a href="{{route('shop')}}" id="title_shop" title="Magasin">Magasin</a>
        </div>
        
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}" title="Mon compte"></a>
            <a href="{{route('cart_index')}}"><img class="see" src="{{asset('Models/cart_icon.png')}}" title="Panier"></a>
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
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" title="Se connecter">Se connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" title="S'inscrire">S'inscrire</a>
                    @endif
                @endauth
            @endif
        </span>
    </nav>

    <button id="titreMeilleuresV">Panier</button>

    <div class=affiche__accessoires>
        @if(Cart::count() > 0)
        @foreach(Cart::content() as $product)
        
            <div class="card__accessoire">
                <div class="section__image">
                    <img class="images__galerie" src="/Models/Images/Shop/All/{{$product->id}}.avif" title="{{$product->name}}" alt="{{$product->name}}">   
                    <div class="ease">
                        <form action="{{route('destroy', $product->rowId)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" >Retirer du panier</button>
                        </form>
                    </div>
                </div>
                <div class="content_accessoire">
                    <p>{{$product->name}}</p>
                    <p>Quantité : {{$product->qty}}</p>
                    <p>{{$product->price}} €</p>
                </div>
            </div>
        @endforeach  
        @else
        <p id="panier__sec">Votre panier est vide.</p>
        @endif

    </div>









    


</body>

<script src="{{asset('js/hamburgeur.js')}}"></script>
<script src="{{asset('js/shop.js')}}"></script>
<script src="{{asset('js/shopListHeader.js')}}"></script>

</html>