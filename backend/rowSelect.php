
<html>
<body>
 
<?php
session_start();
/*$id= $_POST["id"];
$title= $_POST["title"];
$description= $_POST["description"];*/
echo 'ok';
$id = $_GET['id'];
echo $id;
  require_once 'projectClass.php';
$select= new projectClass;
$row=$select->selectAll($id);
 $user = $_SESSION['username'];
 $userOb= new userClass();
 $row1= $userOb->selectUser($user);

echo $title= $row['name'];
$description= $row['description'];
$status= $row['added_by'];

if($row['added_by']==$user){


   echo "<script>location.href='../editProject.php?id="; echo $id; echo "'</script>";

}
else{
echo"<script> alert('Only creater of this project can change it')</script>";
echo "<script>location.href='../projectForm.php?id="; echo $id; echo "'</script>";
//only edit status 
}
?>
    
</body>
</html>

