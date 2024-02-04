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
$sql = "UPDATE `latihanphp`.`tabel_hero_mage` SET `damage` = 80 WHERE `nama_hero` = 'kimmy'";

// Eksekusi SQL string ke database
if ($connection->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error: ". $sql. "<br>". $connection->error;
}
?>