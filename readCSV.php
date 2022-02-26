<?php
$csv = array();
$i = 0;
if(($handle = fopen("juryT2.csv", "r")) !== FALSE)
{
   while(($data = fgetcsv($handle, 1000, "\t")) !== FALSE)
   {
            $i++; 
                if($i < 12){
                    continue;
                }
                $csv[] = $data;    
   }
}

    require_once "createTableJuryT2.php";

    for (i=0 ; i < count($csv); i++)
    {
        /* $lineData = "";
        for (j=0; j < count($csv[i]); j++)
        {
            $lineData = $lineData.",".$csv[i][j]; 

        } */
        $insert_data = "INSERT INTO juryT2 (

            $nom, $prenom, $idEtudiant/* , $dettes, $credits, $redoublants
            ,$anneeMoyenne,$anneeResultat, $anneeTOEIC,$TOEICblanc1, $TOEICblanc2, $TOEICofficiel, 
            $anglaisResultats, $bddTP, $bddCoef, $bdd, $semP, $semTP, $semCoef, $sem, 
            $ueOutilsInformatiques2,$ueOutilsInformatiques2Reultats,$antennesP, $antennesTP,
            $antennesCoef, $antennes, $theorieInofrmationP, $theorieInofrmationCoef, 
            $theorieInofrmation,$tOptP, $tOptTP, $tOptCoef, $tOpt,$ueTelecom2, $ueTelecom2Resultats,
            $tnsP , $tnsTP, $tnsCoef, $tns, $tsaP, $tsaTP ,$tsaCoef, $tsa,$ueTraitementSignal2 , 
            $ueTraitementSignal2Resultats,$anglaisP , $anglaisCC, $anglaisCoef, $anglais,$ueLanguesVivante1, 
            $ueLanguesVivante1Resultat, $introAnalyseDonneesTP ,$introAnalyseDonneesCoef, 
            $introAnalyseDonnees, $ethiqueP,$ethiqueCoef, $ethique,$introSociologieP , 
            $introSociologieCoef, $introSociologie,$ueCultureEntreprise, $ueCultureEntrepriseResultat,
            $s3Moyenne ,$s3Resultat, $javaProjet, $javaTP, $javaCoef, $java,$web2TP, $web2Coef, 
            $web2, $ueOutilsInformatiques3, $ueOutilsInformatiques3Resultats,$modelMarkovP,
            $modelMarkovCoef, $modelMarkov,$routageTP, $routageCoef, $routage, $rtd2P, $rtd2TP
            , $rtd2Coef, $rtd2,$ueReseaux2, $ueReseaux2Resultat, $commNumP1, $commNumP2, $commNumTP
            , $commNumCoef, $commNum,$fhlsP, $fhlsCoef, $fhls, $artP, $artCoef, $art,$ueTelecom3, 
            $ueTelecom3Resultats,$cdceP , $cdceTP, $cdceCoef, $cdce,$dspTP ,$dspCoef, $dsp,
            $ueTraitementSignal3 , $ueTraitementSignal3Resultats, $rapportProjet, $exposeProjet, 
            $TPProjet, $projetThematique, $ueProjetThematique, $ueProjetThematiqueResultat, $anglais1CC,
            $anglais1,$anglaisRenforceCC, $anglaisRenforceCoef, 
            $anglaisRenforce,$ouvertureLinguistiqueCC, $ouvertureLinguistiqueCoef, 
            $ouvertureLinguistique, $anglais2,$option,$ueLanguesVivante8, $ueLanguesVivante8Resultat,
            $projetCreationEntrepriseCoef , $projetCreationEntrepriseCC, $projetCreationEntreprise, 
            $qseP, $qseCoef, $qse, $santeSecuriteTravailP , $santeSecuriteTravailCoef, 
            $santeSecuriteTravail, $ueCultureEntreprise8, $ueCultureEntreprise8Resultat,
            $s4Moyenne ,$s4Resultat, $commentaires, $dettesSpeT2, $remarques */

        ) values (
            $csv[i][0] , $csv[i][1], $csv[i][2]
        )";

        $data_check = mysqli_query($con, $insert_data); 
        if($data_check){
            
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
        
    }

}

?>