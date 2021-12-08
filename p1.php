
<?php
session_start();
if(isset($_SESSION["login"]))
{
    $x=array("name"=>"anupam","address"=>"baruipur","phno"=>"8961288148");//associative array
    $i=0;
    // $date=date("j")+"/"+date("m")+"/"+date("y");
    // echo "logged in at".$date;
    echo date("l jS \of F Y h:i:s A");
    echo "<br>";
    foreach($x as $i=>$j)
    {
        echo "$i:$j<br>";
    }
    echo "<a href='http://localhost/nirveek/logout.php'>logout</a>";
}else
{
    echo "please logn";
}

?>
