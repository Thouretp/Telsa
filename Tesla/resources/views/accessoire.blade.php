<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css">
    <title>{{$accessoire->nomaccessoire}}</title>
</head>

<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla"></a>
            <p id="title_pip">|</p>
            <a href="{{route('shop')}}" id="title_shop">Shop</a>
        </div>
        <div class="center">
            <a class="categorie_menu_label">Recharge</a>
            <a class="categorie_menu_label">Accessoires pour les véhicules</a>
            <a class="categorie_menu_label" href="/vetements_homme">Vêtements</a>
            <a class="categorie_menu_label">Lifestyle</a>
        </div>
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}"></a>
            <a href="{{route('cart_index')}}"><img class="see" src="{{asset('Models/cart_icon.png')}}"></a>
            <div class="compteur_cart"><p>{{Cart::count()}}</p></div>
            <button class="hamburgeur">
            <div class="bar"></div>
        </div>        
</header>

<body>
    <div class="container">
        <div class="image">
            <img class="img__spécifique" src="/Models/Images/Shop/All/{{$accessoire->numaccessoire}}.avif">
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
                <button type="submit">Ajouter au panier</button>
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