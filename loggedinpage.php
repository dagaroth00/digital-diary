<?php

    session_start();
   // echo $_SESSION['name'];
    /// echo $_COOKIE['name'];
    if (array_key_exists("name", $_COOKIE) && $_COOKIE ['name']) {
        
        $_SESSION['name'] = $_COOKIE['name'];
        
    }

    if (array_key_exists("name", $_SESSION)) {
              
      include("conn.php");
      
     //  $query = "SELECT data FROM `notepad` WHERE name ='111' LIMIT 1";
    
      
     $query = "SELECT data FROM `notepad` WHERE name ='".mysqli_real_escape_string($conn, $_SESSION['name'])."' LIMIT 1";
      $row = mysqli_fetch_array(mysqli_query($conn, $query));
 
      $data = $row['data'];
    
      
    } else {
        
        header("Location: index.php");
        
    }
    
?>

<html>
   <head>
          <style type="text/css">
          
      .container {
      
            text-align: center;
            width: 400px;
      }
         
          
          #containerLoggedInPage {
              
              margin-top: 60px;
              
          }
          
          
      html { 
          
          background: url(background.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          
          }
          
          body {
              
              background: none;
              color: #FFF;
              
          }
          .btn {
              float : right;
              background-color: #4CAF50; /* Green */
              border: none;
              color: white;
              padding: 5px 10px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              -webkit-transition-duration: 0.4s; /* Safari */
              transition-duration: 0.4s;
              cursor: pointer;
            }
            
            .btn {
              background-color: white; 
              color: black; 
              border: 2px solid #4CAF50;
            }
            
            .btn:hover {
              background-color: #4CAF50;
              color: white;
            }
            .name{
          font-family: Arial, Helvetica, sans-serif;
          color:black;
                float :left ;
                
            }   
            
             
         #diary {
              
              width: 100%;
              height: 100%;
              
          }
          
      </style>
 
    </head> 
    
    
    <body>
        <div>
            <div class="name"><h1>WELCOME <?php echo $_SESSION['name']; ?></h1></div>
        <div>
         <a href ='index.php?logout=1'>
        <button class="btn btn-success-outline" type="submit">Logout</button></a>
        </div>
        
         <textarea id="diary" class="form-control"><?php echo $data; ?></textarea>
    </div>
        </div>
    
    <?php
    
    include("ajax.php");
?>
    </body>
</html>
