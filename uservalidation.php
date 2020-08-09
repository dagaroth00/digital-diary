<?php

//session_start();
 if (1) {
//echo "this is it";
  $query = "SELECT name FROM `notepad` WHERE name = '".mysqli_real_escape_string($conn, $_POST['name'])."' LIMIT 1";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0)
                { // echo "name is taken";
				    $error = " name is taken.";
                } else 
                {
                    $query = "INSERT INTO `notepad` (`name`, `password`,`data`) VALUES ('".mysqli_real_escape_string($conn, $_POST['name'])."', '".mysqli_real_escape_string($conn, $_POST['password'])."','')";

                    if (!mysqli_query($conn, $query)) {
                    echo    "<p>Could not sign you up - please try again later.</p>";
                    echo $conn->error ;
                        $error = "<p>Could not sign you up - please try again later.</p>";

                    } else
                    {
                //        echo "in update";

  //                      $query = "UPDATE `notepad` SET password = '".md5(md5(mysqli_insert_id($conn)).$_POST['password'])."' WHERE name = ".mysqli_insert_id($conn)." LIMIT 1";
    
                        $query = "UPDATE `notepad` SET password = '".md5(md5(mysqli_insert_id($conn)).$_POST['password'])."' WHERE name = '".mysqli_real_escape_string($conn, $_POST['name'])."' LIMIT 1";
    
    
                        
                        $id = mysqli_insert_id($conn);
                        $name = $_POST['name'];
                        mysqli_query($conn, $query);
             //           echo "<hr> $conn->error " ;
                        $_SESSION['name'] = $name;

                        if ($_POST['stayLoggedIn'] == '1') {

                            setcookie("name", $name, time() + 60*60*24*365);

                        } 
            //                echo "loged in";
                        header("Location: loggedinpage.php");
                    }
                } 
            } 
            
            
            //else {
              if(1){      
                    $query = "SELECT * FROM `notepad` WHERE name = '".mysqli_real_escape_string($conn, $_POST['name'])."'";
                
                    $result = mysqli_query($conn, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {
                        
                       // $hashedPassword = md5(md5($row['id']).$_POST['password']);
                          $hashedPassword = md5(md5(0).$_POST['password']);
                      
                        if ($hashedPassword == $row['password']) 
                        {
                            
                            $_SESSION['name'] = $row['name'];
                            
                          //  echo $_SESSION['name'] ;
                           
                            if (isset($_POST['stayLoggedIn']) AND $_POST['stayLoggedIn'] == '1') 
                            {

                                setcookie("name", $row['name'], time() + 60*60*24*365);
                            //echo $_COOKIE['name'];
                            } 

                          header("Location: loggedinpage.php");
                                
                        } else
                        {
                          //  echo "hat email/password combination could not be found";
                            $error = "hat email/password combination could not be found.";
                        }
                    } else
                    {   // echo "hat email/password combination could not be found";
                        $error = "hat email/password combination could not be found.";
                    }
                }
            

?>