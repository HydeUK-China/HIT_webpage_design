<?php
include ('PHP/Server.php');
include ('user_profile.php');
include ('user_profile_sec1.php');

if(isset($_POST['update'])){
    $edu = $_POST['education'];
    $work = $_POST['working'];
    $patent = $_POST['patent'];
    $projects = $_POST['projects'];
    $fieldspeciality = $_POST['fieldofspecialty'];
    $awards = $_POST['awards'];
    $products = $_POST['products'];
    $publication = $_POST['pd'];
    $recentproject = $_POST['rmrp'];
    $projectproposal = $_POST['cpp'];

    $sql = "UPDATE hit_expert_info SET `Education_History`='$edu', `Working_History`='$work', `Project`='$projects', `Patents`='$patent', `Field_of_Speciality`='$fieldspeciality', `Awards`='$awards', `Products`='$products', `Publication_Date`='$publication', `Recent_Research_project`='$recentproject', `Collaborative_project`='$projectproposal' WHERE `Email`='$email'";
    $update = mysqli_query($conn,$sql);
    
    if($update){
        header("location:User_profile_summary_page.php");
     }
     else
     {
        echo "<script>alert('Failed to Save, Try Again.')</script>";
     }

}