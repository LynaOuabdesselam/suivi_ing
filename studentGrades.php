<?php
//  require_once "createTablenew.php";
//  require_once "readCSVnew1.php";
    function GetRequest($nomvar,$defaut=""){

        if (isset($_REQUEST[$nomvar]))
        { $ret=$_REQUEST[$nomvar];
        }
        else   $ret=$defaut;

        return $ret;
    }
    function connectToBD(){ //Connexion à la Bdd

        $objetPdo = new PDO('mysql:host=localhost;dbname=applietudiant', 'root', '');
        if (!$objetPdo) echo "Echec de connexion à la base de données";
        $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $objetPdo;
    }
    $idEtudiant = GetRequest('idEtudiant',11930377); //Si pas de num etudiant en parametre on fixe un num par defaut
    $paramAction=GetRequest("paramAction","");

    function getInfosEtudiant($idEtudiant){
        $objetPdo=connectToBD();
        $sql="SELECT * from juryT2 where idEtudiant=$idEtudiant";
        // Requete

        // Execution de la requete

        $stmt = $objetPdo->prepare($sql);
        $executeISOk = $stmt->execute();

        // Recuperation des resultats

        $infos = $stmt->fetchAll();
        if (count($infos) > 0){

            return $infos[0];
        }

        return null;
    }

    function updateTable($table, $new_info, $where,$objetPdo=null){
        if ($objetPdo==null)
        $objetPdo = connectToBD();
        $sql = "update  $table  set  ";
        $i = 0;
        $arrVal=array();
        foreach ($new_info as $key => $val) {

            if ($i > 0)
                $sql .= ", ";
            $i ++;
            $sql .= " $key= :$key ";
            $arrVal[":$key"] = $val;
        }
        $sql .= "  where $where";

        // Maj

        $stmt = $objetPdo->prepare($sql);
        $stmt->execute($arrVal);

    }

    function insertIntoTable($table, $new_info, $to_exclude,$objetPdo=null)
    {
        if ($objetPdo==null)
            $objetPdo = connectToBD();
            $i = 0;
        $sql = "insert into  $table (  ";
        $sqlVal = " values ( ";        
        foreach ($new_info as $key => $val) {
            if ($to_exclude && array_search($key ,$to_exclude)!==false)
                continue;
            if ($i > 0) {
                $sql .= ", ";
                $sqlVal .= ", ";
            }
            $i ++;
            $sql .= " $key ";
            $sqlVal .= " :$key ";
            $arrVal[":$key"] = $val;
        }

        $sql .= ") " . $sqlVal . ")";

        $stmt = $objetPdo->prepare($sql);
        $stmt->execute($sqlVal);

        $new_id = $pdo->lastInsertId();

        return $new_id;
    }

    function updateForm1($idEtudiant) {
        $arrVal=array();
     
        $arrVal['nom']=GetRequest("nom");
        $arrVal['prenom']=GetRequest("prenom");
        $arrVal['dettes']=GetRequest(" dettes");
        $arrVal['credits']=GetRequest("credits");
        $arrVal['redoublants']=GetRequest("redoublants");
        $arrVal['anneeMoyenne']=GetRequest("anneeMoyenne");
        $arrVal['anneeResultat']=GetRequest("anneeResultat");
        $arrVal['TOEICblanc1']=GetRequest("TOEICblanc1");
        $arrVal['TOEICblanc2']=GetRequest("TOEICblanc2");
        $arrVal['TOEICofficiel']=GetRequest("TOEICofficiel");
        $arrVal['anglaisResultats']=GetRequest("anglaisResultats");
        $arrVal['bddTP']=GetRequest("bddTP");
        $arrVal['bddCoef']=GetRequest("bddCoef");
        $arrVal['bdd']=GetRequest("bdd");
        $arrVal['semP']=GetRequest("semP");
        $arrVal['semTP']=GetRequest("semTP");
        $arrVal['semCoef']=GetRequest(" semCoef");
        $arrVal['sem']=GetRequest("sem");
        $arrVal['ueOutilsInformatiques2']=GetRequest("ueOutilsInformatiques2");
        $arrVal['ueOutilsInformatiques2Reultats']=GetRequest("ueOutilsInformatiques2Reultats");
        $arrVal['antennesP']=GetRequest("antennesP");
        $arrVal['antennesTP']=GetRequest("antennesTP");
        $arrVal['antennesCoef']=GetRequest("antennesCoef");
        $arrVal['antennes']=GetRequest("antennes");
        $arrVal['theorieInofrmationP']=GetRequest("theorieInofrmationP");
        $arrVal['theorieInofrmationCoef']=GetRequest("theorieInofrmationCoef");
    

        $arrVal['theorieInofrmation']=GetRequest("theorieInofrmation");
        $arrVal['tOptP']=GetRequest("tOptP");
        $arrVal['tOptTP']=GetRequest("tOptTP");
        $arrVal['tOptCoef']=GetRequest("tOptCoef");
        $arrVal['tOpt']=GetRequest("tOpt");
        $arrVal['ueTelecom2']=GetRequest("ueTelecom2");
        $arrVal['ueTelecom2Resultats']=GetRequest(" ueTelecom2Resultats");
        $arrVal['tnsP']=GetRequest("tnsP");
        $arrVal['tnsTP']=GetRequest("tnsTP");
        $arrVal['tnsCoef']=GetRequest("tnsCoef");
        $arrVal['tns']=GetRequest("tns");
        $arrVal['tsaP']=GetRequest("tsaP");
        $arrVal['tsaTP']=GetRequest("tsaTP");
        $arrVal['tsaCoef']=GetRequest("tsaCoef");
        $arrVal['tsa']=GetRequest("tsa");
        $arrVal['ueTraitementSignal2']=GetRequest("ueTraitementSignal2");
    

        $arrVal['ueTraitementSignal2Resultats']=GetRequest("ueTraitementSignal2Resultats");
        $arrVal['anglaisP']=GetRequest("anglaisP");
        $arrVal['anglaisCC']=GetRequest("anglaisCC");
        $arrVal['anglaisCoef']=GetRequest("anglaisCoef");
        $arrVal[' anglais']=GetRequest(" anglais");
        $arrVal['ueLanguesVivante1']=GetRequest("ueLanguesVivante1Resultat");
        $arrVal['ueTelecom2Resultats']=GetRequest(" ueTelecom2Resultats");
        $arrVal['introAnalyseDonneesTP']=GetRequest("introAnalyseDonneesTP");
        $arrVal['introAnalyseDonneesCoef']=GetRequest("introAnalyseDonneesCoef");
        $arrVal['introAnalyseDonnees']=GetRequest("introAnalyseDonnees");
        $arrVal['ethiqueP']=GetRequest("ethiqueP");
        $arrVal['ethiqueCoef']=GetRequest("ethiqueCoef");
        $arrVal['ethique']=GetRequest("ethique");
        $arrVal['introSociologieP']=GetRequest("introSociologieP");
        $arrVal['introSociologieCoef']=GetRequest("introSociologieCoef");

        $arrVal[' introSociologie']=GetRequest(" introSociologie");
        $arrVal['ueCultureEntreprise']=GetRequest("ueCultureEntreprise");
        $arrVal['ueCultureEntrepriseResultat']=GetRequest(" ueCultureEntrepriseResultat");
        $arrVal['s3Moyenne']=GetRequest("s3Moyenne");
        $arrVal['s3Resultat']=GetRequest("s3Resultat");
        $arrVal['javaProjet']=GetRequest("javaProjet");
        $arrVal['javaTP']=GetRequest("javaTP");
        $arrVal['javaCoef']=GetRequest("javaCoef");
        $arrVal['java']=GetRequest("java");
        $arrVal['web2TP']=GetRequest("web2TP");
        $arrVal['web2Coef']=GetRequest("web2Coef");

        $arrVal[' web2']=GetRequest(" web2");
        $arrVal['ueOutilsInformatiques3']=GetRequest("ueOutilsInformatiques3");
        $arrVal['ueOutilsInformatiques3Resultats']=GetRequest(" ueOutilsInformatiques3Resultats");
        $arrVal['modelMarkovP']=GetRequest("modelMarkovP");
        $arrVal['modelMarkovCoef']=GetRequest("modelMarkovCoef");
        $arrVal['modelMarkov']=GetRequest("modelMarkov");
        $arrVal['routageTP']=GetRequest("routageTP");
        $arrVal['routageCoef']=GetRequest("routageCoef");
        $arrVal['routage']=GetRequest("routage");
        $arrVal['rtd2P']=GetRequest("rtd2P");
        $arrVal['rtd2TP']=GetRequest("rtd2TP");


        $arrVal['  rtd2Coef']=GetRequest("  rtd2Coef");
        $arrVal[' rtd2']=GetRequest(" rtd2");
        $arrVal['ueReseaux2']=GetRequest(" ueReseaux2");
        $arrVal['ueReseaux2Resultat']=GetRequest("ueReseaux2Resultat");
        $arrVal['commNumP1']=GetRequest("commNumP1");
        $arrVal['commNumP2']=GetRequest("commNumP2");
        $arrVal['commNumTP']=GetRequest("commNumTP");
        $arrVal[' commNumCoef']=GetRequest(" commNumCoef");
        $arrVal['commNum']=GetRequest("commNum");
        $arrVal['fhlsP']=GetRequest("fhlsP");
        $arrVal['fhlsCoef']=GetRequest("fhlsCoef");
        
        $arrVal['  fhls']=GetRequest("  fhls");
        $arrVal[' artP']=GetRequest(" artP");
        $arrVal['artCoef']=GetRequest(" artCoef");
        $arrVal['art']=GetRequest("art");
        $arrVal['ueTelecom3']=GetRequest("ueTelecom3");
        $arrVal['ueTelecom3Resultats']=GetRequest("ueTelecom3Resultats");
        $arrVal['cdceP']=GetRequest("cdceP");
        $arrVal[' cdceTP']=GetRequest(" cdceTP");
        $arrVal['cdceCoef']=GetRequest("cdceCoef");
        $arrVal['cdce']=GetRequest("cdce");
        $arrVal['dspTP']=GetRequest("dspTP");

        $arrVal[' dspCoef']=GetRequest("  dspCoef");
        $arrVal[' dsp']=GetRequest(" dsp");
        $arrVal['ueTraitementSignal3Resultats']=GetRequest(" ueTraitementSignal3Resultats");
        $arrVal['rapportProjet']=GetRequest("rapportProjet");
        $arrVal['exposeProjet']=GetRequest("exposeProjet");
        $arrVal['TPProjet']=GetRequest("TPProjet");
        $arrVal['projetThematique']=GetRequest("projetThematique");
        $arrVal[' ueProjetThematique']=GetRequest(" ueProjetThematique");
        $arrVal['ueProjetThematiqueResultat']=GetRequest("ueProjetThematiqueResultat");
        $arrVal['anglais1CC']=GetRequest("anglais1CC");
        $arrVal['anglais1']=GetRequest("anglais1");

        $arrVal[' anglaisRenforceCC']=GetRequest("  anglaisRenforceCC");
        $arrVal[' anglaisRenforceCoef']=GetRequest(" anglaisRenforceCoef");
        $arrVal['anglaisRenforce']=GetRequest(" anglaisRenforce");
        $arrVal['ouvertureLinguistiqueCC']=GetRequest("ouvertureLinguistiqueCC");
        $arrVal['ouvertureLinguistiqueCoef']=GetRequest("ouvertureLinguistiqueCoef");
        $arrVal['ouvertureLinguistique']=GetRequest("ouvertureLinguistique");
        $arrVal['anglais2']=GetRequest("anglais2");
        $arrVal['  optionAnglais']=GetRequest("  optionAnglais");
        $arrVal['ueLanguesVivante8']=GetRequest("ueLanguesVivante8");
        $arrVal['ueLanguesVivante8Resultat']=GetRequest("ueLanguesVivante8Resultat");
        $arrVal['projetCreationEntrepriseCoef']=GetRequest("projetCreationEntrepriseCoef");


        
        $arrVal[' projetCreationEntrepriseCC']=GetRequest("  projetCreationEntrepriseCC");
        $arrVal[' projetCreationEntreprise']=GetRequest(" projetCreationEntreprise");
        $arrVal['qseP']=GetRequest(" qseP");
        $arrVal['qseCoef']=GetRequest("qseCoef");
        $arrVal['qse']=GetRequest("qse");
        $arrVal['santeSecuriteTravailP']=GetRequest("santeSecuriteTravailP");
        $arrVal['santeSecuriteTravailCoef']=GetRequest("santeSecuriteTravailCoef");
        $arrVal['  santeSecuriteTravail']=GetRequest("  santeSecuriteTravail");
        $arrVal['ueCultureEntreprise8']=GetRequest("ueCultureEntreprise8");
        $arrVal['ueLanguesVivante8Resultat']=GetRequest("ueLanguesVivante8Resultat");
        $arrVal['ueCultureEntreprise8Resultat']=GetRequest("ueCultureEntreprise8Resultat");

        $arrVal['s4Moyenne']=GetRequest("s4Moyenne");
        $arrVal['s4Resultat']=GetRequest("s4Resultat");
        $arrVal['  commentaires']=GetRequest("  commentaires");
        $arrVal['dettesSpeT2']=GetRequest("dettesSpeT2");
        $arrVal['remarques']=GetRequest("remarques");
        $arrVal['reg_date']=GetRequest("reg_date");

 
    
        
  
        updateTable("juryT2", $arrVal, "idEtudiant=$idEtudiant");
    }


    function buildInput($libelle,$editable, $idInput, $value, $size='',$maxlength='', $extra='') {
        if ($libelle)
            echo "<tr><td>$libelle</td><td>";
        if ($editable) {

            echo  "<input type='text'  name='$idInput'  id='$idInput' value=\"" . HTMLEncode($value) ."\""  ;

            if( $size!='')   {

                echo   " size='$size' ";

            }


            if( $maxlength!='')
                echo   " maxlength='$maxlength' ";

            echo $extra;
            echo " />";
        }else {

            echo  HTMLEncode($value);

        }
        if ($libelle)
            echo "</td></tr>
    ";

    }

    function HTMLEncode($str,$code=0)
    {
        $ret=htmlspecialchars($str, ENT_QUOTES);

        return $ret;

    }

    if ($paramAction=="valider1") {
        updateForm1($idEtudiant);
    }
