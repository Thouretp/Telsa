
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/essai.css')}}">
    <title>essaiTesla</title>
    
</head>
<body>
<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogoV2.png')}}" alt="logo_tesla"></a>
        </div>
        <div class="right">
            <a href="/login"><img class="see" src="{{asset('Models/Userv2.png')}}"></a>
            <img class="see" src="{{asset('Models/bagv2.png')}}">
            <button class="hamburgeur">
                <div class="bar"></div>
        </div>
        </div>
    </header>

    <nav class="mobile-nav">
        <a href="/#modelS">Model S</a>
        <a href="/#model3">Model 3</a>
        <a href="/#modelX">Model X</a>
        <a href="/#modelY">Model Y</a>
        <a href="#shop">Shop</a>
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
        <div class="title-essai">
            <h1>Réservez votre essai</h1>
            <p>Essayez une Tesla dans un magasin près de chez vous. Les conducteurs doivent être titulaires <br>
                d'un permis de conduire valide</p>
        </div>
        <div class="image-voiture">
            <img src="{{asset('Models/model3_essai.png')}}" alt="model3_essai" srcset="">
        </div>
        <div class="essai-button-model">
            <form action="/EssaiController" method="post">
                <input id='btn-model3' type="button" data-model="model3" value="Model 3" class="button-choix-model">
                <input id="btn-modelY" type="button" data-model="modely"value="Model Y" class="button-choix-model">
            </form>
        </div>
        <div class="form-essai">
            <h1 class="title-form-essai">Nous Contacter</h1>
            <form action="/EssaiController" method="post" name="envoyer">
                @csrf
                <div class="container-form-essai">
                    <div class="left-form">
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">Prénom</label>
                            </div>
                        </div>
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">Nom</label>
                            </div>
                        </div>
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">E-mail</label>
                            </div>
                        </div>
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">Télephone</label>
                            </div>
                        </div>
                    </div>
                    <div class="right-form">
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">Adresse</label>
                            </div>
                        </div>
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">Code Postal</label>
                            </div>
                        </div>
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">Ville</label>
                            </div>
                        </div>
                        <div>
                            <div class="group">      
                                <input type="text" class="text-area-form-essai" required readonly>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label-form-essai">Modele</label>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="btn-submit-form-essai">
                <a href="/okFormulaire"><input type="submit" value="Envoyer" class="btn-submit"></a></input>
                </div>
            </form>
        </div>
    </div>
    <script src="{{asset('js/hamburgeur.js')}}"></script>
    <script src="{{asset('js/essai.js')}}"></script>
</body>
</html>