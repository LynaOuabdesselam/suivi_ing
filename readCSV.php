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
                if ($i > 51){
                    continue;
                }
                $csv[] = $data;
                
        }
    }
    //fclose($handle);

    for ($i=0 ; $i < count($csv); $i++)
    { 
        if ($i == 21)
        {
            $i++;
        }
        $lineData = $csv[$i];
        $insert_data = "INSERT INTO students (nom , prenom, idEtudiant) 
        VALUES ( '$lineData[0]', ' $lineData[1]', ' $lineData[2]')";

        $data_check = mysqli_query($con, $insert_data); 
        
    }

?>