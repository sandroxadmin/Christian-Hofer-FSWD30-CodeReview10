<?php
namespace App\Model;

class AbstractModel{

  protected $conn;
  function __construct(){
    include('config/database.conf.php');
    $this->conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  }
}
