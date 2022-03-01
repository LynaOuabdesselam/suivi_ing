<?php
    require_once "createTableStudent.php";
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
    //fclose($handle);

    for ($i=0 ; $i < count($csv); $i++)
    { 
        if ($i == 21)
        {
            $i++;
        }
        $lineData = $csv[$i];
        $insert_data = "INSERT INTO students (idEtudiant, nom , prenom) 
        VALUES ( '$lineData[2]', ' $lineData[0]', ' $lineData[1]')";

        $data_check = mysqli_query($con, $insert_data); 
        
    }

?>