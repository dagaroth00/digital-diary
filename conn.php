<?php 

$dbhost = "localhost";
$dbuser = "";  
$dbpass = "";
$db = "";
    $conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$db);

        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
        else{
            
       //     echo "database connected ";
        }
    
    /*$conn = new mysqli($dbhost, $dbuser, $dbpass,$db)
        OR die('cant connect '); */
  $insert = "INSERT INTO notepad values('this123','sid1','okkkkk')";
  $conn->query($insert);
//mysqli_query($conn,"$insert");


//echo "New record has id: " . mysqli_insert_id($conn);



?>