<?php
require('../backend/dbconnect.php');


$name=isset($_POST['name'])?$_POST['name']:"";







$email=isset($_POST['email'])?$_POST['email']:"";
$type=isset($_POST['type'])?$_POST['type']:"";
$motivation=isset($_POST['motivation'])?$_POST['motivation']:"";
$date=isset($_POST['date'])?$_POST['date']:"";
$time=isset($_POST['time'])?$_POST['time']:"";
$bookingtime = time();









    
$sql="INSERT INTO `customer`( `name`, `email`, `type`, `motivation`, `date`,`time`,`bookingtime`) 
VALUES ('$name','$email','$type','$motivation','$date','$time','$bookingtime')"; 

$result=mysqli_query($link,$sql);
if($result){
    echo "<script>
    alert('Congratulations,You have booked successfully');
    location.href='cancel.php';
    </script>";
}









?>

