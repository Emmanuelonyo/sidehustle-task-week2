<?php

include('session.php');


if (!isset($_SESSION['email']) && !isset($_SESSION['password'])){

  header('Location: register.php');
  

}else if (md5($_SESSION['email'],$_SESSION['password']) !== $_SESSION['access']){

  header('Location: login.php');
 }else{

    $code = rand(78854,00054);

    $sid = $_SESSION['access'].'/'.$code;
  
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
</header>


    <div class="card" style="width: auto; " align='center'>
    <br>
    <div class="card-header text-color green align center"><h2 align="center">WELCOME! <?php echo $fname .' '.$lname ?> </h2></div>
    
  
  <div class="card-body">
  
  
    
  </div>
    
    
    </div>
    <!-- javascript goes here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.jsss"></script>
</body>
</html>