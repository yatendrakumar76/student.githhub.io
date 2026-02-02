<?php
$servername="localhost";
$username="root";
$password="";
$database="yr";
$connec=mysqli_connect($servername,$username,$password,$database)or die("connection error");
if($connec)
{
    echo "connected";
}
else {
    echo "not connected";
}
?>