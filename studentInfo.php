<?php

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

    
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Informationsgénérales">
    <i class="fa fa-dashboard fa-1x"></i>
        <?php echo "Information générales de "
            .$editable=$paramAction=="editer1";
            buildInput("", $editable, 'prenom', $infos['prenom'], 5,5,"class='form-control'")
        ?>
        <?php
            echo "  ".$editable=$paramAction=="editer1";
            buildInput("", $editable, 'nom', $infos['nom'], 5,5,"class='form-control'")
        ?>
    </a></li>
    <li><a data-toggle="tab" href="#Relevés">Relevés</a></li>
    <li><a data-toggle="tab" href="#SEMI">SEMI</a></li>
    <li><a data-toggle="tab" href="#Dossier">Dossier</a></li>
    <li><a data-toggle="tab" href="#Stage">Stage</a></li>
  </ul>

  <div class="tab-content">
    <div id="Informationsgénérales" class="tab-pane fade in active">
<!-- *********************************************************************************** -->
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="col-md-12">
                            <div class="card mb-12">
                                <div class="card-body">
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
                                            <h5 class="mb-0">Email</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantMail', $infos['EtudiantMail'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Telephone</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantTel', $infos['EtudiantTel'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Adresse</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                             $editable=$paramAction=="editer1";
                                             buildInput("", $editable, 'EtudiantAdresse', $infos['EtudiantAdresse'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Code Postal</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                           $editable=$paramAction=="editer1";
                                           buildInput("", $editable, 'EtudiantCP', $infos['EtudiantCP'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Date de naissance</h5>
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantDateNais', $infos['EtudiantDateNais'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Lieu de naissance</h5>
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'EtudiantVilleNais', $infos['EtudiantVilleNais'], 5,5,"class='form-control'")
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
    </div>




<!-- **************************************************************************************** -->
    </div>
    <div id="Relevés" class="tab-pane fade">
      <h3>Menu 1</h3>
    </div>
    <div id="SEMI" class="tab-pane fade">
      <h3>Menu 2</h3>
    </div>
    <div id="Dossier" class="tab-pane fade">
      <h3>Menu 3</h3>
    </div>
    <div id="Stage" class="tab-pane fade">
      <h3>Menu4</h3>
    </div>
  </div>
</div>
</body>


