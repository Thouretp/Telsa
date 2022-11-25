<!DOCTYPE html>
<html lang="en">
<head>
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
    <script src="{{asset('js/hamburgeur.js')}}"></script>
</body>
</html>


    