<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student ! </title>
    <link rel="stylesheet" type= "text/css" href= "Etudiant.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script type="text/javascript" src="Etudiant.js"></script>



</head>
<body>

    <div class="container">
    <form id="msform" method="post" action="ajoutEtudiant.php">
	 

    <fieldset>
       <h2 class="fs-title">Informations de base (1/3)</h2>
        
       <input autocomplete='off' type="text" name="EtudiantNumber" placeholder="Student Number *" required="required" id="EtudiantNumber"/>
       <input autocomplete='off' type="text" name="libelle" placeholder="Speciality *" required="required" id="libelle"/>
       <input autocomplete='off' type="text" name="StageAnnee" placeholder="Internship Year *" required="required" />
       <input autocomplete='off' type="text" name="etat" placeholder="Internship Status *" required="required" >
       <input autocomplete='off' type="text" name="TypeStage" placeholder="Internship Type *" required="required"/>
      
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>
       
     <!-- fieldsets -->
     <fieldset>
       <h2 class="fs-title">Informations de base (2/3) </h2>
        
       <input autocomplete='off' type="text" name="EtudiantCivil" placeholder="Civilité (Mme / Mr)" id="EtudiantCivil"/>
       <input autocomplete='off' type="text" name="EtudiantNom" placeholder="Nom stagiaire *" required="required" >
       <input autocomplete='off' type="text" name="EtudiantPrenom" placeholder="Prenom stagiaire *" required="required" 
              id="inputPrenom" />
       <input autocomplete='off' type="text" class="datepicker" name="EtudiantDatedeNaissance" placeholder="Date de naissance (AAAA-MM-JJ) *" required="required" />
       <input autocomplete='off' type="text" name="EtudiantMail" placeholder="Mail (xyz@mail.fr)" />
      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

     <fieldset>
       <h2 class="fs-title">Informations de base (3/3) </h2>
        
       <input autocomplete='off' type="text" name="EtudiantVilledeNaissance" placeholder="Place of Birth" id="EtudiantVilledeNaissance"/>
       <input autocomplete='off' type="text" name="EtudiantNationnalité" placeholder="Nationality"  />
       <input autocomplete='off' type="text" name="EtudiantTel" placeholder="Student Telephone Number*" required="required"/>
       <input autocomplete='off' type="text" name="EtudiantFax" placeholder="Student Fax Number" />
       
      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

     <fieldset>
       <h2 class="fs-title">Student Address </h2>
        
       <input autocomplete='off' type="text" name="EtudiantAdresse" placeholder="Student Address*"  required="required"/>
       <input autocomplete='off' type="text" name="EtudiantBatiment" placeholder="Student Batiment*"/>
       <input autocomplete='off' type="text" name="EtudiantCP" placeholder="Zip Code*" required="required" >
       <input autocomplete='off' type="text" name="EtudiantVille" placeholder="Student City*" required="required"/>
       <input autocomplete='off' type="text" name="EtudiantPays" placeholder="Student Country*" required="required"/>
       
      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

     <fieldset>
       <h2 class="fs-title">Contact in case of emergency </h2>
        
       <input autocomplete='off' type="text" name="ContactUrgenceNom" placeholder="Full Name*" required="required" />
       <input autocomplete='off' type="text" name="ContactUrgenceTel" placeholder="Telephone Number*" required="required" />
    
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <input type="button" name="next" class="next action-button" value="Suivant" />
     </fieldset>

       
     <fieldset>
       <h2 class="fs-title">Insurance Informations</h2>

       <input autocomplete='off' type="text" name="AssuranceNom" placeholder="Insurance Name" />
       <input autocomplete='off' type="text" name="AssuranceNumero" placeholder="Insurance Number" />
       <input autocomplete='off' type="text" name="AssuranceCaisse" placeholder="Insurance Fund"/>

      
       <input type="button" name="previous" class="previous action-button" value="Précédent" />
       <button type="submit" class="btn btn-success"> Enregistrer </button> 
     </fieldset>
   </form>

    </div>
    
</body>
</html>