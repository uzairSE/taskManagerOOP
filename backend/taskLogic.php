<?php
session_start();
require_once 'taskClass.php';
$taskClass= new taskClass();

 $projectid=filter_input(INPUT_POST, 'selectProject', FILTER_SANITIZE_STRING);
$select= new taskClass();
 $id=$select->select();
echo $title= $_POST['title'];
$description=$_POST['description'];
echo $status=$_POST['status'];
$from= $_SESSION['username'];
$select->insertTask($from, $id, $title, $description, $status, $projectid);
$values = $_POST['selectUser'];
foreach ($values as $userID){
    echo $userID;
    $taskID=$id;
    $select->insertTaskAssign($userID, $taskID);
    //insert into task assign
    
}
echo "<script>location.href='../task.php'</script>";