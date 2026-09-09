<?php

$serverhost="localhost";
$db_user="root";
$db_password="";
$db_name="blogs";

$conn=mysqli_connect($serverhost, $db_user, $db_password, $db_name);

if(!$conn){
    die("Connection Failed : " . mysqli_connect_error());
}
?>

