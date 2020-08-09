<?php 
//print_r($_POST);
if(array_key_exists("submit",$_POST))
{   include "conn.php"; 
//print_r($_POST);
    include "uservalidation.php";
    
}
?>


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
   background-image: url("images/notes-background.png");
  background-repeat: no-repeat;
   background-size: 100%;

  
}
.container-mid{
    width:30%;
    margin:35%;
    margin-top: 10%; 
    
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<?php /*
 include "conn.php"; 
 
$name = $_POST['name'];
$password = $_POST['password'];
 echo $name ;
 
 $name = mysql_real_escape_string($name);
$query = mysql_query("SELECT username FROM notepad WHERE name='".$name."'");
 $conn->query($query);
 */
 ?>


<form method="POST" style="border:1px solid #ccc">
  <div class="container">
      <div class="container-mid ">
    <h1>Sign Up</h1>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" name="name" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

   
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
  
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
 </div>
  </div>
 
</form>

</body>
</html>
