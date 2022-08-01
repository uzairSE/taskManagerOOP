<html>
<body>
 
<?php
session_start();

$id = $_GET['id'];
echo $id;
  require_once 'taskClass.php';
$select= new taskClass();
$row=$select->selectByid($id);
 $user = $_SESSION['username'];



if($row['from_user']==$user){

   echo "<script>location.href='../editTaskdata.php?id="; echo $id; echo "'</script>";

}
else{

echo "<script>location.href='../editTaskstatus.php?id="; echo $id; echo "'</script>";
//only edit status 
}
?>
    
</body>
</html>