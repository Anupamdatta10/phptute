<?php
    include('./dbconn.php');
?>
<html>
    <body>

<?php
$search=$_REQUEST['search'];

$sql="select * from to_do where T_Name like '$search'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>=1){
   
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<div>".$row['T_id'].$row['T_Name'].$row['Status']."</div>";
    }
}
else
{
    echo "no data found";
}
?>

</body>
</html>
