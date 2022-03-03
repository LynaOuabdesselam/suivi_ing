<?php
    require_once 'createTableSemi.php';
    $conn = mysqli_connect('localhost', 'root', '', 'applietudiant');
    

    $idEtudiant=isset($_POST['idEtudiant'])?$_POST['idEtudiant']:"";
    echo $idEtudiant;
    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    echo $nom;
    $prenom = isset($_POST['prenom'])?$_POST['prenom']:"";
    $DateBirth = isset($_POST['DateBirth'])?$_POST['DateBirth']:"";
    $EtudiantMail=isset($_POST['EtudiantMail'])?$_POST['EtudiantMail']:"";
    $EtudiantTel = isset($_POST['EtudiantTel'])?$_POST['EtudiantTel']:"";
    $EtudiantAdresse = isset($_POST['EtudiantAdresse'])?$_POST['EtudiantAdresse']:"";
    $EtudiantBatiment = isset($_POST['EtudiantBatiment'])?$_POST['EtudiantBatiment']:"";
    $EtudiantCP = isset($_POST['EtudiantCP'])?$_POST['EtudiantCP']:"";
    $EtudiantVille = isset($_POST['EtudiantVille'])?$_POST['EtudiantVille']:"";


    $EtudeAnnee=isset($_POST['EtudeAnnee'])?$_POST['EtudeAnnee']:"";
    $libelle=isset($_POST['libelle'])?$_POST['libelle']:"";
    $semestre=isset($_POST['semestre'])?$_POST['semestre']:"";
    $EtudiantNation= isset($_POST['EtudiantNation'])?$_POST['EtudiantNation']:"";
    $bourse=isset($_POST['bourse'])?$_POST['bourse']:"";
    $programme=isset($_POST['programme'])?$_POST['programme']:"";
    $Duree = isset($_POST['Duree'])?$_POST['Duree']:"";
    $Datedebut = isset($_POST['Datedebut'])?$_POST['Datedebut']:"";
    $PaysAcceuil = isset($_POST['PaysAcceuil'])?$_POST['PaysAcceuil']:"";
    $villeEchange = isset($_POST['villeEchange'])?$_POST['villeEchange']:"";
    $EcoleEchange = isset($_POST['EcoleEchange'])?$_POST['EcoleEchange']:"";
    $nombreECTS=isset($_POST['nombreECTS'])?$_POST['nombreECTS']:"";
    $Langue=isset($_POST['Langue'])?$_POST['Langue']:"";
        
    $query="INSERT INTO 'semi'('idEtudiant', 'nom', 'prenom', 'DateBirth', 'EtudiantMail', 'EtudiantTel',
    'EtudiantAdresse','EtudiantBatiment', 'EtudiantCP', 'EtudiantVille',
    'EtudeAnnee','libelle','semestre','EtudiantNation','bourse','programme','Duree','Datedebut','PaysAcceuil',
    'villeEchange','EcoleEchange','nombreECTS','Langue')
     values ('$idEtudiant','$nom','$prenom','$DateBirth','$EtudiantMail','$EtudiantTel','$EtudiantAdresse',
                  '$EtudiantBatiment','$EtudiantCP','$EtudiantVille','$EtudeAnnee',
                  '$libelle','$semestre','$EtudiantNation','$bourse', '$programme', '$Duree', '
                  $Datedebut','$PaysAcceuil', '$villeEchange', '$EcoleEchange', '$nombreECTS', '$Langue');";
    
   
    if (mysqli_query($conn,$query)) {
        $datainsert['insertsucess'] = '<p style="color: green;">Student Inserted!</p>';
    }else{
        $datainsert['inserterror']= '<p style="color: red;">Student Not Inserted, please input right informations!</p>';

    }
    header('location: http://localhost/suivi_ing/index.php?page=studentDetails');
?>