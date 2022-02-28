<?php 
//   $con = mysqli_connect('localhost', 'root', '', 'pvT2');
//   if(mysqli_connect_error())
//       echo "Connection Error.";
//   else
//       echo "Database Connection Successfully."  
      


      
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "", "applietudiant2");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE students (
    id  INT(6) PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  idEtudiant INT(8) NOT NULL
 
)";
if(mysqli_query($con, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 // Close connection
//mysqli_close($con);
?>

  