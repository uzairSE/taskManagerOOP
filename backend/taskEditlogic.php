<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

require_once ('taskClass.php');

echo $id = $_GET['id'];

$taskClass= new taskClass();
$userRow1=$taskClass->taskassign1($id);  
 $projectid=filter_input(INPUT_POST, 'selectProject', FILTER_SANITIZE_STRING);
$select= new taskClass();

echo $title= $_POST['title'];
$description=$_POST['description'];
echo $status=$_POST['status'];
$from= $_SESSION['username'];
$taskClass->updateTask($id, $title, $description, $status, $projectid);
//$select->insertTask($from, $id, $title, $description, $status, $projectid);
$values = $_POST['selectUser'];
if (!($values==$userRow1)){

$taskClass->deleteTaskAssign($id);
foreach ($values as $userID){
    echo $userID;
   $taskID=$id;
   
   $taskClass->insertTaskAssign($userID, $taskID);
   
    
}
}


//echo "<script>location.href='../task.php'</script>";
}