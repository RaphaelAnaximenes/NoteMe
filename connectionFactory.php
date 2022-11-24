<?php

$host="localhost";
$user="root";



$link=mysqli_connect($host,$user) or die("500 - Internal Server Error");
mysqli_select_db($link,"mastereverythingdb") or die("404 - Database not found");

?>