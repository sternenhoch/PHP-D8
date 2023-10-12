<?php
$name = htmlspecialchars($_GET["name"]) . '!';
if ($name ==""){
    echo "Hello platypus";
} else {
    echo "Hello ". $name;
}
?>