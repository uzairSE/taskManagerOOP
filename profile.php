<?php
session_start();
include_once  'backend/userClass.php';
require_once 'backend/checkConnection.php';
 $user = $_SESSION['username'];
 $userOb= new userClass();
 $row= $userOb->selectUser($user);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
     
    <title>Account Setting</title>
</head>
<link rel="stylesheet" href="css/profile.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <br>
<div class="container">
    
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-8 mx-auto">
        <hr class="my-4" />
        <h2 class="h3 mb-4 page-title">Settings</h2>
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                
            </ul>
            <form action="backend/profileLogic.php" method="post" enctype="multipart/form-data">
                <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                        <div class="avatar avatar-xl">
                            <img src="backend/<?php echo $row['profilepic'];?>" alt="..." class="avatar-img rounded-circle" />
                            
                        </div>
                        <br>
                        <input type="file" name="fileToUpload">
                    </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h4 class="mb-1"><?php echo $row['name'];?></h4>
                               <p class="small mb-3"><span class="badge badge-dark">@<?php echo $row['username'];?></span></p>
                            </div>
                        </div>
                     
                    </div>
                </div>
                <hr class="my-4" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Name</label>
                        <input type="text" id="name" name="name1" class="form-control" value='<?php echo $row['name'];?>' />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" value="<?php echo $row['username'];?>" />
                    </div>
                </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Designation</label>
                        <input type="text" id="design" class="form-control" name="design" value="<?php echo $row['design'];?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Date of Birth</label>
                        <input type="date" id="dob" class="form-control" name="dob" value="<?php echo $row['dob'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $row['email'];?>"/>
                </div>
                <div class="form-group">
                    <label for="inputAddress5">About</label>
                    <input type="text" class="form-control" id="inputAddress5" name="about" value="<?php echo $row['about'];?>"/>
                </div>
                <hr class="my-4" />
                <div class="form-row">
              
               
                <button type="submit" class="btn btn-primary">Save Change</button>
        </div>
                <hr class="my-4">
              
               <a class='btn btn-primary' href='ChangePass.php'>Change Password</a>
                <hr class="my-4">
              
                <a class='btn btn-primary' href='projectForm.php'>Back</a>
                            </form>

        </div>
        </div>
        </div>
        </div>
    

  </div>
</div>
    <br>
   
</body>
</html>