<?php
include("../backend/dbconnect.php");



$canceledTime = time();




$email =isset($_POST['email'])?$_POST['email']:"";

$sql="select * from customer where email = '$email'";

$result = mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$date=$row['date'];
$time=$row['time'];

$a=strtotime($date.' '. $time,time());



//$bookingtime=$row['bookingtime'];

$finaltime = $a-$canceledTime;





if($email == $row['email']){
    if($finaltime < 86400){
    $sql="UPDATE `customer` SET `status`='',`canceledTime`='$canceledTime ',`lessThan24Hours`='No' WHERE email='$email'"; 
    //echo $sql;
    $result=mysqli_query($link,$sql);
    if($result){
        echo "<script>
        
        location.href='cancelfailed.php';
        </script>";
    }
    

}else{
    $sql="UPDATE `customer` SET `status`='canceled',`canceledTime`='',`lessThan24Hours`='yes' WHERE email='$email'"; 
    //echo $sql;
    $result=mysqli_query($link,$sql);
    if($result){
        echo "<script>
       
        location.href='canceled.php';
        </script>";
    }
}

}else{
    echo "<script>
    alert('incorrect email');
    location.href='cancel.php';
    </script>";
}






?>