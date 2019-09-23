<?php  
include("../backend/dbconnect.php");



$date = $_GET['date'];





$sql="select time from customer where date = '$date'";

$result = mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);

var_dump($row);








?>