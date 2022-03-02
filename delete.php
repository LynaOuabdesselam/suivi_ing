 <?php
   try {

        $maBase = new PDO("mysql:host=localhost;dbname=applietudiant","root", "");

    }catch (Exception $e){
        die('Impossible de se connecter à la base ' . $e->getMessage());

    }

    $req = $maBase->prepare('DELETE FROM juryT2 WHERE idEtudiant=:num');
    $req->bindValue(':num', $_GET['idEtudiant'], PDO::PARAM_INT);
    $req->execute();
  
    header('Location:index.php?page=listeStudents');
?>

