<!DOCTYPE html>    
<html>    
<head>    
<title>Login</title>    
<link rel= "stylesheet" href="../style/style_register.css">  
</head>    
<body>    
<h2>Login Page</h2><br>          
  
        <a href="../idex1.php">Home</a><br>  
        
        
        <form action="../php_scripts/LoginScript.php" method="POST">   
        <label for = "username">Meno</label>
        <input type = "text" name="username" id = "username">
        <br>

        <label for = "password">Heslo</label>
        <input type = "password" name="password" id = "password">
        <br>
        <input type="submit" value = "Prihlás">
        </form> 
   
</body>    
</html> 

