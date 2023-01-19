
<?php
    if(isset($_GET['accepte-cookie'])){
        setcookie('accepte-cookie', true, time()+365*12*3600);
        header('Location:./');
    }
    if(isset($_GET['false-cookie'])){
        setcookie('accepte-cookie', false);
        header('Location:./');
    }
?>
@include('header')
    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css"/>
    <link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
    <title>Lates</title>

    <div id="bar">
        <div id="movement"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div id="GP"></div>
    </div>
    <nav class="menu">
        <p id="lienModelS" class="menuLat"><a  href="#modelS" title="Model S">Model S</a></p>
        <div class="line-wobble dl1"></div>
        <p id="lienModel3" class="menuLat"><a href="#model3" title="Model 3">Model 3</a></p>
        <div class="line-wobble dl2"></div>
        <p id="lienModelX" class="menuLat"><a href="#modelX" title="Model X">Model X</a></p>
        <div class="line-wobble dl3"></div>
        <p id="lienModelY" class="menuLat"><a href="#modelY" title="Model Y">Model Y</a></p>
        <div class="line-wobble dl4"></div>
    </nav>

    <div class="container">

        <div class="slider" id="modelS">

            <div class="infos_card">
                <div class="infos">
                    <h2><span class="big">{{$motorisationMS->autonomie}}</span> km</h2>
                    <p>Autonomie (WLTP est.)</p>
                </div>
                <div class="infos">
                    <h2><span class="big">{{$motorisationMS->vitessemax}}</span> km/h</h2>
                    <p>Vitesse maximale</p>
                </div>
                <div class="infos">
                    <h2><span class="big">{{App\Http\Controllers\HomeController::RecupTime($motorisationMS)}}</span> secondes</h2>
                    <p>0 à 100 km/h</p>
                </div>
                <div class="infos">
                    <h2><span class="big">{{$motorisationMS->codeclasseenergetique}}</span></h2>
                    <p>Classe énergetique</p>
                </div>
            </div>
            <div class="circle" id="cercle1"></div>
            <h1 class="title" id="correction_titre">Model S</h1>
            <img src="Models/Model S.jpg" id="MS" />
            <form action="confModelS">
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée" title="Configuration personnalisée du model S"></input>
            </form>

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
                        <h2><span class="big">{{$motorisationM3->autonomie}}</span> km</h2>
                        <p>Autonomie (WLTP est.)</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">{{$motorisationM3->vitessemax}}</span> km/h</h2>
                        <p>Vitesse maximale</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">{{App\Http\Controllers\HomeController::RecupTime($motorisationM3)}}</span> secondes</h2>
                        <p>0 à 100 km/h</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">{{$motorisationM3->codeclasseenergetique}}</span> </h2>
                        <p>Classe énergetique</p>
                    </div>
                </div>
            </div>
            <div class="circle"></div>
            <h1 class="title">Model 3</h1>
            <img src="Models/Model 3.jpg" id="M3">
            <form action="confModel3">
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée" title="Configuration personnalisée du model 3"></input>
            </form>
            <form action="essai">
                <input type="submit" class="test-drive visu" id="btn2" value="Réservez un essai" title="Réserver un essai"></input>
            </form>

        </div>

        <div class="slider" id="modelX">

            <div class="infos_card">
                <div class="infos">
                    <h2><span class="big">{{$motorisationMX->autonomie}}</span> km</h2>
                    <p>Autonomie (WLTP est.)</p>
                </div>
                <div class="infos">
                    <h2><span class="big">{{$motorisationMX->vitessemax}}</span> km/h</h2>
                    <p>Vitesse maximale</p>
                </div>
                <div class="infos">
                    <h2><span class="big">{{App\Http\Controllers\HomeController::RecupTime($motorisationMX)}}</span> secondes</h2>
                    <p>0 à 100 km/h</p>
                </div>
                <div class="infos">
                    <h2><span class="big">{{$motorisationMX->codeclasseenergetique}}</span> </h2>
                    <p>Classe énergetique</p>
                </div>
            </div>
            <div class="circle"></div>
            <h1 class="title">Model X</h1>
            <img src="Models/Model X.jpg" id="MX">
            <a href="/confModelX"><input type="button" class="visu" id="btn1" value="Configuration personalisée" title="Configuration personnalisée du model X"></input></a>
        </div>

        <div class="slider" id="modelY">

            <div class="infos_card">
                <div class="infos_card">
                    <div class="infos">
                        <h2><span class="big">{{$motorisationMY->autonomie}}</span> km</h2>
                        <p>Autonomie (WLTP est.)</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">{{$motorisationMY->vitessemax}}</span> km/h</h2>
                        <p>Vitesse maximale</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">{{App\Http\Controllers\HomeController::RecupTime($motorisationMY)}}</span> secondes</h2>
                        <p>0 à 100 km/h</p>
                    </div>
                    <div class="infos">
                        <h2><span class="big">{{$motorisationMY->codeclasseenergetique}}</span> </h2>
                        <p>Classe énergetique</p>
                    </div>
                </div>
            </div>
            <div class="circle"></div>
            <h1 class="title">Model Y</h1>
            <img src="Models/Model Y.jpg" id="MY">
            <form action="confModelY">
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée" title="Configuration personnalisée du model Y"/>
            </form>
            <form action="essai">
                <input type="submit" class="test-drive visu" id="btn2" value="Réservez un essai" title="Réserver un essai"></input>
            </form>
            

            <div class="img">
                <img src="Models/MY_1.jpg" alt="">
                <img src="Models/MY_2.jpg" alt="">
                <img src="Models/MY_3.jpg" alt="">
            </div>
        </div>
    </div>
    <?php
        if(!isset($_COOKIE['accepte-cookie'])){
    ?>
    <div class="container-cookie">
        <div class="nav-cookie">
            <p title="Consentement">Consentement</p>
            <p title="Détails">Détails</p>
            <p id="rightSide-cookie" title="A propos des cookies">A propos des cookies</p>
        </div>
        <div class="details">
            <p> <strong> Ce site Utilise des cookies. <br></strong>
                Les cookies nous permettent de personnaliser le contenu et les annonces, d'offrir des fonctionnalités
                relatives aux
                médias sociaux e d'analyser notre trafic. Nous partageons également des informations sur l'utilisaion de
                notre site
                avec nos partenaires de médias sociaux, de publicité et d'analyse, quin peuvent combiner celles-ci avec
                d'autres
                informations que vous leur avez fournies ou qu'ils ont collectées lors de votre utilisation de leur
                services.</p>
        </div>
        <div class="buttonTurn-cookie">
            <div class="nameButtonToggle-cookie">
                <p class="turnOverButton"> Nécessaires</p>
                <p class="turnOverButton"> Préférences</p>
                <p class="turnOverButton"> Statistique</p>
                <p class="turnOverButton"> Marketing</p>
            </div>
            <div class="buttonToggle-cookie">
                <label class="switch-cookie" title="Cookies nécessaires">
                    <input type="checkbox">
                    <span class="slider-cookie round"></span>
                </label>
                <label class="switch-cookie" title="Cookies de préférences">
                    <input type="checkbox">
                    <span class="slider-cookie round"></span>
                </label>
                <label class="switch-cookie" title="Cookies de statistiques">
                    <input type="checkbox">
                    <span class="slider-cookie round"></span>
                </label>
                <label class="switch-cookie" title="Cookies de marketing">
                    <input type="checkbox" checkbox="checked">
                    <span class="slider-cookie round"></span>
                </label>
            </div>
        </div>
        <div class="submit">
            <a href="?false-cookie" class="clasic-cookie" title="Refuser les cookies">Refuser</a>
            <input class="clasic-cookie" type="button" value="Autoriser la selection" title="Autoriser la selection de cookies"/>
            <a href="?accepte-cookie" class="check-cookie" title="Autoriser tous les cookies">Tout autoriser</a>
    </div>
<?php
        }
?>

    <script src="{{asset('js/hamburgeur.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>