<?php

$server="localhost";
$dbname="dev104";
$login="root";
$pw="";

$conn=new PDO("mysql:host=$server;dbname=$dbname",$login,$pw);
$conn->exec("set names utf8mb4");

?>