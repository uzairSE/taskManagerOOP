<?php
require_once 'db.php';
require_once 'connection.php';
class userClass{
    public $userID;
    public $name;
    public $username;
    public $email;
    public $password;
    public $design;
    public $profilepic;
    public $about;
    public $created;
    public $modify;
    public $dob; 
    public $con;
    public $conn;
   /* public function __construct($userID,$name,$username,$email,$password,$design,$profilepic,$about,$created,$modify,$dob ) {
       $this->userID=$userID; 
       $this->name=$name; 
       $this->username=$username; 
       $this->email=$email; 
       $this->password=$password; 
       $this->design=$design;
       $this->profilepic=$profilepic; 
       $this->about=$about; 
       $this->created=$created; 
       $this->modify=$modify; 
       $this->dob=$dob; 
        
    }*/
    public function __construct( ) {
        
       $this->con= new db(); 
       $this->conn= new connection();
    }
    public function users(){
         
       $sql = "SELECT * FROM user";
             $con= $this->conn;
 $conn=$con->connn();

        return $result = $conn->query($sql);
    }
    public function insertUser(){
       $sql= "INSERT INTO user(id,name,username,email,password,design,profilepic,about,created,modify,dob)"
         . " VALUES('$this->userID','$this->name','$this->username','$this->email','$this->password','$this->design','$this->profilepic','$this->about','$this->created','null','$this->dob')";
       return $sql;
    }
    public function updateUser($name,$username,$email,$design,$profilepic,$about,$modify,$dob,$userID){
     $sql = "UPDATE user set name='$name',username='$username',email='$email',design='$design',profilepic='$profilepic',about='$about',modify='$modify',dob='$dob' where id='$userID'";
     return $sql;
    }
    public function updatePass($userID, $pass1,$pass2,$pass3){
        $con=$this->con;
        $connn= $this->conn;
        $conn=$connn->connn();
        $sql=$this->selectUser($userID);
     
     $row= $con->sqlrun($sql);
     $password=$row['password'];
     if($password== $pass1){
         
    if($pass2==$pass3 && strlen($pass2)>6){
        
        
$sqlu = "UPDATE user set password='$pass2' where id='$userID'";
mysqli_query($conn, $sqlu);
return true;

   
    }
    
}
else{
    echo 'false';
    return false;
    
}
     
    }
    
    public function selectUserLogin($username,$password){
        
        $con= $this->con;
        $sql = "SELECT * FROM user where (username = '$username'OR email = '$username') AND password = '$password'";
        $row= $con->sqlrun($sql);
      if($row){
echo $id= $row['id'];
            $_SESSION['username']= $id;
            
            return true;
}
else{
       
    return false;
}
    }
    
    public function selectUser($userID){
        $con= $this->con;
       $sql = "SELECT * FROM user where id = '$userID'";
       $row= $con->sqlrun($sql);
       return $row;  
    }
    public function selectName($userID){
        $con= $this->con;
        $sql = "SELECT * FROM user where id = '$userID'";
       $row= $con->sqlrun($sql);
       return $row['name'];  
    }
    public function accountpic($file_name1,$userID){
     $sql = "SELECT * FROM user where id = '$userID'";
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
if($row['profilepic']){
      if($profilepic==''){
    return $profilepic=$row['profilepic'];
}  
    }
}
}