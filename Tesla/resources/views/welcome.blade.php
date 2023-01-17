
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
    <link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css"/>
    
    <!-- <div class="alert alert_success">
                    Vous ne pouvez pas descendre avec la souris, utilisez les boutons sur votre gauche 
                </div> -->
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
        <div class="line-wobble dl1"></div>
        <!-- <img id="arrow" src="Models/flèche-bas.png" alt=""> -->
        <p id="lienModel3" class="menuLat"><a href="#model3">Model 3</a></p>
        <div class="line-wobble dl2"></div>
        <p id="lienModelX" class="menuLat"><a href="#modelX">Model X</a></p>
        <div class="line-wobble dl3"></div>
        <p id="lienModelY" class="menuLat"><a href="#modelY">Model Y</a></p>
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
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée"></input>
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
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée"></input>
            </form>
            <form action="essai">
                <input type="submit" class="test-drive visu" id="btn2" value="Réservez un essai"></input>
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
            <a href="/confModelX"><input type="button" class="visu" id="btn1" value="Configuration personalisée"></input></a>
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
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée" />
            </form>
            <form action="essai">
                <input type="submit" class="test-drive visu" id="btn2" value="Réservez un essai"></input>
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
            <p>Consentement</p>
            <p>Détails</p>
            <p id="rightSide-cookie">A propos des cookies</p>
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
                <label class="switch-cookie">
                    <input type="checkbox">
                    <span class="slider-cookie round"></span>
                </label>
                <label class="switch-cookie">
                    <input type="checkbox">
                    <span class="slider-cookie round"></span>
                </label>
                <label class="switch-cookie">
                    <input type="checkbox">
                    <span class="slider-cookie round"></span>
                </label>
                <label class="switch-cookie">
                    <input type="checkbox" checkbox="checked">
                    <span class="slider-cookie round"></span>
                </label>
            </div>
        </div>
        <div class="submit">
            <a href="?false-cookie" class="clasic-cookie">Refuser</a>
            <input class="clasic-cookie" type="button" value="Autoriser la selection" />
            <a href="?accepte-cookie" class="check-cookie">Tout autoriser</a>
    </div>
<?php
        }
?>

    <script src="{{asset('js/hamburgeur.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>