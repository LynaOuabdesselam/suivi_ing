<?php
$csv = array();
$i = 0;
if(($handle = fopen("juryT2.csv", "r")) !== FALSE)
{
   while(($data = fgetcsv($handle, 1000, ";")) !== FALSE)
   {
    $i++; 
        if($i < 13){
            continue;
        }
        $csv[] = $data;      
   }
   echo count($csv);
}
echo '<pre>';
 print_r($csv);
 echo '</pre>';
 require_once "createTablenew.php";
     for ($i=0 ; $i < count($csv); $i++)
     {
        if ($i == 21)
        {
            $i++;
        }
        $lineData = $csv[$i];
        $insert_data = "INSERT INTO juryT2 ( nom , prenom, idEtudiant , dettes, credits, redoublants,
        anneeMoyenne,anneeResultat, anneeTOEIC,TOEICblanc1, TOEICblanc2, TOEICofficiel, 
        anglaisResultats, bddTP, bddCoef, bdd, semP, semTP, semCoef, sem,
        ueOutilsInformatiques2,ueOutilsInformatiques2Reultats,antennesP, antennesTP,
        antennesCoef, antennes, theorieInofrmationP, theorieInofrmationCoef, 
        theorieInofrmation,tOptP, tOptTP, tOptCoef, tOpt,ueTelecom2, ueTelecom2Resultats,
        tnsP , tnsTP, tnsCoef, tns, tsaP, tsaTP ,tsaCoef, tsa,ueTraitementSignal2 , 
        ueTraitementSignal2Resultats,anglaisP , anglaisCC, anglaisCoef, anglais, ueLanguesVivante1,
        ueLanguesVivante1Resultat, introAnalyseDonneesTP ,introAnalyseDonneesCoef, 
        introAnalyseDonnees, ethiqueP,ethiqueCoef, ethique,introSociologieP , 
        introSociologieCoef, introSociologie,ueCultureEntreprise, ueCultureEntrepriseResultat,
        s3Moyenne ,s3Resultat, javaProjet, javaTP, javaCoef, java,web2TP, web2Coef, 
        web2, ueOutilsInformatiques3, ueOutilsInformatiques3Resultats,modelMarkovP,
        modelMarkovCoef, modelMarkov,routageTP, routageCoef, routage, rtd2P, rtd2TP,
        rtd2Coef, rtd2,ueReseaux2, ueReseaux2Resultat, commNumP1, commNumP2, commNumTP,
        commNumCoef, commNum, fhlsP, fhlsCoef, fhls, artP, artCoef, art, ueTelecom3, 
        ueTelecom3Resultats,cdceP , cdceTP, cdceCoef, cdce,dspTP ,dspCoef, dsp,
        ueTraitementSignal3 , ueTraitementSignal3Resultats, rapportProjet, exposeProjet, 
        TPProjet, projetThematique, ueProjetThematique, ueProjetThematiqueResultat, anglais1CC,
        anglais1,anglaisRenforceCC, anglaisRenforceCoef , 
        anglaisRenforce,ouvertureLinguistiqueCC, ouvertureLinguistiqueCoef, 
        ouvertureLinguistique, anglais2, optionAnglais, ueLanguesVivante8, ueLanguesVivante8Resultat,
        projetCreationEntrepriseCoef , projetCreationEntrepriseCC, projetCreationEntreprise, 
        qseP, qseCoef, qse, santeSecuriteTravailP , santeSecuriteTravailCoef, 
        santeSecuriteTravail, ueCultureEntreprise8, ueCultureEntreprise8Resultat,
        s4Moyenne ,s4Resultat, commentaires, dettesSpeT2, remarques,reg_date
         ) 

        VALUES ( '$lineData[0]', ' $lineData[1]', ' $lineData[2]','$lineData[3]', ' $lineData[4]', ' $lineData[5]',
        '$lineData[6]', ' $lineData[7]', ' $lineData[8]','$lineData[9]', ' $lineData[10]', ' $lineData[11]',
        '$lineData[12]',' $lineData[13]', ' $lineData[14]','$lineData[15]', ' $lineData[16]', ' $lineData[17]',
        '$lineData[18]', ' $lineData[19]', ' $lineData[20]','$lineData[21]', ' $lineData[22]', ' $lineData[23]',
        '$lineData[24]', ' $lineData[25]', ' $lineData[26]','$lineData[27]', ' $lineData[28]', ' $lineData[29]',
        '$lineData[30]', ' $lineData[31]', ' $lineData[32]','$lineData[33]', ' $lineData[34]', ' $lineData[35]',
        '$lineData[36]', ' $lineData[37]', ' $lineData[38]','$lineData[39]', ' $lineData[40]', ' $lineData[41]',
        '$lineData[42]', ' $lineData[43]', ' $lineData[44]','$lineData[45]', ' $lineData[46]', ' $lineData[47]',
        '$lineData[48]', ' $lineData[49]', ' $lineData[50]'
        
        ,'$lineData[51]', ' $lineData[52]', ' $lineData[53]',
        '$lineData[54]', ' $lineData[55]', ' $lineData[56]','$lineData[57]', ' $lineData[58]', ' $lineData[59]',
        
        '$lineData[60]', ' $lineData[61]', ' $lineData[62]','$lineData[63]', ' $lineData[64]', ' $lineData[65]',
        '$lineData[66]', ' $lineData[67]', ' $lineData[68]','$lineData[69]', ' $lineData[70]', ' $lineData[71]',
        '$lineData[72]', ' $lineData[73]', ' $lineData[74]','$lineData[75]', ' $lineData[76]', ' $lineData[77]',
        '$lineData[78]', ' $lineData[79]', ' $lineData[80]','$lineData[81]', ' $lineData[82]', ' $lineData[83]',
        '$lineData[84]', ' $lineData[85]', ' $lineData[86]','$lineData[87]', ' $lineData[88]', ' $lineData[89]',

        '$lineData[90]', ' $lineData[91]', ' $lineData[92]','$lineData[93]', ' $lineData[94]', ' $lineData[95]',
        '$lineData[96]', ' $lineData[97]', ' $lineData[98]','$lineData[99]', ' $lineData[100]', ' $lineData[101]',
        '$lineData[102]', ' $lineData[103]', ' $lineData[104]','$lineData[105]', ' $lineData[106]', ' $lineData[107]',
        '$lineData[108]', ' $lineData[109]', ' $lineData[110]', ' $lineData[111]',
        '$lineData[112]', ' $lineData[113]', ' $lineData[114]','$lineData[115]', ' $lineData[116]', ' $lineData[117]',
        '$lineData[118]', ' $lineData[119]', ' $lineData[120]','$lineData[121]', ' $lineData[122]', ' $lineData[123]',
        '$lineData[124]', ' $lineData[125]', ' $lineData[126]','$lineData[127]', ' $lineData[128]', ' $lineData[129]',

        '$lineData[130]', ' $lineData[131]', ' $lineData[132]','$lineData[133]', ' $lineData[134]', ' $lineData[135]',
        '$lineData[136]', ' $lineData[137]', ' $lineData[138]','$lineData[139]',
        '$lineData[140]', ' $lineData[141]'
 )";
        $data_check = mysqli_query($con, $insert_data);   
     }




,
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
  remarques VARCHAR(30)

?>


