<?php
error_reporting(0);

$host="localhost";
$username="Rafael";
$password="";
$database="onlinebooking";

$link = mysqli_connect($host,$username,$password,$database);
if($link == false){
    header("location:sitedown.php");
}
$link->autocommit(true);

error_reporting(E_ALL);



?>
