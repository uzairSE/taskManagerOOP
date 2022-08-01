<?php
class connection{
public $servarName = "localhost";    
public $username="root";
public $password="";

public $db="task_manager";

public function connn() {
    

   $conn = mysqli_connect( $this->servarName,$this->username,$this->password,$this->db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return $conn;
}
}