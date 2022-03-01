<?php 
  $con = mysqli_connect('localhost', 'root', '', 'applietudiant');
  if(mysqli_connect_error())
      echo "Connection Error.";
  else
      echo "Database Connection Successfully.";

  // sql to create table
  $paash="DROP TABLE juryT2";
  $sql = "CREATE TABLE IF NOT EXISTS juryT2 (
  idEtudiant INT(8) NOT NULL PRIMARY KEY,
  nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  dettes VARCHAR(3),
  credits VARCHAR(6),
  redoublants VARCHAR(5),
  anneeMoyenne VARCHAR(5),
  anneeResultat VARCHAR(7),
  anneeTOEIC VARCHAR(5),
  TOEICblanc1 VARCHAR(5),
  TOEICblanc2 VARCHAR(5),
  TOEICofficiel VARCHAR(5),
  anglaisResultats VARCHAR(6),
  bddTP VARCHAR(6),
  bddCoef VARCHAR(6),
  bdd VARCHAR(6),
  semP VARCHAR(6),
  semTP VARCHAR(6),
  semCoef VARCHAR(6),
  sem VARCHAR(6),
  ueOutilsInformatiques2 VARCHAR(6),
  ueOutilsInformatiques2Reultats VARCHAR(5),
  antennesP VARCHAR(6),
  antennesTP VARCHAR(6),
  antennesCoef VARCHAR(6),
  antennes VARCHAR(6),
  theorieInofrmationP VARCHAR(6),
  theorieInofrmationCoef VARCHAR(6),
  theorieInofrmation VARCHAR(6),
  tOptP VARCHAR(6),
  tOptTP VARCHAR(6),
  tOptCoef VARCHAR(6),
  tOpt VARCHAR(6),
  ueTelecom2 VARCHAR(6),
  ueTelecom2Resultats VARCHAR(5),
  tnsP VARCHAR(6),
  tnsTP VARCHAR(6),
  tnsCoef VARCHAR(6),
  tns VARCHAR(6),
  tsaP VARCHAR(6),
  tsaTP VARCHAR(6),
  tsaCoef VARCHAR(6),
  tsa VARCHAR(6),
  ueTraitementSignal2 VARCHAR(6),
  ueTraitementSignal2Resultats VARCHAR(5),
  anglaisP VARCHAR(6),
  anglaisCC VARCHAR(6),
  anglaisCoef VARCHAR (30),
  anglais VARCHAR (30),
  ueLanguesVivante1 VARCHAR (30),
  ueLanguesVivante1Resultat VARCHAR(5), 
  introAnalyseDonneesTP VARCHAR (30),
  introAnalyseDonneesCoef  VARCHAR (30),
  introAnalyseDonnees VARCHAR (30),
  ethiqueP VARCHAR (30),
  ethiqueCoef VARCHAR (30),
  ethique VARCHAR (30),
  introSociologieP VARCHAR (30),
  introSociologieCoef VARCHAR (30),
  introSociologie VARCHAR (30),
  ueCultureEntreprise VARCHAR (30),
  ueCultureEntrepriseResultat VARCHAR(5),
  s3Moyenne VARCHAR (30),
  s3Resultat VARCHAR(5), 
  javaProjet VARCHAR (30),
  javaTP  VARCHAR (30),
  javaCoef VARCHAR (30),
  java  VARCHAR (30),
  web2TP VARCHAR (30),
  web2Coef VARCHAR (30),
  web2 VARCHAR (30),
  ueOutilsInformatiques3 VARCHAR (30),
  ueOutilsInformatiques3Resultats VARCHAR(5),
  modelMarkovP VARCHAR (30),
  modelMarkovCoef VARCHAR (30),
  modelMarkov VARCHAR (30),
  routageTP VARCHAR (30),
  routageCoef VARCHAR (30),
  routage VARCHAR (30),
  rtd2P VARCHAR (30),
  rtd2TP VARCHAR (30),
  rtd2Coef VARCHAR (30),
  rtd2 VARCHAR (30),
  ueReseaux2 VARCHAR (30),
  ueReseaux2Resultat VARCHAR(5),
  commNumP1 VARCHAR (30),
  commNumP2 VARCHAR (30),
  commNumTP VARCHAR (30),
  commNumCoef VARCHAR (30),
  commNum VARCHAR (30),
  fhlsP VARCHAR (30),
  fhlsCoef VARCHAR (30),
  fhls VARCHAR (30),
  artP VARCHAR (30),
  artCoef VARCHAR (30),
  art VARCHAR (30),
  ueTelecom3 VARCHAR (30),
  ueTelecom3Resultats VARCHAR(5),
  cdceP VARCHAR (30),
  cdceTP VARCHAR (30),
  cdceCoef VARCHAR (30),
  cdce VARCHAR(10),
  dspTP FLOAT(4,2) CHECK (dspTP <= 20),
  dspCoef VARCHAR(5),
  dsp FLOAT(4,2) CHECK (dsp <= 20),
  ueTraitementSignal3 VARCHAR(10),
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
  qseCoef VARCHAR(10),
  qse FLOAT(4,2) CHECK (qse <= 20), 
  santeSecuriteTravailP FLOAT(4,2) CHECK (santeSecuriteTravailP <= 20),
  santeSecuriteTravailCoef VARCHAR(10), 
  santeSecuriteTravail FLOAT(4,2) CHECK (santeSecuriteTravail <= 20),
  ueCultureEntreprise8 FLOAT(4,2) CHECK (ueCultureEntreprise8 <= 20),
  ueCultureEntreprise8Resultat VARCHAR(5),
  s4Moyenne FLOAT(4,2) CHECK (s4Moyenne <= 20),
  s4Resultat VARCHAR(5), 
  commentaires VARCHAR(30), 
  dettesSpeT2 VARCHAR(30),  
  remarques VARCHAR(30)
  )";

  if ($con->query($paash) === TRUE) {
    echo "Table juryT2 deleted successfully";
  } else {
    echo "Error deleting table: " . $con->error;
  }
  
  if ($con->query($sql) === TRUE) {
    echo "Table juryT2 created successfully";
  } else {
    echo "Error creating table: " . $con->error;
  }



?>
