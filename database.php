<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "healthcarebd";
$connection = "";

try{
$connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name,3309);
}
catch(mysqli_sql_exception){
    echo "Could not connect <br>";
}

if (!$connection){
    echo 'connection failed!';
}
?>