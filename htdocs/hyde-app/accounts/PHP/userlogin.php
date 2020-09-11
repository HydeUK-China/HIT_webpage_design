<?php
session_start();
include ('Server.php');


if(isset($_POST['login'])){
    $uname =$_POST['email'];
    $pwd =$_POST['pwd'];

    $match = "SELECT Email , Password From hit_expert_info where Email='$uname' && Password='$pwd'";
    $succ = mysqli_query($conn,$match);

    if(mysqli_num_rows($succ)){
        $_SESSION['userid'] = $uname;
        header("location:User_profile_1st_page.php");
    }
    else{
        echo "<script>alert('Invalid Username or Password.')</script>";
    }
}    



 