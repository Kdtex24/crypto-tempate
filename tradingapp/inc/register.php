<?php 
require_once('db.php');

//Code for Registration 
if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pwd'];
    $enc_password=$password;
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users (name,username,email,pwd) values('$name','$username','$email','$enc_password')");

if($msg)
{
    echo "<script>alert('Register successfully');</script>";
}
}
}