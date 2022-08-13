<?php

$_SERVER = "localhost";
$_USERNAME = "root";
$_PASSWORD = "";
$_DB = "connect";

$con = mysqli_connect($_SERVER,$_USERNAME,$_PASSWORD,$_DB);

if(!$con){
    die("Failed connection to database");
}



?>