@include('header')
    <link rel="stylesheet" href="{{asset('css/confModel.css')}}" type="text/css">
    <title>Model Y</title>

    <div class="container">
        <div class="scroll">
            <div class="menu">
                <p  class="menuLat" title="Motorisation"><a href="#motorisation">Motorisation</a></p>
                <p  class="menuLat" title="Couleur"><a href="#color">Couleur</a></p>
                <p  class="menuLat" title="Jantes"><a href="#Wheels">Jantes</a></p>
                <p  class="menuLat" title="Intérieur"><a href="#Interior">Intérieur</a></p>
                <p  class="menuLat" title="Autopilot amélioré"><a href="#autopilot">Autopilot amélioré</a></p>
                <p  class="menuLat" title="Conduite autonome"><a href="#Self-Driving">Conduite autonome</a></p>
                <p  class="menuLat" title="Recharge"><a href="#recharge">Recharge</a></p>
                <p  class="menuLat" title="Options Supplémentaires"><a href="#Option-Sup">Options Supplémentaires</a></p>
                <p  class="menuLat" title="Finaliser commande"><a href="#Commander">Finaliser commande</a></p>
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
                <h1 class="title" id="correction_titre">Model Y</h1>
                <img src="Models/Model Y.jpg"id="MS"/>

                <div class="caracteristiques">
                    <div class="infos">
                        <div class="info">
                            <h2><span class="big">{{$motorisationMY->autonomie}}</span> km</h2>
                            
                            <p>Autonomie (WLTP est.)</p>
                        </div>
                        <div class="info">
                            <h2><span class="big">{{$motorisationMY->vitessemax}}</span> km/h</h2>
                            <p>Vitesse maximale</p>
                        </div>
                        <div class="info">
                            <h2><span class="big">{{App\Http\Controllers\ConfMYController::RecupTime($motorisationMY)}}</span> s</h2>
                            <p>0 à 100 km/h</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        
        <div class="options">
             <form action="{{'modifModelY'}}" method="post"> <!-- Appelle Modif dans web.php -->
            @csrf
            <input type="button" class="more_info" value="i" title="Plus d'informations"></input> 
            <div class="motorisation" id="motorisation">
                <div class="contenu">
                    <h2>Motorisation</h2>   
                    <fieldset >
                    <input type="button" id="more_info1" class="more_info" value="i"></input>
                        <div class="boutons__options">
                            <input class="radio__options" type="radio" name="model" id="modelPlaid" value="Model Y" checked="checked"></input>
                            <label class="label__clickable" id="bouton_modelX_plaid"for="modelPlaid" title="Model Y">Modele Y</label><br>
                        </div>

                        <div class="boutons__options">
                            <input class="radio__options"type="radio" name="model" id="modelXstandart" value="Model Y Grande Autonomie" >
                            <label class="label__clickable" id ="bouton_modelX" for="modelXstandart" title="Model Y Grande Autonomie">Modele Y Grande Autonomie</label><br>
                        </div>

                        <div class="boutons__options">
                            <input class="radio__options"type="radio" name="model" id="modelYPerformance" value="Model Y Performance" >
                            <label class="label__clickable" id ="bouton_modelY" for="modelYPerformance" title="Model Y Performance">Model Y Performance</label><br>
                        </div>

                    </fieldset>
                    <div id="desc1" class="invisible">Choisir une motorisation</div>
                </div>
            </div>

            
            <div class="couleurs">
                <h2 id="color">Couleur</h2>
                
                

                <fieldset>
                <input type="button" id="more_info2" class="more_info" value="i"></input>
                    <div class="d__flex">
                        <input class="radio__options" type="radio" name="color" id="blanc" value="{{$optionCouleurMY[0]->detailcaracteristique}} " checked="checked">
                        <label  for="blanc"><div id="white" class="W" title="{{$optionCouleurMY[0]->detailcaracteristique}}"></div></label>
                    </div>
                    
                    <div class="d__flex">
                        <input class="radio__options" type="radio" name="color" id="bleu" value="{{$optionCouleurMY[3]->detailcaracteristique}}" >
                        <label for="bleu"><div id="blue"  class="Blue" title="{{$optionCouleurMY[3]->detailcaracteristique}}"></div></label>
                    </div>
                    <div class="d__flex">
                        <input class="radio__options"  type="radio" name="color" id="gris" value="{{$optionCouleurMY[2]->detailcaracteristique}}" >
                        <label  for="gris"><div id="grey" class="G" title="{{$optionCouleurMY[2]->detailcaracteristique}}"></div></label>
                    </div>
                    <div class="d__flex">
                        <input class="radio__options" type="radio" name="color" id="noir" value="{{$optionCouleurMY[1]->detailcaracteristique}}" >
                        <label  for="noir"><div  id="black" class="Black" title="{{$optionCouleurMY[1]->detailcaracteristique}}"></div></label>
                    </div>
                    <div class="d__flex">
                        <input class="radio__options" type="radio" name="color" id="rouge" value="{{$optionCouleurMY[4]->detailcaracteristique}}" >
                        <label  for="rouge"><div id="red" class="R" title="{{$optionCouleurMY[4]->detailcaracteristique}}"></div></label>
                    </div>
                </fieldset>
                <div id="desc2" class="invisible">Sélectionner une couleur</div>
            </div>
            


            
            <div class="jantes">
                <h2 id="Wheels">Jantes</h2>
                <fieldset>
                <input type="button" id="more_info3" class="more_info" value="i"></input>
                    <div>  
                        <input class="radio__options" type="radio" name="jantes" id="jantes1" value="{{$optionDescMY[5]->description_option}}" checked="checked">
                        <label class="label__clickable" id="bouton_jantes1"for="jantes1" title="{{$optionDescMY[5]->description_option}}">{{$optionDescMY[5]->description_option}}</label><br>
                    </div>
                    <div>
                        <input class="radio__options" type="radio" name="jantes" id="jantes2" value="{{$optionDescMY[6]->description_option}}" >
                        <label class="label__clickable" id="bouton_jantes2" for="jantes2" title="{{$optionDescMY[6]->description_option}}">{{$optionDescMY[6]->description_option}}</label><br>
                    </div>
                </fieldset>
                <div id="desc3" class="invisible">Sélectionner un type de jante</div>
            </div>
            
            <div class="interieur">
                <h2 id="Interior">Intérieur</h2>
                <fieldset>
                <input type="button" id="more_info4" class="more_info" value="i"></input>
                    <div>
                        <input class="radio__options" type="radio" name="interieur" id="interieur1" value="{{$optionCouleurMY[8]->detailcaracteristique}}" checked="checked">
                        <label  for="interieur1"><div id="bouton_interieur_1" class="Black2" title="{{$optionCouleurMY[8]->detailcaracteristique}}"></div></label><br>
                    </div>
                    <div>
                        <input class="radio__options" type="radio" name="interieur" id="interieur2" value="{{$optionCouleurMY[9]->detailcaracteristique}}">
                        <label  for="interieur2"><div id="bouton_interieur_2"class="W2" title="{{$optionCouleurMY[9]->detailcaracteristique}}"></div></label><br>
                    </div>
                </fieldset>
                <div id="desc4" class="invisible">Sélectionner une couleur</div>

            </div>
            
            
            <div class="autopilot">
                <h2 id="autopilot">Autopilot amélioré</h2>
                <p>3 800 €</p>
                <fieldset>
                    <input type="button" id="more_info5" class="more_info" value="i"></input>
                    <label>Navigation en Autopilot</label>
                    <label>Changement de voie auto</label>
                    <label>Parking auto</label>
                    <label>Sortie auto</label>
                    <label>Sortie auto intelligente</label>
                    <div class="d__flex">
                        <div class="d__flex2">
                            <h4>NON</h4>
                            <div class="buttonToggle">
                                <label class="switch">
                                    <input  type="radio" name="autopilot_" id="checkAutoPilot2" value="Non Sélectionné" checked="checked">
                                    <span class="slider-toggle round"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                        <div class="d__flex2">
                            <div class="buttonToggle">
                                <label class="switch">
                                    <input  type="radio" name="autopilot_" id="checkAutoPilot" value="Sélectionné">
                                    <span class="slider-toggle round"></span>
                                </label>
                            </div>
                            <h4>OUI</h4>
                            </div>
                        </div>
                    
                    </div>
                    
                </fieldset>
                <div id="desc5" class="invisible">Sur l'autoroute, le changement de voie auto positionne votre véhicule dans la meilleure voie pour préparer les insertions et sorties, ainsi que le dépassement des véhicules lents. Les conducteurs bénéficient d'informations claires sur les changements de voie à venir et sur la personnalisation de la fonctionnalité Changement de voie auto.</div>
            </div>
            
            <div class="Self-Driving">
                <h2 id="Self-Driving">Capacité de conduite entièrement autonome</h2>
                <p>7 500 €</p>
                <fieldset>
                    <input type="button" id="more_info6" class="more_info" value="i"></input>
                    <label>Fonctionnalités de l'Autopilot de base et de l'Autopilot amélioré.</label>
                    <label>Reconnaissance et réaction aux feux de signalisation et aux panneaux stop.</label>
                    <div class="d__flex">
                        <div class="d__flex2">
                            <h4>NON</h4>
                            <div class="buttonToggle">
                                <label class="switch">
                                <input type="radio" id="checkSelfDriving2" name="selfdriving_" value="Non Sélectionné" checked="checked">
                                <span class="slider-toggle round"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                        <div class="d__flex2">
                                <div class="buttonToggle">
                                <label class="switch">
                                <input type="radio" id="checkSelfDriving" name="selfdriving_"value="Sélectionné">
                                <span class="slider-toggle round"></span>
                                </label>
                            </div>
                            <h4>OUI</h4>
                            </div>
                        </div>
                    
                    </div>
                    
                </fieldset>
                <div id="desc6" class="invisible">Sur l'autoroute, le changement de voie auto positionne votre véhicule dans la meilleure voie pour préparer les insertions et sorties, ainsi que le dépassement des véhicules lents. Les conducteurs bénéficient d'informations claires sur les changements de voie à venir et sur la personnalisation de la fonctionnalité Changement de voie auto.</div>
            </div>
            
            <div class="recharge">
                <h2 id="recharge">Chargeur mural</h2>
                <fieldset>
                <input type="button" id="more_info7" class="more_info" value="i"></input>
                    <label>Chargeur attaché au mur pour recharger votre Tesla dans le comfort de votre maison.</label>
                    <div class="d__flex">
                        <div class="d__flex2">
                            <h4>NON</h4>
                            <div class="buttonToggle">
                                <label class="switch">
                                    <input type="radio"  id="checkRecharge1" name="charge_" value="Non Sélectionné" checked="checked"> 
                                    <span class="slider-toggle round"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                        <div class="d__flex2">
                            <div class="buttonToggle">
                                <label class="switch">
                                    <input type="radio" name="charge_" id="checkRecharge" value="Sélectionné"> 
                                    <span class="slider-toggle round"></span>
                                </label>
                            </div>
                            <h4>OUI</h4>
                            </div>
                        </div>
                    
                    </div>
                    
                </fieldset>
                <div id="desc7" class="invisible">Notre solution de recharge à domicile recommandée. Avec une vitesse de recharge allant jusqu'à 71 kilomètres d'autonomie supplémentaire par heure en fonction du modèle de véhicule, une conception polyvalente pour l'intérieur et l'extérieur ainsi qu'un câble de 7,3 mètres, le Wall Connector est notre moyen le plus rapide et le plus pratique de recharger son véhicule à domicile. Installation requise et non incluse.</div>
            </div>
            <div class="fin">
                <H2 id="Option-Sup">Crochet d'attelage</H2>
                <fieldset>
                <label for="">Barre d’attelage en acier haute résistance de classe II, capable de tracter jusqu'à 2 250 kg</label>
                <div class="d__flex">
                        <div class="d__flex2">
                            <h4>NON</h4>
                            <div class="buttonToggle">
                                <label class="switch">
                                    <input type="radio"  id="checkCrochet2" name="crochett" value="Non Sélectionné" checked="checked">
                                    <span class="slider-toggle round"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                        <div class="d__flex2">
                            <div class="buttonToggle">
                                <label class="switch">
                                    <input type="radio" name="crochett" id="checkCrochet" value="Sélectionné">
                                    <span class="slider-toggle round"></span>
                                </label>
                            </div>
                            <h4>OUI</h4>
                            </div>
                        </div>
                    
                    </div>
                
                </fieldset>
            </div>


            
            <div class="commander" >
                <h2 id="Commander">Récapitulatif Commande</h2>
                <fieldset>
                    <label >Modèle choisi : <span id="afficheModel" ></span></label>
                    <label >Couleur choisie : <span id="afficheCouleur" ></span></label>
                    <label >Jantes choisies : <span id="afficheJante" ></span></label>
                    <label >intérieur choisi : <span id="afficheInterieur" ></span></label>
                    
                </fieldset>
                <fieldset>
                    <label >Autopilot amélioré : <span id="afficheAutoPilot" >Non</span></label>
                    <label >Conduite autonome : <span id="afficheConduite" >Non</span></label>
                    <label >Chargeur mural : <span id="afficheRecharge" >Non</span></label>
                    <label >Crochet d'attelage : <span id="afficheCrochet" >Non</span></label>
                </fieldset>

                <input type="submit" name="bouton_valid" id="btn_valid" value="Afficher Récapitulatif PDF" title="Afficher Récapitulatif PDF">

                 <div id="wrapper"> <!--BOUTONCOMMANDER -->
                    <section>
                        <div class="btn-container">
                            <input type="submit" value="Procéder au paiement" title="Procéder au paiement" id="button-blue"/>
                            <div class="ease"></div>
                        </div>
                    </section>
                </div>

                

                
               
                
            </div>
        </div>

        </form>
       
    </div>
    <script src="{{asset('js/confModelY.js')}}"></script>
    <script src="{{asset('js/hamburgeur.js')}}"></script>
</body>
</html>