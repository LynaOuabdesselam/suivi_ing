<?php 
    $con = mysqli_connect('localhost', 'root', '', 'pvT2')
    if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";
?>
