<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/connection.css')}}">
    <link rel="stylesheet" href="{{asset('css/hamburgeur.css')}}">
</head>
<body>
<header>
        <div class="left">
            <a href="/"><img src="{{asset('Models/teslalogo.png')}}" alt="logo_tesla"></a>
        </div>
        <div class="right">
            <img class="see" src="{{asset('Models/Userv2.png')}}">
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
        <span class="ajt-mobile-nav"><a href="/connection">Se Connecter</a></span>
    </nav>
    <div class="container">
        <form action="" class="form_login">
            <h1>Connexion</h1>
            <div class="login">
                <h3>Email</h3>
                <input type="text" placeholder="Entrer votre email" name="username" required class="input_login">
            </div>
            <div class="login">
                <h3>Mot de passe</h3>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required class="input_login">
            </div>
            <div id="blabla">
                <div class="remember">
                    <input type="checkbox">
                    <a>Se souvenir de moi</a>
                </div>
                <div class="password_forget">
                    <a href="" class="link">Mot de passe oublié ?</a>
                </div>
            </div>
            <input type="submit" value="Se connecter" class="button">

            <div class="signup">
                <a>Vous n'avez pas de compte ?</a>
                <a href="">Créer un compte</a>
            </div>


        </form>
    </div>
    
    <script src="{{asset('js/hamburgeur.js')}}"></script>
</body>
</html>