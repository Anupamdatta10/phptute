
<?php
session_start();
if(isset($_SESSION["login"]))
{
    $x=array("name"=>"anupam","address"=>"baruipur","phno"=>"8961288148");//associative array
    $i=0;
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
