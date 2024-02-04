<?php

class OrangTua {

  public $ayah = "default";
  public $ibu = "default";

  public function __construct($ayah, $ibu) {
    $this->ayah = $ayah;
    $this->ibu = $ibu;
  }

  public function printOrangTua() {
    echo "Ayah: " . $this->ayah. " , ibu: " . $this->ibu. "\n";
  }
}

class Anak extends OrangTua {
  
  public $namaAnak = "default nama anak";

  public function __construct($nama, $namaAyah, $namaIbu) {
    $this->namaAnak = $nama;
    parent::__construct($namaAyah, $namaIbu);
  }

  public function printAnak() {
    echo "Nama saya adalah: ". $this->namaAnak. "\n";
  }

}

$naya = new Anak("naya", "dimas", "fitri");
$naya->printAnak(); // Method dari class Anak
$naya->printOrangTua(); // Method dari class OrangTua

$nashwa = new Anak("nashwa", "dimas", "fitri");
$nashwa->printAnak(); // Method dari class Anak
$nashwa->printOrangTua(); // Method dari class OrangTua