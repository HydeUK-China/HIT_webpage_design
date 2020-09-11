<?php

// assigning connection
$localhost = "localhost";
$username = "root";
$userpassword = "";
$databasename = "hit_applicant_database";


//create connection

$conn = new mysqli($localhost,$username,$userpassword,$databasename);

//errors checking 
if($conn->connect_error){
    die("Connection Failed.". $conn->connect_error);
}
?>