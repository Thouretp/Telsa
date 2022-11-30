@include('header')
    <link rel="shortcut icon" href="{{asset('Models/teslalogoPetit.png')}}" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css"/>

    <div id="bar">
        <div id="movement"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div id="GP"></div>
    </div>

<!-- <?php
    // function RecupTime($var){
    //     $time = $var->puissancemoteur;
    //     $time = str_replace(":", "", $time);
    //     $time = floatval($time);
    //     return $time;
    // }
?> -->




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
                    <h2><span class="big">{{$motorisationMS->autonomie}}</span> km</h2>
                    <p>Autonomie (WLTP est.)</p>
                </div>
                <div class="infos">
                    <h2><span class="big">543</span> km/h</h2>
                    <p>Vitesse maximale</p>
                </div>
                <div class="infos">
                    <h2><span class="big">{{App\Http\Controllers\HomeController::RecupTime($motorisationMS)}}</span> secondes</h2>
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
            <form action="confModel3">
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée"></input>
            </form>

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
            <a href="/confModelX"><input type="button" class="visu" id="btn1" value="Configuration personalisée"></input></a>
            

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
            <form action="confModelY">
                <input type="submit" class="visu" id="btn1" value="Configuration personalisée" />
            </form>
        </div>
    </div>

    <script src="{{asset('js/hamburgeur.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>