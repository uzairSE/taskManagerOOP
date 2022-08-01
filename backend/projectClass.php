<?php
require_once 'db.php';
require_once 'connection.php';
require_once 'userClass.php';
class projectClass{
    public $con;
    public $conn;
    public $uname;
    public function __construct( ) {
        
       $this->con= new db(); 
       $this->conn= new connection();
       $this->uname= new userClass();
    }
       public function projects(){
         
       $sql = "SELECT * FROM project";
             $con= $this->conn;
 $conn=$con->connn();

        return $result = $conn->query($sql);
    }
     public function selectAll($id){
        $sql = "SELECT * FROM project where id='$id'";
        $con= new connection();
        $conn=$con->connn();
        $result = $conn->query($sql);
        return $row=$result->fetch_assoc();
    }
    public function selecta(){
        $sql = "SELECT * FROM project";
        $con= new connection();
        $conn=$con->connn();
        return $result = $conn->query($sql);
        
    }
    public function validateUser($id){
        $userId= $_SESSION['username'];
        $sql="SELECT * from project where id='$id'";
        $con= new connection();
        $conn=$con->connn();
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        
        if($row['added_by']==$userId){
            
            return $row;
        }
        else{
            echo"<script>alert('You cannot access this.')</script>";
            echo "<script>location.href='projectForm.php'</script>";
        }
    }
    public function select(){
    $sql = "SELECT id FROM project";
    $con= new connection();
    $conn=$con->connn();
    $result = $conn->query($sql);
    $id=1;
      while($row=$result->fetch_assoc()){
         $id+=1; 
    }
    return $id;
    }
    public function insert($userID,$id,$name,$image,$description){
        $added=$userID;
        $conn= $this->conn->connn();
        $date= date("Y-m-d");
        $date1= date("Y-m-d");
        echo $image;
        
        $sq="insert into project (id,name,image,description,added_by,created,modify) "
                . "values('$id','$name','$image','$description','$added','$date','$date1')";
        mysqli_query($conn, $sq);
        echo("Error description: " . $conn -> error);
    }
        public function accountpic($file_name1,$userID){
     $sql = "SELECT * FROM project where id = '$userID'";
     $con= $this->con;
     $row= $con->sqlrun($sql);
    $uploadOk=1;
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file_name1["name"]);
   
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $file_temp=$file_name1["tmp_name"];
 $file_name=$file_name1["name"];

if (file_exists($target_file)) {
  
  if( !$file_name ==''){
  return $profilepic= $target_file;}
  
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

  $uploadOk = 0;
}


if ($uploadOk == 0) {
 
} else {
  if (move_uploaded_file($file_temp, $target_file)) {

    return $profilepic=$target_file;}

}
if($row['image']){
      if($profilepic==''){
    return $profilepic=$row['image'];
}  
    }
}
public function updateProject($profilepi,$name,$description,$id){
    $modify=  date("Y-m-d");
    $sql= "update project set image='$profilepi',name='$name',description='$description',modify='$modify' where id='$id'";
    $con= $this->con;
    $con->sqlrun1($sql);
}
      }


