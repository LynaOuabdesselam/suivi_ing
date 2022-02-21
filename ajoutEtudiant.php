<?php

    $con = mysqli_connect('localhost', 'root', '', 'applietudiant2');

    $EtudiantNumero=isset($_POST['EtudiantNumero'])?$_POST['EtudiantNumero']:"";
    $libelle=isset($_POST['libelle'])?$_POST['libelle']:"";
    $StageAnnee=isset($_POST['StageAnnee'])?$_POST['StageAnnee']:"";
    $etat=isset($_POST['etat'])?$_POST['etat']:"";
    $TypeStage = isset($_POST['TypeStage'])?$_POST['TypeStage']:"";
    $EtudiantCivil=isset($_POST['EtudiantCivil'])?$_POST['EtudiantCivil']:"";
    $EtudiantNom=isset($_POST['EtudiantNom'])?$_POST['EtudiantNom']:"";
    $EtudiantPrenom = isset($_POST['EtudiantPrenom'])?$_POST['EtudiantPrenom']:"";
    $EtudiantDatedeNaissance = isset($_POST['EtudiantDatedeNaissance'])?$_POST['EtudiantDatedeNaissance']:"";
    $EtudiantMail=isset($_POST['EtudiantMail'])?$_POST['EtudiantMail']:"";
    $EtudiantVilledeNaissance = isset($_POST['EtudiantVilledeNaissance'])?$_POST['EtudiantVilledeNaissance']:"";
    $EtudiantNationnalité = isset($_POST['EtudiantNationnalité'])?$_POST['EtudiantNationnalité']:"";
    $EtudiantTel = isset($_POST['EtudiantTel'])?$_POST['EtudiantTel']:"";
    $EtudiantFax = isset($_POST['EtudiantFax'])?$_POST['EtudiantFax']:"";
    $EtudiantAdresse = isset($_POST['EtudiantAdresse'])?$_POST['EtudiantAdresse']:"";
    $EtudiantBatiment = isset($_POST['EtudiantBatiment'])?$_POST['EtudiantBatiment']:"";
    $EtudiantCP = isset($_POST['EtudiantCP'])?$_POST['EtudiantCP']:"";
    $EtudiantVille = isset($_POST['EtudiantVille'])?$_POST['EtudiantVille']:"";
    $EtudiantPays = isset($_POST['EtudiantPays'])?$_POST['EtudiantPays']:"";
    $ContactUrgenceNom = isset($_POST['ContactUrgenceNom'])?$_POST['ContactUrgenceNom']:"";
    $ContactUrgenceTel = isset($_POST['ContactUrgenceTel'])?$_POST['ContactUrgenceTel']:"";
    $AssuranceNom = isset($_POST['AssuranceNom'])?$_POST['AssuranceNom']:"";
    $AssuranceNumero = isset($_POST['AssuranceNumero'])?$_POST['AssuranceNumero']:"";
    $AssuranceCaisse = isset($_POST['AssuranceCaisse'])?$_POST['AssuranceCaisse']:"";

        
    $query="INSERT INTO `etudiant`(`libelle`, `etat`, `StageAnnee`, `TypeStage`, `EtudiantCivil`, `EtudiantNumero`,
     `EtudiantNom`, `EtudiantPrenom`, `EtudiantDatedeNaissance`, `EtudiantVilledeNaissance`, `EtudiantNationnalité`,
      `EtudiantMail`, `EtudiantTel`, `EtudiantFax`, `EtudiantBatiment`, `EtudiantAdresse`, `EtudiantCP`, `EtudiantVille`,
      `EtudiantPays`,`ContactUrgenceNom`, `ContactUrgenceTel`, `AssuranceNom`, `AssuranceNumero`, `AssuranceCaisse`)
     values ('$EtudiantNumero','$libelle','$StageAnnee','$etat','$TypeStage','$EtudiantCivil','$EtudiantNom',
                  '$EtudiantPrenom','$EtudiantDatedeNaissance','$EtudiantMail','$EtudiantVilledeNaissance',
                  '$EtudiantNationnalité','$EtudiantTel','$EtudiantFax','$EtudiantAdresse', '$EtudiantBatiment', '$EtudiantCP', '
                  $EtudiantVille',
                  '$EtudiantPays', '$ContactUrgenceNom', '$ContactUrgenceTel', '$AssuranceNom', '$AssuranceNumero','$AssuranceCaisse');";
    
   
    if (mysqli_query($con,$query)) {
        $datainsert['insertsucess'] = '<p style="color: green;">Student Inserted!</p>';
    }else{
        $datainsert['inserterror']= '<p style="color: red;">Student Not Inserted, please input right informations!</p>';
    }


?>