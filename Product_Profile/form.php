<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="out">
        <form class="in"  action = "#" method = "POST"  enctype = "multipart/form-data" >
            <div class="head">
                <p class="pera">Product Profile</p>
            </div>
            <div class="feild">
                <div class="sub">ID : </div>
                <div class="input"><input  class="input" type="number" name="id"></div>
            </div>
            <div class="feild">
                <div class="sub">Product Name : </div>
                <div class="input"><input  class="input"  type="text" name="pname"></div>
            </div>
            <div class="feild">
                <div class="sub">Size : </div>
                <div class="input"><input  class="input"  type="number" name="size"></div>
            </div>
            <!-- <div class="feild">
                <div class="sub">Description : </div>
                <div class="input"><textarea  cols="50" rows="5" name="desc"></div>
            </div> -->
            <div class="feild">
                <div class="sub">Price : </div>
                <div class="input"><input  class="input"  type="number" name="price"></div>
            </div>
            <div class="feild">
                <div class="sub">Image : </div>
                <div class="input"><input  class="input"  type="file" name="image"></div>
            </div>
            <div class="submit">
                <input  class="inersub"  type="submit" name="submit" value="submit">
            </div>

        </form>
    </div>
</body>
</html>


<?php

  $name = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];

  $folder = "images/".$name;
  move_uploaded_file($tempname,$folder);

$servername = "localhost";
$username = "root";
$password = "";
$database = "product_profile";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


$id = $_POST["id"];
$name = $_POST["pname"];
$size = $_POST["size"];
$price = $_POST["price"];


$sql = "INSERT INTO `tb`(`id`, `name`, `size`, `price`, `image`) 
VALUES (2,"jhfj",23,213,"erwt.jpg")";

// if ($conn->query($sql) === TRUE) {
//     echo "record inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>