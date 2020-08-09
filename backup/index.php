<?php 
if(array_key_exists("submit",$_POST))
{
    include("php/uservalidation.php");
    
}

?>
<html>
<body>
    
	   <!--  con = DriverManager.getConnection("jdbc:mysql://localhost:3306/db?autoReconnect=true&useSSL=false","root", "12345678") -->
    <form  method="post" >
    
        <input type="text" name="name">name</input>
        <input type="text" name="password">pass</input>
        <input type="submit" name ="submit">this</input>
    </form>
    
    </body>
</html> 
<?php
echo "sdfvsaf89856";


?>