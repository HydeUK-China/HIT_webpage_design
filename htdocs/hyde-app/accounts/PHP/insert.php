<?php
include ('Server.php');

if(isset($_POST['register'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$tel = $_POST['tel'];
$file = array('txt');
$temp = explode(".", $_FILES['cvfile']['name']);
$extension = end($temp);
$cvupload = $_FILES['cvfile']['name'];
move_uploaded_file($_FILES['cvfile']['tmp_name'],"CV_Folder/".$_FILES['cvfile']['name']);

$error = array();

if(empty($fname)){
    $error['fname_error'] = "First Name Required.";
}

if(empty($lname)){
    $error['lname_error'] = "Last Name Required.";
}

if(empty($email)){
    $error['email_error'] = "Email Required.";
}

if(empty($pwd)){
    $error['pwd_error'] = "Password Required.";
}

if(empty($tel)){
    $error['tel_error'] = "Contact Number Required.";
}

if(empty($cvupload)){
    $error['cvfile_error'] = "CV Required.";
}

//if no error
if(count($error) == 0){
    $insert = "INSERT INTO `hit_expert_info`( `First_Name`, `Last_Name`, `Email`, `Password`, `Phone_no`, `CV`) VALUES ('$fname','$lname','$email','$pwd','$tel','$cvupload')";
    $output = mysqli_query($conn,$insert);

if($output){
    echo"<script>alert('Successfully Registered.')</script>";
}else{
    echo "<script>alert('Failed to register, Try Again.')</script>";
}
}

}