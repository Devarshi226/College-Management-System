<?php
    
    // Create connection
    
    $db_conn = mysqli_connect('localhost:3307', 'root','', 'cms');

    if (!$db_conn) {
       
        die("Connection failed: " . mysqli_connect_error());
    }else{
       
    }  
    
    
?>

