<?php 
include ("PHP/Server.php");
include ("PHP/userlogin.php");

$uname = $_SESSION['userid'];

$query = "SELECT * from hit_expert_info WHERE `Email`='$uname'";
$output = mysqli_query($conn,$query);

if(mysqli_num_rows($output)==1){
   while($row = mysqli_fetch_assoc($output)){
      $applicant_id = $row['Applicant_ID'];
      $fname = $row['First_Name'];
      $lname=  $row['Last_Name'];
      $email = $row['Email'];
      $tel = $row['Phone_no'];
      $cvfile = $row['CV'];
      $dob= $row['D.O.B'];
      $nationality=$row['Nationality'];
      $expertise= $row['Expertise'];
      $professional=$row['Professional_field'];
      $edu= $row['Education_History'];
      $work= $row['Working_History'];
      $project= $row['Project'];
      $patent=$row['Patents'];
      $fieldspeciality=$row['Field_of_Speciality'];
      $awards= $row['Awards'];
      $products= $row['Products'];
      $publication= $row['Publication_Date'];
      $researchproject= $row['Recent_Research_project'];
      $projectproposal= $row['Collaborative_project'];

   }
}
else{
   echo "No records.";
}