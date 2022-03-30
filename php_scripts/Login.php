<?php include('parts/header.php')?>
<!DOCTYPE html>    
<html>    
<head>    
<title>Login</title>    
<link rel= "stylesheet" href="../style/style_register.css">  
</head>    
<body>    
          
  
        <a href="../idex1.php">Home</a><br>  
        
        
        <form action="../php_scripts/LoginScript.php" method="POST">   
        <label class="custom" for = "username">Meno</label>
        <input type = "text" name="username" id = "username">
        <br>

        <label for = "password">Heslo</label>
        <input type = "password" name="password" id = "password">
        <br>
        <input type="submit" value = "Prihlás">
        </form> 
   
</body>    
</html> 

