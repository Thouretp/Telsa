<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/shopClothesMan.css')}}" type="text/css">
    <title>Document</title>
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
            <a class="categorie_menu_label">Vêtements</a>
            <a class="categorie_menu_label">Lifestyle</a>
        </div>
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}"></a>
            <img class="see" src="{{asset('Models/bagv2.png')}}">
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

    <div class="container">
        <h1>Homme</h1>
        <div class="man">
            <h2>T-shirts</h2>
            <div class="tshirt">
                <div>
                    <h2>T-shirt Haha Yes</h2>
                    <img src="{{asset('Models/Images/Shop/Clothing/Man/T_Shirts/T_Shirt_Haha_Yes/1.avif')}}" alt="">
                </div>
                <div>
                    <h2>T-shirt Let Sun Shine</h2>
                    <img src="{{asset('Models/Images/Shop/Clothing/Man/T_Shirts/T_Shirt_Let_Sun_Shine/1.avif')}}" alt="">
                </div>
                <div>
                    <h2>T-shirt Battery Day</h2>
                    <img src="{{asset('Models/Images/Shop/Clothing/Man/T_Shirts/T_Shirt_Battery_Day/1.avif')}}" alt="">
                </div>
                <div>
                    <h2>T-shirt Battery Day</h2>
                    <img src="{{asset('Models/Images/Shop/Clothing/Man/T_Shirts/T_Shirt_Cybertruck_Owl/1.avif')}}" alt="">
                </div>
                <div>
                    <h2>T-shirt Small Emblem</h2>
                    <img src="{{asset('Models/Images/Shop/Clothing/Man/T_Shirts/T_Shirt_Small_Emblem/Black/1.avif')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{asset('js/hamburgeur.js')}}"></script>
<script src="{{asset('js/shopListHeader.js')}}"></script>

</html>