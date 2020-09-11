<?php 
if(isset($_POST['save'])){
   $dob = $_POST['dob'];
   $nationality = $_POST['country'];
   $expertise = $_POST['expertise'];
   $professional_field = $_POST['professional_field'];


   $sql = "UPDATE hit_expert_info SET `D.O.B`='$dob',`Nationality`='$nationality',`Expertise`='$expertise', `Professional_field`='$professional_field' WHERE `First_Name`='$fname'";
   $update = mysqli_query($conn,$sql);

if($update){
   header("location:User_profile_2nd_page.php");
}else{
   echo "<script>alert('Failed to Save, Try Again.')</script>";
}

}