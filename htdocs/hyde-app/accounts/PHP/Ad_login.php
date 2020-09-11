<?php
session_start();
include ('Server.php');


if(isset($_POST['login'])){
    $uname =$_POST['uname'];
    $pwd =$_POST['pwd'];

    $match = "SELECT `Username`, `Password` From `Admin` where `Username`='$uname' && `Password`='$pwd'";
    $succ = mysqli_query($conn,$match);
   

 if(mysqli_num_rows($succ)){
     $_SESSION['userid'] = $uname;
     header("location:admin/admin_dashboard.php");
 }
 else{
     echo "<script>alert('Invalid Username or Password.')</script>";
 }
}