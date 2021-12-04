<h1>ans</h1>
    <?php
    include('./dbconn.php');
    $name=$_POST["name"];
    $phno=$_POST["phno"];
    $sql="INSERT INTO contact (name,ph_no)VALUES ('$name','$phno')";
   
    $result=mysqli_query($conn, $sql);
   if($result)
   echo "insert successful";
   else
   echo "error!!";
    
    ?>
