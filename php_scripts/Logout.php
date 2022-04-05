<?php
session_start();
unset($_SESSION["username"]);
session_destroy();
header ("Location: /ProjektDAA3CI/Login.php");