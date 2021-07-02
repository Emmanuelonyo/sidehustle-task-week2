<?php

include 'session.php';

$name = $_SESSION['fname'] .' '. $_SESSION['lname'];

echo $name ;

if (isset($_SESSION['userid']) && isset($_SESSION['pass']) && isset($_SESSION['access'])){

  header('Location: home.php');

}else{

if (isset($_POST['login'])){
  
  $userid = htmlspecialchars($_POST['userid']);
  $pass = htmlspecialchars($_POST['pass']);

  if(empty($_POST['userid']) && empty($_POST['pass'])){

    echo "All Fields Must Be filled";

  }else{
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
    echo "Invalid Email Entered";
    
  }elseif($userid !== $email && $pass !== $password){

    echo "Email or Password is Incorrect";

  }else{

    $_SESSION['userid'] = $userid;
    $_SESSION['pass'] = $pass;

    $encrypt = md5($_SESSION['userid'], $_SESSION['pass']);

    $_SESSION['access'] = $encrypt;
    
    header('Location: home.php');

  }

   
  }
}

  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Hustle Task | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">EMMANUEL TEST</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">REGISTER</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
</header>


    <div class="card" style="width: auto;" >
    
    <div class="card-header"> LOGIN</div>
    <div class="card-body">
    <form action="" method="post">

     
		
		<div class="form-group">
        <label for="userid" class="form-group col-3">Email:</label>
        <input class="form-group col-5" id="userid" type="text" name="userid" id="name" placeholder="Enter your email">
        </div>
	<br>
		<div class="form-group">
        <label for="pass" class="form-group col-3">password:</label>
        <input type="password" id="pass" name="pass" id="name" placeholder="Enter your Password" class="form-group col-5">
	<br>
		<div class="form-group col-8 ">
		<button type="submit" name="login" class="btn btn-success">Login</button>
		</div>
        </div>
    </form>
    
    </div>
    
    </div>
    <!-- javascript goes here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.jsss"></script>
</body>
</html>