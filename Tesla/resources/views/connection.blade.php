<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/connection.css')}}">
</head>
<body>
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
</body>
</html>