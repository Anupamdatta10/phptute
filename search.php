<?php
session_start();
include('./dbconn.php');
$name=$_POST["name"];
$phno=$_POST["phno"];

$sql="select * from contact where name='$name' and ph_no='$phno'";
$result=mysqli_query($conn, $sql);
$url='http://localhost/nirveek/p1.php';
//echo mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0)
{
    echo 'login successful';
    $_SESSION["login"]="login success";
    header('Location: '.$url);

}
else
{   session_destroy();
    echo 'login failed';
}

?>