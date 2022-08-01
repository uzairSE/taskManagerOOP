<?php
session_start();

require 'backend/checkConnection.php';



?>
<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Create Task</title>
    <link rel="stylesheet" href="css/createTask.css">
   
</head>
<body>
    
    <div class="container">
        
        <h3>Create Project</h3>
        <form id="form" action="backend/projectLogic.php"  method="post" class="form" enctype="multipart/form-data">
            <div class="form-control">
               
                        <input type="file" name="fileToUploa" id="fileToUpload"/>
                            </div>
            <div class="form-control">
                <div class="user">
                    <input type="text" id="title" name="Name" placeholder="Name"  size="20" />
                   <small>Error message</small>
                </div>
            </div>
            <div class="form-control">
                <div class="user">
                    <input type="text" id="description" name="description" placeholder="Description" size="20"/>
                     <small>Error message</small>
                    </div>
                </div>

             <button >Submit</button>
             <a href="projectForm.php"><p class="forgot" align="center">back</p></a>
            
</form>
    </div>
    

</body>
</html>
