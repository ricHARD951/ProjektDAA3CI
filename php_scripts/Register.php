<!DOCTYPE html>    
<html>    
<head>    
    <title>Register</title>    
</head>  
<link rel= "stylesheet" href="../style/style_register.css">  
<body>    
    <h2>Register Page</h2><br>    
    <body>       
   
            <a href="../idex1.php">Home</a>   
       

        <form action="../php_scripts/RegisterScript.php" method="POST">
        <label for = "username">Meno</label>
        <input type = "text" name="username" id = "username">
        <br>
        <label for = "email">Email</label>
        <input type = "mail" name="email" id = "email">
        <br>
        <label for = "password">Heslo</label>
        <input type = "password" name="password" id = "password">
        <br>
        <label for = "password_check">Zopakuj heslo</label>
        <input type = "password" name="password_check" id = "password_check">
        <br>
        <input type="submit" value = "Registruj">
        </form>   
</body>    
</html> 