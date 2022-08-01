<html>
<body>
    
<?php
session_start();


require_once 'userClass.php';
$username= $_REQUEST["name"];
$password= $_REQUEST["password"];

//exit();

 $userOb= new userClass();
 $row= $userOb->selectUserLogin($username,$password);

if($row==true){

           header("location: http://localhost/taskManagerOOP/projectForm.php");
     
}
else if($row==false){
  
   echo "<script>alert('UserName or password is incorrect')</script>";    
    echo "<script>location.href='../login.php'</script>";
}


?>



    </body>
</html>