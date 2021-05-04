<?php
include ('../connect.php'); 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
//$RepeatPassword = $_POST['Repeat Password'];

$sql="INSERT INTO signup (username , email , password) VALUES ('$username' , '$email' ,'$password' )";
$result = $connect->query($sql);
header('Location: http://localhost/form project/nextsignup.php');  