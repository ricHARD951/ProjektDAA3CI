<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully </br>";

$sql = "SELECT id, username, password FROM Users";
$result = mysqli_query($conn, $sql);
print_r(mysqli_num_rows($result));


if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
  echo "id: " . $row["id"] ."- Name: " . $row["username"] . " " . "<br>";
}
}else{
echo "0  results";
}



?>