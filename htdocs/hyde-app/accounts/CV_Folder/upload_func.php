<?php
$host = "localhost";
$username = "root";
$userpwd = "";
$dbname = "hit_applicant_database";

//connection 
$conn = mysqli_connect($host,$username,$userpwd,$dbname);

if(isset($_POST['submit']))
{
    $name = $_POST['title'];
    $file = array('txt');
    $temp = explode(".", $_FILES['myfile']['name']);
    $extension = end($temp);
    $upload = $_FILES['myfile']['name'];
    move_uploaded_file($_FILES['myfile']['tmp_name'],"Document/".$_FILES['myfile']['name']);



    //created query name
    $match = "SELECT name From testing_file WHERE name='$name' ";
    $query = mysqli_query($conn,$match);

     //created query file
     $matchfile = "SELECT file From testing_file WHERE file='$upload' ";
     $query2 = mysqli_query($conn,$matchfile);

    if(mysqli_num_rows($query) > 0){
        echo "<h2>user existed</h2>";
        die();
    }
    if(mysqli_num_rows($query2) > 0){
            echo "<script>alert('file existed')</script>";
            die();            
        }
    if(mysqli_num_rows($query) && mysqli_num_rows($query2) ==0 )
        {
            $insert = "INSERT into testing_file(name,file) VALUES('$name','$upload')";
        $queryin = mysqli_query($conn,$insert);
        echo"Done";
        }

    
    }
    