<?php

require_once "database.php";

$db = new Database();
$db->connect(); // Berasal dari parent database (Connection)

// $data = $db->insert("Cyclops", "Burst", 120);
// var_dump($data);

$heroes = $db->rawQuery("SELECT * FROM tabel_hero_mage WHERE id = 6");
if ($heroes->num_rows > 0) {
  while ($row = $heroes->fetch_assoc()) {
    var_dump($row);
  }
}