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
            <a href="{{route('shop')}}" id="title_shop">Shop</a>
        </div>
        
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}"></a>
            <a href="{{route('cart_index')}}"><img class="see" src="{{asset('Models/cart_icon.png')}}"></a>
            <div class="compteur_cart" id="compteurcart"><p>{{Cart::count()}}</p></div>
            <button class="hamburgeur">
            <div class="bar"></div>
        </div>        
</header>

<body>
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

    <button id="titreMeilleuresV">Panier</button>

    <div class=affiche__accessoires>
        @if(Cart::count() > 0)
        @foreach(Cart::content() as $product)
        
            <div class="card__accessoire">
                <div class="section__image">
                    <img class="images__galerie" src="/Models/Images/Shop/All/{{$product->id}}.avif">     
                    <div class="ease">
                        <a href="shop/{{$product->id}}">Retirer du panier</a>
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