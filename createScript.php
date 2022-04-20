<?php
require_once ("connection2.php" );
    $sql = 'INSERT INTO articles(title,autor,text) VALUES("'. $_POST["title"] .'","'.$_POST["autor"] .'","'.$_POST["text"].'");';

    if($conn->query($sql) === TRUE){
        echo "Záznam vytvorený";
    }
    else{
        echo "Eroor:" . $sql . "<br>" . $con->error;
    }

