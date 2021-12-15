<?php
include('./dbconn.php');
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$address1=$_POST["address1"];
$address2=$_POST["address2"];
$sql="INSERT INTO signupinfo (name,email,phone,password,address1,address2)VALUES ('$name','$email','$phone','$password','$address1','$address2')";
$result=mysqli_query($conn, $sql);
   if($result){
   echo "insert successful<br>";
   echo "<a href='./index.php'>login</a>";
   }
   else
   echo "error!!";
    
    ?>
