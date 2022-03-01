<?php
    $con = mysqli_connect('localhost', 'root', '', 'applietudiant');

    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
    $idEtudiant=isset($_POST['idEtudiant'])?$_POST['idEtudiant']:"";

    
    $query="INSERT INTO `students`(`idEtudiant`, `nom`, `prenom`)
     values ('$idEtudiant','$nom','$prenom');";


/*     if (mysqli_query($con,$query)) {
        $datainsert['insertsucess'] = '<p style="color: green;">Student Inserted!</p>';
    }else{
        $datainsert['inserterror']= '<p style="color: red;">Student Not Inserted, please input right informations!</p>';
        echo $nom ;
        echo $prenom;
        echo $idEtudiant;
    }
 */
?>