<?php
session_start();
include('./dbconn.php');
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

$sql="select * from signupinfo where email='$email' and password='$password'";
$result=mysqli_query($conn, $sql);
$url='http://localhost/nirveek/p1.php';
//echo mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0)
{
    echo 'login successful';
    $_SESSION["login"]="login success";
    // header('Location: '.$url);

}
else
{   session_destroy();
    echo 'login failed';
}

?>