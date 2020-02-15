<?php
class Dbh{
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $dbname = 'user';

  public function connection(){
    $dsn = "mysql:host=$this->host;dbname=$this->dbname";
    $pdo = new PDO($dsn,$this->user,$this->pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $pdo;
  }
}

 ?>
