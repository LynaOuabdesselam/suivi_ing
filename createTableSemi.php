<?php 
$con = mysqli_connect("localhost", "root", "", "applietudiant");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$nomore = "DROP TABLE IF EXISTS semi";
// Attempt create table query execution
$sql = "CREATE TABLE IF NOT EXISTS semi  (
    idEtudiant  INT(8) PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    DateBirth INT(30),
    EtudiantMail VARCHAR(30),
    EtudiantTel INT(30),
    EtudiantAdresse INT(30),
    EtudiantBatiment INT(30),
    EtudiantCP INT(30),
    EtudiantVille VARCHAR(30),
    bourse VARCHAR(30),
    semestre VARCHAR(30),
    programme VARCHAR(30),
    Datedebut INT(30), 
    Duree INT(2),
    PaysAcceuil VARCHAR(30),
    nombreECTS INT(2),
    Langue VARCHAR(30),
    villeEchange  VARCHAR(30),
    EcoleEchange  VARCHAR(30),
    EtudeAnnee VARCHAR(30),
    libelle VARCHAR(30),
    EtudiantNation VARCHAR(30)
)";
if(mysqli_query($con, $nomore)){
    echo "Table deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $nomore. " . mysqli_error($con);
}
if(mysqli_query($con, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 // Close connection
//mysqli_close($con);
?>