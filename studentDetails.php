<html>
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

    
    <title><?php echo $fetch_info['name'] ?> |Cordonnées</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="styleCal.css" rel="stylesheet" type="text/css">
    <link href="calendar.css" rel="stylesheet" type="text/css">  
    <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css"> -->
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <!-- <script src="js/jquery.dataTables.min.js" type="text/javascript"></script> -->
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
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
    <i class="fa fa-dashboard"></i>
        <?php echo "Information générales de "
            .$editable=$paramAction=="editer1";
            buildInput("", $editable, 'prenom', $infos['prenom'], 5,5,"class='form-control'")
        ?>
        <?php
            echo "  ".$editable=$paramAction=="editer1";
            buildInput("", $editable, 'nom', $infos['nom'], 5,5,"class='form-control'")
        ?>
    </a></li>
    <li><a data-toggle="tab" href="#Relevés"><i class="fas fa-files-o"></i> Relevés</a></li>
    <li><a data-toggle="tab" href="#TOEIC"><i class="fa fa-comments"></i> TOEIC</a></li>
    <li><a data-toggle="tab" href="#SEMI"><i class="fas fa-plane"></i> SEMI</a></li>
    <li><a data-toggle="tab" href="#Dossier"><i class="fa fa-folder-open"></i> Dossier</a></li>
    <li><a data-toggle="tab" href="#Stage"><i class="fa fa-mortar-board"></i> Stage</a></li>
  </ul>

  <div class="tab-content">
    <div id="Informationsgénérales" class="tab-pane in active">
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
                                    <!-- <div class="row">
                                        <div class="col-sm-12">
                                            <?php
                                                if (!$editable)
                                                    echo "<input type='button'  onclick='editer1()' value='Edit' class='btn btn-info pull-left'/>";
                                                else {
                                                    echo " <input type='button'   onclick='valider1()' value='Valider' class='btn btn-primary'/>";
                                                    echo " <input type='button'   onclick='annuler()' value='Annuler' class='btn btn-danger'/>";
                                                    }
                                            ?>
                                        </div>
                                    </div> -->
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
    <div id="TOEIC" class="tab-pane fade">

<!-- ******************************************************************************************** -->
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
                                        <div class="col-sm-12 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'prenom', $infos['prenom'], 5,5,"class='form-control'")
                                            ?>
                                             <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'nom', $infos['nom'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Test TOEIC :</h5>
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            <?php
                                                $editable=$paramAction=="editer1";
                                                buildInput("", $editable, 'anneeTOEIC', $infos['anneeTOEIC'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">TOEIC Blanc 1 :</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'TOEICblanc1', $infos['TOEICblanc1'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">TOEIC Blanc 2 :</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                            $editable=$paramAction=="editer1";
                                            buildInput("", $editable, 'TOEICblanc2', $infos['TOEICblanc2'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">TOEIC Officiel</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                             $editable=$paramAction=="editer1";
                                             buildInput("", $editable, 'TOEICofficiel', $infos['TOEICofficiel'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Niveaux d'anglais :</h5>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <?php
                                           $editable=$paramAction=="editer1";
                                           buildInput("", $editable, 'anglaisResultats', $infos['anglaisResultats'], 5,5,"class='form-control'")
                                            ?>
                                        </div>
                                    </div>
                                    <hr>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div><!--/row-->
    </div>

<!-- ******************************************************************************************** -->
    </div>
    <div id="SEMI" class="tab-pane fade">
      <h3>Menu 3</h3>
    </div>
    <div id="Dossier" class="tab-pane fade">
      <h3>Menu 4</h3>
    </div>
    <div id="Stage" class="tab-pane fade">
      <h3>Menu 5</h3>
    </div>
  </div>
</div>

</body>






</html>