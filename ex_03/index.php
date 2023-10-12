<?php
session_start();
if(isset($_GET['name'])){
    $_SESSION['name']=$_GET['name'];
}

$name = isset($_SESSION ['name']) ? $_SESSION['name'] : 'platypus';
echo"Hello $name";

?>