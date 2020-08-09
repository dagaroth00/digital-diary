<?php

    session_start();

    if (array_key_exists("data", $_POST)) {
         
        include("conn.php");
        
        $query = "UPDATE `notepad` SET `data` = '".mysqli_real_escape_string($conn , $_POST['data'])."' WHERE name = '".mysqli_real_escape_string($conn, $_SESSION['name'])."' LIMIT 1";
        
        mysqli_query($conn, $query);
        
    }

?>
