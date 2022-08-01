  <?php
session_start();
 if(isset($_SESSION['username'])){
      echo "<script>location.href='profile.php'</script>";
 }
  ?>
<html>

<head>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <?php  //include('logic/header.php'); ?>
  <title>Sign in</title>
</head>

<body>

  <div class="main">

    <p class="sign" align="center">Sign in</p>
    <form action="backend/index.php" method="post" class="form1" id="form1" name="form1">
      <span class="form-control">
      <input class="un " id="name" name="name" type="text" align="center" placeholder="Username">
      </span>
      <span class="form-control">
      <input class="pass" id="password" name="password" type="password" align="center" placeholder="Password">
     </span>
        <input type="submit" class="submit" value="Sign In" align="center" >
    
        <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
            
    </form>          
    </div>
 
</body>

</html>