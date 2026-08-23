<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bcaecommerce";

$conn = mysqli_connect($host, $user,$password,$db);
if(!$conn){
    die("DataBase not conneteced");
}

?>