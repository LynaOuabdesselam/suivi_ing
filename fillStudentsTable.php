<?php
    for ($i=0 ; $i < count($csv); $i++)
    { 
        if ($i == 21)
        {
            $i++;
        }
        $lineData = $csv[$i];
        echo '<pre>';
        print_r($lineData);
        echo '</pre>';
        $insert_data = "INSERT INTO juryT2 (idEtudiant, nom , prenom, dettes, credits,redoublants,
        anneeMoyenne,anneeResultat, anneeTOEIC,TOEICblanc1, TOEICblanc2, TOEICofficiel, 
        anglaisResultats, bddTP, bddCoef, bdd, semP, semTP, semCoef, sem,
        ueOutilsInformatiques2,ueOutilsInformatiques2Reultats,antennesP, antennesTP,
        antennesCoef, antennes, theorieInofrmationP, theorieInofrmationCoef, 
        theorieInofrmation,tOptP, tOptTP, tOptCoef, tOpt,ueTelecom2, ueTelecom2Resultats,
        tnsP , tnsTP, tnsCoef, tns, tsaP, tsaTP ,tsaCoef, tsa,ueTraitementSignal2 , 
        ueTraitementSignal2Resultats,anglaisP ) 
        VALUES ( '$lineData[2]', ' $lineData[0]', ' $lineData[1]','$lineData[3]', ' $lineData[4]', ' $lineData[5]',
        '$lineData[6]', ' $lineData[7]', ' $lineData[8]','$lineData[9]', ' $lineData[10]', ' $lineData[11]',
        '$lineData[12]',' $lineData[13]', ' $lineData[14]','$lineData[15]', ' $lineData[16]', ' $lineData[17]',
        '$lineData[18]', ' $lineData[19]', ' $lineData[20]','$lineData[21]', ' $lineData[22]', ' $lineData[23]',
        '$lineData[24]', ' $lineData[25]', ' $lineData[26]','$lineData[27]', ' $lineData[28]', ' $lineData[29]',
        '$lineData[30]', ' $lineData[31]', ' $lineData[32]','$lineData[33]', ' $lineData[34]', ' $lineData[35]',
        '$lineData[36]', ' $lineData[37]', ' $lineData[38]','$lineData[39]', ' $lineData[40]', ' $lineData[41]',
        '$lineData[42]', ' $lineData[43]', ' $lineData[44]','$lineData[45]')";
        
        $data_check = mysqli_query($con, $insert_data); 
        var_dump($lineData[$i]);
        die();
    }
?>