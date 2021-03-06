<?php 
//   $con = mysqli_connect('localhost', 'root', '', 'pvT2');
//   if(mysqli_connect_error())
//       echo "Connection Error.";
//   else
//       echo "Database Connection Successfully."  
      


      
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "", "juryT2");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE juryT2 (
    id  INT(6) PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  idEtudiant INT(8) NOT NULL,
  dettes VARCHAR(3),
  credits INT(2),
  redoublants VARCHAR(3),
  anneeMoyenne FLOAT(4,2) CHECK (anneeMoyenne <= 20),
  anneeResultat VARCHAR(7),
  anneeTOEIC INT(3) CHECK (anneeTOEIC <= 990), 
  TOEICblanc1 INT(3) CHECK (anneeTOEIC <= 990),  
  TOEICblanc2 INT(3) CHECK (anneeTOEIC <= 990), 
  TOEICofficiel INT(3) CHECK (anneeTOEIC <= 990), 
  anglaisResultats VARCHAR(3),

  bddTP FLOAT(4,2) CHECK (bddTP <= 20), 
  bddCoef FLOAT(3,2) CHECK (bddCoef <= 1), 
  bdd FLOAT(4,2) CHECK (bdd <= 20),
  semP FLOAT(4,2) CHECK (semP <= 20),
  semTP FLOAT(4,2) CHECK (semTP <= 20), 
  semCoef FLOAT(3,2) CHECK (semCoef <= 1), 
  sem FLOAT(4,2) CHECK (sem <= 20), 
  ueOutilsInformatiques2 FLOAT(4,2) CHECK (ueOutilsInformatiques2 <= 20),
  ueOutilsInformatiques2Reultats VARCHAR(3),
  antennesP FLOAT(4,2) CHECK (antennesP <= 20), 
  antennesTP FLOAT(4,2) CHECK (antennesTP <= 20),
  antennesCoef FLOAT(3,2) CHECK (antennesCoef <= 1),
  antennes FLOAT(4,2) CHECK (antennes <= 20), 
  theorieInofrmationP FLOAT(4,2) CHECK (theorieInofrmationP <= 20), 
  theorieInofrmationCoef FLOAT(3,2) CHECK (theorieInofrmationCoef <= 1),
  theorieInofrmation FLOAT(4,2) CHECK (theorieInofrmation <= 20),
  tOptP FLOAT(4,2) CHECK (tOptP <= 20),
  tOptTP FLOAT(4,2) CHECK (tOptTP <= 20),
  tOptCoef FLOAT(3,2) CHECK (tOptCoef <= 1),
  tOpt FLOAT(4,2) CHECK (tOpt <= 20),
  ueTelecom2 FLOAT(4,2) CHECK (ueTelecom2 <= 20),
  ueTelecom2Resultats VARCHAR(5),
  tnsP  FLOAT(4,2) CHECK (tnsP <= 20),
  tnsTP FLOAT(4,2) CHECK (tnsTP <= 20), 
  tnsCoef FLOAT(3,2) CHECK (tnsCoef <= 1),
  tns FLOAT(4,2) CHECK (tnsP <= 20), 
  tsaP FLOAT(4,2) CHECK (tsaP <= 20),
  tsaTP FLOAT(4,2) CHECK (tsaTP <= 20),
  tsaCoef FLOAT(3,2) CHECK (tsaCoef <= 1),
  tsa FLOAT(4,2) CHECK (tsa <= 20),
  ueTraitementSignal2 FLOAT(4,2) CHECK (ueTraitementSignal2 <= 20),
  ueTraitementSignal2Resultats VARCHAR(3),

  anglaisP FLOAT(4,2) CHECK (anglaisP <= 20), 
  anglaisCC FLOAT(4,2) CHECK (anglaisCC <= 20),
  anglaisCoef FLOAT(3,2) CHECK (anglaisCoef <= 1),
  anglais FLOAT(4,2) CHECK (anglais <= 20),
  ueLanguesVivante1 FLOAT(4,2) CHECK (ueLanguesVivante1 <= 20), 
  ueLanguesVivante1Resultat VARCHAR(5),
  introAnalyseDonneesTP FLOAT(4,2) CHECK (introAnalyseDonneesTP <= 20),
  introAnalyseDonneesCoef  FLOAT(3,2) CHECK (introAnalyseDonneesCoef <= 1),
  introAnalyseDonnees FLOAT(4,2) CHECK (introAnalyseDonnees <= 20),
  ethiqueP FLOAT(4,2) CHECK (ethiqueP <= 20),
  ethiqueCoef FLOAT(3,2) CHECK (ethiqueCoef <= 1),  
  ethique FLOAT(4,2) CHECK (ethique <= 20),
  introSociologieP FLOAT(4,2) CHECK (introSociologieP <= 20),
  introSociologieCoef FLOAT(3,2) CHECK (introSociologieCoef <= 1), 
  introSociologie FLOAT(4,2) CHECK (introSociologie <= 20),
  ueCultureEntreprise FLOAT(4,2) CHECK (ueCultureEntreprise <= 20),
  ueCultureEntrepriseResultat VARCHAR(5),

  s3Moyenne FLOAT(4,2) CHECK (s3Moyenne <= 20),
  s3Resultat VARCHAR(5), 
  javaProjet FLOAT(4,2) CHECK (javaProjet <= 20), 
  javaTP  FLOAT(4,2) CHECK (java <= 20), 
  javaCoef FLOAT(3,2) CHECK (javaCoef <= 20), 
  java  FLOAT(4,2) CHECK (java <= 20),
  web2TP FLOAT(4,2) CHECK (web2TP <= 20), 
  web2Coef FLOAT(3,2) CHECK (web2Coef <= 1), 
  web2 FLOAT(4,2) CHECK (web2 <= 20), 
  ueOutilsInformatiques3 FLOAT(4,2) CHECK (ueOutilsInformatiques3 <= 20), 
  ueOutilsInformatiques3Resultats VARCHAR(5),

  modelMarkovP FLOAT(4,2) CHECK (modelMarkovP <= 20),
  modelMarkovCoef FLOAT(3,2) CHECK (modelMarkovCoef <= 1),
  modelMarkov FLOAT(4,2) CHECK (modelMarkov <= 20),
  routageTP FLOAT(4,2) CHECK (routageTP <= 20), 
  routageCoef FLOAT(3,2) CHECK (routageCoef <= 1), 
  routage FLOAT(4,2) CHECK (routage <= 20), 
  rtd2P FLOAT(4,2) CHECK (rtd2P <= 20), 
  rtd2TP FLOAT(4,2) CHECK (rtd2TP <= 20), 
  rtd2Coef FLOAT(3,2) CHECK (rtd2Coef <= 1),  
  rtd2 FLOAT(4,2) CHECK (rtd2 <= 20), 
  ueReseaux2 FLOAT(4,2) CHECK (ueReseaux2 <= 20), 
  ueReseaux2Resultat VARCHAR(5),

  commNumP1 FLOAT(4,2) CHECK (commNumP1 <= 20),
  commNumP2 FLOAT(4,2) CHECK (commNumP2 <= 20),
  commNumTP FLOAT(4,2) CHECK (commNumTP <= 20),
  commNumCoef FLOAT(3,2) CHECK (commNumCoef <= 1),
  commNum FLOAT(4,2) CHECK (commNum <= 20),
  fhlsP FLOAT(4,2) CHECK (fhlsP <= 20), 
  fhlsCoef FLOAT(3,2) CHECK (fhls <= 1),
  fhls FLOAT(4,2) CHECK (fhls <= 20),
  artP FLOAT(4,2) CHECK (artP <= 20),
  artCoef FLOAT(3,2) CHECK (artCoef <= 1),
  art FLOAT(4,2) CHECK (art <= 20),
  ueTelecom3 FLOAT(4,2) CHECK (ueTelecom3 <= 20),
  ueTelecom3Resultats VARCHAR(5),
  cdceP FLOAT(4,2) CHECK (cdceP <= 20),
  cdceTP FLOAT(4,2) CHECK (cdceTP <= 20),
  cdceCoef FLOAT(3,2) CHECK (cdceCoef <= 1),
  cdce FLOAT(4,2) CHECK (cdce <= 20),
  dspTP FLOAT(4,2) CHECK (dspTP <= 20),
  dspCoef FLOAT(3,2) CHECK (dspCoef <= 1),
  dsp FLOAT(4,2) CHECK (dsp <= 20),
  ueTraitementSignal3 FLOAT(4,2) CHECK (ueTraitementSignal3 <= 20),
  ueTraitementSignal3Resultats VARCHAR(5),
  rapportProjet FLOAT(4,2) CHECK (rapportProjet <= 20),
  exposeProjet FLOAT(4,2) CHECK (exposeProjet <= 20),
  TPProjet FLOAT(4,2) CHECK (TPProjet <= 20),
  projetThematique FLOAT(4,2) CHECK (projetThematique <= 20),
  ueProjetThematique FLOAT(4,2) CHECK (ueProjetThematique <= 20),
  ueProjetThematiqueResultat VARCHAR(5),

  anglais1CC FLOAT(4,2) CHECK (anglaisCC <= 20),
  anglais1 FLOAT(4,2) CHECK (anglais1 <= 20),
  anglaisRenforceCC FLOAT(4,2) CHECK (anglaisRenforceCC <= 20),
  anglaisRenforceCoef FLOAT(3,2) CHECK (anglaisRenforceCoef <= 1),
  anglaisRenforce FLOAT(4,2) CHECK (anglaisRenforce <= 20),
  ouvertureLinguistiqueCC FLOAT(4,2) CHECK (ouvertureLinguistiqueCC <= 20), 
  ouvertureLinguistiqueCoef FLOAT(3,2) CHECK (ouvertureLinguistiqueCoef <= 1),
  ouvertureLinguistique FLOAT(4,2) CHECK (ouvertureLinguistique <= 20),
  anglais2 FLOAT(4,2) CHECK (anglais2 <= 20),
  optionAnglais VARCHAR(7),
  ueLanguesVivante8 FLOAT(4,2) CHECK (ueLanguesVivante8 <= 20),
  ueLanguesVivante8Resultat VARCHAR(5),

  projetCreationEntrepriseCoef FLOAT(3,2) CHECK (projetCreationEntrepriseCoef <= 1), 
  projetCreationEntrepriseCC FLOAT(4,2) CHECK (projetCreationEntrepriseCC <= 20),
  projetCreationEntreprise FLOAT(4,2) CHECK (projetCreationEntreprise <= 20),
  qseP FLOAT(4,2) CHECK (qseP <= 20),
  qseCoef FLOAT(3,2) CHECK (qseCoef <= 1),
  qse FLOAT(4,2) CHECK (qse <= 20), 
  santeSecuriteTravailP FLOAT(4,2) CHECK (santeSecuriteTravailP <= 20),
  santeSecuriteTravailCoef FLOAT(3,2) CHECK (santeSecuriteTravailCoef <= 1), 
  santeSecuriteTravail FLOAT(4,2) CHECK (santeSecuriteTravail <= 20),
  ueCultureEntreprise8 FLOAT(4,2) CHECK (ueCultureEntreprise8 <= 20),
  ueCultureEntreprise8Resultat VARCHAR(5),

  s4Moyenne FLOAT(4,2) CHECK (s4Moyenne <= 20),
  s4Resultat VARCHAR(5), 
  commentaires VARCHAR(30), 
  dettesSpeT2 VARCHAR(30),  
  remarques VARCHAR(30),

  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP


 
 
)";
if(mysqli_query($con, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 // Close connection
//mysqli_close($con);
?>

  