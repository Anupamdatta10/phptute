<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $x=array(array("name"=>"anupam","address"=>"baruipur","phno"=>"8961288148")
    ,array("name"=>"nirveek","address"=>"baruipur","phno"=>"987654565"));

    // $l=count($x);
    // echo "$l<br>";
    for($i=0;$i<count($x);$i++)
    {?>
    <div class="d1">
            <?php
            foreach($x[$i] as $j=>$k)
            {
                echo "$j:$k ";
            }
            ?>
    </div>
    <?php
    }
    include('p1.php')
    ?>
</body>
</html>

