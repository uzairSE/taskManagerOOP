<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

require_once ('connection.php');
require_once ('userClass.php');


 $con= new connection();
 $conn=$con->connn();
 $iduser= $_SESSION['username'];
 $userOb= new userClass();



    $filename=$_FILES["fileToUpload"];
  
    $profilepi=$userOb->accountpic($filename,$iduser);


 $name1= $_POST['name1'];
 $username= $_POST['username'];
 $design= $_POST['design'];
 $dob= $_POST['dob'];
 $email= $_POST['email'];
 $about= $_POST['about'];
$dateModify= date("Y/m/d");

$sqlu= $userOb->updateUser($name1, $username, $email, $design, $profilepi, $about, $dateModify, $dob, $iduser);

mysqli_query($conn, $sqlu);
echo("Error description: " . $conn -> error);
echo "<script>location.href='../profile.php'</script>";
}

