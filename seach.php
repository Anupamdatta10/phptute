<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="search.php">
        <input type="text" name="search">
        <input type="submit" value="search">
    </form>
    <?php
     include('./dbconn.php');
    $sql="select * from to_do";
    $result=mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<div>".$row['T_id'].$row['T_Name'].$row['Status']."</div>";
    }
    ?>
</body>
</html>