<?php

include('dbconnection.php');

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$dob = $_REQUEST['dob'];
$email = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];
$note = $_REQUEST['note'];

//inserting data to table 
$insert = mysqli_query($connection,"INSERT INTO `testing_form`(`First_Name`, `Last_Name`, `dob`, `email`, `pwd`) VALUES ('$fname','$lname','$dob','$email','$pwd')") or die(mysqli_error($connection));

mysqli_close($connection);

header("location: index.php?note=success");

if($note == 'success'){
    echo "<script>alert('Successfully registered')</script>";
}else{
    echo "<script>alert('You have an error')</script>";
}


