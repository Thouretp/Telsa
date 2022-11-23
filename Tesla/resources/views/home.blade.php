<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css">
    <title>LaTes Botta</title>
</head>

<body>
    <header>
        <div class="left">
            <a href="#modelS"><img src="{{asset('Models/teslalogo.png')}}" alt="logo_tesla"></a>
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
        <a href="#modelS">Model S</a>
        <a href="#model3">Model 3</a>
        <a href="#modelX">Model X</a>
        <a href="#modelY">Model Y</a>
        <a href="#shop">Shop</a>
        <a href="#help">Assistance</a>
        <span class="ajt-mobile-nav"><a href="#Login">Se Connecter</a></span>
    </nav>

    <div id="bar">
        <div id="movement"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div id="GP"></div>
    </div>





    <nav class="menu">
        <p id="lienModelS" class="menuLat"><a href="#modelS">Model S</a></p>
        <p id="lienModel3" class="menuLat"><a href="#model3">Model 3</a></p>
        <p id="lienModelX" class="menuLat"><a href="#modelX">Model X</a></p>
        <p id="lienModelY" class="menuLat"><a href="#modelY">Model Y</a></p>
    </nav>

    <div class="container">

        <div class="slider" id="modelS">

            <div class="infos_card">
                <div class="infos">
                    <h2><span class="big">543</span> km</h2>
                    <p>Autonomie (WLTP est.)</p>
                </div>
                <div class="infos">
                    <h2><span class="big">543</span> km/h</h2>
                    <p>Vitesse maximale</p>
                </div>
                <div class="infos">
                    <h2><span class="big">2,6</span> secondes</h2>
                    <p>0 à 100 km/h</p>
                </div>
                <div class="infos">
                    <h2><span class="big">300</span> ch</h2>
                    <p>Puissance</p>
                </div>
            </div>
            <div class="circle" id="cercle1"></div>
            <h1 class="title" id="correction_titre">Model S</h1>
            <img src="Models/Model S.jpg" id="MS" />
            <input type="button" class="visu" id="btn1" value="Configuration personalisée"></input>

            <div class="img">
                <img src="Models/MS_1.jpeg" alt="">
                <img src="Models/MS_2.jpeg" alt="">
                <img src="Models/MS_3.jpg" alt="">
            </div>
        </div>

        <div class="slider" id="model3">

            <div class="infos_card">
                <div class="infos_card">
                    <div class="infos">
                        <h2><span class="big">491</span> km</h2>
                        <p>Autonomie (WLTP est.)</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">225</span> km/h</h2>
                        <p>Vitesse maximale</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">6,1</span> secondes</h2>
                        <p>0 à 100 km/h</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">590</span> ch</h2>
                        <p>Puissance</p>
                    </div>
                </div>
            </div>
            <div class="circle"></div>
            <h1 class="title">Model 3</h1>
            <img src="Models/Model 3.jpg" id="M3">
            <input type="button" class="visu" id="btn1" value="Configuration personalisée"></input>

        </div>

        <div class="slider" id="modelX">

            <div class="infos_card">
                <div class="infos">
                    <h2><span class="big">543</span> km</h2>
                    <p>Autonomie (WLTP est.)</p>
                </div>
                <div class="infos">
                    <h2><span class="big">543</span> km/h</h2>
                    <p>Vitesse maximale</p>
                </div>
                <div class="infos">
                    <h2><span class="big">2,6</span> secondes</h2>
                    <p>0 à 100 km/h</p>
                </div>
                <div class="infos">
                    <h2><span class="big">300</span> ch</h2>
                    <p>Puissance</p>
                </div>
            </div>
            <div class="circle"></div>
            <h1 class="title">Model X</h1>
            <img src="Models/Model X.jpg" id="MX">
            <form action="confModelX">
                <input type="submit" class="visu" id="btnModX" value="Configuration personalisée"></input>
            </form>


        </div>

        <div class="slider" id="modelY">

            <div class="infos_card">
                <div class="infos_card">
                    <div class="infos">
                        <h2><span class="big">543</span> km</h2>
                        <p>Autonomie (WLTP est.)</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">543</span> km/h</h2>
                        <p>Vitesse maximale</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">2,6</span> secondes</h2>
                        <p>0 à 100 km/h</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">300</span> ch</h2>
                        <p>Puissance</p>
                    </div>
                </div>
            </div>
            <div class="circle"></div>
            <h1 class="title">Model Y</h1>
            <img src="Models/Model Y.jpg" id="MY">
            <form action="confModelX">
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée" />
            </form>
        </div>
    </div>

    <script src="{{asset('js/home.js')}}"></script>

</body>

</html>