<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css">
<title>Saisie adresse</title>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('Models/teslalogoV2.png')}}" alt="logo la tes en folie">
            </a>
        </x-slot>

        <form method="POST" action="{{ route('address') }}">
            @csrf

            <!-- adresserue -->
            <div>
                <x-input-label for="adresserue" :value="__('Adresse rue')" />
                <x-text-input id="Rue" class="form-control block mt-1 w-full" type="text" name="Rue" :value="old('adresserue')" required autofocus />
                <x-input-error :messages="$errors->get('adresserue')" class="mt-2" />
            </div>
            <div class="col-6 proposition">
                <div class="adress-feedback">
                    <ul></ul>
                </div>
                <!-- adresserue2 -->
                <div>
                    <x-input-label for="adresserue2" :value="__('Adresse rue 2')" />
                    <x-text-input id="adresserue2" class="block mt-1 w-full" type="text" name="adresserue2" :value="old('adresserue2')" autofocus />
                    <x-input-error :messages="$errors->get('adresserue2')" class="mt-2" />
                </div>

                <!-- ville -->
                <div>
                    <x-input-label for="ville" :value="__('Ville')" />
                    <x-text-input id="Ville" class="form-control block mt-1 w-full" type="text" name="Ville" :value="old('ville')" required autofocus />
                    <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                </div>

                <!-- cp -->
                <div>
                    <x-input-label for="cp" :value="__('cp')" />
                    <x-text-input id="CodePostal" class="form-control block mt-1 w-full" type="text" pattern="^[0-9]{1}[0-9a-bA-B]{1}[0-9]{3}$" minlength="5" maxlength="5" name="cp" :value="old('cp')" required autofocus />
                    <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="pays" :value="__('Pays')" />
                    <select name="pays">
                        <optgroup label="A">
                            <option value="AF">Afghanistan</option>
                            <option value="ZA">Afrique du Sud</option>
                            <option value="AL">Albanie</option>
                            <option value="DZ">Alg??rie</option>
                            <option value="DE">Allemagne</option>
                            <option value="MK">Ancienne R??publique yougoslave de Mac??doine</option>
                            <option value="AD">Andorre</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctique</option>
                            <option value="AG">Antigua-et-Barbuda</option>
                            <option value="AN">Antilles n??erlandaises</option>
                            <option value="SA">Arabie saoudite</option>
                            <option value="AR">Argentine</option>
                            <option value="AM">Arm??nie</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australie</option>
                            <option value="AT">Autriche</option>
                            <option value="AZ">Azerba??djan</option>
                        </optgroup>
                        <optgroup label="B">
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahre??n</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbade</option>
                            <option value="BE">Belgique</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">B??nin</option>
                            <option value="BM">Bermudes</option>
                            <option value="BT">Bhoutan</option>
                            <option value="BY">Bi??lorussie</option>
                            <option value="BO">Bolivie</option>
                            <option value="BA">Bosnie-et-Herz??govine</option>
                            <option value="BW">Botswana</option>
                            <option value="BR">Br??sil</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgarie</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                        </optgroup>
                        <optgroup label="C">
                            <option value="KH">Cambodge</option>
                            <option value="CM">Cameroun</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cap-Vert</option>
                            <option value="CL">Chili</option>
                            <option value="CN">Chine</option>
                            <option value="CY">Chypre</option>
                            <option value="CO">Colombie</option>
                            <option value="KM">Comores</option>
                            <option value="CG">Congo</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">C??te d'Ivoire</option>
                            <option value="HR">Croatie</option>
                            <option value="CU">Cuba</option>
                        </optgroup>
                        <optgroup label="D">
                            <option value="DK">Danemark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominique</option>
                        </optgroup>
                        <optgroup label="E">
                            <option value="EG">??gypte</option>
                            <option value="SV">El Salvador</option>
                            <option value="AE">??mirats arabes unis</option>
                            <option value="EC">??quateur</option>
                            <option value="ER">??rythr??e</option>
                            <option value="ES">Espagne</option>
                            <option value="EE">Estonie</option>
                            <option value="FM">??tats f??d??r??s de Micron??sie</option>
                            <option value="US">??tats-Unis</option>
                            <option value="ET">??thiopie</option>
                        </optgroup>
                        <optgroup label="F">
                            <option value="FJ">Fidji</option>
                            <option value="FI">Finlande</option>
                            <option value="FR" selected>France</option>
                        </optgroup>
                        <optgroup label="G">
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambie</option>
                            <option value="GE">G??orgie</option>
                            <option value="GS">G??orgie du Sud-et-les ??les Sandwich du Sud</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Gr??ce</option>
                            <option value="GD">Grenade</option>
                            <option value="GL">Groenland</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guin??e</option>
                            <option value="GQ">Guin??e ??quatoriale</option>
                            <option value="GW">Guin??e-Bissau</option>
                            <option value="GY">Guyane</option>
                            <option value="GF">Guyane fran??aise</option>
                        </optgroup>
                        <optgroup label="H">
                            <option value="HT">Ha??ti</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hongrie</option>
                        </optgroup>
                        <optgroup label="I">
                            <option value="BV">Ile Bouvet</option>
                            <option value="CX">Ile Christmas</option>
                            <option value="NF">??le Norfolk</option>
                            <option value="PN">??le Pitcairn</option>
                            <option value="AX">Iles Aland</option>
                            <option value="KY">Iles Cayman</option>
                            <option value="CC">Iles Cocos (Keeling)</option>
                            <option value="CK">Iles Cook</option>
                            <option value="FO">??les F??ro??</option>
                            <option value="HM">??les Heard-et-MacDonald</option>
                            <option value="FK">??les Malouines</option>
                            <option value="MP">??les Mariannes du Nord</option>
                            <option value="MH">??les Marshall</option>
                            <option value="UM">??les mineures ??loign??es des ??tats-Unis</option>
                            <option value="SB">??les Salomon</option>
                            <option value="TC">??les Turques-et-Ca??ques</option>
                            <option value="VG">??les Vierges britanniques</option>
                            <option value="VI">??les Vierges des ??tats-Unis</option>
                            <option value="IN">Inde</option>
                            <option value="ID">Indon??sie</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Irlande</option>
                            <option value="IS">Islande</option>
                            <option value="IL">Isra??l</option>
                            <option value="IT">Italie</option>
                        </optgroup>
                        <optgroup label="J">
                            <option value="LY">Jamahiriya arabe libyenne</option>
                            <option value="JM">Jama??que</option>
                            <option value="JP">Japon</option>
                            <option value="JO">Jordanie</option>
                        </optgroup>
                        <optgroup label="K">
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KG">Kirghizistan</option>
                            <option value="KI">Kiribati</option>
                            <option value="KW">Kowe??t</option>
                        </optgroup>
                        <optgroup label="L">
                            <option value="LS">Lesotho</option>
                            <option value="LV">Lettonie</option>
                            <option value="LB">Liban</option>
                            <option value="LR">Lib??ria</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lituanie</option>
                            <option value="LU">Luxembourg</option>
                        </optgroup>
                        <optgroup label="M">
                            <option value="MO">Macao</option>
                            <option value="MG">Madagascar</option>
                            <option value="MY">Malaisie</option>
                            <option value="MW">Malawi</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malte</option>
                            <option value="MA">Maroc</option>
                            <option value="MQ">Martinique</option>
                            <option value="MU">Maurice</option>
                            <option value="MR">Mauritanie</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexique</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolie</option>
                            <option value="MS">Montserrat</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                        </optgroup>
                        <optgroup label="N">
                            <option value="NA">Namibie</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">N??pal</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nig??ria</option>
                            <option value="NU">Niu??</option>
                            <option value="NO">Norv??ge</option>
                            <option value="NC">Nouvelle-Cal??donie</option>
                            <option value="NZ">Nouvelle-Z??lande</option>
                        </optgroup>
                        <optgroup label="O">
                            <option value="OM">Oman</option>
                            <option value="UG">Ouganda</option>
                            <option value="UZ">Ouzb??kistan</option>
                        </optgroup>
                        <optgroup label="P">
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palaos</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papouasie-Nouvelle-Guin??e</option>
                            <option value="PY">Paraguay</option>
                            <option value="NL">Pays-Bas</option>
                            <option value="PE">P??rou</option>
                            <option value="PH">Philippines</option>
                            <option value="PL">Pologne</option>
                            <option value="PF">Polyn??sie fran??aise</option>
                            <option value="PR">Porto Rico</option>
                            <option value="PT">Portugal</option>
                            <option value="TW">Province chinoise de Taiwan</option>
                        </optgroup>
                        <optgroup label="Q">
                            <option value="QA">Qatar</option>
                        </optgroup>
                        <optgroup label="R">
                            <option value="SY">R??publique arabe syrienne</option>
                            <option value="CF">R??publique centrafricaine</option>
                            <option value="KR">R??publique de Cor??e</option>
                            <option value="MD">R??publique de Moldavie</option>
                            <option value="CD">R??publique d??mocratique du Congo</option>
                            <option value="DO">R??publique dominicaine</option>
                            <option value="IR">R??publique islamique d'Iran</option>
                            <option value="KP">R??publique populaire d??mocratique de Cor??e</option>
                            <option value="LA">R??publique Populaire du Laos</option>
                            <option value="CZ">R??publique tch??que</option>
                            <option value="TZ">R??publique-Unie de Tanzanie</option>
                            <option value="RE">R??union</option>
                            <option value="RO">Roumanie</option>
                            <option value="GB">Royaume-Uni</option>
                            <option value="RU">Russie</option>
                            <option value="RW">Rwanda</option>
                        </optgroup>
                        <optgroup label="S">
                            <option value="EH">Sahara occidental</option>
                            <option value="KN">Saint-Christophe-et-Ni??v??s</option>
                            <option value="SM">Saint-Marin</option>
                            <option value="PM">Saint-Pierre-et-Miquelon</option>
                            <option value="VA">Saint-Si??ge (Cit?? du Vatican)</option>
                            <option value="VC">Saint-Vincent-et-les Grenadines</option>
                            <option value="SH">Sainte-H??l??ne</option>
                            <option value="LC">Sainte-Lucie</option>
                            <option value="WS">Samoa</option>
                            <option value="AS">Samoa am??ricaines</option>
                            <option value="ST">Sao Tom??-et-Principe</option>
                            <option value="SN">S??n??gal</option>
                            <option value="CS">Serbie-et-Mont??n??gro</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapour</option>
                            <option value="SK">Slovaquie</option>
                            <option value="SI">Slov??nie</option>
                            <option value="SO">Somalie</option>
                            <option value="SD">Soudan</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SE">Su??de</option>
                            <option value="CH">Suisse</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard et Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                        </optgroup>
                        <optgroup label="T">
                            <option value="TJ">Tadjikistan</option>
                            <option value="TD">Tchad</option>
                            <option value="IO">Territoire britannique de l'oc??an Indien</option>
                            <option value="TF">Territoire Francais du Sud</option>
                            <option value="PS">Territoires palestiniens occup??s</option>
                            <option value="TH">Tha??lande</option>
                            <option value="TL">Timor oriental</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinit??-et-Tobago</option>
                            <option value="TN">Tunisie</option>
                            <option value="TM">Turkm??nistan</option>
                            <option value="TR">Turquie</option>
                            <option value="TV">Tuvalu</option>
                        </optgroup>
                        <optgroup label="U">
                            <option value="UA">Ukraine</option>
                            <option value="UY">Uruguay</option>
                        </optgroup>
                        <optgroup label="V">
                            <option value="VU">Vanuatu</option>
                            <option value="VE">V??n??zu??la</option>
                            <option value="VN">Vietnam</option>
                        </optgroup>
                        <optgroup label="W">
                            <option value="WF">Wallis-et-Futuna</option>
                        </optgroup>
                        <optgroup label="Y">
                            <option value="YE">Y??men</option>
                        </optgroup>
                        <optgroup label="Z">
                            <option value="ZM">Zambie</option>
                            <option value="ZW">Zimbabwe</option>
                        </optgroup>
                    </select>
                </div>

            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('D??ja inscrit ?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Ajouter l\'adresse') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<script src="{{asset('js/autoclompleteAddress.js')}}"></script>