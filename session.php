<?php
session_start();

$fname = $_SESSION['fname'] ;
$lname = $_SESSION['lname'] ;
$email = $_SESSION['email']  ;
$phone = $_SESSION['tel']  ;
$password = $_SESSION['password']  ;


if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])){

   header('Location: register.php');
}


?>