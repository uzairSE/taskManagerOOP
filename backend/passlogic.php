<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){


require_once ('userClass.php');


 $iduser= $_SESSION['username'];
 $userOb= new userClass();

 $pass1= $_POST['oldpass'];
 $pass2= $_POST['newpass'];
 $pass3= $_POST['password'];

        $check= $userOb->updatePass($iduser,$pass1, $pass2, $pass3 );
        echo $check;
if ($check==true){
echo "<script>location.href='../profile.php'</script>";
}
else{
    echo"<script>alert('Requirements does not match')</script>";
    echo "<script>location.href='../ChangePass.php'</script>";
}
}