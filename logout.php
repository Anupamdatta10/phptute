<?php
session_start();
$url='http://localhost/nirveek/index.php';
echo "logout";
session_destroy();
//header('Location: '.$url);
?>