?>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        h4 {
         text-align: center;
        }
    </style>
    <script>
        function annuler(){
            document.form1.paramAction.value='annuler';
            document.form1.submit();

            }



            function editer(numform){
            document.form1.paramAction.value='editer'+numform;
            document.form1.submit();

            }


            function valider1()
            {

            var valeur1 = $("#EtudiantMail").val();
            var valeur2 = $("#EtudiantTel").val();
            var valeur3 = $("#EtudiantAdresse").val();
            var valeur4 = $("#EtudiantCP").val();

            if(isNaN(valeur1))
            {
                alert("Le format du mail du Etudiant n'est pas respecte");
                $("#EtudiantTel").focus();

                return false;
            }

            if(isNaN(valeur2))
            {
                alert("Le format du numero de telephone du Etudiant n'est pas respecte");
                $("#EtudiantFax").focus();

                return false;
            }

            if(isNaN(valeur4))
            {
                alert("Le format du numero de code postal du Etudiant n'est pas respecte");
                $("#EtudiantCP").focus();

                return false;
            }
            document.form1.paramAction.value='valider1';
            document.form1.submit();

            }

            function putGreenBackground() {
                $('td').each(
                    function(i){
                        if ($(this).value == "ADM"){
                            $('tr:eq(' + (i-1) + ')').addClass('rowBeforeControlVariable');
                        }
                    });
            }
    </script>
