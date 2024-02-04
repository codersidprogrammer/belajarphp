<?php

class Person {
  // name, age, birth date, hoby
  // Membuat properties
  
  /**
   * public: property atau method dapat diakses dari luar class
   * private: property atau method tidak dapat diakses dari luar class, hanya berlaku secara internal
   * protected: property atau method sama sekali tidak dapat diakses dan dirubah
   */

  public $name = 'default';
  public $age = 0;
  public $birthDate = '0000-00-00';
  public $hobby = 'default hoby';

  // Method constructor
  // Function yg pertama kali dipanggil saat class dibuat
  public function __construct($namaOrang, $ageOrang, $birthDateOrang, $hobbyOrang) {
    // Proses inisiasi
    $this->name = $namaOrang;
    $this->age = $ageOrang;
    $this->birthDate = $birthDateOrang;
    $this->hobby = $hobbyOrang;
  }

  public function printPerson() {
    echo "Ini dari print person";
    echo $this->name. "\n";
    echo $this->age. "\n";
    echo $this->birthDate. "\n";
    echo $this->hobby. "\n";
    echo "\n";
  }
}


// Create person baru di variable 
$dimas = new Person("Dimas", 25, "1990-01-01", "Coding");
$dimas->printPerson();

$anton = new Person("Anton", 20, "1990-01-01", "Mancing");
$anton->printPerson();

$surya = new Person("Surya", 20, "1990-01-01", "Mancing");
$surya->printPerson();