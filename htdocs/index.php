<?php

$out = ""; 
if(isset($_FILES['img'])) {
    $out= "Success";
    
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing form
    </title>

    <style>
        .container {
            width: 100%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }

        .form-php {
            position: relative;
            height: 80vh;
        }

        .form {
            position: relative;
            left: 40%;
            border: 1px solid black;
            margin: 3rem 2rem;
            padding: 5rem;
        }
    </style>
    

</head>

<body>
    <div class="container">
        <form action="index.php" class="form-php" method="POST">

            <table class="form">
                <tr>
                    <td>
                        <h2>Testing Form</h2>
                    </td>
                </tr>
                <tr>
                    <td><label>Name</label><br>
                        <input type="text" placeholder="name" name="name" required></td>
                </tr>
                <tr>
                    <td><label>Email</label><br> <input type="email" placeholder="abc@gmai.com" name="email" required></td>
                </tr>
                <tr>
                    <td><label>File</label><br> <input type="file" name="img"></td>
                </tr>

                <tr>
                    <td><label>Password</label><br> <input type="password" name="pwd" required></td>
                </tr>







                </tr>
                <tr>
                    <td><button type="submit" value="submit" name="submit">submit</button></td>
                </tr>

                <?php
                echo $out;
                ?>
            </table>
        </form>
    </div>
</body>

</html>