<?php

    $csv = array();
    $i = 0;
    if(($handle = fopen("juryT2_ubuntu.csv", "r")) !== FALSE)
    //if(($handle = fopen("juryT2.csv", "r")) !== FALSE)
    {
        while(($data = fgetcsv($handle, 1000, "\t")) !== FALSE)
        {
            $i++; 
                if($i < 13){
                    continue;
                }
                if ($i > 52){
                    continue;
                }
                $csv[] = $data;
                
        }
    }
    fclose($handle);

    
    require_once "createTableJuryT2.php";


    for ($i=0 ; $i < count($csv); $i++)
    { 
        if ($i == 21)
        {
            $i++;
        }
        $lineData = $csv[$i];
        for ($j=0 ; $j < count($lineData); $j++)
        { 
            if(!$lineData[$j]){
                $lineData[$j] = '000'; 
            }
            $lineData[$j] = str_replace(',', '.', $lineData[$j]);
            $lineData[$j] = str_replace(' ', '', $lineData[$j]);
            $lineData[$j] = str_replace('\r', '', $lineData[$j]);
            $lineData[$j] = str_replace('\n', '', $lineData[$j]);
        }
        /*echo '<pre>';
        print_r($lineData);
        echo '</pre>'; */
        $insert_data = "INSERT INTO juryT2 (idEtudiant, nom , prenom, dettes, credits,redoublants,        
        anneeMoyenne,anneeResultat, anneeTOEIC,TOEICblanc1, TOEICblanc2, TOEICofficiel, 
        anglaisResultats, bddTP, bddCoef, bdd, semP, semTP, semCoef, sem,
        ueOutilsInformatiques2,ueOutilsInformatiques2Reultats,antennesP, antennesTP,
        antennesCoef, antennes, theorieInofrmationP, theorieInofrmationCoef, 
        theorieInofrmation,tOptP, tOptTP, tOptCoef, tOpt,ueTelecom2, ueTelecom2Resultats,
        tnsP , tnsTP, tnsCoef, tns, tsaP, tsaTP ,tsaCoef, tsa,ueTraitementSignal2 , 
        ueTraitementSignal2Resultats,anglaisP,anglaisCC, anglaisCoef, anglais, ueLanguesVivante1,
        ueLanguesVivante1Resultat, introAnalyseDonneesTP ,introAnalyseDonneesCoef, 
        introAnalyseDonnees, ethiqueP,ethiqueCoef, ethique,introSociologieP , 
        introSociologieCoef, introSociologie,ueCultureEntreprise, ueCultureEntrepriseResultat,
        s3Moyenne ,s3Resultat, javaProjet, javaTP, javaCoef, java,web2TP, web2Coef, 
        web2, ueOutilsInformatiques3, ueOutilsInformatiques3Resultats,modelMarkovP,
        modelMarkovCoef, modelMarkov,routageTP, routageCoef, routage, rtd2P, rtd2TP,
        rtd2Coef, rtd2,ueReseaux2, ueReseaux2Resultat, commNumP1, commNumP2, commNumTP,
        commNumCoef, commNum, fhlsP, fhlsCoef, fhls, artP, artCoef, art, ueTelecom3, 
        ueTelecom3Resultats,cdceP , cdceTP, cdceCoef, cdce,dspTP ,dspCoef, dsp ,
        ueTraitementSignal3 , ueTraitementSignal3Resultats, rapportProjet, exposeProjet, 
        TPProjet, projetThematique, ueProjetThematique, ueProjetThematiqueResultat, anglais1CC,
        anglais1,anglaisRenforceCC, anglaisRenforceCoef , 
        anglaisRenforce,ouvertureLinguistiqueCC, ouvertureLinguistiqueCoef, 
        ouvertureLinguistique, anglais2, optionAnglais, ueLanguesVivante8, ueLanguesVivante8Resultat,
        projetCreationEntrepriseCoef , projetCreationEntrepriseCC, projetCreationEntreprise, 
        qseCoef, qseP, qse, santeSecuriteTravailP , santeSecuriteTravailCoef, 
        santeSecuriteTravail, ueCultureEntreprise8, ueCultureEntreprise8Resultat,
        s4Moyenne ,s4Resultat, commentaires, dettesSpeT2, remarques)
        VALUES ( '$lineData[2]', ' $lineData[0]', ' $lineData[1]','$lineData[3]', ' $lineData[4]', ' $lineData[5]',
        '$lineData[6]', ' $lineData[7]', ' $lineData[8]','$lineData[9]', ' $lineData[10]', ' $lineData[11]',
        '$lineData[12]',' $lineData[13]', ' $lineData[14]','$lineData[15]', ' $lineData[16]', ' $lineData[17]',
        '$lineData[18]', ' $lineData[19]', ' $lineData[20]','$lineData[21]', ' $lineData[22]', ' $lineData[23]',
        '$lineData[24]', ' $lineData[25]', ' $lineData[26]','$lineData[27]', ' $lineData[28]', ' $lineData[29]',
        '$lineData[30]', ' $lineData[31]', ' $lineData[32]','$lineData[33]', ' $lineData[34]', ' $lineData[35]',
        '$lineData[36]', ' $lineData[37]', ' $lineData[38]','$lineData[39]', ' $lineData[40]', ' $lineData[41]',
        '$lineData[42]', ' $lineData[43]', ' $lineData[44]','$lineData[45]', ' $lineData[46]', ' $lineData[47]',
        '$lineData[48]', ' $lineData[49]', ' $lineData[50]','$lineData[51]', ' $lineData[52]', ' $lineData[53]',
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
        '$lineData[136]', ' $lineData[137]', ' $lineData[138]','$lineData[148]',
        '$lineData[149]')";
?>
    <br>
<?php
        var_dump($lineData);
        $data_check = mysqli_query($con, $insert_data); 
        
        //die();
    }

?>