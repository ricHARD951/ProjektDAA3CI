<?php
require 'php_scripts/Connection.php';
?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/app.css">
    <title>Main page</title>
</head>
<link rel="stylesheet" href="./style/style_register.css">

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a href="idex1.php" class="btn btn-secondary">Home</a>
                        <a href="Userslist.php" class="btn btn-secondary">Users</a>
                        </li>
                    </ul>
                    <?php if (!isset($_SESSION["username"])) : ?>
                    <div>
                        <a href="Login.php" class="btn btn-success">Prihlasenie</a>
                        <a href="php_scripts/Register.php" class="btn btn-danger">Register</a>
                    </div>
                    <?php else : ?>
                        <div class="d-flex aling-items-center">
                            <p class = "text-info mb-0">
                                Práve je prihlásený uživatel <?php echo $_SESSION["username"] ?>
                            </p>
                            <a href="./php_scripts/Logout.php" class= "btn btn-success">Logout</a>
                    <?php endif; ?>        
                </div>
                
            </div>
        </nav>
    </header>