</head>


<?php
    $infos=getInfosEtudiant($idEtudiant);
?>

<head>
<style>

    .lignecoloree {
        background-color:#ff6f69;
    }
    .lignenormale {
        background-color:#96ceb4 ;
    }
 
           
p.solid {
border-style: solid;
border-width: 5px;
 color: black;
  text-align: center;
  width:100%
}
p.groove {
    
border-style: groove;
border-width: 3px;
}
p.S {
border-style: groove;
background-color:rgb(120, 120, 120);
color: white;
text-align: center;
}
 
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  text-align: left;
}

div.red {
 background-color: red; 
}

div.green {
  background-color: green; 
}



</style>
</head>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>


<body>



<p class="solid">RELEVE DE NOTES ET RESULTATS</p>
<p class="groove" >
<br>
   <?php echo " NOM : ".$editable=$paramAction=="editer1";
   buildInput("", $editable, 'nom', $infos['nom'])
   ?>

<?php echo " PRENOM : ".$editable=$paramAction=="editer1";
   buildInput("", $editable, 'prenom', $infos['prenom'])
  ?>
</br>

<br>
  
   <?php  echo "N°Etudiant : ".$idEtudiant?>  
</br>
</p>


<p class="S"> Notes et résultats semestre S1 </p>  


  
  <table class="table">
    <thead style="background-color:lightgray;">
  
  
  
  <tr>
    <th></th>
    <th>Coeficient</th>
    <th>Note TP </th>
    <th>Note Partiel</th>
    <th>Note Final </th>
    <th>Resultats</th>
    
  </tr>
  </thead>
    <tbody>
    <tr class="<?php echo $infos['ueOutilsInformatiques2Reultats'] == 'ADM' ? 'lignenormale': 'lignecoloree';?>">
    <td><strong>U.E Outils Informatique 2</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueOutilsInformatiques2', $infos['ueOutilsInformatiques2'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueOutilsInformatiques2Reultats', $infos['ueOutilsInformatiques2Reultats'])
   ?></strong></td>
  </tr>
 <tr>
    <td>Base de Données</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'bddCoef', $infos['bddCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'bddTP', $infos['bddTP'])?>
    </td>
    <td></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'bdd', $infos['bdd'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Systèmes d'Exploitation Multitaches</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'semCoef', $infos['semCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'semTP', $infos['semTP'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'semP', $infos['semP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'bdd', $infos['bdd'])?></td>
    <td></td>
    
  </tr>

  <tr class="<?php echo $infos['ueTraitementSignal2Resultats'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>UE Télécommuncations 2</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTelecom2', $infos['ueTelecom2'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTelecom2Resultats', $infos['ueTelecom2Resultats'])
   ?></strong></td>
  </tr>
 <tr>
    <td>Antennes</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'antennesCoef', $infos['antennesCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'antennesTP', $infos['antennesTP'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'antennesP', $infos['antennesP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'antennes', $infos['antennes'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Théorie de l'Information</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'theorieInofrmationCoef', $infos['theorieInofrmationCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'theorieInofrmationP', $infos['theorieInofrmationP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'theorieInofrmation', $infos['theorieInofrmation'])?></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Télécommunications optiques</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tOptCoef', $infos['tOptCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tOptTP', $infos['tOptTP'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tOptP', $infos['tOptP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tOpt', $infos['tOpt'])?></td>
    <td></td>
  </tr>


   
  <tr class="<?php echo $infos['ueTraitementSignal2Resultats'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>UE Traitement du signal 2</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTraitementSignal2', $infos['ueTraitementSignal2'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTraitementSignal2Resultats', $infos['ueTraitementSignal2Resultats'])
   ?></strong></td>
  </tr>
 <tr>
    <td>Traitement Numérique du systéme </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tnsCoef', $infos['tnsCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tnsTP', $infos['tnsTP'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tnsP', $infos['tnsP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tns', $infos['tns'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Théories des Signaux Aléatoires </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tsaCoef', $infos['tsaCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tsaP', $infos['tsaP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tsa', $infos['tsa'])?></td>
    <td></td>
    
    <tr class="<?php echo $infos['ueLanguesVivante1Resultat'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>UE Langues vivantes S1</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueLanguesVivante1', $infos['ueLanguesVivante1'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueLanguesVivante1Resultats', $infos['ueLanguesVivante1Resultat'])
   ?></strong></td>
  </tr>
 <tr>
    <td>Anglais 1 </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglaisCoef', $infos['anglaisCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglaisP', $infos['anglaisP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglais', $infos['anglais'])?></td>
    <td></td>
  </tr>
  
 


  <tr class="<?php echo $infos['ueCultureEntrepriseResultat'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong> UE Culture d'entreprise 1</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueCultureEntreprise', $infos['ueCultureEntreprise'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueCultureEntrepriseResultat', $infos['ueCultureEntrepriseResultat'])
   ?></strong></td>
  </tr>
 <tr>
    <td>Ethique </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ethiqueCoef', $infos['ethiqueCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ethiqueP', $infos['ethiqueP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ethique', $infos['ethique'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Initiation à la sociologie </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'introSociologieCoef', $infos['introSociologieCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'introSociologieP', $infos['introSociologieP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'introSociologie', $infos['introSociologie'])?></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Introduction analyse des données</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'tOptCoef', $infos['tOptCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'introAnalyseDonneesTP', $infos['introAnalyseDonneesTP'])?>
    </td>
    <td></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'introAnalyseDonnees', $infos['introAnalyseDonnees'])?></td>
    <td></td>
  </tr>


  <tr class="<?php echo $infos['s3Resultat'] == 'ADM' ? 'lignenormale': 'lignecoloree';?>">
    <td><strong>Moyenne semestre S1</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 's3Moyenne', $infos['s3Moyenne'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 's3Resultat', $infos['s3Resultat'])
   ?></strong></td>
  </tr>
  </tbody>
  </table>




















<body>
<p class="S"> Notes et résultats semestre S2 </p> 

</body>


  
  <table class="table">
    <thead style="background-color:lightgray;">


  <tr>
    <th></th>
    <th>Coeficient</th>
    <th>Note TP </th>
    <th>Note Partiel</th>
    <th>Note Final </th>
    <th>Resultats</th>
    
  </tr>
  </thead>
    <tbody>
<tr  class="<?php echo $infos['ueOutilsInformatiques3Resultats'] == 'AJ' ? 'lignecoloree': 'lignenormale';?>">
    <td><strong>UE Outils informatiques</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueOutilsInformatiques3Resultats', $infos['ueOutilsInformatiques3'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueOutilsInformatiques3Resultats', $infos['ueOutilsInformatiques3Resultats'])
   ?></strong></td>
    
  </tr>
 <tr>
    <td>Language Java et programmation</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'javaCoef', $infos['javaCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'javaTP', $infos['javaTP'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'javaProjet', $infos['javaProjet'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'java', $infos['java'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>WEB 2 </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'introSociologieCoef', $infos['introSociologieCoef'])?></td>
   
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'web2TP', $infos['web2TP'])?></td>
   
   <td></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'web2', $infos['web2'])?></td>
    <td></td>
    
  </tr>


  <tr class="<?php echo $infos['ueReseaux2Resultat'] == "AJ" ? 'lignecoloree': 'lignenormale';?>">
    <td><strong>UE Réseaux 2</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueReseaux2Resultat', $infos['ueReseaux2Resultat'])
   ?></strong></td>
    
  </tr>
 <tr>
    <td>Modélisation Markovienne</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'modelMarkovCoef', $infos['modelMarkovCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'modelMarkovP', $infos['modelMarkovP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'modelMarkov', $infos['modelMarkov'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Routage sur Internet </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'routageCoef', $infos['routageCoef'])?></td>
   
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'routageTP', $infos['routageTP'])?></td>
   
   <td></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'routage', $infos['routage'])?></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Réseaux de transmission de données</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'rtd2Coef', $infos['rtd2Coef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'rtd2TP', $infos['rtd2TP'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'irtd2P', $infos['rtd2P'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'rtd2', $infos['rtd2'])?></td>
    <td></td>
  </tr>

   
  <tr class="<?php echo $infos['ueTelecom3Resultats'] == "AJ" ? 'lignecoloree':'lignenormale';?>">
    <td><strong>UE Télécommunications 3</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTelecom3', $infos['ueTelecom3'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTelecom3Resultats', $infos['ueTelecom3Resultats'])
   ?></strong></td>
    
  </tr>
 <tr>
    <td>Architecture des réseaux</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'artCoef', $infos['artCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'artP', $infos['artP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'art', $infos['art'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Communications Numérique1 </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'commNumCoef', $infos['commNumCoef'])?></td>
   
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'commNumTP', $infos['commNumTP'])?></td>
   <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'commNumP2', $infos['commNumP2'])?></td>
   
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'commNum', $infos['commNum'])?></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Faisceaux Hertziens</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'fhlsCoef', $infos['fhlsCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'fhlsP', $infos['fhlsP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'fhls', $infos['fhls'])?></td>
    <td></td>
  </tr>


      
 <tr class="<?php echo $infos['ueTraitementSignal3Resultats'] == 'AJ' ?  'lignecoloree':'lignenormale';?>" >
    <td><strong>UE Traitement du signal 3</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTraitementSignal3', $infos['ueTraitementSignal3'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueTraitementSignal3Resultats', $infos['ueTraitementSignal3Resultats'])
   ?></strong></td>
    
  </tr>
 <tr>
    <td>Codes Détecteurs et Correcteur d'érreur</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'cdceCoef', $infos['cdceCoef'])?></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'cdceTP', $infos['cdceTP'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'cdceP', $infos['cdceP'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'cdce', $infos['cdce'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Data Signal Processor </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'dspCoef', $infos['dspCoef'])?></td>
   
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'commNumTP', $infos['commNumTP'])?></td>
   <td></td>
   
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'dsp', $infos['dsp'])?></td>
    <td></td>
    
  </tr>
  <tr class="<?php echo $infos['ueProjetThematiqueResultat'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>UE Projet Thématique</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueProjetThematique', $infos['ueProjetThematique'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueProjetThematiqueResultat', $infos['ueProjetThematiqueResultat'])
   ?></strong></td>
    
  </tr>
 <tr>
    <td>Projet thématique</td>
    <td></td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'TPProjet', $infos['TPProjet'])?>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'rapportProjet', $infos['rapportProjet'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'projetThematique', $infos['projetThematique'])?></td>
    <td></td>
  </tr>

  <tr class="<?php echo $infos['ueLanguesVivante8Resultat'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>UE Langues vivantes S2</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueLanguesVivante8', $infos['ueLanguesVivante8'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueLanguesVivante8Resultat', $infos['ueLanguesVivante8Resultat'])
   ?></strong></td>
    
  </tr>
 <tr>
    <td>Anglais 2 </td>
    <td></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglais1CC', $infos['anglais1CC'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglais1', $infos['anglais1'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Anglais renforcé</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglaisRenforceCoef', $infos['anglaisRenforceCoef'])?></td>
   
    <td></td>
   <td></td>
   
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglaisRenforceCC', $infos['anglaisRenforceCC'])?></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Ouverture Linguistique</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ouvertureLinguistiqueCoef', $infos['ouvertureLinguistiqueCoef'])?></td>
   
    <td></td>
   <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ouvertureLinguistiqueCC', $infos['ouvertureLinguistiqueCC'])?></td>
   
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ouvertureLinguistique', $infos['ouvertureLinguistique'])?></td>
    <td></td>
    
  </tr>
  <tr class="<?php echo $infos['ueCultureEntreprise8Resultat'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>UE Culture d'entreprise 2</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueCultureEntreprise8', $infos['ueCultureEntreprise8'])
   ?></strong></td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'ueCultureEntreprise8Resultat', $infos['ueCultureEntreprise8Resultat'])
   ?></strong></td>
    
  </tr>
 <tr>
    <td>Projet Création d'entreprise </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'projetCreationEntrepriseCoef', $infos['projetCreationEntrepriseCoef'])?></td>
    <td>
    </td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'projetCreationEntrepriseCC', $infos['projetCreationEntrepriseCC'])?></td>
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'projetCreationEntreprise', $infos['projetCreationEntreprise'])?></td>
    <td></td>
  </tr>
  <tr>
    <td>Qualité Sécurité Environnement</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'qseCoef', $infos['qseCoef'])?></td>
   
    <td></td>
   <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'qseP', $infos['qseP'])?></td>
   
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'qse', $infos['qse'])?></td>
    <td></td>
    
  </tr>
   <tr>
    <td>Sécurité santé au travail</td>
    <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'santeSecuriteTravailCoef', $infos['santeSecuriteTravailCoef'])?></td>
   
    <td></td>
   <td><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'santeSecuriteTravailP', $infos['santeSecuriteTravailP'])?></td>
   
    <td> 
     <?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'santeSecuriteTravail', $infos['santeSecuriteTravail'])?></td>
    <td></td>
    
  </tr>
  
  
   
	
