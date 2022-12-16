
<link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css">
    <title>Shop</title>
</head>

<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla"></a>
        </div>
        <div class="right">


            <form action="" class="d__flex">
                <div class="form-group">
                    <input type="text" name="q" class="form__control">
                </div>
            <button type="submit" class="btn btn__info"><i class='bx bx-search'></i></button>

            </form>



            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}"></a>
            <a href="#"><img class="see" src="{{asset('Models/cart_icon.png')}}"></a>
            <button class="hamburgeur">
                <div class="bar"></div>
        </div>
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

    <h2>Meilleures ventes</h2>

<input id="radio1" type="radio" name="position"  />
<input id="radio2" type="radio" name="position" />
<input id="radio3" type="radio" name="position" checked />
<input id="radio4" type="radio" name="position" />
<input id="radio5" type="radio" name="position" />
<!-- 
<button class=add__basket id="btn_add-1">Ajouter au panier</button>
<button class=add__basket id="btn_add-2">Ajouter au panier</button>
<button class=add__basket id="btn_add-3">Ajouter au panier</button>
<button class=add__basket id="btn_add-4">Ajouter au panier</button>
<button class=add__basket id="btn_add-5">Ajouter au panier</button> -->

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
    <div class="container-card">
        <div class="title-item">
            <h2>{{$accessoires[20]->nomaccessoire}}</h2>
        </div>
        <div class="img">
            <img src="" alt="">
        </div>
        <div class="price-btnMore">
            <div class="price">
                <p>{{$accessoires[20]->prixaccessoire}}</p>
            </div>
            <div class="btn-more">
                <button type="submit"> Voir Plus</button>
            </div>
        </div>
    </div>
</div>






    
    
<script src="{{asset('js/hamburgeur.js')}}"></script>
<script src="{{asset('js/shop.js')}}"></script>

</body>


</html>