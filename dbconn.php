<?php
$dbname='test';
$dbuser='root';
$password='';
$servername='localhost';
$conn = mysqli_connect($servername, $dbuser, $password,$dbname);
if($conn)
{
    echo "connection successful!<br>";

}
else{
    echo "connection error". mysqli_connect_error();
}
?>