<?php
require 'connection2.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/app.css">
    <title>Create article</title>
</head>
<link rel="stylesheet" href="./style/style_register.css">

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a href="indexp.php" class="btn btn-secondary">Home</a>
                        
                        </li>
                    </ul>   
                    <a href="createArticle.php" class="btn btn-secondary">Create</a>    
                </div>
                
            </div>
        </nav>
    </header>
    <H1>Create article</H1><br>
    <form action="createScript.php" method="POST">
    <input type="text" name="autor" id="autor" placeholder="Autor" required>
    <br>
    <input type="text" name="title" id="title" placeholder="Title" required>
    <br>
    <textarea id="text" name="text"  rows="4" cols="50" placeholder="Text"> </textarea>
    <br>
        <input type="submit" value = "Save">
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>