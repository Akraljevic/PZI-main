<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="pzi";
error_reporting(-1);

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);

if ($mysqli -> connect_errno) {
    echo "Connection not found";
    exit();

 } else {
     echo "Connection found";
 }
?>