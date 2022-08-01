<?php
require_once 'db.php';
require_once 'connection.php';
require_once 'userClass.php';
class taskClass{
    public $con;
    public $conn;
    public $uname;
    public function __construct( ) {
        
       $this->con= new db(); 
       $this->conn= new connection();
       $this->uname= new userClass();
    }
     public function selectAll(){
        $sql = "SELECT * FROM task";
         $con= $this->conn;
 $conn=$con->connn();

        return $result = $conn->query($sql);
     
    }
         public function selectByid($id){
        $sql = "SELECT * FROM task where id='$id'";
        $con= new connection();
        $conn=$con->connn();
        $result = $conn->query($sql);
        return $row=$result->fetch_assoc();
    }
        public function validateUser($id){
        $userId= $_SESSION['username'];
        $sql="SELECT * from task where id='$id'";
        $con= new connection();
        $conn=$con->connn();
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        
        if($row['from_user']==$userId){
            
            return $row;
        }
        else{
            echo"<script>alert('Masti kr reya, Baz aja')</script>";
            echo "<script>location.href='task.php'</script>";
        }
    }
        public function select(){
    $sql = "SELECT id FROM task";
    $con= new connection();
    $conn=$con->connn();
    $result = $conn->query($sql);
    $id=1;
      while($row=$result->fetch_assoc()){
         $id+=1; 
    }
    return $id;
    }
        public function insertTask($userID,$id,$title,$description,$status,$projectid){
        
        $conn= $this->conn->connn();
        $date= date("Y-m-d");
        $date1= date("Y-m-d");
        
        
        $sq="insert into task (id,title,description,status,from_user,created,modify,projectid) "
                . "values('$id','$title','$description','$status','$userID','$date','$date1','$projectid')";
        mysqli_query($conn, $sq);
        echo("Error description: " . $conn -> error);
    }
    public function updateTask($id,$title,$description,$status,$projectid){
        
        $conn= $this->conn->connn();
        $date= date("Y-m-d");
        
        
        
        $sq="update task set title = '$title', description= '$description',status='$status',modify='$date',projectid='$projectid' where id='$id'";
               
        mysqli_query($conn, $sq);
        echo("Error description: " . $conn -> error);
    }
       public function updatestatus($id,$status){
        
        $conn= $this->conn->connn();
        $date= date("Y-m-d");
        
        $sq="update task set status='$status',modify='$date' where id='$id'";
               
        mysqli_query($conn, $sq);
        echo("Error description: " . $conn -> error);
    }
    public function insertTaskAssign($userID,$taskID){
        
        $conn= $this->conn->connn();
      
        $sq="insert into taskassign (userid,taskid) "
                . "values('$userID','$taskID')";
        mysqli_query($conn, $sq);
        echo("Error description: " . $conn -> error);
    }
        public function deleteTaskAssign($taskID){
        
        $conn= $this->conn->connn();
      
        $sq="DELETE from taskassign where taskid ='$taskID'";
        mysqli_query($conn, $sq);
        echo("Error description: " . $conn -> error);
    }
    public function taskassign($taskid){
        
        $con= $this->conn;
 $conn=$con->connn();

    $sq="select userid from taskassign where taskid= $taskid";
    $userid = $conn->query($sq);
   while($row1 = $userid->fetch_assoc()){
       
       echo $row1['userid'];
       echo " ";
   }
   
}
    public function taskassign1($taskid){
        
        $con= $this->conn;
 $conn=$con->connn();
    $arr= array();
    $sq="select userid from taskassign where taskid= $taskid";
    $userid = $conn->query($sq);
    while($row1 = $userid->fetch_assoc()){
        
      $arr[]=$row1['userid'];
    }
   return $arr;
}
    }
