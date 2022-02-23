<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE `Articles` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`nazov_clanku` VARCHAR(50) NOT NULL DEFAULT '0',
	`autor` VARCHAR(50) NOT NULL DEFAULT '0',
	`datum_vytvorenia` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	`avatar` VARCHAR(50) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  }
   else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
  ?>