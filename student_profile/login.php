<?php
$nmerr = $fnmerr = $mnmerr = $rollerr = $regerr = $seserr = $adderr = $imgerr = "";
$nm = $fnm  = $mnm = $roll = $reg = $ses = $add = $img = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty($_POST["name"])){
    $nmerr = "Name Require";
  }else{
    $nm = $_POST["name"];
  }

  if(empty($_POST["fname"])){
    $fnmerr = "Father's Name require";
  }else{
    $fnm = $_POST["fname"];
  }

  if(empty($_POST["mname"])){
    $mnmerr = "Mother name require";
  }else{
    $mnm = $_POST["mname"];
  }

  if(empty($_POST["roll"])){
    $rollerr = "Roll require";
  }else{
    $roll = $_POST["roll"];
  }

  if(empty($_POST["reg"])){
    $regerr = "Registration number require";
  }else{
    $reg = $_POST["reg"];
  }

  if(empty($_POST["session"])){
    $seserr = "Session require";
  }else{
    $ses = $_POST["session"];
  }

  if(empty($_POST["add"])){
    $adderr = "Address require";
  }else{
    $add = $_POST["add"];
  }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>



    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

        <div class = "outer">

        
         <div class = "input"> <div class="sub">Name :</div> <input type="text" name="name" placeholder ="<?php  echo $nmerr; ?>"></div><br>
       
        <div class = "input"><div class="sub">Father's Name : </div> <input type="text" name="fname" placeholder ="<?php  echo $fnmerr; ?>"></div><br>
        <div class = "input"><div class="sub">Mother's Name : </div><input type="text" name="mname" placeholder ="<?php  echo $mnmerr; ?>"></div><br>
        <div class = "input"><div class="sub">Roll : </div><input type="number"  name="roll" placeholder ="<?php  echo $rollerr; ?>"></div><br>
        <div class = "input"><div class="sub">Registration : </div><input type="number" name="reg" placeholder ="<?php  echo $regerr; ?>"></div><br>
        <div class = "input"><div class="sub">Session : </div><input type="number" name="session" placeholder ="<?php  echo $seserr; ?>"></div><br>
        <div class = "input"><div class="sub">Address : </div><input type="text" name="add" placeholder ="<?php  echo $adderr; ?>"></div><br>
        <div class = "input">Image : <input type="file"  name="fileToUpload"></div><br>
        <div class = "input"><input type="submit"></div>

    

        </div>

        
    </form>
   
</body>
</html>

<?php
//print_r($_FILES["fileToUpload"]);

$filename = $_FILES["fileToUpload"]["name"];
$tempname = $_FILES["fileToUpload"]["tmp_name"];

$folder = "images/".$filename;

move_uploaded_file($tempname,$folder);

?>


