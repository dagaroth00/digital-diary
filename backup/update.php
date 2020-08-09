<?php

    session_start();

    if (array_key_exists("content", $_POST)) {
        
        include("conn.php");
        
        $query = "UPDATE `notepad` SET `data` = '".mysqli_real_escape_string($link, $_POST['data'])."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['name'])." LIMIT 1";
        
        mysqli_query($conn, $query);
        
    }

?>
