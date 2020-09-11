<?php

include('dbconnection.php');


$outcome = "";
if(isset($_FILES['file'])){
    $outcome = "Nice";

    var_dump($_FILES['file']);

}
?>



