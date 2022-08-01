<html>
<body>
 
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $filename=$_FILES["fileToUploa"];
  require_once 'projectClass.php';
$select= new projectClass;

$id=$select->select();
$dateModify='';


 $title= $_REQUEST['Name'];
 $description= $_REQUEST['description'];
 $iduser= $_SESSION['username'];
 $userOb= new userClass();

echo $id;

  
  
    $profilepi=$userOb->accountpic($filename,$iduser);
    $select->insert($iduser, $id, $title, $profilepi, $description);
//    

echo "<script>location.href='../projectForm.php'</script>";
}
?>
</body>
</html>