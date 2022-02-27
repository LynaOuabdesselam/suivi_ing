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
  idEtudiant INT(8) CHECK (idEtudiant > 0),
  dettes VARCHAR(3),
  credits VARCHAR(10),
  redoublants VARCHAR(10),
  anneeMoyenne VARCHAR(10),
  anneeResultat VARCHAR(7),
  anneeTOEIC VARCHAR(10), 
  TOEICblanc1 VARCHAR(10),  
  TOEICblanc2 VARCHAR(10), 
  TOEICofficiel VARCHAR(10), 
  anglaisResultats VARCHAR(3),
  bddTP VARCHAR(10), 
  bddCoef VARCHAR(10), 
  bdd VARCHAR(10),
  semP VARCHAR(10),
  semTP VARCHAR(10),
  semCoef  VARCHAR(10),
  sem VARCHAR(10),
  ueOutilsInformatiques2 VARCHAR(10),
  ueOutilsInformatiques2Reultats VARCHAR(3),
  antennesP  VARCHAR(10),
  antennesTP VARCHAR(10),
  antennesCoef VARCHAR(10),
  antennes VARCHAR(10),
  theorieInofrmationP VARCHAR(10),
  theorieInofrmationCoef VARCHAR(10),
  theorieInofrmation VARCHAR(10),
  tOptP VARCHAR(10),
  tOptTP VARCHAR(10),

  tOptCoef VARCHAR(10),
  tOpt VARCHAR(10),
  ueTelecom2 VARCHAR(10),
  ueTelecom2Resultats VARCHAR(10),
  tnsP  VARCHAR(10),
  tnsTP VARCHAR(10),
  tnsCoef VARCHAR(10),
  tns VARCHAR(10),
  tsaP VARCHAR(10),
  tsaTP VARCHAR(10),
  tsaCoef VARCHAR(10),
  tsa VARCHAR(10),
  ueTraitementSignal2 VARCHAR(10),
  ueTraitementSignal2Resultats VARCHAR(10),
  anglaisP VARCHAR(10),
  anglaisCC VARCHAR(20),
  anglaisCoef VARCHAR(10),
  anglais VARCHAR(10),
  ueLanguesVivante1 VARCHAR(10),
  ueLanguesVivante1Resultat VARCHAR(10),

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
  fhlsCoef FLOAT(3,2) DEFAULT '1.00' ,
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
  dspCoef FLOAT(3,2) DEFAULT '1.00' ,
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
  qseCoef FLOAT(3,2)  DEFAULT '1.00' ,
  qse FLOAT(4,2) CHECK (qse <= 20), 
  santeSecuriteTravailP FLOAT(4,2) CHECK (santeSecuriteTravailP <= 20),
  santeSecuriteTravailCoef FLOAT(3,2)  DEFAULT '1.00' , 
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