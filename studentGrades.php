<?php
 require_once "createTablenew.php";
 require_once "readCSV.php";
    function GetRequest($nomvar,$defaut=""){

        if (isset($_REQUEST[$nomvar]))
        { $ret=$_REQUEST[$nomvar];
        }
        else   $ret=$defaut;

        return $ret;
    }
    function connectToBD(){ //Connexion à la Bdd

        $objetPdo = new PDO('mysql:host=localhost;dbname=pvt2', 'root', '');
        if (!$objetPdo) echo "Echec de connexion à la base de données";
        $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $objetPdo;
    }
    $idEtudiant = GetRequest('idEtudiant',11925709); //Si pas de num etudiant en parametre on fixe un num par defaut
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
        $sql = "insert into  $table (  ";
        $sqlVal = " values ( ";
        $i = 0;

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
    </script>
</head>


<?php
    $infos=getInfosEtudiant($idEtudiant);
?>
<body>
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="col-md-12">
                            <div class="card mb-12">
                                <div class="card-body">
                                    <div class="row center">
                                        <h4 class="mb-0">
                                            <i class="fa fa-dashboard fa-1x"></i>
                                            <?php echo "Information générales du: ".$idEtudiant?>
                                        </h4>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Prenom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'prenom', $infos['prenom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Nom</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'nom', $infos['nom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Numéro etudiant</h5>
                                        </div>
                                        <div class="col-sm-2 text-secondary">
                                            <?php echo $idEtudiant;?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">dettes</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'dettes', $infos['dettes'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Credits</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'credits', $infos['credits'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">redoublants</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                             $editable=$paramAction=="editer1";
                                             buildInput("", $editable, 'redoublants', $infos['redoublants'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">anneeMoyenne</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                           $editable=$paramAction=="editer1";
                                           buildInput("", $editable, 'anneeMoyenne', $infos['anneeMoyenne'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">anneeResultat</h5>
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'anneeResultat', $infos['anneeResultat'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">TOEICblanc1</h5>
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'TOEICblanc1', $infos['TOEICblanc1'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                     <div class="col-sm-12">
                                     <?php
                                        if (!$editable)
                                            echo "<input type='button'  onclick='editer(1)' value='Edit' class='btn btn-info pull-left'/>";
                                        else {
                                            echo " <input type='button'   onclick='valider1()' value='Valider' class='btn btn-primary'/>";
                                            echo " <input type='button'   onclick='annuler()' value='Annuler' class='btn btn-danger'/>";
                                            }
                                    ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div><!--/row-->
</body>


