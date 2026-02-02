<?php 
include("conne.php");
    $Mobile=$_POST['Mobile'];
    $name=$_POST['Name'];
    $query= mysqli_query($connec," SELECT * FROM yrl WHERE  Mobile='$Mobile' && Name='$name' ");
   if(mysqli_num_rows($query)>0);{
    $userdata=mysqli_fetch_array($query);
    $_SESSION['userdata']=$userdata;
     echo '
    <Script>
    window.location="../dashboard.php";
    </Script>
    ';
   }
?>