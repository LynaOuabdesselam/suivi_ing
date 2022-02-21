<?php

    function GetRequest($nomvar,$defaut=""){

        if (isset($_REQUEST[$nomvar]))
        { $ret=$_REQUEST[$nomvar];
        }
        else   $ret=$defaut;

        return $ret;
    }
    function connectToBD(){ //Connexion à la Bdd

        $objetPdo = new PDO('mysql:host=localhost;dbname=applietudiant2', 'root', '');
        if (!$objetPdo) echo "Echec de connexion à la base de données";
        $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $objetPdo;


    }
    $idEtudiant = GetRequest('idEtudiant',11925709); //Si pas de num etudiant en parametre on fixe un num par defaut
    $paramAction=GetRequest("paramAction","");

    function getInfosEtudiant($idEtudiant){    
        $objetPdo=connectToBD();
        $sql="SELECT * from etudiant where EtudiantNumero=$idEtudiant";
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

    $idStage = GetRequest('idStage',1);
    $paramAction=GetRequest("paramAction","");

    function getInfosStage($idStage){
        $objetPdo=connectToBD();
        $sql="SELECT * from stage where idStage=$idStage";
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

    $IdentifiantLabo = GetRequest('$IdentifiantLabo',125);
    $paramAction=GetRequest("paramAction","");
    function getInfosTuteurac($IdentifiantLabo){
        $objetPdo=connectToBD();
        $sql="SELECT * from tuteuracademique where IdentifiantLabo=$IdentifiantLabo";
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

    $idTuteur = GetRequest('$idTuteur',1);
    $paramAction=GetRequest("paramAction","");
    function getInfosTuteurEn($idTuteur){
        $objetPdo=connectToBD();
        $sql="SELECT * from tuteurentreprise where idTuteur=$idTuteur";
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

    $idDrh = GetRequest('$idDrh',1);
    $paramAction=GetRequest("paramAction","");
    function getInfosDrh($idDrh){
        $objetPdo=connectToBD();
        $sql="SELECT * from drh where idDrh=$idDrh";
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

    $idEntreprise = GetRequest('$idEntreprise',1);
    $paramAction=GetRequest("paramAction","");
    function getInfosEntreprise($idEntreprise){
        $objetPdo=connectToBD();
        $sql="SELECT * from entreprise where idEntreprise=$idEntreprise";
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
        $arrVal['EtudiantCivil']=GetRequest("EtudiantCivil");
        $arrVal['EtudiantNom']=GetRequest("EtudiantNom");
        $arrVal['EtudiantPrenom']=GetRequest("EtudiantPrenom");
        $arrVal['EtudiantDateNais']=formatDateForMysql(GetRequest("EtudiantDateNais"));
        $arrVal['EtudiantVilleNais']=GetRequest("EtudiantVilleNais");
        $arrVal['EtudiantNation']=GetRequest("EtudiantNation");
        $arrVal['EtudiantMail']=GetRequest("EtudiantMail");
        $arrVal['EtudiantTel']=GetRequest("EtudiantTel");
        $arrVal['EtudiantFax']=GetRequest("EtudiantFax");
        $arrVal['EtudiantBatiment']=GetRequest("EtudiantBatiment");
        $arrVal['EtudiantAdresse']=GetRequest("EtudiantAdresse");
        $arrVal['EtudiantCP']=GetRequest("EtudiantCP");
        $arrVal['EtudiantVille']=GetRequest("EtudiantVille");
        $arrVal['EtudiantPays']=GetRequest("EtudiantPays");
        updateTable("etudiant", $arrVal, "EtudiantNumero=$idEtudiant");

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
    $infostage=getInfosStage($idStage);
    $infostuteuraca=getInfosTuteurac($IdentifiantLabo);
    $infostuteur=getInfosTuteurEn($idTuteur);
    $infosDrh=getInfosDrh($idDrh);
    $infosEnt = getInfosEntreprise($idEntreprise);

?>
<body>
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-3"><!--left col-->
            <div class="col-sm-10"><h1><?php echo $idEtudiant?><hr><hr><hr></h1></div>
                <hr>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Coordonnées<i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Email</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'EtudiantMail', $infos['EtudiantMail'], 5,5,"class='form-control'")
                        ?></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Telephone</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'EtudiantTel', $infos['EtudiantTel'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>adresse</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'EtudiantAdresse', $infos['EtudiantAdresse'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Code Postal</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'EtudiantCP', $infos['EtudiantCP'], 5,5,"class='form-control'")
                        ?>
                    </li>

                    <li class="list-group-item text-right">
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
                    
                    </li>


                </ul>


                <ul class="list-group">
                    <li class="list-group-item text-muted">Contact d'urgence et assurance<i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Nom</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'ContactUrgenceNom', $infos['ContactUrgenceNom'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Telephone</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'ContactUrgenceTel', $infos['ContactUrgenceTel'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>AssuranceNom</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'AssuranceNom', $infos['AssuranceNom'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>AssuranceNumero</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'AssuranceNumero', $infos['AssuranceNumero'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>AssuranceCaisse</strong></span>
                        <?php
                        $editable=$paramAction=="editer1";
                        buildInput("", $editable, 'AssuranceCaisse', $infos['AssuranceCaisse'], 5,5,"class='form-control'")
                        ?>
                    </li>

                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Entreprise d'accueil<i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Type</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'Ent', $infosEnt['Ent'], 5,5,"class='form-control'")
                        ?></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Nom</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntNom', $infosEnt['EntNom'], 5,5,"class='form-control'")
                        ?>
                    </li>

                    <li class="list-group-item text-right"><span class="pull-left"><strong>Unite</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntUnite', $infosEnt['EntUnite'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Batiment</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntBatiment', $infosEnt['EntBatiment'], 5,5,"class='form-control'")
                        ?>
                    </li>

                
                
                
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Adresse</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntAdresse', $infosEnt['EntAdresse'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Code Postal</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntCP', $infosEnt['EntCP'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Ville</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntVille', $infosEnt['EntVille'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Pays</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntPays', $infosEnt['EntPays'], 5,5,"class='form-control'")
                        ?>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Activité</strong></span>
                        <?php
                        $editable=$paramAction=="editer6";
                        buildInput("", $editable, 'EntActivite', $infosEnt['EntActivite'], 5,5,"class='form-control'")
                        ?>
                    </li>
                </ul>
            </div><!--/col-3-->


            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home"><strong>Informations générales</strong></a></li>
                    <li><a data-toggle="tab" href="#stage"><strong>Informations de Stage</strong></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="true">
                                <strong>Informations Tuteurs</strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#tuteuracademique" data-toggle="tab">Tuteur Academique</a>
                                <a class="dropdown-item" href="#tuteurentreprise" data-toggle="tab">Tuteur Entreprise</a>
                        </div>
                    <li><a data-toggle="tab" href="#DRH"><strong>DRH</strong></a></li>
                </ul>
                <br>
                <div class="tab-content">
                
                    <div class="tab-pane active" id="home">
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Civilité</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantCivil', $infos['EtudiantCivil'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Numéro etudiant</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php echo $idEtudiant;?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Nom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantNom', $infos['EtudiantNom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Prenom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantPrenom', $infos['EtudiantPrenom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Date de naissance</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantDateNais', $infos['EtudiantDateNais'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Ville de naissance</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantVilleNais', $infos['EtudiantVilleNais'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Nationnalité</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantNation', $infos['EtudiantNation'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                


                    <div class="tab-pane" id="stage">
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Stage trouvé sur</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'TrouveStage', $infostage['TrouveStage'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Durée</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'Duree', $infostage['Duree'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Durée unité</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'DureeUnite', $infostage['DureeUnite'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Nombre des heures</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'NombreDesHeures', $infostage['NombreDesHeures'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Date Debut </h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'DateDebut', $infostage['DateDebut'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Date Fin</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'DateFin', $infostage['DateFin'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Stagiaire telephone</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'StagiaireTel', $infostage['StagiaireTel'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Stagiaire mail</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'StagiaireMail', $infostage['StagiaireMail'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Stage titre</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'StageTitre', $infostage['StageTitre'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Stage sujet</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'StageSujet', $infostage['StageSujet'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Stage horaire</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'StageHoraire', $infostage['StageHoraire'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Confidentialité Rapport</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'ConfidRap', $infostage['ConfidRap'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Confidentialité Soutenance</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'ConfidSout', $infostage['ConfidSout'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Gratification</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer2";
                                            buildInput("", $editable, 'StageGrat', $infostage['StageGrat'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank" href="">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-pane" id="tuteuracademique" >
                        <div class="col-md-8">
                        <h5 id="tuto">Tutueur Academique</h5><hr>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Civilité</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer3";
                                            buildInput("", $editable, 'IngCivil', $infostuteuraca['IngCivil'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Fonction</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer3";
                                            buildInput("", $editable, 'IngQualite', $infostuteuraca['IngQualite'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Nom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer3";
                                            buildInput("", $editable, 'IngNom', $infostuteuraca['IngNom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Prenom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer3";
                                            buildInput("", $editable, 'IngPrenom', $infostuteuraca['IngPrenom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Téléphone</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer3";
                                            buildInput("", $editable, 'IngTel', $infostuteuraca['IngTel'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Fax</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer3";
                                            buildInput("", $editable, 'IngFax', $infostuteuraca['IngFax'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Adresse mail</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer3";
                                            buildInput("", $editable, 'IngMail', $infostuteuraca['IngMail'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank" href="">Edit</a><hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            

                    <div class="tab-pane" id="tuteurentreprise">
                        <div class="col-md-8">
                        
                        <h5>Tutueur entreprise</h5><hr>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Civilité</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer4";
                                            buildInput("", $editable, 'IngCivil', $infostuteur['IngCivil'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Fonction</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer4";
                                            buildInput("", $editable, 'IngQualite', $infostuteur['IngQualite'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Nom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer4";
                                            buildInput("", $editable, 'IngNom', $infostuteur['IngNom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Prenom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer4";
                                            buildInput("", $editable, 'IngPrenom', $infostuteur['IngPrenom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Téléphone</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer4";
                                            buildInput("", $editable, 'IngTel', $infostuteur['IngTel'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Fax</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer4";
                                            buildInput("", $editable, 'IngFax', $infostuteur['IngFax'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Adresse mail</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer4";
                                            buildInput("", $editable, 'IngMail', $infostuteur['IngMail'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank" href="">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 


                    <div class="tab-pane" id="DRH">
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Civilité</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer5";
                                            buildInput("", $editable, 'Civilité', $infosDrh['RadmCivil'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Fonction</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer5";
                                            buildInput("", $editable, 'RadmQualite', $infosDrh['RadmQualite'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Nom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer5";
                                            buildInput("", $editable, 'RadmNom', $infosDrh['RadmNom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Prenom</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'RadmPrenom', $infosDrh['RadmPrenom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Téléphone</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'RadmTel', $infosDrh['RadmTel'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Fax</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'RadmFax', $infosDrh['RadmFax'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Mail</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'RadmMail', $infosDrh['RadmMail'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div><!--/col-9-->
        </div>
    </div><!--/row-->
</body>



