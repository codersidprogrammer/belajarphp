<?php

$hostname = "localhost";
$user = "root";
$pass = "root";
$databaseName = "latihanphp";

$connection = new mysqli($hostname, $user, $pass, $databaseName);

// Melakukan check connection ke database
if ($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
}

// Membuat sql string ke database
$sql = "DELETE FROM `latihanphp`.`tabel_hero_mage` WHERE damage = 90";

// Eksekusi SQL string ke database
if ($connection->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: ". $sql. "<br>". $connection->error;
}
?>