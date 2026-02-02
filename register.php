<?php 
include("conne.php");
$Name=$_POST['Name'];
$Fname=$_POST['Fname'];
$Mobile=$_POST['Mobile'];
$Address=$_POST['Address'];
$College=$_POST['College'];
$insert=mysqli_query($connec,  "INSERT  INTO yrl(Name,Fname,Mobile,Address,College) VALUES('$Name','$Fname','$Mobile','$Address','$College')");
if($insert){
    echo '
    <script>
    alert("registration successfull");
    </script>
    ';
}
else {
    echo '
    <script>
    alert("registration not successfull");
    window.location="../routes/index.html";
    </script>
    ';

}

?>