<?php 
session_start();
if(!isset($_SESSION['userdata'])){
header("location:../");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iimt college</title>
</head>
<body>
    <h1>welcome my website </h1>
   <div class="headsection">
    <button id="backbtn">back</button>
    <button id="logoutbtn">logout</button>
   </div> 
</body>
</html>