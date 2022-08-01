<?php
require_once 'userClass.php';
$user=$_SESSION['username'];
$result1= new userClass();

$row1 = $result1->selectUser($user);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style> img {
  border-radius: 50%;

}
</style>
</head>
<body>
    <div class="header-basic">
        <header>
 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="backend/<?php echo $row1['profilepic'];?>" width="40" height="40"></a>          
  <a class="navbar-brand" href="#"><?php echo $row1['name']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="task.php" >Tasks</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="createTask.php" >Create Task</a>
 </li>
 <li class="nav-item">
        <a class="nav-link" href="projectForm.php">Project</a>
       
  </li>
  
  
    <li class="nav-item">
        <a class="nav-link" href="createProject.php">Create Project</a>
  </li>
     <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
     </li>
        <li class="nav-item">
            <a class="nav-link" href="backend/logout.php">Logout</a>
  </li>
    </ul>
  
  </div>
</nav>
  
        </header>
    </div>

</body>

</html>