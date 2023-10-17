<?php
session_start();
setcookie("name", "platypus", time()+12*365*3600); 
$_COOKIE['platypus_cookie'];
if(isset($_GET['name'])){
    $_SESSION['name']=$_GET['name'];
}

$name = isset($_SESSION ['name']) ? $_SESSION['name'] : 'platypus';
echo"Hello $name";

?>