<tr class="<?php echo $infos['s4Resultat'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>Moyenne semestre S2</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td ><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 's4Moyenne', $infos['s4Moyenne'])
   ?></strong> </td>
    <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 's4Resultat', $infos['s4Resultat'])
   ?></strong></td>
  </tr>
  </tbody>
  </table>         
  <p class="S"> Résultat global </p> 
 
  <table class="table">
    <thead>
    <tr class="<?php echo $infos['anglaisResultats'] == 'AJ' ?  'lignecoloree':'lignenormale';?>">
    <td><strong>Niveau anglais </strong></td>
      <td></td>
       <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anglaisResultats', $infos['anglaisResultats'])
   ?></strong></td>
  </tr>
<tr  class="<?php echo $infos['anneeResultat'] == 'AJ' ? 'lignecoloree':'lignenormale' ;?>">
    <td><strong>Moyenne générale </strong></td>
      <td><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anneeMoyenne', $infos['anneeMoyenne'])
   ?></strong></</td>
       <td ><strong><?php $editable=$paramAction=="editer1";
   buildInput("", $editable, 'anneeResultat', $infos['anneeResultat'])
   ?></strong></td>
  </tr>
  </tbody>
  </table>
  

  <p class="S"> Session TOEIC </p> 

  <body>

 
