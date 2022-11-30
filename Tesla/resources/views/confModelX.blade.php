@include('header')
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
            <form action="generation" method="POST">

            

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
                   
                   

  <fieldset >
    <legend>Choisir le modèle</legend>

    <input type="radio" name="model" id="modelPlaid" value="Modèle X Plaid" checked="checked">
    <label for="modelPlaid">Model X PLAID</label><br>

    <input type="radio" name="model" id="modelXstandart" value="Modèle X" >
    <label for="modelXstandart">Model X</label><br>

  </fieldset>


               
               
                </div>
                
                
            </div>

            <h2 id="color">Couleur</h2>
            <div class="couleurs">
                <div  class="selectionneColor"  >
                    <div class="couleur" id="W"></div>
                </div>
                <div class="selectionneColor" >
                    <div class="couleur" id="Blue"></div>
                </div>
                <div class="selectionneColor" >
                    <div class="couleur" id="G"></div>
                </div>
                <div class="selectionneColor" >
                    <div class="couleur" id="Black"></div>
                </div>
                <div class="selectionneColor" class="checkedColor"  >
                    <div class="couleur" id="R"></div>
                </div>
            <div id="desc2" class="invisible">Sélectionner une couleur</div>


            <fieldset>
    <legend>Choisir la couleur</legend>

    <input type="radio" name="color" id="blanc" value="blanc" checked="checked">
    <label for="blanc">Blanc</label><br>

    <input type="radio" name="color" id="bleu" value="bleu" >
    <label for="bleu">Bleu</label><br>

    <input type="radio" name="color" id="gris" value="gris" >
    <label for="gris">Gris</label><br>

    <input type="radio" name="color" id="noir" value="noir" >
    <label for="noir">Noir</label><br>

    <input type="radio" name="color" id="rouge" value="rouge" >
    <label for="rouge">Rouge</label><br>

  </fieldset>

            </div>

            
            <div class="jantes">
                <h2 id="Wheels">Jantes</h2>
                <div><img src="{{asset('Models/Jantes1.png')}}" alt="jante"></div>
                <div><img src="{{asset('Models/Jantes2.png')}}" alt="jante"></div>
                <p>nom de jante</p>
                <div id="desc3" class="invisible">Sélectionner un type de jante</div>

                <fieldset>
    <legend>Choisir les jantes</legend>

    <input type="radio" name="jantes" id="jantes1" value="jantes 1" checked="checked">
    <label for="jantes1">Jantes 1</label><br>

    <input type="radio" name="jantes" id="jantes2" value="jantes 2" >
    <label for="jantes2">Jantes2</label><br>

  </fieldset>
               
            </div>


            
            <div class="interieur">
                <h2 id="Interior">Intérieur</h2>
                <div class="couleur" id="W"></div>
                <div class="couleur" id="Black"></div>
                <div class="couleur" id="Beige"></div>
                <p>nom de couleur</p>
                <div id="desc4" class="invisible">Sélectionner une couleur</div>
            
                <fieldset>
    <legend>Choisir l'intérieur</legend>

    <input type="radio" name="interieur" id="interieur1" value="blanc" checked="checked">
    <label for="interieur1">Blanc</label><br>

    <input type="radio" name="interieur" id="interieur2" value="noir">
    <label for="interieur2">Noir</label><br>

    <input type="radio" name="interieur" id="interieur3" value="beige">
    <label for="interieur3">Beige</label><br>

  </fieldset>
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

                <div class="buttonToggle">
                    <label class="switch">
                        <input type="checkbox" id="checkAutoPilot" value="Sélectionné">
                        <span class="slider-toggle round"></span>
                    </label>
                </div>
                <div id="desc5" class="invisible">Sur l'autoroute, le changement de voie auto positionne votre véhicule dans la meilleure voie pour préparer les insertions et sorties, ainsi que le dépassement des véhicules lents. Les conducteurs bénéficient d'informations claires sur les changements de voie à venir et sur la personnalisation de la fonctionnalité Changement de voie auto.</div>
            </div>


            
            <div class="Self-Driving">
                <h2 id="Self-Driving">Capacité de conduite entièrement autonome</h2>
                <p>7 500 €</p>
                <ul>
                    <li>Toutes les fonctionnalités de l'Autopilot de base et de l'Autopilot amélioré</li>
                    <li>Reconnaissance et réaction aux feux de signalisation et aux panneaux stop</li>
                </ul>
                <div class="buttonToggle">
                    <label class="switch">
                        <input type="checkbox" id="checkSelfDriving" value="Sélectionné">
                        <span class="slider-toggle round"></span>
                    </label>
                </div>
                <div id="desc6" class="invisible">Sur l'autoroute, le changement de voie auto positionne votre véhicule dans la meilleure voie pour préparer les insertions et sorties, ainsi que le dépassement des véhicules lents. Les conducteurs bénéficient d'informations claires sur les changements de voie à venir et sur la personnalisation de la fonctionnalité Changement de voie auto.</div>
            </div>


            
            <div class="recharge">
                <h2 id="recharge">Recharger</h2>
                <h3>Chargeur mural</h3>
                <div class="buttonToggle">
                    <label class="switch">
                        <input type="checkbox" id="checkRecharge" value="Sélectionné"> 
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
                <div class="buttonToggle">
                    <label class="switch">
                        <input type="checkbox" id="checkCrochet" value="Sélectionné">
                        <span class="slider-toggle round"></span>
                    </label>
                </div>
            </div>


            
            <div class="commander" >
                <h2 id="Commander">Finaliser la commande</h2>

                <p >Modèle choisi : <span id="afficheModel" ></span></p>
                <p >Couleur choisie : <span id="afficheCouleur" ></span></p>
                <p >Jantes choisies : <span id="afficheJante" ></span></p>
                <p >intérieur choisi : <span id="afficheInterieur" ></span></p>
                <br>
                <p >Autopilot amélioré : <span id="afficheAutoPilot" >Non sélectionné</span></p>
                <p >Conduite autonome : <span id="afficheConduite" >Non sélectionné</span></p>
                <p >Chargeur mural : <span id="afficheRecharge" >Non sélectionné</span></p>
                <p >Crochet d'attelage : <span id="afficheCrochet" >Non sélectionné</span></p>
                

                 <div id="wrapper"> <!--BOUTONCOMMANDER -->
                    <section>
                        <div class="btn-container">
                            <input type="submit" value="Procéder au paiement" id="button-blue"/>
                            <div class="ease"></div>
                        </div>
                    </section>
                </div>

                <a href="{{route('confModelX_PDF')}}">Générer un pdf de la commande</a><!--GENERER PDF -->
                
            </div>
        </div>

        </form>
       
    </div>
    <script src="{{asset('js/confModelX.js')}}"></script>
    <script src="{{asset('js/hamburgeur.js')}}"></script>
    <script src="{{asset('js/generatePDF.js')}}"></script>
</body>
</html>
