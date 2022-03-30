<?php
session_start();
unset($_SESSION["username"]);
session_destroy();
header ("Location: /php_scripts/Login.php");