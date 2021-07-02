<?php
session_start();

if(isset($_POST['register'])){

		$email = htmlspecialchars($_POST['email']);
		$fname = htmlspecialchars($_POST['fname']);
		$lname = htmlspecialchars($_POST['lname']);
		$phone = htmlspecialchars($_POST['tel']);
	 	$password = htmlspecialchars($_POST['password']);

		 if(empty($email && $fname && $lname && $phone && $password)){

			echo "ALL FIELDS MUST BE FIELED";

		 }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			 echo "THIS IS NOT A VALID EMAIL";
		 }else{

			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['email'] = $email;
			$_SESSION['tel'] = $phone;
			$_SESSION['password'] = $password;

			$name = $_SESSION['fname'] .' '. $_SESSION['lname'];
			 
			?>
		<script >	alert('Congrats <?php echo $name ?> Your Registration was successful! '); </script>
			<?php

		
		
		 }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Hustle Task | Register</title>
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
    
    <div class="card-header"> REGISTER</div>
    <div class="card-body">
    <form action="" method="post">

       

        <div class="form-group">
        <label for="fname" class="form-group col-3">First Name:</label>
        <input type="text" name="fname" id="name" placeholder="Enter your Firstname" class="form-group col-5">
        </div>
	<br>
        <div class="form-group">
        <label for="lname" class="form-group col-3">Last Name:</label>
        <input type="text" name="lname" id="name" placeholder="Enter your lastname" class="form-group col-5">
        </div>
	<br>	
		<div class="form-group">
        <label for="email" class="form-group col-3">Email:</label>
        <input class="form-group col-5" id="email" type="text" name="email" id="name" placeholder="Enter your email">
        </div>
	<br>
		<div class="form-group">
        <label for="phone" class="form-group col-3">Phone Number:</label>
        <input type="text" id="phone" name="tel" id="name" placeholder="Enter your phone" class="form-group col-5">
        </div>
	<br>
		<div class="form-group">
        <label for="password" class="form-group col-3">password:</label>
        <input type="password" id="password" name="password" id="name" placeholder="Enter your Password" class="form-group col-5">
	<br>
		<div class="form-group col-8 ">
		<button type="submit" name="register" class="btn btn-success">Resgister</button>
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