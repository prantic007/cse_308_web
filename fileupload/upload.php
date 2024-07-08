<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "#" method = "POST" enctype = "multipart/form-data">

     <input type = "file" name = "fileupload">
     <input type = "submit">

    </form>
</body>
</html>

<?php
//print_r($_FILES["fileupload"]);
 $filename = $_FILES["fileupload"]["name"];
 //echo $filename;
 $tempname = $_FILES["fileupload"]["tmp_name"];
 $folder = "".$filename;
 echo $folder;

 move_uploaded_file($tempname,$folder);

?>