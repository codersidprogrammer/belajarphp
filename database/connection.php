<?php

/**
 * Melakukan koneksi ke database
 * 
 */
class Connection {
  private $hostname = "localhost";
  private $user = "";
  private $pass = "";
  private $databaseName = "";
  public $connection; // akan menampung eksisting koneksi database

  public function __construct($host, $user, $pass, $databaseName) {
    // init connection params
    $this->hostname = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->databaseName = $databaseName;
  }

  public function connect() {
    $this->connection = new mysqli(
      $this->hostname, 
      $this->user, 
      $this->pass, 
      $this->databaseName
    );
  }

}