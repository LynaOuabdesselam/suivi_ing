<?php 
session_start();
if (isset($_SESSION['user_login'])) {
	$EtudiantNumero = base64_decode($_GET['EtudiantNumero']);
	if(mysqli_query($con,"DELETE FROM `etudiant` WHERE `EtudiantNumero` = '$EtudiantNumero'")){

		header('Location: index.php?page=listeStudents&delete=success');
	}else{
		header('Location: index.php?page=all-listeStudents&delete=error');
	}
}else{
	header('Location: login-user.php');
 }