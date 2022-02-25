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

    $insert_data = "INSERT INTO juryT2 () values ()";
    $data_check = mysqli_query($con, $insert_data);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }

     $insert_data = "INSERT INTO user (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data); 
        if($data_check){
            
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }

}

?>