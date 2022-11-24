@include('header')
    <link rel="stylesheet" href="{{asset('css/confModelX.css')}}" type="text/css">
    <title>ConfigurationModelX</title>
    <div class="container">
        <div class="scroll">
            <div class="menu">
                <p class="menuLat"><a href="#motorisation">Motorisation</a></p>
                <p class="menuLat"><a href="#color">Couleur</a></p>
                <p class="menuLat"><a href="#Wheels">Jantes</a></p>
                <p class="menuLat"><a href="#Interior">Intérieur</a></p>
                <p class="menuLat"><a href="#autopilot">Autopilot amélioré</a></p>
                <p class="menuLat"><a href="#Self-Driving">Capacité de conduite entièrement autonome</a></p>
                <p class="menuLat"><a href="#recharge">Recharger</a></p>
                <p class="menuLat"><a href="#Option-Sup">Options Supplémentaire</a></p>
            </div>
            <div id="bar">
                <div id="movement"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div id="GP"></div>
            </div>
        </div>
        <div class="main">
            <div class="slider" id="modelS">
                <div class="circle" id="cercle1"></div>
                <h1 class="title" id="correction_titre">Model X</h1>
                <img src="{{asset('Models/Model X.jpg')}}" id="MS" />

                <!-- <div id="caroussel">
                    <div class="images">
                           <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio">
                        <img src="images/01.png" alt="voituuuuuuuuuuu">
                        <img src="images/02.png" alt="voituuuuuuuuuuu">
                        <img src="images/03.png" alt="voituuuuuuuuuuu">
                        <img src="images/04.png" alt="voituuuuuuuuuuu">
                    </div>
                </div> -->

            </div>
            <div class="caracteristiques">
                <p>600km</p>
                <p>322km/h</p>
                <p>2,1s</p>
            </div>
        </div>

        <div class="options">
            <div class="motorisation" id="motorisation">
                <h3>Motorisation</h3>

                <input type="button" class="more_info" value="i"></input>

                <button class="btn">Model X plaid <a>141 900€</a></button> <br>
                <button class="btn">Model X </button>
                <p>Disponible en 2023</p>
                <div id="desc1" class="invisible">Choisir une motorisation</div>
            </div>
            <h3 id="color">Couleur</h3>
            <div class="couleurs">
                <div class="couleur" id="W"></div>
                <div class="couleur" id="Blue"></div>
                <div class="couleur" id="G"></div>
                <div class="couleur" id="Black"></div>
                <div class="couleur" id="R"></div>
                <div id="desc2" class="invisible">Sélectionner une couleur</div>

            </div>

            <h3 id="Wheels">Jantes</h3>
            <div class="jantes">
                <div class="lesjantes">
                    <div><img src="{{asset('Models/Jantes1.png')}}" alt="jante"></div>
                    <div><img src="{{asset('Models/Jantes2.png')}}" alt="jante"></div>

                </div>
                <p>nom de jante</p>

            </div>


            <h3 id="Interior">Intérieur</h3>
            <div class="interieur">
                <div class="couleur" id="W"></div>
                <div class="couleur" id="Black"></div>
                <div class="couleur" id="Beige"></div>
            </div>
            <p>description assez longue pour aller a la ligne </p>
            <h3 id="autopilot">Autopilot amélioré</h3>
            <div class="autopilot">
                <p>3 800 €</p>
                <ul>
                    <li>Navigation en Autopilot</li>
                    <li>Changement de voie auto</li>
                    <li>Parking auto</li>
                    <li>Sortie auto</li>
                    <li>Sortie auto intelligente</li>
                </ul>
            </div>
            <h3 id="Self-Driving">Capacité de conduite entièrement autonome</h3>
            <div class="Self-Driving">
                <p>7 500 €</p>
                <ul>
                    <li>Toutes les fonctionnalités de l'Autopilot de base et de l'Autopilot amélioré</li>
                    <li>Reconnaissance et réaction aux feux de signalisation et aux panneaux stop</li>
                </ul>
            </div>
            <h3 id="recharge">Recharger</h3>
            <div class="recharge">
                <input type="checkbox"> <a>Chargeur mural</a>
            </div>
            <H2 id="Option-Sup">Option Supplémentaire</H2>
            <div class="fin">
                <h3>Crochet d'attelage</h3>
                <div class="crochet">
                    <div>Barre d’attelage en acier haute résistance de classe II, capable de tracter jusqu'à
                        2 250 kg <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label></div>
                </div>
                <h3>Commander votre Model X</h3>
                <div id="butcommande">
                    <button>Procéder au paiement</button>
                </div>
            </div>
        </div>

    </div>
    <script src="{{asset('js/hamburgeur.js')}}"></script>
    <script src="{{asset('js/confModelX.js')}}"></script>
</body>

</html>