<table class="table">
  
    <tr>
      <th> </th>
      <th>Resultats</th>
    </tr>
  
  <tbody>
  
    <tr>
      <td>Test de TOEIC</td>
      <td><?php $editable=$paramAction=="editer1";
 buildInput("", $editable, 'anneeTOEIC', $infos['anneeTOEIC'])?></td>
      
    </tr>      
    <tr >
      <td>TOEICblanc1</td>
      <td><?php $editable=$paramAction=="editer1";
 buildInput("", $editable, 'TOEICblanc1', $infos['TOEICblanc1'])?></td>
      
    </tr>
    <tr >
      <td>TOEICblanc2</td>
      <td><?php $editable=$paramAction=="editer1";
 buildInput("", $editable, 'TOEICblanc2', $infos['TOEICblanc2'])?></td>
      
    </tr>
    <tr >
      <td>TOEICofficiel</td>
      <td><?php $editable=$paramAction=="editer1";
 buildInput("", $editable, 'TOEICofficiel', $infos['TOEICofficiel'])?></td>
    
    </tr>
    <tr >
      <td><strong>Niveau anglais </strong></td>
      <td><strong><?php $editable=$paramAction=="editer1";
 buildInput("", $editable, 'anglaisResultats', $infos['anglaisResultats'])
 ?></strong></td>
      
    </tr>
    
  </tbody>
</table>


</body>
</html>

</body>
