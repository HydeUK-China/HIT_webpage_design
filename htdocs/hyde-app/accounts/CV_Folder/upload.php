<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="upload_func.php" method="post" enctype="multipart/form-data">
        <label>name:</label>
        <input type="text" name="title">

        <label>images/file upload: </label>
        <input type="file" name="myfile">
        <input type="submit" value="Upload" name="submit">

    </form>
</body>

</html>