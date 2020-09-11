<?php

// assigning connection
$localhost = "expertdb.cwhivqtuvfvm.eu-west-2.rds.amazonaws.com";
$username = "hydeuk";
$userpassword = "Shree123456";
$databasename = "ExpertDatabase";

//create connection

$conn = new mysqli($localhost,$username,$userpassword,$databasename);

//errors checking 
if($conn->connect_error){
    die("Connection Failed.". $conn->connect_error);
}
?>
