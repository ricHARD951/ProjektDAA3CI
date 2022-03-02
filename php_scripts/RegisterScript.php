<?php
$validated = true;
$password_match = true;

if(!empty($_POST["username"])){

    echo "Zadal si meno. <br>";

}
else{
    echo "Nezadal si meno. <br>";
    $validated = false;
}


if(!empty($_POST["email"])){

    echo "Zadal si email. <br>";
}
else{
    echo"Nezadal si email. <br>";
    $validated = false;
}

if(!empty($_POST["password"])){

    echo "Zadal si heslo. <br>";

}
else{
    echo"Nezadal si heslo. <br>";
    $validated = false;
}

if(!empty($_POST["password_check"])){

    echo "Zadal si  kontrolne heslo. <br>";

}
else{
    echo "Nezadal si kontrolne heslo. <br>";
    $validated = false;
}

if($_POST["password_check"] == $_POST["password"]){
    echo"Hesla sa zhoduju. <br>";
}
else{
    echo"Hesla sa nezhoduju. <br>";
    $password_match = false;
}

$hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
echo "Unhashed password: " . $_POST["password"] . "<br>";
echo "Hashed password: " . $hashed_password;

require_once ("./Connection.php" );
if($password_match && $validated){
    $sql = 'INSERT INTO users(password,email,username) VALUES("'. $_POST["password"] .'","'.$_POST["email"] .'","'.$_POST["username"].'");';

    if($conn->query($sql) === TRUE){
        echo "Záznam vytvorený";
    }
    else{
        echo "Eroor:" . $sql . "<br>" . $con->error;
    }
}

