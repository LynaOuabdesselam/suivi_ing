<?php require_once "controllerUserData.php"; ?>

    
<link rel="stylesheet" type= "text/css" href= "Etudiant.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="Etudiant.js"></script>

    <form id="msform" method="post" action="addIntern.php">
	 

    <fieldset>
       <h2 class="fs-title"><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;&nbsp;Informations de base (1/3) </h2>
        
       <div class="col-sm-14">
            <select class="form-control" autocomplete='off' type="text" name="libelle" placeholder="Speciality *" required="required" id="libelle">
              <option value="">Choose Your Speciality * </option>
              <option value="TELECOM">TELECOM</option>
              <option value="ENERGETIQUE">ENERGETIQUE</option>
              <option value="MACS">MACS</option>
              <option value="INFORMATIQUE">INFORMATIQUE</option>
            </select>
            <br>

            <select class="form-control" autocomplete='off' type="text" name="StageAnnee" placeholder="StageAnnee *" required="required" id="libelle">
              <option value="">Internship Year * </option>
              <option value="1st Year">1st Year</option>
              <option value="2nd Year">2nd Year</option>
              <option value="3rd Year">3rd Year</option>
            </select>

            <br>

            <select class="form-control" autocomplete='off' type="text" name="etat" placeholder="etat *" required="required" id="etat">
              <option value="">Internship Status * </option>
              <option value="Done">Done </option>
              <option value="Not yet">Not yet</option>
              
            </select>

            <br>

            <select class="form-control" autocomplete='off' type="text" name="TypeStage" placeholder="TypeStage *" required="required" id="TypeStage">
              <option value="">Internship Type * </option>
              <option value="Engineer">Engineer </option>
              <option value="Other">Other</option>
              
            </select>

            <br>
            <select class="form-control" autocomplete='off' type="text" name="EtudiantCivil" placeholder="EtudiantCivil *" required="required" id="EtudiantCivil">
              <option value="">Choose Your Civility * </option>
              <option value="Mme">Mme</option>
              <option value="Mr">Mr</option>
            </select>
            <br>

        </div>     
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>
       
     <!-- fieldsets -->
     <fieldset>
       <h2 class="fs-title"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Informations de base (2/3) </h2>

       <div class="col-sm-14">
            
        </div>
        
       <input autocomplete='off' type="text" name="EtudiantNumero" placeholder="Student Number *" required="required" id="EtudiantNumero"/>

       <input autocomplete='off' type="text" name="EtudiantNom" placeholder="Nom stagiaire *" required="required" >
       <input autocomplete='off' type="text" name="EtudiantPrenom" placeholder="Prenom stagiaire *" required="required" 
              id="inputPrenom" />
       <input autocomplete='off' type="date" class="datepicker" name="EtudiantDateNais" placeholder="Date de naissance (AAAA-MM-JJ) *" required="required" />
       <input autocomplete='off' type="text" name="EtudiantMail" placeholder="Mail (xyz@mail.fr)" id="EtudiantMail"/>
      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

     <fieldset>
       <h2 class="fs-title"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Informations de base (3/3) </h2>
        
       <input autocomplete='off' type="text" name="EtudiantVilledeNaissance" placeholder="Place of Birth" id="EtudiantVilledeNaissance"/>

       <div class="col-sm-14">
            <select class="form-control" autocomplete='off' type="text" name="EtudiantNation" placeholder="EtudiantNationnalité *" required="required" id="EtudiantNationnalité">
              <option value="">Choose Your Nationality * </option>
              <option value="AFG">Afghane (Afghanistan)</option>
              <option value="ALB">Albanaise (Albanie)</option>
              <option value="DZA">Algérienne (Algérie)</option>
              <option value="DEU">Allemande (Allemagne)</option>
              <option value="USA">Americaine (États-Unis)</option>
              <option value="AND">Andorrane (Andorre)</option>
              <option value="AGO">Angolaise (Angola)</option>
              <option value="ATG">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
              <option value="ARG">Argentine (Argentine)</option>
              <option value="ARM">Armenienne (Arménie)</option>
              <option value="AUS">Australienne (Australie)</option>
              <option value="AUT">Autrichienne (Autriche)</option>
              <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
              <option value="BHS">Bahamienne (Bahamas)</option>
              <option value="BHR">Bahreinienne (Bahreïn)</option>
              <option value="BGD">Bangladaise (Bangladesh)</option>
              <option value="BRB">Barbadienne (Barbade)</option>
              <option value="BEL">Belge (Belgique)</option>
              <option value="BLZ">Belizienne (Belize)</option>
              <option value="BEN">Béninoise (Bénin)</option>
              <option value="BTN">Bhoutanaise (Bhoutan)</option>
              <option value="BLR">Biélorusse (Biélorussie)</option>
              <option value="MMR">Birmane (Birmanie)</option>
              <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
              <option value="BOL">Bolivienne (Bolivie)</option>
              <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
              <option value="BWA">Botswanaise (Botswana)</option>
              <option value="BRA">Brésilienne (Brésil)</option>
              <option value="GBR">Britannique (Royaume-Uni)</option>
              <option value="BRN">Brunéienne (Brunéi)</option>
              <option value="BGR">Bulgare (Bulgarie)</option>
              <option value="BFA">Burkinabée (Burkina)</option>
              <option value="BDI">Burundaise (Burundi)</option>
              <option value="KHM">Cambodgienne (Cambodge)</option>
              <option value="CMR">Camerounaise (Cameroun)</option>
              <option value="CAN">Canadienne (Canada)</option>
              <option value="CPV">Cap-verdienne (Cap-Vert)</option>
              <option value="CAF">Centrafricaine (Centrafrique)</option>
              <option value="CHL">Chilienne (Chili)</option>
              <option value="CHN">Chinoise (Chine)</option>
              <option value="CYP">Chypriote (Chypre)</option>
              <option value="COL">Colombienne (Colombie)</option>
              <option value="COM">Comorienne (Comores)</option>
              <option value="COG">Congolaise (Congo-Brazzaville)</option>
              <option value="COD">Congolaise (Congo-Kinshasa)</option>
              <option value="COK">Cookienne (Îles Cook)</option>
              <option value="CRI">Costaricaine (Costa Rica)</option>
              <option value="HRV">Croate (Croatie)</option>
              <option value="CUB">Cubaine (Cuba)</option>
              <option value="DNK">Danoise (Danemark)</option>
              <option value="DJI">Djiboutienne (Djibouti)</option>
              <option value="DOM">Dominicaine (République dominicaine)</option>
              <option value="DMA">Dominiquaise (Dominique)</option>
              <option value="EGY">Égyptienne (Égypte)</option>
              <option value="ARE">Émirienne (Émirats arabes unis)</option>
              <option value="GNQ">Équato-guineenne (Guinée équatoriale)</option>
              <option value="ECU">Équatorienne (Équateur)</option>
              <option value="ERI">Érythréenne (Érythrée)</option>
              <option value="ESP">Espagnole (Espagne)</option>
              <option value="TLS">Est-timoraise (Timor-Leste)</option>
              <option value="EST">Estonienne (Estonie)</option>
              <option value="ETH">Éthiopienne (Éthiopie)</option>
              <option value="FJI">Fidjienne (Fidji)</option>
              <option value="FIN">Finlandaise (Finlande)</option>
              <option value="FRA">Française (France)</option>
              <option value="GAB">Gabonaise (Gabon)</option>
              <option value="GMB">Gambienne (Gambie)</option>
              <option value="GEO">Georgienne (Géorgie)</option>
              <option value="GHA">Ghanéenne (Ghana)</option>
              <option value="GRD">Grenadienne (Grenade)</option>
              <option value="GTM">Guatémaltèque (Guatemala)</option>
              <option value="GIN">Guinéenne (Guinée)</option>
              <option value="GUY">Guyanienne (Guyana)</option>
              <option value="HTI">Haïtienne (Haïti)</option>
              <option value="GRC">Hellénique (Grèce)</option>
              <option value="HND">Hondurienne (Honduras)</option>
              <option value="HUN">Hongroise (Hongrie)</option>
              <option value="IND">Indienne (Inde)</option>
              <option value="IDN">Indonésienne (Indonésie)</option>
              <option value="IRQ">Irakienne (Iraq)</option>
              <option value="IRN">Iranienne (Iran)</option>
              <option value="IRL">Irlandaise (Irlande)</option>
              <option value="ISL">Islandaise (Islande)</option>
              <option value="ISR">Israélienne (Israël)</option>
              <option value="ITA">Italienne (Italie)</option>
              <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
              <option value="JAM">Jamaïcaine (Jamaïque)</option>
              <option value="JPN">Japonaise (Japon)</option>
              <option value="JOR">Jordanienne (Jordanie)</option>
              <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
              <option value="KEN">Kenyane (Kenya)</option>
              <option value="KGZ">Kirghize (Kirghizistan)</option>
              <option value="KIR">Kiribatienne (Kiribati)</option>
              <option value="KNA">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
              <option value="KWT">Koweïtienne (Koweït)</option>
              <option value="LAO">Laotienne (Laos)</option>
              <option value="LSO">Lesothane (Lesotho)</option>
              <option value="LVA">Lettone (Lettonie)</option>
              <option value="LBN">Libanaise (Liban)</option>
              <option value="LBR">Libérienne (Libéria)</option>
              <option value="LBY">Libyenne (Libye)</option>
              <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
              <option value="LTU">Lituanienne (Lituanie)</option>
              <option value="LUX">Luxembourgeoise (Luxembourg)</option>
              <option value="MKD">Macédonienne (Macédoine)</option>
              <option value="MYS">Malaisienne (Malaisie)</option>
              <option value="MWI">Malawienne (Malawi)</option>
              <option value="MDV">Maldivienne (Maldives)</option>
              <option value="MDG">Malgache (Madagascar)</option>
              <option value="MLI">Maliennes (Mali)</option>
              <option value="MLT">Maltaise (Malte)</option>
              <option value="MAR">Marocaine (Maroc)</option>
              <option value="MHL">Marshallaise (Îles Marshall)</option>
              <option value="MUS">Mauricienne (Maurice)</option>
              <option value="MRT">Mauritanienne (Mauritanie)</option>
              <option value="MEX">Mexicaine (Mexique)</option>
              <option value="FSM">Micronésienne (Micronésie)</option>
              <option value="MDA">Moldave (Moldovie)</option>
              <option value="MCO">Monegasque (Monaco)</option>
              <option value="MNG">Mongole (Mongolie)</option>
              <option value="MNE">Monténégrine (Monténégro)</option>
              <option value="MOZ">Mozambicaine (Mozambique)</option>
              <option value="NAM">Namibienne (Namibie)</option>
              <option value="NRU">Nauruane (Nauru)</option>
              <option value="NLD">Néerlandaise (Pays-Bas)</option>
              <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
              <option value="NPL">Népalaise (Népal)</option>
              <option value="NIC">Nicaraguayenne (Nicaragua)</option>
              <option value="NGA">Nigériane (Nigéria)</option>
              <option value="NER">Nigérienne (Niger)</option>
              <option value="NIU">Niuéenne (Niue)</option>
              <option value="PRK">Nord-coréenne (Corée du Nord)</option>
              <option value="NOR">Norvégienne (Norvège)</option>
              <option value="OMN">Omanaise (Oman)</option>
              <option value="UGA">Ougandaise (Ouganda)</option>
              <option value="UZB">Ouzbéke (Ouzbékistan)</option>
              <option value="PAK">Pakistanaise (Pakistan)</option>
              <option value="PLW">Palaosienne (Palaos)</option>
              <option value="PSE">Palestinienne (Palestine)</option>
              <option value="PAN">Panaméenne (Panama)</option>
              <option value="PNG">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
              <option value="PRY">Paraguayenne (Paraguay)</option>
              <option value="PER">Péruvienne (Pérou)</option>
              <option value="PHL">Philippine (Philippines)</option>
              <option value="POL">Polonaise (Pologne)</option>
              <option value="PRT">Portugaise (Portugal)</option>
              <option value="QAT">Qatarienne (Qatar)</option>
              <option value="ROU">Roumaine (Roumanie)</option>
              <option value="RUS">Russe (Russie)</option>
              <option value="RWA">Rwandaise (Rwanda)</option>
              <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
              <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
              <option value="VCT">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
              <option value="SLB">Salomonaise (Îles Salomon)</option>
              <option value="SLV">Salvadorienne (Salvador)</option>
              <option value="WSM">Samoane (Samoa)</option>
              <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
              <option value="SAU">Saoudienne (Arabie saoudite)</option>
              <option value="SEN">Sénégalaise (Sénégal)</option>
              <option value="SRB">Serbe (Serbie)</option>
              <option value="SYC">Seychelloise (Seychelles)</option>
              <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
              <option value="SGP">Singapourienne (Singapour)</option>
              <option value="SVK">Slovaque (Slovaquie)</option>
              <option value="SVN">Slovène (Slovénie)</option>
              <option value="SOM">Somalienne (Somalie)</option>
              <option value="SDN">Soudanaise (Soudan)</option>
              <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
              <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
              <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
              <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
              <option value="SWE">Suédoise (Suède)</option>
              <option value="CHE">Suisse (Suisse)</option>
              <option value="SUR">Surinamaise (Suriname)</option>
              <option value="SWZ">Swazie (Swaziland)</option>
              <option value="SYR">Syrienne (Syrie)</option>
              <option value="TJK">Tadjike (Tadjikistan)</option>
              <option value="TZA">Tanzanienne (Tanzanie)</option>
              <option value="TCD">Tchadienne (Tchad)</option>
              <option value="CZE">Tchèque (Tchéquie)</option>
              <option value="THA">Thaïlandaise (Thaïlande)</option>
              <option value="TGO">Togolaise (Togo)</option>
              <option value="TON">Tonguienne (Tonga)</option>
              <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
              <option value="TUN">Tunisienne (Tunisie)</option>
              <option value="TKM">Turkmène (Turkménistan)</option>
              <option value="TUR">Turque (Turquie)</option>
              <option value="TUV">Tuvaluane (Tuvalu)</option>
              <option value="UKR">Ukrainienne (Ukraine)</option>
              <option value="URY">Uruguayenne (Uruguay)</option>
              <option value="VUT">Vanuatuane (Vanuatu)</option>
              <option value="VAT">Vaticane (Vatican)</option>
              <option value="VEN">Vénézuélienne (Venezuela)</option>
              <option value="VNM">Vietnamienne (Viêt Nam)</option>
              <option value="YEM">Yéménite (Yémen)</option>
              <option value="ZMB">Zambienne (Zambie)</option>
              <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
            </select>
            <br>
      </div>    

       <input autocomplete='off' type="text" name="EtudiantTel" placeholder="Student Telephone Number*" required="required"/>
       <input autocomplete='off' type="text" name="EtudiantFax" placeholder="Student Fax Number" />
       
      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

     <fieldset>
       <h2 class="fs-title"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Student Address </h2>
        
       <input autocomplete='off' type="text" name="EtudiantAdresse" placeholder="Student Address*"  required="required"/>
       <input autocomplete='off' type="text" name="EtudiantBatiment" placeholder="Student Batiment*"/>
       <input autocomplete='off' type="text" name="EtudiantCP" placeholder="Zip Code*" required="required" >
       <input autocomplete='off' type="text" name="EtudiantVille" placeholder="Student City*" required="required"/>

       <div class="col-sm-14">
            <select class="form-control" autocomplete='off' type="text" name="EtudiantPays" placeholder="Student Country* *" required="required" id="EtudiantPays">
              <option value="">Choose Your Country * </option>
              <option value="AFG">Afghanistan</option>
              <option value="ALA">Åland Islands</option>
              <option value="ALB">Albanie</option>
              <option value="DZA">Algérie</option>
              <option value="ASM">Samoa</option>
              <option value="AND">Andorre</option>
              <option value="AGO">Angola</option>
              <option value="AIA">Anguilla</option>
              <option value="ATA">Antarctique</option>
              <option value="ATG">Antigua et Barbuda</option>
              <option value="ARG">Argentine</option>
              <option value="ARM">Arménie</option>
              <option value="ABW">Aruba</option>
              <option value="AUS">Australie</option>
              <option value="AUT">Autriche</option>
              <option value="AZE">Azerbaïdjan</option>
              <option value="BHS">Bahamas</option>
              <option value="BHR">Bahrain</option>
              <option value="BGD">Bangladesh</option>
              <option value="BRB">Barbade</option>
              <option value="BLR">Belarus</option>
              <option value="BEL">Belgique</option>
              <option value="BLZ">Belize</option>
              <option value="BEN">Bénin</option>
              <option value="BMU">Bermuda</option>
              <option value="BTN">Bhutan</option>
              <option value="BOL">Bolivie</option>
              <option value="BES">Bonaire, Saint-Eustache et Saba</option>
              <option value="BIH">Bosnie-Herzégovine</option>
              <option value="BWA">Botswana</option>
              <option value="BVT">Île Bouvet</option>
              <option value="BRA">Brésil</option>
              <option value="IOT">Territoire britannique de l'océan Indien</option>
              <option value="BRN">Brunéi Darussalam</option>
              <option value="BGR">Bulgarie</option>
              <option value="BFA">Burkina Faso</option>
              <option value="BDI">Burundi</option>
              <option value="KHM">Cambodge</option>
              <option value="CMR">Cameroun</option>
              <option value="CAN">Canada</option>
              <option value="CPV">Cap-Vert</option>
              <option value="CYM">Îles Caïmans</option>
              <option value="CAF">République centrafricaine</option>
              <option value="TCD">Tchad</option>
              <option value="CHL">Chili</option>
              <option value="CHN">Chine</option>
              <option value="CXR">Île Christmas</option>
              <option value="CCK">Îles Cocos (Keeling)</option>
              <option value="COL">Colombie</option>
              <option value="COM">Comores</option>
              <option value="COG">Congo</option>
              <option value="COD">Congo, République démocratique du Congo</option>
              <option value="COK">Îles Cook</option>
              <option value="CRI">Costa Rica</option>
              <option value="CIV">Côte d'Ivoire</option>
              <option value="HRV">Croatie</option>
              <option value="CUB">Cuba</option>
              <option value="CUW">Curaçao</option>
              <option value="CYP">Chypre</option>
              <option value="CZE">République tchèque</option>
              <option value="DNK">Danemark</option>
              <option value="DJI">Djibouti</option>
              <option value="DMA">Dominique</option>
              <option value="DOM">République dominicaine</option>
              <option value="ECU">Équateur</option>
              <option value="EGY">Égypte</option>
              <option value="SLV">El Salvador</option>
              <option value="GNQ">Guinée équatoriale</option>
              <option value="ERI">Érythrée</option>
              <option value="EST">Estonie</option>
              <option value="ETH">Éthiopie</option>
              <option value="FLK">Îles Falkland (Malvinas)</option>
              <option value="FRO">Îles Féroé</option>
              <option value="FJI">Fidji</option>
              <option value="FIN">Finlande</option>
              <option value="FRA">France</option>
              <option value="GUF">Guyane française</option>
              <option value="PYF">Polynésie française</option>
              <option value="ATF">Terres australes françaises</option>
              <option value="GAB">Gabon</option>
              <option value="GMB">Gambie</option>
              <option value="GEO">Géorgie</option>
              <option value="DEU">Allemagne</option>
              <option value="GHA">Ghana</option>
              <option value="GIB">Gibraltar</option>
              <option value="GRC">Grèce</option>
              <option value="GRL">Groenland</option>
              <option value="GRD">Grenade</option>
              <option value="GLP">Guadeloupe</option>
              <option value="GUM">Guam</option>
              <option value="GTM">Guatemala</option>
              <option value="GGY">Guernesey</option>
              <option value="GIN">Guinée</option>
              <option value="GNB">Guinée-Bissau</option>
              <option value="GUY">Guyane</option>
              <option value="HTI">Haïti</option>
              <option value="HMD">Île Heard et îles McDonald</option>
              <option value="VAT">Saint-Siège (État de la Cité du Vatican)</option>
              <option value="HND">Honduras</option>
              <option value="HKG">Hong Kong</option>
              <option value="HUN">Hongrie</option>
              <option value="ISL">Islande</option>
              <option value="IND">Inde</option>
              <option value="IDN">Indonésie</option>
              <option value="IRN">Iran, République islamique d Iran'</option>
              <option value="IRQ">Irak</option>
              <option value="IRL">Irlande</option>
              <option value="IMN">Île de Man</option>
              <option value="ISR">Israël</option>
              <option value="ITA">Italie</option>
              <option value="JAM">Jamaïque</option>
              <option value="JPN">Japon</option>
              <option value="JEY">Jersey</option>
              <option value="JOR">Jordanie</option>
              <option value="KAZ">Kazakhstan</option>
              <option value="KEN">Kenya</option>
              <option value="KIR">Kiribati</option>
              <option value="PRK">Corée, République populaire démocratique de Corée</option>
              <option value="KOR">Corée, République de Corée</option>
              <option value="KWT">Koweït</option>
              <option value="KGZ">Kirghizistan</option>
              <option value="LAO">République démocratique populaire lao</option>
              <option value="LVA">Lettonie</option>
              <option value="LBN">Liban</option>
              <option value="LSO">Lesotho</option>
              <option value="LBR">Liberia</option>
              <option value="LBY">Libye</option>
              <option value="LIE">Liechtenstein</option>
              <option value="LTU">Lituanie</option>
              <option value="LUX">Luxembourg</option>
              <option value="MAC">Macao</option>
              <option value="MKD">Macédoine, ancienne République de Yougoslavie</option>
              <option value="MDG">Madagascar</option>
              <option value="MWI">Malawi</option>
              <option value="MYS">Malaisie</option>
              <option value="MDV">Maldives</option>
              <option value="MLI">Mali</option>
              <option value="MLT">Malte</option>
              <option value="MHL">Îles Marshall</option>
              <option value="MTQ">Martinique</option>
              <option value="MRT">Mauritanie</option>
              <option value="MUS">Maurice</option>
              <option value="MYT">Mayotte</option>
              <option value="MEX">Mexique</option>
              <option value="FSM">Micronésie, États fédérés de Micronésie</option>
              <option value="MDA">Moldavie, République de Moldavie</option>
              <option value="MCO">Monaco</option>
              <option value="MNG">Mongolie</option>
              <option value="MNE">Monténégro</option>
              <option value="MSR">Montserrat</option>
              <option value="MAR">Maroc</option>
              <option value="MOZ">Mozambique</option>
              <option value="MMR">Myanmar</option>
              <option value="NAM">Namibie</option>
              <option value="NRU">Nauru</option>
              <option value="NPL">Népal</option>
              <option value="NLD">Pays-Bas</option>
              <option value="NCL">Nouvelle-Calédonie</option>
              <option value="NZL">Nouvelle-Zélande</option>
              <option value="NIC">Nicaragua</option>
              <option value="NER">Niger</option>
              <option value="NGA">Nigéria</option>
              <option value="NIU">Niue</option>
              <option value="NFK">Île Norfolk</option>
              <option value="MNP">Îles Mariannes du Nord</option>
              <option value="NOR">Norvège</option>
              <option value="OMN">Oman</option>
              <option value="PAK">Pakistan</option>
              <option value="PLW">Palau</option>
              <option value="PSE">Territoire palestinien occupé</option>
              <option value="PAN">Panama</option>
              <option value="PNG">Papouasie-Nouvelle-Guinée</option>
              <option value="PRY">Paraguay</option>
              <option value="PER">Pérou</option>
              <option value="PHL">Philippines</option>
              <option value="PCN">Pitcairn</option>
              <option value="POL">Pologne</option>
              <option value="PRT">Portugal</option>
              <option value="PRI">Porto Rico</option>
              <option value="QAT">Qatar</option>
              <option value="REU">Réunion</option>
              <option value="ROU">Roumanie</option>
              <option value="RUS">Fédération de Russie</option>
              <option value="RWA">Rwanda</option>
              <option value="BLM">Saint Barthélemy</option>
              <option value="SHN">Sainte-Hélène, Ascension et Tristan da Cunha</option>
              <option value="KNA">Saint-Kitts-et-Nevis</option>
              <option value="LCA">Sainte-Lucie</option>
              <option value="MAF">Saint-Martin (partie française)</option>
              <option value="SPM">Saint-Pierre-et-Miquelon</option>
              <option value="VCT">Saint-Vincent-et-les Grenadines</option>
              <option value="WSM">Samoa</option>
              <option value="SMR">Saint-Marin</option>
              <option value="STP">Sao Tomé-et-Principe</option>
              <option value="SAU">Arabie saoudite</option>
              <option value="SEN">Sénégal</option>
              <option value="SRB">Serbie</option>
              <option value="SYC">Seychelles</option>
              <option value="SLE">Sierra Leone</option>
              <option value="SGP">Singapour</option>
              <option value="SXM">Sint Maarten (partie néerlandaise)</option>
              <option value="SVK">Slovaquie</option>
              <option value="SVN">Slovénie</option>
              <option value="SLB">Îles Salomon</option>
              <option value="SOM">Somalie</option>
              <option value="ZAF">Afrique du Sud</option>
              <option value="SGS">Géorgie du Sud et îles Sandwich du Sud</option>
              <option value="SSD">Soudan du Sud</option>
              <option value="ESP">Espagne</option>
              <option value="LKA">Sri Lanka</option>
              <option value="SDN">Soudan</option>
              <option value="SUR">Suriname</option>
              <option value="SJM">Svalbard et Jan Mayen</option>
              <option value="SWZ">Swaziland</option>
              <option value="SWE">Suède</option>
              <option value="CHE">Suisse</option>
              <option value="SYR">République arabe syrienne</option>
              <option value="TWN">Taïwan, province de Chine</option>
              <option value="TJK">Tadjikistan</option>
              <option value="TZA">Tanzanie, République-Unie de Tanzanie</option>
              <option value="THA">Thaïlande</option>
              <option value="TLS">Timor-Leste</option>
              <option value="TGO">Togo</option>
              <option value="TKL">Tokelau</option>
              <option value="TON">Tonga</option>
              <option value="TTO">Trinité-et-Tobago</option>
              <option value="TUN">Tunisie</option>
              <option value="TUR">Turquie</option>
              <option value="TKM">Turkménistan</option>
              <option value="TCA">Îles Turques et Caïques</option>
              <option value="TUV">Tuvalu</option>
              <option value="UGA">Ouganda</option>
              <option value="UKR">Ukraine</option>
              <option value="ARE">Émirats arabes unis</option>
              <option value="GBR">Royaume-Uni</option>
              <option value="USA">États-Unis</option>
              <option value="UMI">Îles mineures éloignées des États-Unis</option>
              <option value="URY">Uruguay</option>
              <option value="UZB">Ouzbékistan</option>
              <option value="VUT">Vanuatu</option>
              <option value="VEN">Venezuela, République bolivarienne</option>
              <option value="VNM">Viet Nam</option>
              <option value="VGB">Îles Vierges britanniques</option>
              <option value="VIR">Îles Vierges américaines.</option>
              <option value="WLF">Wallis et Futuna</option>
              <option value="ESH">Sahara occidental</option>
              <option value="YEM">Yémen</option>
              <option value="ZMB">Zambie</option>
              <option value="ZWE">Zimbabwe</option>
            </select>
            <br>
          </div>       
      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

     <fieldset>
       <h2 class="fs-title"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;&nbsp;Contact in case of emergency </h2>
        
       <input autocomplete='off' type="text" name="ContactUrgenceNom" placeholder="Full Name*" required="required" />
       <input autocomplete='off' type="text" name="ContactUrgenceTel" placeholder="Telephone Number*" required="required" />
    
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

       
     <fieldset>
       <h2 class="fs-title"><i class="fa fa-handshake" aria-hidden="true"></i>&nbsp;&nbsp;Insurance Informations</h2>

       <input autocomplete='off' type="text" name="AssuranceNom" placeholder="Insurance Name" />
       <input autocomplete='off' type="text" name="AssuranceNumero" placeholder="Insurance Number" />
       <input autocomplete='off' type="text" name="AssuranceCaisse" placeholder="Insurance Fund"/>

      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <button type="submit" class="btn btn-success"> Enregistrer </button> 
     </fieldset>
   </form>

