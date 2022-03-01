<?php require_once "controllerUserData.php"; ?>

    
<link rel="stylesheet" type= "text/css" href= "Etudiant.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="Etudiant.js"></script>

    <form id="msform" method="post" action="ajoutEtudiant.php">
    

     <fieldset>
       <h2 class="fs-title"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Informations de base </h2>

       <div class="col-sm-14">
            
        </div>
        
       
       <input autocomplete='off' type="text" name="nom" placeholder="Nom*" required="required" >
       <input autocomplete='off' type="text" name="prenom" placeholder="Prenom*" required="required" 
              id="inputPrenom" />
       <input autocomplete='off' type="text" name="idEtudiant" placeholder="N° Étudiant*" required="required" id="idEtudiant"/>    
       <button type="submit" class="btn btn-warning"> Enregistrer </button> 
     </fieldset>
   </form>

