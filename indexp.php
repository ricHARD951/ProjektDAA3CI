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
    <title>Articles</title>
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
    <H1>Articles</H1><br>

    <div class="card-group">
  <div class="card">
    <img src="Amenn.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Article title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="Amenn.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Article title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="Amenn.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Article title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>