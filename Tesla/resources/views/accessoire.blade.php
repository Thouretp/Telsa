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
    <div class="container">
        <div class="image"></div>
        <div class="content__details">
            <h1>{{$accessoire->nomaccessoire}}</h1>
            <h2>{{$accessoire->prixaccessoire}} €</h2>
            <button>Ajouter au panier</button>
            <p id="tititre">Description</p>
            <p>{{$accessoire->desciptionaccessoire}}</p>
        </div>
    </div>
</body>

<script src="{{asset('js/hamburgeur.js')}}"></script>
<script src="{{asset('js/shop.js')}}"></script>
<script src="{{asset('js/shopListHeader.js')}}"></script>

</html>