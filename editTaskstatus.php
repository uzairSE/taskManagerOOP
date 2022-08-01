<?php
session_start();

include_once 'backend/taskClass.php';
$validate = new taskClass();

$id = $_GET['id'];
 $row=$validate->validateUser($id);

require_once 'backend/checkConnection.php';


   
?>
<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Edit Task status</title>
    <link rel="stylesheet" href="css/createTask.css">
   
</head>
<body>
    
    <div class="container">
        
        <h3>Edit task</h3>
        <form id="form" action="backend/taskstatuslogic.php?id=<?php echo $id?>"  method="post" class="form" enctype="multipart/form-data">


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
         

             <button >Submit</button>
             <a href="projectForm.php"><p class="forgot" align="center">back</p></a>
            
</form>
    </div>
    

</body>
</html>