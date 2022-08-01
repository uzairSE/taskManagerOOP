<?php

require_once  'connection.php';

class db{
    
    public function sqlrun($sql){
 $con= new connection();
 $conn=$con->connn();
$result = $conn->query($sql);

 return  $result->fetch_assoc();}

  public function sqlrun1($sql){
 $con= new connection();
 $conn=$con->connn();
 $conn->query($sql);

 }
    }