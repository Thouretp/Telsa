<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('css/confModelX.css')}}" type="text/css">
    <title>Model X</title>
</head>
<body>
    <div class="container">
        <div class="scroll">
            <div class="menu">
                <p  class="menuLat"><a href="#motorisation">Motorisation</a></p>
                <p  class="menuLat"><a href="#color">Couleur</a></p>
                <p  class="menuLat"><a href="#Wheels">Jantes</a></p>
                <p  class="menuLat"><a href="#Interior">Intérieur</a></p>
                <p  class="menuLat"><a href="#autopilot">Autopilot amélioré</a></p>
                <p  class="menuLat"><a href="#Self-Driving">Conduite autonome</a></p>
                <p  class="menuLat"><a href="#recharge">Recharge</a></p>
                <p  class="menuLat"><a href="#Option-Sup">Options Supplémentaires</a></p>
                <p  class="menuLat"><a href="#Commander">Finaliser commande</a></p>
            </div>
            <div id="bar">
                <div id="movement"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div class="point"></div>
                <div id="GP"></div>
            </div>
        </div>
        <div class="main">
            <div class="slider" id="modelX">
                <div class="circle" id="cercle1"></div>
                <h1 class="title" id="correction_titre">Model X</h1>
                <img src="Models/Model X.jpg"id="MS"/>

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
                <div class="caracteristiques">
                    <div class="infos">
                        <div class="info">
                            <h2><span class="big">543</span> km</h2>
                            <p>Autonomie (WLTP est.)</p>
                        </div>
                        <div class="info">
                            <h2><span class="big">262</span> km/h</h2>
                            <p>Vitesse maximale</p>
                        </div>
                        <div class="info">
                            <h2><span class="big">2,6</span> s</h2>
                            <p>0 à 100 km/h</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        
        <div class="options">

            <input type="button" class="more_info" value="i"></input> 
            <div class="motorisation" id="motorisation">
                
                <div class="contenu">
                    <h2>Motorisation</h2>   
                    
                    
                    <div class="boutons">
                        <button class="btn">Model X plaid <a>141 900€</a></button> <br>
                        <button class="btn">Model X </button>
                    </div>
                    <p>Disponible en 2023</p>
                    <div id="desc1" class="invisible">Choisir une motorisation</div>
                </div>
                
                
            </div>

            <h2 id="color">Couleur</h2>
            <div class="couleurs">
                <div class="couleur" id="W"></div>
                <div class="couleur" id="Blue"></div>
                <div class="couleur" id="G"></div>
                <div class="couleur" id="Black"></div>
                <div class="couleur" id="R"></div>
            <div id="desc2" class="invisible">Sélectionner une couleur</div>

            </div>

            
            <div class="jantes">
                <h2 id="Wheels">Jantes</h2>
                <div><img src="images/Jantes1.png" alt="jante"></div>
                <div><img src="images/Jantes2.png" alt="jante"></div>
                <p>nom de jante</p>
                <div id="desc3" class="invisible">Sélectionner un type de jante</div>
               
            </div>


            
            <div class="interieur">
                <h2 id="Interior">Intérieur</h2>
                <div class="couleur" id="W"></div>
                <div class="couleur" id="Black"></div>
                <div class="couleur" id="Beige"></div>
                <p>nom de jante</p>
                <div id="desc4" class="invisible">Sélectionner une couleur</div>
            </div>
            
            
            <div class="autopilot">
                <h2 id="autopilot">Autopilot amélioré</h2>
                <p>3 800 €</p>
                <ul>
                    <li>Navigation en Autopilot</li>
                    <li>Changement de voie auto</li>
                    <li>Parking auto</li>
                    <li>Sortie auto</li>
                    <li>Sortie auto intelligente</li>
                </ul>
                <div id="desc5" class="invisible">Sur l'autoroute, le changement de voie auto positionne votre véhicule dans la meilleure voie pour préparer les insertions et sorties, ainsi que le dépassement des véhicules lents. Les conducteurs bénéficient d'informations claires sur les changements de voie à venir et sur la personnalisation de la fonctionnalité Changement de voie auto.</div>
            </div>


            
            <div class="Self-Driving">
                <h2 id="Self-Driving">Capacité de conduite entièrement autonome</h2>
                <p>7 500 €</p>
                <ul>
                    <li>Toutes les fonctionnalités de l'Autopilot de base et de l'Autopilot amélioré</li>
                    <li>Reconnaissance et réaction aux feux de signalisation et aux panneaux stop</li>
                </ul>
                <div id="desc6" class="invisible">Sur l'autoroute, le changement de voie auto positionne votre véhicule dans la meilleure voie pour préparer les insertions et sorties, ainsi que le dépassement des véhicules lents. Les conducteurs bénéficient d'informations claires sur les changements de voie à venir et sur la personnalisation de la fonctionnalité Changement de voie auto.</div>
            </div>


            
            <div class="recharge">
                <h2 id="recharge">Recharger</h2>
                <h3>Chargeur mural</h3>
                <div class="buttonToggle">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider-toggle round"></span>
                    </label>
                </div>
                <div id="desc7" class="invisible">Notre solution de recharge à domicile recommandée. Avec une vitesse de recharge allant jusqu'à 71 kilomètres d'autonomie supplémentaire par heure en fonction du modèle de véhicule, une conception polyvalente pour l'intérieur et l'extérieur ainsi qu'un câble de 7,3 mètres, le Wall Connector est notre moyen le plus rapide et le plus pratique de recharger son véhicule à domicile. Installation requise et non incluse.</div>
                
            </div>



            
            <div class="fin">
                <H2 id="Option-Sup">Option Supplémentaire</H2>
                <h3>Crochet d'attelage</h3>
                <div class="crochet">
                    
                    <p>Barre d’attelage en acier haute résistance de classe II, capable de tracter jusqu'à 2 250 kg</p>
                    
                </div>
            </div>


            
            <div class="commander" >
                <h2 id="Commander">Finaliser la commande</h2> 
                <div id="wrapper">
                    <section>
                        <div class="btn-container">
                            <input type="submit" value="Procéder au paiement" id="button-blue"/>
                            <div class="ease"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
       
    </div>
    <script src="{{asset('js/confModelX.js')}}"></script>
    
</body>
</html>