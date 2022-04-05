<?php
require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn, $sql);

if($result->num_rows ==1) {
  $row = mysqli_fetch_assoc($result);
  session_start();
  $_SESSION['username'] = $username;
  
  header("Location: ../idex1.php");
} else {
  header ("Location: ../login.php?message=Zle meno alebo heslo!");
}