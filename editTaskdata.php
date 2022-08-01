<?php
session_start();

include_once 'backend/taskClass.php';
$validate = new taskClass();

$id = $_GET['id'];
 $row=$validate->validateUser($id);
require_once 'backend/userClass.php';
require_once 'backend/projectClass.php';
require 'backend/checkConnection.php';
$userClass= new userClass();
$userRow= $userClass->users();
$projectClass= new projectClass();
$projectRow= $projectClass->projects();
  $userRow1=$validate->taskassign1($id);     


?>
<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Edit Task Data</title>
    <link rel="stylesheet" href="css/createTask.css">
   
</head>
<body>
    
    <div class="container">
        
        <h3>Edit task</h3>
        <form id="form" action="backend/taskEditlogic.php?id=<?php echo $id?>"  method="post" class="form" enctype="multipart/form-data">

            <div class="form-control">
                <div class="user">
                    <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>"  size="20" required/>
                   <small>Error message</small>
                </div>
            </div>
            <div class="form-control">
                <div class="user">
                    <input type="text" id="description" name="description" value="<?php echo $row['description']; ?>" size="20" required/>
                     <small>Error message</small>
                    </div>
                </div>
                <div class="form-control">

                    <label for="status">Choose a Status:</label>

                    <select  id="list1" name="status">
                        <option value="<?php echo $row['status']; ?>" selected  hidden>
                            <?php echo $row['status']; ?>
                        </option>
                        <option value="Not started">Not started</option>
                        <option value="Continue">Continue</option>
                        <option value="Done">Done</option>
                        
                    </select>
                    <small>Error message</small>

                </div>
                <div class="form-control">

                    <label for="status">Choose User:</label>

                    <select  id="list2" name="selectUser[]" multiple="multiple" required>
                        <option value="" selected disabled hidden>
                           select User
                        </option>
                        <?php  while($users = $userRow->fetch_assoc()){ 
                        if (in_array($users['id'],$userRow1)){  ?>
                          <option value= "<?php echo $users['id']; ?>" selected><?php echo $users['name']; ?></option>
                        <?php } else{?>  
                        
                        
                        <option value= "<?php echo $users['id']; ?>" ><?php echo $users['name']; ?></option>
                        <?php }}?>
                    </select>
                    <small>Error message</small>

                </div>            
            <div class="form-control">

                    <label for="status">Select Project:</label>

                    <select  id="list3" name= "selectProject" required>
                     
                       <?php  while($projects = $projectRow->fetch_assoc()){ 
                           if ($row['projectid']==$projects['id']){?>
                        <option value= "<?php echo $projects['id']; ?>" selected><?php echo $projects['name']; ?></option>    
                          <?php } else{
                           ?>
                        <option value= "<?php echo $projects['id']; ?>" ><?php echo $projects['name']; ?></option>
                       <?php }}?>
                    </select>
                    <small>Error message</small>

                </div>
             <button >Submit</button>
             <a href="projectForm.php"><p class="forgot" align="center">back</p></a>
            
</form>
    </div>
    

</body>
</html>
