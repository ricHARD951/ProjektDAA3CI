<?php include('parts/header.php') ?>
<main class="container p-4"> 
<H1>Login</H1><br>
        <form action="php_scripts/LoginScript.php" method="POST">
        <label class="custom" for = "username">Meno</label>
        <input type = "text" name="username" id = "username">
        <br>

        <label for = "password">Heslo</label>
        <input type = "password" name="password" id = "password">
        <br>
        <input type="submit" value = "Login">
        </form> 

</main>
<?php include('parts/footer.php') ?>