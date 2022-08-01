<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

require_once ('connection.php');
require_once ('projectClass.php');


 $con= new connection();
 $conn=$con->connn();
$id = $_GET['id'];
 $projectOb= new projectClass();


    $filename=$_FILES["fileToUploa"];
  
  echo  $profilepi=$projectOb->accountpic($filename,$id);


 echo $name= $_POST['Name'];
 $description= $_POST['description'];
$projectOb->updateProject($profilepi, $name, $description, $id);
echo "<script>location.href='../projectForm.php'</script>";
}