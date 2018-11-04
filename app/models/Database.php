<?php

class Database
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $name = DB_NAME;

  private $db;
  private $error;

  public function __construct()
  {
    $db = 'mysql:host='.$this->host.';dbname='.$this->name;
    $options = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    try {
      $this->db = new PDO($db, $this->user, $this->pass, $options);
    } catch(PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;
    }
  }
