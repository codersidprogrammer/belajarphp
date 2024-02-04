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

// Membuat sql string untuk insert ke database
$sql = "INSERT INTO `latihanphp`.`tabel_hero_mage`(`nama_hero`,`tipe_hero`,`damage`) 
        VALUES 
        ('Kimmy', 'Marksman/Mage', 30)";

// Eksekusi SQL string untuk insert ke database
if ($connection->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: ". $sql. "<br>". $connection->error;
}