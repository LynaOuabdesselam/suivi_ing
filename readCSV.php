<?php
$csv = array();
$i = 0;
if(($handle = fopen("juryT2.csv", "r")) !== FALSE)
{
   while(($data = fgetcsv($handle, 1000, "\t")) !== FALSE)
   {
    $i++; 
        if($i < 13){
            continue;
        }
        $csv[] = $data;
        
   }
   
}

// $csv = str_getcsv(file_get_contents('juryT2.csv'));

// echo '<pre>';
// print_r($csv);
// echo '</pre>';

echo '<pre>';
print_r($csv);
echo '</pre>';

?>