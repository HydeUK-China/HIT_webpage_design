<?php

$host     = "expertdb.cwhivqtuvfvm.eu-west-2.rds.amazonaws.com";
$port     = 3306;
$socket   = "";
$user     = "hydeuk";
$password = "Shree123456";
$dbname   = "ExpertDatabase";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

$query = "SELECT *
          FROM   Applicant_Information";
          $output = mysqli_query($con,$query);

if ($output) {

    while ($row = mysqli_fetch_assoc($output)) {
        $id = $row['applicant_id'];
        $title = $row['Title'];
        $name = $row['First_Name'];
        $lname = $row['Last_Name'];
        $expertise = $row['Expertise'];
        $researchfield = $row['Research_Field'];


        echo "<table>";
echo"<tr>
    <td>" .$id ."</td>
    <td>".$title ."</td>
    <td>".$name ."</td>
    <td>"
        .$lname ."</td>
    <td>" .$expertise ."</td>
    <td>".$researchfield ."</td>
</tr>";
echo"</table>";
}

}
?>