<?php
require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];



$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn, $sql);

if (empty($username)  || empty($password)){
  echo "Nezadali ste vsetky udaje";
}else if($result->num_rows > 0) {
  session_start();
  $row = mysqli_fetch_assoc($result);
  $_SESSION['username'] = $row['username'];
  echo "Uspešne si sa prihlásil!";

} else {
  echo "Nespravne prihlasovacie udaje!";
}